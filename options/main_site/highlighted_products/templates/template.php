<div class="container-fluid pb-3 background-zoo">
    <div class="row pt-5 pb-5 justify-content-evenly">
        <div class="col-11 col-lg-3 text-center">
            <h4 class="fs-40 fw-600 ff-Merriweather fc-dark ls-10"><?= __($data_h[0], 'nin_zoo');?></h4>
        </div>
        <div class="col-11 col-lg-3 text-center">
            <h4 class="fs-40 fw-600 ff-Merriweather fc-dark ls-10"><?= __($data_h[1], 'nin_zoo');?></h4>
        </div>
        <div class="col-11 col-lg-3 text-center">
            <h4 class="fs-40 fw-600 ff-Merriweather fc-dark ls-10"><?= __($data_h[2], 'nin_zoo');?></h4>
        </div>
    </div>

    <div class="row p-5-zoo justify-content-evenly">
        <?php do_action('highlighted_products_user');?>

        
    </div>

</div>