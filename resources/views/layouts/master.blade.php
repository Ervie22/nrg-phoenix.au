
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d6635e784e.js" crossorigin="anonymous"></script>



<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">


  </head>

<body>

  <!-- ***** Preloader Start ***** -->


        @include('layouts.inc.admin-navbar')

        <main>

            @yield('content')

        </main>













  <footer id="newsletter">
    <div class="container wow slideInUp" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join with Us...</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Australia</h4>
            <address>NRG Phoenix Pty Ltd.<br>Suite 161, 42 Manilla St,<br>East Brisbane 4169. Australia<br></address>

                    <p><a href="tel:+61468495900" title="Call us">+61 468-495-900</a></p>
                    <p><a href="tel:+61734351542" title="Call us">+61 734-351-542</a></p>
                    <p><a href="mailto:info@nrg-phoenix.com.au" title="Call us">info@nrg-phoenix.com.au</a></p>
                    <p><a href="https://www.nrg-phoenix.com.au" title="Call us">www.nrg-phoenix.com.au</a></p>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>India</h4>
            <address>NRG Phoenix Technology India Pvt. Ltd.
                    <br>465 & 466, 51, Level 4, Tower A,
                    <br>Rattha Tek Meadows,
                    <br>Rajiv Gandhi Salai, Sholinganallur,
                    <br>Chennai, Tamil Nadu 600119
                    <br></address>

                    <p><a href="tel:+919840270411" title="Call us">+91 9840270411</a></p>
                    <p><a href="mailto:info@nrg-phoenix.com" title="Call us">info@nrg-phoenix.com</a></p>
                    <p><a href="https://www.nrg-phoenix.com" title="Call us">www.nrg-phoenix.com </a></p>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>

              <p><a title="Website Design & Development" href="/web-design-development">Website Design & Development</a></p>
              <p><a title="Mobile Applications Development" href="/mobile-app-development-company">Mobile Applications Development</a></p>
              <p><a title="Ecommerce Application Development" href="/ecommerce-app-development">Ecommerce Application Development</a></p>
              <p><a title="AI & ChatBot Development" href="/ai-chatbot-development">AI & ChatBot Development</a> </p>
              <p><a title="Digital Marketing Solutions" href="/digital-marketing-services">Digital Marketing Solutions</a></p>
              <p><a title="IT Smart Workforce" href="/staff-augmentation-services">IT Smart Workforce</a></p>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Our Company</h4>
            <div class="logo">
              <img src="{{ asset('assets/images/nrg.png') }}" alt="" height = 100px width = 100px >
            </div>
            <p>NRG Phoenix is a renowned Custom Software Development Company. We have mastered in providing custom made innovative solutions in Artificial Intelligence, Business Process Automations using Chatbot & WhatsApp chatbot to customers globally.</p>
          </div>
        </div>
        <div class="footer-bottom-sec">
      <div class="container">
         <div class="copyright-colm text-center ">
            <p class="text-white"> © 2021 NRG Phoenix, All Rights Reserved. </p>
         </div>
         <div class="social-icon-colm text-center">

               <a href="https://www.facebook.com/nrgphoenix/" target="_blank"><i class="fa fa-facebook text-white" aria-hidden="true"></i></a>
               <a style="padding-left:10px;" href="https://www.linkedin.com/company/nrgphoenix/" target="_blank"><i class="fa fa-linkedin text-white" aria-hidden="true"></i></a>
               <a style="padding-left:10px;"  href="https://www.instagram.com/nrgphoenixtechnology/" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>

         </div>
      </div>
   </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->



  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }} "></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }} "></script>
  <script src="{{ asset('assets/js/animation.js') }} "></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }} "></script>
  <script src="{{ asset('assets/js/popup.js') }} "></script>
  <script src="{{ asset('assets/js/custom.js') }} "></script>


   <!--  <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/nrg-phoenix-gaurav_priya', text: 'Book an appointment', color: '#00a2ff', textColor: '#ffffff', branding: false }); }</script> -->
  <!-- Calendly badge widget end -->
<script type="text/javascript">
// set cookie according to you
var cookieName= "NRGphoenix";
var cookieValue="nrgphoenixwebsite";
var cookieExpireDays= 30;

// when users click accept button
let acceptCookie= document.getElementById("acceptCookie");
acceptCookie.onclick= function(){
    createCookie(cookieName, cookieValue, cookieExpireDays);
}

// function to set cookie in web browser
 let createCookie= function(cookieName, cookieValue, cookieExpireDays){
  let currentDate = new Date();
  currentDate.setTime(currentDate.getTime() + (cookieExpireDays*24*60*60*1000));
  let expires = "expires=" + currentDate.toGMTString();
  document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
  if(document.cookie){
    document.getElementById("cookiePopup").style.display = "none";
  }else{
    alert("Unable to set cookie. Please allow all cookies site from cookie setting of your browser");
  }

 }

// get cookie from the web browser
let getCookie= function(cookieName){
  let name = cookieName + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
// check cookie is set or not
let checkCookie= function(){
    let check=getCookie(cookieName);
    if(check==""){
        document.getElementById("cookiePopup").style.display = "block";
    }else{

        document.getElementById("cookiePopup").style.display = "none";
    }
}
checkCookie();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-208526284-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-208526284-1');
</script>

<!--
<link rel="stylesheet" type="text/css" href="https://nrg-phoenix.com.au/chatbot/chatbot.css">
<div id="chat-bot-launcher-container" class="chat-bot-flex-end chat-bot-avatar-launcher chat-bot-launcher-enabled"> <div id="chat-bot-avatar-text" style="display: none;"><div id="chat-bot-avatar-text-inner">Try Demo</div><div id="chat-bot-launcher-close"></div></div><div id="chat-bot-launcher" class="chat-bot-launcher chat-bot-flex-center chat-bot-launcher-active" style="background-color: transparent;"><div id="chat-bot-launcher-button" onclick="chatbot();" class="chat-bot-launcher-button" style="background-image: url(https://www.nrg-phoenix.com.au/chatbot/chat_executive.png);"></div><div id="chat-bot-launcher-text">Try Demo</div></div><div id="chat-bot-message-container" class=" slide-in"><div class="overflow"><div class="chat-bot-message-label false"><div>Hi! Welcome to <strong>NRG Phoenix</strong>. I am here to help you know more about us. Would you like to chat?</div></div><div class="chat-bot-button-wrapper"><div id="chat-bot-option-1" class="chat-bot-option " data-value="Yes" ✌️="" data-jump="undefined"><div id="showbot" onclick="chatbot();">Yes</div></div><div id="chat-bot-option-2" class="chat-bot-option " data-value="Not" interested="" 👎="" data-jump="END"><div id="hidebot" onclick="hide_chatbot();">Not now</div></div></div></div><div id="chat-bot-message-close" onclick="hide_chatbot();"></div></div></div>
-->

<script>
jQuery('.multiple-items-logo').slick({
  autoplay: false,
   autoplaySpeed: 1500,
   arrows: false,
   dots: true,
 slidesToShow: 3,
     slidesToScroll: 1,
});
</script>

<script>
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
jQuery('.read-more-content').addClass('hide')
jQuery('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect:
jQuery('.read-more-show').on('click', function(e) {
  jQuery(this).next('.read-more-content').removeClass('hide');
  jQuery(this).addClass('hide');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
jQuery('.read-more-hide').on('click', function(e) {
  var p = jQuery(this).parent('.read-more-content');
  p.addClass('hide');
  p.prev('.read-more-show').removeClass('hide'); // Hide only the preceding "Read More"
  e.preventDefault();
});




	jQuery(document).ready(function(){
		if(jQuery(window).width() <= 767)
		{
			setTimeout(function()
			{
				load_images();
			},9000);
		}
		else
		{
			setTimeout(function()
			{
				load_images();
			},6000);
		}
	});

	function load_images()
	{
		jQuery('.lazyimg').each(function()
		{
		  jQuery(this).attr('src',jQuery(this).attr('data-src'));
		});
	}

	var loadimages = 0;
	jQuery(document).on("scroll", function()
	{
		if(loadimages < 4)
		{
			if(jQuery(window).scrollTop()  >= 80)
			{
				loadimages++;
				load_images();
			}
		}
	});
</script>
</body>
</html>
