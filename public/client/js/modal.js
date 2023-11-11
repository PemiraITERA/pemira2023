var modalCV = document.getElementById("modalCV");
var modalKampanye = document.getElementById("modalKampanye");
var backdrop1 = document.getElementById("Backdrop1");
var backdrop2 = document.getElementById("Backdrop2");
var btnCV = document.getElementById("btnCV");
var btnKampanye = document.getElementById("btnKampanye");
var closeBtnCV = document.getElementsByClassName("close")[0];
var closeBtnKampanye =
    document.getElementsByClassName("close")[1];

btnCV.onclick = function () {
    modalCV.style.display = "flex";
};
btnKampanye.onclick = function () {
    modalKampanye.style.display = "flex";
};
closeBtnCV.onclick = function () {
    modalCV.style.display = "none";
};
closeBtnKampanye.onclick = function () {
    modalKampanye.style.display = "none";
};
window.onclick = function (event) {
    if (event.target == modalCV) {
        modalCV.style.display = "none";
    } else if (event.target == backdrop1) {
        modalCV.style.display = "none";
    }
    if (event.target == modalKampanye) {
        modalKampanye.style.display = "none";
    } else if (event.target == backdrop2) {
        modalKampanye.style.display = "none";
    }
};