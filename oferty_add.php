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
                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3">
                        <span >Sor Light 200</span>
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
                    <div class="col bottom-silver-border pb-3">
                        <span >1</span>
                    </div>
                </div>
                <div class="row table-rows ps-4 pe-4 bc-color2 ">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/background/obraz.png" />
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Sor Light 200</span>
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
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >1</span>
                    </div>
                </div>

                <div class="row table-title p-4 pt-2 pb-2 bc-color2">
                    <div class="col-2 bottom-orange-border ps-0 pb-3 pt-2">
                        <input type="text" class="panel-input" placeholder="Numer katalogowy">
                    </div>
                    <div class="col-2">
                        <button href="" class="button-circle button-white mt-3">Dodaj produkt</button>
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
                        <input type="number" max="25" min="0" class="panel-input  sub-title" placeholder="0"> <span class="sub-title">%</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span >5 000 zł</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span >4 750 zł</span>
                    </div>
                    <div class="col sub-title pb-3 pt-3 bottom-silver-border">
                        <span class="fc-color5">750 zł</span>
                    </div>
                </div>
                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col ps-0 pb-3 pt-5 pb-5">
                        <button href="" class="button-circle button-orange">Utwórz ofertę</button>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</main>
<?php get_footer();?>