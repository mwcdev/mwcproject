    <!-- Booking Modal Box -->

    <div style="display: block;">
        <div id="modal-booking" class="bg-img modal-content h-100">
            <div class="h-100">

                <div class="row no-gutters align-items-start" style="height: 100vh;">
                    <div class="col-md-8 h-100 bg-img" style="background:url(<?php echo PJ_ASSETS_URI; ?>/img/welcome.JPG)"></div>
                    <div class="col-md-4">
                        <div class="p-5">
                            <h2 class="mb-3">အခုဘဲ</br>Appointment ရယူလိုက်ပါ။</h2>
                            <form action="">
                                <div class="form-group">
                                   <label>Name</label>
                                   <input type="text" name="client-name" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Company Name</label>
                                   <input type="text" name="company-name" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Email Address</label>
                                   <input type="email" name="email-address" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Phone Number</label>
                                   <input type="tel" name="phone-number" class="form-control">
                               </div>
                               <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" name="company-name" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text" name="company-name" class="form-control timepicker">
                                        </div>
                                    </div>
                               </div>
                               <button class="btn btn-primary my-3 mr-3 w-100">Book Now</button>
                               <small class=" d-block">ရန်ကုန်မြို့တွင်းမှ အပ အခြားေနရာများသို့ လူကိုယ်တိုင်လာေရာက်  ေတွဆုံေပးနိုင်မည်မဟုတ်ဘဲ Zoom မှတဆင့် သာ ေဆွးေနွးေပးသွားမှာဖြစ်ပါတယ်။</small>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


<section class="container mockup-call standard-padding-semi-top mt-5 position-relative d-lg-block d-none">
        <div class="row bg-light-blue shadow-sm">
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
                    <li><a href="http://">Branding</a></li>
                    <li><a href="http://">Web Design & Development</a></li>
                    <li><a href="http://">Digital Marketing</a></li>
                    <li><a href="http://">Application Development</a></li>
                    <li><a href="http://">Logo & Graphic Design</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-8">
               <div class="content">
                    <p><a href="http://">No.624, Gantgaw Yeik Thar Street,16/4 Quarter, Thingangyun Township,Yangon, Myanmar</a></p>
                    <div class="d-flex align-items-center">
                        <div class="border-right pr-2 mr-2"><a href="http://">+959 758 082007</a></div>
                        <div><a href="http://">info@myanmarwebcreator.com</a></div>
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

