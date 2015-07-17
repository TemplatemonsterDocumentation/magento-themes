<h3>Фоновое видео</h3>
Для реализации фонового видео нужно использовать плагин <a class="" href="https://github.com/pupunzi/jquery.mb.YTPlayer/wiki" target="_blank">jquery.mb.YTPlayer</a>, который позволяет отображать YouTube видео.
Видео можно добавить с помощью статического блока, подключив файл скрипта <strong>jquery.mb.YTPlayer.js</strong> и добавив соответствующий набор атрибутов для элемента, в котором это видео будет отображаться.
<figure class="img-polaroid"><img src="img/magento/video.jpg" alt="" /></figure>
<p>Выделим основные параметры для атрибута <strong>data-property</strong>:</p>
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>videoURL</strong></td>
		<td>-</td>
		<td>ссылка на видео, которое вы хотите отобразить как фоновое.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>quality</strong></td>
		<td>-</td>
		<td>качество отображаемого видео (‘default’ или “small”, “medium”, “large”, “hd720”, “hd1080”, “highres”).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>containment</strong></td>
		<td>-</td>
		<td>по умолчанию, “self” используется для указания блока, который будет содержать видео, если инициализировать его в скрипте.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>opacity</strong></td>
		<td>-</td>
		<td> регулирует прозрачность видео значениями от 0 до 1.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>loop</strong></td>
		<td>-</td>
		<td>включает/отключает повтор видео (true/false).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>showControls</strong></td>
		<td>-</td>
		<td>включает отображение элементов управления.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>mute</strong></td>
		<td>-</td>
		<td>отключение звука.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>startAt</strong></td>
		<td>-</td>
		<td>устанавливает секунду, с которой начнёт проигрываться видео.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>stopAt</strong></td>
		<td>-</td>
		<td>устанавливает секунду, на которой видео будет заканчиваться. </td>
	</tr>
	<tr>
		<td class="col-1"><strong>autoplay</strong></td>
		<td>-</td>
		<td>включает автоматическое проигрывание видео.</td>
	</tr>
</table>		