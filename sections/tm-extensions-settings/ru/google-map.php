<h3>Google Map</h3>
<p>Данный модуль позволяет вам вставить Google карту на вашем сайте Magento. По умолчанию, модуль предоставляет две карты: для страницы контактов и карту, которая отображается в футере других страниц. <br>Обе карты можно настроить в админ панели Magento: <strong>System > Configuration > Templatemonster > Google Map</strong> секция.</p>

<ol class="index-list">
	<li>
		Блок <strong>Embed Map Settings</strong> отвечает за вывод карты в футере всех страниц, кроме страницы контактов.
	</li>
	<li>
		Блок <strong>Contacts Map Settings</strong> отвечает за вывод карты непосредственно на странице контактов.<figure class="img-polaroid"><img src="img/magento/googlemap-1.jpg" alt="" /></figure>
	</li>
	<li>
		Обе секции имеют одни и те же опции для настройки внешнего вида карты.<figure class="img-polaroid"><img src="img/magento/googlemap-2.jpg" alt="" /></figure>
	</li>
</ol>
<p>Рассмотрим опции модуля:</p>

<table class="options-table">
	<tr>
		<td class="col-1"><strong>API key</strong></td>
		<td>-</td>
		<td>Google Api Key необходим для корректной работы карты. Вы можете получить и активировать его, перейдя по следующей <a href="https://code.google.com/apis/console/" target="_blank">ссылке</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Coordinates</strong></td>
		<td>-</td>
		<td>координаты местоположения, которое будет находиться по центру отображаемой карты. Эти координаты вы можете получить через сервис <a href="http://maps.google.com/" target="_blank">Google Maps</a> или же на следующем <a href="http://www.mapcoordinates.net/" target="_blank" rel="nofollow">сайте</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Sensor</strong></td>
		<td>-</td>
		<td>включение/отключение геолокации.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Zoom</strong></td>
		<td>-</td>
		<td>значение увеличения карты (не должно превышать 8).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map Type</strong></td>
		<td>-</td>
		<td>тип отображаемой карты (roadmap, satelite, hybrid, и т.д.).</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map width</strong></td>
		<td>-</td>
		<td>ширина карты.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Map height</strong></td>
		<td>-</td>
		<td>высота карты.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Styles</strong></td>
		<td>-</td>
		<td>стиль отображения карты. Для изменения внешнего вида карты, используйте стили с сайта <a href="https://snazzymaps.com/" target="_blank" rel="nofollow">snazzymaps</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Disable UI</strong></td>
		<td>-</td>
		<td>скрывает элементы управления картой.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Scrollwheel</strong></td>
		<td>-</td>
		<td>отключает скролинг колесиком мышки.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Draggable</strong></td>
		<td>-</td>
		<td>включает возможность передвигать карту, зажав левую кнопку мышки или пальцами на touch (сенсорных) устройствах.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Add marker</strong></td>
		<td>-</td>
		<td>добавляет маркер (указатель) на карту.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker coordinates</strong></td>
		<td>-</td>
		<td>устанавливает координаты маркера.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker title</strong></td>
		<td>-</td>
		<td>текст, который будет отображаться в тултипе, появляющемся при наведении на маркер.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Marker image</strong></td>
		<td>-</td>
		<td>путь к картинке маркера, если вы хотите заменить стандартную. Картинка должна находиться в папке <strong>skin/frontend/default/themeXXX/images/</strong> вашей установки Magento.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Infowindow</strong></td>
		<td>-</td>
		<td>дополнительная информация, которая будет отображаться при клике на маркер.</td>
	</tr>
</table>
