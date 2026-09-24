const themeButton = document.getElementById("themeButton");

if (themeButton) {
    themeButton.addEventListener("click", () => {
        const currentTheme = document.body.getAttribute("data-theme");

        if (currentTheme === "dark") {
            document.body.removeAttribute("data-theme");
            themeButton.textContent = "🌙 Dark Mode";
        } else {
            document.body.setAttribute("data-theme", "dark");
            themeButton.textContent = "☀️ Light Mode";
        }
    });
}