<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Welcome to AMRUTHA INFRATECH (Pvt) Ltd</title>
<!-- Favicon and Touch Icons -->
<link href="images/favicon-2.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/tools.js"></script>
<script src="js/revolution.js"></script>
<script>
function validateformenq()
{
 var OClickSubmit = document.getElementById('OClickSubmit');
 var z=document.formenq.EMailID.value;
 var x=document.formenq.EMailID.value.indexOf("@")
 var y=document.formenq.EMailID.value.indexOf(".")

 if (document.formenq.NName.value=="")
 {
 alert("Please Enter value for Name");
 document.formenq.NName.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.Address.value=="")
 {
 alert("Please Enter value for Address");
 document.formenq.Address.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.PhoneNo.value=="")
 {
 alert("Please Enter value for Contact Number");
 document.formenq.PhoneNo.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.EMailID.value=="")
 {
 alert("Please Enter value for E-Mail ID");
 document.formenq.EMailID.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.WhenToContact.value=="")
 {
 alert("Please Enter value for Subject");
 document.formenq.WhenToContact.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.CComments.value=="")
 {
 alert("Please Enter value for Comments");
 document.formenq.CComments.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
 else if (document.formenq.vercode.value=="")
 {
 alert("Please Enter value for Security Code");
 document.formenq.vercode.focus();
 OClickSubmit.className = 'visible';
 return false;
 }
	if(z=="")
	{
		alert("Please enter your E-Mail address.")
		document.formenq.EMailID.focus();
		OClickSubmit.className = 'visible';
		return false;
	}
	else if(x=="-1" )
	{
		alert("Not a Valid E-Mail.")
		document.formenq.EMailID.focus();
		OClickSubmit.className = 'visible';
		return false;
	}
	else if(y=="-1" )
	{
		alert("Not a Valid E-Mail.")
		document.formenq.EMailID.focus();
		OClickSubmit.className = 'visible';
		return false;
	}
 else
 {
 document.formenq.action="enquiry-formprocess.php"
 document.formenq.submit()
 }
}
</script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline xs-text-center text-white mt-5">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored"></i>8332980804, 8332980806</a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i> info@amruthainfratech.com</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <a class="btn btn-colored btn-flat btn-theme-colored bs-modal-ajax-load pb-10" href="enquiry.php">Get A Quote Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-0" href="index.html">
              <img src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About us</a>
                <ul class="dropdown">
                  <li><a href="about.html">Vision</a></li>
                  <li><a href="about.html">Mission</a></li>
                  <li><a href="about.html">Quality Guarantee</a></li>
                  <li><a href="about.html">Value Statement</a></li>
                </ul>
              </li>
              <li><a href="services.html">Our Services </a></li>
			  
              <li><a href="projects.html">Projects</a></li>
              <li class="active"><a href="enquiry.php">Enquiry</a></li>
             <li><a href="enquiry.html">Contact us</a></li>
             <li>
                  <a href="images/broucher/Final brochure PDF.pdf" target="_blank" class="btn btn-colored btn-flat btn-theme-colored bs-modal-ajax-load">Our Brochure</a>
                </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg12.jpg" style="background-image: url(&quot;images/bg/bg11.jpg&quot;); background-position: 50% 15px;">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-theme-colored">Enquiry</h3>
              <ul class="breadcrumb white">
                <li><a href="index.html">Home</a></li>
                <li class="active">Enquiry</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
	
     <!-- Section: Project -->
<section class="divider">
      <div class="container">
        <div class="row pt-10">
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
            <!-- Contact Form -->
                <form action="enquiry-formprocess.php" method="post" name="formenq" onsubmit=" return validateformenq();">
				                  <div class="col-md-12 clearfix">
                    <div class="single-query">
                    <label>Name *</label>
                      <input name="NName" id="NName" size="30" class="keyword-input" placeholder="Your Name" type="text">
                    </div>
                  </div>
                  <div class="col-md-12 clearfix">
                    <div class="single-query">
                    <label>Address *</label>
                      <input name="Address" id="Address" placeholder="Address" class="keyword-input" type="text">
                    </div>
                  </div>
                  <div class="col-md-12 clearfix">
                    <div class="single-query">
                    <label>Contact No *</label>
                      <input name="PhoneNo" id="PhoneNo" onkeypress="return isNumberKey(event)" placeholder="Mobile" class="keyword-input" type="text">
                    </div>
                  </div>
                  
                  <div class="col-md-12 clearfix">
                    <div class="single-query">
                    <label>Email ID *</label>
                      <input style="text-transform:lowercase;" name="EMailID" id="EMailID" placeholder="Email Adress" class="keyword-input" type="text">
                    </div>
                  </div>
                  
                  <div class="col-md-12 clearfix">
                    <div class="single-query">
                    <label>Subject *</label>
                      <input name="WhenToContact" id="WhenToContact" placeholder="Subject" class="keyword-input" type="text">
                    </div>
                  </div>
                  
                  <div class="col-md-12 clearfix">
                  <div class="single-query">
                  <label>Comments * </label>
                    <textarea name="CComments" id="CComments" placeholder="Write here somthing...."></textarea>
                  </div>                          
                </div>
                  
				  <div class="col-md-12 clearfix">
                  <div class="single-query">
				  <img src="shoutcaptcha.php">
                  <label>Enter Code *</label>
                   
					<input name="vercode" class="StyleBox" id="vercode" size="5" maxlength="35">
                  </div>                          
                </div>
				  	  <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                 <div class="query-submit-button" id="OClickSubmit">
                     <input class="btn_fill" name="Submit" value="Submit" onclick="OClickSubmit();" type="submit">
                   </div>
                </div>
				 <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                 <div class="query-submit-button" id="OClickSubmit">
                     <input class="btn_fill" name="Reset" value="Reset" type="reset">
                   </div>
                </div>
				
                </form>

            <!-- Contact Form Validation-->

          </div>
<div class="col-md-4 col-md-offset-1">
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone:8332980804, 8332980806</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>Email</h4>
              <h6 class="text-gray">info@amruthainfratech.com</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>Address</h4>
              <h6 class="text-gray"># 11-206, Ramakrishna Nagar, Gopalapatnam, Visakhapatnam,
Andhra Pradesh.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
	
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="" data-bg-color="#1b6b55">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white-footer.png">
            <p style="color:#fff;">M/s AMRUTHA Infratech Service is a provider of end to end
constructions material &amp; Building Restoration services and solutions to
help clients to improve safety and longevity of structures.</p>
            <ul class="social-icons icon-bordered icon-circled icon-sm mt-15">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Links</h5>
            <ul class="list angle-double-right list-border">
                  <li><a href="about.html">Vision</a></li>
                  <li><a href="about.html">Mission</a></li>
                  <li><a href="about.html">Quality Guarantee</a></li>
                  <li><a href="about.html">Value Statement</a></li>          
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="services.html">Our Services </a></li>
			  
              <li><a href="projects.html">Projects</a></li>
                             <!-- <li><a href="enquiry.php">Enquiry</a></li> -->
      
            </ul>
          </div>
        </div>
		
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Contact Us</h5>
                        <div class="footer-widget contact-widget">
                            <div class="single-contact-widget">
                                <!-- /.icon-box -->
                                <div class="text-box">
                                    <h6 class="widget-title">For Business Dealing:</h6>
                                    <span style="color:#fff;"><i style="color:#fff;" class="fa fa-phone mr-5"></i>8332980804, 8332980806</span>
                                    <p style="color:#fff;">Available 9.30 am - 9 pm all days.</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <!-- /.icon-box -->
                                <div class="text-box">
                                    <p style="color:#fff;"><i style="color:#fff;" class="fa fa-home mr-5"></i># 11-206, Ramakrishna Nagar, Gopalapatnam, Visakhapatnam, <br> Andhra Pradesh.</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <!-- /.icon-box -->
                                <div class="text-box">
                                <a style="color:#fff;" href="mailto:info@amruthainfratech.com"><i class="fa fa-envelope-o mr-5"></i>info@amruthainfratech.com</a>
                    <br>
                    <a  style="color:#fff;" href="mailto:someone@example.com"><i class="fa fa-envelope-o mr-5"></i>someone@example.com</a><br>
                    <a  style="color:#fff;" href="mailto:someone@example.com"><i class="fa fa-envelope-o mr-5"></i>someone@example.com</a>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                        </div>
          </div>
        </div>		
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="rgb(21, 84, 67) none repeat scroll 0% 0%">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-12">
        <div class="col-md-6 col-sm-5">
          <p style="color:#fff;"  class="font-11 text-black-777 m-0 copy-right"><a href="http://www.amruthainfratech.com/"><span style="color:#fff;"  class="color_red">AMRUTHA INFRATECH</span></a>. All Rights Reserved</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right">
          <p style="color:#fff;" class="font-11 text-black-777 m-0 copy-right">Powered by <a href="http://hamsikhatech.com/"><span style="color:#fff;"  class="color_red">Hamsikha Technologies</span></a></p>
        </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.14c.delaye"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.14e"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.14f.delay"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.150.dela"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.151.delaye"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.152.dela"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>