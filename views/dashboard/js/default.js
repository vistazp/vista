

$(function () {


	$.get('dashboard/xhrGetListing', function(o) {
		
		for (var i = 0; i < o.length; i++)
		{
			$('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
		}
		
		$(document).on("click", ".del", function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
				delItem.parent().remove();
                                
			}, 'json');
			
			return false;
		});
		
	}, 'json');




	
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
                        
			$('#listInsert').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');		
		}, 'json');
		
		
		return false;
	});
 
});