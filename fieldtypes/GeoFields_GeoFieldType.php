<?php
namespace Craft;

class GeoFields_GeoFieldType extends BaseFieldType {
	public function getName() {
		return Craft::t('Geo');
	}

	public function getInputHtml($name, $value) {
    	craft()->templates->includeJsResource('geofields/geo.js');
		return craft()->templates->render('geofields/geo', array(
			'name'  => $name,
			'value' => $value
		));
	}
	
	
    public function defineContentAttribute()  {
        return AttributeType::String;
    }

}
