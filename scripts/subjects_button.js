let menu_open = 0;
let menu = document.getElementById("subjects-list");

function show_or_close_menu() {		
	if(menu_open == 1){
	    menu.style.display = "none";
		menu_open = 0;
}else{
		menu.style.display = "flex";
		menu_open = 1;
	}
}

