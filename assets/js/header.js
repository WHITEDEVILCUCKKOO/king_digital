function show_mobile_nav() {
    let mobile_menu_12 = document.getElementById("mobile_menu_12");
    let nowe785 = document.getElementById("nowe785");

    mobile_menu_12.classList.toggle("display_hiden");

    if (mobile_menu_12.classList.contains("display_hiden")) {
        nowe785.innerHTML = "≡";
    } else {
        nowe785.innerHTML = "X";
    }
}

