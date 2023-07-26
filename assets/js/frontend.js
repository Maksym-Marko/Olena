(function ($) {
    $(function () {

        /**
         * Scroll to Section.
         */
        window.olenaScrollToSection = window.olenaScrollToSection || {

            elements: 'a[href^="#"]',

            bindClick: function (element, section) {

                element.on('click', function (e) {

                    e.preventDefault();

                    $('html, body').animate({
                        scrollTop: section.offset().top
                    }, 1000);

                });

            },

            prepareElements: function () {

                if ($(this.elements).lenght === 0) return;

                const _this = this;

                $(this.elements).each(function () {
                    const section = $(this).attr('href');
                    if ($(section).lenght !== 0) {
                        _this.bindClick($(this), $(section));
                    }
                });
            },

            init: function () {
                this.prepareElements();
            }

        };

        olenaScrollToSection.init();

        /**
         * Content Slider.
         */
        window.olenaContentSlider = window.olenaContentSlider || {

            container: '.wp-block-olena-content-slider',

            bindSlider: function () {

                if ($(this.container).length === 0) return;

                const _this = this;

                $(this.container).each(function () {

                    const data = $(this).data();

                    const autoplay = data.autoplay === 0 ? false : true;;
                    const autoplayTimeout = data.autoplaySpeed === 0 ? 5000 : data.autoplaySpeed + '000';
                    const nav = data.nav === 0 ? false : true;
                    const dots = data.dots === 0 ? false : true;
                    const loop = data.loop === 0 ? false : true;

                    $(this).owlCarousel({
                        loop: loop,
                        margin: 10,
                        items: 1,
                        autoplay: autoplay,
                        nav: nav,
                        dots: dots,
                        autoplayTimeout: autoplayTimeout,
                        autoHeight: true
                    });

                });

            },

            init: function () {

                this.bindSlider();

            }

        };

        olenaContentSlider.init();

    });
})(jQuery);
