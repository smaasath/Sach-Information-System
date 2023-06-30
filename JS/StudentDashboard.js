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



function bigtosmal() {
    console.log("clicked");
    var div = document.getElementById("col2");
    div.style.display = "none";

    var div = document.getElementById("col1");
    div.style.display = "block";

    var col2element = document.getElementById("col10");
    var newClassNamecol2 = "col-11 content col11edit";
    col2element.className = newClassNamecol2;
}

function smalltobig() {
    console.log("clicked");
    var div = document.getElementById("col2");
    div.style.display = "block";

    var div = document.getElementById("col1");
    div.style.display = "none";

    var col2element = document.getElementById("col10");
    var newClassNamecol2 = "col-10 content col11edit";
    col2element.className = newClassNamecol2;
}

function handleWindowWidth() {
    var windowWidth = window.innerWidth;

    // Code to execute based on the window width
    if (windowWidth < 1336) {

        var div = document.getElementById("col2");
        div.style.display = "none";

        var div = document.getElementById("col1");
        div.style.display = "block";

        var col2element = document.getElementById("col10");
        var newClassNamecol2 = "col-11 content col11edit";
        col2element.className = newClassNamecol2;

    } else {
        var div = document.getElementById("col2");
        div.style.display = "block";

        var div = document.getElementById("col1");
        div.style.display = "none";

        var col2element = document.getElementById("col10");
        var newClassNamecol2 = "col-10 content col11edit";
        col2element.className = newClassNamecol2;
    }
}

// Function to run continuously while monitoring the width changes
function runFunctionOnResize() {
    handleWindowWidth();
    // Add any additional code or function calls here
}

// Call the function initially
runFunctionOnResize();

// Attach the function to the window resize event
window.addEventListener('resize', runFunctionOnResize);