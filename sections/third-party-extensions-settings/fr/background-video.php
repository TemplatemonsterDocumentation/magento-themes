<h3>Vidéo de fond</h3>
Pour mettre en œuvre une vidéo de fond vous devez utiliser  le plugin <a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a>, qui permet d'afficher des vidéos YouTube. La vidéo peut être ajouté à l'aide du bloc statique, y compris le fichier de script <strong>jquery.mb.YTPlayer.js</strong> et en ajoutant des attributs correspondants fixés pour l'élément qui affichera la vidéo.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Nous désirons souligner ici les paramètres fondamentaux pour l'attribut: <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>est un lien pour la vidéo que vous souhaitez afficher comme une de fond.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>la qualité de la vidéo affichée («défaut» ou «petit», «moyen», «grand», «HD720", "HD1080", "haute résolution").</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>par défaut, «self» est utilisé pour indiquer le bloc, qui contiendra la vidéo, si elle est initialisée dans le script.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td>règle la transparence de la vidéo par les valeurs de 0 à 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>active / désactive la reprise de la vidéo (vrai / faux).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>permet d'afficher les contrôles.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>est une annulation de son.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>détermine la seconde à partir de laquelle la vidéo démarre.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>détermine la seconde sur laquelle la vidéo s'arrête. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>permet  l'autostarter de la vidéo.</td>
	</tr>
</table>		