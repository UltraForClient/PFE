const menuButton = document.querySelector('.menu-button');
const nav = document.querySelector('.nav');

if(menuButton) {
    menuButton.addEventListener('click', () => {
        nav.classList.toggle('open-menu');
    });
}

const navButtons = document.querySelectorAll('[data-toggle="open-submenu"]');
navButtons.forEach(navButton => {
    console.log(window.innerWidth);
    if(window.innerWidth < 800) {
        navButton.addEventListener('click', () => {
            const submenus = document.querySelectorAll('.submenu');
            const submenu = navButton.parentElement.querySelector('.submenu');

            submenus.forEach(submenu2 => {
                if(submenu2 !== submenu)
                    submenu2.classList.remove('open-menu');
            });

            submenu.classList.toggle('open-menu');
        });
    } else {
        $(navButton.parentElement).hover(
            () => {
                const submenu = navButton.parentElement.querySelector('.submenu');
                $(submenu).stop(true, false).slideDown('medium');
                $(nav).height(250);
            },
            () => {
                const submenu = navButton.parentElement.querySelector('.submenu');
                $(submenu).stop(true, false).slideUp('medium');
                $(nav).height(50);
            },
        );
    }
});

const items = document.querySelectorAll('.nav__item');
const arrowIndicator = document.querySelector('.arrow-indicator');

items.forEach(item => {
    item.addEventListener('mouseover', () => {
        arrowIndicator.style.width = item.offsetWidth + 'px';
        arrowIndicator.style.left = item.offsetLeft + 'px';
    });
    item.addEventListener('mouseout', () => {
        arrowIndicator.style.width = 0;
        arrowIndicator.style.left = 0;
    });
});

$('.fb-tab').tabSlideOut({
    tabLocation: 'left',
    action: 'click',
    offset: '100px'
});
$('.booking-tab').tabSlideOut({
    tabLocation: 'left',
    action: 'none',
    offset: '250px'
});

const slider = $('.slider');
if(slider.length !== 0) {
    slider.pgwSlider({
        displayControls: true
    });
}

const sliderFull = $('.slider-full');
if(sliderFull.length !== 0) {
    sliderFull.pgwSlider({
        displayList: false,
        displayControls: true
    });
}

const animates = $('.animated');
if(animates.length !== 0) {
    for(let i = 0; i < animates.length; i++) {
        $(animates[i]).waypoint(() => {
            animates[i].classList.add(animates[i].getAttribute('data-animated'));
            $(animates[i]).css('opacity', 1);
        }, {offset: '50%'});
    }

    animates.css('opacity', 0);
}

const sliderFullSpan = $('.slider-full__title span');

if(sliderFullSpan.length !== 0) {
    sliderFullSpan.waypoint(() => {
        sliderFullSpan.animate({
            top: '10vw'
        }, 1500)
    }, { offset: '80%' });
}

const gridder = $('.gridder');
console.log(gridder);
if(gridder.length !== 0) {
    gridder.gridderExpander({
        scroll: true,
        scrollOffset: 60,
        scrollTo: 'panel',
        animationSpeed: 400,
        animationEasing: 'easeInOutExpo',
        showNav: true,
        nextText: '<span>-></span>',
        prevText: '<span><-</span>',
        closeText: '<span>X</span>',
        onStart() {
        },
        onContent() {
            $('.carousel').carousel();
        },
        onClosed() {
        }
    });
}

const targetLinks = document.querySelectorAll('a[href*="#"]:not([href="#"])');
if(targetLinks.length > 0) {
    targetLinks.forEach(item => {
        item.addEventListener('click', () => {
            if (location.pathname.replace(/^\//, '') === item.pathname.replace(/^\//, '') && location.hostname === item.hostname) {

                let target = $(item.hash);

                target = target.length ? target : $('[name=' + item.hash.slice(1) + ']');

                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);

                    return false;
                }
            }
        });
    });
}
