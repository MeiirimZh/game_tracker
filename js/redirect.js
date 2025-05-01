function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let c of cookies) {
        const [key, value] = c.split('=');
        if (key === name) return value;
    }
    return null;
}

function goToProfile() {
    const user = getCookie("user");
    if (user) {
        window.location.href = "/account.php";
    }
}