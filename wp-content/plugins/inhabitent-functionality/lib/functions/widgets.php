<?php
/**
  Widgets
*/
  class Business_Hours_Widget extends WP_Widget {
    function __construct() {
      parent::__construct('my_business_hours_widget',
        __('List Business Hours', 'myplugins'),
      array (
        'description' => __( 'Adds Business Hours to specified location' )
      )
      );
    }

    function form( $instance ) {

    }

    function update( $new_instance, $old_instance ) {

    }

    function widget( $args, $instance ) {

    }
  }

  function register_business_hours_widget() {
    register_widget( 'Business_Hours_Widget' );
  }

  add_action( 'widgets_init', 'register_business_hours_widget' );
?>