/**
 * FRONTEND SCRIPTS
 **/
jQuery( document ).ready( function($){
   "use strict";

    var button = $('.yith-wocc-button'),
        hidden = $('[name="_yith_wocc_one_click"]');

    button.one( 'click', function(){
        hidden.val('is_one_click');
    })

});