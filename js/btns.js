const btnAte = document.getElementById("btn-ate");
const btnBllvt = document.getElementById("btn-bllv");
const btnBrnia = document.getElementById("btn-brnia");
const cajaUbicaciones = document.getElementById("ubicaciones");

const ATE_LOCATION =
  "VITARTE JAVIER PRADO Av. Prol. Javier Prado Mza A Lote 2 Urb. Porvenir Vitarte - Ate - Lima • Contamos con juegos infantiles. Horario de Atención: Lunes a domingo de 12am hasta las 8pm.";
const BLLVT_LOCATION =
  "Calle Bellavista, número 123, local 5, Norkys, en la esquina de la Avenida Principal con la Calle Los Pinos. Bellavista, distrito de Miraflores, Lima, Perú. El local está cerca del parque central y cuenta con amplio estacionamiento disponible. ¡Disfruta de la deliciosa comida de Norkys en esta ubicación conveniente!";
const BRNIA_LOCATION =
  "Avenida Tingo María, número 456, local 10, Norkys, en la intersección de la Calle Colón. Breña, distrito de Lima, Perú. El local se encuentra en una zona comercial de fácil acceso, cerca de la estación del tren y con estacionamiento disponible. ¡Ven a disfrutar de la exquisita comida de Norkys en esta ubicación céntrica de Breña!";

function createLocation(pContent) {
  const DIV = document.createElement("div");
  const P = document.createElement("p");
  const A = document.createElement("a");
  DIV.classList.add("ubicacion");

  P.textContent = pContent;

  A.classList.add("distrito__ubicacion");
  A.setAttribute("href", "https://maps.google.com");
  A.textContent = "Ver mapa";

  DIV.appendChild(P);
  DIV.appendChild(A);

  return DIV;
}

btnAte.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnBllvt.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnBrnia.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
