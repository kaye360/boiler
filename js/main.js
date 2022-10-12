// Mobile Nav

const topNav = document.querySelector('.top-nav')
const navLinks = document.querySelector('.nav-links')

const navIconOpen = document.querySelector('.nav-icon-open')
const navIconClose = document.querySelector('.nav-icon-close')

navIconOpen.addEventListener('click', () => {
    topNav.classList.add('mobile-nav')
    topNav.classList.remove('mobile-menu-out')
})

navIconClose.addEventListener('click', function handler() {
    topNav.classList.add('mobile-nav-closing')

    setTimeout( () => {
        topNav.classList.remove('mobile-nav')
        topNav.classList.remove('mobile-nav-closing')
    }, 250)
})


// Mobile Nav DropDown Links

const navDropdownLinks = document.querySelectorAll('.nav-dropdown-link')


navDropdownLinks.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        link.nextElementSibling.classList.toggle('nav-links-submenu-isopen')
    })
})