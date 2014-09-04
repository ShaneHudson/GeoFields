<?php
namespace Craft;

class GeoFieldsPlugin extends BasePlugin {
	function getName() {
		return Craft::t('Geo Fields');
	}

	function getVersion() {
		return '1.0.0';
	}

	function getDeveloper() {
		return 'Shane Hudson';
	}

	function getDeveloperUrl() {
		return 'http://shanehudson.net';
	}
}
