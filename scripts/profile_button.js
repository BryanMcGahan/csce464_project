let profile_menu_open = 0;
let profile_menu = document.getElementById("profile-list");

function show_or_close_profile_menu() {
	if (profile_menu_open == 1) {
		profile_menu.style.display = "none";
		profile_menu_open = 0;
	} else {
		profile_menu.style.display = "flex";
		profile_menu_open = 1;
	}
}
