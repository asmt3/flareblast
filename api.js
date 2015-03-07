

var api = {
	send: function(to, from, msg){


		$.post('twilio.php', {
			to: to,
			from: from,
			msg: msg
		});
	}
}