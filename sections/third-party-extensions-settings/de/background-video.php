<h3>Hintergrundvideo</h3>
<p>Um das Hintergrundvieo nutzen zu können, sollen Sie den Plugin <a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a> nutzen, der ermöglicht, YouTube Video anzuzeigen. Das Video kann mit Hilfe von dem statischen Block hinzugefügt werden, indem Sie die Skriptdatei <strong>jquery.mb.YTPlayer.js</strong> aktivieren und entsprechende eine Reihe von Attributen für das Element, in dem dieses Video angezeigt wird, hinzufügen. </p>
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Lassen Sie uns die grundlegenden Parameter für das Attribut anschauen <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>der Link zum Video, das Sie als Hintergrund anzeigen möchten.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>die Qualität des angezeigten Videos (‘default’ oder “small”, “medium”, “large”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>standardmäßig wird “self” benutzt, um den Block zu definieren, in dem das Video sich befinden wird (wenn Sie es in dem Skript initialisieren).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> regelt die Transparenz des Videos als Wert zwischen 0 und 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>aktiviert/deaktiviert die Videowiedergabe (true/false).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>aktiviert die Darstellung von Steuerelementen.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>deaktiviert den Sound.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>installiert die Sekunde, ab die das Video abgespielt wird.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>installiert die Sekunde, in der das Video beendet wird. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>aktiviert automatische Videowiedergabe.</td>
	</tr>
</table>		