// Use the Carousel class from Flowbite to create an object that you can use to apply custom styles, change the active slide item, set callback functions directly from JavaScript.

// Check out the following example to learn how to programmatically create a new Carousel object by passing the parameters, using the methods, and the callback functions.

// Import Carousel
import { Carousel } from "flowbite";

const newCarousel = {
    items: [
        {
            position: 0,
            el: document.getElementById("carousel-item-1"),
        },
        {
            position: 1,
            el: document.getElementById("carousel-item-2"),
        },
        {
            position: 2,
            el: document.getElementById("carousel-item-3"),
        },
        {
            position: 3,
            el: document.getElementById("carousel-item-4"),
        },
    ],

    options: {
        defaultPosition: 2,
        interval: 3000,

        indicators: {
            activeClasses: "bg-white dark:bg-gray-800",
            inactiveClasses:
                "bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800",
            items: [
                {
                    position: 0,
                    el: document.getElementById("carousel-indicator-1"),
                },
                {
                    position: 1,
                    el: document.getElementById("carousel-indicator-2"),
                },
                {
                    position: 2,
                    el: document.getElementById("carousel-indicator-3"),
                },
                {
                    position: 3,
                    el: document.getElementById("carousel-indicator-4"),
                },
            ],
        },

        // callback functions
        onNext: () => {
            // console.log("next slider item is shown");
        },
        onPrev: () => {
            // console.log("previous slider item is shown");
        },
        onChange: () => {
            // console.log("new slider item has been shown");
        },
    },

    _init: function () {
        // Create a new carousel object using the import Carousel
        return new Carousel(this.items, this.options);
    },

    trigger: {
        nextPrevBtnClick: function (carousel = newCarousel._init()) {
            // If you want to set trigger the next or previous slide item for the any button, just add some event listeners and call the next() and prev() methods on the Carousel object.

            const $prevButton = document.getElementById("data-carousel-prev");
            const $nextButton = document.getElementById("data-carousel-next");

            // arguments.callee is the function itself and doesn't get affected by the name of the function.
            $prevButton.addEventListener("click", function () {
                // goes to the previous (left) slide
                carousel.prev();
            });

            $nextButton.addEventListener("click", (ele) => {
                // goes to the next (right) slide
                carousel.next();
            });
        },
    },
};

export default newCarousel;

// Instruction:

// Use the next() and prev() public methods on the carousel object to jump to the left or right carousel slide item based on the position of the current active item.

// goes to the next (right) slide
// carousel.next();

// goes to the previous (left) slide
// carousel.prev();

// Use the slideTo(position) public method to jump to the carousel slide item with the specified position.

// jumps to the 3rd position (position starts from 0)
// carousel.slideTo(2);

// Use the cycle() method to start an automated cycling where the duration is the miliseconds of time between each slide and the pause() method to clear the cycle event.

// starts or resumes the carousel cycling (automated sliding)
// carousel.cycle();

// pauses the cycling (automated sliding)
// carousel.pause();
