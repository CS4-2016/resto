window.manage_menu = {
    show: function (){
        $.get("manage-menu.php",function(ret){
            $('.content-wrapper').html(ret);
            manage_menu.getAll();
        });
    },
    getAll: function(){
        $.get("manage-menu-category.php", function(ret){
            $(".category-wrapper").html(ret);
        });
    }
}

window.category = {
    getAll: function(c){
        $.get("manage-menu-category-get.php?category="+ c, function(ret){
            $(".dish-wrapper").html(ret);
        })
    }
}