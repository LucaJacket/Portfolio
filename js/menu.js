var open = false;
var f = document.getElementById('fl');
var s = document.getElementById('sl');
var t = document.getElementById('tl');
var m = document.getElementById('menu');
var sidelinks = document.getElementById('sidelinks');
var sideback = document.getElementById('sideback');
var nav = document.getElementsByClassName('nav')[0];

function menu() {
  if (open) {
    // Close
    sidelinks.style.top = - sidelinks.offsetHeight + "px";
    sideback.style.transition = "opacity 0.3s ease, top 0s 0.3s ease";
    sideback.style.top = "-10000px";
    sideback.style.opacity = "0";
    // sideback.style.display = "none";
    f.style.transform = "scaleX(1)";
    s.style.transform = "scaleX(1)";
    t.style.transform = "scaleX(1)";
    open = false;
  } else {
    // Open
    sidelinks.style.top = nav.offsetHeight + "px";
    sideback.style.transition = "opacity 0.3s ease";
    sideback.style.top = "0";
    sideback.style.opacity = "0.75";
    // sideback.style.display = "block";
    var tr = (m.offsetHeight - s.offsetHeight) / 2;
    f.style.transform = "translateY(" + tr + "px) rotateZ(45deg)";
    s.style.transform = "scaleX(0)";
    t.style.transform = "translateY(-" + tr + "px) rotateZ(-45deg)";
    open = true;
  }
}
