var top = "a1";
function toTop(newTop) {
  domTop = document.getElementById(top).style;
  domNew = document.getElementById(newTop).style;
  domTop.zIndex = "0";
  domNew.zIndex = "10";
  top = newTop;
}
