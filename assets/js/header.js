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

function mobile_dropdown_links(icon) {

    const content_name = icon.dataset.content;

    // All icons
    const allIcons = document.querySelectorAll(".awe8456dsa");

    // All dropdown contents
    const contents = {
        services: document.getElementById("severs_mob_conten"),
        about_us: document.getElementById("about_us_content"),
        portfolio: document.getElementById("portfolio_us_content"),
        careers: document.getElementById("careers_us_content")
    };

    // Check if clicked icon is already open
    const isOpen = icon.classList.contains("awe8456dsa-rotate");

    // Reset all icons
    allIcons.forEach(item => {
        item.classList.remove("awe8456dsa-rotate");
    });

    // Hide all dropdowns
    Object.values(contents).forEach(content => {
        if (content) {
            content.classList.add("display_hiden_mob");
        }
    });

    // If it was already open, just close it
    if (isOpen) {
        return;
    }

    // Open clicked icon
    icon.classList.add("awe8456dsa-rotate");

    // Show corresponding content
    if (contents[content_name]) {
        contents[content_name].classList.remove("display_hiden_mob");
    }
}