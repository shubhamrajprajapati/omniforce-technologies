<!-- Fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

{{-- Added Bootstrap Icon Cdn --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

{{-- This will first check if you’ve previously set the theme color preference manually using the local storage and as a fallback it will either set the dark or light mode based on your browser color scheme preference. --}}

@vite([
    'resources/css/app.css', // For Tailwind Css
    'resources/js/app.js', // For Js Files
    'resources/js/customize/dark-mode/switcher.js', // This will first check if you’ve previously set the theme color preference manually using the local storage and as a fallback it will either set the dark or light mode based on your browser color scheme preference.
    'resources/js/customize/dark-mode/event-listener.js',  // This script changes the icon inside the button based on previous preferences and also handles the click events by setting the dark mode preference using local storage and also adding or removing the dark class from the main <html> tag.
])
