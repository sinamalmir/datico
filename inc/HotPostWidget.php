<?php
//
//class HotPostWidget extends WP_Widget
//{
//	function __construct()
//	{
//		parent::__construct(false, 'مطالب پر مخاطب');
//	}
//
//	function widget($args, $instance)
//	{
//		echo $args['before_widget'];
//		if (!empty($instance['title'])) {
//			echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
//		} else {
//			echo 'برای ویجت خود عنوان انتخاب کنید!';
//		}
//		echo $args['after_title'];
//		$args = [
//			'post_type' => 'post',
//			'posts_per_page' => 4,
//			'orderby' => 'comment_count',
//			'order' => 'DESC'
//		];
//		$hot_post = new WP_Query($args);
////        echo '<pre>';
////        var_dump($hot_post);
////        echo '</pre>';
//
//		echo '<div class="flex flex-col gap-3  ">';
//		if ($hot_post->have_posts()) ;
//		while ($hot_post->have_posts()) : $hot_post->the_post();
////            echo $hot_post->post->post_date;
//			?>
<!--			<a href="--><?php //the_permalink(); ?><!--" class="flex item-slider-custom items-center gap-3 ">-->
<!--<!--				<img src="../assets/img/test11.webp" alt="" class=" hover:opacity-50 rounded-lg min-h-[75px] max-w-[110px] w-full ">-->-->
<!--				--><?php
//				if (has_post_thumbnail()) {
//					the_post_thumbnail('', [
//						'class' => 'hover:opacity-50 rounded-lg min-h-[75px] max-w-[110px] w-full ',
//						'alt' => get_the_title()
//					]);
//
//				} else {
//					echo "sina";
//				}
//				?><!--				<div >-->
<!--					<h3 class="mb-1 font-bold text-xs"> --><?php //echo get_the_title(); ?><!--</h3>-->
<!--					<span class="text-xs font-light text-lightMain">--><?php //echo get_the_date("j F Y"); ?><!-- </span>-->
<!--				</div>-->
<!--			</a>-->
<!--		--><?php
//		endwhile;
//		wp_reset_postdata();
//		'</div>';
////        echo $args['after_widget'];
//	}
//
//	function form($instance)
//	{
//		$title = !empty($instance['title']) ? $instance['title'] : 'عنوان پیشفرض ( برای ویجت خود یک عنوان انتخاب نمایید! )';
//		?>
<!--		<p>-->
<!--			<label for="--><?php //echo esc_attr($this->get_field_id('title')); ?><!--">عنوان ویجت</label>-->
<!--			<input class="widefat" id="--><?php //echo esc_attr($this->get_field_id('title')); ?><!--"-->
<!--			       name="--><?php //echo esc_attr($this->get_field_name('title')); ?><!--" type="text"-->
<!--			       value="--><?php //echo esc_attr($title); ?><!--">-->
<!---->
<!--		</p>-->
<!--		--><?php
//	}
//
//	function update($new_instance, $old_instance)
//	{
//		$instance = array();
//		$instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
//		return $instance;
//	}
//}
//
//function dwt_register_hot_post_widget()
//{
//	register_widget('HotPostWidget');
//}
//
//add_action('widgets_init', 'dwt_register_hot_post_widget');