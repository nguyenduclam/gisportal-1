<html>
<body>
	<h3><?php echo sprintf(lang('email_forgot_password_heading'), $identity);?></h3>
	<p><?php echo sprintf(lang('email_forgot_password_subheading'), anchor('auth/reset_password/'. $forgotten_password_code, lang('email_forgot_password_link')));?></p>
    <br><br>
    <hr>
    <footer><?php echo $this->config->item('site_title') . ' - ' . $_SERVER['SERVER_NAME']; ?></footer>
</body>
</html>