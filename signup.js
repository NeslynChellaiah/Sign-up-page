
		$("#h").click(function () {
		var a = $("#email").val();
		var b = $("#pwd").val();
		$.ajax(
			{
				method:"POST",
				url:"signup.php",
				data:{
					"email":a,
					"password":b
				},
				success: function (result){
					alert(result); 
				}
				})
		});