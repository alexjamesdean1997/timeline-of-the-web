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

// Toggle options panel on mobile & tablet
if (document.querySelector('.sidebar-trigger')) {

    let button = document.querySelector('.sidebar-trigger');
    let open = document.querySelector('.sidebar-trigger__open');
    let close = document.querySelector('.sidebar-trigger__close');
    let sidebar = document.querySelector('.sidebar');

    button.addEventListener('click', () => {

        sidebar.classList.toggle('sidebar--open');

        if (sidebar.classList.contains('sidebar--open')) {
            open.style.display = 'none';
            close.style.display = 'inline-block';
        } else {
            open.style.display = 'inline-block';
            close.style.display = 'none';
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


