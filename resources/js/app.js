import './bootstrap';
import $ from 'jquery';
import 'boxicons';
import 'aos/dist/aos.css';
import 'tw-elements/js/tw-elements.umd.min';
import Scrambler from 'scrambling-text';
import Typed from 'typed.js';
import Aos from 'aos';

$(function() {
    new Typed('.home-typing', {
        strings: [
            'Freelancer.',
            'Web Developer.',
            'Web Designer.',
            'Front End Developer.',
            'Back End Developer.',
            'Full-Stack Developer.'
        ],
        typeSpeed: 60,
        backSpeed: 60,
        loop: true,
    });

    new Typed('.contact-typing', {
        strings: [
            'Freelancer?',
            'Web Developer?',
            'Fron End Developer?',
            'Back End Developer?',
            'Full-Stack Developer?'
        ],
        typeSpeed: 60,
        backSpeed: 60,
        loop: true,
    });

    Aos.init();
    const scrambler = new Scrambler();

    $('.services-content:not(.active)').hide();
    $('.services-content-images:not(.active)').hide();

    $('#prev-btn').click(function(e) {
        e.preventDefault();
        var $currentContent = $('.services-content.active');
        var $currentImages = $('.services-content-images.active');
        var currentIndex = parseInt($('.services-indicator.bg-sky-400').index() + 1);

        var $prevContent = $currentContent.prev('.services-content');
        var $prevImages = $currentImages.prev('.services-content-images');
        var prevIndex = currentIndex - 1;

        if ($prevContent.length > 0) {
            $currentContent.removeClass('active').hide();
            $currentImages.removeClass('active').hide();

            $prevContent.addClass('active').fadeIn();
            $prevImages.addClass('active').fadeIn();
            observeAllScramble();
            updateIndicator(prevIndex);
        }
    });

    $('#next-btn').click(function(e) {
        e.preventDefault();
        var $currentContent = $('.services-content.active');
        var $currentImages = $('.services-content-images.active');
        var currentIndex = parseInt($('.services-indicator.bg-sky-400').index() + 1);

        var $nextContent = $currentContent.next('.services-content');
        var $nextImages = $currentImages.next('.services-content-images');
        var nextIndex = currentIndex + 1;

        if ($nextContent.length > 0) {
            $currentContent.removeClass('active').hide();
            $currentImages.removeClass('active').hide();

            $nextContent.addClass('active').fadeIn();
            $nextImages.addClass('active').fadeIn();
            observeAllScramble();

            updateIndicator(nextIndex);

        }
    });

    function updateIndicator(index) {
        $('.services-indicator').removeClass('bg-sky-400');
        $('.services-indicator:nth-child(' + index + ')').addClass('bg-sky-400');
    }

    $('.testimonial-carousel:not(.active)').hide();

    $('.testimonial-content #prev-btn').click(function(e) {
        e.preventDefault();
        var $currentContent = $('.testimonial-carousel.active');

        var $prevContent = $currentContent.prev('.testimonial-carousel');

        if ($prevContent.length > 0) {
            $currentContent.removeClass('active').hide();

            $prevContent.addClass('active').fadeIn();
        }
    });

    $('.testimonial-content #next-btn').click(function(e) {
        e.preventDefault();
        var $currentContent = $('.testimonial-carousel.active');

        var $nextContent = $currentContent.next('.testimonial-carousel');

        if ($nextContent.length > 0) {
            $currentContent.removeClass('active').hide();

            $nextContent.addClass('active').fadeIn();

        }
    });

    observeAllScramble();

    function observeAllScramble() {
        observeAndScramble($('.service-1')[0], 'Website Design');
        observeAndScramble($('.service-2')[0], 'Front End');
        observeAndScramble($('.service-3')[0], 'Back End');
    }

    function observeAndScramble(elem, text) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    scrambler.scramble(text, function(scrambledText) {
                        $(elem).html(scrambledText);
                    });
                    observer.disconnect();
                }
            });
        });

        observer.observe(elem);
    }

    function showActiveMenuLink(reset) {
        const imagePath = '/images/pin.png';
        $('#menu ul li .icon').remove();
        if(reset) {
            $('#menu ul li:first-child a').before('<span class="icon"></span>');
            $('#menu .icon').html(
                `<img src="${imagePath}" class="w-10 md:w-7 absolute -left-10 md:-left-7 -rotate-45 bottom-3 md:bottom-1" alt="Icon">`
            );
        } else {
            $('#menu ul li.active a').before('<span class="icon"></span>');
            $('#menu .icon').html(
                `<img src="${imagePath}" class="w-8 md:w-7 absolute -left-9 md:-left-7 -rotate-45 bottom-2 md:bottom-1" alt="Icon">`
            );
        }
    }

    $(window).scroll(function(){
        if ($(this).scrollTop() > 250) {
            $('#scroll-up').fadeIn();
        } else {
            $('#scroll-up').fadeOut();
        }
    });

    $('#scroll-up').on('click', function() {
        showActiveMenuLink(true);
        $('html, body').animate({ scrollTop: 0 }, 200);
    });

    const otherElements = $('body > *').not('#menu-parent');
    const menu = $('#menu');
    const logo = $('#menu-parent .logo');
    const hamburger = $('#hamburger');

    $(hamburger).on('click', function() {
        if(menu.hasClass('translate-y-[100%]')) {
            menu.removeClass('translate-y-[100%]').addClass('translate-y-[0%]');
            otherElements.css('filter', 'blur(1px)');
            logo.css('filter', 'blur(1px)');
            hamburger.css('filter', 'blur(1px)');
        }
    });

    $('#close-menu').on('click', () => {
        menu.removeClass('translate-y-[0%]').addClass('translate-y-[100%]');
        otherElements.css('filter', 'blur(0px)');
        logo.css('filter', 'blur(0px)');
        hamburger.css('filter', 'blur(0px)');
    });

    showActiveMenuLink();

    $('#menu ul li').on('click', function() {
        if(!$(this).hasClass('active')) {
            $('#menu ul li').removeClass('active');
            $(this).addClass('active');
            showActiveMenuLink();
        }
    });


});
