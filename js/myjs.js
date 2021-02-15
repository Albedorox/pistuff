function overlay_on(timer) {
  document.getElementById("overlay").style.display = "block";
  myVar = setTimeout(overlay_off, timer);
}

function overlay_off() {
  document.getElementById("overlay").style.display = "none";
}
