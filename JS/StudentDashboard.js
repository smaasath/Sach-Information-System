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



function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

