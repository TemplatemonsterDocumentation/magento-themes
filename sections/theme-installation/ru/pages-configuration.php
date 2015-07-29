<h3>Настройка страниц</h3>
<p>Для полного соответствия приобретённй вами темы тому, что вы видели у нас на Live Demo шаблона необходимо соответствующим образом настроить страницы магазина. Мы предоставляем все исходные файлы с кодом страниц. Их нужно внести в Админ панель магазина по инструкции ниже используя таблицу настроек. Таблица настроек находится на странице <strong>Technical details</strong> на Live Demo приобретённого вами шаблона. Ссылка на неё есть в файле документации, который вы получили вместе с шаблоном:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Documentation</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>Больше всего изменения затронут главную страницу шаблона, которая может содержать следующие элементы: баннеры, слайдер, галерею и т.д.</p>
<div class="alert alert-warning"><span>Мы рекомендуем отключить WYSIWYG редактор. Для того, чтобы сделать это, в верхнем меню панели управления, выберите <strong>System &gt; Configuration</strong>. Откройте раздел "<strong>Content Management</strong>" и в окне <strong>WYSIWYG Options</strong> переключите "<strong>Enable WYSIWYG Editor</strong>" на "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/pages-setting-1.jpg" alt="" /></figure>
</div>
<p class="alert alert-warning"><span>Если вы уже вносили изменения в код ваших страниц и хотите к ним добавить наш код не затрагивая ваших изменений, то лучше обратитесь к специалисту, или перед началом работы сделайте резервную копию.</span></p>
<ol class="index-list">
	<li>В верхнем меню выберите <strong>CMS > Pages</strong>. Тут находятся все страницы магазина. <strong>Home page</strong>, <strong>About Us</strong> и <strong>Customer Service</strong> уже должны быть доступны, так что вам не потребуется их добавлять. Вам нужно только обновить HTML и XML содержимое страниц. Откройте любую из них для того, чтобы получить доступ к содержимому. 
		<figure class="img-polaroid"><img src="img/magento/pages-setting-2.jpg" alt="" /></figure>
	</li>
	<li>Откройте страницу и выберите вкладку <strong>Content</strong>. Она содержит HTML код страницы. Вы можете взять необходимый код из соответствующего исходного файла. Список исходных файлов вы можете найти в таблице на странице "Template Settings" Live Demo вашего шаблона. Скопируйте код из исходного файла и вставьте его в раздел <strong>content</strong>. 
		<figure class="img-polaroid"><img src="img/magento/pages-setting-3.jpg" alt="" /></figure>
	</li>
	<li>Когда закончите с кодом, перейдите на вкладку <strong>"Design"</strong>. Она содержит XML код страницы. XML код позволяет вам встроить статические блоки Magento и виджеты на страницу. XML код должен быть скопирован так же, как и HTML из исходного файла. Вставьте новый код в раздел "<strong>Layout Update XML</strong>". 
		<figure class="img-polaroid"><img src="img/magento/pages-setting-4.jpg" alt="" /></figure>
	</li>
	<li>Не забудьте выбрать необходимую настройку "<strong>Layout</strong>".</li>
	<li>В случае, если вам нужна новая страница, нажмите кнопку <strong>"Add New Page"</strong> в правом верхнем углу.</li>
</ol>

<p>При любых сложностях обратитесь к подробной инструкции <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">Как установить страницы демо-контента вручную</a>.</p>		