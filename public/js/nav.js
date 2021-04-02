function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

const logout = document.querySelector("#logout");
const logoutbtn = document.querySelector("#logoutbtn");
logoutbtn.addEventListener("click", () => {
    logout.classList.remove("hidden");
});
