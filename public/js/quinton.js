/**
 * this function is a hidden easter egg when you do a certain code on the browser
 */
(function ($) {
    if (!$) {
        /**
         * pass in jquery object to know if it was loaded. 
         * Uses jquery for fade function.
         */
        return;
    }
    /**
     * keeps track of the current step, pressed key, timer, and the code needed
     * to be entered by the user
     */
    var currStep = 0;
    var pressKey;
    var timerStarted = false;
    var keyTimer;
    /*Code is left, right, up, down, enter*/
    var code = [38, 40, 37, 39, 13];
    /*time in ms between each keypress, 3 seconds*/
    var time = 3000;
    /*anywhere on the body of the browser window will trigger this event*/
    document.body.onkeyup = function (e) {
        /*grab the key event*/
        pressKey = e.which || e.keyCode;

        if (pressKey === code[currStep]) {
            /*if the current key in the code sequence is pressed, execute*/
            if (!timerStarted && time !== false) {
                /*if this is he first key in the sequence, start the timmer*/
                keyTimer = setTimeout(function () {
                    /*when the timer has reached its end, clear the timer and
                     * set the step back to 0*/
                    timerStarted = false;
                    clearTimeout(keyTimer);
                    currStep = 0;
                }, time);
            }
            /**
             * increment the step
             */
            currStep++;
            timerStarted = true;

            if (currStep >= code.length) {
                /**
                 * if you reach the end of the sequence do the celebratory dance
                 */
                $('body').fadeOut(2000, function () {
                    /*fade out the all content, replace it with tranquility 
                     * and fade it back in*/
                    $('body').html('<h1 class="tranquility">Tranquility<br><em style="font-size:2em;">☺<em></h1>');
                    $('body').fadeIn(2000);
                });
                /*clear the timmer and get rid of the evendence*/
                timerStarted = false;
                clearTimeout(keyTimer);
                currStep = 0;
                document.body.onkeyup = function () {}
            }
        } else {
            /*if it is the incorrect key, restart the timer*/
            currStep = 0;
            timerStarted = false;
            clearTimeout(keyTimer);
        }
    };

})(jQuery);