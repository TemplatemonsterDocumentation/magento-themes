<h3>Video w Tle</h3>
Aby zaimplementować video w tle musisz użyć plug-inu <a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a>, który pozwala na wyświetlanie filmów z YouTube. 
Video może byc dodane jako statyczny blok, włączając plik skryptowy <strong>jquery.mb.YTPlayer.js</strong> i dodając korespondujące atrybuty, ustawione dla elementu wyświetlającego film.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Skupmy się na podstawowych parametrach atrybutu <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>jest linkie, video, jakie chcemy wyświetlić w tle.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>jakość wyświetlanego video (‘domyślne’ lub “niska”, “średnia”, “duża”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>domyślnie, “self” jest użyte do określenia bloku, który będzie zawierał video, jeśli zostało zainicjowane w skrypcie.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> dopasowuje przejrzystość video , wartości od 0 do 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>włącza/wyłącza powtórkę video (prawda/fałsz).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>zezwala na wyswietlania	przycisków sterowania.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>wyłącza dźwięki.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>określa sekundę, od której zacznie się video.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>określa sekundę, na której skończy się video. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>zezwala na autoodtwarzanie video.</td>
	</tr>
</table>		