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


<style>
    .content
{
 text-align: center !important;
 justify-content: center !important;
 align-items: center !important;
}
.inner
{
 display:inline-block;
}
</style>
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
            .footer { background-image: url('img/footer.png'); width: 100
            .footer-bottom {  width: 100%; background-color: #083462}
            .powered { float: right; color: white; }
            .btn { font-weight: bold; }
            .hero { background-image: url('img/hero.png'); width:100vw; height:80vh; display:flex; background-size:cover; background-position:top top; background-repeat:no-repeat;  }
            .hero-mobile { background-image: url('img/hero.png'); width:100vw; height:55vh; display:flex; background-size:cover; background-position:center right; background-repeat:no-repeat;  }
            .hero-text { color: white; font-weight: bold; text-align: left; margin-top: 130px; }
            .hero-desc { color: white; text-align: left; font-weight: 400; }
            .btn-hero { padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; float: left; }
            .hero-gift { background-image: url('./gift-thumb.jpg'); background-position: bottom bottom; width:100vw; height:80vh;

/* Center and scale the image nicely */
background-position: top top;
background-repeat: no-repeat;
background-size: cover;  }
            .hero-gift-mobile { background-image: url('./wave.png'); background-color: transparent; width:100vw; height:45vh; display:flex; background-size:cover; background-position:center right; background-repeat:no-repeat;  }
            .btn-secondary { background-color: white; color: black; border: solid 1px #d7d7d7; padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; font-weight: bold; }
            .btn-secondary:hover { background-color: #d7d7d7; color: black; }
            .lead {
              font-weight: 500;
              font-size: 18px;
            }
        </style>
        
        <style type=text/css>#desktop-content{display:block}#mobile-content{display:none}@media screen and (max-width:768px){#desktop-content{display:none}#mobile-content{display:block}}</style>
        <style>
            .accordion {
           max-width: 900px;
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

         .navbar-dark .navbar-toggler-icon {
  background-color: #0C56A6;
  border-radius: 100px;
  border: 0px;
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
         .btn-mobile {
            animation: glowing 5000ms infinite;
         }
@keyframes glowing {
  0% { box-shadow: 0 0 -10px #fff; }
  40% { box-shadow: 0 0 20px #fff; }
  60% { box-shadow: 0 0 20px #fff; }
  100% { box-shadow: 0 0 -10px #fff; }
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
  color: #0C56A6;
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
  border-radius: 5rem;
  font-weight: bold;
  padding-top: 10px;
  padding-bottom: 10px;
  opacity: 0.7;
  transition: all 0.2s;
  width: 100%;
  background-color: #0C56A6;
  border: solid 1px #0C56A6;
  font-size: 18px;
}

/* Hover Effects on Card */

.card-hover:hover {
    background-color: #e5f3fe;
    color: #0C56A6;
    border-radius: 15px;
  }
  
  .card-hover{
      text-decoration: none;
  }

@media (min-width: 992px) {
  .pricing .card:hover {
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

[aos="fade"] {
  opacity: 0;
  transition-property: opacity;
}

[aos="fade"].aos-animate {
  opacity: 1;
}

</style>
<style>
  .animated {
     background-image: url(/css/images/logo.png);
     background-repeat: no-repeat;
     background-position: left top;
     -webkit-animation-duration: 10s;
     animation-duration: 10s;
     -webkit-animation-fill-mode: both;
     animation-fill-mode: both;
     z-index: 9999;
     position: relative;
  }
  
  @-webkit-keyframes fadeInDown {
     0% {
        opacity: 0;
        -webkit-transform: translateY(-10px);
     }
     100% {
        opacity: 1;
        -webkit-transform: translateY(0);
     }
  }
  
  @keyframes fadeInDown {
     0% {
        opacity: 0;
        transform: translateY(-10px);
     }
     100% {
        opacity: 1;
        transform: translateY(0);
     }
  }
  
  .fadeInDown {
     -webkit-animation-name: fadeInDown;
     animation-name: fadeInDown;
  }
</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- heroku script -->
        <script>
var query = window.location.search.substring(1);
            var params = query.split("&");
            var postId;
            for (var pair in params){
                if (params[pair].split("=")[0] == "postId"){
                    postId = params[pair].split("=")[1];
                };
            };
            var canonicalUrlTag = document.createElement('meta');
            canonicalUrlTag.setAttribute('property', 'og:url');
            canonicalUrlTag.content = `https://mysticbackend.herokuapp.com/api/community/facebook/${postId}`;
            document.getElementsByTagName('head')[0].appendChild(canonicalUrlTag);
 </script>
 <!-- end heroku script -->
 
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8GBK3F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8GBK3F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
        <div id="desktop-content">
        <div class="alert alert-primary" role="alert" style="background-color: #083462; border: 0px; border-radius: 0px; padding: 0.75rem;">
            <center><span style="margin-top: -25px;"><img src="img/gift-box.png" height="18" style="margin-top: -5px;"></span>&nbsp;&nbsp;<a href="https://parents.mysticanimalheroes.org/purchase_gift" class="gift" style="color: #fff; margin-top: 5px; font-size: 0.85rem; text-decoration: underline;" target="_blank">Give the gift of Animal Heroes.</a> <span style="color: #fff; font-size: 0.85rem;">Education backed by Mystic Aquarium.</span></center>
          </div>
          </div>
          <div id="mobile-content">
        <div class="alert alert-primary" role="alert" style="background-color: #083462; border: 0px; border-radius: 0px; padding: 0.75rem;">
            <center><span style="margin-top: -25px;"><img src="img/gift-box.png" height="18" style="margin-top: -5px;"></span>&nbsp;&nbsp;<a href="https://parents.mysticanimalheroes.org/purchase_gift" class="gift" style="color: #fff; margin-top: 5px; font-size: 0.85rem; text-decoration: underline;" target="_blank">Give the gift of Animal Heroes.</a> <br><span style="color: #fff; font-size: 0.85rem;">Education backed by Mystic Aquarium.</span></center>
          </div>
          </div>
          <div id="desktop-content">
        <nav class="navbar navbar-expand-lg navbar-ml navbar-dark" style="background: rgba(0, 0, 0, 0);">
            <div class="container">
              <a class="navbar-brand" href="https://www.arsome.com/animal-heroes/mystic"><img src="img/logo.png" class="logo"></a>

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
              <a class="navbar-brand" href="/"><img src="img/logo.png"  height="90"></a>

 <div class="nav-item">
                    <a href="https://www.arsome.com/animal-heroes/faq" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style=" margin-top: -4px; margin-left: 80px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">FAQ</a>
                  </div>
                   <div class="nav-item">
                    <a href="https://parents.mysticanimalheroes.org/login" class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="margin-top: -4px; font-size: 18px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">Login</a>
                  </div>

              
              </div>
            </div>
          </nav>
          </div>

          <div id="desktop-content">
          <section style=" background-image: url('./girl.png'); background-position: top center; 
          background-repeat: no-repeat;
          background-size: cover; margin-top: -140px; padding-bottom: 150px;">
              <div class="container" >
                  <div class="row">
                      <div class="col-md-6">
                          <br>
                          <h1 style="margin-top: 210px; color: #fff; font-weight: bold;">Immersive, Educational, Fun.</h1>
                          <p class="lead" style="font-size: 20px; color: #fff;">
Animal Heroes is a fun subscription program that brings nature and science to life for kids ages 6–11. Each month’s animal adventure includes game-based and augmented reality learning, hands-on activities, outdoor explorations, and more!
</p>

                        
                      </div>
                      <div class="col-md-5">

                          
                      
                        </div>
                  </div>
              </div>
              <br><br>
          </section>
          </div>
          <div id="desktop-content" style="margin-top: 0px;">
          <section style="background-color: transparent; z-index: 9999; position: relative; margin-top: -180px;">
              <div class="container">
                  <center>
           <div class="row" style=" width: 75%;">
    <div class="col-md" style="background: white !important; padding-top: 10px; padding-bottom: 10px; border-radius: 10px;  box-shadow: 0 0 4px rgba(12, 86, 166, 1);">
      <p class="lead" style="margin-top: 10px;">
      <img src="./nancy.png" style="border-radius: 99999px" height="50">


          <p class="lead">
"I loved knowing that my daughter wasn’t just playing games, but expanding her knowledge base."
      </p>
      <p class="lead" style="font-weight: bold; font-size: 16px;">— Nancy G.</p>
    </div>
    &nbsp;&nbsp;
    <div class="col-md" style="background: white !important; padding-top: 10px; padding-bottom: 10px; border-radius: 10px; box-shadow: 0 0 4px rgba(12, 86, 166, 1);">
      <p class="lead" style="margin-top: 10px;">
<img src="./thomas.png" style="border-radius: 9999px;" height="50">

          <p class="lead">
"Super fun games! I love being Tom the Marine Biologist and learning all about the animals."


      </p>
      <p class="lead" style="font-weight: bold; font-size: 16px;">— Thomas B., Age 8
</p>
    </div>
  </div>
</div>
</center>
</div>
</section>
</div>
          
          
 


          <div id="mobile-content">
            <section style=" background-image: url('./girl.jpg'); background-position: bottom center; 
          background-repeat: no-repeat;
          background-size: cover; margin-top: -140px; padding-bottom: 0px;">
                <div class="container">
               
                        <br><br><br><br><br><br>
                            <h1 style="margin-top: 15px; color: #fff; font-weight: bold; text-align: center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">Immersive, Educational, Fun.</h1>
                            <p class="lead" style="text-align: center; color: #fff;  text-shadow: 1px 1px 2px rgba(0, 0, 0, 1), 0 0 4px rgba(0, 0, 0, 0.58);">
                              Animal Heroes is a fun multimedia program that brings nature and science to life for kids ages 6–10. </p>
                 
                  <center><a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-lg btn-mobile" style="font-weight: bold; margin-top: -5px; font-size: 18px; padding-top: 9px; padding-bottom: 9px; padding-left: 25px; padding-right: 25px;">Get Started</a></center>
                   <center></center>
                   <br><br><br><br>

                </div>
                <br><br>
            </section>
            </div>
            
              <div id="desktop-content" style="margin-top: 0px;">
              <section style="position: relative; ">
    
    
    
    <!--            <div class="overflow-hidden text-center bg-light hero-gift" >-->
    <!--                <div class="container">-->
    <!--                  <br><br><br><br><br>-->
    <!--                  <div class="row">-->

                        
    <!--                     <center> <h1 style="color: white; font-weight: 600; margin-top: 130px; text-shadow: #a40 2px 0 40px;">-->
    <!--                        Give the gift-->
    <!--                         of Animal Heroes.-->
    <!--                      </h1>-->
    <!--                      </center>-->
    <!--                      <div class="col">-->
    <!--                      <center><a href="#" class="btn btn-lg btn-primary" style=" border-radius: 50px;">Gift Subscription</a> &nbsp; &nbsp; <a href="#" class="btn btn-lg btn-danger" style="border-radius: 50px; margin-left: 15px;">Subscribe Now</a></center>-->
    <!--                      </div>-->
                   
    <!--                  </div>-->
    <!--                </div>-->
    <!--<br><br><br><br><br>-->
    <!--          </section>-->
    <!--          </div>-->


  

          


              <div id="desktop-content">
              <svg style="z-index: 999; position: relative; margin-top: -300px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e6f4ff" fill-opacity="1" d="M0,224L80,218.7C160,213,320,203,480,208C640,213,800,235,960,234.7C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
              </div>

            
 <!--<div id="mobile-content" style="margin-top: -30px;">-->
 <!--           <section style="margin-top: 0px; z-index: 9999; background-color: transparent;">-->
 <!--             <div class="overflow-hidden text-center bg-light hero-gift-mobile" style="position: relative; z-index: 9999; background-color: transparent;">-->
 <!--                 <div class="container">-->

 <!--                   <br>-->

 <!--                       <h1 class="display-3" style="color: white; font-weight: 600; text-align: left; margin-top: 45px;">-->
 <!--                         Give the gift-->
 <!--                          of <br>Animal Heroes.-->
 <!--                       </h1>-->
 <!--                       <a href="#" class="btn btn-md btn-primary" style="float: left; border-radius: 50px;">Gift Subscription</a> &nbsp; &nbsp; <a href="#" class="btn btn-md btn-danger" style="float: left; border-radius: 50px; margin-left: 15px;">Subscribe Now</a>-->

 <!--                 </div>-->
 <!-- <br>-->
 <!--           </section>-->
 <!--           </div>-->

              

            <div id="mobile-content">
              <svg style="z-index: 9999; position: relative; margin-top: -90px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e6f4ff" fill-opacity="1" d="M0,224L80,218.7C160,213,320,203,480,208C640,213,800,235,960,234.7C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
              </div>

   

        <div id="desktop-content">
          <section style="position: relative; background: linear-gradient(0deg, rgba(34,105,184,1) 0%, rgba(43,129,224,1) 30%, rgba(230,244,254,1) 60%, rgba(230,244,254,1) 100%); margin-top: -80px; background-position: bottom center; z-index: 9;">
              <div class="container">
                <br><br><br><br><br>  <br>
                  <div class="row" style="margin-top: 50px;">
                      <div class="col">
                          
                          <center>
                            <img src="./subscribe.png"  height="190" style="margin-top: -12px; "> 
                            <br>
                            <h1 style="color: white; margin-top: 15px; font-size: 2.5rem;">Step 1</h1>
                            <p class="lead" style="color: white; font-size: 20px;">Choose your subscription and join a community of learners and explorers.</p>
                        </center>
                      </div>
                      <div class="col">
                          
                        <center>
                          
                            <img src="img/shipped.png" height="280" style="margin-top: -102px; z-index: 9999; position: relative;"> <br> <h1 style="color: white; margin-top: 15px; font-size: 2.5rem;">Step 2</h1>
                        <p class="lead" style="color: white; font-size: 20px; ">Your monthly box ships and you gain access to the Animal Heroes digital
content.</p>
                        </center>
                    </div>
                    <div class="col">
                        <center>
                            <img src="./arrive-new.png" height="190" style="z-index: 9999; position: relative;"> <br> <h1 style="color: white ; margin-top: 5px; font-size: 2.5rem;">Step 3</h1>
                        <p class="lead" style="color: white; font-size: 20px;">Your Animal Heroes box arrives – let the Heroism begin!</p></center>
                    </div>
                  </div>
<br><br><br>
              </div>
              


            <!-- <center><h1 style="color: white; font-size: 2.5rem;">The Experience</h1></center>
            <center><p class="lead" style="color: white; font-size: 20px; width: 60%;">Engage your child with immersive learning. Choose an avatar, feed your augmented reality animal, and participate in a fun and educational program for children aged 6-11 from Mystic Aquarium.</p></center>
            <br>
            <center>
                <iframe width="900" height="500" src="https://www.youtube.com/embed/YPnKPl44GOY?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center> -->
            

            </div>

     
          </div>

          <div id="mobile-content">
            <section style="  background-image: url('./gradient.jpg'); margin-top: 0px;">
                <div class="container">
          
                  <br><br><br>

                            
                            <center>
                              <img src="./subscribe.png" height="250"> 
                              <br>
                              <h3 style="color: #0C56A6; margin-top: 15px; font-size: 2rem;">Step 1</h3>
                              <p class="lead" style="color: black; font-size: 18px;">Choose your subscription and join the community of passionate learners and explorers.</p>
                          </center>
                        
<br>
                            
                          <center>
                            
                              <img src="img/shipped.png" height="250" > <br> <h3 style="color: #0C56A6; margin-top: 15px; font-size: 2rem;">Step 2</h3>
                          <p class="lead" style="color: black; font-size: 18px;">Your box ships and you immediately gain access to the Animal Heroes online learning platform.</p>
                          </center>
                 <br>
                          <center>
                              <img src="./arrive-new.png" height="250" > <br> <h3 style="color: #0C56A6 ; margin-top: 15px; font-size: 2rem;">Step 3</h3>
                          <p class="lead" style="color: black; font-size: 18px;">Your box arrives, filled with, activities, toys, and fun accessories to enhance the month's module.</p></center>
               <br>
                <center> <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; margin-top: -5px; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;



">Get Started</a></center>
                <br>
                <br>
                <br>
                    </div>

              
              <br><br>
  
            </section>
            </div>
          
           <div id="mobile-content">
              <section class="pricing py-5" style="margin-top: -60px; background-color: #0C56A6;">
              
                <div class="container">
                  <br>
                  <center><h1 style="color: white; font-weight: 600;">Subscriptions</h1></center>
                  <center><p class="lead" style="color: #e5f3fe;">Our pricing is <span style="color: white; font-weight: bold;">simple.</span> Shipping is <span style="color: white; font-weight: bold;">free</span>. Cancel <span style="color: white; font-weight: bold;">anytime</span>.</p></center>
              <br>
                  <div class="row">
                  
              
                <div class="col">
                 <div class="card " style="width: 100%; margin-top: 20px;">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">1 MONTH</h5>
                      <h6 class="card-price text-center">$31.95<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul" class="text-align: center; width: 200px;">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                      </ul>
                       <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success" >Get Started</a>
                    </div>
                  </div>
                  
                </div>
              
              
                <div class="col" style="z-index: 9999; position: relative; margin-top: 20px;">
                  <div id="most-popular" style="background-color: red; border-radius: 16px;">
                      <center><p class="lead" style="color: white; font-size: 15px; margin-top: 5px;"><b>Most Popular</b></p></center>
                      
                <div class="card " style="width: 100%; margin-top: -15px;">
                  <div class="card-body">
                    <h5 class="card-title text-uppercase text-center" style="color: #0C56A6;">3 MONTHS</h5>
                    <h6 class="card-price text-center">$29.95<span class="period">/month</span></h6>
                    <!--<center><small class="text-muted" style="font-weight: bold;">$89.85 /total</small></center>-->
                    <hr>
                    <ul class="fa-ul" class="text-align: center; width: 200px;">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                    </ul>
                    <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-danger" style="background-color: #E62126; border: solid 1px #E62126;">Get Started</a>  
                </div>
                </div>
                </div>
                
              </div>
              
              
                <div class="col" style="margin-top: 20px; ">
                  <div class="card " style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">6 MONTHS</h5>
                      <h6 class="card-price text-center">$27.95<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul" class="text-align: center; width: 200px;">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                      </ul>
                       <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success" >Get Started</a>
                    </div>
                  </div>
                </div>
              
                <div class="col" style="margin-top: 20px;">
                  <div class="card " style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase text-center" style="color: #0C56A6;">DIGITAL ONLY</h5>
                      <h6 class="card-price text-center">$14.95<span class="period">/month</span></h6>
                      <hr>
                      <ul class="fa-ul" class="text-align: center; width: 200px;">
                        <li style="text-align: left;"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Box</li>
                        <li style="text-align: left;"><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                      </ul>
                       <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success" >Get Started</a>
                    </div>
                  </div>
                </div>
                  
                </div>
              
                <br>
                </div>
                </div>
                </center>
              </div>
                  </div>
              
              </section>
              </div>
              
              
         
          <div id="mobile-content">
            <section style="background-color: #E5F3FF;">
              <div class="container" style="width: 85%;">
                  <br><br><br><br> 
                  <center><h1 style="font-weight: 600; color: #083462;">Why Choose Animal Heroes?</h1></center>
                  <br>
                  <br>

                         <center>
                            <img src="mystic-logo-icon1.png" height="75"> 
                            <h3 style="color: #083462; margin-top: 15px;">Community</h2>
                        <p class="lead" style="width: 78%;">Join Mystic Aquarium’s community of passionate learners and conservation champions.</p>
                        </center>

              
                        <center>
                            <img src="digital-icon3.png" height="75" style="margin-top: 30px;">
                            <h3 style="color: #083462; margin-top: 15px;">Digital</h2>
                        <p class="lead" style="width: 78%;">Access and experience Animal Heroes learning modules from your mobile phone or PC.</p>
                        </center>
                    
                    <center>
                        <img src="family-icon2.png" height="75" style="margin-top: 30px;">
                        <h3 style="color: #083462; margin-top: 15px;">Family Collaboration</h2>
                    <p class="lead" style="width: 78%;">Easily share pictures and progress with family and friends on the community board.</p>
                    </center>
                    </div>
               
                  <br>
                  
                        <center>
                            <img src="ar-icon4.png" height="75" style="margin-top: 15px;"> 
                            <h3 style="color: #083462; margin-top: 15px;">Interconnected Theme</h2>
                        <p class="lead" style="width: 78%;"> Interact with and take care of animals by feeding them and enhancing their habitat in augmented reality.</p>
                        </center>
                   
                    <div class="col">
                        <center>
                            <img src="education-icon5.png" height="75" style="margin-top: 30px;"> 
                            <h3 style="color: #083462; margin-top: 15px;">Education</h2>
                        <p class="lead" style="width: 78%;">Learn from educators of the Sea Research Foundation and their trusted Partners.</p>
                        </center>
                  
                    <center>
                        <img src="learning-home-icon6.png" height="75" style="margin-top: 30px;"> 
                        <h3 style="color: #083462; margin-top: 15px;">At-home</h2>
                    <p class="lead" style="width: 78%;">Provide a monthly learning program that combines online and outdoor activities.</p>
                    </center>
                 
                  <br><br><br><br> 
              </div>
          </section>
          </div>
          
<!--             <section style="background-image: url('./girl.png'); -->
<!--          background-position: top center; -->
<!--          background-repeat: no-repeat;-->
<!--          background-size: cover; height: 75vh;">-->
<!--             <div class="container" style=" justify-content: center; align-items: center !important; text-align: center;">-->
<!--             <center>-->
<!--                 <br><br><br>-->
<!--                 <div class="content">-->
<!--                     <div class="inner" style="justify-content: center !important; align-items: center;">-->
<!--                         <center>-->
<!--                 <div class="row" style="margin-top: 150px;">-->
<!--    <div class="col-md" style="background: rgba(255, 255, 255, 0.65); padding-top: 10px; padding-bottom: 10px; border-radius: 10px;">-->
<!--      <p class="lead">-->
      
<!--          <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/66bc88c2-7ade-11eb-86f7-024229a58da6/4d8ca708-iconfinder-42-3057671-1.svg" style="35">-->
<!--          <br>-->
<!--          <p class="lead">-->
<!--I loved knowing that my son wasn’t just playing games, but  expanding his knowledge base.-->
<!--      </p>-->
<!--      <p class="lead"><b>Matt T. - Dad-->
<!--</b></p>-->
<!--<img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/66bc88c2-7ade-11eb-86f7-024229a58da6/16x02uy-unsplash-s7nzsaomqi4-portrait-of-man-in-glasses-scientist_101e02301e01e00000c01o.jpg" style="border-radius: 9999px;">-->
<!--    </div>-->
<!--    &nbsp;&nbsp;-->
<!--    <div class="col-md" style="background: rgba(255, 255, 255, 0.65); padding-top: 10px; padding-bottom: 10px; border-radius: 10px;">-->
<!--      <p class="lead">-->
      
<!--          <img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/66bc88c2-7ade-11eb-86f7-024229a58da6/4d8ca708-iconfinder-42-3057671-1.svg">-->
<!--          <br>-->
<!--          <p class="lead">-->
<!--Super fun games! I love being Tom the Marine Biologist and learning all about the animals and how I can help them.-->


<!--      </p>-->
<!--      <p class="lead"><b>Thomas - Age 8-->
<!--</b></p>-->
<!--<img src="http://d9hhrg4mnvzow.cloudfront.net/unbouncepages.com/66bc88c2-7ade-11eb-86f7-024229a58da6/1tw9gbv-unsplash-odcqkevfsde_102301e01e01e00c00001o.jpg" style="border-radius: 9999px;">-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

          

          <div id="desktop-content">
            <section class="pricing py-5" style="margin-top: -30px; background-color: #2e85e6; z-index: 9999; position: relative;">
            
              <div class="container">
                
                <center><h1 style="color: white; font-weight: 600;">Subscriptions</h1></center>
                <center><p class="lead" style="color: #e5f3fe;">Our pricing is <span style="color: white; font-weight: bold;">simple.</span> Shipping is <span style="color: white; font-weight: bold;">free</span>. Cancel <span style="color: white; font-weight: bold;">anytime</span>.</p></center>
            <br>
                <div class="row">
                
            
              <div class="col">
                                    <div id="most-popular" style="background-color: transparent; border-radius: 16px;">

               <div class="card " style="width: 100%; margin-top: 30px;">
                  <div class="card-body">
                    <h5 class="card-title text-uppercase text-center" style="color: #0C56A6;">1 MONTH</h5>
                    <h6 class="card-price text-center">$31.95<span class="period">/month</span></h6>
                    <small style="color: white;">.</small>
                    <hr>
                    <ul class="fa-ul" class="text-align: center; width: 200px;">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                    </ul>
                    <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success">Get Started</a>
                  </div>
                </div>
                </div>
              </div>
            
            
              <div class="col">
                  <div id="most-popular" style="background-color: red; border-radius: 16px;">
                      <center><p class="lead" style="color: white; font-size: 15px; margin-top: 5px;"><b>Most Popular</b></p></center>
                      
                <div class="card " style="width: 100%; margin-top: -15px;">
                  <div class="card-body">
                    <h5 class="card-title text-uppercase text-center" style="color: #0C56A6;">3 MONTHS</h5>
                    <h6 class="card-price text-center">$29.95<span class="period">/month</span></h6>
                    <center><small class="text-muted" style="font-weight: bold;">$89.85 /total</small></center>
                    <hr>
                    <ul class="fa-ul" class="text-align: center; width: 200px;">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                    </ul>
<a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-danger" style="background-color: #E62126; border: solid 1px #E62126;">Get Started</a>                  </div>
                </div>
                </div>
                
              </div>
            
              <div class="col">
<div id="most-popular" style="background-color: transparent; border-radius: 16px;">

                <div class="card " style="width: 100%; margin-top: 30px">
                  <div class="card-body">
                    <h5 class="card-title text-uppercase text-center" style="color: #0C56A6;">6 MONTHS</h5>
                    <h6 class="card-price text-center">$27.95<span class="period">/month</span></h6>
                    <center><small class="text-muted" style="font-weight: bold;">$167.70 /total</small></center>
                    <hr>
                    <ul class="fa-ul" class="text-align: center; width: 200px;">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Box</li>
                                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                    </ul>
                    <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success" >Get Started</a>
                  </div>
                </div>
                
                </div>
</div>
            
              <div class="col">
                                    <div id="most-popular" style="background-color: transparent; border-radius: 16px;">

                <div class="card " style="width: 100%; background-color: #fff; margin-top: 30px">
                  <div class="card-body">
                    <h5 class="card-title  text-uppercase text-center" style="color: #0C56A6;">DIGITAL ONLY</h5>
                    <h6 class="card-price text-center">$14.95<span class="period">/month</span></h6>
                    <small style="color: white;">.</small>
                    <hr>
                    <ul class="fa-ul" class="text-align: center; width: 200px;">
                      <li style="text-align: left; font-weight: 500;"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Box</li>
                      <li style="text-align: left; font-weight: 500;"><span class="fa-li"><i class="fas fa-check"></i></span>Digital Content</li>
                    </ul>
                     <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-lg btn-success">Get Started</a>
                  </div>
                </div>
                </div>
                <br>
              </div>
            
              <br><br><br><br>
              </div>
              </div>
              </center>
            </div>
            
                </div>
        
            </section>
            </div>
            
         
      
            

            <div id="desktop-content">
              <section style="background-color: #E5F3FF;">
                  <div class="container" style="width: 85%;">
                      <br><br><br><br> 
                      <center><h1 style="font-weight: 600; color: #083462; margin-top: -30px;">Why Choose Animal Heroes?</h1></center>
                      <br>
                      <br>
                      <div class="row">
                          <div class="col"> 
                             <center>
                                <img src="mystic-logo-icon1.png" height="75"> 
                                <h3 style="color: #083462; margin-top: 15px;">Community</h2>
                            <p class="lead">Join Mystic Aquarium’s community of learners and conservation champions.</p>
                            </center>
                          </div>
                          <div class="col">
                            <center>
                                <img src="digital-icon3.png" height="75">
                                <h3 style="color: #083462; margin-top: 15px;">Digital</h2>
                            <p class="lead">Digital content is accessible on your phone, tablet, or computer.</p>
                            </center>
                        </div>
                        <div class="col">
                        <center>
                            <img src="family-icon2.png" height="75">
                            <h3 style="color: #083462; margin-top: 15px;">Family Collaboration</h2>
                        <p class="lead">Share pictures and progress with family and friends.</p>
                        </center>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                            <center>
                                <img src="ar-icon4.png" height="75"> 
                                <h3 style="color: #083462; margin-top: 15px;">Interconnected Theme</h2>
                            <p class="lead"> Learn about marine animals and everyday actions to
protect them.</p>
                            </center>
                        </div>
                        <div class="col">
                            <center>
                                <img src="education-icon5.png" height="75"> 
                                <h3 style="color: #083462; margin-top: 15px;">Education</h2>
                            <p class="lead">Learn from educators and experts from Mystic Aquarium and their
trusted partners.</p>
                            </center>
                      </div>
                      <div class="col">
                        <center>
                            <img src="learning-home-icon6.png" height="75"> 
                            <h3 style="color: #083462; margin-top: 15px;">Augmented Reality</h2>
                        <p class="lead">Interact with featured animals in your own
home.</p>
                        </center>
                      </div>
                    </div>
                  </div>
                  <br><br><br><br>
              </section>
              </div>
    

                   <div id="desktop-content" style="margin-top: -20px;">
          <section style="background-color: #138010; height: 650px; padding-bottom: 40px;">
            <div class="container">
            <div class="row featurette">
              <div class="col-md-5">
                <h1 style="color: white; font-weight: 600; margin-top: 90px;">What's Inside the Box</h1>
                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An 8-inch stuffed animal

                </p>

                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An animal adoption certificate

                </p>

                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> A souvenir animal medallion

                </p>


                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Animal trading cards with Augmented Reality

                </p>

                
                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An activity booklet featuring hands-on experiments, crafts, and conservation challenges

                </p>
                
                                             <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">Get Started</a>


              </div>
              <div class="col-md-7">
                <img src="book.png" style="position: relative; z-index: 9999; margin-top: -150px; height: 950px;">
        
              </div>
              </div>
            </div>
          </section>
          </div>

          <div id="mobile-content" style="margin-top: -40px;">
            <section style="background-color: #138010; height: 520px;">
              <div class="container">
         
             <br>
                  <h1 class="display-4" style="color: white; font-weight: 600; margin-top: 40px;">What's Inside the Box</h1>
                  <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An 8-inch stuffed animal

                </p>

                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An animal adoption certificate

                </p>

                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> A souvenir animal medallion

                </p>


                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Animal trading cards with Augmented Reality

                </p>

                
                <p class="lead" style="color: white; font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#ffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> An activity booklet featuring hands-on experiments, crafts, and conservation challenges

                </p>
                
                                             <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">Get Started</a>


               
                </div>
              </div>
            </section>
            </div>
            
            <div id="desktop-content">
            <section style="background-color: #E5F3FF;">
                <br><br><br>
                <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <iframe src="https://player.vimeo.com/video/495308832" style="width: 100%; height: 510px; margin-top: 85px;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-5" >
                        <h1 style="color: #083462; font-weight: 600; margin-top: 70px;">What's Available Online</h1>
                         <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> A design-your-own Animal Heroes avatar


                </p>

                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Videos about animals and animal experts


                </p>

                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Interactive online games


                </p>


                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Hands-on investigations


                </p>

                
                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Arts & crafts activities


                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Conservation challenges



                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Nature-based activities


                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Fun facts and quizzes



                </p>
                
                   <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Access to the Animal Heroes community




                </p>
                
                
            
                
                             <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">Get Started</a>
                    </div>
                </div>
                </div>
                <br><br><br>
            </section>
            </div>

  <div id="mobile-content">
            <section style="background-color: #E5F3FF;">
                
                <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <iframe src="https://player.vimeo.com/video/495308832" style="width: 100%; height: 510px; margin-top: -85px;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-5" >
                        <h1 style="color: #083462; font-weight: 600; margin-top: -90px;">What's Available Online</h1>
                         <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> A design-your-own Animal Heroes avatar


                </p>

                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Videos about animals and animal experts


                </p>

                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Interactive online games


                </p>


                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Hands-on investigations


                </p>

                
                <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Arts & crafts activities


                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Conservation challenges



                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Nature-based activities


                </p>
                
                
                 <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Fun facts and quizzes



                </p>
                
                   <p class="lead" style="font-size: 1.25rem;">
                  <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#083462;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#525b55"><path d="M129.50883,86l-39.9255,39.9255l10.75,10.75l50.6755,-50.6755l-50.6755,-50.6755l-10.75,10.75z"></path><path d="M136.16667,93.16667l-114.66667,0v-14.33333l114.66667,0z"></path></g></g></svg></span> Access to the Animal Heroes community




                </p>
                
                
            
                
                             <a href="https://parents.mysticanimalheroes.org/register" class="btn btn-danger btn-md" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">Get Started</a>
                    </div>
                </div>
                </div>
                <br><br>
            </section>
            </div>





        
          <section style="background-color: #fff;">
            <div class="container">
              <br><br><br>
            <center> <h1 style="color: #083462;">Frequently Asked Questions</h1></center>
            <br>
            <ul class="accordion">
              <li>
                 <a style="font-size: 20px; text-decoration: none; color: #0C56A6;">What is Animal Heroes?</a>
                 <p class="lead" style="color: black;"><b>Animal Heroes</b> is a fun multimedia program that brings nature and science to life for kids ages 6–11. It includes game-based and immersive learning, hands-on activities, outdoor explorations, and conservation challenges for families. Each month’s adventure includes an animal-themed subscription box and access to the <b>Animal Heroes</b> website and mobile app.</p>
              </li>
              <li>
                 <a style="font-size: 20px; text-decoration: none; color: #0C56A6;">Why purchase Animal Heroes?</a>
                 <p class="lead" style="color: black;"><b>Animal Heroes</b> is the perfect gift for children who love animals and want to learn more about how to help them. Each month, subscribers gain access to a wealth of fun and engaging activities designed by Mystic Aquarium’s expert educators. <b>Animal Heroes</b> is the ideal learning tool for family collaboration, outdoor exploration, and immersive learning. 
           </p>
              </li>
              <li>
                 <a style="font-size: 20px; text-decoration: none; color: #0C56A6;">How does it work?</a>
                 <p class="lead" style="color: black;">
                     
Each month the <b>Animal Heroes</b> program focuses on different aquatic animals such as penguins, sea turtles, sharks, and beluga whales. The subscription box every month includes a stuffed animal of the featured animal, animal adoption certificate, souvenir animal key chain, AR animal trading cards, and a 20-page activity booklet.
<br><br>
The digital content for each month, which can be accessed via the <b>Animal Heroes</b> mobile app and website, includes a design-your-own <b>Animal Heroes</b> avatar experience, cool videos about animals and animal experts, state-of-the-art augmented reality features, interactive online games, hands-on investigations, arts and crafts activities, conservation challenges, nature-based activities, fun facts and quizzes, and access to the Animal Heroes online community.
                 </p>
              </li>
              <br><br>
              <center>
                <div id="desktop-content">
                    <form action="https://www.arsome.com/animal-heroes/faq">
                  <button class="btn btn-danger btn-lg" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">Read More</button>
                </form>
                </div>
                <div id="mobile-content">
                    <form action="https://www.arsome.com/animal-heroes/faq">
                  <button class="btn btn-danger btn-lg" style="font-weight: bold; font-size: 18px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px; margin-left: -30px;">Read More</button>
                </form>
                </div>
              </center>
              
              
           
           </ul> <!-- / accordion -->

          <br>
           
            </div>

             </center>
         </section>
<!--<div id="desktop-content">-->
<!--          <section style="background-color: #0C56A6; margin-top: -100px;">-->
<!--            <br><br><br>-->
           <!-- slider goes here -->
<!--            <div class="container">-->
<!--              <br><br>-->
<!--              <center><h1 style="margin-top: -50px; color: #fff;">How Animal Heroes Helps Mystic Aquarium</h1>-->
<!--              <p class="lead" style="color: #fff; width: 60%;">Your purchase of an Animal Heroes subscription provides countless benefits to your family and supports Mystic Aquarium’s mission to protect our ocean planet.</p></center>-->
<!--                <center>-->
<!--                  <br>-->
<!--                <div class="row">-->
<!--                  <div class="col">-->
<!--                    <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/4-300x300.png">-->
<!--                  </div>-->
<!--                  <div class="col">-->
<!--                    <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/2-300x300.png">-->
<!--                  </div>-->
<!--                  <div class="col">-->
<!--                    <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/1-300x300.png">-->
<!--                  </div>-->
<!--                </div>-->
<!--                </center>-->
<!--                <br>-->
<!--            </div>-->
<!--<br>-->
<!--<center><button href="#" class="btn btn-danger btn-lg" disabled>Coming Soon</button></center>-->
<!--<br><br><br>-->

<!--          </section>-->
<!--          </div>-->

<!--          <div id="mobile-content">-->
<!--            <section style="background-color: #0C56A6; margin-top: -100px;">-->
<!--              <br><br><br>-->
             <!-- slider goes here -->
<!--              <div class="container">-->
<!--                <br><br>-->
<!--                <center><h1 style="margin-top: -50px; color: #fff;">How Animal Heroes Helps Mystic Aquarium </h1>-->
<!--                <p class="lead" style="color: #fff; width: 60%;">Your purchase of an Animal Heroes subscription provides countless benefits to your family and supports Mystic Aquarium’s mission to protect our ocean planet.</p></center>-->
<!--                  <center>-->
<!--                    <br>-->
                  
<!--                  <div id="carouselExampleIndicators" class="carousel slide">-->
<!--                  <div class="carousel-inner">-->
<!--                     <div class="carousel-item active">-->
<!--                        <center>-->
<!--                            <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/4-300x300.png" height="250">-->
<!--                        </center>-->
<!--                        <br>-->
                       
<!--                     </div>-->
<!--                     <div class="carousel-item">-->
<!--                        <center>-->
<!--                           <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/2-300x300.png" height="250">-->
<!--                        </center>-->
<!--                        <br>-->
                        
                       
<!--                     </div>-->
<!--                     <div class="carousel-item">-->
<!--                        <center>-->
<!--                           <img src="https://www.mysticaquarium.org/wp-content/uploads/2020/11/1-300x300.png" height="250">-->
<!--                        </center>-->
<!--                        <br>-->
                        
<!--                     </div>-->
<!--                  </div>-->
<!--                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="color: #2f94f9;">-->
<!--                     <span aria-hidden="true" style="color: #2f94f9;">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"-->
<!--                           width="40" height="40"-->
<!--                           viewBox="0 0 172 172"-->
<!--                           style=" fill:#000000;">-->
<!--                           <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">-->
<!--                              <path d="M0,172v-172h172v172z" fill="none"></path>-->
<!--                              <g fill="#ffffff">-->
<!--                                 <path d="M96.49159,23.72236l-62.27765,62.27764l62.27765,62.27765l18.70913,-18.70913l-43.56851,-43.56851l43.56851,-43.56851z"></path>-->
<!--                              </g>-->
<!--                           </g>-->
<!--                        </svg>-->
<!--                     </span>-->
<!--                     <span class="sr-only">Previous</span>-->
<!--                  </a>-->
<!--                  <a class="carousel-control-next" href="#carouselExampleIndicators" style="color: #2f94f9;" role="button" data-slide="next">-->
<!--                     <span aria-hidden="true" style="color: #2f94f9;">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"-->
<!--                           width="40" height="40"-->
<!--                           viewBox="0 0 172 172"-->
<!--                           style=" fill:#000000;">-->
<!--                           <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">-->
<!--                              <path d="M0,172v-172h172v172z" fill="none"></path>-->
<!--                              <g fill="#ffffff">-->
<!--                                 <path d="M75.50842,23.72236l-18.70913,18.70913l43.56851,43.56851l-43.56851,43.56851l18.70913,18.70913l62.27764,-62.27765z"></path>-->
<!--                              </g>-->
<!--                           </g>-->
<!--                        </svg>-->
<!--                     </span>-->
<!--                     <span class="sr-only">Next</span>-->
<!--                  </a>-->
<!--               </div>-->
<!--                  </center>-->
<!--                  <br>-->
<!--              </div>-->
<!--  <br><br><br>-->
  
<!--            </section>-->
<!--          </div>-->



         
        

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
      AOS.init({
  duration: 1200,
})

    </script>
    <script>
        let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

if (!slides.length == 0) {
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  let currentSlide = function (n) {
    showSlides((slideIndex = n));
  };

  function showSlides(n) {
    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
}

prev.addEventListener("click", () => {
  plusSlides(-1);
});

next.addEventListener("click", () => {
  plusSlides(1);
});

    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" /></script> <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>  <script type="text/javascript" src="../static/js/jquery.min.js"></script>  <script type="text/javascript" src="../static/js/bootstrap.js"></script> <script type="text/javascript" src="../static/js/script.js"></script> 
          </body>
</html>