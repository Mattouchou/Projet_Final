let a = document.getElementById("Dropdown_male");
let b = document.getElementById("Dropdown_female");

function Homme() {
  if (a.style.display == "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
  }
}
function Femme() {
  if (b.style.display == "none") {
    b.style.display = "block";
    a.style.display = "none";
  } else {
    b.style.display = "none";
  }
}
