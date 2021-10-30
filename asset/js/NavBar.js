// Scrolling
var scrollNav = document.getElementById('navbar1');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 10 || document.documentElement.scrollTop >= 10 ) {
        scrollNav.classList.add("nav-colored");
        scrollNav.classList.remove("nav-transparent");
    } 
    else {
        scrollNav.classList.add("nav-transparent");
        scrollNav.classList.remove("nav-colored");
    }
};

// On click add text-decoration for #navbar-nav <a> tags
$('#navbar-nav li a').on('click', function() {
    $('#navbar-nav li a.active').removeClass('active');
    $(this).addClass('active');
 });
