<?php

class ReadEstimateTime
{


	public static function dwt_read_estimate_time($word_count,string $wpm = '300') :string
	{
		ob_start();
		the_content();
		$content = ob_get_clean();
		$word_count = sizeof(explode(" ", $content));

		return ceil($word_count / $wpm);
	}
}
