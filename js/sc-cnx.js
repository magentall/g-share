var insc = null;

$(document).ready(function (e) {
	$("#form-cnx").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "controller/cnx-ajax.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{
				//$("#preview").fadeOut();
				$("#title").fadeIn();
			},
			success: function(data)
		    {
				if(data=='invalid')
				{
					// invalid file format.
					$("#err").html("Invalid File !").fadeIn();
				}
				else if (data=='wouaii') {

					$("#login").html("OUUUUUUIiiiiiiIII").fadeIn();

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
