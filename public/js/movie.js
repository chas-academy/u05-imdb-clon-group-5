const openmodal = document.querySelectorAll(".modal-open");
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener("click", function (event) {
        event.preventDefault();
        toggleModal();
    });
}

const overlay = document.querySelector(".modal-overlay");
overlay.addEventListener("click", toggleModal);

const closemodal = document.querySelectorAll(".modal-close");
for (let i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener("click", toggleModal);
}

document.onkeydown = function (evt) {
    evt = evt || window.event;
    let isEscape = false;
    if ("key" in evt) {
        isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
        isEscape = evt.keyCode === 27;
    }
    if (isEscape && document.body.classList.contains("modal-active")) {
        toggleModal();
    }
};

function toggleModal() {
    const body = document.querySelector("body");
    const modal = document.querySelector(".modal");
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
    body.classList.toggle("modal-active");
}

//show user if you added movie to watchlist
const addedToWatchList = document.querySelector("#addedToWatchList");
const submitedToWatchList = document.querySelector("#submitedToWatchList");
submitedToWatchList.addEventListener("click", () => {
    addedToWatchList.classList.remove("hidden");
});
