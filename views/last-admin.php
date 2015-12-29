<!-- This file is used to markup the admin-facing widget. -->

<div class="atd-widget around-this-date-last-x-years-admin">

  <fieldset>
    <legend><?php _e('Basic options', PLUGIN_LOCALE); ?></legend>
    <div class="option">
      <p><label for="title"><?php _e('Title: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" /></p>
    </div>
    <div class="option">
      <p><label for="lastxyears"><?php _e('Last X years: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('lastxyears'); ?>" name="<?php echo $this->get_field_name('lastxyears'); ?>" value="<?php echo $instance['lastxyears']; ?>" class="tiny-text" /></p>
    </div>
    <div class="option">
      <p><label for="daysbefore"><?php _e('Days before: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('daysbefore'); ?>" name="<?php echo $this->get_field_name('daysbefore'); ?>" value="<?php echo $instance['daysbefore']; ?>" class="tiny-text" /></p>
    </div>
    <div class="option">
      <p><label for="daysafter"><?php _e('Days after: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('daysafter'); ?>" name="<?php echo $this->get_field_name('daysafter'); ?>" value="<?php echo $instance['daysafter']; ?>" class="tiny-text" /></p>
    </div>
    <div class="option">
      <p><label for="limit"><?php _e('Limit of entries: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" value="<?php echo $instance['limit']; ?>" class="tiny-text" /></p>
    </div>
    <div class="option">
      <p><label for="none"><?php _e('Text when no entries: ', PLUGIN_LOCALE); ?></label>
      <input type="text" id="<?php echo $this->get_field_id('none'); ?>" name="<?php echo $this->get_field_name('none'); ?>" value="<?php echo $instance['none']; ?>" class="widefat" /></p>
    </div>
  </fieldset>
  <fieldset>
    <legend><?php _e('Advanced options', PLUGIN_LOCALE); ?></legend>
    <div class="option">
      <p><input type="checkbox" id="<?php echo $this->get_field_id('showexcerpt'); ?>" name="<?php echo $this->get_field_name('showexcerpt'); ?>" value="1" <?php checked( 1, $instance['showexcerpt']); ?> class="" /><label for="showexcerpt"><?php _e('Show excerpt', PLUGIN_LOCALE); ?></label>
      </p>
    </div>
    <div class="option">
      <p><input type="checkbox" id="<?php echo $this->get_field_id('showyear'); ?>" name="<?php echo $this->get_field_name('showyear'); ?>" value="1" <?php checked(1, $instance['showyear']); ?> class="" /><label for="showyear"><?php _e('Show year', PLUGIN_LOCALE); ?></label>
      </p>
    </div>
    <div class="option">
      <p><input type="checkbox" id="<?php echo $this->get_field_id('showdate'); ?>" name="<?php echo $this->get_field_name('showdate'); ?>" value="1" <?php checked(1, $instance['showdate']); ?> class="" /><label for="showdate"><?php _e('Show date', PLUGIN_LOCALE); ?></label>
      </p>
    </div>
    <div class="option">
      <p><label for="dateformat"><?php _e('Date format: ', PLUGIN_LOCALE); ?> <a href="http://www.php.net/date" title="PHP Manual: Date"><?php _e('See PHP Date Manual', PLUGIN_LOCALE); ?></a></label>
      <input type="text" id="<?php echo $this->get_field_id('dateformat'); ?>" name="<?php echo $this->get_field_name('dateformat'); ?>" value="<?php echo $instance['dateformat']; ?>" class="" /></p>
    </div>
  </fieldset>
</div>
