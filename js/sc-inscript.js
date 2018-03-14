
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
				else if (data=='wouaii') {
					insc=1;
					$("#login").html("INSC").fadeIn();
					$('#inscriptionmodal').toggle();
					$('#connexionmodal').toggle();
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
