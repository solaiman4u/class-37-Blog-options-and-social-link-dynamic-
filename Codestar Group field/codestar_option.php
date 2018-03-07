<?php

//Group field Option

$options[]    = array(
    'id'              => 'social_section',
    'title'           => 'Social Section',
    'fields'          => array(
      array(
        'id'          => 'social_link_array',
        'type'        => 'group',
        'title'       => 'Social Link Add',
        'button_title'    => 'Add New',
        'accordion_title' => 'Add New Social Link',
        'fields'          => array(
          array(
            'id'    => 'social_icon',
            'type'  => 'icon',
            'title' => 'Select social Icon',
          ),
          array(
            'id'    => 'social_link',
            'type'  => 'text',
            'title' => 'Social link add',
          ),         
        ),
      ),          
     )
   );
