import './bootstrap';
import 'slick-carousel/slick/slick.min.js';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

// Ensure jQuery is available
import $ from 'jquery';

window.$ = window.jQuery = $;

$(document).ready(function(){
    $('.your-slider').slick({
        slidesToShow: 2,  // Number of slides to show at once
        slidesToScroll: 1, // Number of slides to scroll
        autoplay: true,    // Auto slide
        autoplaySpeed: 5000, // Time between slides
        dots: true,        // Show navigation dots
        arrows: true,      // Show next/prev arrows
        speed: 600,        // Smooth transition
        infinite: true,    // Infinite loop
        centerMode: true,  // Center active slide
        variableWidth: false // Ensures consistent slide width
    });
});



