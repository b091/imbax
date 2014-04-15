$(document).ready(function () {
    var $window = $(window),
        $body = $(document.body),
        navHeight = $('.navbar').outerHeight(true) + 10;

    $body.scrollspy({
        target: '.bs-sidebar',
        offset: navHeight
    });

    $window.on('load', function () {
        $body.scrollspy('refresh')
    });

    $('.bs-docs-container [href=#]').click(function (e) {
        e.preventDefault()
    });

    setTimeout(function () {
        var $sideBar = $('.bs-sidebar');
        $sideBar.affix({
            offset: {
                top: function () {
                    var offsetTop = $sideBar.offset().top,
                        sideBarMargin = parseInt($sideBar.children(0).css('margin-top'), 10),
                        navOuterHeight = $('.bs-docs-nav').height();

                    return (this.top = offsetTop - navOuterHeight - sideBarMargin)
                }, bottom: function () {
                    return (this.bottom = $('.bs-footer').outerHeight(true))
                }
            }
        });
    }, 100);

    setTimeout(function () {
        $('.bs-top').affix()
    }, 100);

    $('#carousel-rss').carousel();
});
