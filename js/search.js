// JavaScript for searching restaurants
// Written by: Christopher Tonkin

const restList = document.getElementById('restList');
const searchBar = document.getElementById('searchBar');

let rest = [];


// Filters search bar results based on name, type, and address
searchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.toString().toLowerCase();
    console.log(searchString);
    const filteredRest = rest.filter((restaurant) => {
        return  (
            restaurant.name.toString().toLowerCase().includes(searchString) || 
            restaurant.type.toString().toLowerCase().includes(searchString) || 
            restaurant.address.toString().toLowerCase().includes(searchString)
        );
    });
    displayRestaurants(filteredRest);
    console.log(filteredRest);
});
////////////////////////////////////////////////////

/**
 * Loads the list of restaurants from restaurants.json
 */
const loadRestaurants = async () => {
    try {
        const res = await fetch('js/restaurants.json');
        rest = await res.json();
        displayRestaurants(rest);
    } catch (err){
        console.error(err);
    }
};
////////////////////////////////////////////////////

/**
 * Takes the loaded restaurants and their information and displays them on restaurant.php
 * @param {[]} restaurants 
 */
const displayRestaurants = (restaurants) => {
    const htmlString = restaurants
        .map((restaurant) => {
            return `
                <li class="restaurant">
                    <a href = "../restpage.php?id=${restaurant.rest_id}">${restaurant.name}</a>
                    <h2>${restaurant.type}</h2>
                    <p>${restaurant.address}</p>
                    <img src="${restaurant.bg_image}"></img>
                </li>
            `;
        })
        .join('');
        restList.innerHTML = htmlString;
};
////////////////////////////////////////////////////

/**
 * Utilizes local storage to read the search string from the search bar on index.php
 * and displays the filtered results
 */
function receiveSearch() {
    document.getElementById('searchBar').value = localStorage.getItem("homeSearch");
    const searchString = searchBar.value.toString().toLowerCase();
    if(searchString != "")
    {
        const filteredRest = rest.filter((restaurant) => {
            return  (
                restaurant.name.toString().toLowerCase().includes(searchString) || 
                restaurant.type.toString().toLowerCase().includes(searchString) || 
                restaurant.address.toString().toLowerCase().includes(searchString)
            );
        });
        console.log(filteredRest);
        displayRestaurants(filteredRest);
    }
    localStorage.removeItem("homeSearch")
};
///////////////////////////////////////////////////

loadRestaurants();
setTimeout(() => { receiveSearch(); }, 300);
