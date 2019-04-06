jQuery(function ($) {

    var $container = $('.portfolio_list'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector : '.item',
        layoutMode : 'masonry'
    });

    //Add the class selected to the item that is clicked, and remove from the others
    var $optionSets = $('.portfolio_filters'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.portfolio_filters');
        $optionSets.find('.selected').removeClass('selected');
        $this.addClass('selected');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });

        return false;
    });

});
(function($){
    $(function() {
        $('.menu__icon').on('click', function() {
            $(this).closest('.menu').toggleClass('menu_state_open');
        });
    });
})(jQuery);
//
// jQuery(document).ready(function($){
//     $('.slider').slick({
//         infinite: true,
//         autoplaySpeed: 5000,
//         centerMode: true,
//         fade: true,
//         cssEase: 'linear',
//         autoplay: true,
//         arrows: false,
//     });
//
//     $('.partners-slider').slick({
//         infinite: true,
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         autoplaySpeed: 5000,
//         centerMode: true,
//         autoplay: true,
//         arrows: false,
//
//         responsive: [
//             {
//                 breakpoint: 900,
//                 settings: {
//                     slidesToShow: 3,
//                 }
//             },
//             {
//                 breakpoint: 700,
//                 settings: {
//                     slidesToShow: 2,
//                 }
//             },
//             {
//                 breakpoint: 500,
//                 settings: {
//                     slidesToShow: 1,
//                 }
//             }
//         ]
//     });
// });
//
