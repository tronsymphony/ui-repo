<?php

// Login Logo
add_action("login_head", "my_login_head");

function my_login_head(){

?>
	<style>
body {
  background-color: #eee;
}
#login {
  padding: 160px 0 0;
  width: 420px;
}
#loginform {
  background: #8f5135;
  box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.13);
  border-radius: 3px;
}
.login h1 {
  width: 420px;
  text-align: center;
}
.login h1 a {
  margin: 0 auto 0 auto;
  text-align: center;
  display: block;
  width: 420px;
  padding-left: 0px;
  padding-bottom: 10px;
}
.login label {
  color: #fff;
}
body.login {
  background: #ffffff;
  background-position: 50%;
  background-size: cover;
}
body.login #login h1 a {
  background-color: #000;
  /* logo */
  background: url("<?php echo MAINLOGO; ?>") no-repeat scroll center top;
  padding-bottom: 0;
  text-align: center;
  background-size: contain;
}
.login #nav,
.login #backtoblog {
  text-shadow: none;
  text-align: center;
}
.login #nav a,
.login #backtoblog a,
.privacy-policy-page-link a {
  color: #3c4a4f;
  text-decoration: none;
  font-size: 100%;
}
.login #nav a:hover,
.login #backtoblog a:hover,
.privacy-policy-page-link a:hover {
  color: #05a2b5 !important;
  text-decoration: underline;
}
.wp-core-ui .button-primary {
  background: #ffffff;
  border-color: #ffffff;
  box-shadow: 0 2px 0 #bdbdbd;
  color: #029b7e;
  text-decoration: none;
  text-shadow: none;
}
.login form {
  margin-top: 20px;
  margin-left: 0;
  padding: 30px 30px;
  font-weight: 400;
  overflow: hidden;
  box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.39);
  border-radius: 0px;
  border: none;
}

	</style>

<?php
}

function put_my_url(){
	return(get_bloginfo('url'));
}

add_filter('login_headerurl', 'put_my_url');
//add_filter('login_headertitle', return 'put_my_url'));
?>
