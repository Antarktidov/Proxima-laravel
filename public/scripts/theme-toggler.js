const themeTogglerSelector = document.querySelector('.theme-toggler');
const themeTogglerMobileSelector = document.querySelector('.theme-toggler-mobile');
const body = document.body;

const cookie = document.cookie;
const cookies = cookie.split(';');
console.log(cookies);
document.cookie = 'path=/';
document.cookie = 'expires=Tue, 19 Jan 2038 03:14:07 GMT';
//const cookiesAdditionalData = '; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT';
let proximaTheme = '';

for (let i = 0; i < cookies.length; i++) {
    if (cookies[i].startsWith('proximaTheme=')) {
        console.log('А цикл идёт, а цикл идёт!');
        let splitedCookies = cookies[i].split('=');
        console.log(splitedCookies);
        proximaTheme = splitedCookies[1];
    }
}

if (proximaTheme == 'dark') {
    toggleTheme();
}

themeTogglerSelector.onclick = function() {
    toggleTheme();
}

if (themeTogglerMobileSelector != null) {
    themeTogglerMobileSelector.onclick = function() {
        toggleTheme();
    }
}

function toggleTheme() {
    body.classList.toggle('theme-light');
    body.classList.toggle('theme-dark');

    if (body.classList.contains('theme-light'))
        document.cookie = "proximaTheme=light";
    else if (body.classList.contains('theme-dark'))
        document.cookie = "proximaTheme=dark";
}