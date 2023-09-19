<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page = basename($url);
$login_status = $_GET["login_status"];
if ($login_status == "failed") {echo "<div class='alert alert-primary' role='alert'>
  Login information incorrect, please try again!
</div>";}
$title = get_the_title();
if ($page == 'premium') {$title="Exclusive News";} 
$url =  $_SERVER['REQUEST_URI'];  
if ($title != "Member Area") {
	$alert = '<div class="alert alert-primary" role="alert"><span style="
color: #7a0904;
">Members Only:  </span>&nbsp;'.$title.'</div>';}
if ($title == "Member Area") {
$alert = '<div class="alert alert-primary" role="alert">
  We are making changes to our site!  Please be patient as the changes take effect and we make adjustments.
</div>';}


echo '

<div class="page-login"><div class="mobile-alert">'.$alert.'</div>
<div class="wrapper" id="page-wrapper" style="padding-bottom:0px;">

	<div class="container" id="content" tabindex="-1">
	<div class="desktop-alert">'.$alert.'</div>
		<div class="row">

			<!-- Do the left sidebar check -->
			
<div class="col-md content-area" id="primary">

			<main class="site-main" id="main">

				
<article class="post-25490 page type-page status-publish hentry" id="post-25490" style="

">

	<header class="entry-header">

		<h1 class="entry-title">Member Login</h1>
	</header><!-- .entry-header -->

	
	<div class="entry-content">

		
  <div class="login-form">'.
  
do_shortcode('[frm-login class="frm_style_afds-style" layout=v label_username="Username or Email" username_placeholder="username or email" password_placeholder ="password" show_lost_password="1" label_lost_password="forgot password" redirect="'.$url.'"]').'</div>
  
 


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			
</div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->


	<div class="col-md-6 widget-area" id="right-sidebar">
<aside id="block-3" class="widget widget_block">
<img class="login-help" src="/wp-content/themes/understrap-child-jamr/inc/help-icon.png" alt="help logo" style="
    display: inline;
    vertical-align: top;
    margin-top: 8px;
    margin-right: 10px;
">
<h1 style="display: inline;" class="entry-title">Help</h1>
<p style="
margin-top: 30px;
">Forgot your membership information?  Contact us immediately.
<div class="collapse" id="collapseExample">
Our office is open from 9am to 5pm EST – Monday to Friday</p>
<h5>Phone number:</h5>
<p style="
margin-top: 15px;
">Local 555.555.5555<br>
Toll free: 1.888.888.8888/p>
<p style="
margin-top: 15px;
">Email: <a href="mailto:help@jamr.app">help@jamr.app</a></p>
<h6 style="
color: gray;
">After hours?</h6>
Use our <a href="/contact">Contact Us</a> form.  We will follow up as soon as possible.
</div>
<div class="d-sm-block d-md-none"><a class="btn  btn-sm btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">More</a></div>

<div class="d-none d-md-block">
Our office is open from 9am to 5pm EST – Monday to Friday</p>
<h5>Phone number:</h5>
<p style="
margin-top: 15px;
">Local 555.555.5555<br>
Toll free: 1.888.888help.8888</p>
<p style="
margin-top: 15px;
">Email: <a href="mailto:help@jamr.app.ca">help@jamr.app</a></p>
<h6 style="
color: gray;
">After hours?</h6>
Use our <a href="/contact">Contact Us</a> form.  We will follow up as soon as possible.
</aside>
</div><!-- #right-sidebar -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>

<div class="wrapper" id="wrapper-footer-full" role="footer"  style="padding-top:0px;">

		<div class="container" id="footer-full-content" tabindex="-1">

			<div class="row">

				<div id="block-6" class="footer-widget widget_block widget-count-1 col-md-12"><div>
    <!---<div class="understrap-demo-bar" style="z-index:999;display: flex;align-items: center;justify-content: space-between;background-color: #fff;bottom: 0;padding: 7px 10px;position: fixed;left: 0;width: 100%;box-shadow: 0 0 20px 0 rgba(38, 50, 56,.25);">
    <span style="font-size: 20px;color: #ac3c68;font-weight: 700;"></span><br>
    <a href="/directory" style="background:#ac3c68;border-radius:2px;color:#fff;cursor:pointer;font-size: 16px;font-weight: 700;margin: 3px;padding: 7px 24px 7px;
position: relative;text-align: center;text-decoration: none;vertical-align: middle;white-space: normal;width: auto;">Find Specialist</a>
</div>--->
    </div>
<div>
    <hr>
<div class="container">
<h5>Not a Member?</h5>
<p>Benefits of joining The Academy include:</p>
<div class="row">
<div class="col-md-6 widget-area" id="right-sidebar">
<ul>
<li>Being a member of an elite group of professionals</li>
<li>Contributing to industry changes</li>
<li>Access to exclusive content, resources &amp; tools</li>
<li>Access to proprietary Perspective Software© &amp; updates</li>
<li>Ambassador program for speaker promotion &amp; writing articles</li>
</ul>
</div>
<div class="col-md-6 widget-area" id="right-sidebar">
<ul>
<li>Free webinars with CE credits</li>
<li>Exclusive pricing for Family Transitions Advanced Education Day</li>
</ul>
<p><a title="Join" href="/join/" class="btn" style="
    float: right;
    background: #686869;
    color: white;
    margin-right: 25px;
">Join</a>
</p>
</div>
</div>
</div>
    </div>
</div><!-- .footer-widget -->
			</div>

		</div>

	</div>

</div>
';







get_footer();
?>
