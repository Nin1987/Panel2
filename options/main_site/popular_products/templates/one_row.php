<div class="col-11 col-lg-3 text-center me-3">
    <a href="<?=$product['link'];?>">
        <img src="<?=$product['photo'];?>" class="m-auto main_site_img"/>
        <h2 class="fs-16 fw-300 ff-montserrat text-start fc-dark mt-3">
            <?=$product['name'];?>
        </h2>
    </a>
    <div class="d-flex mt-3 d-block-mobile">
        <div class="d-block-inline fs-32 fw-600 ff-montserrat text-start fc-light-green me-5"><?=number_format($product['price'], 2, ',', ' ');?> zł</div> 
                
        <a href="?add-to-cart=<?=$product['id'];?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?=$product['id'];?>" data-quantity="1" class="button-light-blue fs-20 pe-4 d-block-mobile ps-3" data-product_id="<?=$product['id'];?>" rel="nofollow"><span class="fb-cart-add fb-cart"></span> Dodaj</a>
        <span id="woocommerce_loop_add_to_cart_link_describedby_<?=$product['id'];?>" class="screen-reader-text">
			</span>
    </div>
</div>