const class_block = document.getElementsByClassName("class-block");
const class_container = document.getElementById("class-container");
const bottom_of_container = class_container.getBoundingClientRect().bottom;
const top_of_container = class_container.getBoundingClientRect().top;

window.onload = function () {
  for (let i = 0; i < class_block.length; i++) {
    const block = class_block.item(i);
    const bottom_of_block = block.getBoundingClientRect().bottom;
    const top_of_block = block.getBoundingClientRect().top;
    if (
      bottom_of_container > bottom_of_block && top_of_block > top_of_container
    ) {
      block.style.opacity = 1;
    }
  }
};

class_container.addEventListener("scroll", function () {
  for (let i = 0; i < class_block.length; i++) {
    const block = class_block.item(i);
    const bottom_of_block = block.getBoundingClientRect().bottom;
    const top_of_block = block.getBoundingClientRect().top;

    if (
      bottom_of_container > bottom_of_block && top_of_block > top_of_container
    ) {
      block.animate({ "opacity": 1 }, 3000);
      block.style.opacity = 1;
    } else {
      block.animate({ "opacity": 0 }, 3000);
      block.style.opacity = 0;
    }
  }
});
