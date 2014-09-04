GeoFields
=========

Geo fields for Craft CMS. Used to add geographic location to content creation.

To use:
* Add the files in the repository to a folder inside craft/plugins called geofields/
* Activate the plugin in your craft admin panel
* Create a geo field from the admin panel's fields page
* Add the field to an entry type

This will store the location from the initial content creation (I will soon add a update button).

It will not make the information public, unless you add a twig call for it (as you would any other field) in the template. If you do wish to add it, please use a h-geo microformat.
