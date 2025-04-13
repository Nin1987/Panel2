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
                        <span class="title-site">Lista ofert</span>
                    </div>
                    <div class="col">
                        <a href="<?=SITE;?>/panel/oferty/add" class="button-circle button-orange">Utwórz ofertę</a>
                    </div>
                </div>
                <div class="row table-title mt-4 p-4 bc-color2">
                    <div class="col-2">
                        <button href="" class="button-circle button-white ">Wszystkie</button>
                    </div>
                    <div class="col-2">
                        <button href="" class="button-circle button-white ">Otwarte</button>
                    </div>
                    <div class="col-2">
                        <button href="" class="button-circle button-white ">Zamknięte</button>
                    </div>
                    <div class="col-2">
                        <button href="" class="button-circle button-white ">Usunięte</button>
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

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Natalia Bogucka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >ul. Warszawska 1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >janekkowalski@arhcitekci.pl</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >20 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >XH7656</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Otwarte</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >kosz</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >2</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Natalia Bogucka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >ul. Warszawska 1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >janekkowalski@arhcitekci.pl</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >20 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >XH7656</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Otwarte</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >kosz</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >3</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Natalia Bogucka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >ul. Warszawska 1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >janekkowalski@arhcitekci.pl</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >20 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >XH7656</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Otwarte</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >kosz</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Natalia Bogucka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >ul. Warszawska 1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >janekkowalski@arhcitekci.pl</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >20 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >XH7656</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Otwarte</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >kosz</span>
                    </div>
                </div>

                <div class="row table-rows ps-4 pe-4 bc-color2">
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >5</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Natalia Bogucka</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >ul. Warszawska 1</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >janekkowalski@arhcitekci.pl</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >20 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >4 000 zł</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >XH7656</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >Otwarte</span>
                    </div>
                    <div class="col bottom-silver-border pb-3 pt-3">
                        <span >kosz</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>
<?php get_footer();?>