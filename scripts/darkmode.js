let sessionStorage = window.sessionStorage;
let currentMode = sessionStorage.getItem("dark-mode");
var body = document.body;

console.log(currentMode);
if ((currentMode === "false") || (currentMode === null)) {
	currentMode = "light";
}

if(currentMode === "dark"){
	body.classList.toggle('dark-mode');
}


function toggle_darkmode() {
	body.classList.toggle('dark-mode')
	if (currentMode === "light") {
		currentMode = "dark";
	} else if (currentMode === "dark") {
		currentMode = "light";
	}else{
		currentMode = "light";
	}
	sessionStorage.setItem('dark-mode', currentMode);
}
