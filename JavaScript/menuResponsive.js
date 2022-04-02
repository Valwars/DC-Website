// menu responsive téléphone.

var open_menu_button = document.getElementById("open");
var close_menu_button = document.getElementById("close");

const open_menu = () => {

    var navigation_liste = document.getElementById("navList");

    var nav = document.getElementById("navBar");

    nav.style.flexDirection = "column";

    const elements = document.querySelectorAll("li");

    Array.from(elements).forEach((element, index) => {
        element.style.textAlign = "center";

        element.style.margin = "auto";
        element.style.padding = "0px";
        element.style.marginBottom = "5%";

        console.log(element.innerHtml);

    });
    navigation_liste.style.display = "flex";
    navigation_liste.style.flexDirection = "column";
    navigation_liste.style.width = "300px";
    navigation_liste.style.margin = "auto";

    navigation_liste.style.paddingLeft = "0px";

    open_menu_button.style.display = "none";
    close_menu_button.style.display = "block";

}

const close_menu = () => {

    var navigation_liste = document.getElementById("navList");


    navigation_liste.style.display = "none";
    close_menu_button.style.display = "none";
    open_menu_button.style.display = "block";

    var nav = document.getElementById("navBar");

    nav.style.flexDirection = "row"

}


open_menu_button.addEventListener("click", () => {

    open_menu();
})

close_menu_button.addEventListener("click", () => {

    close_menu();
})