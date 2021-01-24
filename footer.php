

<div class="mwc-overlay"></div>
</main>

    
    
    <!-- Booking Modal Box -->

    <div style="display: block;">
        <div id="modal-booking" class="bg-img modal-content h-100">
            <div class="h-100">

                <div class="row no-gutters align-items-start modal-booking-row">
                    <div class="col-lg-7 col-md-6 h-100 bg-img" style="background:url(<?php echo PJ_ASSETS_URI; ?>/img/welcome.JPG)"></div>
                    <div class="col-lg-5 col-md-6" style="max-height: 100vh;overflow-y: scroll;">
                        <div class="p-5">
                            <h2 class="mb-3">အခုဘဲ</br>ဆက်သွယ်လိုက်ပါ။</h2>
                            <form action="mail.php" method="post">
                                <div class="form-group">
                                   <label>Name*</label>
                                   <input type="text" name="name" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Company</label>
                                   <input type="text" name="company" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Phone number*</label>
                                   <input type="tel" name="phone" class="form-control">
                               </div>
                               <div class="form-group">
                                    <label>Email</label>
                                   <input type="text" name="email" class="form-control">
                               </div>
                               <div class="form-group">
                                    <label>Details of your request</label>
                                   <textarea name="request" id="" cols="30" rows="5" class="form-control" ></textarea>
                               </div>

                               <button class="btn btn-primary my-3 mr-3 w-100">Get In Touch</button>
                               
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


<section class="bg-light-blue shadow-sm mockup-call d-none" style="margin-top: 6rem;">
    <div class="container position-relative">
        <div class="row">
            <div class="img-wrap">
                <img src="<?php echo PJ_ASSETS_URI; ?>/img/call-mockup.png" alt="">
            </div>
            <div class="col-8 ml-auto">
                <div class="content py-5">
                    <h2>e-business ကသင့်ရဲ့လက်တကမ်းမှာပါ။</h2>
                    <p>Talk to one of our consultants today and let’s create something beautiful.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-secondary standard-padding-semi text-gray">
    <div class="container">
        <div class="footer-heading d-md-flex align-items-end  border-bottom pb-4 mb-4">
            <h2 class="text-white mb-md-0 mb-4">
                Send us an email,</br>to discuss a new project.
            </h1>
            <a name="" id="" class="btn btn-outline-light ml-auto" href="#" role="button">Get A Quote</a>
        </div>
        <div class="content w-md-50">
            <p>MWC is a web and mobile application development company offering services in website design, development, hosting, marketing, maintenance, and analysis.</p>
        </div>

        <div class="row footer-info py-5">
            <div class="col-lg-3 col-md-4 border-right">
                <h4 class="text-white">Services</h4>
                <ul class="list-unstyled p-0 m-0 content">
                    <li><a href="branding.php">Branding</a></li>
                    <li><a href="webdesign.php">Web Design & Development</a></li>
                    <li><a href="digital.php">Digital Marketing</a></li>
                    <li><a href="app.php">Application Development</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-8">
               <div class="content">
                    <p><a href="https://goo.gl/maps/8M1j515hfTpPamqQA" target="_blank">No.624, Gantgaw Yeik Thar Street,16/4 Quarter, Thingangyun Township,Yangon, Myanmar</a></p>
                    <div class="d-md-flex align-items-center">
                        <div class="border-right pr-2 mr-2">
                            <a href="tel:+959263462227" target="_blank" >09-2634-62227</a>
                        </div>
                        <div>
                            <a href="mailto:info@myanmarwebcreator.com" target="_blank">info@myanmarwebcreator.com</a>
                        </div>
                    </div>
               </div>
               <div class="mt-md-4 mt-5">
                    <h4 class="text-white">Our Social</h4>
                    <div class="soicals">
                        <a href="http://"><i class="icofont-facebook"></i></a>
                        <a href="http://"><i class="icofont-brand-viber"></i></a>
                    </div>
               </div>
            </div>
            <div class="col-4 d-lg-block d-none">
                <img src="<?php echo PJ_ASSETS_URI; ?>/img/mwc.png" style="max-width: 250px;" class="d-block mx-auto">
            </div>
        </div>

        <div id="copyright" class="content d-md-flex border-top pt-3">
            <a href="http://" class="d-block">Privacy and Policy</a>
            <a href="/" class="ml-auto d-block" target="_blank">&copy; 2019 - <?php echo date("Y"); ?> Myanmar Web Creator</a></a> 
        </div>
    </div>
</footer>

<!-- Libaray Links -->
<script src="<?php echo PJ_ASSETS_URI; ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/jquery.mobile.custom.min.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/mega-site-navigation-master.js"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo PJ_VENDORS_URI; ?>/slick/slick.min.js"></script>
<script src="<?php echo PJ_VENDORS_URI; ?>/modal-box/js/ap-fullscreen-modal.min.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/picker.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/picker.date.js"></script>
<script src="<?php echo PJ_ASSETS_URI; ?>/js/picker.time.js"></script>

<!-- Script -->
<script src="<?php echo PJ_ASSETS_URI; ?>/js/custom.js"></script>


</body>
</html>

