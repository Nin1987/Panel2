<div class="text-center mb-5 w-100">
    <a href="<?=$product['link'];?>">
        <img src="<?=$product['photo'];?>" class="m-auto main_site_img"/>
        <h2 class="fs-16 fw-300 ff-montserrat text-start fc-dark mt-3">
            <?=$product['name'];?>
        </h2>
    </a>
    <div class="d-flex mt-3 d-block-mobile">
    <div class="d-block-inline d-block-mobile fs-32 fw-600 ff-montserrat text-start fc-light-green me-5"><?=number_format($product['price'], 2, ',', ' ');?> zł</div> 
                
        <a href="?add-to-cart=<?=$product['id'];?>" 
        aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?=$product['id'];?>" 
        data-quantity="1" 
        class="button-light-blue fs-20 pe-4  ps-3 d-block-mobile" 
        data-product_id="<?=$product['id'];?>" 
        aria-label="Dodaj do koszyka: <?=$product['name'];?>"
        rel="nofollow"
        data-success_message="<?=$product['name'];?> został dodany do twojego koszyka">
        <span class="fb-cart-add fb-cart"></span> Dodaj</a>
    </div>
</div>