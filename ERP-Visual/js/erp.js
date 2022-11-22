

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    let initialImg = document.getElementById("imgdrop");
    let srcTest = initialImg.includes('/ERP-Visual/images/dropclose.png');
    let newImg = {
      'true':'/ERP-Visual/images/dropopen.png', 
      'false':'/ERP-Visual/images/dropclose.png'}[srcTest];
  
    return newImg;
}
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    document.getElementById("imgdrop").src = myFunction();
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          
          openDropdown.classList.remove('show');
        }
      }
    }
    
  }


/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

