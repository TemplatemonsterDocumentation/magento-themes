<h3>Настройка статических блоков</h3>
<p>После настройки страниц нужно настроить статические блоки. Процесс очень похож - вам нужно скопировать код из исходных файлов и вставить в соответствующие поля админ панели. Пользоваться нужно аналогичной таблицей, только для статических блоков.</p>
<ol class="index-list"> 
	<li>В верхнем меню выберите <b>CMS > Static Blocks</b></li>
	<li>Нажмите кнопку "Add New block" в правом верхнем углу для добавления нового блока.</li>
	<li>Укажите имя блока и идентификатор. Вы можете найти необходимые данные в таблице настроек шаблона (см. пункт настройки страниц).</li>
	<li>Откройте исходные файлы блоков и скопируйте оттуда HTML код в раздел content.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting5.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting6.png" alt="" /></figure>

<p class="alert alert-info"><span>Внимание: Некоторые шаблоны не содержат статических блоков, так что таблица может быть пустой. </span></p>
<p class="alert alert-info"><span>Исходные файлы для статических блоков находятся в папке "<b>sources\demo\static_blocks\</b>" архива шаблона. </span></p>

<p>Как вывести наши статик блоки?</p>

<ol class="index-list"> 
	<li>В верхнем меню выберите <b>CMS > Widgets</b></li>
	<li>Нажмите кнопку "Add New Widget Instance" в правом верхнем углу для добавления виджета.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Укажите тип виджета <strong>CMS Static Block</strong>, тему к которой необходимо применить виджет и нажмите continue.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure></li>
	<li>В новом окне, в поле <strong>Widget Instance Title</strong> впишите название виджета, которое будет отображаться в админ панели. В поле <strong>Assign to Store Views</strong> вы выбираете представления магазина, для которых будет отображаться ваш виджет. В блоке <strong>Layout Updates</strong> нажмите на кнопку <strong>Add Layout Update</strong>. В поле <strong>Display On</strong> вы можете выбрать представление для вывода виджета. В зависимости от выбранного представления у вас появятся дополнительные поля, которые вам необходимо заполнить.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>В левом сайдбаре выберите закладку <strong>Widget Options</strong> и выбирайте тот статик блок, который вам нужен. Не забудьте сохранить ваши изменения.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
</ol>
<p>После окончания настроек страниц и статических блоков ваш магазин готов к работе.</p>