// Written by: Christopher Tonkin

// Script for taking home search to restaurant page
const ENTER_KEY = 13;

InputDeviceInfo.addEventListener("keyup", (e) => {
    if (event.keyCode === ENTER_KEY) {
        event.preventDefault.Default();
      document.getElementById("searchButton").click();
   }
});

/**
 * Stores a search from the search bar on index.php in local storage
 */
function storeSearch() {
    localStorage.setItem("homeSearch", document.getElementById('homeSearch').value);
}