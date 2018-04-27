$(document).ready(function() {

  $(".main-header-section").backgroundCycle({
      imageUrls: [
        'assets/img/carousel/slide1.jpg',
        'assets/img/carousel/slide2.jpg',
        'assets/img/carousel/slide3.jpg'
      ],
      fadeSpeed: 1000,
      duration: 4000,
      backgroundSize: SCALING_MODE_COVER
  });

  // load bootstrap dateandtime pickcer
  $('#selectDate').click(function(){
    $('#selectDate').datetimepicker({
      format:'d M Y H:i',
    });
  });

  // loads location json into state and city
  $.ajax({
    url: 'assets/js/locations.json',
    type: 'GET',
    dataType: 'json'
  })
  .done(function(error) {
    mydata = error;
    for (var state in mydata.States) {
        $('#state').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
    }
  })
  $('#state').change(function(event) {
      var selectedState = $(this).val();
      $('#city').empty();
      //Get cities for selectedState
      var cities = mydata.States[String(selectedState)];
      $('#city').append('<option value="" selected disabled>Please select</option>');

      for (var i = 0; i < cities.length; i++) {
          $('#city').append('<option value="' + String(cities[i]) + '">' + String(cities[i]) + ' </option>');
      }
  });

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
  				// setTimeout("window.location = '../main/wp-admin/changepassword.php'", 2000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });



});
