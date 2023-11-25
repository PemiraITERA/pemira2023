//accordion
btnToggle = document.querySelectorAll(".btn-toggle");
btnToggle.forEach((elem, pos) => {
    state = [];
    elem.addEventListener("click", function (el) {
        content = el.target.nextElementSibling;
        content.classList.toggle("opacity-0");
        content.classList.toggle("h-0");
        if (state[pos]) {
            //kondisi tutup
            elem.classList.remove("bg-main-200");
            elem.classList.add("bg-white");
            elem.classList.remove("text-white");
            elem.classList.add("text-orange-500");
            state[pos] = false;
        } else {
            //kondisi kebuka
            elem.classList.add("bg-main-200");
            elem.classList.remove("bg-white");
            elem.classList.add("text-white");
            elem.classList.remove("text-orange-500");
            state[pos] = true;
        }
    });
});
//icon
feather.replace();
