/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

var navLinks = document.getElementsByClassName("nav-link");

function setActiveLink(event) {
    // Remove 'active' class from all links
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].classList.remove("active");
    }

    // Add 'active' class to the clicked link
    event.target.classList.add("active");
}

// Attach click event listener to each link
for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", setActiveLink);
}
navLinks[0].classList.add("active");



$(document).ready(function () {
    $('.icon').click(function () {

        var col2element = document.getElementById("col2");
        var newClassNamecol2 = "col-2 sidebar colordashbord fixed-top";
        col2element.className = newClassNamecol2;

        var col10element = document.getElementById("col10");
        var newClassNamecol10 = "col-10 content";
        col10element.className = newClassNamecol10;

        var buttonelement = document.getElementById("clickingbutton");
        var newClassNamebutton = "navbar-toggler icon";
        buttonelement.className = newClassNamebutton;

        var buttonelement = document.getElementById("logo");
        var newClassNamebutton = "logo";
        buttonelement.className = newClassNamebutton;

        var div = document.getElementById("dash");
        div.style.display = "block";
        var div = document.getElementById("dash1");
        div.style.display = "block";
        var div = document.getElementById("dash2");
        div.style.display = "block";
        var div = document.getElementById("dash3");
        div.style.display = "block";

        var div = document.getElementById("Coincard");
        div.style.display = "block";
        var div = document.getElementById("loggedout");
        div.style.display = "block";
        var div = document.getElementById("hr2");
        div.style.display = "block";
        var div = document.getElementById("navbarcolor");
        div.style.width = "184px";
         var div = document.getElementById("navbarcolor1");
        div.style.width = "184px";
         var div = document.getElementById("navbarcolor2");
        div.style.width = "184px";
        var div = document.getElementById("navbarcolor3");
        div.style.width = "184px";
        var div = document.getElementById("clickingbutton");
        div.style.display = "none";

    });
});


function handleWindowWidth() {
    var windowWidth = window.innerWidth;

    // Code to execute based on the window width
    if (windowWidth < 1200) {
        var col2element = document.getElementById("col2");
        var newClassNamecol2 = "sidebar colordashbord fixed-top col-1 collo";
        col2element.className = newClassNamecol2;

        var col10element = document.getElementById("col10");
        var newClassNamecol10 = "col-11 content";
        col10element.className = newClassNamecol10;

        var buttonelement = document.getElementById("clickingbutton");
        var newClassNamebutton = "navbar-toggler icon afterclick";
        buttonelement.className = newClassNamebutton;

        var logo = document.getElementById("logo");
        var newlogo = "logoafterclick";
        logo.className = newlogo;

        var div = document.getElementById("dash");
        div.style.display = "none";
        var div = document.getElementById("dash1");
        div.style.display = "none";
        var div = document.getElementById("dash2");
        div.style.display = "none";
        var div = document.getElementById("dash3");
        div.style.display = "none";

        var div = document.getElementById("Coincard");
        div.style.display = "none";
        var div = document.getElementById("loggedout");
        div.style.display = "none";
        var div = document.getElementById("hr2");
        div.style.display = "none";
        
         var div = document.getElementById("navbarcolor");
        div.style.width = "50px";
        var div = document.getElementById("navbarcolor1");
        div.style.width = "50px";

        var div = document.getElementById("navbarcolor2");
        div.style.width = "50px";

        var div = document.getElementById("navbarcolor3");
        div.style.width = "50px";
        
        var div = document.getElementById("clickingbutton");
        div.style.display = "block";
        


    } else {
        var col2element = document.getElementById("col2");
        var newClassNamecol2 = "col-2 sidebar colordashbord fixed-top";
        col2element.className = newClassNamecol2;

        var col10element = document.getElementById("col10");
        var newClassNamecol10 = "col-10 content";
        col10element.className = newClassNamecol10;

        var buttonelement = document.getElementById("clickingbutton");
        var newClassNamebutton = "navbar-toggler icon";
        buttonelement.className = newClassNamebutton;

        var buttonelement = document.getElementById("logo");
        var newClassNamebutton = "logo";
        buttonelement.className = newClassNamebutton;

        var div = document.getElementById("dash");
        div.style.display = "block";
        var div = document.getElementById("dash1");
        div.style.display = "block";
        var div = document.getElementById("dash2");
        div.style.display = "block";
        var div = document.getElementById("dash3");
        div.style.display = "block";

        var div = document.getElementById("Coincard");
        div.style.display = "block";
        var div = document.getElementById("loggedout");
        div.style.display = "block";
        var div = document.getElementById("hr2");
        div.style.display = "block";
        var div = document.getElementById("navbarcolor");
        div.style.width = "184px";
         var div = document.getElementById("navbarcolor1");
        div.style.width = "184px";
         var div = document.getElementById("navbarcolor2");
        div.style.width = "184px";
         var div = document.getElementById("navbarcolor3");
        div.style.width = "184px";
        
        var div = document.getElementById("clickingbutton");
        div.style.display = "none";
    }
}




//$(document).ready(function() {
//  $('.afterclick').click(function() {
//      
//     var col2element = document.getElementById("col2");
//        var newClassNamecol2 = "col-2 sidebar colordashbord";
//        col2element.className = newClassNamecol2;
//
//        var col10element = document.getElementById("col10");
//        var newClassNamecol10 = "col-10 content";
//        col10element.className = newClassNamecol10;
//
//        var buttonelement = document.getElementById("clickingbutton");
//        var newClassNamebutton = "navbar-toggler icon";
//        buttonelement.className = newClassNamebutton;
//
//        var buttonelement = document.getElementById("logo");
//        var newClassNamebutton = "logo";
//        buttonelement.className = newClassNamebutton;
//
//        var div = document.getElementById("dash");
//        div.style.display = "block";
//        var div = document.getElementById("dash1");
//        div.style.display = "block";
//        var div = document.getElementById("dash2");
//        div.style.display = "block";
//        var div = document.getElementById("dash3");
//        div.style.display = "block";
//
//        var div = document.getElementById("Coincard");
//        div.style.display = "block";
//        var div = document.getElementById("loggedout");
//        div.style.display = "block";
//        var div = document.getElementById("hr2");
//        div.style.display = "block";
//        var div = document.getElementById("navbarcolor");
//        div.style.width = "200px";
//         var div = document.getElementById("navbarcolor1");
//        div.style.width = "200px";
//         var div = document.getElementById("navbarcolor2");
//        div.style.width = "200px";
//         var div = document.getElementById("navbarcolor3");
//        div.style.width = "200px"; 
//      
//      });
//});




// Function to run continuously while monitoring the width changes
function runFunctionOnResize() {
    handleWindowWidth();
    // Add any additional code or function calls here
}

// Call the function initially
runFunctionOnResize();

// Attach the function to the window resize event
window.addEventListener('resize', runFunctionOnResize);



