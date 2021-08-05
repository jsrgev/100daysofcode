
const playsound = (e) => {
	let sound = document.querySelector(`audio[data-key = ${e.key}]`);
	let key = document.querySelector(`div[data-key=${e.key}]`);
	key.classList.add("playing");
	// setTimeout(() =>{key.classList.remove("playing")},150);
	if (!sound) {return};
	// rewinds to start of audio, in case you hit key while it's still playing
	sound.currentTime = 0;
	sound.play();
}

document.addEventListener('keydown',playsound);

const removeTransition = (e) => {
	if (e.propertyName !== 'transform') {return;}
		console.log("run");
	e.target.classList.remove('playing');
}

let keys = document.querySelectorAll(".key");
keys.forEach(key => key.addEventListener('transitionend',removeTransition))