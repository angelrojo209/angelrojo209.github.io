const toggleTextoBtn = document.getElementById("toggleTextoBtn");
const texto = document.getElementById("texto");

toggleTextoBtn.addEventListener("click", () => {
  if (texto.style.display === "none") {
    texto.style.display = "block";
  } else {
    texto.style.display = "none";
  }
});

const lanzarDadoBtn = document.getElementById("lanzarDadoBtn");
const resultadoDado = document.getElementById("resultado-dado");

const puntosDado = {
  1: [5],
  2: [1, 9],
  3: [1, 5, 9],
  4: [1, 3, 7, 9],
  5: [1, 3, 5, 7, 9],
  6: [1, 3, 4, 6, 7, 9],
};

function mostrarDado(numero) {
  const puntos = document.querySelectorAll(".punto");
  puntos.forEach((punto) => punto.classList.remove("activo"));

  puntosDado[numero].forEach((id) => {
    document.getElementById("p" + id).classList.add("activo");
  });
}

lanzarDadoBtn.addEventListener("click", () => {
  const numeroDado = Math.floor(Math.random() * 6) + 1;
  resultadoDado.textContent = `El resultado del dado es: ${numeroDado}`;
  mostrarDado(numeroDado);
});
