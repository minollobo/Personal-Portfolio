const menu_btn = document.querySelector(".ph-ham");
const mobile_menu = document.querySelector(".mobile-nav");
const nav_links = document.querySelectorAll('.nav-link');

menu_btn.addEventListener("click", function() {
    menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
} );


nav_links.forEach((item) => {
    item.addEventListener('click', () => {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    })
})