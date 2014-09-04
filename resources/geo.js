var geoEl = $('.js-geolocation');
if (navigator.geolocation && geoEl.val() === '')  {
		var success = function(position)  {
		var latitude  = position.coords.latitude;
		var longitude = position.coords.longitude;
			geoEl.val(latitude + "," + longitude);
		};

		var error = function()  {
			console.log('Geolocation error');
		};
		navigator.geolocation.getCurrentPosition(success, error);
}
