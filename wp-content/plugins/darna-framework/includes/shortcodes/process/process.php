<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');
if (!class_exists('g5plusFramework_Shortcode_Process')) {
	class g5plusFramework_Shortcode_Process
	{
		function __construct()
		{
			add_shortcode('darna_process', array($this, 'process_shortcode'));
		}

		function process_shortcode($atts)
		{
            $last_step=$step=$layout_style=$description=$title= $link=$html = $el_class = $g5plus_animation = $css_animation = $duration = $delay = $styles_animation = '';
			extract(shortcode_atts(array(
                'layout_style'  => '',
                'step'          => '',
                'title'         => '',
                'description'   => '',
				'link'          => '',
                'last_step'     => '',
				'el_class'      => '',
				'css_animation' => '',
				'duration'      => '',
				'delay'         => ''
			), $atts));
			$g5plus_animation .= ' ' . esc_attr($el_class);
			$g5plus_animation .= g5plusFramework_Shortcodes::g5plus_get_css_animation($css_animation);

            //parse link
            $link = ( $link == '||' ) ? '' : $link;
            $link = vc_build_link( $link );
            $a_title=$a_target='';
            $a_href='#';
            if ( strlen( $link['url'] ) > 0 ) {
                $a_href = $link['url'];
                $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
            }
            ob_start();?>
            <div class="darna-process <?php echo esc_attr($layout_style) ?> <?php echo esc_attr($g5plus_animation) ?>" <?php echo g5plusFramework_Shortcodes::g5plus_get_style_animation($duration,$delay); ?>>
                <h3><?php echo esc_attr($step);
                    if($last_step ==''):?>
                    <i class="fa fa-long-arrow-right"></i>
                <?php endif;?>
                </h3>
                <h2>
                    <a target="<?php echo esc_attr($a_target) ?>" href="<?php echo esc_url($a_href); ?>"><?php echo esc_html($title); ?></a>
                </h2>
                <p><?php echo esc_html($description); ?></p>
            </div>
            <?php
            $content = ob_get_clean();
            return $content;
		}
	}
    new g5plusFramework_Shortcode_Process();
}