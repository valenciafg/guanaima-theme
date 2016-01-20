<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09-01-2016
 * Time: 09:19 AM
 */
?>
<form role="search" action="<?php echo site_url('/'); ?>" class="form-wrapper cf" id="searchForm-media">
  	<input type="text" name="s" placeholder="Search here..." required>
	<input type="hidden" name="post_type" value="attachment">
  	<button type="submit">Search</button>
</form>