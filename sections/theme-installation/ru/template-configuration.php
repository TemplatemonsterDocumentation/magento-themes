<h3>Настройка шаблона</h3>
<p>Мы рассмотрим настройку шаблона на конкретном примере. Настроим его таким образом, чтобы он повторил вид темы на странице предпросмотра (Live Demo) не затрагивая базу ваших товаров.</p>

<h4>Активируйте новую тему</h4>
<ol class="index-list">
	<li>Откройте панель управления Magento и выберите в боковом меню <strong>Stores > Configuration</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-1.jpg" alt="" /></figure>
	</li>
	<li>В меню <strong>General</strong> выберите вкладку <strong>Design</strong>. Кликните на вкладку <strong>Design Theme</strong> и в селекте <strong>Design Theme</strong> выберите нужную вам тему и нажмите кнопку <strong>Save Config</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-2.jpg" alt="" /></figure>
	</li>	
</ol>

<h4>Переиндексация данных</h4>
<ol class="index-list">
	<li>Откройте панель управления Magento и выберите в боковом меню <strong>System > Index Management</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-3.jpg" alt="" /></figure>
	</li>
	<li>Нажмите на селект в первой колонке и выберите "<strong>Select All</strong>" из списка. 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-4.jpg" alt="" /></figure>
	</li>
	<li>Сверху в селекте "<strong>Actions</strong>" выберите "<strong>Update on save</strong>". Тем самым вы указываете, что при любом сохранении настроек в админке, реиндекс будет проходить автоматически для указанных элементов. 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-5.jpg" alt="" /></figure>
	</li>
	<li>Нажмите кнопку "<strong>Submit</strong>".</li>
	<li>Сохраняйте терпение. Эта операция может потребовать некоторое время.</li>
</ol>

<h4>Отключение кеширования </h4>
<p>Для того, чтобы все вносимые изменения были мгновенно видны на вашем магазине нужно отключить кеширование данных. Это избавит вас от необходимости постоянного обновления кеша после каждого внесённого изменения. Снова включим его после того, как настроим магазин.</p>
<ol class="index-list">
	<li>Откройте панель управления Magento и выберите в боковом меню <strong>System > Cache Management</strong>. 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-6.jpg" alt="" /></figure>
	</li>
	<li>Нажмите на селект в первой колонке и выберите "<strong>Select All</strong>" из списка. 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-7.jpg" alt="" /></figure>
	</li>
	<li>Вверху в поле "<strong>Refresh</strong>" выберите "<strong>Disable</strong>".
		<figure class="img-polaroid"><img src="img/magento/Theme-set-8.jpg" alt="" /></figure>
	</li>
	<li>Нажмите кнопку "<strong>Submit</strong>".</li>
</ol>
		