<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">

    <label for="<?php echo $this->get_field_id( 'email' ); ?>">Monday-Friday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>">

    <label for="<?php echo $this->get_field_id( 'phone' ); ?>">Saturday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" value="<?php echo esc_attr( $phone ); ?>">

    <label for="<?php echo $this->get_field_id( 'address' ); ?>">Sunday:</label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" value="<?php echo esc_attr( $address ); ?>">
  </p>


</div>
