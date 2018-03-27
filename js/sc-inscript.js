
$(document).ready(function (e) {
					//$("#lien").html();
	$("#form-insc").on('submit',(function(e) {
		e.preventDefault();
						//$("#lien").html();
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
				$("#err").html();

			},
			success: function(data)
		    {
					var tab = JSON.parse(data);
					console.log(tab[1]);
					console.log(tab[2]);
					console.log(tab[3]);

					if (tab[0]=='invalid') {
						// invalid file format.
						$("#err").html("Inscription None Valid").fadeIn();

						if (data2==1) {
							$("#legal").fadeIn(); // to update w anim
						}
						else {
							$("#legal").html('Clik here to LoGout');
						}
					}
					else if (tab[0]=='wouaii') {
						insc=1;
						$("#login").html(tab[1]).fadeIn();
						$('#inscriptionmodal').modal('hide');
						tabinfo = [tab[3]];
						$("#form")[0].reset();
						ajax_aff_history(tabinfo[0]);
						//$("#login").add('disabled');
					}

			},
		  	error: function(e)
	    	{
				$("#err").html(e).fadeIn();
			}
	   });
	}));
});
