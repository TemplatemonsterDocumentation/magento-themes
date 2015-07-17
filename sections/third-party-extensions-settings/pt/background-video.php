<h3>Background Video</h3>
Para implementar o vídeo de fundo você precisar usar o plugin <a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a>, que exibe vídeos do YouTube.
			O vídeo pode ser incluído através do bloco estático, ao incluir o arquivo <strong>jquery.mb.YTPlayer.js</strong> e os atributos correspondentes para exibir o vídeo.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Vamos enfatizar o parâmetros báscos do atributo <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>é um link para o vídeo que você deseja mostrar como fundo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>qualidade do vídeo exibido (‘default’ ou “small”, “medium”, “large”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>por padrão, "self" é a palavra-chave usada para indicar o bloco que contém o vídeo, no caso de ser iniciado pelo script.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> muda a transparência do vídeo com valores entre 0 e 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>ativa/desativa a repetição do vídeo (true/false).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>mostra os controles.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>cancela o som do vídeo.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>determina em que segundo o vídeo vai começar.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>determina em que segundo o vídeo vai parar. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>ativa a reprodução automática do vídeo.</td>
	</tr>
</table>		