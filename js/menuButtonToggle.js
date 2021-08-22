function menuButtonToggle(x) {
    var mobile_menu = document.getElementById("mobile_menu_container");
    x.classList.toggle("change");

    if (x.classList.contains("change")) { 
      mobile_menu.classList.add("open"); 
    } else { 
      mobile_menu.classList.remove("open"); 
    }
}