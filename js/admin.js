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
    view: function(c){
        $.get("manage-menu-dish.php?id="+c, function(ret){
            $(".flex-item1").html(ret); 
        });
    },
//    save: function(){
//        var dish = $("#textDish").val();
//        var price = $("#textPrice").val();
//        var description = $("#textAddress").val();
//        var dish_id = $("#hiddenDishId").val();
//        var dish_image = $("#dishImage").val();
//        
//        $.post("change-dish-info.php",{
//            dish_id: dish_id, 
//            dish: dish, 
//            price: price, 
//            description: description,
//            dish_image: dish_image
//        }, function(ret) {
//            alert(ret);
//        });
//    }
}

window.manage_orders = {
    show: function (){
        $.get("manage-orders.php",function(ret){
            $('.content-wrapper').html(ret);
            manage_orders.getAll();
        });
    },
    getAll: function(){
        $.get("manage-orders-list.php", function(ret){
            $(".orders-wrapper").html(ret);
        });
    },
    view: function(c){
        $.get("manage-orders-view.php?id="+c, function(ret){
            $(".user-info").html(ret); 
        });
    },
    serve: function(c, btn){
        $.get("manage-orders-serve.php?id="+c);
        $("#btn-serve"+btn).addClass('btn-success').removeClass('btn-warning');
        $("#btn-serve"+btn).html("Served");
        $("#btn-cancel"+btn).remove();
    },
    cancel: function(c){
        $.get("manage-orders-cancel.php?id="+c);
        $("#td-cancel"+c).remove();
    },
    finish: function(){
        var id = $("#hidden-tray-id").val();
        $.get("manage-orders-finish.php?id="+id);
    }
}