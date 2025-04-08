<div class="product-filter-container product-category roll-list text-start" id="filters_window" style="display:none;">
    <h3 class="mb-3">Filtry</h3>
            <form class="product-filter-form" action="" method="GET">
            <input type="hidden" name="post_type" value="product">
            <input type="hidden" name="filtrs_nin" value="yes">
                

                <h4 class="mb-3">Waga produktu (podana w gramach)</h4>
                    <div class="row row-cols-1 row-md-cols-2 roll-list">
                        <div class="col p-3 mb-3 ">
                            <label for="waga_od" class="wc-block-grid__product-title">Waga od</label>
                                <input type="number" class="wp-block-search__input"  min="0" value="" id="waga_od" name="waga_od">
                            </div>
                  

                    
                        <div class="col p-3 mb-3 ">
                            <label for="waga_do" class="wc-block-grid__product-title">Waga do</label>
                                <input type="number" class="wp-block-search__input"  min="0" value="" id="waga_do" name="waga_do">
                            </div>
                    </div>
                   
                <?php 
               
               foreach($filters_names as $row)
                {
                
                    if($row['label'] =='faza-zycia' || $row['label'] == 'wielkosc-pupila' || $row['label'] == 'specjalna-potrzeba' || $row['label'] == 'smak')
                    {
                    ?>
                          <h4 class="mb-3"><?=$row['name'];?></h4>
                        <div class="row row-cols-1 roll-list roll-list-overflow">
                            <input type="hidden" name="pa_<?=$row['label'];?>" id="<?=$row['label'];?>" value="" />
                        <?php
                        $i=0;
                        foreach($row['options'] as $option)
                        {
                            
                                ?>
                                <div class="col p-2 mb-1 "><label for="<?=$row['label'];?>_<?=$i;?>" class="wc-block-grid__product-title fs-20"><?=$option[0];?></label>
                                <input type="checkbox" value="<?=$option[1];?>" id="<?=$row['label'];?>_<?=$i;?>"></div>
                                <?php
                                $i++;
                        }
                        ?>
                        </div>
                    <?php
                    }
                }
                ?>
                <input type="submit" class="button-light-blue" value="<?=__('Filtruj', 'nin_filtr');?>">
            </form>
        </div>