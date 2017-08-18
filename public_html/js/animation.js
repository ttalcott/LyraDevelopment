// author: Kai Garrott <kai@lyradevelopment.com>

var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight*.95);
document.getElementById('container').insertBefore(renderer.domElement, document.getElementById('overlay'));

var scene = new THREE.Scene();
var lightingFinished = false;

var fov = 75;
var aspect = window.innerWidth / window.innerHeight*.95;
var nearClippingPlane = 0.1;
var farClippingPlane = 5000;
var camera = new THREE.PerspectiveCamera( fov, aspect, nearClippingPlane, farClippingPlane );
camera.position.set( 0, 0, 3000 );

var particles = 50000;
var positions = new Float32Array(particles * 3);
var geometry = new THREE.BufferGeometry();

for ( var i = 0; i < positions.length; i += 3 ) {

    var randomDirection = new THREE.Vector3(Math.random() - 0.5, Math.random() - 0.5, Math.random() - 0.5).normalize();

    randomDirection.multiplyScalar(500);

    positions[ i ]     = randomDirection.x;
    positions[ i + 1 ] = randomDirection.y;
    positions[ i + 2 ] = randomDirection.z;

}

geometry.addAttribute( 'position', new THREE.BufferAttribute( positions, 3 ) );

var loader = new THREE.TextureLoader();
var particleMap = loader.load('../images/circle.png');

var material = new THREE.PointsMaterial({
    color: 0xffffff,
    size: 8,
    map: particleMap,
    blending: THREE.AdditiveBlending,
    transparent: true
});

particleSystem = new THREE.Points( geometry, material );
scene.add( particleSystem );

window.addEventListener( 'resize', onWindowResize, false );

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight*.95;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight*.95 );
}

var backdrop;
var constellation;
var yRotationSpeed = -0.3;
var approachSpeed = 17;
var vecs = geometry.attributes.position.array;

function animate() {
    requestAnimationFrame(animate);

    particleSystem.rotation.z += yRotationSpeed;
    particleSystem.rotation.y += yRotationSpeed;

    if(camera.position.z >= 800) {
        camera.position.z -= approachSpeed;

    }
    if (camera.position.z >= 1700 && camera.position.z <= 1900) {

        for(var i = 0; i < vecs.length; i ++) {
            vecs[i] *= 1.1;
        }
        yRotationSpeed *= .63;
        geometry.attributes.position.needsUpdate = true;
    }

    if(camera.position.z <= 1700 && !backdrop) {

        var backdropMaterial = new THREE.MeshLambertMaterial({color: 0x555555});
        backdrop = new THREE.Mesh(new THREE.PlaneGeometry(9000, 5000), backdropMaterial);
        backdrop.position.z = -2000;

        var pointMap = particleSystem.geometry.attributes.position.array;

        var vector1 = new THREE.Vector3(/*Math.random(), Math.random(), Math.random()*/0,-100,100).normalize();
        vector1.multiplyScalar(1500);

        var vector2 = new THREE.Vector3(vector1.x - 150, vector1.y, vector1.z);
        var vector3 = new THREE.Vector3(vector2.x, vector2.y + 250, vector2.z);
        var vector4 = new THREE.Vector3(vector3.x - 150, vector3.y, vector3.z);
        var vector5 = new THREE.Vector3(vector4.x - 150, vector4.y + 75, vector4.z);

        var len = pointMap.length;

        for(i = len - 1; i > len - 600; i -= 15) {
            pointMap[i - 14] = vector5.x + ((Math.random() - 0.5) * 8);
            pointMap[i - 13] = vector5.y + ((Math.random() - 0.5) * 8);
            pointMap[i - 12] = vector5.z + ((Math.random() - 0.5) * 8);
            pointMap[i - 11] = vector4.x + ((Math.random() - 0.5) * 8);
            pointMap[i - 10] = vector4.y + ((Math.random() - 0.5) * 8);
            pointMap[i - 9] = vector4.z + ((Math.random() - 0.5) * 8);
            pointMap[i - 8] = vector3.x + ((Math.random() - 0.5) * 8);
            pointMap[i - 7] = vector3.y + ((Math.random() - 0.5) * 8);
            pointMap[i - 6] = vector3.z + ((Math.random() - 0.5) * 8);
            pointMap[i - 5] = vector2.x + ((Math.random() - 0.5) * 8);
            pointMap[i - 4] = vector2.y + ((Math.random() - 0.5) * 8);
            pointMap[i - 3] = vector2.z + ((Math.random() - 0.5) * 8);
            pointMap[i - 2] = vector1.x + ((Math.random() - 0.5) * 8);
            pointMap[i - 1] = vector1.y + ((Math.random() - 0.5) * 8);
            pointMap[i] = vector1.z + ((Math.random() - 0.5) * 8);
        }

        particleSystem.geometry.attributes.position.needsUpdate = true;

        var lighting = new THREE.PointLight(0x89E3FF, 0.1, 0);
        lighting.name = 'lighting';
        scene.add(backdrop, lighting);
    }

    if(camera.position.z <= 1700 && !lightingFinished) {

        lighting = scene.getObjectByName('lighting');

        if(lighting && (lighting.intensity < 0.7)) {
            lighting.intensity += 0.005;
        }

        if(lighting && (lighting.intensity >= 0.7)) {
            lightingFinished = true;
        }
    }

    if(camera.position.z < 950 && camera.position.z > 800 && approachSpeed > 1) {
        approachSpeed *= .9;
    }

    renderer.render(scene, camera);
}

animate();
