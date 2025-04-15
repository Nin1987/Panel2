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
                        <span class="title-site">Utwórz ofertę dla klienta</span>
                    </div>

                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col ps-0">
                        <span class="small-title-site">
                            Dane klienta
                        </span>
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2  bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2 me-5">
                        <input type="text" class="panel-input" placeholder="Imię">
                    </div>
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Nazwisko">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Nazwa firmy (opcjonalnie)">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <label for="country" class="me-5">Kraj: </label>
                        <select class="panel-input" id="country">
                            <option>Polska</option>
                            <option>Niemcy</option>
                            <option>Francja</option>
                            <option>Belgia</option>
                            <option>Anglia</option>
                        </select>
                       
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Ulica">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2 me-5">
                        <input type="text" class="panel-input" placeholder="Kod pocztowy">
                    </div>
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Miasto">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Nip (opcjonalnie)">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Numer telefonu">
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Adres e-mail">
                    </div>
                </div>

                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col ps-0 pb-3 pt-2">
                        <span class="small-title-site">
                            Produkty
                        </span>
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
                    <div class="col bottom-silver-border pb-3">
                        <span >Ilość</span>
                    </div>
                </div>
                <div id="product_list">

                </div>
                <div class="row bc-color2 p-4 pt-2 pb-2">
                    <div class="col text-center">
                        <div class="spinner-border text-warning m-auto text-center" role="status" id="spinner" style="display: none;">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>

                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col-2 bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" id="catalog_number" placeholder="Numer katalogowy">
                    </div>
                    <div class="col-2">
                        <button class="button-circle button-white mt-3" onclick="add_new_product();">Dodaj produkt</button>
                    </div>
                    <div class="col-2">
                        <button class="mt-3 index-product">Index produktów</button>
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col ps-0 pb-3 pt-2">
                        <span class="small-title-site">
                            Generator rabatu
                        </span>
                    </div>
                </div>

                <div class="row table-title ps-4 pe-4 bc-color2">
                    <div class="col  pb-3">
                        <span >Rabat dla klienta</span>
                    </div>
                    <div class="col  pb-3">
                        <span >Cena katalogowa</span>
                    </div>
                    <div class="col  pb-3">
                        <span >Cena dla klienta</span>
                    </div>
                    <div class="col  pb-3">
                        <span >Twój zysk</span>
                    </div>
                </div>
                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <input type="hidden" id="total_price_hidden" value = 0>
                        <input type="number" max="25" min="0" id="prce_precent" class="panel-input  sub-title" placeholder="0"> <span class="sub-title">%</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span id="total_price">0 zł</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span id="curent_price">0 zł</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span class="fc-color5" id="you_salary">0 zł</span>
                    </div>
                </div>
                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col ps-0 pt-5 pb-5">
                        <button href="" class="button-circle button-orange">Utwórz ofertę</button>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</main>

<script>
        jQuery(document).ready(function($) {
            $('#prce_precent').change( function()
            {
                let precent_price = document.getElementById('prce_precent');
                let total_price = document.getElementById('total_price');
                let curent_price = document.getElementById('curent_price');
                let you_salary = document.getElementById('you_salary');
                let int_total = 0;
                let int_curent = 0;
                let int_curent_price = 0;
                let my_salary = 0;


                let quantity_product = document.getElementsByName('quantity_product');
                let price_product = document.getElementsByName('price_product');
                
                if(quantity_product)
                {
                    for(let i=0; i < quantity_product.length; i++)
                    {
                        int_total += quantity_product[i].value*price_product[i].value;
                    }
                    int_curent = int_total - (precent_price.value/100*int_total);
                    int_curent_price = int_total-int_curent;
                    my_salary = 0.25*int_total - (precent_price.value/100*int_total);

                
                    total_price.innerHTML = int_total+ " zł";
                    curent_price.innerHTML = Number(Math.round(int_curent + 'e+2')+ 'e-2')+ " zł";
                    you_salary.innerHTML = Number(Math.round(my_salary + 'e+2')+ 'e-2')+ " zł";
                    
                }

            });
        });
    function add_new_product()
    {
        let catalog_number = document.getElementById('catalog_number');
        let spinner = document.getElementById('spinner');
        
        if(catalog_number.value != '')
        {
            const cookieValue = document.cookie
                .split("; ")
                .find((row) => row.startsWith("auth_key="))
                ?.split("=")[1];
           
            let form_data = new FormData();
                form_data.append("method", "get_product");
                form_data.append("user_id", "<?=wp_get_current_user()->ID;?>");
                form_data.append("api_key", `${cookieValue}`);
                form_data.append("ip", "<?=IP_USER;?>");
                form_data.append("product_id", catalog_number.value);
                
                spinner.style.display="block";
            let product_id = document.getElementsByName('product_id');

            $.ajax({
                url: 'https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel',
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data:form_data,

                success: function(response) {
                        let json = JSON.parse(response);

                        if(json[0]['error'] == 0)
                        {
                            let lista = document.getElementById('product_list');
                            let stop = false;

                         if(product_id.length > 0)
                         {
                            for(let a = 0; a < product_id.length; a++)
                            {
                                if(product_id[a].value == json[0]["message"][0]["special_id"])
                                {
                                    stop = true;
                                }
                            }
                         }
                         if(!stop)
                         {
                            for(let i =0; i < json[0]['message'].length; i++)
                            {
                                
                                let html = '<div class="row table-rows ps-4 pe-4 bc-color2">'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<img src="'+json[0]["message"][i]["photo"]+'" class="w-100"/>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json[0]["message"][i]["product_name"]+'</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json[0]["message"][i]["price"]+' zł</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >Pobierz</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >Pobierz</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json[0]["message"][i]["special_id"]+'</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                        '<input type="number" class="panel-input" min="0" max="'+json[0]["message"][i]["max"]+'" value="1" name="quantity_product">'+
                                        '<input type="hidden" name="price_product" value="'+json[0]["message"][i]["price"]+'">'+
                                        '<input type="hidden" name="product_id" value="'+json[0]["message"][i]["special_id"]+'">'+
                                    '</div>'+
                                '</div>';
                                lista.insertAdjacentHTML('beforeend', html);
                            }
                         }

                        }
                        spinner.style.display="none";
                }
            });
        }
    }
</script>
<?php get_footer();?>