$(document).ready(function(){
    setInterval(function(){
        manage_menu.getAll();
    },5000);
});

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

window.manage_users = {
    show: function (){
        $.get("manage-users.php",function(ret){
            $('.content-wrapper').html(ret);
                manage_users.getAll();
        });
    },
    getAll: function(){
        $.get("manage-user-list.php", function(ret){
            $(".users-wrapper").html(ret);
        });
    },
    view: function(c){
        $.get("manage-user-view.php?id="+c, function(ret){
            $(".user-info").html(ret); 
        });
    }
}

window.category = {
    getAll: function(c){
        $.get("manage-menu-category-get-dish.php?category="+ c, function(ret){
            $(".dish").html(ret);
        })
    },
    
    add: function(){
        var c = $('#add_category').val();
        $.get("manage-menu-category-add.php?category="+ c, function(ret){
            $(".category-wrapper").append(ret);
        });
        manage_menu.getAll();
    }
}

window.dish = {
    show: function(){
        $.get("manage-menu-dish.php",function(ret){
            $('.dish').html(ret);
            manage_menu.getAll();
        });
    },
//    add: function(){
//        
//    }
}