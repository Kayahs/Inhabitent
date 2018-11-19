<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">

    <label for="<?php echo $this->get_field_id( 'monfri' ); ?>">Monday-Friday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'monfri' ); ?>" name="<?php echo $this->get_field_name( 'monfri' ); ?>" value="<?php echo esc_attr( $monfri ); ?>">

    <label for="<?php echo $this->get_field_id( 'sat' ); ?>">Saturday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sat' ); ?>" name="<?php echo $this->get_field_name( 'sat' ); ?>" value="<?php echo esc_attr( $sat ); ?>">

    <label for="<?php echo $this->get_field_id( 'sun' ); ?>">Sunday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sun' ); ?>" name="<?php echo $this->get_field_name( 'sun' ); ?>" value="<?php echo esc_attr( $sun ); ?>">
  </p>


</div>
