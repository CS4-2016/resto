$(document).ready(function(){
	setInterval(function(){
		tables.getAll();
	},2000);
});

window.tables = {
	getAll: function(){
		$.get("tables-get-data.php", function(ret){
			$(".table-respo").html(ret);
		});
	}
}