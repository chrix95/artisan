$(document).ready(function() {

  // artisan registration form validation
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

  // artisan login  form validation
  $('#artisanLogin').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },

    submitHandler: function() {

      var that = $('#artisanLogin'),
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
        if (data == 'Login Successful. Please wait...') {
          $('p#message').css({
            "color":"green",
            "font-size": "18px"
          });
          $('p#message').text(data);
          console.log(data);
          setTimeout("window.location = 'user/dashboard.php'", 3000);
        } else if (data == 'Password incorrect') {

          $('p#message').css("color", "red");
          $('p#message').text(data);
          console.log(data);
          setTimeout("$('p#message').text('')", 2000);
        } else if (data == 'Sorry, email doesnt exist') {

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

  // contact form validation
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
          setTimeout("$('p#message').text('')", 5000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

  // Settings functionality
  $('#passUpdate').validate({
    // validates the form with this rules
    rules: {
      curpass: {
        required: true
      },
      newpass: {
        required: true
      },
      conpass: {
        required: true,
        equalTo: '#newpass'
      }
    },
    submitHandler: function() {
      //gets the form fields details
      var that = $('#passUpdate'),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};

      that.find('[name]').each(function(index, value){
          var that = $(this),
            name = that.attr('name'),
            value = that.val();

          data[name] = value;  // stores the data as an array
      });
      // sends the data to the script using ajax
      $.ajax({
        url: '../resources/script.php', // script responsible for processing the information
        type: 'POST',
        data: data
      })
      // on completion, the necessary actions are taken
      .done(function(data){
        if (data == 'Password changed successfully') {
          $('p#message').css({
            "color":"#9C27B0",
            "font-size": "15px"
          });
          $('p#message').text(data);
          setTimeout("$('p#message').text('')", 3000);
        } else if (data == 'Password change failed') {

          $('p#message').css({
            "color":"#fff",
            "font-size": "15px"
          });
          $('p#message').text(data);
          setTimeout("$('p#message').text('')", 3000);
        } else if (data == 'Current password incorrect') {

          $('p#message').css("color", "red");
          $('p#message').text(data);
          console.log(data);
          setTimeout("$('p#message').text('')", 3000);
        }

      })
      // on failure the error uis displayed in the console
      .fail(function(data){
        console.log("error encountered");
      });

    }

  });

// validate account closure email
  $('#delAcct').validate({
    // validates the form with this rules
    rules: {
      email: {
        required: true,
        email: true
      }
    },
    submitHandler: function() {
	     //gets the form fields details
      var that = $('#delAcct'),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};

      that.find('[name]').each(function(index, value){
          var that = $(this),
            name = that.attr('name'),
            value = that.val();

          data[name] = value; // stores the data as an array
      });
	     // sends the data to the script using ajax
      $.ajax({
        url: '../resources/script.php',
        type: 'POST',
        data: data
      })
	     // on completion, the necessary actions are taken
      .done(function(data){
        if (data == 'Account closure confirmed') {
          $('p#delmessage').css({
            "color":"#9C27B0",
            "font-size": "15px"
          });
          $('p#delmessage').text(data);
          setTimeout("window.location = 'logout.php'", 3000);
        } else if (data == 'Failed to close account') {
          $('p#delmessage').css({
            "color":"#9C27B0",
            "font-size": "15px"
          });
          $('p#delmessage').text(data);
          setTimeout("$('p#delmessage').text('')", 3000);
        } else if (data == 'Incorrect email provided') {
          $('p#delmessage').css({
            "color":"#9C27B0",
            "font-size": "15px"
          });
          $('p#delmessage').text(data);
          setTimeout("$('p#delmessage').text('')", 3000);
        }

      })
	     // on failure the error uis displayed in the console
      .fail(function(data){
        console.log("error encountered");
      });

    }
  });

});
