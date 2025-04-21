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
                    <div class="col">
                        <span class="title-site">Utwórz ofertę dla istniejącego klienta</span>
                    </div>

                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col ps-0">
                        <span class="small-title-site">
                            Dane klienta
                        </span>
                    </div>
                </div>
                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" id="customer_email" placeholder="Adres e-mail">
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
                        <input type="number" max="20" min="0" id="prce_precent" class="panel-input  sub-title" placeholder="0"> <span class="sub-title">%</span>
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
                        <button onclick="make_offer();" class="button-circle button-orange">Utwórz ofertę</button>
                    </div>
                    <div class="col ps-0 pt-5 pb-5" id="pdf_button" style="display: block;">
                        <form action="/akamit/panel/oferty/pdf/" method="post">
                            <input type="submit"  value ="Pobierz pdf" class="button-circle button-orange" />
                        </form>
                        
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</main>
<div class="container-fluid position-fixed top-0 start-0" style="background-color:#000000b8; width:100vw; height:100vh; display:none;" id="push_message">
    <div class="row  h-100">
        <div class="col  h-100">
            <div class="m-auto  h-100 d-flex align-items-center">
                <div class="m-auto table-title p-4 bc-color2 text-center">
                    <p>
                        <span id="push_title" class="fc-color6">w</span>
                    </p>
                    <p>
                        <span id="push_tmessage" class="fc-color6">w</span>
                    </p>
                    <p>
                        <button onclick="close_push();" class="button-circle button-orange">Zamknij</button>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    function close_push()
    {
        document.getElementById('push_message').style.display="none";
    }


        jQuery(document).ready(function($) {
            $('#prce_precent').change( function()
            {
                let precent_price = document.getElementById('prce_precent');
                let total_price = document.getElementById('total_price');
                let curent_price = document.getElementById('curent_price');
                let total_price_hidden = document.getElementById('total_price_hidden');
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
                    my_salary = 0.20*int_total - (precent_price.value/100*int_total);

                    total_price_hidden.value = int_total;
                    total_price.innerHTML = int_total+ " zł";
                    curent_price.innerHTML = Number(Math.round(int_curent + 'e+2')+ 'e-2')+ " zł";
                    you_salary.innerHTML = Number(Math.round(my_salary + 'e+2')+ 'e-2')+ " zł";
                    
                }

            });
        });

        function add_offer_to_your_list(curent_id, curent_name, curent_address, curent_email, curent_price, salary, code_number)
        {
            $.ajax({
                url: '/panel/wp-json/panel/v1/api/',
                type: 'POST',
                cache: false,
                contentType: 'application/json',
                data: JSON.stringify({
                    method: 'add_new_offer',
                    token: 'AboaijSAID89dD8DUhiDHS7a23ibBAIUbd787',
                    curent_id: curent_id,
                    curent_name: curent_name,
                    curent_address: curent_address,
                    curent_email: curent_email,
                    curent_price: curent_price,
                    salary: salary,
                    code_number: code_number,
                    user_id: "<?=wp_get_current_user()->ID;?>"

                }),
                success: function(response) {
                    console.log("asd");
                        let json = (response);
                        console.log(json);
                        if(json.error == 0)
                        {
                            return json.message;
                        }
                        else
                        {
                            return json.message;
                        }
                }
            });
           
        }
    function make_offer()
    {

        let customer_email = document.getElementById('customer_email');
        let prce_precent = document.getElementById('prce_precent');
        let total_price = document.getElementById('total_price_hidden');

        let product_id = document.getElementsByName('product_id');
        let price_product = document.getElementsByName('price_product');
        let quantity_product = document.getElementsByName('quantity_product');

        let push_up = document.getElementById('push_message');

        let res;
        if(customer_email.value != '')
        {
            if(product_id.length > 0)
            {
                let products = [];
                for(let i =0; i < product_id.length; i++)
                {
                    products[i]={product_id: product_id[i].value,
                                quantity: quantity_product[i].value};
                }
                
                res = {
                    customer_email:customer_email.value,
                    products: products,
                    rabat : prce_precent.value,
                    user_id: <?=wp_get_current_user()->ID;?>

                }
                
                const cookieValue = document.cookie
                .split("; ")
                .find((row) => row.startsWith("auth_key="))
                ?.split("=")[1];
                
                document.getElementById('push_tmessage').innerHTML="";
            $.ajax({
                url: 'https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel',
                type: 'POST',
                cache: false,
                contentType: 'application/json',
                data: JSON.stringify({
                    method: 'add_old_customer',
                    api_key: `${cookieValue}`,
                    ip: "<?=IP_USER;?>",
                    user_id: "<?=wp_get_current_user()->ID;?>",
                    min: total_price.value,
                    cart: res
                }),

                success: function(response) {
                        let json = (response);
                        
                        if(json.error == 0)
                        {
                            document.getElementById('push_title').innerHTML="Oferta dodana";
                            add_offer_to_your_list(json.customer_id, json.customer_name, json.customer_adress, customer_email.value, document.getElementById('curent_price').innerHTML, document.getElementById('you_salary').innerHTML, json.cupon);
                            document.getElementById("pdf_button").style.display="block";
                        }
                        else
                        {
                            document.getElementById('push_title').innerHTML="Wystąpił błąd";
                        }
                        document.getElementById('push_tmessage').innerHTML+=json.message;
                        push_up.style.display="block";
                }
            });
            }
            else
            {
                document.getElementById('push_title').innerHTML="Wystąpił błąd";
                document.getElementById('push_tmessage').innerHTML="Nie dodano żadnych produktów do oferty";
                push_up.style.display="block";
            }
        }
        else
            {
                document.getElementById('push_title').innerHTML="Wystąpił błąd";
                document.getElementById('push_tmessage').innerHTML="Uzupełnij wymagane pola";
                push_up.style.display="block";
            }

    }
    function add_new_product()
    {
        let catalog_number = document.getElementById('catalog_number');
        let spinner = document.getElementById('spinner');
        let push_up = document.getElementById('push_message');
        
        if(catalog_number.value != '')
        {
            const cookieValue = document.cookie
                .split("; ")
                .find((row) => row.startsWith("auth_key="))
                ?.split("=")[1];
                
                spinner.style.display="block";
            let product_id = document.getElementsByName('product_id');

            $.ajax({
                url: 'https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel',
                type: 'POST',
                cache: false,
                contentType: 'application/json',
                data: JSON.stringify({
                method: 'get_product',
                api_key: `${cookieValue}`,
                ip: "<?=IP_USER;?>",
                user_id: "<?=wp_get_current_user()->ID;?>",
                product_id: catalog_number.value
    }),

                success: function(response) {
                        let json = (response);

                        if(json.error == 0)
                        {
                            let lista = document.getElementById('product_list');
                            let stop = false;

                         if(product_id.length > 0)
                         {
                            for(let a = 0; a < product_id.length; a++)
                            {
                                if(product_id[a].value == json.message[0]["special_id"])
                                {
                                    stop = true;
                                }
                            }
                         }
                         if(!stop)
                         {
                            for(let i =0; i < json.message.length; i++)
                            {
                                
                                let html = '<div class="row table-rows ps-4 pe-4 bc-color2">'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<img src="'+json.message[i]["photo"]+'" class="w-100"/>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json.message[i]["product_name"]+'</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json.message[i]["price"]+' zł</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >Pobierz</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >Pobierz</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                    '<span >'+json.message[i]["special_id"]+'</span>'+
                                    '</div>'+
                                    '<div class="col bottom-silver-border pb-3 pt-3">'+
                                        '<input type="number" class="panel-input" min="0" max="'+json.message[i]["max"]+'" value="1" name="quantity_product">'+
                                        '<input type="hidden" name="price_product" value="'+json.message[i]["price"]+'">'+
                                        '<input type="hidden" name="product_id" value="'+json.message[i]["special_id"]+'">'+
                                    '</div>'+
                                '</div>';
                                lista.insertAdjacentHTML('beforeend', html);
                            }
                         }
                        }
                        else
                        {
                            document.getElementById('push_title').innerHTML="Wystąpił błąd";
                            document.getElementById('push_tmessage').innerHTML=json.message;

                            push_up.style.display="block";
                        }
                        spinner.style.display="none";
                }
            });
        }
    }
</script>
<?php get_footer();?>