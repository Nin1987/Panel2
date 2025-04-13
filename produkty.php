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
                    <div class="col-3">
                        <span class="title-site">Lista produktów</span>
                    </div>
                    <div class="col">
                        <button href="" class="button-circle button-orange">Pobierz katalog firmowy</button>
                    </div>
                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col bottom-silver-border pb-3">
                        <span >Miniaturka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Nazwa</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Artysta</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Cena</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Karta techniczna</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Katalog</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Numer katalogowy</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Jan Kowalski</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Pobierz</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >X765PRO2</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script>
    jQuery(document).ready(function($) {
        const cookieValue = document.cookie
                .split("; ")
                .find((row) => row.startsWith("auth_key="))
                ?.split("=")[1];

        let form_data = new FormData();
            form_data.append("method", "get_product");
            form_data.append("user_id", "<?=wp_get_current_user()->ID;?>");
            form_data.append("api_key", `${cookieValue}`);
            form_data.append("ip", "<?=IP_USER;?>");


        $.ajax({
            url: 'http://localhost/sklep/wp-json/pro_api/v1/panel',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data:form_data,

            success: function(response) {
                    console.log(JSON.parse(response));
            }
        });
        
    });
</script>
<?php get_footer();?>