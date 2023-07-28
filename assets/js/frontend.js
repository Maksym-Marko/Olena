(function ($) {
    $(function () {

        /**
         * Enable ScrollTrigger to GSAP.
         */
        gsap.registerPlugin(ScrollTrigger);

        /**
         * Smooth scrolling.
         */
        window.stickybidLenis = window.stickybidLenis || {

            init: function () {
                const lenis = new Lenis();

                function raf(time) {
                    lenis.raf(time)
                    requestAnimationFrame(raf)
                }

                requestAnimationFrame(raf)
            }

        };

        stickybidLenis.init();

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
                    if (section !== '#') {
                        if ($(section).lenght !== 0) {
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

        /**
         * Animated section.
         */
        window.olenaSectionAnimated = window.olenaSectionAnimated || {
            container: '.wp-block-olena-animated-section-vertical',
            slide: '.is-style-animation-pointer',
            nav: '.is-style-animation-descriptor',
            activeClass: 'active-nav',
            sectionHeightAttr: 'data-section-height',
            startPositionAttr: 'data-start-position',
            interval: 10,
            timeOut: null,
            slideIndex: -1,

            gsap: function (container) {

                const sectionHeight = '+=' + container.getAttribute(this.sectionHeightAttr);

                const startPosition = container.getAttribute(this.startPositionAttr);

                let media = gsap.matchMedia();

                const _this = this;

                const nav = (null == container ? void 0 : container.querySelectorAll(_this.nav)) || [];

                const slides = (null == container ? void 0 : container.querySelectorAll(_this.slide)) || [];

                media.add("(min-width: 992px)", function () {

                    let timeLine = gsap.timeline({
                        scrollTrigger: {
                            trigger: container,
                            start: startPosition,
                            end: sectionHeight,
                            pin: !0,
                            pinReparent: !1,
                            anticipatePin: 1,
                            scrub: true,
                            invalidateOnRefresh: !0,
                            snap: {
                                snapTo: "labels",
                                duration: .3,
                                delay: 0,
                                ease: "none"
                            },
                            onUpdate: function (e) {
                                _this.handleImageState(container, e);
                            }
                        }
                    });

                    nav.forEach((function (t, o) {

                        if (0 !== o) {

                            timeLine.fromTo(slides[o - 1], { opacity: 1, y: 0 }, { opacity: 0, y: -50, duration: .5 });

                            timeLine.fromTo(slides[o], { opacity: 0, y: -50 }, { opacity: 1, y: 0, duration: .5 });

                            timeLine.addLabel("".concat(o))

                        } else {

                            timeLine.addLabel("0")

                        }

                    }));

                });
            },

            handleImageState: function (container, scrollTrigger) {

                if (typeof scrollTrigger.progress === 'undefined') return;

                const _this = this;

                clearTimeout(_this.timeOut);

                _this.timeOut = setTimeout(function () {

                    const slides = container.querySelectorAll(_this.slide);

                    const navs = container.querySelectorAll(_this.nav);

                    const description = container.querySelectorAll(_this.nav + ' p');

                    slides.forEach(function (el, index) {

                        let slideOpacity = el.style.opacity;

                        if (_this.slideIndex !== index) {

                            if (slideOpacity >= 0.8) {

                                navs.forEach(function (_el) {
                                    _el.classList.remove(_this.activeClass);
                                });

                                description.forEach(function (p) {
                                    $(p).hide('slow')
                                });

                                $(description[index]).show('slow');

                                $(navs[index]).addClass(_this.activeClass);

                                _this.slideIndex = index;

                            }

                        }
                    });

                }, _this.interval);

            },

            prepareContainers: function () {

                const containers = document.querySelectorAll(this.container);

                if (containers.length === 0) return;

                const _this = this;

                containers.forEach(function (container) {
                    _this.gsap(container);
                });

            },

            init: function () {
                this.prepareContainers();
            }
        }

        olenaSectionAnimated.init();

        /**
         * Freeze an element when a page is scrolled.
         */
        window.olenaFreezeElement = window.olenaFreezeElement || {

            elements: '.is-style-freeze-on-scroll',
            preActiveClass: 'mx-element-pre-freezed',
            activeClass: 'mx-element-freezed',
            scrollTop: 200,
            intervalBody: null,
            interval: 100,

            bindFreeze: function () {

                const _this = this;

                clearTimeout(this.intervalBody);

                this.intervalBody = setTimeout(function () {

                    $(_this.elements).each(function () {

                        if ($(window).scrollTop() >= _this.scrollTop) {
                            if (!$(this).hasClass(_this.activeClass)) {
                                $(this)
                                    .addClass(_this.preActiveClass)
                                    .addClass(_this.activeClass)
                                    .removeClass(_this.preActiveClass);
                            }
                        } else {
                            if ($(this).hasClass(_this.activeClass)) {
                                $(this)
                                    .addClass(_this.preActiveClass)
                                    .removeClass(_this.activeClass)
                                    .removeClass(_this.preActiveClass);
                            }
                        }

                    });

                }, this.interval);

            },

            onScroll: function () {
                const _this = this;
                $(window).on('scroll', function () {
                    _this.bindFreeze();
                });
            },

            initState: function () {

                if (document.querySelectorAll(this.elements).length === 0) return;

                this.bindFreeze();
                this.onScroll();

            },

            init: function () {

                this.initState();

            }

        };

        olenaFreezeElement.init();

        /**
         * Animation Box.
         */
        window.olenaAnimatedBox = window.olenaAnimatedBox || {

            zoomInElements: '[data-animation-type="zoomIn"]',
            fadeInRightElements: '[data-animation-type="fadeInRight"]',
            fadeInLeftElements: '[data-animation-type="fadeInLeft"]',
            fadeInUpElements: '[data-animation-type="fadeInUp"]',

            zoomIn: function () {

                const _this = this;

                const zoomIn = document.querySelectorAll(_this.zoomInElements);

                if (zoomIn.length === 0) return;

                zoomIn.forEach(function (el, i) {

                    gsap.from(el, {
                        scale: '.4',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top bottom',
                            end: 'top 60%',
                            scrub: 1
                        }
                    });

                });

            },

            fadeInRight: function () {

                const _this = this;

                const fadeInRight = document.querySelectorAll(_this.fadeInRightElements);

                if (fadeInRight.length === 0) return;

                fadeInRight.forEach(function (el, i) {

                    gsap.from(el, {
                        x: '100%',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top bottom',
                            end: 'top 60%',
                            scrub: 1
                        }
                    });

                });

            },

            fadeInLeft: function () {

                const _this = this;

                const fadeInLeft = document.querySelectorAll(_this.fadeInLeftElements);

                if (fadeInLeft.length === 0) return;

                fadeInLeft.forEach(function (el, i) {

                    gsap.from(el, {
                        x: '-100%',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top bottom',
                            end: 'top 60%',
                            scrub: 1
                        }
                    });

                });

            },

            fadeInUp: function () {

                const _this = this;

                const fadeInUp = document.querySelectorAll(_this.fadeInUpElements);

                if (fadeInUp.length === 0) return;

                fadeInUp.forEach(function (el, i) {

                    gsap.from(el, {
                        y: '50%',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top bottom',
                            end: 'top 60%',
                            scrub: 1
                        }
                    });

                });

            },

            init: function () {

                this.zoomIn();
                this.fadeInRight()
                this.fadeInLeft();
                this.fadeInUp();

            }

        };

        olenaAnimatedBox.init();

    });
})(jQuery);
