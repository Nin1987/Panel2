<ul class="scoria-menu link-menu">
    <li id="portfel"><a href="<?=SITE;?>/panel/portfel" class="fc-color6">Portfel</a></li>
    <li id="produkty"><a href="<?=SITE;?>/panel/produkty" class="fc-color6">Produkty</a></li>
    <li id="oferty"><a href="<?=SITE;?>/panel/oferty" class="fc-color6">Oferty</a></li>
    <li id="umowa"><a href="<?=SITE;?>/panel/umowa" class="fc-color6">Umowa</a></li>
</ul>
<script>
    let url = "<?=$url;?>";
    if(url!= '')
    {
        document.getElementById(url).className = "bottom-black-border";
    }
</script>