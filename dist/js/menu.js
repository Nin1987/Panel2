window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function($) {
        $('#menu-button').on('click', function()
    {
        let nav_menu = document.getElementById('nav-list');
        let count_class = nav_menu.className.split(" ");
        let invisible = 0;
        let classes = '';
        let nav_button = document.getElementById('menu-button');
        for(let i= 0; i<count_class.length; i++)
        {
            if(count_class[i] == 'mobil-invisible')
            {
                invisible = i;
            }
            else
            {
                classes += count_class[i]+" ";
            }
            
        }

        if(invisible > 0)
        {
            nav_menu.className = classes;
            nav_button.className = 'button_insert';
        }
        else
        {
            nav_menu.className = classes + 'mobil-invisible';
            nav_button.className = 'button_uninsert';
        }
    });
    $('button').on('click', function()
    {
        let parrent= (this).id.split('parent_menu_');
        if(parrent.length >1)
        {
            let child =document.getElementById('child_menu_'+parrent[1]);

            if(child.style.cssText == "display: block !important;")
            {
                child.style.display = "none";
            }
            else
            {
                child.style.cssText = "display:block!important;";
            }
            
        }
     
    }
    );
    });
});

