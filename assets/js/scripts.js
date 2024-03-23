document.addEventListener("DOMContentLoaded", () => {
    console.log("ça run");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll(".animated-section, .story, .studio, .nomination, .nomination-oscar-title, .site-footer, .story__title, .studio__title, .characters__title, .place__title").forEach(section => {
        observer.observe(section);
    });

    const root = document.documentElement;
    const place = document.querySelector("#place");
    let lastScrollY = window.scrollY;
    let ticking = false;

    const normalRotateDuration = "15s";
    const fastRotateDuration = "3s";

    root.style.setProperty("--rotate", normalRotateDuration);

    function handleScroll() {
        lastScrollY = window.scrollY;
        if (!ticking) {
            window.requestAnimationFrame(() => {
                updateOnScroll();
                ticking = false;
            });
            ticking = true;
        }
        root.style.setProperty("--rotate", fastRotateDuration);
    }

    function updateOnScroll() {
        let newPosX = Math.round(0 - (lastScrollY - place.offsetTop - 300));
        newPosX = Math.max(-300, Math.min(newPosX, 0));
        root.style.setProperty("--posX", `${newPosX}px`);
        
        setTimeout(() => {
            if (!ticking) {
                root.style.setProperty("--rotate", normalRotateDuration);
            }
        }, 150);
    }

    window.addEventListener("scroll", handleScroll);

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 60,
        speed: 1000,
        autoplay: {
            delay: 2500,
        },
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        simulateTouch: true,
        mousewheel: {
            invert: false,
        },
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        lazy: {
            loadPrevNext: true,
        },
        coverflowEffect: {
            rotate: 60,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        loopFillGroupWithBlank: true,
        breakpoints: {
            480: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3, 
            }
        }
    }); 

    (function($) {
        $(".menu-open").click(function () {
            console.log("menu-trigger cliqué");
            $(".menu_content").animate({ height: "toggle", opacity: "toggle" }, 1000);
            $(".menu_content").toggleClass("open");
            $(".menu_burger").toggleClass("close");
        });

        $("a").click(function () {
            if ($(".menu_content").hasClass("open")) {
                $(".menu_content").animate({ height: "toggle", opacity: "toggle" }, 1000);
                $(".menu_content").removeClass("open");
                $(".menu_burger").removeClass("close");
            }
        });
    })(jQuery);
});
