$(function()
{
	$('.main_sear_bu').on('click',function()
	{
			$('.locations').addClass('show_loca');
	})

	$('body').on('click',function(e)
	{
				if(e.target.id !='locaa')
				{
					$('.locations').hide();
				}
				else
				{
					$('.locations').show();
				}
	});

	$(document).delegate('.show_loca span','click',function()
	{
		var loc = $(this).html();
		$('#locaa').html(loc);
	})
	$('#locaa span').on('click',function(){

		var loca = $(this).html();
		var htmlli ='';
		$.ajax({

					url:'http://localhost/mechnics/mycon/fetch_modal',
					method:'POST',
					data:{id:loca},
					success:function(data)
					{
						$('.fixed_modal').fadeIn('fast');
						//$('.modal-body').html(data);
						var dd = JSON.parse(data);
						$.each(dd,function(i,item){
							
							htmlli +='<li id="'+item.id+'">'+item.services+'</li>';

						})

						$('.ullist #ulid').html(htmlli);
						$('ul#ulid li:first-child').addClass('active');
						var id = $('ul#ulid li:first-child').attr('id');
						fetch_first_service(id);
					}
		});
	})

	$('.close_but').on('click',function(){
		$('.fixed_modal').fadeOut('slow');
	})

	function fetch_first_service(id)
	{
		var bhtml = '';
		$.ajax({
				url:'http://localhost/mechnics/mycon/fetch_first_one',
				method:'POST',
				data:{id:id},
				success:function(data)
				{
					var md = JSON.parse(data);
						$.each(md,function(i,items){
								bhtml +='<li>'+items.childservice+'</li>';
						})
						$('#ullist2').html(bhtml);
				}
		});

	}

	$(document).delegate('ul#ulid > li','click',function(){


		$(this).addClass('active').siblings().removeClass('active');

		var id = $(this).attr('id');

				var bhtml = '<ul>';
		$.ajax({
				url:'http://localhost/mechnics/mycon/fetch_first_one',
				method:'POST',
				data:{id:id},
				success:function(data)
				{
					var md = JSON.parse(data);
						$.each(md,function(i,items){
								bhtml +='<li>'+items.childservice+'</li>';
						});
					bhtml += '</ul>';
						$('#ullist2').html(bhtml);

				}

		});
	})
$(document).delegate('.air_condi','click',function(){

	var loca = $(this).attr('id');
	var htmlli ='';
		$.ajax({

					url:'http://localhost/mechnics/mycon/fetch_modal',
					method:'POST',
					data:{id:loca},
					success:function(data)
					{
						//console.log(data);
						$('.fixed_modal').fadeIn('fast');
						var dd = JSON.parse(data);
						$.each(data,function(i,item){
							
							htmlli +='<li id="'+item.id+'" class="ser'+item.id+'">'+item.services+'</li>';

						})

						$('.ullist #ulid').html(htmlli);
						$('ul#ulid li.'+loca).addClass('active');
						var id = $('ul#ulid li:first-child').attr('id');
						fetch_child(loca);
					}
		});
		

})

function get_all_service_list()
{
	var htmlll = '';
$.ajax({
	url:'http://localhost/mechnics/mycon/fet_the_list_service',
	method:'POST',
	success:function(data)
	{
				var ff = JSON.parse(data);
				$.each(ff,function(i,items){
						htmlll +='<div class="air_condi" id="ser'+items.id+'">';
						htmlll +='<h3>'+items.services+'</h3>';
				htmlll +='</div>';
				});

				$('#got_service_list').html(htmlll);
	}
});
}
get_all_service_list();


function fetch_child(idd)
{
	//alert(idd);
var idd2 = idd;
var bhtml='';
$.ajax({
			url:'http://localhost/mechnics/mycon/fetch_acc_list',
			method:'POST',
			data:{id:idd2},
			dataType:'json',
			success:function(data)
			{
				console.log(data);
				//var md = JSON.parse(data);
						$.each(data,function(i,items){
								bhtml +='<li>'+items.childservice+'</li>';
						});
					bhtml += '</ul>';

					$('#ullist2').html(bhtml);
			}
})
}
})