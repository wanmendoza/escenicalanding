<?php
///////////////////////////////////////////////////////////
//
// User settings extraction and interpretation
//
//////////////////////////////////////////////////////////
extract( shortcode_atts( array(
    'icon_type'                     => '',
    'icon_image'                    => '',
    'icon'                          => '',
    'icon_size'                     => '',
    'icon_color'                    => '',
    'icon_background_color'         => '',
    'icon_border_color'             => '',
    'icon_hover_color'              => '',
    'icon_hover_background_color'   => '',
    'icon_hover_border_color'       => '',
    'title'                         => '',
    'title_size'                    => '',
    'title_color'                   => '',
    'title_weight'                  => '',
    'title_top_padding'             => '',
    'title_bottom_padding'          => '',
    'animation'                     => '',
    'align'                         => 'center',
    'el_class'                      => ''
    ),$atts )
);

///////////////////////////////////////////////////////////
//
// HTML Ouput
//
//////////////////////////////////////////////////////////
$id = uniqid();

$output = '';
$animation_css = ( $animation != '' ) ? ' mk-animate-element ' . $animation . ' ' : '';

$output .= '<div id="mk-icon-box-'.$id.'" class="mk-box-icon-2 box-align-'.$align.' '.$animation_css.'">';
if ($icon_type == 'icon'){
$output .= '<style type="text/css">
            #mk-icon-box-'.$id.' .mk-box-icon-2-icon {
                font-size:'.$icon_size.'px; '.($icon_color ? ('color:'.$icon_color.';') : '').($icon_background_color ? ('background-color:'.$icon_background_color.';') : '').($icon_border_color ? ('border:1px solid '.$icon_border_color.';') : '').'
            }
            #mk-icon-box-'.$id.' .mk-box-icon-2-icon:hover{
                '.($icon_hover_color ? ('color:'.$icon_hover_color.';') : '').($icon_hover_background_color ? ('background-color:'.$icon_hover_background_color.';') : '').($icon_hover_border_color ? ('border:1px solid '.$icon_hover_border_color.';') : '').'
            }
    </style>';
$output .= '    <div class="mk-box-icon-2-icon size-'.$icon_size.'"><i class="'.$icon.'"></i></div>';
}else{
 $icon_size = ($icon_size !='inherit') ? ('width:'.$icon_size.'px;') : '';
$output .= '    <div class="mk-box-icon-2-image" style="'.$icon_size.'"><img src="'.$icon_image.'" alt="" /></div>';
}
$output .= '    <h3 class="mk-box-icon-2-title" style="font-weight:'.$title_weight.'; font-size:'.$title_size.'px; color:'.$title_color.'; padding:'.$title_top_padding.'px 0 '.$title_bottom_padding.'px 0;">'.$title.'</h3>';
$output .= '    <div class="mk-box-icon-2-content">'.wpb_js_remove_wpautop( $content, true ).'</div>';
$output .= '</div>';

echo $output;
