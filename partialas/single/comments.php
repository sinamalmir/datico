<div class=" py-7 px-3 md:px-6 border border-lightBorder rounded-lg ">
	<?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    ?>
</div>