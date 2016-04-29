<h3>Background Video</h3>
In order to implement the background video, you need to use the<a href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a> plug-in, which allows to display YouTube video.Video can be added by means of the static block, including the script file <strong>jquery.mb.YTPlayer.js</strong> and by adding corresponding attributes set for the element which will display the video.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Let’s emphasize basic parameters for the <strong>data-property</strong> attribute:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>is a link for the background video you want to display.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>displayed video quality (‘default’ or “small”, “medium”, “large”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>by default, “self” is  used to indicate the block, which will contain the video, if it is initialized in the script.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> adjusts the video transparency by values from 0 to 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>enables/disables video replay (true/false).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>enables the controls display.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>is a sound cancellation.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>determines the second from which the video will start.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>determines the time at which the video will stop. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>enables video autoplay.</td>
	</tr>
</table>		