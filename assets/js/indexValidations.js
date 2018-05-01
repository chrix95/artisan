$(document).ready(function() {

  $('#artisanReg').validate({
  	rules: {
  		surname: {
  			required: true
  		},
      othername: {
  			required: true
  		},
      email: {
  			required: true,
  			email: true
  		},
      phone: {
  			required: true
  		},
      password: {
  			required: true
  		},
  		cpassword: {
  			required: true,
        equalTo: '#password'
  		},
      state: {
  			required: true
  		},
      city: {
  			required: true
  		},
      address: {
  			required: true
  		}
  	},
    messages: {
      cpassword: {
        equalTo: 'Password match failed',
      }
    },

    submitHandler: function() {

  		var that = $('#artisanReg'),
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
  			if (data == 'You are registered successfully') {
  				$('p#message').css({
            "color":"green",
            "font-size": "18px"
          });
  				$('p#message').text(data);
  				console.log(data);
  				setTimeout("window.location = 'index.php'", 2000);
  			} else if (data == 'Server error, try again later') {

  				$('p#message').css("color", "red");
  				$('p#message').text(data);
  				console.log(data);
          setTimeout("$('p#message').text('')", 2000);
  			} else if (data == 'Phone number already registered') {

  				$('p#message').css("color", "red");
  				$('p#message').text(data);
  				console.log(data);
          setTimeout("$('p#message').text('')", 2000);
  			} else if (data == 'Email address already exist') {

  				$('p#message').css("color", "red");
  				$('p#message').text(data);
  				console.log(data);
          setTimeout("$('p#message').text('')", 2000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

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
