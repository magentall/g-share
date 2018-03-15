

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
					console.log(data);
					var tab = JSON.parse(data);
					console.log(tab);
					if(tab[0]==0)
					{
						// invalid file format.
						$("#err").html("Erreur de connexion").fadeIn();
					}
					else {
						tabinfo = [tab[1]];
						$("#login").html(tab[2]).fadeIn();
						$('#connexionmodal').modal('hide');
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
