(function ($, Drupal, undefined) {

  Drupal.behaviors.pony_theme = {
    attach: function (context, settings) {
      // specs for jQuery Widow fix: http://matthewlein.com/widowfix
  	  $('h1, h2, h3, h4, p').widowFix({
  	    letterLimit: 10
      });
    }
  }
  
})(jQuery, Drupal);
