<?php
/**
 *  template for generating pagination
 *
 * @package WordPress
 * @subpackage 
 * @since  1.0
 */
?>

<!-- begin #pagination -->
<?php
	if (function_exists("emm_paginate")) {
		emm_paginate();
	 } else {
?>

<div class="navigation">
    <div class="alignleft"><?php next_posts_link(__('Older','site5framework')) ?></div>
    <div class="alignright"><?php previous_posts_link(__('Newer','site5framework')) ?></div>
</div>

	<?php } ?>
<!-- end #pagination -->