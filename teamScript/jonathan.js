document.addEventListener("DOMContentLoaded", function() {
  var jantung = document.getElementById("jantung");
  var paru_paru = document.getElementById("paru_paru");
  var hati = document.getElementById("hati");
  var ginjal = document.getElementById("ginjal");
  var usus_halus = document.getElementById("usus_halus");
  var pankreas = document.getElementById("pankreas");
  var limpa = document.getElementById("limpa");
  var usus_besar = document.getElementById("usus_besar");

  jantung.style.display = "none";
  paru_paru.style.display = "none";
  hati.style.display = "none";
  ginjal.style.display = "none";
  usus_halus.style.display = "none";
  pankreas.style.display = "none";
  limpa.style.display = "none";
  usus_besar.style.display = "none";
});

function showTextJantung() {
  if (jantung.style.display === "none") {
    jantung.style.display = "block";
    jantung.style.animation = "textMove 0.5s 1";
  } else {
    jantung.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      jantung.style.display = "none";
    }, 250);
  }
}

function showTextParu_Paru() {
  if (paru_paru.style.display === "none") {
    paru_paru.style.display = "block";
    paru_paru.style.animation = "textMove 0.5s 1";
  } else {
    paru_paru.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      paru_paru.style.display = "none";;
    }, 250);
  }
}

function showTextHati() {
  if (hati.style.display === "none") {
    hati.style.display = "block";
    hati.style.animation = "textMove 0.5s 1";
  } else {
    hati.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      hati.style.display = "none";;
    }, 250);
  }
}

function showTextGinjal() {
  if (ginjal.style.display === "none") {
    ginjal.style.display = "block";
    ginjal.style.animation = "textMove 0.5s 1";
  } else {
    ginjal.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      ginjal.style.display = "none";;
    }, 250);
  }
}

function showTextUsus_Halus() {
  if (usus_halus.style.display === "none") {
    usus_halus.style.display = "block";
    usus_halus.style.animation = "textMove 0.5s 1";
  } else {
    usus_halus.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      usus_halus.style.display = "none";;
    }, 250);
  }
}

function showTextPankreas() {
  if (pankreas.style.display === "none") {
    pankreas.style.display = "block";
    pankreas.style.animation = "textMove 0.5s 1";
  } else {
    pankreas.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      pankreas.style.display = "none";;
    }, 250);
  }
}

function showTextLimpa() {
  if (limpa.style.display === "none") {
    limpa.style.display = "block";
    limpa.style.animation = "textMove 0.5s 1";
  } else {
    limpa.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      limpa.style.display = "none";;
    }, 250);
  }
}

function showTextUsus_Besar() {
  if (usus_besar.style.display === "none") {
    usus_besar.style.display = "block";
    usus_besar.style.animation = "textMove 0.5s 1";
  } else {
    usus_besar.style.animation = "textGone 0.5s 1";
    window.setTimeout(
    function remove()
    {
      usus_besar.style.display = "none";;
    }, 250);
  }
}