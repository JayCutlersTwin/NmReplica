
    var doc = document.documentElement;
    var w = window;

    /*
    defines four variables: currentScroll, previousScroll, currentDirection and previousDirection
    */
    var previousScroll;
    var previousDirection;
    var currentScroll = previousScroll = w.scrollY || doc.scrollTop;
    var currentDirection = previousDirection = 0;

    /*
    =============
    how it works:
    =============

        - create a scroll event listener
        - create function to check scroll position on each scroll event,
        - compare currentScroll and previousScroll values to find directions
        - scroll up = 1, scroll down = 2, initial = 0.
        - then set direction value to currentDirection.
        - compare currentDirection, and previousDirection
        - if they are different call another function to show/hide the banner

        example:
        1. user scrolls down: currentDirection = 2, previousDirection = 0 > Hide the header.
        2. user scrolls down: currentDirection = 2, previousDirection = 2 > Do nothing.
        3. user scrolls up: currentDirection = 1, previousDirection = 2 > Show header.
    */

    var header = document.getElementById('full-Header');

    var threshold = 206;
    var toggled;

    var checkScroll = function() {
        currentScroll = w.scrollY || doc.scrollTop;
        if(currentScroll > previousScroll) {
            // scrolled down
            currentDirection = 2;
            console.log("Scrolled down");
        } else {
            //scrolled up
            currentDirection = 1;
            console.log("Scrolled Up")
        }

        if (currentDirection !== previousDirection) {
            toggled = setTimeout(toggleHeader, 500);
        }
        if (toggled) {
            previousDirection = currentDirection;
        }

        previousScroll = currentScroll;
    }


    var toggleHeader = function() {
        toggled = true;

        if(currentDirection === 2 && currentScroll <= threshold) {
            //scroll down in threshold
            header.classList.remove('scrollUpheader');
            header.classList.remove('lockBody');
            console.log("remove class");

        } else if(currentDirection === 1 && currentScroll <= threshold) {
            //scroll up in threshold
            header.classList.remove('scrollUpheader');
            header.classList.remove('lockBody');
            console.log("do nothing");

        } else if(currentDirection === 2) {
            //scroll down
            header.classList.remove('scrollUpheader');
            header.classList.add('lockBody');
            console.log("111111111111111");
            header.classList.remove('static');

        } else if(currentDirection === 1) {
            //scroll up
            header.classList.add('scrollUpheader');
            header.classList.remove('lockBody');
            console.log("add class");

        } else {
            toggled = false;
        }
        return toggled;
    }


    window.addEventListener('scroll', checkScroll);


    //Search Button hide and show.
    var searchButton = document.getElementById("button-addon2");

    var showSearchInput = event => {
        const searchBarInput = document.getElementById("searchbar-input");
        const contactBtn = document.getElementById("contactBtn");
        const supportBtn = document.getElementById("supportBtn");
        const searchBarCon = document.getElementById("FULLSEARCH");

        searchBarInput.classList.toggle('makeBlock');
        contactBtn.classList.toggle('hideBtns');
        supportBtn.classList.toggle('hideBtns');
        searchBarCon.classList.toggle('full-searchbar');
    }

    searchButton.addEventListener('click', showSearchInput);
