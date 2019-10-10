$("#form_input").submit(function(){
		var sender1 = $("#sender").val();
	var message1 = $("#message").val();
alert("hello"+sender1);
	$.ajax({
		url:'scripts/php/Send.php',
		data:{sender:sender1, message:message1},
		success:function(data){
			$("#feedback").html(data);
			$("#feedback").fadeIn('slow',function(){
				$("#feedback").fadeOut(6000);
			});
			$("#message").val(" ");
		}
	});
	return false;
});