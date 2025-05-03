document.addEventListener("DOMContentLoaded", () => {
    fetch('php/load_games.php')
        .then(response => response.json())
        .then(data => {
            const cards = document.querySelectorAll(".card");

            cards.forEach((element, index) => {
                element.querySelector(".card-name").textContent = data[index]['game_name'];
                element.querySelector(".card-genre").textContent = data[index]['genre_name'];

                switch (data[index]['genre_name']) {
                    case 'Экшен':
                        element.querySelector(".card-icon__marker").style.background = "#f03b1f";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/action.svg";
                        break;
                    case 'Платформер':
                        element.querySelector(".card-icon__marker").style.background = "#26d1d4";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/platformer.svg";
                        break;
                    case 'Аркада':
                        element.querySelector(".card-icon__marker").style.background = "#a84ac2";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/arcade.svg";
                        break;
                    case 'Rogue-like':
                        element.querySelector(".card-icon__marker").style.background = "#e0cb43";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/roguelike.svg";
                        break;
                    default:
                        element.querySelector(".card-icon__marker").style.background = '#fff';
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/game.svg";
                        break;
                }
            })
        })
})