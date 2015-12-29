<?php

class Around_This_Date_X_Years_Ago_Widget extends WP_Widget {

    /*--------------------------------------------------*/
    /* Constructor
    /*--------------------------------------------------*/

    /**
     * Specifies the classname and description, instantiates the widget,
     * loads localization files, and includes necessary stylesheets and JavaScript.
     */
    public function __construct() {

        // load plugin text domain
        add_action( 'init', array( $this, 'widget_textdomain' ) );

        // Hooks fired when the Widget is activated and deactivated
        register_activation_hook( __FILE__, array( $this, 'activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

        parent::__construct(
            'around-this-date-x-years-ago',
            __( '[atd] Around This Date X Years Ago', 'around-this-date-widget-edition' ),
            array(
                'classname'     =>  'around_this_date_x_years_ago',
                'description'   =>  __( 'Retreive posts around this date X years ago', 'around-this-date-widget-edition' )
            )
        );

        // Register admin styles and scripts
        add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );

        // Register site styles and scripts
        add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );

    } // end constructor

    /*--------------------------------------------------*/
    /* Widget API Functions
    /*--------------------------------------------------*/

    /**
     * Outputs the content of the widget.
     *
     * @param   array   args        The array of form elements
     * @param   array   instance    The current instance of the widget
     */
    public function widget( $args, $instance ) {

        extract( $args, EXTR_SKIP );

        echo $before_widget;

        include( plugin_dir_path( __FILE__ ) . '/views/widget.php' );

        echo $after_widget;

    } // end widget

    /**
     * Processes the widget's options to be saved.
     *
     * @param   array   new_instance    The previous instance of values before the update.
     * @param   array   old_instance    The new instance of values to be generated via the update.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags(stripslashes($new_instance['title']));
        $instance['daysbefore'] = strip_tags(stripslashes($new_instance['daysbefore']));
        $instance['daysafter'] = strip_tags(stripslashes($new_instance['daysafter']));
        $instance['mode'] = strip_tags(stripslashes($new_instance['mode']));
        $instance['yearsago'] = strip_tags(stripslashes($new_instance['yearsago']));
        $instance['sinceyear'] = strip_tags(stripslashes($new_instance['sinceyear']));
        $instance['lastxyears'] = strip_tags(stripslashes($new_instance['lastxyears']));
        $instance['limit'] = strip_tags(stripslashes($new_instance['limit']));
        $instance['none'] = strip_tags(stripslashes($new_instance['none']));
        $instance['showyear'] = strip_tags(stripslashes($new_instance['showyear']));
        $instance['showdate'] = strip_tags(stripslashes($new_instance['showdate']));
        $instance['dateformat'] = strip_tags(stripslashes($new_instance['dateformat']));
        $instance['showexcerpt'] = strip_tags(stripslashes($new_instance['showexcerpt']));

        return $instance;

    } // end widget

    /**
     * Generates the administration form for the widget.
     *
     * @param   array   instance    The array of keys and values for the widget.
     */
    public function form( $instance ) {

        $instance = wp_parse_args(
            (array) $instance,
        array(
          'title' => 'This week last year...',
      		'daysbefore' => 3,
      		'daysafter' => 3,
      		'mode' => 1,
      		'yearsago' => 1,
      		'lastxyears' => 1,
      		'sinceyear' => 2006,
      		'limit' => 4,
      		'none' => 'none',
      		'showyear' => true,
      		'showdate' => false,
      		'dateformat' => 'F j',
      		'showexcerpt' => false
        )
        );

        $title = strip_tags(stripslashes($new_instance['title']));
        $daysbefore = strip_tags(stripslashes($new_instance['daysbefore']));
        $daysafter = strip_tags(stripslashes($new_instance['daysafter']));
        $mode = strip_tags(stripslashes($new_instance['mode']));
        $yearsago = strip_tags(stripslashes($new_instance['yearsago']));
        $sinceyear = strip_tags(stripslashes($new_instance['sinceyear']));
        $lastxyears = strip_tags(stripslashes($new_instance['lastxyears']));
        $limit = strip_tags(stripslashes($new_instance['limit']));
        $none = strip_tags(stripslashes($new_instance['none']));
        $showyear = strip_tags(stripslashes($new_instance['showyear']));
        $showdate = strip_tags(stripslashes($new_instance['showdate']));
        $dateformat = strip_tags(stripslashes($new_instance['dateformat']));
        $showexcerpt = strip_tags(stripslashes($new_instance['showexcerpt']));

        // Display the admin form
        include( plugin_dir_path(__FILE__) . '/views/admin.php' );

    } // end form

    /*--------------------------------------------------*/
    /* Public Functions
    /*--------------------------------------------------*/

    /**
     * Loads the Widget's text domain for localization and translation.
     */
    public function widget_textdomain() {

        load_plugin_textdomain( 'around-this-date-widget-edition', false, plugin_dir_path( __FILE__ ) . '/lang/' );

    } // end widget_textdomain

    /**
     * Registers and enqueues admin-specific styles.
     */
    public function register_admin_styles() {

        $plugin_url = get_template_directory_uri().'/inc/widgets/around-this-date-widget/css/admin.css';
        wp_enqueue_style( 'around-this-date-wifget-admin-styles', $plugin_url);

    } // end register_admin_styles


    /**
     * Registers and enqueues widget-specific styles.
     */
    public function register_widget_styles() {

        $plugin_url = get_template_directory_uri().'/inc/widgets/around-this-date-widget/css/widget.css';
        wp_enqueue_style( 'around-this-date-widget-styles', $plugin_url);

    } // end register_widget_styles


} // end class

add_action( 'widgets_init', create_function( '', 'register_widget("Around_This_Date_X_Years_Ago_Widget");' ) );
