/*
* -------------------------------------
* FILTERING
* Note : using Isotope library
* -------------------------------------
*/

if (document.querySelector('#timeline')) {

    // Isotope initialization
    const iso = new Isotope('#listing-events', {
        itemSelector: '.event',
        layoutMode: 'vertical'
    });

    // Filters
    let filters = {};

    document.querySelector('.filters').addEventListener('change', (e) => {
        let selected = e.target;
        let filterGroup = selected.getAttribute('name');

        // Fill the filters object
        filters[filterGroup] = `.${e.target.value}`;

        // Concat filters object's values
        let filterValue = concatValues(filters);

        // Render
        iso.arrange({
            filter: filterValue
        })
    });

}

/*
* -------------------------------------
* DOM EFFECTS
* -------------------------------------
*/

// Toggle theme (light/dark)
if (document.querySelector('#timeline')) {

    let button = document.querySelector('.toggle-theme');
    let body = document.querySelector('body');

    button.addEventListener('click', () => {
        body.classList.toggle('dark-theme');

        console.log(body.classList);

        if (button.classList.contains('dark-theme')) {
            console.log('is dark');
            button.innerHTML = 'Switch to light theme';
        } else {
            console.log('is light');
            button.innerHTML = 'Switch to dark theme';
        }
    });

}


/*
* -------------------------------------
* UTILITIES
* -------------------------------------
*/

// Concatenation of object's properties values
let concatValues = (obj) => {
    let value = '';

    for (let prop in obj) {
        value += obj[prop];
    }
    return value;
};


