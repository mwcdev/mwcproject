<?php 

    $assets_uri = PJ_ASSETS_URI;

    
    return "
    <section class='banner-section sub-banner bg-light-blue'>
        <div class='bg-img' style='background-image: url($assets_uri/img/shapes.png)'>
            <div class='container'>
                    <div class='row align-items-center standard-padding-semi-bottom'>
                        <div class='col-md-6 my-md-0 my-3'>
                            <h1>$data->title</h1>
                            <div class='content'>
                                <p>$data->banner_desc</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <img src='/img/webmail2.png' alt='>
                        </div>
                    </div>
            </div>
        </div>   
    </section>";

?>