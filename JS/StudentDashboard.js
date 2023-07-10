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

    var div = document.getElementById("col2");
    div.style.display = "none";

    var div = document.getElementById("col1");
    div.style.display = "block";

    var col2element = document.getElementById("col10");

    var newClassNamecol2 = "col-11 content container p-4 col11edit";
    col2element.className = newClassNamecol2;

    var div1 = document.getElementById("smalltobig");
    div1.style.display = "block";

    var div = document.getElementById("resimage");
    div.style.display = "none";
}

function smalltobig() {

    var div = document.getElementById("col2");
    div.style.display = "block";

    var div = document.getElementById("col1");
    div.style.display = "none";

    var col2element = document.getElementById("col10");
    var newClassNamecol2 = "col-10 container p-4 content col10edit";
    col2element.className = newClassNamecol2;

    var div = document.getElementById("resimage");
    div.style.display = "none";
}

function handleWindowWidth() {
    var windowWidth = window.innerWidth;

    // Code to execute based on the window width
    if (windowWidth < 580) {

        var div = document.getElementById("col1");
        div.style.display = "none";

        var div = document.getElementById("col2");
        div.style.display = "none";

        var col2element = document.getElementById("col10");
        var newClassNamecol2 = "container-fluid navbotcol";
        col2element.className = newClassNamecol2;

        var div = document.getElementById("navbott");
        div.style.display = "block";

        var div = document.getElementById("resimage");
        div.style.display = "block";

    } else if (windowWidth < 1336) {

        var div = document.getElementById("col2");
        div.style.display = "none";

        var div = document.getElementById("col1");
        div.style.display = "block";


        var col2element = document.getElementById("col10");
        var newClassNamecol2 = "col-11 container p-4 content col11edit";
        col2element.className = newClassNamecol2;

        var div1 = document.getElementById("smalltobig");
        div1.style.display = "none";

        var div = document.getElementById("navbott");
        div.style.display = "none";

        var div = document.getElementById("resimage");
        div.style.display = "none";
    } else {
        var div = document.getElementById("col2");
        div.style.display = "block";

        var div = document.getElementById("col1");
        div.style.display = "none";

        var col2element = document.getElementById("col10");
        var newClassNamecol2 = "col-10 container p-4 content col10edit";
        col2element.className = newClassNamecol2;

        var div = document.getElementById("navbott");
        div.style.display = "none";

        var div = document.getElementById("resimage");
        div.style.display = "none";
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


function dashborad() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StudentFirstpageDashboard.php", true);
    xhttp.send();
    
}

function Course() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/", true);
    xhttp.send();
}

function webiner() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/Webinar.php", true);
    xhttp.send();
}

function profile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StudentProfile.php", true);
    xhttp.send();
}


function openwebinardetails() {
    $('#webinardetail').modal('show');
}


function closeModals() {
   $('#webinardetail').modal('hide')

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