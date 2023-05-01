let menu_open = false;
const mobile_menu = document.getElementById("hidden-menu");
const menu_toggle = document.getElementById("menu-btn");

menu_toggle.addEventListener("click", () => {
  if (menu_open) mobile_menu.style.display = "none";
  if (!menu_open) mobile_menu.style.display = "block";
  menu_open = !menu_open;
});

