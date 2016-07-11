<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) die( '-1' );
// Include post types
global $ourteam_metabox;
$ourteam_metabox = new WPAlchemy_MetaBox(array
(
    'id' => 'darna_ourteam_settings',
    'title' => __('Our Team Social Settings', 'g5plus-framework'),
    'template' => plugin_dir_path( __FILE__ ) . 'custom-field.php',
    'types' => array('ourteam'),
    'autosave' => TRUE,
    'priority' => 'high',
    'context' => 'normal',
    'hide_editor' => TRUE
));
if(!class_exists('g5plusFramework_Shortcode_Ourteam')){
    class g5plusFramework_Shortcode_Ourteam{
        function __construct(){
            add_action('init', array($this, 'register_taxonomies'), 5);
            add_action('init', array($this, 'register_post_types'), 5);
            add_shortcode('darna_ourteam', array($this, 'ourteam_shortcode'));
            add_filter('rwmb_meta_boxes', array($this, 'register_meta_boxes'));
            if (is_admin()) {
                add_filter('manage_edit-ourteam_columns', array($this, 'add_columns'));
                add_action('manage_ourteam_posts_custom_column', array($this, 'set_columns_value'), 10, 2);
                add_action('admin_menu', array($this, 'addMenuChangeSlug'));
            }
        }
        function register_taxonomies()
        {
            if (taxonomy_exists('ourteam_category')) {
                return;
            }

            $post_type = 'ourteam';
            $taxonomy_slug = 'ourteam_category';
            $taxonomy_name = 'Our Team Categories';

            $post_type_slug = get_option('g5plus-darna-' . $post_type . '-config');
            if (isset($post_type_slug) && is_array($post_type_slug) &&
                array_key_exists('taxonomy_slug', $post_type_slug) && $post_type_slug['taxonomy_slug'] != ''
            ) {
                $taxonomy_slug = $post_type_slug['taxonomy_slug'];
                $taxonomy_name = $post_type_slug['taxonomy_name'];
            }
            register_taxonomy('ourteam_category', 'ourteam',
                array('hierarchical' => true,
                    'label' => $taxonomy_name,
                    'query_var' => true,
                    'rewrite' => array('slug' => $taxonomy_slug))
            );
            flush_rewrite_rules();
        }
        function register_post_types()
        {
            $post_type = 'ourteam';

            if ( post_type_exists($post_type) ) {
                return;
            }

            $post_type_slug = get_option('g5plus-darna-' . $post_type . '-config');
            if (!isset($post_type_slug) || !is_array($post_type_slug)) {
                $slug = 'ourteam';
                $name = $singular_name = 'Our Team';
            } else {
                $slug = $post_type_slug['slug'];
                $name = $post_type_slug['name'];
                $singular_name = $post_type_slug['singular_name'];
            }

            register_post_type($post_type,
                array(
                    'label' => __('Our Team','g5plus-framework'),
                    'description' => __( 'Our Team Description', 'g5plus-framework' ),
                    'labels' => array(
                        'name'					=> $name,
                        'singular_name' 		=>  $singular_name,
                        'menu_name'    			=> __( $name, 'g5plus-framework' ),
                        'parent_item_colon'  	=> __( 'Parent Item:', 'g5plus-framework' ),
                        'all_items'          	=> __( sprintf('All %s',$name), 'g5plus-framework' ),
                        'view_item'          	=> __( 'View Item', 'g5plus-framework' ),
                        'add_new_item'       	=> __( sprintf('Add New  %s',$name), 'g5plus-framework' ),
                        'add_new'            	=> __( 'Add New', 'g5plus-framework' ),
                        'edit_item'          	=> __( 'Edit Item', 'g5plus-framework' ),
                        'update_item'        	=> __( 'Update Item', 'g5plus-framework' ),
                        'search_items'       	=> __( 'Search Item', 'g5plus-framework' ),
                        'not_found'          	=> __( 'Not found', 'g5plus-framework' ),
                        'not_found_in_trash' 	=> __( 'Not found in Trash', 'g5plus-framework' ),
                    ),
                    'supports'    => array( 'title','revisions', 'thumbnail'),
                    'public'      => true,
                    'show_ui'     => true,
                    '_builtin'    => false,
                    'has_archive' => true,
                    'rewrite'     => array('slug' => $slug, 'with_front' => true),
                )
            );
            flush_rewrite_rules();
        }
        function addMenuChangeSlug()
        {
            add_submenu_page('edit.php?post_type=ourteam', 'Setting', 'Settings', 'edit_posts', basename(__FILE__), array($this, 'initPageSettings'));
        }

        function initPageSettings()
        {
            $template_path = ABSPATH . 'wp-content/plugins/darna-framework/includes/shortcodes/posttype-settings/settings.php';
            if (file_exists($template_path))
                require_once $template_path;
        }
        function add_columns($columns)
        {
            unset(
            $columns['cb'],
            $columns['title'],
            $columns['date']
            );
            $cols = array_merge(array('cb' => ('')), $columns);
            $cols = array_merge($cols, array('title' => __('Name', 'g5plus-framework')));
            $cols = array_merge($cols, array('job' => __('Job', 'g5plus-framework')));
            $cols = array_merge($cols, array('thumbnail' => __('Picture', 'g5plus-framework')));
            $cols = array_merge($cols, array('date' => __('Date', 'g5plus-framework')));
            return $cols;
        }
        function set_columns_value($column, $post_id)
        {
            switch ($column) {
                case 'id':
                {
                    echo wp_kses_post($post_id);
                    break;
                }
                case 'job':
                {
                    echo get_post_meta($post_id, 'job', true);
                    break;
                }
                case 'thumbnail':
                {
                    echo get_the_post_thumbnail($post_id, 'thumbnail');
                    break;
                }
            }
        }
        function register_meta_boxes($meta_boxes)
        {
            $meta_boxes[] = array(
                'title' => __('Our Team Job', 'g5plus-framework'),
                'pages' => array('ourteam'),
                'fields' => array(
                    array(
                        'name' => __('Job', 'g5plus-framework'),
                        'id' => 'job',
                        'type' => 'text',
                    ),
                )
            );
            return $meta_boxes;
        }
        function ourteam_shortcode($atts){
            $category=$layout_style=$is_slider=$item_amount=$column = $post_name=$layout_style= $html = $el_class = $g5plus_animation = $css_animation = $duration = $delay = $styles_animation ='';
            extract( shortcode_atts( array(
                'layout_style'  => '',
                'item_amount'   => '',
                'is_slider'     => false ,
                'column'        => '' ,
                'category'          => '',
                'el_class'      => '',
                'css_animation' => '',
                'duration'      => '',
                'delay'         => ''
            ), $atts ) );

            $g5plus_animation .= ' ' . esc_attr($el_class);
            $g5plus_animation .= g5plusFramework_Shortcodes::g5plus_get_css_animation( $css_animation );
            global $ourteam_metabox;
            global $meta;
            $args = array(
                'posts_per_page' => $item_amount,
                'post_type' => 'ourteam',
                'orderby' => 'date',
                'order' => 'ASC',
                'post_status' => 'publish'
            );
            if ( $category!='' ) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'ourteam_category',
                        'field'    => 'slug',
                        'terms'    => explode(',',$category),
                        'operator' 		=> 'IN'
                    )
                );
            }
            $data = new WP_Query($args);
            ob_start();
            $class_col='col-lg-'.(12/esc_attr($column)).' col-md-'.(12/esc_attr($column)).' col-sm-6  col-xs-12';
            if ($data->have_posts()) :?>
            <div class="darna-ourteam <?php echo esc_attr($layout_style) ?><?php echo esc_attr($g5plus_animation) ?>" <?php echo g5plusFramework_Shortcodes::g5plus_get_style_animation($duration, $delay); ?>>
                <?php if  ($is_slider) : ?>
                    <div class="darna-ourteam-slider">
                        <div data-plugin-options='{"items" : <?php echo esc_attr($column) ?>,"pagination":false,"navigation":true, "autoPlay": true }' class="owl-carousel">
                            <?php while ($data->have_posts()): $data->the_post();
                                $job = get_post_meta(get_the_ID(), 'job', true);
                                $post_thumbnail_id = get_post_thumbnail_id();
                                $arrImages = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                                $thumbnail_url = '';
                                if(is_array($arrImages) && count($arrImages)>0){
                                    $resize = matthewruddy_image_resize($arrImages[0],270,266);
                                    if($resize!=null )
                                        $thumbnail_url = $resize['url'];
                                }
                                ?>
                                <div class="ourteam-item">
                                    <div class="ourteam-avatar">
                                        <img src="<?php echo esc_url($thumbnail_url) ?>" alt="<?php echo get_the_title() ?>"/>
                                        <ul class="ourteam-social">
                                            <?php
                                            $meta = get_post_meta(get_the_id(), $ourteam_metabox->get_the_id(), true);
                                            foreach ($meta['ourteam'] as $col)
                                            {
                                                $socialName = isset($col['socialName'])?$col['socialName']:'';
                                                $socialLink = isset($col['socialLink'])?$col['socialLink']:'';
                                                $socialIcon = isset($col['socialIcon'])?$col['socialIcon']:'';
                                                ?>
                                                <li><a href="<?php echo esc_url($socialLink) ?>" title="<?php echo esc_attr($socialName) ?>"><i class="<?php echo esc_attr($socialIcon) ?>"></i></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="ourteam-info">
                                        <p><?php echo get_the_title() ?></p>
                                        <span><?php echo esc_html($job) ?></span>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                <?php else:?>
                    <div class="row">
                        <?php while ($data->have_posts()): $data->the_post();
                            $job = get_post_meta(get_the_ID(), 'job', true);
                            $post_thumbnail_id = get_post_thumbnail_id();
                            $arrImages = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                            $thumbnail_url = '';
                            if(is_array($arrImages) && count($arrImages)>0){
                                $resize = matthewruddy_image_resize($arrImages[0],270,266);
                                if($resize!=null  )
                                    $thumbnail_url = $resize['url'];
                            }
                            ?>
                            <div class="<?php echo esc_attr($class_col); ?>">
                                <div class="ourteam-item sm-margin-bottom-30">
                                    <div class="ourteam-avatar">
                                        <img src="<?php echo esc_url($thumbnail_url) ?>" alt="<?php echo get_the_title() ?>"/>
                                        <ul class="ourteam-social">
                                            <?php
                                            $meta = get_post_meta(get_the_id(), $ourteam_metabox->get_the_id(), true);
                                            foreach ($meta['ourteam'] as $col)
                                            {
                                                $socialName = isset($col['socialName'])?$col['socialName']:'';
                                                $socialLink = isset($col['socialLink'])?$col['socialLink']:'';
                                                $socialIcon = isset($col['socialIcon'])?$col['socialIcon']:'';
                                                ?>
                                                <li><a href="<?php echo esc_url($socialLink) ?>" title="<?php echo esc_attr($socialName) ?>"><i class="<?php echo esc_attr($socialIcon) ?>"></i></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="ourteam-info">
                                        <p><?php echo get_the_title() ?></p>
                                        <span><?php echo esc_html($job) ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
            <?php endif;
            wp_reset_postdata();
            $content = ob_get_clean();
            return $content;
        }
    }
    new g5plusFramework_Shortcode_Ourteam();
}