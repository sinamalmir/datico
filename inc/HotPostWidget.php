<?php

class HotPostWidget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(false, 'مطالب پر مخاطب');
	}

	function widget($args, $instance)
	{
		echo '<div class="py-7 mb-5  px-5 border border-lightBorder rounded-lg widget-style">';

//		echo $args['before_widget'];
		if (!empty($instance['title'])) {
			echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
		} else {
			echo 'برای ویجت خود عنوان انتخاب کنید!';
		}
		echo $args['after_title'];
		$args = [
			'post_type' => 'post',
			'posts_per_page' => 4,
			'orderby' => 'comment_count',
			'order' => 'DESC'
		];
		$hot_post = new WP_Query($args);
//        echo '<pre>';
//        var_dump($hot_post);
//        echo '</pre>';

		if ($hot_post->have_posts()) ;
		while ($hot_post->have_posts()) : $hot_post->the_post();
//            echo $hot_post->post->post_date;
			?>

                <div>
                    <a href="<?php the_permalink(); ?>" class="flex item-slider-custom items-center gap-3 ">
                        <?php
                        if (has_post_thumbnail()){
                            the_post_thumbnail('',array(
                                'class' => ' hover:opacity-50 rounded-lg sidebar-img-size max-w-[110px] w-full ',
                                'alt'=> get_the_title(),
                            ));
                        }else{
                            ?>
                            <img class="max-w-[110px] rounded-lg object-cover" src="<?php echo
                                get_template_directory_uri().'/assets/img/test11.webp'
                            ?>" alt="">
                            <?php
                        }
                        ?>
                        <div >
                            <h3 class="mb-1 font-bold text-xs"> <?php echo  get_the_title(); ?> </h3>
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-light text-lightMain"> <?php echo TimeModify::time_ago($hot_post->post->post_date); ?></span>
                                <span class="text-xs font-light text-lightMain">|</span>
                                <span class="text-xs font-light text-lightMain flex items-center gap-1 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                                    <?php echo get_comments_number(); ?> </span>
                            </div>
                        </div>
                    </a>
                </div>

		<?php
		endwhile;
		wp_reset_postdata();
        echo '</div>';
//        echo $args['after_widget'];
	}

	function form($instance)
	{
		$title = !empty($instance['title']) ? $instance['title'] : 'عنوان پیشفرض ';
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان ویجت</label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
			       name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
			       value="<?php echo esc_attr($title); ?>">

		</p>
		<?php
	}

	function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
		return $instance;
	}
}

function dwt_register_hot_post_widget()
{
	register_widget('HotPostWidget');
}

add_action('widgets_init', 'dwt_register_hot_post_widget');