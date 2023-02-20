document.getElementById("botonMenu").addEventListener("click", mostrarMenu);
document.getElementById("backMenu").addEventListener("click", ocultarMenu);

nav = document.getElementById("nav");
backgroundMenu = document.getElementById("backMenu");

function mostrarMenu(){
  nav.style.right = "0px";
  backgroundMenu.style.display = "block";
}

function ocultarMenu(){
  nav.style.right = "-250px";
  backMenu.style.display = "none";
}

