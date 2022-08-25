// Script for displaying a restaurant on restpage.php
// Written by: Christopher Tonkin

const restList = document.getElementById('restList');
URL;

let rest = [];

/**
 * Takes a restaurant and its data and displays them in restpage.php
 * 
 * @param {[]} restaurants 
 */
const displayRestaurant = (restaurants) => {
    const htmlString = restaurants
        .map((restaurant) => {
            return `
                <li class="restaurant">
                        <a href = ${restaurant.url}>${restaurant.name}</a>
                        <h2>${restaurant.type}</h2>
                        <p>${restaurant.description}</p>
                        <h3>${restaurant.address}</h3>
                        <img src="${restaurant.image}"></img>
                </li>
            `;
        })
        .join('');
        restList.innerHTML = htmlString;
};

/**  Loads the restaurant from restaurants.json corresponding to the id received from the URL
 * */
const loadRestaurant = async () => {
    try {
        const res = await fetch('js/restaurants.json');
        rest = await res.json();
        URL = window.location.href;
        const searchString = URL.substring(URL.indexOf("id=") + 3);
        const filteredRest = rest.filter((restaurant) => {
            return  (
                restaurant.rest_id == (searchString)
            );
        });
        console.log(filteredRest);
        displayRestaurant(filteredRest);
    } catch (err){
        console.error(err);
    }
};

loadRestaurant();
