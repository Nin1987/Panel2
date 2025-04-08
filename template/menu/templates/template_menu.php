<nav class="container-fluid">
    <div class="row pt-3 pb-3">
        <div class="col-12 col-lg-6  text-end text-left-mobile ff-montserrat fw-600 fs-15 ">
            
            <div class="w-auto text-start m-contact-menu">
            <a href="tel:+48501962180" class="fc-blue me-5 "><span class="fb-phone"></span> 501 962 180</a> 
            <a href="mailto:kontakt@merdumerdu.pl" class="fc-blue me-5 d-block-mobile"><span class="fb-phone fb-mail"></span> kontakt@merdumerdu.pl</a>
            
            </div>

        </div>
        <div class="col-12 col-lg-6  text-end ">
            <a href="https://www.facebook.com/merdumerdu.zwierzaki" target="_blank" class="fc-blue me-3 "><span class="fb-phone fb-facebook"></span></a> 
            <a href="/moje-konto/" class="fc-blue me-3 "><span class="fb-phone fb-person"></span></a> 
            <a href="#" class="fc-blue me-5"><span class="fb-phone fb-heart"></span></a>
        </div>
    </div>
    <div class="row bc-dark ">
        
        <div class="col-12 col-lg-2"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/logo/logomerdu.webp" alt="logo" style="max-height:80px;"/></a></div>
        <div class="col-6 d-block d-lg-none pt-3 pb-3">
            <ul class="nav-menu ff-montserrat fw-600 fs-16 m-auto">
                <li>
                    <a href="/koszyk" class="fc-white"><span class="fb-phone fb-cart"></span>  Koszyk<div></div></a>
                </li>
            </ul>
        </div>
        <div class="col-6 d-block d-lg-none text-end pt-3 pb-3"><button id="menu-button" class="button_uninsert"><span class="nav-hamburger"></span></button></div> 
        <div class="col-12 col-lg-8 text-center pt-3 pb-3">
            <ul id="nav-list" class="nav-menu w-100 bc-dark ff-montserrat fw-600 fs-16 m-auto mobil-menu mobil-invisible ">
                <?php do_action("menu_rows_nin");?>

            </ul>
        </div>
        <div class="col-lg-2 d-none d-lg-block pt-3 pb-3">
            <ul class="nav-menu ff-montserrat fw-600 fs-16 m-auto">
                <li>
                    <a href="/koszyk" class="fc-white"><span class="fb-phone fb-cart"></span>  Koszyk<div></div></a>
                </li>
            </ul>
        </div>
        
    </div>

</nav>