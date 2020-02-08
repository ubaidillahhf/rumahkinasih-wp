(function($) {
    
    'use strict';

    $(document).ready(function() {

        // Count & add class in Mega Menu Orchid store Theme

        var megaSubMenu = $('.menu-item-has-mega-children > ul');

        megaSubMenu.addClass('mega-menu-sub-menu');

        var MegaMenuColumnCount = $(".menu-item-has-mega-children > ul.mega-menu-sub-menu > li").length;

        megaSubMenu.addClass('mega-menu-column-'+MegaMenuColumnCount);


    });

})(jQuery);
