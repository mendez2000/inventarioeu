$(document).ready(function() {
	

	$(document).on('submit', '#frmLogin', function(event) {
		event.preventDefault();
		username = $("#txtUser").val();
		password = $("#txtPass").val();

		if (username != "") {
			if (password != "") {
				$.ajax({
					url: 'startLogin',
					type: 'POST',
					dataType: 'JSON',
					data: {user: username, pass: password},
				})
				.done(function(data) {
					if(data.estado){
						window.location = base_url+ "home/dashboard";
					}else{
						Lobibox.notify('error', {
						    msg: data.mensaje
						});
						//console.log(data.mensaje);
					}
				})
				.fail(function() {
					console.log("error");
				});
				
			}else{
				Lobibox.notify('error', {
				    msg: 'Password requerida'
				});
				//console.log("Password requerida");
			}
		}else{
			Lobibox.notify('error', {
				    msg: 'Username requerido'
				});
			//console.log("Username requerido");
		}
	});
});