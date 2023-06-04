(() => {

	hamburgerMenu();
	fixMenu();

	function fixMenu() {

		window.onscroll = () => {

			if ( pageYOffset > 0 ) {

				header.classList.add('fix');
				main.style.marginTop =  header.offsetHeight + 'px';

			} else {

				header.classList.remove('fix');
				main.style.marginTop =  0 + 'px';
			}
		}
	}

	function hamburgerMenu() {

		document.addEventListener('click', (event) => {

				var e = event.target;
				var targetElem = event.target.getAttribute('href');
				var links = document.querySelectorAll('.header__nav-item');

				while(!e.classList.contains('hamb')) {
					if (e.tagName == 'BODY') { e = null; break }
					e = e.parentNode;
				}

			if (e) {

				nav.classList.toggle('active')
				for (let link of links) link.classList.toggle('submenu-open');
				e = null;
			}

			else if (event.target.classList.contains('scroll')) {

				event.preventDefault();

				if (targetElem.length != 0) {
					$('html, body').animate({ scrollTop: ($(targetElem).offset().top - $('.header').innerHeight())}, 1000);

					if (window.innerWidth < 1200) {

					nav.classList.toggle('active');
					hamburger.classList.remove('is-active');
					for (let link of links) link.classList.remove('submenu-open')
					}
				}
			}

			else if (event.target.classList.contains('active')) {
				return;
			}      

			else  {

				if ($(window).width() < 1200) {

					for (let link of links) {link.style.opacity = '0px'; link.classList.remove('submenu-open')}
					nav.classList.remove('active')
					hamburger.classList.remove('is-active')
				}
			}
		})
	}
})();
$(function () {
    /* Inits */
    initLazy();
    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200
            ;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src
                                    ;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    /* Слайдеры */
    //reviews slider woow!
    let $stage_slider = $('.camp__block'),
        settingsStage = {
            mobileFirst: true,
            dots: false,
            arrows: false,
            infinite: false,
            centerMode: false,
            slidesToShow: 1.6,
            slidesToScroll: 1,
            centerPadding: '20px',
            responsive: [
                {
                    breakpoint: 767,
                    settings: "unslick"
                }
            ]

        }


    $stage_slider.slick(settingsStage);

    $(window).on('resize', function () {
        if (!$stage_slider.hasClass('slick-initialized')) {
            return $stage_slider.slick(settingsStage);
        }
    });


});