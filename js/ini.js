var tabinfo = ['1'];

//Affichage général
function ajax_aff_history(a){
	$.ajax({
		url:'past.php',
		data: { id:a
		},
		type: 'post',
		beforeSend : function()
		{
			$("#err").html();

		},
		success:function(output){
			//console.log(output);
			var tabi = JSON.parse(output);
			//console.log(tabi);

			$('#post').html('');
			tabi.reverse();
			//console.log(tabi);
			for (var i in tabi) {

					var b=i;
					//console.log(i);
					var a = "<p class='text-center link'><a id='lk"+b+"' target='_blank'>link "+b+" : name __ "+tabi[i].name+"  date__ "+tabi[i].date+"</a></p>";
					//console.log(a);
					var result = $(a);
					//console.log(result);
					$('#post').append(result);
					var link = "uploads/"+tabi[i].link;
					//console.log(link);
					var idlk = "#lk"+i;
			  	$(idlk).attr("href",link);
			}
		}
	});
}




$(document).ready(function (e) {

	if (tabinfo[0]==1) {
		$("#legal").fadeIn(); // to update w anim
	}
	else {
		$("#legal").html('Clik here to LoGout');
	}

ajax_aff_history(tabinfo[0]);


	$("#form").on('submit',(function(e) {
		//console.log(tabinfo);
		data1 = new FormData(this);
		data2=tabinfo[0];
		//console.log(data2);
		data1.append('info',data2);
		e.preventDefault();
		$.ajax({
      url: "ajaxupload2.php",
			type: "POST",
			data: data1,  //data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{


			},
			success: function(data)
		    {
						console.log(data);
						if (data2==1) {
							$("#legal").fadeIn(); // to update w anim
						}
						else {
							$("#legal").html('Clik here to LoGout');
						}
//alert(data);
						if (data=='') {
							alert('SizE Max Reach, InvaLid FilE');
						}else if (data=='7m') {
							alert('Max 7 Mo');
						}
						else if (data=='invalid') {
							alert('InvaLid FilE');
						}
						else{

							$("#lien").html(data).fadeIn();
							$("#lien").attr("href", data);
							$("#form")[0].reset();
							$("#err").html('');
							ajax_aff_history(tabinfo[0]);

						}

		    },
		  	error: function(e)
	    	{
					$("#err").html(e).fadeIn();
//					console.log(e);
	    	}

	   });
	}));
});
