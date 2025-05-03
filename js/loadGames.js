document.addEventListener("DOMContentLoaded", () => {
    function deleteGame(index, cards) {
        fetch('php/delete_game.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                game_name: cards[index].querySelector(".card-name").textContent
            })
        })
        .then(() => {
            location.reload();
        })
    }

    fetch('php/load_games.php')
        .then(response => response.json())
        .then(data => {
            const cards = document.querySelectorAll(".card");
            
            let stars;

            cards.forEach((element, index) => {
                element.querySelector(".card-name").textContent = data[index]['game_name'];
                element.querySelector(".card-genre").textContent = data[index]['genre_name'];
                element.querySelector(".card-delete").addEventListener("click", () => {
                    deleteGame(index, cards);
                });

                switch (data[index]['genre_name']) {
                    case 'Экшен':
                        element.querySelector(".card-icon__marker").style.background = "#C0392B";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/action.svg";
                        break;
                    case 'Платформер':
                        element.querySelector(".card-icon__marker").style.background = "#F1C40F";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/platformer.svg";
                        break;
                    case 'Аркада':
                        element.querySelector(".card-icon__marker").style.background = "#E67E22";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/arcade.svg";
                        break;
                    case 'Rogue-like':
                        element.querySelector(".card-icon__marker").style.background = "#8E44AD";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/roguelike.svg";
                        break;
                    case 'RPG':
                        element.querySelector(".card-icon__marker").style.background = "#2980B9";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/rpg.svg";
                        break;
                    case 'Стратегия':
                        element.querySelector(".card-icon__marker").style.background = "#27AE60";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/strategy.svg";
                        break;
                    case 'Драки':
                        element.querySelector(".card-icon__marker").style.background = "#922B21";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/fighting.svg";
                        break;
                    case 'Ужасы':
                        element.querySelector(".card-icon__marker").style.background = "#2C3E50";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/horror.svg";
                        break;
                    case 'Головоломки':
                        element.querySelector(".card-icon__marker").style.background = "#16A085";
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/puzzle.svg";
                        break;
                    default:
                        element.querySelector(".card-icon__marker").style.background = '#fff';
                        element.querySelector(".card-icon__img").src = "icons/genre_icons/game.svg";
                        break;
                }

                stars = element.querySelectorAll(".star");
                stars.forEach((s_element, s_index) => {
                    if (s_index < data[index]['rating']) {
                        s_element.src = "icons/star.svg";
                    }
                })
            })
        })
})