(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    var $root = $('html, body');
    $('a.page-scroll').bind('click', function(event) {
        $('.navbar-toggle:visible:not(.collapsed)').click();
        var $hash = $(this).attr('href').substring($(this).attr('href').indexOf("#"));
        // console.log($(this).attr('href').substring($(this).attr('href').indexOf("#")));
        $root.stop().animate({
            scrollTop: ($($hash).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 300
    })

    $(document).on('click',function(){
        $('.collapse').collapse('hide');
    })

    // Closes the Responsive Menu on Menu Item Click
    // $('.navbar-collapse > ul > li > a').not('.dropdown-toggle').on('click', function() {
    //     $('.navbar-toggle:visible').click();
    // });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

    // Update coffee
    var past = new Date('2016-05-01');
    var today = new Date();
    var timeDiff = Math.abs(today.getTime() - past.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    console.log('diffDays', diffDays);
    var coffies = 695 + (diffDays * 3);
    console.log('coffies', coffies);

    var min_hiscore = 50000;
    var max_hiscore = 60000;
    var random = getRandomInt(min_hiscore, max_hiscore);
    var sub_random = getRandomInt(0, 1000);

    var high_score = random + ((diffDays % 7) * sub_random);
    console.log('high_score', high_score, 'random', random, 'modulus', diffDays % 7, 'sub_random', sub_random);

    var magic = appear(
      (function(){
          var count = 0;
          return {
            // function to get all elements to track
            elements: function elements(){
              return [document.getElementById('meter0')];
            },
            // function to run when an element is in view
            appear: function appear(el){
                setTimeout(function () {
                    var options = {
                        useEasing : true,
                        useGrouping : true,
                        separator : '.',
                        decimal : ',',
                        prefix : '',
                        suffix : ''
                    };
                    var count0 = new CountUp('meter0', 0, coffies, 0, 4, options);
                    var count1 = new CountUp('meter1', 0, high_score, 0, 4, options);
                    var count2 = new CountUp('meter2', 0, 73, 0, 4, options);
                    var count3 = new CountUp('meter3', 0, 1, 0, 4, options);

                    count0.start();
                    count1.start();
                    count2.start();
                    count3.start();

                    // setTimeout(f, 4000)
                }, 500);
            },
            reappear: false
            };
        }())
    );

    var m1 = $('#meter1');
    function f() {
        setInterval(function () {
            // Update score
            var diff = getRandomInt(0, 3);
            // random = (getRandomInt(0, 1) ? (random + diff) : (random - diff));
            random += diff;
            m1.text(addCommas(random));
        }, 1000);
    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split(',');
        var x1 = x[0];
        var x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }

    // Returns a random integer between min (included) and max (included)
    // Using Math.round() will give you a non-uniform distribution!
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    (function weapon() {
        var i = getRandomInt(1, 5);
        $('header').addClass('solution-2-execute-'+i);
    })();

})(jQuery); // End of use strict
