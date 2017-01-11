<h3>Google map</h3>
<p>Данный модуль позволяет вам вставить Google карту на вашем сайте Magento. По умолчанию, модуль предоставляет три карты для: страницы контактов, главной страницы, футера. <br>Все карты можно настроить в админ панели <strong>Store > Configuration > Templatemonster > Google Map</strong>.</p>

<ol class="index-list">
	<li>
		Раздел <strong>General</strong> содержит опцию для ввода API ключа.
		<figure class="img-polaroid"><img src="img/magento/map-1.jpg" alt="" /></figure>
	</li>
	<li>
		Раздел <strong>Home page map settings</strong> отвечает за отображение карты на главной странице сайта.
		<figure class="img-polaroid"><img src="img/magento/map-2.jpg" alt="" /></figure>
	</li>
	<li>
		Раздел <strong>Contacts page map settings</strong> отвечает за отображение карты непосредственно на странице контактов.
		<figure class="img-polaroid"><img src="img/magento/map-3.jpg" alt="" /></figure>
	</li>
	<li>
		Раздел <strong>Footer map settings</strong> отвечает за отображение карты в футере.
		<figure class="img-polaroid"><img src="img/magento/map-4.jpg" alt="" /></figure>
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
		<td>высота карты в пикселях.</td>
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
		<td class="col-1"><strong>Show on</strong></td>
		<td>-</td>
		<td>позволяет выбрать отображение карты до или после футера. Эта настройка доступна только в секции Home page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Selector</strong></td>
		<td>-</td>
		<td>позволяет указать html class или id после которого будет отображаться карта. Эта настройка доступна только в секции Footer.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Markers</strong></td>
		<td>-</td>
		<td>используя данную секцию вы можете отобразить на карте несколько маркеров с разными координатами.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Icon</strong></td>
		<td>-</td>
		<td>название пользовательской картинки с указанием формата, если вы хотите заменить стандартную, к примеру, marker.png. Картинка должна находиться в папке <strong>pub/media/googlemap/</strong> вашей установки Magento.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Сoordinates</strong></td>
		<td>-</td>
		<td> - координаты маркера.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Infowindow</strong></td>
		<td>-</td>
		<td>текст, который будет отображаться во всплывающей подсказке, появляющейся при нажатии на маркер. Здесь вы можете использовать любую html-структуру.</td>
	</tr>	
</table>