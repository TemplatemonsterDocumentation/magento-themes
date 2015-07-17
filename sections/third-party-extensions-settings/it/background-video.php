<h3>Video su sfondo</h3>
Per implementare un video sullo sfondo è necessario utilizzare il plugin <a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a> che permette di aggiungere video da YouTube. Il video può essere aggiunto utilizzando il blocco statico, incluso il file di script <strong>jquery.mb.YTPlayer.js</strong>, e aggiungendo gli attributi corrispondenti per l'elemento che riprodurrà il video.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Guardiamo nel dettaglio i parametri di base per l'attributo <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>è il link del video che desideri usare come sfondo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>qualità del video inserito (‘default’ o “small”, “medium”, “large”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>di default, “self” è utilizzato per indicare il blocco che contiene il video, se è inizializzato nello script.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> imposta la trasparenza del video con valori da 0 a 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>abilita/disabilita la riproduzione ripetuta del video (true/false).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>abilita la presenza dei controlli.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>disabilita l'audio.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>determina da che punto (da quale secondo) deve partire il video.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>determina a che punto (secondo) il video deve fermarsi. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>abilita l'autoriproduzione del video.</td>
	</tr>
</table>		