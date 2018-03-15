var tabinfo = ['1'];

//Affichage général
function ajax_aff_history(){
	$.ajax({
		url:'past.php',
		data: { id:tabinfo[0]
		},
		type: 'post',
		success:function(output){
			console.log(output);
			$('#post').html(output);
		}
	});
}


$(document).ready(function (e) {

ajax_aff_history();


	$("#form").on('submit',(function(e) {
		console.log(tabinfo);
		data1 = new FormData(this);
		data2=tabinfo[0];
		console.log(data2);
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
				//$("#preview").fadeOut();
				$("#title").fadeOut();
			},
			success: function(data)
		    {
				if(data=='invalid')
				{
					// invalid file format.
					$("#err").html("Invalid File !").fadeIn();
				}
				else
				{
					// view uploaded file.
					//$("#preview").html(data).fadeIn();
					$("#lien").html(data).fadeIn();
					$("#lien").attr("href", data);

					$("#form")[0].reset();
				}
		    },
		  	error: function(e)
	    	{
				$("#err").html(e).fadeIn();
	    	}
	   });
	}));
});
