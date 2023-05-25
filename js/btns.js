const btnAte = document.getElementById("btn-ate");
const btnBllvt = document.getElementById("btn-bllv");
const btnBrnia = document.getElementById("btn-brnia");
/**relleno */
const btncall = document.getElementById("btn-call");
const btncerl = document.getElementById("btn-cerl");
const btnchorri = document.getElementById("btn-chorri");
const btncomas = document.getElementById("btn-comas");
const btnagus = document.getElementById("btn-agus");
const btnindep = document.getElementById("btn-indep");
const btnjmari = document.getElementById("btn-jmari");
const btnlvict = document.getElementById("btn-lvict");
const btnlinde = document.getElementById("btn-linde");
const btnlolivos = document.getElementById("btn-lolivos");
const btnlurin = document.getElementById("btn-lurin");
const btnmagmar = document.getElementById("btn-magmar");
const btnmiraf = document.getElementById("btn-miraf");
const btnplibre = document.getElementById("btn-plibre");
const btnppiedra = document.getElementById("btn-ppiedra");
const btnrimac = document.getElementById("btn-rimac");
const btnsborj = document.getElementById("btn-sborj");
const btnsjlurig = document.getElementById("btn-sjlurig");
const btnsjmiraf = document.getElementById("btn-sjmiraf");
const btnsluiss = document.getElementById("btn-sluiss");
const btnsmtporres = document.getElementById("btn-smtporres");
const btnsmigel = document.getElementById("btn-smigel");
const btnatanit = document.getElementById("btn-atanit");
const btnstsurc = document.getElementById("btn-stsurc");
const btnventa = document.getElementById("btn-venta");
const btnvillas = document.getElementById("btn-villas");
const btnvillamtr = document.getElementById("btn-villamtr");
/**relleno */

const cajaUbicaciones = document.getElementById("ubicaciones");

const ATE_LOCATION = "VITARTE JAVIER PRADO Av. Prol. Javier Prado Mza A Lote 2 Urb. Porvenir Vitarte - Ate - Lima • Contamos con juegos infantiles. Horario de Atención: Lunes a domingo de 12am hasta las 8pm.";
const BLLVT_LOCATION = "Calle Bellavista, número 123, local 5, Norkys, en la esquina de la Avenida Principal con la Calle Los Pinos. Bellavista, distrito de Miraflores, Lima, Perú. El local está cerca del parque central y cuenta con amplio estacionamiento disponible. ¡Disfruta de la deliciosa comida de Norkys en esta ubicación conveniente!";
const BRNIA_LOCATION = "Avenida Tingo María, número 456, local 10, Norkys, en la intersección de la Calle Colón. Breña, distrito de Lima, Perú. El local se encuentra en una zona comercial de fácil acceso, cerca de la estación del tren y con estacionamiento disponible. ¡Ven a disfrutar de la exquisita comida de Norkys en esta ubicación céntrica de Breña!";

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

/**relleno */

btncall.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btncerl.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnchorri.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btncomas.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnagus.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnindep.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnjmari.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnlvict.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnlinde.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnlolivos.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnlurin.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnmagmar.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnmiraf.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnplibre.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnppiedra.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnrimac.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnsborj.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnsjlurig.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnsjmiraf.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnsluiss.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnsmtporres.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnsmigel.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnatanit.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnstsurc.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
btnventa.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 5; i++) {
    const newLocation = createLocation(ATE_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnvillas.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 6; i++) {
    const newLocation = createLocation(BLLVT_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});

btnvillamtr.addEventListener("click", () => {
  cajaUbicaciones.innerHTML = "";
  for (let i = 0; i < 10; i++) {
    const newLocation = createLocation(BRNIA_LOCATION);
    cajaUbicaciones.appendChild(newLocation);
  }
});
/**relleno */