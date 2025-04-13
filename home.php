<?php
    if(is_user_logged_in())
    {
        header("Location: ".SITE."/panel/portfel");
    }
?>
<?php get_header();?>
<main class="bc-color1">
    <div class="row">
        <div class="col p-5">
        <?php 
            do_action("my_login_form");
            ?>
        </div>
    </div>
<?=$_COOKIE['auth_key'];?>

</main>
<?php get_footer();?>