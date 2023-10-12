// This script changes the icon inside the button based on previous preferences and also handles the click events by setting the dark mode preference using local storage and also adding or removing the dark class from the main <html> tag.

var themeToggleDarkIcon = document.querySelectorAll("#theme-toggle-dark-icon");
var themeToggleLightIcon = document.querySelectorAll(
    "#theme-toggle-light-icon"
);

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.forEach((e) => e.classList.remove("hidden"));
} else {
    themeToggleDarkIcon.forEach((e) => e.classList.remove("hidden"));
}

var themeToggleBtn = document.querySelectorAll("#theme-toggle");

themeToggleBtn.forEach((e) =>
    e.addEventListener("click", function () {
        // toggle icons inside button
        themeToggleDarkIcon.forEach((e) => e.classList.toggle("hidden"));
        themeToggleLightIcon.forEach((e) => e.classList.toggle("hidden"));

        // if set via local storage previously
        if (localStorage.getItem("color-theme")) {
            if (localStorage.getItem("color-theme") === "light") {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            } else {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            }
        }
    })
);
