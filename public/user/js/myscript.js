/**
 * Created by Administrator on 9/14/2016.
 */
$('document').ready(function () {
	$('.updatecart').click(function (){
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find('.qty').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url: 'cap-nhat/'+rowid+'/'+qty,
			type: 'GET',
			cache: false,
			data:{'_token':token, 'id':rowid, 'qty':qty},
			success:function(data){
				if(data == 'ok')
					window.location = "gio-hang";
			}
		});
	});
});