<h3>Background Video</h3>
Para añadir un vídeo de fondo es necesario utilizar el plugin<a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a>, que le permite mostrar un video de Youtube. El vídeo puede ser añadido por medio de un bloque estático, incluyendo el archivo de comandos <strong>jquery.mb.YTPlayer.js</strong> y configurando sus correspondientes atributos para el elemento que mostrará el vídeo.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Vamos a destacar los parámetros básicos para el atributo <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>es un enlace al vídeo que desea mostrar como un fondo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>calidad del video mostrado ('por defecto' o "pequeño", "mediano", "grande", "HD720", "HD1080", "alta resolución")..</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>por defecto, el "self" se utilizará para indicar el bloque, que contendrá el vídeo, si se ha inicializado en el script.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td>ajusta la transparencia del vídeo (valores de 0 a 1).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>activa/desactiva la repetición del vídeo (verdadero/falso).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>activa la muestra de los controles.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>es un sonido de cancelación.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>indica el segundo desde el que se iniciará el video.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>indica el segundo en el que el video se dentendrá. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>activa la reproducción automática del vídeo.</td>
	</tr>
</table>		