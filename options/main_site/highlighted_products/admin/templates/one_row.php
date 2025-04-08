<td width="30%">
    <div>
                                
        <label for="cat_name_<?=$data['li'];?>">Nazwa kategorii</label>
                               
        <input type="text" name="cat_name_<?=$data['li'];?>" value="<?=$data['cat_name'];?>" id="cat_name_<?=$data['li'];?>" style="width:100%"/>
                               
    </div>
    <div>

                          
        <label for="cat_id_<?=$data['li'];?>">Kategoria</label>
                              
         
        <select name="cat_id_<?=$data['li'];?>" id="cat_id_<?=$data['li'];?>" style="width:100%">
            <?php foreach($data['categories'] as $row)
            {
                ?>
                    <option value="<?= $row->slug;?>" <?php if($row->slug == $data['cat_id']) echo "selected";?>><?= $row->name;?></option>
                <?php
            }
            ?>
        </select>
                             
    </div>
    
    <input type="hidden" name="id_<?=$data['li'];?>" id="id_<?=$data['li'];?>" value="<?=$data['id'];?>" />
   
</td>