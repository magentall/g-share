
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
					var tab = JSON.parse(data);
					console.log(tab[1]);
					console.log(tab[2]);
					console.log(tab[3]);
					if (tab[0]=='invalid') {
						// invalid file format.
						$("#err").html("Invalid File !").fadeIn();
					}
					else if (tab[0]=='wouaii') {
						insc=1;
						$("#login").html(tab[1]).fadeIn();
						//$('#inscriptionmodal').toggle();
						tabinfo = [tab[3]];
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
