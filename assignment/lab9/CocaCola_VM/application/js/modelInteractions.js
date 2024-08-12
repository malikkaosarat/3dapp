let nview = "RotationTimer";

function cokeScene() {
    nview = 'RotationTimer';
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 0);
}

function spriteScene() {
    nview = 'SpriteRotationTimer';
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 1);
}

function pepperScene() {
    nview = 'PepperRotationTimer';
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 2);
}

//var spinning = false;

function spin_bk() {
	spinning = !spinning;
	document.getElementById('model__'+nview+axis).setAttribute('enabled', spinning.toString());
}


let spinningX = false;
let spinningY = false;
let spinningZ = false;

function spin(axis="x") {

	stopRotation()

let timerId;
let spinning;

switch(axis) {
	case 'x':
	timerId = 'model__'+nview+'X';
	spinning = spinningX = !spinningX;
	break;
	case 'y':
	timerId = 'model__'+nview+'Y';
	spinning = spinningY = !spinningY;
	break;
	case 'z':
	timerId = 'model__'+nview+'Z';
	spinning = spinningZ = !spinningZ;
	break;
	default:
	console.error('Invalid axis');
	return;
}

console.log(timerId)

document.getElementById(timerId).setAttribute('enabled', spinning.toString());
}


function stopRotation_bk() {
	spinning = false;
	document.getElementById('model__'+nview).setAttribute('enabled', spinning.toString());
}

function stopRotation() {

spinningX = false;
spinningY = false;
spinningZ = false;

document.getElementById('model__'+nview+'X').setAttribute('enabled', 'false');
document.getElementById('model__'+nview+'Y').setAttribute('enabled', 'false');
document.getElementById('model__'+nview+'Z').setAttribute('enabled', 'false');

}

function animateModel(axis = "Y") {

	const timer = document.getElementById('model__'+nview+axis);

	const isEnabled = timer.getAttribute('enabled') === 'true';

	timer.setAttribute('enabled', !isEnabled);
}

function wireFrame() {
	var e = document.getElementById('wire');
	if (e) {
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
	}
}

var lightOn = true;

function headLight() {
	lightOn = !lightOn;
	document.getElementById('headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight() {
	lightOn = !lightOn;
	document.querySelectorAll('PointLight').forEach(light => {
	light.setAttribute('headlight', lightOn.toString());
	});
	console.log(lightOn);
}

function targetLight() {
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

// function cameraFront() {
// 	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
// }

function cameraFront() {
    const camera = document.getElementById('model__CameraFront');
    if (camera) {
        // Code to position the camera at the front view
		console.log('works')
    } else {
        console.error('Element with ID "model__CameraFront" not found');
    }
}

function cameraBack() {
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight() {
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop() {
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}