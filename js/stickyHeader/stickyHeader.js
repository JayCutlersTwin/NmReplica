(function(){

    var doc = document.documentElement;
    var w = window;

    /*
    defines four variables: currentScroll, previousScroll, currentDirection and previousDirection
    */

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
            console.log(currentDirection)
        } else {
            //scrolled up
            currentDirection = 1;
            console.log(currentDirection)
        }

        if (currentDirection !== previousDirection) {
            toggled = toggleHeader();
        }
        if (toggled) {
            previousDirection = currentDirection;
        }

        previousScroll = currentScroll;
    }

    var toggleHeader = function() {
        toggled = true;
        if(currentDirection === 2 && currentScroll > threshold) {
            header.classList.remove('scrollUpheader');
            console.log("up");
        } else if(currentDirection === 1) {
            header.classList.add('scrollUpheader');
            console.log("down");
        } else {
            toggled = false;
        }
        return toggled;
    }

    window.addEventListener('scroll', checkScroll);

    // header.addEventListener('scroll', function(event) {
    //     if (event.target.scrollTop === 0) {
    //         alert('Top of page detected');
    //     }
    // }, false);

    // var scrollElement = document.getElementById('full-Header');
    //
    // scrollElement.addEventListener('scroll', function() {
    // 
    //     var scrollElementTop = scrollElement.scrollTop;
    //     var fakeheader = document.getElementById('fake');
    //     var fakeheaderTop = fakeheader.scrollTop;
    //
    //     if(scrollElementTop <= 0){
    //         scrollElement.classList.remove("scrollUpheader");
    //         console.log("top");
    //     } else {
    //         scrollElement.classList.add("scrollUpheader");
    //     }
    //     console.log(scrollElementTop);
    //     });
})();
