( function( $ ) {
  wp.customize( 'color_options', function( value ) {
		value.bind( function( val ) {
            $( '.shape-top,.shape-bottom' ).attr('id','color_'+val);
		    $('body').attr('data-theme',val);  
        } );
	} );
    
    wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( val ) {
            $('.site-footer').css('background-color',val);
        } );
	} );
    
    wp.customize( 'button_bg_color', function( value ) {
		value.bind( function( val ) {
            $('.btn, input[type="submit"], button.btn, .theme-btn').css('background-color',val);
            $('.cta-button.btn1').css('border-color',val);
            $('.fontColor-button').css('color',val);
            $('.fontColor-button .st0').css('fill',val);
        } );
	} );
    
    wp.customize( 'button_text_color', function( value ) {
		value.bind( function( val ) {
            $('.btn, input[type="submit"], button.btn, .theme-btn').css('color',val);
        } );
	} );
    
    wp.customize( 'top_menu_text_color', function( value ) {
		value.bind( function( val ) {
            $('.main-navigation a').css('color',val);
        } );
	} );
    
    wp.customize( 'top_menu_text_active_color', function( value ) {
		value.bind( function( val ) {
            $('.main-navigation .current_page_item > a').css('color',val);
        } );
	} );
    
    wp.customize( 'top_menu_text_hover_color', function( value ) {
		value.bind( function( val ) {
            $('.main-navigation a').hover( 
                function() {
                    $(this).css('color',val);
                }, function() {
                    $(this).css('color','');
                }
            );
        } );
	} );
    
    wp.customize( 'footer_menu_text_hover_color', function( value ) {
		value.bind( function( val ) {
            $('.foot-menu a').hover( 
                function() {
                    $(this).css('color',val);
                }, function() {
                    $(this).css('color','');
                }
            );
        } );
	} );
    
    wp.customize( 'footer_menu_text_active_color', function( value ) {
		value.bind( function( val ) {
            $('.footer-menu .current_page_item a').css('color',val);
        } );
	} );
    
} )( jQuery );