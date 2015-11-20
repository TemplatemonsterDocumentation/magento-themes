<h3>Настройка статических блоков</h3>
<p>После настройки страниц нужно настроить статические блоки. Процесс очень похож - вам нужно скопировать код из исходных файлов и вставить в соответствующие поля админ панели. Пользоваться нужно аналогичной таблицей, только для статических блоков.</p>
<ol class="index-list"> 
	<li>В верхнем меню выберите <strong>Content > Blocks</strong>. </li>
	<li>Нажмите кнопку <strong>"Add New block"</strong> в правом верхнем углу для добавления нового блока. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Укажите имя блока и идентификатор. Вы можете найти необходимые данные в таблице настроек шаблона (см. пункт настройки страниц).</li>
	<li>Откройте исходные файлы блоков и скопируйте оттуда HTML код в раздел content.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>Внимание: Некоторые шаблоны не содержат статических блоков, так что таблица может быть пустой. </span></p>
<p class="alert alert-info"><span>Исходные файлы для статических блоков находятся в папке "<strong>sources\demo\static_blocks\</strong>" архива шаблона. </span></p>

<h4>Как вывести наши статик блоки?</h4>

<ol class="index-list"> 
	<li>В верхнем меню выберите <strong>Content > Widgets</strong></li>
	<li>Нажмите кнопку <strong>"Add Widget"</strong> в правом верхнем углу для добавления виджета.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Укажите тип виджета <strong>CMS Static Block</strong>, тему к которой необходимо применить виджет и нажмите <strong>Continue</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>В новом окне, в поле <strong>Widget Title</strong> впишите название виджета, которое будет отображаться в админ панели. В поле <strong>Assign to Store Views</strong> вы выбираете представления магазина, для которых будет отображаться ваш виджет. В блоке <strong>Layout Updates</strong> нажмите на кнопку <strong>Add Layout Update</strong>. В поле <strong>Display On</strong> вы можете выбрать представление для вывода виджета. В зависимости от выбранного представления у вас появятся дополнительные поля, которые вам необходимо заполнить.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>В левом сайдбаре выберите закладку <strong>Widget Options</strong> и выбирайте тот статик блок, который вам нужен. Не забудьте сохранить ваши изменения.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>После окончания настроек страниц и статических блоков ваш магазин готов к работе.</p>