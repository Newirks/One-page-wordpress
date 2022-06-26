<h1>One Page Theme Options</h1>
<p>You can edit and add header and footer fields from this area.</p>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('onepage-settings-group'); ?>
	<?php do_settings_sections('one_page_menu'); ?>
	<?php submit_button(); ?>
</form>
