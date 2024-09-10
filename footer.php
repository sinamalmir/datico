
<!-- start footer -->


<footer class="foooter  mt-10 bg-white dark:bg-black  border-t border-t-lightBorder dark:border-t-darkBorder   ">

    <div class="container flex flex-col md:flex-row gap-y-5 gap-6 justify-between p-5 py-20">

        <div class="flex-1 ">
			<?php
			if (is_active_sidebar('danati-footer1')){
				dynamic_sidebar('danati-footer1');
			}
			?>
        </div>

        <div  class="flex-1 ">
			<?php
			if (is_active_sidebar('danati-footer2')){
				dynamic_sidebar('danati-footer2');
			}
			?>
        </div>
        <div  class="flex-1 ">
			<?php
			if (is_active_sidebar('danati-footer3')){
				dynamic_sidebar('danati-footer3');
			}
			?>
        </div>


    </div>


    <div class="bg-darkMain copyright ">
        <div class="flex container items-center justify-center w-full  text-darkTextMain py-5   " >
            <span >
                <?php
                $footer = danati_get_option('sina_theme_footer_options');
                $copyright_txt = $footer[0]['sina_theme_copyright_footer_option'];
                     echo $copyright_txt;
               ?>

            </span>
        </div>
    </div>

</footer>




<!--<script src="../src/js/swiper-bundle.min.js"></script>-->
<!--<script src="../src/js/jquery-3.7.1.min.js"></script>-->
<!--<script src="../src/js/main.js"></script>-->

<?php wp_footer(); ?>
</body>
</html>