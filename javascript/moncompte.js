function ouvertureInsc() {
  document.getElementsId("container_formulaire_ins").style.display = "block";
  document.getElementsId("valider").innerHTML = "Valider";
}
document
  .getElementById("creeruncompte")
  .addEventListener("click", ouvertureInsc);

console.log(ouvertureInsc);
