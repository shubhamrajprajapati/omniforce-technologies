// Get a reference to the "Close menu" button
const showMobileMenuBtn = document.querySelector(".showMobileMenuBtn");

// Get a reference to the mobile menu element
const mobileMenu = document.querySelector("nav-mobile");

const toggleMobileMenu = () => {
    // Hide the mobile menu by adding the "hidden" class
    mobileMenu.classList.toggle("left-[-100vw]");
    mobileMenu.classList.toggle("left-0");
    mobileMenu.att;
};

// Add a click event listener to the "Close menu" button
showMobileMenuBtn.addEventListener("click", toggleMobileMenu);



// Menu Collapse property
const dataBsToggle = document.querySelectorAll("[data-bs-toggle=collapse]");
const dataBsFlyout = document.querySelectorAll("[data-bs-toggle=flyout]");

[dataBsToggle, dataBsFlyout].forEach((parentDiv) => {
    parentDiv.forEach((div) => {
        div.addEventListener("click", (e) => {
            const target = e.currentTarget.dataset.bsTarget;
            const toggleType = e.currentTarget.dataset.bsToggle;
            const collapseDiv = document.querySelector(
                ".navbar-collapse" + target
            );

            if (toggleType === "collapse") {
                collapseDiv.classList.toggle("hidden");
            } else if (toggleType === "flyout") {
                /* 'Product' flyout menu, show/hide based on flyout menu state.
                    Entering: "transition ease-out duration-200"
                    From: "opacity-0 translate-y-1"
                    To: "opacity-100 translate-y-0"
                    Leaving: "transition ease-in duration-150"
                    From: "opacity-100 translate-y-0"
                    To: "opacity-0 translate-y-1" */

                [
                    "top-[-300vh]",
                    "transition",
                    "ease-out",
                    "duration-200",
                    "opacity-0",
                    "translate-y-1",
                    "ease-in",
                    "opacity-1",
                    "translate-y-0",
                    "duration-300",
                ].forEach((toggleClass) =>
                    collapseDiv.classList.toggle(toggleClass)
                );
            }

            if (e.currentTarget.children.length > 0) {
                const collapseIcon = e.currentTarget.querySelector("svg");
                collapseIcon.classList.toggle("rotate-180");
            }
        });
    });
});