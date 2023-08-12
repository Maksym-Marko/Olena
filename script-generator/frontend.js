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

                if ($(this.elements).length === 0) return;

                const _this = this;

                $(this.elements).each(function () {
                    const section = $(this).attr('href');
                    if (section !== '#') {
                        if ($(section).length !== 0) {
                            _this.bindClick($(this), $(section));
                        }
                    }

                });
            },

            init: function () {
                this.prepareElements();
            }

        };

        olenaScrollToSection.init();

        /**
         * Price switcher
         */
        window.olenaPriceSwitcher = window.olenaPriceSwitcher || {

            container: '.is-style-price-switcher',
            element: '#pricing .wp-block-navigation-item__content',
            activatedClass: 'price-switcher-activated',
            activeClass: 'price-switcher-active',
            containerSwitcherPositionClass: 'price-switcher-position-',
            sections: '.sb-pricing-list',
            sectionActiveClass: 'sb-pricing-list-active',

            removeClass: function (element, classNameRoot) {

                $(element).removeClass(function (index, classNames) {
                    let current_classes = classNames.split(" "),
                        classes_to_remove = [];

                    $.each(current_classes, function (index, class_name) {
                        const regExp = new RegExp(`${classNameRoot}.*`);
                        if (regExp.test(class_name)) {
                            classes_to_remove.push(class_name);
                        }
                    });

                    return classes_to_remove.join(" ");

                });

            },

            switcherPosition: function (index) {

                this.removeClass(this.container, this.containerSwitcherPositionClass);

                $(this.container).addClass(this.containerSwitcherPositionClass + index);

            },

            bindClick: function () {

                const _this = this;

                $(this.element).on('click', function (e) {

                    e.preventDefault();

                    const page = $('html, body')

                    page.stop();

                    // anchors
                    const sectionId = $(this).attr('href');

                    if ($(sectionId).length === 1) {

                        if (!$(sectionId).hasClass(_this.sectionActiveClass)) {

                            // switcher position
                            $(_this.container).addClass(_this.activatedClass);
                            $(_this.element).removeClass(_this.activeClass);
                            $(this).addClass(_this.activeClass);
                            _this.switcherPosition($(this).parent().index());

                            // change sections active class
                            $(_this.sections)
                                .removeClass(_this.sectionActiveClass)
                                .hide('fast');

                            $(sectionId)
                                .addClass(_this.sectionActiveClass)
                                .show('fast');

                        }
                    }

                });
            },

            initState: function () {

                $(this.sections).hide();

                $(`${this.sections}.${this.sectionActiveClass}`).show();

            },

            init: function () {
                if ($(this.container).length === 0) return;

                // init state
                this.initState();

                // bind click
                this.bindClick();
            }

        };

        olenaPriceSwitcher.init();

        /**
         * Modal Window
         */
        window.olenaModalWindow = window.olenaModalWindow || {

            /**
             * modal window       - #modal-window
             * open modal window  - a[href="#open-modal-window"]
             * close modal window - a[href="#close-modal-window"]
            */

            modalContainer: '.mx-modal-window',

            bindClose: function (modal) {

                const id = $(modal).attr('id');

                if (typeof id === 'undefined') return;

                const closeElement = $(`a[href="#close-${id}"]`);

                if (closeElement.length === 0) return;

                closeElement.on('click', function (e) {
                    e.preventDefault();
                    const page = $('html, body');
                    page.stop();

                    $(modal).hide('fast');
                });
            },

            bindOpen: function (modal) {

                const id = $(modal).attr('id');

                if (typeof id === 'undefined') return;

                const openElement = $(`a[href="#open-${id}"]`);

                if (openElement.length === 0) return;

                openElement.on('click', function (e) {
                    e.preventDefault();
                    const page = $('html, body');
                    page.stop();

                    $(modal).show('fast');
                });
            },

            bindActions: function (modal) {

                this.bindOpen(modal);
                this.bindClose(modal);

            },

            initState: function () {
                const _this = this;

                $(this.modalContainer).each(function (index, modal) {
                    _this.bindActions(modal);
                });

            },

            init: function () {

                this.initState();

            }

        };

        olenaModalWindow.init();

    });
})(jQuery);
