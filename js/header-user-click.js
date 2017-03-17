$(document).ready(function() {
    $('#header-drop-down').hide();
    
    $('#header-user-click').hover(function()    {   
    $('#header-user-click').css('cursor','pointer');
    });

    $('#header-user-click').click(function()    {
        $('#header-drop-down').toggle();
    });
    
    $('.td-main-panel').click(function(){
        if ($('#header-drop-down').is(':visible') ){
            $('#header-drop-down').hide();
        }
    }); 
    
});


