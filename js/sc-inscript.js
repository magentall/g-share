
$(document).ready(function (e) {
	$("#form-insc").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "controller/insc-ajax.php",
			type: "POST",
			data:  new FormData(this),
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
					$("#login").html(data).fadeIn();
					//$("#lien").attr("href", data);

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
