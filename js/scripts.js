var $j = jQuery.noConflict();

// Floating label headings for the contact form
$j(document).ready(function() {
    'use strict';
	
    $j("body").on("input propertychange", ".floating-label-form-group",
        function(e) {
            $j(this).toggleClass(
                "floating-label-form-group-with-value", !!$j(e.target)
                .val());
        }).on("focus", ".floating-label-form-group", function() {
        $j(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $j(this).removeClass(
            "floating-label-form-group-with-focus");
    });
});

// Navigation Scripts to Show Header on Scroll-Up
$j(document).ready(function($) {
    var MQL = 1170;
    //primary navigation slide-in effect
    if ($j(window).width() > MQL) {
        var headerHeight = $j('.navbar-custom').height();
        $j(window).on('scroll', {
            previousTop: 0
        }, function() {
            var currentTop = $j(window).scrollTop();
            //check if user is scrolling up
            if (currentTop < this.previousTop) {
                //if scrolling up...
                if (currentTop > 0 && $j('.navbar-custom').hasClass(
                    'is-fixed')) {
                    $j('.navbar-custom').addClass('is-visible');
                } else {
                    $j('.navbar-custom').removeClass(
                        'is-visible is-fixed');
                }
            } else if (currentTop > this.previousTop) {
                //if scrolling down...
                $j('.navbar-custom').removeClass('is-visible');
                if (currentTop > headerHeight && !$j('.navbar-custom').hasClass('is-fixed')) $j('.navbar-custom').addClass('is-fixed');
            }
            this.previousTop = currentTop;
        });
    }
});

/* Prettify */
  !function ($) {
    $j(function(){
      window.prettyPrint && prettyPrint()   
    })
  }(window.jQuery)

/* Prettyprint fix: WordPress overrides special characters in blog posts.
 * (http://stackoverflow.com/questions/16717518/problems-displaying-html-snippets-with-code-and-or-pre) 
 */
$j(document).ready(function() {
  $j('.prettyprint').html(function(i,h){
    return h.replace(/[<>\"\'\t\n]/g, function(m) { return {
      '<' : '&lt;',
      '>' : '&gt;',
      "'" : '&#39;',
      '"' : '&quot;',
      '\t': '  ',
      '\n': '<br/>' // needed for IE
    }[m]});
  });
 // prettyPrint();
});