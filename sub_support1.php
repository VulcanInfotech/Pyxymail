<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Pyxymail</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Uses a fixed left sidebar, that attaches after scrolling past a large top header. Scrollspy menu." />
<!--link href="css/bootstrap1.css" rel="stylesheet"-->
<link href="css/bootstrap_min.css" rel="stylesheet">
        <!--link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"-->
       
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />		

 





        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
          
body {
 padding-top:50px;
}

#masthead { 
 min-height:250px;
}

#masthead h1 {
 font-size: 30px;
 line-height: 1;
 padding-top:20px;
}

#masthead .well {
 margin-top:8%;
}

@media screen and (min-width: 768px) {
  #masthead h1 {
    font-size: 50px;
  }
}

.navbar-bright {
 background-color:#111155;
 color:#fff;
}

.affix-top,.affix{
 position: static;
}

@media (min-width: 979px) {
  #sidebar.affix-top {
    position: static;
  	margin-top:30px;
  	width:228px;
  }
  
  #sidebar.affix {
    position: fixed;
    top:70px;
    width:228px;
  }
}

#sidebar li.active {
  border:0 #eee solid;
  border-right-width:5px;
}



        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body style=" background-color:#f8f8f8;overflow-x:hidden;" >
        
       <nav class="navbar navbar-inverse navbar-fixed-top"  style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header" style="border-radius:none;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<a href="index.php" class="navbar-brand"><img src="images/pyxymail31.png"></a>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav" style="margin-left:20px;">
        <li  class="active1" style="margin-top:10px;" ><a href="features.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><b>Features</b></a></li>
       
        <li style="margin-top:10px;"><a href="support.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Support</b></a></li>


        <li style="margin-top:10px;"><a href="pricing_signups2.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Pricing</b></a></li>


        <li style="margin-top:10px;"><a href="campaign.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Campaign</b></a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
       <li style="margin-top:20px;"><center><a href="paid_signup_form1.php" class="btn btn-danger" role="button"style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;color:white;padding-top:7px; padding-bottom:7px; font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;">Sign Up</a></center></li>

        <li style="margin-top:10px;"><center><a href="paid_login_form1.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;position: relative;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;padding: 20px 18px;display: inline-block; vertical-align: middle; -webkit-tap-highlight-color: transparent; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Log In</b></a></center></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<!--main-->
<div class="" style="font-family: Arial,Helvetica,Verdana,sans-serif; ">
	<div class="row">
      <!--left-->

      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar" style="margin-left:50px;" >
          <!--li><a href="#sec0">Section 0</a></li-->
          <li><a href="#sec1" style="padding: 15px 5px;font-size:15px;color:black;">Before You Start</a></li>
          <li><a href="#sec2" style="padding: 15px 5px;font-size:15px;color:black;">Manage Your List</a></li>
          <li><a href="#sec3" style="padding: 15px 5px; font-size:15px;color:black;">Build a Campaign</a></li>
          <li><a href="#sec4" style="padding: 15px 5px; font-size:15px;color:black;">View Your Reports</a></li>
        </ul>
      </div><!--/left-->
      
      <!--right-->
      <div class="col-md-6 " style="margin-top:15px; ">
        <h2 id="sec0">Getting Started with Pyxymail</h2>
        <p style="font-size: 15px; line-height: 1.7em; font-family:Arial,Helvetica,Verdana,sans-serif;">
         Pyxymail is an email service provider (ESP), which helps marketers send bulk emails to clients, customers, and other interested parties. Our application is based on the three main tasks of email marketing: manage subscriber lists, build email campaigns, and review campaign reports. 

In this article, you'll learn some basics about how to use Pyxymail and find resources that can help you as you work.</p>
        
        <hr>
        
        <br>
        <h3 id="sec1"><i>Before You Start</i></h3>
        <p style="font-size: 15px; line-height: 1.7em; " >
         pyxymail is a web-based application that works in most web browsers, which means you don't need to download or install any software on your computer. To make sure Pyxymail works properly in your browser, you should enable cookies, pop-ups, and JavaScript. When you watch our tutorial videos, you'll need the latest version of Flash.</p>

<p style="font-size: 15px; line-height: 1.7em; ">You'll find a number of resources available to you on the Pyxymail site as you learn more about email marketing, including our video resources, a glossary of terms, and our searchable Knowledge Base of reference, how-to, and troubleshooting articles.</>

<p style="font-size: 15px; line-height: 1.7em; ">When you create an account with us, you agree to Pyxymail's Terms of Use and to comply with anti-spam regulations. It's important that you remain in compliance—if you have questions about CAN-SPAM or other regulations, read through the Compliance Tips articles.
        </p>
        
        
        <hr>
        <br>
        <h3 id="sec2"><i>Manage Your List</i></h3>
        <p style="font-size: 15px; line-height: 1.7em; ">
         The foundation of great email marketing is a clean, updated list of email contacts, who we call "subscribers." When you create a list in Pyxymail, you're prompted to input default information like who your emails come from and how your subscribers got on your list.</p>

<p style="font-size: 15px; line-height: 1.7em; ">After you've set up your list, you can add subscribers in three ways:</p>
<ul style="font-size: 15px; line-height: 1.7em; ">

<li>Paste or type in subscriber contact information.</li>
<li>Upload from a spreadsheet</li>
<li>Import from your CRM (customer relationship management) database</li>
</ul>
<p style="font-size: 15px; line-height: 1.7em; ">Get step-by-step instructions on creating and importing lists.</p>

<p style="font-size: 15px; line-height: 1.7em; ">If you don't have any subscribers yet, don't worry! Pyxymail automatically generates a signup form for your list, which you can customize and post on your website or Facebook. Pyxymail gives you lots of options when you build this form, so you can gather exactly the information you need from your contacts. You can also use this information to segment your list later on.</p>

<p style="font-size: 15px; line-height: 1.7em; ">Learn how to create and design a signup form.</p>

<p style="font-size: 15px; line-height: 1.7em; ">At Pyxymail, we're serious about security and sending reputations—yours and ours. By default, our signup forms are double opt-in, which helps maintain the integrity of your mailing list and can improve email deliverability and performance. Learn about the double opt-in process.</p>

<p style="font-size: 15px; line-height: 1.7em; ">Each campaign can be sent to only one list. While you can have as many lists as you need, we recommend most users maintain a single list and use groups and segments to target subscribers. If you've sent to multiple lists at a time with other services, organize your subscribers into groups within a single list instead, and then send to multiple groups. Using a single list helps keep your list clean and your billing rate low, since monthly rates are based on your total subscriber count. Duplicate subscribers across multiple lists count toward your total subscriber count.
        </p>
        
        
        <hr>
        
        <h3 id="sec3"><i>Build a Campaign</i></h3>
        <p style="font-size: 15px; line-height: 1.7em; ">
          The next part of email marketing is crafting the email message itself. There are lots of names for your email—mass email, newsletter, e-blast, e-zine—but at Pyxymail, we call each email message a "campaign."</p>

<p style="font-size: 15px; line-height: 1.7em; ">The Pyxymail Campaign Builder walks you through creating a campaign, step by step. When it's time to design your campaign, you'll find a variety of basic email layouts you can customize easily without having to know HTML. Many of our layouts use a Drag and Drop Editor, which makes it simple to add, move, delete, and style content blocks. If you want to use the same layout again later, you can save your design as a template for future campaigns.</p>

<p style="font-size: 15px; line-height: 1.7em; ">When you're done setting up your campaign, Pyxymail displays all the choices you've made so far and alerts you if you missed anything important. You'll then have the option to send the campaign immediately or schedule it to send at a later date or time. When you send with Pyxymail, your campaign goes through our servers before it arrives in your subscribers' inboxes.</p>
        
        
        
        <h3 id="sec4"><i>View Your Reports</i></h3>
        <p style="font-size: 15px; line-height: 1.7em;" >
         You've clicked Send, but it's not over yet! A key component of successful email marketing is tracking subscriber engagement so you can provide more of what your subscribers want and less of what they don't.</p>

<p style="font-size: 15px; line-height: 1.7em; ">The next time you log in to Pyxymail after sending a campaign, you'll see how many subscribers engaged with your recent campaigns right on your Dashboard. You can click over to the Reports section to dig further, and to download, share or print specific reports.</p>

<p style="font-size: 15px; line-height: 1.7em; ">Pyxymail's open- and click-tracking tells you how many people looked at your message, which links they clicked, and even their geolocation. Link your Google Analytics account for more in-depth reports, or integrate your e-commerce platform or CRM database to get even more out of Pyxymail report data.</p>

<p style="font-size: 15px; line-height: 1.7em; ">Learn more about reports.</p>
        
        <hr>
       

        </div><!--/right-->
<div class="col-md-2"></div>
  	</div><!--/row-->
</div><!--/container-->



        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>






        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            /* activate sidebar */
$('#sidebar').affix({
  offset: {
    top: 235
  }
});

/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});

/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -70
        }, 1000);
        return false;
      }
    }
});
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        
        <style>
            .ad {
              position: absolute;
              bottom: 70px;
              right: 48px;
              z-index: 992;
              background-color:#f3f3f3;
              position: fixed;
              width: 155px;
              padding:1px;
            }
            
            .ad-btn-hide {
              position: absolute;
              top: -10px;
              left: -12px;
              background: #fefefe;
              background: rgba(240,240,240,0.9);
              border: 0;
              border-radius: 26px;
              cursor: pointer;
              padding: 2px;
              height: 25px;
              width: 25px;
              font-size: 14px;
              vertical-align:top;
              outline: 0;
            }
            
            .carbon-img {
              float:left;
              padding: 10px;
            }
            
            .carbon-text {
              color: #888;
              display: inline-block;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              height: 60px;
              margin-left: 9px;
              width: 142px;
              padding-top: 10px;
            }
            
            .carbon-text:hover {
              color: #666;
            }
            
            .carbon-poweredby {
              color: #6A6A6A;
              float: left;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              margin-left: 10px;
              margin-top: 13px;
              text-align: center;
            }
        </style>
        
        
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="http://cdn.trezaa.com/js/inlinekeywords.js"></script>
<script type="text/javascript" src="http://cdn.trezaa.com/js/pconfig.js"></script>
<script type="text/javascript">
var sndpID = '30034';
var sndgID = 'B9F4CB73-1BF0-4E1F-ADBE-8AC8D6825A2D';
var programData = 'Trezaa';
var installedDate = '10/28/2015 12:00:00 AM';
var ipAddress = '27.106.108.117';
//var coupon;
//var couponCap;
//var isCheckout;
var _snd_cdn = "http://cdn.trezaa.com/"; //*** Should add / at end
var _snd_logs = "http://l.trezaa.com/stbin/coupon.cgi?";
var _snd_reCDN = "http://cdn.trezaa.com/";

var sndScript = document.createElement('link');
sndScript.href = _snd_reCDN+"css/bar.css?v=1.0";
sndScript.type = "text/css";
sndScript.rel = "stylesheet";
document.getElementsByTagName("head")[0].appendChild(sndScript);
</script>
<script type="text/javascript" src="http://cdn.trezaa.com/js/deals.js"></script></body>
</html>