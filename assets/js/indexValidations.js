$(document).ready(function() {

  $('#contactForm').validate({
  	rules: {
  		name: {
  			required: true
  		},
      email: {
  			required: true,
        email: true
  		},
      message: {
  			required: true,
  		}
  	},

    submitHandler: function() {

  		var that = $('#contactForm'),
  				url = that.attr('action'),
  				type = that.attr('method'),
  				data = {};

  		that.find('[name]').each(function(index, value){
  				var that = $(this),
  					name = that.attr('name'),
  					value = that.val();

  				data[name] = value;
  		});

  		$.ajax({
  			url: 'resources/script.php',
  			type: 'POST',
  			data: data
  		})

  		.done(function(data){
  			if (data == 'Message has been sent.') {
  				$('p#message').css({
            "color":"green",
            "font-size":"18px",
            "text-align":"center"
          });
  				$('p#message').text(data);
  				console.log(data);
          setTimeout("$('p#message').text('')", 5000);

  			} else if (data == 'Server error, try again later') {

  				$('p#message').css("color", "red");
  				$('p#message').text(data);
  				console.log(data);
  				// setTimeout("window.location = '../main/wp-admin/changepassword.php'", 2000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

});
