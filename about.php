<?php 
    require_once("libs/config.php");

    $pageData->title = "MWC အကြောင်း";
    include("header.php");
?>
        
    <section class="banner-section sub-banner bg-light-blue">
        <div class="bg-img" style="background-image: url(<?php echo PJ_ASSETS_URI; ?>/img/shapes.png)">

           <div class="container">
                <div class="row align-items-center standard-padding-semi-bottom">
                    <div class="col-md-6 my-md-0 my-3">
                        <h2>Who We Are</h2>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo PJ_ASSETS_URI; ?>/img/app.png" alt="web development services">
                    </div>
                </div>
           </div>

        </div>   
    </section>

    <section class="container standard-padding">
        <div class="row align-items-center">



            <div class="col-md-7 my-md-0 my-3 order-md-2 mb-md-0 mb-5">
                            <div class="sub-heading mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1429 713" width="90" height="45">
                                        <path id="Layer" class="shp0" d="M999.3 0.91C1139.35 0.91 1279.4 0.94 1419.44 1C1422.61 1 1425.77 2.49 1428.93 3.28C1426.82 6.01 1424.4 8.56 1422.63 11.5C1283.74 242.17 1144.89 472.83 1006.09 703.5C1004.31 706.5 1003.09 709.8 1001.68 712.96L572.05 712.96C573.94 709.51 575.7 705.96 577.73 702.63C703.01 494.55 828.29 286.45 953.58 78.34C969 52.66 984.08 26.72 999.3 0.91Z" />
                                        <path id="Layer" class="shp0" d="M427.26 0.91L856.89 0.91C855 4.36 853.25 7.91 851.22 11.24C723.7 223.08 596.18 434.92 468.66 646.75C455.44 668.75 442.66 690.91 429.66 713C289.58 713 149.51 712.97 9.46 712.9C6.31 712.9 3.15 711.42 0 710.63C2.12 707.9 4.54 705.35 6.31 702.41C145.2 471.74 284.04 241.08 422.85 10.41C424.63 7.41 425.8 4.07 427.26 0.91Z" />
                                    </svg>
                                    <h2>Myanmar Web Creator<br><span>အကြောင်း</span></h2>
                            </div>
                            <div class="content">
                                <p>MWC is a web and mobile application development company offering services in website design, development, hosting, marketing, maintenance, and analysis.  We have ventured into the web service industry to offer superior and unique services to busi¬nesses and institutions. Our experience and expertise in web sales, application development and e-commerce give us a backing to provide solutions that are currently lacking in the market.</p>
                                <p>There is an all-time high demand for web development and marketing for small businesses with signs of rising further. Interestingly, few web developers have taken advantage of this opportuni¬ty, leaving the industry with no dominant participants. </p>
                            </div>
            </div>


            <div class="col-md-5 order-md-1">
                <div class="row no-gutters border">
                    <div class="col-6 speciality-box text-center p-4 border-right border-bottom">
                        <i class="bi bi-people i-lg"></i>
                        <h4 class="m-0">533+</h4>
                        <span>Satisfied Customers</span>
                    </div>
                    <div class="col-6 speciality-box text-center p-4 border-bottom">
                        <i class="bi bi-award i-lg"></i>
                        <h4 class="m-0">
                        <?php echo date("Y") - 2019; ?>+
                        </h4>
                        <span>Years Of Experience</span>
                    </div>
                    <div class="col-6 speciality-box text-center p-4 border-right">
                        <i class="bi-check-circle i-lg"></i>
                        <h4 class="m-0">1200+</h4>
                        <span>Projects Completed</span>
                    </div>
                    <div class="col-6 speciality-box text-center p-4">
                        <i class="bi bi-cloud-arrow-up i-lg"></i>
                        <h4 class="m-0">20+</h4>
                        <span>Websites Launched</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    
<?php include("footer.php"); ?>