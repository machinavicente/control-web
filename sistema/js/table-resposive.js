function setTabla(idTabla) {
  let sel = "#" + idTabla;
  let tabla = document.querySelector(sel + " table");
  //Poner alto del bloque al alto de head de la tabla ya traspuesta
  if (window.getComputedStyle(tabla).display != "table") {
    let hd = document.querySelector(sel + " thead");
    let alto = window.getComputedStyle(hd).height;
    let body = document.querySelector(sel + " tbody");
    tabla.style.height = alto;
    let botUp = document.querySelector(sel + " .botUp");
    let botDn = document.querySelector(sel + " .botDn");
    botUp.addEventListener("click", () => window.tBody.scrollBy({left: 0, top: -1, behavior: 'smooth'}));
    botDn.addEventListener("click", () => window.tBody.scrollBy({left: 0, top: 1, behavior: 'smooth'}));
    window.tBody = body;
    body.scrollTo(0, 0);
    body.cdr = 0;
  }
}

(function() {
  setTabla('dTabla')
})()