<?php     
    /**
    * Enqueues scripts and styles start. 
    */

    function lab_theme_scripts() {

        wp_enqueue_script( 'jquery' );
        wp_enqueue_style( 'twd-fonts', lab_fonts_url(), array(), '', 'all' );
         wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '1.4.5', 'all' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), '3.4', 'all' );

        wp_enqueue_style( 'jquery.gallery', get_template_directory_uri().'/css/jquery.gallery.css', array(), '1.4.5', 'all' );
        wp_enqueue_style( 'popuo-box', get_template_directory_uri().'/css/popuo-box.css', array(), '1.4.5', 'all' );
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.4.5', 'all' );
        
        
        wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '3.4',  true );

        wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '3.4', true );
        
        wp_enqueue_script( 'counterup.min', get_template_directory_uri().'/js/counterup.min.js', array('jquery'), '3.4', true );
        wp_enqueue_script( 'easing', get_template_directory_uri().'/js/easing.js', array('jquery'), '1.0', true );

        wp_enqueue_script( 'jquery.flexisel', get_template_directory_uri().'/js/jquery.flexisel.js', array('jquery'), '3.4',  true );

        wp_enqueue_script( 'jquery.gallery', get_template_directory_uri().'/js/jquery.gallery.js', array('jquery'), '3.4',  true );
        wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.js', array('jquery'), '3.4',  true );
        wp_enqueue_script( 'move-top', get_template_directory_uri().'/js/move-top.js', array('jquery'), '3.4',  true );
        wp_enqueue_script( 'waypoints.min', get_template_directory_uri().'/js/waypoints.min.js', array('jquery'), '3.4',  true );
        
    }

    add_action( 'wp_enqueue_scripts', 'lab_theme_scripts' );

    /**
     * Register Menu.
     */    

    add_action( 'after_setup_theme', 'lab_setup_theme' );
    function lab_setup_theme() {
        register_nav_menus( array(
            'primary' => __( 'Primary Navigation', 'LAB' ),
            'footer' => __( 'Footer Navigation', 'LAB' ),
        ) );
    }

    /**
     * Register custom fonts.
     */
    function lab_fonts_url() {
        $fonts_url = '';
        $libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twd' );
        if ( 'off' !== $libre_franklin ) {
            $font_families = array();            
            $font_families[] = 'Work+Sans:100,200,300,400,500,600,700,800,900';
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin-ext' ),
            );
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }
        return esc_url_raw( $fonts_url );
    }


    /*
    * Register widget sidebar start.
    */


    function lab_widgets_init() {

        register_sidebar( array(
            'name'          => __( 'Sidebar', 'laboratory' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'laboratory' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer One', 'laboratory' ),
            'id'            => 'footer-one',
            'description'   => __( 'Add widgets here to appear in your Footer One.', 'laboratory' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Two', 'laboratory' ),
            'id'            => 'footer-two',
            'description'   => __( 'Add widgets here to appear in your Footer Two.', 'laboratory' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Three', 'laboratory' ),
            'id'            => 'footer-three',
            'description'   => __( 'Add widgets here to appear in your Footer Three.', 'laboratory' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Four', 'laboratory' ),
            'id'            => 'footer-four',
            'description'   => __( 'Add widgets here to appear in your Footer Four.', 'laboratory' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

    }

    add_action( 'widgets_init', 'lab_widgets_init' );

    /*
    * Register Customize site logo.
    */

    function m1_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'lab_logo' ); // Add setting for logo uploader             
        // Add control for logo uploader (actual uploader)
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'lab_logo', array(
            'label'    => __( 'Logo', 'm1' ),
            'section'  => 'title_tagline',
            'settings' => 'lab_logo',
        ) ) );
    }
    add_action( 'customize_register', 'm1_customize_register' );



    add_action( 'init', 'update_my_custom_type', 99 );
     
    /**
     * update_my_custom_type
     *
     * @author  Joe Sexton <joe@webtipblog.com>
     */
    function update_my_custom_type() {
        global $wp_post_types;     
        if ( post_type_exists( 'testimonial' ) ) {     
            // exclude from search results
            $wp_post_types['testimonial']->exclude_from_search = true;
        }
    }


    function wpdocs_my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Type text here..." />
        <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />        
        </form>';
     
        return $form;
    }
    add_filter( 'get_search_form', 'wpdocs_my_search_form' );


?>
