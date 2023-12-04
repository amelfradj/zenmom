let divestouvert1 = false;
function plusToMoins() {
  if (divestouvert1) {
    document.getElementById("cache1").style.display = "none";
    divestouvert1 = false;
  } else {
    document.getElementById("cache1").style.display = "block";
    divestouvert1 = true;
  }
}
document.getElementById("tiret1").addEventListener("click", plusToMoins);

let divestouvert2 = false;
function plusToMoins2() {
  if (divestouvert2) {
    document.getElementById("cache2").style.display = "none";
    divestouvert2 = false;
  } else {
    document.getElementById("cache2").style.display = "block";
    divestouvert2 = true;
  }
}
document.getElementById("tiret2").addEventListener("click", plusToMoins2);

let divestouvert3 = false;
function plusToMoins3() {
  if (divestouvert3) {
    document.getElementById("cache3").style.display = "none";
    divestouvert3 = false;
  } else {
    document.getElementById("cache3").style.display = "block";
    divestouvert3 = true;
  }
}
document.getElementById("tiret3").addEventListener("click", plusToMoins3);

/////

// var bouton = document.getElementById("reserver");
// bouton.addEventListener("click", function () {
//   // Récupérer la valeur sélectionnée
//   var choix = document.getElementsById("reserver").value;

//   // Rediriger vers la deuxième page avec le choix comme paramètre
//   window.location.href = "../html/jereserve1.html?choix=" + choix;
// });

// // Récupérer le paramètre "choix" de l'URL
// var urlParams = new URLSearchParams(window.location.search);
// var choix = urlParams.get("choix");
// // Afficher le choix sur la page
// document.body.innerHTML += "<p>Choix : " + choix + "</p>";
