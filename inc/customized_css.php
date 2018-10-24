<?php /* Customized CSS thru WP Admin */ 
$default =  get_template_directory_uri() . '/images/shapes/' . get_theme_mod('color_options','navy_blue') . '.png';
$teal = get_template_directory_uri() . '/images/shapes/teal.png';
$green = get_template_directory_uri() . '/images/shapes/green.png';
$red = get_template_directory_uri() . '/images/shapes/red.png';
$navy_blue = get_template_directory_uri() . '/images/shapes/navy_blue.png';
$orange = get_template_directory_uri() . '/images/shapes/orange.png';
$footer_bg_color = get_theme_mod('footer_bg_color');
$button_bg_color = get_theme_mod('button_bg_color');
$button_text_color = get_theme_mod('button_text_color'); 
$button_text_hover_color = get_theme_mod('button_text_hover_color'); 
$top_menu_text_color = get_theme_mod('top_menu_text_color'); 
$top_menu_text_hover_color = get_theme_mod('top_menu_text_hover_color'); 
$top_menu_text_active_color = get_theme_mod('top_menu_text_active_color'); 
$footer_menu_text_color = get_theme_mod('footer_menu_text_color'); 
$footer_menu_text_hover_color = get_theme_mod('footer_menu_text_hover_color'); 
$footer_menu_text_active_color = get_theme_mod('footer_menu_text_active_color'); 
$home_title_text_color = get_theme_mod('home_title_text_color'); 
$content_link_color = get_theme_mod('content_link_color'); 

$colors = get_template_directory() . '/css/colors.json';
$fcontent = file_get_contents( $colors );
$colors = ($fcontent) ? json_decode($fcontent,true) : array(); 
$theme = get_theme_mod('color_options','navy_blue');
?>

<style type="text/css">
.shape-bottom { background-image: url("<?php echo $default;?>"); }
.shape-top { background-image: url("<?php echo $default;?>"); }
.shape-bottom#color_teal,
.shape-top#color_teal { background-image: url("<?php echo $teal;?>")!important; }
.shape-bottom#color_green,
.shape-top#color_green { background-image: url("<?php echo $green;?>")!important; }
.shape-bottom#color_navy_blue,
.shape-top#color_navy_blue { background-image: url("<?php echo $navy_blue;?>")!important; }
.shape-bottom#color_orange,
.shape-top#color_orange { background-image: url("<?php echo $orange;?>")!important; }
.shape-bottom#color_red,
.shape-top#color_red { background-image: url("<?php echo $red;?>")!important; }
.site-footer {
    background-color: <?php echo $footer_bg_color;?>;
}
.btn, input[type="submit"], button.btn, .theme-btn {
    background-color: <?php echo $button_bg_color;?>;
    color: <?php echo $button_text_color;?>;
}
.feat-content .cta-button.btn1,
.cta-button.btn1 {
    background-color: <?php echo $button_bg_color;?>;
    border-color: <?php echo $button_bg_color;?>;
}
.btn, input[type="submit"], button.btn, .theme-btn:hover,
.feat-content .cta-button.btn1:hover, 
.cta-button.btn1:hover {
    color: <?php echo $button_text_hover_color;?>;
}
.bgColor {
    background-color: <?php echo $button_bg_color;?>;
}
.fontColor-button {
    color: <?php echo $button_bg_color;?>;
}
.fontColor-button .st0 {
    fill: <?php echo $button_bg_color;?>;
}
.main-navigation a {
    color: <?php echo $top_menu_text_color;?>;
}
.main-navigation a:hover {
    color: <?php echo $top_menu_text_hover_color;?>;
}
.main-navigation .current_page_item > a {
    color: <?php echo $top_menu_text_active_color;?>;
}
.foot-menu a:hover {
    color: <?php echo $footer_menu_text_hover_color;?>;
}
.foot-menu .current_page_item a {
    color: <?php echo $footer_menu_text_active_color;?>;
}
.midcontent .titlediv .section-title,
.section-title {
    color:<?php echo $home_title_text_color;?>;
}
.subpage #primary .entry-content a, p a {
    color:<?php echo $content_link_color;?>;
}

body#theme_<?php echo $theme;?>.subpage #masthead {
    background-color:<?php echo $colors[$theme];?>;
}
 </style>