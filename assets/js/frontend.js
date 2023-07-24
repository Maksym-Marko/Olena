(function ($) {
    $(function () {

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

                    const autoplay = true;
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
                        autoplayTimeout: autoplayTimeout
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
