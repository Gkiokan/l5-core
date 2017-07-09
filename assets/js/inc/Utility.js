require('./jquery.easing.js')

var GUtility = {
    name: 'G Utility ',
    debug: false,

    data : {
        navigation : '#app-navbar-collapse'
    },

    scrolldown_props : {
        animation : 'easeInOutCubic',
        time: 1300
    },


    init: function(){

        this.addEventListener()

        if(this.debug)
        console.log(this.name + ' has been loaded...')
    },


    /*
        The Event Listener contructor
    */
    addEventListener: function(){
        $(document).on('click', '.scrolldown', this.scrolldown)
        $(document).ready( () => GUtility.do_after_load() )

        $(document).on('click', 'body', this.is_nav_open)
    },

    is_nav_open: function(){
        var that = GUtility

        var it_is_open = $(that.data.navigation).hasClass('collapse in')

        if( it_is_open )
        $(".navbar-collapse").collapse('hide');
    },


    /*
        Scroll Down
    */
    scrolldown : function(EventObject){
        var that  = GUtility
        var event = EventObject
        event.preventDefault()

        // Debug
        if(that.debug)
        console.log(that.name + 'click fired on .scrolldown')

        // check this for pos 1
        if($(this).hasClass('up')){
            GUtility.scrollTo(0)
            return false;
        }


        // Default behavior, find next and jump
        var parent = $(this).parents('section, header').next();
        if(parent !== undefined ){
            var pos = $(parent).offset().top
            GUtility.scrollTo(pos)
        }
    },


    /*
        Move the scroll to function out of the scope
    */
    scrollTo : function(pos){
        var s   = GUtility.scrolldown_props;
        $('html, body').stop().animate({ scrollTop: pos }, s.time, s.animation)
    },


    /*
        Header Event for animated background
    */
    do_after_load: function(){
        setTimeout(function(){
           // If the user is on the top AND have a device larger then 769px
           if($(window).width() >= 769 === true)
           if($(document).scrollTop()==0)
              $('body').addClass('collapsed')

           // Some adjustments for the background thing
           $('.background').addClass('active');
        }, 1337)
    }

}

GUtility.init();
