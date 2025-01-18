<?php
    class Widgets_dsmb extends WP_Widget
    {
        public function __construct()
        {
            parent::__construct(
                'dsmb_author_info',
                __('Mediplus Author Info', 'dsmb'),
                [
                    'description' => __('Sample Author info box based on Tutorial', 'dsmb'),
                ],
            );
        }

        public function widget($args, $instance)
        {
            $widget_title = $instance['title'] ?? '';
            $widget_image_url = $instance['widget_author_image_upload'] ?? '';
            $widget_author_info = $instance['author_info'] ?? '';
           echo $args['before_widget'];
           printf("%s%s%s", $args['before_title'], __($widget_title, 'dsmb'), $args['after_title']);

        ?>
            <div class="widget">
                <div class="image">
                <img src="<?php esc_attr_e($widget_image_url); ?>" alt="<?php echo esc_attr($widget_title) ?>">
                </div>
                <p><?php _e($widget_author_info, 'dsmb'); ?></p>
            </div>

        <?php
            echo $args['after_widget'];
        }

        public function form($instance)
        {
            $widget_title = $instance['title'] ?? '';
            $widget_image_url = $instance['widget_author_image_upload'] ?? '';
            $widget_author_info = $instance['author_info'] ?? '';
            ?>
                <div>
                    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'dsmb'); ?></label>
                    <input id="<?php echo esc_attr($this->get_field_id('title')); ?>" type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($widget_title); ?>" class="widefat">
                </div>
                <div class="widget_author_image_upload_div">
                    <button class="button author_image_upload_btn"><?php esc_html_e('Upload Image', 'dsmb'); ?></button>
                    <input type="hidden" class="widget_author_image_url" id="" name="<?php echo esc_attr($this->get_field_name('widget_author_image_upload')); ?>" value="<?php echo esc_url($widget_image_url); ?>">
                    <img class="widget_imgae_prv" src="<?php echo esc_url($widget_image_url); ?>" width="200px" alt="<?php echo esc_attr($widget_title) ?>">
                </div>
                <div>
                    <label for="<?php echo esc_attr($this->get_field_id('author_info')); ?>"><?php esc_html_e('Author Info', 'dsmb'); ?></label>
                    <textarea class="widefat" name="<?php echo $this->get_field_name('author_info'); ?>" id="<?php echo esc_attr($this->get_field_id('author_info')); ?>"><?php echo esc_html($widget_author_info); ?></textarea>
                </div>
            <?php
        }

}
