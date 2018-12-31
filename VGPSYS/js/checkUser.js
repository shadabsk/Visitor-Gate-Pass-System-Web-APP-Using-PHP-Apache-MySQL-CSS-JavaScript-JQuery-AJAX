function chckUserfun(val){
		$.ajax({
			type:"POST",
			url:"check_user.php",
			data:'username='+val,
			success:function(data){
				
				$('#msg').html(data);
			}
		});
	}