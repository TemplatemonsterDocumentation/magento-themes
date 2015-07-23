<h3>Google Map</h3>
<p>Das jeweilige Modul ermöglicht Ihnen die Google Karte in Ihre Magento Webseite einzufügen. Standardmäßig enthält das Modul zwei Karten: die erste ist für die Kontaktseite und die zweite wird im Footer auf anderen Seiten angezeigt. <br>Die beiden Karten können im Control Panel Magento eingestellt werden: <strong>System > Configuration > Templatemonster > Google Map</strong> Sektion.</p>

<ol class="index-list">
	<li>
		Der Block <strong>Embed Map Settings</strong> zeigt die Karte im Footer auf allen Seiten außer der Kontaktseite an.
	</li>
	<li>
		Der Block <strong>Contacts Map Settings</strong> zeigt die Karte nur auf der Kontaktseite an.<figure class="img-polaroid"><img src="img/magento/googlemap.jpg" alt="" /></figure>
	</li>
	<li>
		Die beiden Sektionen haben die gleichen Einstellungen für das Aussehen der Karte.<figure class="img-polaroid"><img src="img/magento/googlemap-1.jpg" alt="" /></figure>
	</li>
</ol>
<p>Lassen Sie uns die Moduloptionen anschauen:</p>

<table class="options-table">
	<tr>
		<td class="col-1"><strong>API key</strong></td>
		<td>-</td>
		<td>Google Api Key ist nötig, damit die Karte korrekt funktionieren kann. Sie können es erhalten und aktivieren, indem Sie diesem Link <a href="https://code.google.com/apis/console/" target="_blank">folgen</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Coordinates</strong></td>
		<td>-</td>
		<td>Koordinaten, die sich in der Mitte der angezeigten Karte befinden. Diese Koordinaten können Sie entweder über den Service <a href="http://maps.google.com/" target="_blank">Google Maps</a> oder auf der folgenden <a href="http://www.mapcoordinates.net/" target="_blank" rel="nofollow">Webseite erhalten</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Sensor</strong></td>
		<td>-</td>
		<td>aktiviert/deaktiviert die Geolocation.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Zoom</strong></td>
		<td>-</td>
		<td>der Wert der Kartenvergrößerung (muss nicht mehr als 8 sein).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map Type</strong></td>
		<td>-</td>
		<td>die Art der angezeigten Karte (roadmap, satelite, hybrid, usw.).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map width</strong></td>
		<td>-</td>
		<td>die Breite der Karte.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map height</strong></td>
		<td>-</td>
		<td>die Höhe der Karte.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Styles</strong></td>
		<td>-</td>
		<td>der Stil der angezeigten Karte. Um das Aussehen der Karte zu ändern, nutzen Sie die Stile der Webseite <a href="https://snazzymaps.com/" target="_blank" rel="nofollow">snazzymaps</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Disable UI</strong></td>
		<td>-</td>
		<td>versteckt Kartensteuerelemente.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Scrollwheel</strong></td>
		<td>-</td>
		<td>deaktiviert den Scrollrad.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Draggable</strong></td>
		<td>-</td>
		<td>ermöglicht die Karte zu verschieben, indem man die linke Maustaste oder touch (auf Touch-Geräte) festhält.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Add marker</strong></td>
		<td>-</td>
		<td>fügt den Marker (Markierung) zur Karte hinzu.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker coordinates</strong></td>
		<td>-</td>
		<td>installiert die Marker-Koordinaten.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker title</strong></td>
		<td>-</td>
		<td>der Text, der im Tooltip, sobald der Marker darüber ist, angezeigt wird.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker image</strong></td>
		<td>-</td>
		<td>der Pfad zum Markerbild, wenn Sie das Standardbild ersetzen möchten. Das Bild muss sich im Ordner <strong>skin/frontend/default/themeXXX/images/</strong> Ihrer Magento Installation befinden.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Infowindow</strong></td>
		<td>-</td>
		<td>zusätzliche Information, die beim Klick auf den Marker angezeigt wird.</td>
	</tr>
</table>
