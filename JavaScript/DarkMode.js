// GESTION DU DARK MODE.

let darkMode = localStorage.getItem("darkMode");

const mode_choice_Toggle = document.getElementById("mode");

const mode_choice_Icon = document.getElementById("modeI");

const body = document.getElementsByTagName("body");

const topArrow = document.getElementById("topImg");




const enableDarkMode = () => {

    document.body.classList.add("darkMode");

    mode_choice_Icon.className = '';
    mode_choice_Icon.classList.add("far");
    mode_choice_Icon.classList.add("fa-sun");
    mode_choice_Icon.classList.add("itLink");

    if (topArrow != null) {
        const url = "../../css-images/TopDark.png"
        topArrow.src = url;

    }

    localStorage.setItem("darkMode", "enabled");


}


const disableDarkMode = () => {
    document.body.classList.remove("darkMode");

    mode_choice_Icon.className = '';
    mode_choice_Icon.classList.add("far");
    mode_choice_Icon.classList.add("fa-moon");
    mode_choice_Icon.classList.add("itLink");

    if (topArrow != null) {
        topArrow.src = "../../css-images/topLight.png";

    }

    localStorage.setItem("darkMode", null);


}

if (darkMode === "enabled") {
    enableDarkMode();
}


mode_choice_Toggle.addEventListener("click", () => {

    darkMode = localStorage.getItem("darkMode");


    if (darkMode !== "enabled") {
        enableDarkMode();
        console.log(darkMode);
    } else {
        disableDarkMode();
        console.log(darkMode);
    }

})