<!doctype html>
<html lang="en">
    <head>
        <title>
            Animal Heroes
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <script src="https://kit.fontawesome.com/505518f67f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W8GBK3F');</script>
<!-- End Google Tag Manager -->
				<style>ul { list-style: none; }</style>
				
        <style>
            body, html { overflow-x: hidden; max-width: 100%; }
            .logo { height: 120px; margin-top: 10px;}
            .navbar { padding-bottom: 0px; padding-top: 0px; background-color: white; margin-top: -16px; }
            .btn-danger { border-radius: 30px; background-color: #E62126; padding-left: 20px; padding-right: 20px; }
            .nav-link { color: white; font-weight: bold;}
            .nav-link:hover { color: #e5f3fe; }
            .alert-danger { background-color: #E62126; border-radius: 0px; border: solid 1px #E62126; color: white;}
            .gift { text-decoration: none; color: white; }
            .gift:hover { color: white; text-decoration: underline; text-decoration-skip-ink: none; }
            .footer { background-image: url('img/footer.png'); width: 100%; }
            .footer-bottom {  width: 100%; background-color: #083462}
            .powered { float: right; color: white; }
            .btn { font-weight: bold; }
            .hero { background-image: url('gradient.jpg'); width:100vw; height:53vh; display:flex; background-size:cover; background-position:bottom center; background-repeat:no-repeat;  }
            .hero-mobile { background-image: url('img/hero.png'); width:100vw; height:45vh; display:flex; background-size:cover; background-position:center right; background-repeat:no-repeat;  }
            .hero-text { color: white; font-weight: bold; text-align: left; margin-top: 130px; }
            .hero-desc { color: white; text-align: left; font-weight: 400; }
            .btn-hero { padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; float: left; }
            .hero-gift { background-image: url('./wave.png'); width:100vw; height:80vh; display:flex; background-size:cover; background-position:center right; background-repeat:no-repeat;   }
            .hero-gift-mobile { background-image: url('./wave.png'); background-color: transparent; width:100vw; height:30vh; display:flex; background-size:cover; background-position:center right; background-repeat:no-repeat;  }
            .btn-secondary { background-color: white; color: black; border: solid 1px #d7d7d7; padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; font-weight: bold; }
            .btn-secondary:hover { background-color: #d7d7d7; color: black; }
        </style>
        <style type=text/css>#desktop-content{display:block}#mobile-content{display:none}@media screen and (max-width:768px){#desktop-content{display:none}#mobile-content{display:block}}</style>
        <style>
            .accordion {
           max-width: 1200px;
           margin: 0 auto 100px;
           border-top: 1px solid #083463;
         }
         .accordion li {
           border-bottom: 1px solid #083463;
           position: relative;
         }
         .accordion li p {
           display: none;
           padding: 10px 25px 30px;
           color: #fff;
         }
         .accordion a {
           width: 100%;
           display: block;
           cursor: pointer;
           font-weight: 600;
           line-height: 3;
           font-size: 14px;
           font-size: 0.875rem;
           text-indent: 15px;
           user-select: none;
         }
         .accordion a:after {
           width: 8px;
           height: 8px;
           border-right: 1px solid #4a6e78;
           border-bottom: 1px solid #4a6e78;
           position: absolute;
           right: 10px;
           content: " ";
           top: 17px;
           transform: rotate(-45deg);
           -webkit-transition: all 0.2s ease-in-out;
           -moz-transition: all 0.2s ease-in-out;
           transition: all 0.2s ease-in-out;
         }
         .accordion p {
           font-size: 16px;
           line-height: 2;
           padding: 10px;
         }
         
         a.active:after {
           transform: rotate(45deg);
           -webkit-transition: all 0.2s ease-in-out;
           -moz-transition: all 0.2s ease-in-out;
           transition: all 0.2s ease-in-out;
         }
         
         </style>
         <style>
            /* The Modal (background) */
         .modal {
           display: none; /* Hidden by default */
           position: fixed; /* Stay in place */
           z-index: 1; /* Sit on top */
           left: 0;
           top: 0;
           width: 100%; /* Full width */
           height: 100%; /* Full height */
           overflow: auto; /* Enable scroll if needed */
           background-color: rgb(0,0,0); /* Fallback color */
           background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
         }
         
         /* Modal Content/Box */
         .modal-content {
           background-color: #fefefe;
           margin: 15% auto; /* 15% from the top and centered */
           padding: 20px;
           border: 1px solid #888;
           width: 40%; /* Could be more or less, depending on screen size */
         }
         
         /* The Close Button */
         .close {
           color: #aaa;
           float: right;
           font-size: 28px;
           font-weight: bold;
         }
         
         .close:hover,
         .close:focus {
           color: black;
           text-decoration: none;
           cursor: pointer;
         } 
         
         .column {
           float: left;
           width: 31%;
         }
         
         /* Clear floats after the columns */
         .row:after {
           content: "";
           display: table;
           clear: both;
         }
         
         input[type="text"]::placeholder {  
                           
                         /* Firefox, Chrome, Opera */ 
                         text-align: center;
                     } 
         
                     input[type="password"]::placeholder {  
                           
                         /* Firefox, Chrome, Opera */ 
                         text-align: center;
                     } 
         </style>
         <style>
           section.pricing {
  background: #0C56A6;
  background: linear-gradient(to right, #0C56A6, #0C56A6);
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price:hover {
  color: #0C56A6;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
  width: 100%;
  background-color: #0C56A6;
  border: solid 1px #0C56A6;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
    background-color: #e5f3fe;
    color: #0C56A6;
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
         </style>

<style>
  .accordion {
 max-width: 900px;
 margin: 0 auto 100px;
 border-top: 1px solid #d9e5e8;
}
.accordion li {
 border-bottom: 1px solid #d9e5e8;
 position: relative;
}
.accordion li p {
 display: none;
 padding: 10px 25px 30px;
 color: #6b97a4;
}
.accordion a {
 width: 100%;
 display: block;
 cursor: pointer;
 font-weight: 600;
 line-height: 3;
 font-size: 14px;
 font-size: 0.875rem;
 text-indent: 15px;
 user-select: none;
}
.accordion a:after {
 width: 8px;
 height: 8px;
 border-right: 1px solid #4a6e78;
 border-bottom: 1px solid #4a6e78;
 position: absolute;
 right: 10px;
 content: " ";
 top: 17px;
 transform: rotate(-45deg);
 -webkit-transition: all 0.2s ease-in-out;
 -moz-transition: all 0.2s ease-in-out;
 transition: all 0.2s ease-in-out;
}
.accordion p {
 font-size: 16px;
 line-height: 2;
 padding: 10px;
}

a.active:after {
 transform: rotate(45deg);
 -webkit-transition: all 0.2s ease-in-out;
 -moz-transition: all 0.2s ease-in-out;
 transition: all 0.2s ease-in-out;
}

</style>
    </head>
    <body>

        <div class="alert alert-primary" role="alert" style="background-color: #083462; border: 0px; border-radius: 0px; padding: 0.75rem;">
            <center><span style="margin-top: -25px;"><img src="img/gift-box.png" height="18" style="margin-top: -5px;"></span>&nbsp;&nbsp;<a href="https://parents.mysticanimalheroes.org/purchase_gift" class="gift" style="color: #fff; margin-top: 5px; font-size: 0.85rem; text-decoration: underline;" target="_blank">Give the gift of Animal Heroes.</a> <span style="color: #fff; font-size: 0.85rem;">Education backed by Mystic Aquarium.</span></center>
          </div>
          <div id="desktop-content">
        <nav class="navbar navbar-expand-lg navbar-ml navbar-dark" style="background: rgba(0, 0, 0, 0); margin-top: -30px;">
            <div class="container">
              <a class="navbar-brand" href="https://www.arsome.com/animal-heroes/mystic"><img src="img/logo.png" class="logo" style="margin-top: 10px;"></a>

                <form class="d-flex" style="margin-right: 60px;">
 <div class="nav-item">
                    <a href="https://www.arsome.com/animal-heroes/faq" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style=" margin-top: -4px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">FAQ</a>
                  </div>
                   <div class="nav-item">
                    <a href="https://parents.mysticanimalheroes.org/login" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="margin-top: -4px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">Login</a>
                  </div>
                    &nbsp;&nbsp;
                  <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; margin-top: -5px; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;



">Get Started</a>
                </form>
              </div>
            </div>
          </nav>
          </div>
          
            <div id="mobile-content">
        <nav class="navbar navbar-expand-lg navbar-ml navbar-dark" style="background: rgba(0, 0, 0, 0);">
            <div class="container">
              <a class="navbar-brand" href="/"><img src="img/logo.png" class="logo" height="50"></a>

 <div class="nav-item">
                    <a href="https://www.arsome.com/animal-heroes/faq" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style=" margin-top: -4px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">FAQ</a>
                  </div>
                   <div class="nav-item">
                    <a href="https://parents.mysticanimalheroes.org/login" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="margin-top: -4px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">Login</a>
                  </div>

              
              </div>
            </div>
          </nav>
          </div>
          <div id="desktop-content">
          <div class="overflow-hidden text-center bg-light hero" style="margin-top: -200px;">
              <div class="container">
            <div class="row" style="margin-left: 200px;">
             
                  
                    <h1 class="hero-text" style="font-size: 2.5rem; margin-top: 220px;">Frequently Asked Questions</h1>
                    <p class="lead hero-desc" style="font-weight: 300;">Most common questions are answered here. If you can't find what you're looking for, feel free to email <a href="mailto:animalheroes@mysticaqarium.org" style="color: white;">animalheroes@mysticaqarium.org</a>.</p>
                    <br><br><br>
               
                <div class="col">

                </div>
                <br><br>
            </div></div>
          </div>
          </div>

          <div id="mobile-content">
            <div class="overflow-hidden text-center bg-light hero" style="margin-top: -115px;">
                <div class="container">
               
                    <br><br><br>
                      <h3 class="hero-text">Frequently Asked Questions</h3>
                      <p class="lead hero-desc" style="font-weight: 300">Most common questions are answered here. If you can't find what you're looking for, feel free to email <a href="mailto:animalheroes@mysticaqarium.org" style="color: white;">animalheroes@mysticaqarium.org</a>.</p>
                      <br><br><br>
                 
                  <br><br>
                </div>
            </div>
            </div>
<br><br><br>
          <section style="margin-top: 20px;">
              <div class="container">
            <ul class="accordion">
                <br><br>
                <h4 style="margin-left: 15px; text-decoration: underline; text-decoration-skip-ink: none; color: #0e66c7;

                font-size: 2rem;">General Questions</h4>
                <li>
                   <a style="font-size: 20px; text-decoration: none; color: #083462;">What is Animal Heroes?</a>
                   <p class="lead" style="color: black;">Animal Heroes is a fun multimedia program that brings nature and science to life for 
                    kids ages 6–11. It includes game-based and immersive learning, hands-on activities, 
                    outdoor explorations, and conservation challenges for families. Each month’s adventure
                    includes an animal-themed subscription box and access to the Animal Heroes website 
                    and mobile app.</p>
                </li>
                <li>
                   <a style="font-size: 20px; text-decoration: none; color: #083462;">Why purchase Animal Heroes?</a>
                   <p class="lead" style="color: black;">Animal Heroes&is the perfect gift for children who love animals and want to learn more 
                    about how to help them. Each month, subscribers gain access to a wealth of fun and 
                    engaging activities designed by Mystic Aquarium’s expert educators. Animal Heroes is 
                    the ideal learning tool for family collaboration, outdoor exploration, and immersive 
                    learning.
             </p>
                </li>

                <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">What is included in each subscription box?</a>
                    <p class="lead" style="color: black;">Each month of the Animal Heroes program focuses on different aquatic animals such as
                        penguins, sea turtles, sharks, and beluga whales. The subscription box every month 
                        includes a stuffed animal of the featured animal, animal adoption certificate, souvenir 
                        animal key chain, animal trading cards, and activity booklet.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">What is included in each month’s digital content?</a>
                    <p class="lead" style="color: black;">The digital content for each month, which can be accessed via the Animal Heroes 
                        mobile app and website, includes a design-your-own Animal Heroes avatar experience, 
                        cool videos about animals and animal experts, state-of-the-art augmented reality 
                        features, interactive online games, hands-on investigations, arts and crafts activities, 
                        conservation challenges, nature-based activities, fun facts and quizzes, and access to 
                        the Animal Heroes online community.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How does it work?</a>
                    <p class="lead" style="color: black;">The digital content for each month, which can be accessed via the Animal Heroes 
                        mobile app and website, includes a design-your-own Animal Heroes avatar experience, 
                        cool videos about animals and animal experts, state-of-the-art augmented reality 
                        features, interactive online games, hands-on investigations, arts and crafts activities, 
                        conservation challenges, nature-based activities, fun facts and quizzes, and access to 
                        the Animal Heroes online community.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">What is the target age group for Animal Heroes?</a>
                    <p class="lead" style="color: black;">The program is designed for children ages 6 to 11. However, slightly younger and older 
                        children may also enjoy being Animal Heroes.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">When do subscription boxes arrive?</a>
                    <p class="lead" style="color: black;">Subscription boxes arrive in the first week of the month. 
                      <br><br>
                      If you purchase a subscription by the 22nd of the month, your first subscription box will arrive during the first week of the following month. For example, if you purchase a subscription on January 16th, your subscription box will arrive the first week in February. 
                     <br><br>
                      If you purchase a subscription after the 22nd of the month, your subscription box will arrive in the first week of the following month. For example, if you purchase a subscription on January 23rd, your subscription box will arrive during the first week of March
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">When do I gain access to the digital content?</a>
                    <p class="lead" style="color: black;">
                      Regardless of the date you purchase a subscription, you will gain access to the month’s digital content immediately. For example, if you purchase a subscription on January 7th, you will immediately get access to the digital content, but your subscription box will not arrive until the first week of February.
                    </p>
                 </li>

                 <br><br>
                 <h4 style="margin-left: 15px; text-decoration: underline; text-decoration-skip-ink: none; color: #0e66c7;

                 font-size: 2rem;">Billing</h4>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I cancel my subscription?</a>
                    <p class="lead" style="color: black;">You can cancel your Animal Heroes subscription by <span style="font-weight: bold;">clicking here.</span>
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">What is your return policy?</a>
                    <p class="lead" style="color: black;">We do not accept returns. If you have any questions or concerns, feel free to contact us 
                        at AnimalHeroes@mysticaquarium.org. 
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">When am I billed for my subscription?
                    </a>
                    <p class="lead" style="color: black;">At the time of subscription purchase, you will be billed for the total price of the subscription term. All renewed subscriptions will be billed in full at the time of renewal.
                    </p>
                 </li>

                 <br><br>
                 <h4 style="margin-left: 15px; text-decoration: underline; text-decoration-skip-ink: none; color: #0e66c7;

                 font-size: 2rem;">Mobile Application</h4>
                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">Why is there a mobile app?

                    </a>
                    <p class="lead" style="color: black;">The mobile app allows children to explore the online modules at home as well as “on-
                        the-go” and engage directly with augmented reality technology.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">Is the mobile app free?

                    </a>
                    <p class="lead" style="color: black;">Yes, access to the mobile app is free with any subscription purchase.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">Does the app collect or store any information?

                    </a>
                    <p class="lead" style="color: black;">The Animal Heroes app stores small amounts of data on user activity but does not store
                        or sell any sensitive data.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">Does the mobile app have parental controls?

                    </a>
                    <p class="lead" style="color: black;">Yes, there are security features for parental control that abide by Apple and Android’s 
                        parental standards and guidelines. 
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I use the mobile app?

                    </a>
                    <p class="lead" style="color: black;">Please watch the getting started video here.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">Is the mobile app for iOS and Android?

                    </a>
                    <p class="lead" style="color: black;">Yes, the Animal Heroes app can be downloaded on both iOS and Android devices by 
                        searching “Animal Heroes” in the App Store or Google Play store. You will receive your 
                        login credentials after you purchase a subscription.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">What is the contact information for troubleshooting and support?

                    </a>
                    <p class="lead" style="color: black;">
                      Please contact AnimalHeroes@mysticaquarium.org and our support team will respond to your inquiry within 24 hours, Monday–Friday.
                    </p>
                 </li>

                 <br><br>

                 <h4 style="margin-left: 15px; text-decoration: underline; text-decoration-skip-ink: none; color: #0e66c7;

                 font-size: 2rem;">Account Information</h4>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I manage my subscriptions and account information?

                    </a>
                    <p class="lead" style="color: black;">Log into your account by visiting WEBSITE URL. Once you’ve logged in, you can 
                        manage all of the details of your account, including your subscriptions, by clicking the 
                        “Manage Subscriptions” option.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I reset my password?

                    </a>
                    <p class="lead" style="color: black;">Click here to reset your account password.
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I update shipping information?

                    </a>
                    <p class="lead" style="color: black;">Click here to update your shipping information. We start processing the subscription 
                        boxes for shipping on the 20th of each month so changes to your shipping information 
                        after that date will not be processed until the following month
                    </p>
                 </li>

                 <li>
                    <a style="font-size: 20px; text-decoration: none; color: #083462;">How do I contact customer support for account problems?

                    </a>
                    <p class="lead" style="color: black;">Please contact AnimalHeroes@mysticaquarium.org and our support team will respond 
                        within 24 hours, Monday–Friday.
                    </p>
                 </li>



                <br><br><br><br><br>
             
             </ul> <!-- / accordion -->
             </div>
          </section>

            <!-- Footer -->
<footer class="text-center text-lg-start" style="background-color: #0C56A6; margin-top: -40px;">

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-weight: 400; color: white;">
    Animal Heroes, brought to you by <a class="text-light" href="https://www.mysticaquarium.org" target="_blank" style="font-weight: bold;">Mystic Aquarium</a> and <a class="text-light" href="https://www.arsome.com" target="_blank" style="font-weight: bold;">ARSOME Technology</a>.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

          
          <script>
            (function($) {
       $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
   
       $('.accordion a').click(function(j) {
           var dropDown = $(this).closest('li').find('p');
   
           $(this).closest('.accordion').find('p').not(dropDown).slideUp();
   
           if ($(this).hasClass('active')) {
               $(this).removeClass('active');
           } else {
               $(this).closest('.accordion').find('a.active').removeClass('active');
               $(this).addClass('active');
           }
   
           dropDown.stop(false, true).slideToggle();
   
           j.preventDefault();
       });
   })(jQuery);
   </script>
   <script>
     // Get the modal
   var modal = document.getElementById("myModal");
   
   // Get the button that opens the modal
   var btn = document.getElementById("myBtn");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   
   // When the user clicks on the button, open the modal
   btn.onclick = function() {
     modal.style.display = "block";
   }
   
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
     modal.style.display = "none";
   }
   
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   } 
   </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
          <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ea25d8c387c007ac26facfd" type=text/javascript integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=anonymous></script><script src=https://assets.website-files.com/5ea25d8c387c007ac26facfd/js/webflow.abb1c072b.js type=text/javascript></script><!--[if lte IE 9]><script src=//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js></script><![endif]--> 
        </script>
         <script>
             (function($) {
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
    
        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('p');
    
            $(this).closest('.accordion').find('p').not(dropDown).slideUp();
    
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }
    
            dropDown.stop(false, true).slideToggle();
    
            j.preventDefault();
        });
    })(jQuery);
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
    </script>
    <script>

$(document).ready(function(){
  $('.slick-slider').slick({
    setting-name: setting-value
  });
});
				
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
        </body>
</html>