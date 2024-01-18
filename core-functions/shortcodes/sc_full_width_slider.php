<?php
function scFullWidthSlider($atts) {
    $atts = shortcode_atts(array(
        'image1' => '', 'link1' => '',
        'image2' => '', 'link2' => '',
        'image3' => '', 'link3' => '',
        'image4' => '', 'link4' => '',
        'image5' => '', 'link5' => '',
        'image6' => '', 'link6' => '',
        'image7' => '', 'link7' => '',
        'image8' => '', 'link8' => '',
        'image9' => '', 'link9' => '',
        'image10' => '', 'link10' => '',
    ), $atts);

    $html = '<section class="full-width-slider"><div class="swiper full-width-swiper"><div class="swiper-wrapper">';

    // Loop para crear cada slide
    for ($i = 1; $i <= 10; $i++) {
        $image_key = 'image'.$i;
        $link_key = 'link'.$i;

        if (!empty($atts[$image_key])) {
            $image_url = $atts[$image_key];
            $link = !empty($atts[$link_key]) ? $atts[$link_key] : '#';

            $html .= '<div class="swiper-slide full-width-slider__item" style="background-image: url('.$image_url.')">
                        <a href="'.$link.'" class="full-width-slider__link"></a>
                      </div>';
        }
    }

    $html .= '</div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div></section>';

    return $html;
}
add_shortcode('sc_full_width_slider', 'scFullWidthSlider');