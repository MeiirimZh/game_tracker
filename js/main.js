const userText = document.querySelector(".main__username");

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
}

userText.textContent = 'Библиотека игр ' + getCookie("user");