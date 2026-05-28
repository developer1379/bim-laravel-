function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function college(evt, cityName) {
  var i, righttabs, right;
  righttabs = document.getElementsByClassName("righttabs");
  for (i = 0; i < righttabs.length; i++) {
    righttabs[i].style.display = "none";
  }
  right = document.getElementsByClassName("right");
  for (i = 0; i < right.length; i++) {
    right[i].className = right[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
evt.currentTarget.className += " active";