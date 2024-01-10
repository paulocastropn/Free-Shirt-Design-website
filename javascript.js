(function ($) {

    $.fn.visible = function () {

        var $element = $(this).eq(0),
            $win = $(window),
            
            elemTop = $element.position().top,
            elemBottom = elemTop + $element.height(),
            
            winTop = $win.scrollTop(),
            winBottom = winTop + $win.height();
            
        if (elemBottom < winTop) {
            return false;
        } else if (elemTop > winBottom) {
            return false;
        } else {
            return true;
        }        
    };

    })(jQuery);

    function padNum(num) {
    if (num < 10) {
        return " " + num;
    }
    return num;
    }


    var $count1 = $('.first-count');
    var $count2 = $('.second-count');
    var $count3 = $('.third-count');

    // Scrolling Functions
    $(window).scroll(function (event) {
    var first = 100000;
    var second = 3479;
    var third = 1825;

    function countStuffUp(points, selector, duration) {
        //Animate count
        var $selector = $(selector);
        $selector.addClass('counting');
        
        var $counter = $({
            countNumber: $selector.text()
        }).animate({
            countNumber: points
        }, {
            duration: duration,
            easing: 'linear',
            step: function (now) {
                //console.log(now);
                $selector.data('remaining', (points - now) * (duration / points));
                $selector.text(padNum(parseInt(this.countNumber)));
            },
            complete: function () {
                $selector.removeClass('counting');
                $selector.text(points);
                
            }
        });
        
        $selector.data('counter', $counter);
    }

    // Output to div
    $(".first-count").each(function (i, el) {
        var el = $(el);
        if (el.visible() && !el.hasClass('counting')) {
        var duration = 100000000; // Set the desired duration in milliseconds (5 seconds)
        countStuffUp(first, '.first-count', duration);
        } else if (!el.visible() && el.hasClass('counting')) {
        el.data('counter').stop(true);
        el.removeClass('counting');
        }
    });

    // Output to div
    $(".second-count").each(function (i, el) {
        var el = $(el);
        if (el.visible() && !el.hasClass('counting')) {
            var duration = el.data('remaining') || 4000;
            countStuffUp(second, '.second-count', duration);
        } else if (!el.visible() && el.hasClass('counting')) {
            el.data('counter').stop(true);
            el.removeClass('counting');
        }
    });

    // Output to div
    $(".third-count").each(function (i, el) {
        var el = $(el);
        if (el.visible() && !el.hasClass('counting')) {
            var duration = el.data('remaining') || 3000;
            console.log('duration', duration);
            countStuffUp(third, '.third-count', duration);
        } else if (!el.visible() && el.hasClass('counting')) {
            el.data('counter').stop(true);
            el.removeClass('counting');
        }
    });

    });