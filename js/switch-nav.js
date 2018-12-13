var nav = document.querySelector("#navbars");
var navItems = nav.querySelectorAll(".nav-link");
var responsiveMenu = nav.querySelector("#responsive-menu");
var hamburgerNav = nav.querySelector("#hamburger-nav");
var hamburgerButton = nav.querySelector("#hamburger-button");
console.log(navItems);

// Click on hamburgerButton
hamburgerNav.addEventListener("click",activateMenu);

// We add an event listener for each nav-item
navItems.forEach(function(navItem) {
    navItem.addEventListener("click",activateItem);
});

    // Toggle menu in responsive mode
function activateMenu(event) {
    if(hamburgerButton.checked == true) {
        responsiveMenu.className = "active";
    }
    else {
        responsiveMenu.className = "";
    }
}

// Click on menu event on responsive
function activateItem(event) {
    // we put in a variable the clicked item
    var navItem = event.target;
    // First we reset to "nav-item" each item's class
    navItems.forEach(function(navItem) {
        navItem.className = "nav-link";
    });
    // Then we add the "active" class to the one that got clicked
    navItem.className += " active";

    // We toggle off menu
    hamburgerButton.checked = false;
    activateMenu();
}

// Scroll event
window.onscroll = () => {
    if(this.scrollY <= 10) {
        hamburgerNav.className = '';
     }
     else {
         hamburgerNav.className = 'active';
     }
  };