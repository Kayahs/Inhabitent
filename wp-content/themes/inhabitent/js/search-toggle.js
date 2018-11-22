/**
 * Toggle Search Form Code.
 */

window.onload = function() {
  var search = document.getElementById("toggleSearch");
  var label = document.getElementById("searchLabel");
  var field = document.getElementById("searchField");

  search.onclick = function() {
    (label.classList.contains('active')) ? label.classList.remove('active') : label.classList.add('active');
    (field.classList.contains('active')) ? field.classList.remove('active') : field.classList.add('active');
    return false;
  }
}