if (navigator.geolocation)  {
		var success = function(position)  {
		var latitude  = position.coords.latitude;
		var longitude = position.coords.longitude;
			$('.js-geolocation').val(latitude + "," + longitude);
		};

		var error = function()  {
			console.log('Geolocation error');
		};
		navigator.geolocation.getCurrentPosition(success, error);
}
