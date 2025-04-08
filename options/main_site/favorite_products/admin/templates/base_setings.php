<h2>Pasek Polecanych produktów</h2>
    <script type="text/javascript">

	var media_uploader = null;

	function open_media_uploader_image_plus(t){
		media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: true 
		});
		media_uploader.on("insert", function(){

			let length = media_uploader.state().get("selection").length;
			let images = media_uploader.state().get("selection").models
            let hidden_id = t.id.split('photo_');
                hidden_id = "photo_id_"+hidden_id[1];

		
				let image_url = images[0].changed.url;
                document.getElementById(t.id).src=image_url;
                document.getElementById(hidden_id).value=images[0].attributes.id;
				console.log(images[0].attributes.id);		
			
		});
		media_uploader.open();
	}
	
    </script>
    <style>
        .img-pointer
        {
            cursor: pointer;
        }
    </style>

<form method="post">
            
    <table class="form-table" role="presentation" >
        <tbody>
            <tr>
                <?php do_action('favorite_loop');?>
            </tr>
            <tr>
                <td class="submit">
                    <input type="submit" name="save_favorite_products" class="button button-primary" value="Zapisz">
                </td>
            </tr>
        </tbody>
    </table>
</form>
