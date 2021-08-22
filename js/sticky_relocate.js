window.onscroll = function() { 
    stickyHeader() 
  }; 
  var header = document.getElementById("mainbar"); 
  var sticky = header.offsetTop + header.offsetHeight; 
  
  function stickyHeader() { 
    if (window.pageYOffset > sticky - 100) { 
      header.classList.add("sticky"); 
    } else { 
      header.classList.remove("sticky");
    }
  }