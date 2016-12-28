<h3>Google map</h3>
<p>The given module allows you to embed the Google map to your Magento website. By default, module provides you with three maps: the map on the contact page, the map in the footer of other pages and the map on the Home page 
<br>All maps can be configured via Magento Admin Panel in <strong>Store > Configuration > Templatemonster > Google Map</strong>.</p>

<ol class="index-list">
	<li>
		<strong>General</strong> section allows you to enter the API key.
		<figure class="img-polaroid"><img src="img/magento/map-1.jpg" alt="" /></figure>
	</li>
	<li>
		<strong>Home page map settings</strong> section allows you to display the map on the home page.
		<figure class="img-polaroid"><img src="img/magento/map-2.jpg" alt="" /></figure>
	</li>
	<li>
		<strong>Contacts page map settings</strong> section allows you to display the map on the contacts page.
		<figure class="img-polaroid"><img src="img/magento/map-3.jpg" alt="" /></figure>
	</li>
	<li>
		<strong>Footer map settings</strong> section allows you to display the map in site footer.
		<figure class="img-polaroid"><img src="img/magento/map-4.jpg" alt="" /></figure>
	</li>
</ol>	

<p>Lets review the options available:</p>
<table class="options-table">
	<tr>
		<td class="col-1"><strong>API key</strong></td>
		<td>-</td>
		<td>Google Api Key is necessary for the correct work of the map. You can receive and activate it by following the <a href="https://code.google.com/apis/console/" target="_blank">link</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Coordinates</strong></td>
		<td>-</td>
		<td>location data which will be shown in the centre of the displayed map. You can get this location data using <a href="http://maps.google.com/" target="_blank">Google Maps</a> website or using <a href="http://www.mapcoordinates.net/" target="_blank" rel="nofollow">this one</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Zoom</strong></td>
		<td>-</td>
		<td>enlargement value (should not exceed 8).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map Type</strong></td>
		<td>-</td>
		<td>type of the displayed map (roadmap, satellite, hybrid, etc.).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map width</strong></td>
		<td>-</td>
		<td>width of the map.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map height</strong></td>
		<td>-</td>
		<td>height of the map in pixels.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Styles</strong></td>
		<td>-</td>
		<td>display style of the map. In order to change the appearance of the map, use the styles provided on the website <a href="https://snazzymaps.com/" target="_blank" rel="nofollow">snazzymaps</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Disable UI</strong></td>
		<td>-</td>
		<td>hides the elements which control the map.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Scrollwheel</strong></td>
		<td>-</td>
		<td>disables the mouse scroll option.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Draggable</strong></td>
		<td>-</td>
		<td>enables you to move the map using the left button of the mouse or your fingers for touch (sensor) devices.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show on</strong></td>
		<td>-</td>
		<td>defines if your map will be displayed before or after the footer. Available for 'Home page' only.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Selector</strong></td>
		<td>-</td>
		<td>allows you to define the html class or id of the item, that will go right before the map. Available for the 'Footer' only.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Markers</strong></td>
		<td>-</td>
		<td>allows you to add a few markers with different coordinates onto the same map.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Icon</strong></td>
		<td>-</td>
		<td>custom image filename (with the extension specified), if you need to replace the default marker with your own one, e.g., marker.png. You should upload the image to the <strong>pub/media/googlemap/</strong> folder of your Magento installation.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Coordinates</strong></td>
		<td>-</td>
		<td>sets the marker coordinates.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Infowindow</strong></td>
		<td>-</td>
		<td> tooltip text that will show up on click on the marker. Any html-structure is allowed.</td>
	</tr>	
</table>