<?php
    if(!is_user_logged_in())
    {
        header("Location: ".SITE."/");
    }
?>
<?php get_header();?>
<main class="bc-color1">
    <div class="container-fluid">
        <div class="row p-5 pb-2">
            <div class="col link-story">
                <?php include('url_address.php');?>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row p-5 pt-5">
            <div class="col-2">
                <?php include("template/menu/menu.php");?>
            </div>
            <div class="col-10">
                
                <div class="row">
                    <div class="col">
                        <span class="title-site">Umowa współpracy</span>
                    </div>
                    <div class="col">
                        <button href="" class="button-circle button-orange">Pobierz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer();?>