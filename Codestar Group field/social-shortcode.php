<?php

//Social Link ShortCode Add plugin file
function industry_social_link_shortcode($atts){

    $social_array = cs_get_option('social_link_array');


    if(!empty($social_array)) {
        $industry_social_link_markup ='<div class="social-link">';

        foreach ($social_array as $social_link) {
              $industry_social_link_markup .='<a href="'.$social_link['social_link'].'"><i class="'.$social_link['social_icon'].'"></i></a>';
           }   

        $industry_social_link_markup .= '</div>';
    }else {
        $industry_social_link_markup .= '';
    }

    return $industry_social_link_markup;   
}
add_shortcode('industry_social_link', 'industry_social_link_shortcode');  


//AT last show your short ['industry_social_link']

// If your string has a custom filter, add its tag name in an applicable add_filter function
add_filter( 'widget_text', 'do_shortcode' ); //Use for Old version