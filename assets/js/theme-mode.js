if (localStorage.theme === 'dark' ) {
    document.documentElement.classList.add('dark');
    $('.btn_theme_switch').removeClass('btn-light').addClass('btn-dark');
} else {
    document.documentElement.classList.remove('dark');
    $('.btn_theme_switch').removeClass('btn-dark').addClass('btn-light');
}
// Function to set dark theme
function setDarkTheme() {
    document.documentElement.classList.add("dark");
    localStorage.theme = 'dark';
    $('.btn_theme_switch').removeClass('btn-light').addClass('btn-dark');
}

// Function to set light theme
function setLightTheme() {
    document.documentElement.classList.remove("dark");
    localStorage.theme = 'light';
    $('.btn_theme_switch').removeClass('btn-dark').addClass('btn-light');
}

// Function to get URL parameters
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
// Check if version parameter is provided in the URL and apply the theme accordingly
var version = getUrlParameter('version');
if (version) {
    if (version === 'dark') {
        setDarkTheme();
    } else if (version === 'light') {
        setLightTheme(); 
    }
}
// Event listener for clicks on the theme switch button
$(".btn_theme_switch").on("click", function() {
    if (localStorage.theme === 'dark') {
        setLightTheme(); // Switch to light theme if currently dark
    } else {
        setDarkTheme(); // Switch to dark theme if currently light
    }
});