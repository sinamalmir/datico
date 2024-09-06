<div class=" py-7 px-3 md:px-6 border border-lightBorder rounded-lg ">
    <div class=" ">
        <h2 class="px-3 py-2 border-b-2 border-b-tag mb-3 ">نظرات  </h2>
    </div>
	<?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    ?>
</div>