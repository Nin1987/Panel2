var media_uploader;

	function open_media_uploader_image_plus(t){
		media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: false 
		});
		media_uploader.on("insert", function(){

		
			let images = media_uploader.state().get("selection").models;
            let hidden_id = "hidden_pdf_id";

            console.log(images[0].attributes);
            if('application/pdf' == images[0].attributes.mime)
            {
                document.getElementById('label_pdf_button').innerHTML='Dodano plik <a href="'+images[0].attributes.url+'" target="_blank">Plik</a>';
                document.getElementById(hidden_id).value=images[0].attributes.id;
            }
            else
            {
                document.getElementById('label_pdf_button').innerText="Zły format pliku";
            }
		});
		media_uploader.open();
	}