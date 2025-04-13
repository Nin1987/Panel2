<?php
    if(!is_user_logged_in())
    {
        header("Location: ".SITE."/");
    }
?>
<?php get_header();?>
<?php $user = wp_get_current_user();

        $user_name=$user->display_name;
?>
<main class="bc-color1">
    <div class="container-fluid">
        <div class="row p-5 pb-2">
            <div class="col link-story">
                <?php include('url_address.php');?>
            </div>
        </div>
        <div class="row p-5 pt-3">
            <div class="col panel-hr">
                Cześć, <?=$user_name;?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row p-5 pt-3">
            <div class="col-2">
                <?php include("template/menu/menu.php");?>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col radius-20 bc-color5 m-auto p-3 pt-5 h-100 me-3">
                        <span class="squar-price ">5,000 zł</span>
                        <span class="squar-text d-block mt-squar ">Aktualna kwota ze sprzedaży</span>
                        <span class="squar-text d-block">6 ofert</span>
                    </div>
                    <div class="col radius-20 bc-color2 m-auto p-3 pt-5 h-100  me-3">
                        <span class="squar-price">2,300 zł</span>
                        <span class="squar-text d-block mt-squar ">Otwarte oferty</span>
                        <span class="squar-text d-block">2 ofert</span>
                    </div>
                    <div class="col radius-20 bc-color2 m-auto p-3 pt-5 h-100  me-3">
                        <span class="squar-price">7,300 zł</span>
                        <span class="squar-text d-block mt-squar ">Przewidywana kwota</span>
                        <span class="squar-text d-block">6 ofert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 

get_footer();?>