<td width="30%">
    <div>
                                
        <label for="url_<?=$data['li'];?>">Link do oferty</label>
                               
        <input type="text" name="url_<?=$data['li'];?>" value="<?=$data['link'];?>" id="url_<?=$data['li'];?>" style="width:100%"/>
                               
    </div>
    <div>

                          
        <label for="line_<?=$data['li'];?>_1">Linia 1 z lewej strony</label>
                              
        <input type="text" name="line_<?=$data['li'];?>_1" value="<?=$data['line_1'];?>" id="line_<?=$data['li'];?>_1" style="width:100%"/>
                             
    </div>
    <div>

                              
        <label for="line_<?=$data['li'];?>_2">Linia 2 z lewej strony</label>
                              
        <input type="text" name="line_<?=$data['li'];?>_2" value="<?=$data['line_2'];?>" id="line_<?=$data['li'];?>_2" style="width:100%"/>
                                
    </div>
    <div>

                                
        <label for="line_<?=$data['li'];?>_3">Linia 1 z prawej strony</label>
                            
        <input type="text" name="line_<?=$data['li'];?>_3" value="<?=$data['line_3'];?>" id="line_<?=$data['li'];?>_3" style="width:100%"/>
                                
    </div>
    <div>

                                    
        <label for="line_<?=$data['li'];?>_4">Linia 2 z prawej strony</label>
                            
        <input type="text" name="line_<?=$data['li'];?>_4" value="<?=$data['line_4'];?>" id="line_<?=$data['li'];?>_4" style="width:100%"/>
                            
    </div>
    <div>

                                
        <label for="photo_<?=$data['li'];?>">Miniatura</label>
                             
        <img src="<?=$data['photo_url'];?>" id="photo_<?=$data['li'];?>" onclick="open_media_uploader_image_plus(this);" class="img-pointer" style="width:10%;"/>
        <input type="hidden" name="photo_id_<?=$data['li'];?>" id="photo_id_<?=$data['li'];?>" value="<?=$data['photo_id'];?>" />
        <input type="hidden" name="id_<?=$data['li'];?>" id="id_<?=$data['li'];?>" value="<?=$data['id'];?>" />
                                
    </div>
</td>