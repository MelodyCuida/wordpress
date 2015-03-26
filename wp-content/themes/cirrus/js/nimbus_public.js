jQuery(window).load(function() {
    jQuery("button, input[type='submit']").hover(function(){
        jQuery(this).stop().animate({"opacity": .8});
    },function(){
        jQuery(this).stop().animate({"opacity": 1});
    });
    jQuery("h2 a").hover(function(){
        jQuery(this).stop().animate({"opacity": .6}, 300);
    },function(){
        jQuery(this).stop().animate({"opacity": 1}, 300);
    });
});
            