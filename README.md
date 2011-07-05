# GeoCongressionalDistrict

Find your Congressional District by providing a complete US address or a loose description of an address, OR if you're at home, let the browser's Geolocation API goodness find your district for ya!. Developed by @ielshareef.

**Note**: Depending on the browser's Geolocation API for mission critical applications is not recommended since it is not always accurate.

## Address Examples that return my district (CA, 30):
1235 N. Kings Rd, West Hollywood, CA
1235 Kings in West Hollywood, CA
1235 Kings in West Hollywood
Near Santa Monica Blvd and La Cienega
At the corner of Kings Rd. and Fountain Ave.
Near Basix Cafe in West Hollywood

## Components
example.html: Simple example of how to use the service
README: You're looking at it
sunlightlabs: Open Government project https://github.com/sunlightlabs

## Frontend Dependencies
YUI3: http://developer.yahoo.com/yui/3/
Google Geocoding API: http://code.google.com/apis/maps/documentation/geocoding/

## Backend Dependencies
Sunlight Labs API

## Prerequisites:
You need a Sunlight Labs API Key to use this example. You can get one at http://services.sunlightlabs.com/. When you get it, put it in sunlightlabs/class.sunlightlabs.php (there is a variable for it there.) 

## Tested Browsers
This example has been tested in Chrome 5+, FireFox 3.6+, and Safari 5+ on OS X 10.6+.