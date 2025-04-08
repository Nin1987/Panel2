
document.getElementById('filters_button').addEventListener("click", function(){
    let wind = document.getElementById('filters_window');
    if(wind.style.display == 'none')
    {
        wind.style.display = 'block';
    }
    else
    {
        wind.style.display = 'none';
    }
});

(function($) {
    $('.product-filter-form input[type="text"]').keypress(function(e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            $('.product-filter-form').submit();
        }
    });
})(jQuery);

window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function($) {
        $('input').on('click', function()
    {
        
        if(this.type=='checkbox')
        {
            let checked_id = this.id.split('_');
            let hidden_input = document.getElementById(checked_id[0]);
           
            if(this.checked == true)
            {
                if(hidden_input.value == '')
                {
                    hidden_input.value = this.value;
                }
                else
                {
                    hidden_input.value = hidden_input.value+','+this.value;
                }
                
            }
            else
            {
                let checked_tab = hidden_input.value.split(',');
                
                let new_checked = '';

                for(let i=0; i < checked_tab.length; i++)
                {
                    if(checked_tab[i] != this.value)
                    {
                        if(new_checked == '')
                        {
                            new_checked += checked_tab[i];
                        }
                        else
                        {
                            new_checked += ','+checked_tab[i];
                        }
                    }
                }
                hidden_input.value = new_checked;
            }
        }
    });
});
});