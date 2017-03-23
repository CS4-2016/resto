        <div class="content-header">
            <h1>Manage Menu</h1>
        </div>
            <div class="flex-container">
                <div class="flex-item animated fadeInLeft">
                    <div class="header">
                        Category
                        <span class="category-flex-cheat" flex></span>
                        <i style="cursor: pointer" class="fa fa-plus fa-category" aria-hidden="true" type="button" data-toggle="modal" data-target="#modalCategory"></i>
                    </div>
                    <div class="category-wrapper">

                     </div>
                </div>
                <div class="flex-item dish">
                    
                </div>
                <div class="flex-item1">
            
                </div>  
            </div>

<div class="modal fade" id="modalCategory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Category Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
            <table style="width:100%;">
                <tr style="width:inherit;">
                    <td style="width: 150px; margin-right: 30px;">Category name:</td>
                    <td style="width: calc(100% - 150px)"><input style="width:100%; padding:5px;" type="text" id="add_category"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer" style="border:none">
          <button type="button" class="btn btn-primary" onclick="category.add()" data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="modal fade" id="modalDish" role="dialog">
    <div class="modal-dialog">
    
      <!-- Dish Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Dish</h4>
        </div>
        <div class="modal-body">
            <table style="width:100%;">
                <tr style="width:inherit;">
                    <td style="width: 150px; margin-right: 30px;">Dish name:</td>
                    <td style="width: calc(100% - 150px)"><input style="width:100%; padding:5px;" type="text" id="add_category"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer" style="border:none">
          <button type="button" class="btn btn-primary" onclick="dish.add()" data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>