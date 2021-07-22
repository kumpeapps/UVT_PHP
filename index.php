<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>UVT</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="skin-green-dark fix-header single-column card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">UVT</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">UV</span>Trainer</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <?php include_once "includes/top_bar.php"; ?>

                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <?php include_once "includes/mega_menu.php"; ?>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->

                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include_once "includes/left_sidebar.php"; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">UVT</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                               <li class="breadcrumb-item active" id="title"></li>
                            </ol>
                          <!--  <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                        </div>
                    </div></div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            
                            
                            		<div align="left">
			<p>
			<p id="domain"></p>
		</div>
		<div align="center">
			<p id="alert"></p>
			<p id="body">Please wait while the data is loaded and license is verified.<br>This should only take a few seconds.  If it takes longer please use the comments form or email helpdesk+uvt@kumpeapps.com to report the error.</p>
			<p id="body2"></p>
			<p id="bottom"></p>
			<br>
			<br>
<p id="sendemailp"></p>
<p id="shorturlp"></p>
<IFRAME style="display:none" name="hidden-form"></IFRAME> 
<IFRAME style="display:none" name="hidden-form2"></IFRAME> 
			<p id="license"></p>
			<p id="supportcomments"><br>For Support or Suggestions (or to help improve this code) view goto https://github.com/kumpeapps/UVT_PHP and raise an issue or submit a pull request.</p>
			
		</p>
		</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
		
	<script>

window.onload = function () {
	window.userlicense = ""
	window.license = "null"
	window.auth = "null"
	window.supportappsource = "3"
	window.supportdevice = "6"
	window.device = getUrlVars()["device"];
	window.license = getUrlVars()["license"];
	window.version = "10.1";
	window.crtblock = "";
	deviceLicense();
	}
<!-- Check Device License -->	
function deviceLicense(){

	viewport = document.querySelector("meta[name=viewport]");
	viewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0');
	window.devicelicense = " for WebApp Use-";
	window.supportdevice = "6";
	window.supportappsource = "3";
	document.getElementById("bottom").innerHTML = "<br><code id='backbutton'><INPUT class='btn btn-outline-dark' TYPE='button' disabled value='Back' class='btn btn-outline-dark' ></code> <INPUT class='btn btn-outline-dark' TYPE='button' onClick='checkLicense()' value='Home'>";
	checkLicense();
}

<!-- End Check Device License -->

	<!-- Check For User Licensing -->
function checkLicense() {
	window.userlicense = "-Public License";
	window.sectionlicense = "JKUVT";
	detectIntranet();
}
	<!-- End Check For User Licensing -->
	
	<!-- Start Network Detection (Detects if user is on AT&Ts internal network) -->
	
	<!-- Enables Licensing for AT&T -->
	var detectionCounter = 0;
	var detectionTimeOut = 5;
	var detectionImage = 'https://webphone.att.com/favicon.ico';
	var detectionElement = document.createElement('img');
	detectionElement.src = detectionImage;
	
// Outdated Function. No longer requires intranet detection.
function detectIntranet() {
    window.auth = "public";
    document.getElementById("license").innerHTML = userlicense + devicelicense;
    checkSectionLicense();
}
	<!-- End Network Detection -->
	
	<!-- Start Check Section License -->
	
	function checkSectionLicense() {
 if (sectionlicense == "StaticsTrainer") {
	StaticsTrainer();
} else if (sectionlicense == "JKUVT") {
	JKUVT();
} else {
	checkLicense();
}
}
	
	<!-- End Detect Section License -->
	
	<!-- Start JKUVT -->
	function JKUVT() {
	document.getElementById("body2").innerHTML = "";
    document.getElementById("title").innerHTML = "UVT- " + version;
    var body = "<INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='RJ45()' value='View RJ-45 Wiring Scheme'><br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='fibercolor()' value='View Fiber Color Code'><br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='coppercolor()' value='View 25 Pair Color Code'><br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='StaticsTrainer()' value='Uverse RG Static IP Trainer'><p id='attbody'></p><br><p id='uvtphoto'></p>";
    document.getElementById("body").innerHTML = body;
<!-- Check License Authorization -->
	if (auth == "att") {
	document.getElementById("attbody").innerHTML = "<br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='RGCapabilities()' value='UV RG Capabilities'><br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='CommonWiFiDevices()' value='Common WiFi Device Capabilities'><br><br><INPUT class='btn btn-rounded btn-success' TYPE='button' onClick='starps()' value='VOIP Star Codes'>";
} else {
	document.getElementById("attbody").innerHTML = "";
}
}
<!-- End Check License Authorization -->


	function RJ45() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "<p id='uvtphoto'></p>";
    document.getElementById("uvtphoto").innerHTML = "<img id='uvtPhoto' src='Photos/none.jpg' alt='' max-width='450' max-height='275' width='100%' height='auto' border='0'>";
    document.getElementById("uvtPhoto").src = "Photos/rj45-wiring-schemes.png";
}	
	function RGCapabilities() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "<p id='uvtphoto'></p>";
    document.getElementById("uvtphoto").innerHTML = "<img id='uvtPhoto' src='Photos/none.jpg' alt='' max-width='450' max-height='275' width='100%' height='auto' border='0'>";
    document.getElementById("uvtPhoto").src = "Photos/RG-WiFi-Capabilities.png";
}	
	function CommonWiFiDevices() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "<p id='uvtphoto'></p>";
    document.getElementById("uvtphoto").innerHTML = "<img id='uvtPhoto' src='Photos/none.jpg' alt='' max-width='450' max-height='275' width='100%' height='auto' border='0'>";
    document.getElementById("uvtPhoto").src = "Photos/Common_WiFi_Devices.png";
}	

	function fibercolor() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "<p id='uvtphoto'></p>";
    document.getElementById("uvtphoto").innerHTML = "<img id='uvtPhoto' src='Photos/none.jpg' alt='' max-width='200' max-height='344.39' width='100%' height='auto' border='0'>";
    document.getElementById("uvtPhoto").src = "Photos/fiber_color-code.jpg";
}	

	function coppercolor() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "<p id='uvtphoto'></p>";
    document.getElementById("uvtphoto").innerHTML = "<img id='uvtPhoto' src='Photos/none.jpg' alt='' max-width='200' max-height='400' width='100%' height='auto' border='0'>";
    document.getElementById("uvtPhoto").src = "Photos/25-pair-color-code.png";
}		
	function starps() {
    document.getElementById("attbody").innerHTML = "";
	document.getElementById("body").innerHTML = "Star ps<br><br>Anonymous Call Blocking<br>On: *77#<br>Off: *87#<br><br>All Call Forwarding<br>On: *72,forwarding number,#<br>Off: *73#<br><br>Busy Call Forwarding<br>On: *90,forwarding number,#<br>Off: *91#<br><br>Call Blocking<br>On: *90,number,#<br>Off: *91#<br><br>Caller ID Blocking (Per Call)<br>*67,dial number,#<br><br>Call Waiting<br>On: *371#<br>Off: *370#<br><br>Do Not Disturb<br>On: *78#<br>Off: 79#<br><br>Safe Call Forwarding<br>(Allows to forward incoming calls to another number if main phone line has a service disruption)<br>On: *372,forwarding number,#<br>Off: *373#";
}	

<!-- End JKUVT -->

<!-- Start Static IP Trainer -->

	function StaticsTrainer() {
	document.getElementById("body2").innerHTML = "";
    document.getElementById("attbody").innerHTML = "";
    document.getElementById("title").innerHTML = "UVT- Uverse RG Static IP Trainer V" + version;
    document.getElementById("body2").innerHTML = "";
	

	window.back1 = "JKUVT";
	GiveIP();
}
<!-- End Check License Authorization -->
	
	function main()
{
	<!-- Start Alert if on Windows Platform -->
	var clientBrowser = navigator.platform
	if (clientBrowser == "Win32") {

    var alert = "<p><marquee bgcolor='#fffd00' height='19' loop='infinite' width='100%'>It appears you are using Microsoft Windows.  Please note that this program does not function properly with Internet Explorer.  Please use Safari (preferred) or FireFox.</marquee></p>";
} else {

    var alert = "";
}
	<!-- End Alert -->
	
	document.getElementById("alert").innerHTML = alert;
	var body = "First you need to identify your Start IP Address and Block Size<br><br><INPUT TYPE='button' onClick='GetIP1()' value='I need help getting my Start IP and Block Size'><br><br><INPUT TYPE='button' onClick='GiveIP()' value='I already know my Start IP and Block Size'>";
	document.getElementById("body").innerHTML = body;
	document.getElementById("Photo").src = "Photos/BBNMS-1.jpg";
	
	}
	

	
	function GiveIP() {
	var button = "<INPUT TYPE='button' onClick='GiveIPvar()' value='Next' class='btn btn-outline-success' >";
	window.back2 = "GiveIP";
	var backbutton = "<INPUT TYPE='button' onClick='" + back1 + "()' value='Back' class='btn btn-outline-dark' >";
	var body = "<p>Enter your start IP address and block size then click Next</p><p>Start IP: <input id='o1' type='number' size='3' maxlength='3' min='1' max='254' required/>.<input id='o2' type='number' size='3' maxlength='3' min='1' max='254' required/>.<input id='o3' type='number' size='3' maxlength='3' min='1' max='254' required/>.<input id='o4' type='number' size='3' maxlength='3' min='1' max='254' required/></p><p>Block Size: <select  class='selectpicker' data-style='form-control btn-success' id='Block'><option value='8'>8</option><option value='16'>16</option><option value='32'>32</option><option value='64'>64</option></select></p><br><br>" + button;
	document.getElementById("backbutton").innerHTML = backbutton;
	document.getElementById("body").innerHTML = body;
	document.getElementById("body2").innerHTML = "";
	document.getElementById("button").innerHTML = button;

	
	}
	
	function GiveIPvar() {
	window.o1 = document.getElementById('o1').value;
	window.o2 = document.getElementById('o2').value;
	window.o3 = document.getElementById('o3').value;
	window.o4 = document.getElementById('o4').value;
	var Block = document.getElementById("Block");
	window.blocksize = "";
	window.blocksize = Block.options[Block.selectedIndex].value;
	Identify()
	
	}
	
	function PrePop() {
	window.o1 = getUrlVars()["o1"];
	window.o2 = getUrlVars()["o2"];
	window.o3 = getUrlVars()["o3"];
	window.o4 = getUrlVars()["o4"];
	window.auth = "public"
	document.getElementById("title").innerHTML = "UVT- Uverse RG Static IP Setup Instructions V" + version + "<br> These instructions have been customized for customer with block " + o1 + "." + o2 + "." + o3 + "." + o4;
	var Block = getUrlVars()["block"];
	window.blocksize = "";
	window.blocksize = getUrlVars()["block"];
	window.back2 = "deviceLicense";
	Identify()
	
	}
	
	function Identify() {
		if (blocksize == "8") { 
			window.maskend = "248";
			IdentifyIPs();
		} else if (blocksize == "16") { 
			window.maskend = "240";
			IdentifyIPs();
		} else if (blocksize == "32") { 
			window.maskend = "224";
			IdentifyIPs();
		} else if (blocksize == "64") { 
			window.maskend = "192";
			IdentifyIPs();
		} else {
			window.maskend = "error";
			IdentifyIPs();
		}
	}

	function IdentifyIPs() {
		window.mask = "255.255.255." + maskend;
		var backbutton2 = "<INPUT TYPE='button' onClick='" + back2 + "()' value='Back' class='btn btn-outline-dark' >" ;
		var IP = o1 + "." + o2 + "." + o3 + ".";
		var fuadd = "1";
		var fuo4 = +o4 + +fuadd;
		var lusub = "3";
		var luo4 = +o4 + +blocksize - +lusub;
		var rsub = "2";
		var ro4 = +o4 + +blocksize - +rsub;
		window.fu = IP + fuo4;
		window.lu = IP + luo4;
		window.router = IP + ro4;
		var button = "<!--<INPUT TYPE='button' onClick='promalert()' value='Email Instructions'>--><br><INPUT TYPE='button' onClick='SelectRG()' value='Next' class='btn btn-outline-success' >";
		document.getElementById("backbutton").innerHTML = backbutton2;
		var body = ""
		var body2 = "Below is your Static IP information.  Please write this down and give it to the customer.<br><br>First Useable IP: <b>" + fu + "</b><br>Last Useable IP: <b>" + lu + "</b><br>Router/Default Gateway: <b>" + router + "</b><br>Subnet Mask: <b>" + mask + "</b><br>Primary DNS: <b>68.94.156.1</b><br>Secondary DNS: <b>68.94.157.1</b><br><br> After giving this information to the customer please click next to continue with the instructions. <br><br>" + button;
		document.getElementById("body").innerHTML = body;
		document.getElementById("body2").innerHTML = body2;
	}
	
function promalert(){
	swal({   title: "Email Info and Instructions!",   
    text: "Enter Customer's email address:",   
    type: "input",   
    showCancelButton: true,   
    closeOnConfirm: false,   
    animation: "slide-from-top",   
    inputPlaceholder: "Your Customer's Email address" }, 
    
    function(inputValue){   
        if (inputValue === false) 
        return false;      
           if (inputValue === "") {     
            swal.showInputError("Please enter email!");     
            return false   
            }
        document.getElementById("sendemailp").innerHTML = "<FORM name='sendemail' action='https://uvt.kumpeapps.com/sendemail.php' method='POST' target='hidden-form'><input type='hidden' name='o1' value='" + o1 + "' readonly><input type='hidden' name='o2' value='" + o2 + "' readonly><input type='hidden' name='o3' value='" + o3 + "' readonly><input type='hidden' name='o4' value='" + o4 + "' readonly><input type='hidden' name='block' value='" + blocksize + "' readonly><input type='hidden' name='email' value='" + inputValue + "' readonly></FORM>";      
        document.getElementById("shorturlp").innerHTML = "<FORM name='shorturl' action='https://kumpe.link/yourls-api.php' method='POST' target='hidden-form2'><input type='hidden' name='signature' value='13aee03ea8' readonly><input type='hidden' name='action' value='shorturl' readonly><input type='hidden' name='url' value='https://uvt.kumpeapps.com/?license=prepop&o1=" + o1 + "&o2=" + o2 + "&o3=" + o3 + "&o4=" + o4 + "&block=" + blocksize + "' readonly><input type='hidden' name='keyword' value='" + o1 + o2 + o3 + o4 + blocksize + "' readonly><input type='hidden' name='title' value='UVT- " + o1 + o2 + o3 + o4 + blocksize + "' readonly></FORM>";      
        document.forms['sendemail'].submit();
        document.forms['shorturl'].submit();
        swal("Email Sent!", "You entered following email: " + inputValue, "success"); });
}
	
	function SelectRG() {
		var button = "<INPUT TYPE='button' onClick='RGVar()' value='Next' class='btn btn-outline-success' >";
		var backbutton = "<INPUT TYPE='button' onClick='IdentifyIPs()' value='Back' class='btn btn-outline-dark' >";
		var body = "<p>Select Your RG: <select id='RG'><option value='ARRIS'>BGW210</option><option value='Pace'>5268AC</option><option value='ARRIS'>NVG-510</option><option value='ARRIS'>589</option><option value='ARRIS'>599</option><option value='Pace'>5031</option><option value='Pace'>3801</option></select></p><br><br>" + button;
		document.getElementById("backbutton").innerHTML = backbutton;
		document.getElementById("body").innerHTML = body;
		document.getElementById("body2").innerHTML = "";
		document.getElementById("button").innerHTML = button;
	}
	
	function RGVar() {
		var GetRG = document.getElementById("RG");
		var backbutton = "<INPUT TYPE='button' onClick='IdentifyIPs()' value='Back' class='btn btn-outline-dark' >";
		window.rg = GetRG.options[GetRG.selectedIndex].text;
		window.man = GetRG.options[GetRG.selectedIndex].value;
		Config1()
	}
	
	function Config1() {
		var button = "<INPUT TYPE='button' onClick='Config2()' value='Next' class='btn btn-outline-success' >";
		var backbutton = "<INPUT TYPE='button' onClick='SelectRG()' value='Back' class='btn btn-outline-dark' >";
		var GetPhoto = "Photos/" + auth + "-" + rg + "-1.jpg";
		if (man == "Pace") { 
			var instructions2 = "<p>2. Click Settings</p><p>3. Click Broadband</p><p>4. Click Link Configuration</p>";
		} else if (man == "ARRIS") { 
			var instructions2 = "<p>2. Click Home Network</p><p>3. Click Subnets & DHCP</p>";
		} else {
			var instructions2 = "error";
		}
		var body = "<p>1. Goto the RG Configuration Page <b>(192.168.1.254)</b></p>" + instructions2 + "<p></p><p><img id='Photo' src='Photos/none.jpg' alt='' max-width='574' max-height='197' width='100% height='auto' border='0'></p><br><p id='button'></p>"
		document.getElementById("backbutton").innerHTML = backbutton;
		document.getElementById("body").innerHTML = body;
		document.getElementById("Photo").src = GetPhoto;
		document.getElementById("button").innerHTML = button;
	}
	
	function Config2() {
		var GetPhoto = "Photos/" + rg + "-2.jpg";
		var backbutton = "<INPUT TYPE='button' onClick='Config1()' value='Back' class='btn btn-outline-dark' >";
	
		if (man == "Pace") { 
			var instructions = "<p>5. Scroll down to Supplementary Network</p><p>6. Select Add Additional Network</p><p>7. In The Router Address Field Enter <b>" + router + "</b></p><p>8. In The Subnet Mask Field Enter <b>" + mask + "</b></p><p>9. Check Auto Firewall Open</p><p>10. Click Save</p>";
		} else if (rg == "599") { 
			var instructions = "<p>4. Set Public Subnet Mode to On</p><p>5. Set Allow Inbound Traffic to On</p><p>6. In The Public Gateway Address Field Enter <b>" + router + "</b></p><p>7. In The Public Subnet Mask Enter <b>" + mask + "</b></p><p>8. In The DHCPv4 Start Address Field (Under Public Subnet) Enter <b>" + fu + "</b></p><p>9. In The DHCPv4 End Address Field (Under Public Subnet) Enter <b>" + lu + "</b></p><p>10. Set Primary DHCP Pool to Private</p><p>11. Click Save</p>";
		} else if (man == "ARRIS") { 
			var instructions = "<p>4. Set Public Subnet Enable to On</p><p>5. In The Public IPv4 Address Field Enter <b>" + router + "</b></p><p>6. In The Public Subnet Mask Enter <b>" + mask + "</b></p><p>7. In The DHCPv4 Start Address Field (Under Public Subnet) Enter <b>" + fu + "</b></p><p>8. In The DHCPv4 End Address Field (Under Public Subnet) Enter <b>" + lu + "</b></p><p>9. Set Allow Inbound Traffic To On</p><p>10. Set Primary DHCP Pool to Private</p><p>11. Click Save</p>";
		} else {
			var instructions = "error";
		}

	var body = instructions + "<br><img id='Photo' src='Photos/none.jpg' alt='' max-width='574' max-height='197' width='100% height='auto' border='0'></p><br><br>The Static IPs should now be configured"
	document.getElementById("backbutton").innerHTML = backbutton;
	document.getElementById("body").innerHTML = body;
	document.getElementById("Photo").src = GetPhoto;
	}
	
<!-- End Static IP Trainer -->

<!-- Get Vars from URL -->
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

<!-- End Get Vars from URL -->

<!-- Start CRT Web -->

function CRT() {
	if (crtblock === "yes") { 
	window.body = "It appears you are accessing the CRT site from a corporate network. CRT functions have been blocked for your network.  These CRT functions do not operate properly on corporate networks and have not been authorized by your network administrators. If you believe this is in error please use the support link below to request an authorized link for CRT.";
} else {
	window.body = "Select Option Below then select run on the download window<br>NOTE: These options will ONLY work with Microsoft Windows. No Guarantees are made, these programs are to be used at your own risk. These programs may clear out browsing history and sometimes can cause you to loose your favorites.  <br> If you have an internal static IP address set on this computer it may be changed to DHCP after running the Repair Internet Script!<br><br><form method='get' action='https://apps.justinkumpe.net/uvt/crt/Clear_ALL_History.exe'><button type='submit'>Clear All Browsing History</button></form><br><form method='get' action='https://apps.justinkumpe.net/uvt/crt/Repair_Internet.exe'><button type='submit'>Repair Internet</button></form><br><form method='get' action='https://apps.justinkumpe.net/uvt/crt/Set_MTU.exe'><button type='submit'>Set MTU Value</button></form>";
}
    document.getElementById("title").innerHTML = "CRT Web";
	document.getElementById("body2").innerHTML = "";
    document.getElementById("body").innerHTML = body;
    document.getElementById("supportcomments").innerHTML = "";
}

<!-- End CRT Web -->

<!-- Start MDM Profiles -->

function MDM() {	
if (license === "auth-app-store") { 
	window.body = "This feature is not available in the iOS/Android app.  To access this feature please load the web version of this app at https://kumpe.link/uvt";
} else {
	window.body = "Select Option Below for the profile you wish to install<br>NOTE: it may take a few seconds to load after clicking on button!<br><br><form method='get' action='https://apps.justinkumpe.net/uvt/Gage_WiFi.mobileconfig'><button type='submit'>Gage Pl WiFi Settings</button></form><br><br><form method='get' action='https://apps.justinkumpe.net/uvt/ATT_Weblinks.mobileconfig'><button type='submit'>PT Web Links</button></form>";
}
    document.getElementById("title").innerHTML = "MDM Profiles";
	document.getElementById("body2").innerHTML = "";
    document.getElementById("body").innerHTML = body;
    document.getElementById("supportcomments").innerHTML = "";
}

<!-- End MDM Profiles -->


	</script>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
          <?php include_once "includes/right_sidebar.php"; ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Justin Kumpe
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/node_modules/bootstrap-select/bootstrap-select.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>