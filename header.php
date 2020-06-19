
<style type="text/css">
        body{
          top:0px !important;
        }
        .goog-te-banner-frame{
          display: none !important;
        }
      </style>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">   
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es',  autoDisplay: true, multilanguagePage: false}, 'google_translate_element');
        }

    </script>
<script type="text/javascript">
                      $(document).ready(function(){

                          var serviceList = {2: "auto-accident-treatment::Auto Accident Treatment::http://texasspecialtyclinic.com/assets/images/menu1.jpg", 
                                          3: "diagnostic-services::Diagnostic Services::http://texasspecialtyclinic.com/assets/images/menu2.jpg",
                                          4: "iv-infusion::IV Infusion::http://texasspecialtyclinic.com/assets/images/menu3.jpg",
                                          5:"iv-nutritional-therapy::Iv Nutritional Therapy::http://texasspecialtyclinic.com/assets/images/menu4.jpg",
                                          6:"occupational-health-care::Occupational Health Care::http://texasspecialtyclinic.com/assets/images/menu5.jpg",
                                          7:"oncology::Oncology::http://texasspecialtyclinic.com/assets/images/menu6.jpg",
                                          8:"physical-therapy::Physical Therapy::http://texasspecialtyclinic.com/assets/images/menu7.jpg",
                                          9:"podiatry-treatment::Podiatry Treatment::http://texasspecialtyclinic.com/assets/images/menu8.jpg",
                                          10:"prep::PrEP::http://texasspecialtyclinic.com/assets/images/menu9.jpg",
                                          11:"primary-care::Primary Care::http://texasspecialtyclinic.com/assets/images/menu10.jpg",
                                          12:"travel-medicine::Travel Medicine::http://texasspecialtyclinic.com/assets/images/menu11.jpg",
                                          13:"urgent-care::Urgent Care::http://texasspecialtyclinic.com/assets/images/menu12.jpg",
                                          14:"tele-medicine::Telemedicine::http://texasspecialtyclinic.com/assets/images/menu13.jpg"
                                        };

                           


                          //sub menu 1 image changer
                          $('#header_submenu_1 li:eq(1)').css('background-image','url(http://texasspecialtyclinic.com/assets/images/menu1.jpg)');
                          $('#header_submenu_1 li').not("#header_submenu_1 li:eq(1)").on("mouseover", function(event){
                              var listIndex =  $(this).index();
                              var view_content = serviceList[listIndex].split("::");
                              $('#header_submenu_1 li:eq(1)').css('background-image','url('+view_content[2]+')');
                              $('#header_submenu_1 li:eq(1)').html('<a href="http://texasspecialtyclinic.com/services/'+view_content[0]+'/">'+view_content[1]);
                              // alert($(this).closest('ul').attr('id'));
                          });

                          
                      });
                  </script>

 <div class="header">
         <header class="header__brandArea">
            <div class="header__brandContainer">
               <a href="http://texasspecialtyclinic.com/" class="header__brandLogo">
               <img src="http://texasspecialtyclinic.com/assets/images/logo.png" alt="" title="" class="header__brandIcon header__brandIcon--desktop">
               <img src="http://texasspecialtyclinic.com/assets/images/mobilelogo.png" alt="" title="" class="header__brandIcon header__brandIcon--mobile">
               </a>
               <ul class="header__brandOpts">
                  <ul class="social-icons social-icons--header">
                     <li class="social-icons__item">
                        <a href="https://twitter.com/TxSpecialty" target="_blank" class="social-icons__link"><i class="fab fa-twitter"></i></a>
                     </li>
                     <li class="social-icons__item">
                        <a href="https://www.facebook.com/txspecialty" target="_blank" class="social-icons__link"><i class="fab fa-facebook"></i></a>
                     </li>
                  
                     <li class="social-icons__item">
                        <a href="https://www.instagram.com/txspecialty/" target="_blank" class="social-icons__link"><i class="fab fa-instagram"></i></a>
                     </li>
                  </ul>
                 
                 
                  <li class="header__brandOptsItem translateli">
                        <div id="google_translate_element">
                        </div>
                  </li>
                 
                  <li class="header__brandOptsItem header__brandOptsItem--menuIcon">
                     <div class="header__brandOptsTarget header__menuIcon mobileMenuTrigger">
                        <span class="mobileMenuTriggerInner"></span>
                     </div>
                  </li>

               </ul>
            </div>
         </header>
         <navigation role="navigation" class="header__navigation">
         <div class="header__navigationWrap">
            <div class="header__navigationContainer">
               <ul class="header__list ">
                  

                  <li class="header__list__item  header__list__item--520"><a href="http://texasspecialtyclinic.com/about-us/">About Us</a></li>

                  <li class="header__list__item  header__list__item--parent parentNavItem  header__list__item--508">
                     <a href="">Services</a>
                     <div class="dropdown">
                         <ul id="header_submenu_1" class="header__list__sub-menu header__list__sub-menu--1">
                           <li class=""><a href="http://texasspecialtyclinic.com/services/auto-accident-treatment/">Auto Accident Treatment</a></li>
                           <li class=""><a href="http://texasspecialtyclinic.com/services/diagnostic-services/">Diagnostic Services</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/iv-infusion">IV Infusion</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/iv-nutritional-therapy/">Iv Nutritional Therapy</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/occupational-health-care/">Occupational Health Care</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/oncology/">Oncology</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/physical-therapy/">Physical Therapy</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/podiatry-treatment/">Podiatry Treatment</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/prep/">PrEP</a></li>

                           <li class=""><a href="http://texasspecialtyclinic.com/services/primary-care/">Primary Care</a></li>
                            <li class=""><a href="http://texasspecialtyclinic.com/services/travel-medicine/">Travel Medicine</a></li>
                           <li class=""><a href="http://texasspecialtyclinic.com/services/urgent-care/">Urgent Care</a></li>
                           <li class=""><a href="#">Telemedicine</a></li>
                           
                        </ul>
                     </div>
                  </li>
                 
                 
                <!--   <li class="header__list__item  header__list__item--parent parentNavItem  header__list__item--517">
                     <a href="">Patient Resources</a>
                     <div class="dropdown">
                        <ul class="header__list__sub-menu header__list__sub-menu--1">
                           <li class="header__list__sub-menu__item header__list__sub-menu--1__item  header__list__item--600"><a href="http://texasspecialtyclinic.com/request-an-appointment/">Request an appointment</a></li>
                           <li class="header__list__sub-menu__item header__list__sub-menu--1__item  header__list__item--618"><a href="">Patient Forms</a></li>
                           <li class="header__list__sub-menu__item header__list__sub-menu--1__item  header__list__item--617"><a href="">Insurances</a></li>
                        </ul>
                     </div>
                  </li> -->
                   <li class="header__list__item  header__list__item--520"><a href="http://texasspecialtyclinic.com/request-an-appointment/">Request an appointment</a></li>

                  <!-- <li class="header__list__item  header__list__item--520"><a href="http://texasspecialtyclinic.com/events/">Events</a></li> -->
                
                  <li class="header__list__item  header__list__item--520"><a href="http://texasspecialtyclinic.com/contact/">Contact Us</a></li>
               
               </ul>
            </div>
         </div>
         </naviation>
      </div> 
       <div class="header__overlay"></div>
      <script>
         var cartImgIcon = "http://texasspecialtyclinic.com/assets/svg/cart_icond41d.svg?>";
         var donateImgIcon = "http://texasspecialtyclinic.com/assets/svg/donate_icond41d.svg?>";
         
      </script>
      <div class="mobile-menu">
         <div class="mobile-menu__overlay"></div>
         <div class="mobile-menu__list">
            <ul class="mobile-menu__nav ">
                <li class="mobile-menu__nav__item  mobile-menu__nav__item--520"><a href="http://texasspecialtyclinic.com/about-us/">About Us</a></li>

               <li class="mobile-menu__nav__item  mobile-menu__nav__item--parent parentNavItem  mobile-menu__nav__item--508">
                  <a href="">Services</a>
                  <div class="dropdown">
                     <ul class="mobile-menu__nav__sub-menu mobile-menu__nav__sub-menu--1">
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--550"><a target="_blank" href="http://texasspecialtyclinic.com/services/auto-accident-treatment/">Auto Accident Treatment</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--549"><a target="_blank" href="http://texasspecialtyclinic.com/services/diagnostic-services/">Diagnostic Services</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--548"><a target="_blank" href="http://texasspecialtyclinic.com/services/iv-infusion">IV Infusion</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/iv-nutritional-therapy/">Iv Nutritional Therapy</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/occupational-health-care/">Occupational Health Care</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="">Oncology</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/physical-therapy/">Physical Therapy</a></li>
                         <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/podiatry-treatment/">Podiatry Treatment</a></li>
                          <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/prep/">PrEP</a></li>
                           <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/primary-care/">Primary Care</a></li>
                           <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/travel-medicine/">Travel Medicine</a></li>
                           <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="http://texasspecialtyclinic.com/services/urgent-care/">Urgent Care</a></li>
                           <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--3836"><a target="_blank" href="#">Telemedicine</a></li>
                           
                     </ul>
                  </div>
               </li>
              
               
              <!--  <li class="mobile-menu__nav__item  mobile-menu__nav__item--parent parentNavItem  mobile-menu__nav__item--517">
                  <a href="">Patient Resources</a>
                  <div class="dropdown">
                     <ul class="mobile-menu__nav__sub-menu mobile-menu__nav__sub-menu--1">
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--600"><a target="_blank" href="http://texasspecialtyclinic.com/request-an-appointment/">Request an appointment</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--618"><a target="_blank" href="">Patient Forms</a></li>
                        <li class="mobile-menu__nav__sub-menu__item mobile-menu__nav__sub-menu--1__item  mobile-menu__nav__item--617"><a target="_blank" href="">Insurances</a></li>
                       
                     </ul>
                  </div>
               </li> -->

             <li class="mobile-menu__nav__item  mobile-menu__nav__item--520"><a href="http://texasspecialtyclinic.com/request-an-appointment/" target="_blank">Request an appointment</a></li>


               <!-- <li class="mobile-menu__nav__item  mobile-menu__nav__item--520"><a href="http://texasspecialtyclinic.com/events/" target="_blank">Events</a></li> -->
              
               <li class="mobile-menu__nav__item  mobile-menu__nav__item--521"><a href="http://texasspecialtyclinic.com/contact/" target="_blank">Contact</a></li>
            </ul>
         </div>
      </div>