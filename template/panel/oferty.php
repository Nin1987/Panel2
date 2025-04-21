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
                <?php include(get_template_directory()."/template/menu/menu.php");?>
            </div>
            <div class="col-10">
                
                <div class="row">
                    <div class="col-3">
                        <span class="title-site">Lista ofert</span>
                    </div>
                    <div class="col">
                        <a href="<?=SITE;?>/panel/oferty/add" class="button-circle button-orange">Utwórz ofertę (nowy klient)</a>
                    </div>
                    <div class="col">
                        <a href="<?=SITE;?>/panel/oferty/addnew" class="button-circle button-orange">Utwórz ofertę (klient istniejący)</a>
                    </div>
                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col-2">
                        <button onclick="filtr(1);" class="button-circle button-white ">Wszystkie</button>
                    </div>
                    <div class="col-2">
                        <button onclick="filtr(2);" class="button-circle button-white ">Otwarte</button>
                    </div>
                    <div class="col-2">
                        <button onclick="filtr(3);" class="button-circle button-white ">Zamknięte</button>
                    </div>
                    <div class="col-2">
                        <button onclick="filtr(4);" class="button-circle button-white ">Usunięte</button>
                    </div>
                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col bottom-silver-border pb-3">
                        <span >Lp</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Nazwa klienta</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Adres</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Adres e-mail</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Cena dla klienta</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Prowizja- Zysk</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Oferta</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Status</span>
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Usuń</span>
                    </div>
                </div>
                <div class="row bc-color2 p-4 pt-2 pb-2">
                    <div class="col text-center">
                        <div class="spinner-border text-warning m-auto text-center" role="status" id="spinner" style="display: none;">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>
                <div id="offerts_list">
                    <?php
                        $Oferty = new Oferty();
                        $Oferty->get_my_offers();
                    ?>
                </div>


            </div>
        </div>
    </div>

</main>
<script>
    function row(offerts_list, value, lp)
    {
        let status = 'Niezidentyfikowany';
        switch (value["status"]) {
            case 2:
                status = 'Otwarta';
                break;
            case 3:
                status = 'Zamknięta';
                break;
            case 4:
                status = 'Usunięta';
                break;
        }
        let code = value['code_number'];
        let html ='<div class="row table-rows ps-4 pe-4 bc-color2">';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+lp+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["curent_name"]+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["curent_address"]+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["curent_email"]+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["curent_price"]+' zł</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["salary"]+' zł</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span >'+value["code_number"]+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span id="status_'+code+'">'+status+'</span>';
        html +='</div>';
        html +='<div class="col bottom-silver-border pb-3 pt-3">';
        html +='<span ><button onclick="delete_offer(\''+code+'\');" class="button-circle button-white ">Kosz</button></span>';
        html +='</div>';
        html +='</div>';
        offerts_list.innerHTML+=html;

    }
    function delete_offer(t)
    {
        const cookieValue = document.cookie
                .split("; ")
                .find((row) => row.startsWith("auth_key="))
                ?.split("=")[1];
        let user_id= "<?=wp_get_current_user()->ID;?>";
                
            $.ajax({
                url: 'https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel',
                type: 'POST',
                cache: false,
                contentType: 'application/json',
                data: JSON.stringify({
                    method: 'delete_cupon',
                    api_key: `${cookieValue}`,
                    ip: "<?=IP_USER;?>",
                    user_id: user_id,
                    cupon: t
                }),

                success: function(response) {
                        let json = (response);
                       console.log(json);
                        if(json.error == 0)
                        {
                            if(json.message)
                            {
                                $.ajax({
                                url: '/panel/wp-json/panel/v1/api/',
                                type: 'POST',
                                cache: false,
                                contentType: 'application/json',
                                data: JSON.stringify({
                                    method: 'delete_cupon',
                                    token: 'AboaijSAID89dD8DUhiDHS7a23ibBAIUbd787',
                                    cupon: t,
                                    user_id: user_id

                                }),
                                success: function(response1) {

                                        let json1 = (response1);
                                        console.log(json1);
                                        
                                   
                                    }
                                });
                            }
                        }
                    }
                });
    }
    function filtr(t)
    {
        let offerts_list = document.getElementById('offerts_list');
        let spinner = document.getElementById('spinner');
            offerts_list.innerHTML='';
            spinner.style.display="block";

        $.ajax({
                url: '/panel/wp-json/panel/v1/api/',
                type: 'POST',
                cache: false,
                contentType: 'application/json',
                data: JSON.stringify({
                    method: 'get_offer_list',
                    token: 'AboaijSAID89dD8DUhiDHS7a23ibBAIUbd787',
                    filtr_type: t,
                    user_id: "<?=wp_get_current_user()->ID;?>"

                }),
                success: function(response) {

                        let json = (response);
                        console.log(json);
                        
                        if(json.error == 0)
                        {
                            if(json.message.length > 0)
                            {
                                for(let i = 0; i< json.message.length; i++)
                                {
                                    row(offerts_list, json.message[i], i+1);
                                }
                            }

                        }
                        spinner.style.display="none";
                }
            });
    }
</script>
<?php get_footer();?>