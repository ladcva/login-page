function pageRedirect(){
    var delay = 4000; // time in milliseconds
   
    // Display message
    document.getElementById("message").innerHTML = "Please wait, you are redirecting to the new page.";
    
    setTimeout(function(){
     window.location = "https://makitweb.com";
    },delay);
    
   }