		
<h3>Импортирование демонстрационных данных</h3>
<p>Архив шаблона Magento содержит файл с демонстрационными данными (dump.sql или dump.gz). Этот файл находится в папке <strong>/sources/sample_data</strong> вашего шаблона. Он позволяет вам установить демонстрационные данные, чтобы ваш сайт после установки шаблона выглядел так же, как на демо версии шаблона.</p>
<p class="alert alert-danger"><span>Не используйте файл <strong>dump.sql.gz</strong>, если у вас есть уже работающий магазин. Импорт файла dump.sql.gz удалит все добавленные туда товары. Если вы не хотите устанавливать демонстрационные данные, то устанавливайте Magento на пустую базу данных. Пропустите этап установки демонстрационных данных в этой инструкции. </span></p>	
<p>Для установки файла с дампом выполните следующие действия:</p>
<ol class="index-list">
	<li>В панеле управления базами данных (PhpMyAdmin) выберите ту базу данных, которую планируете использовать для установки Magento Commerce (Вы создали её выполнив действия предыдущего пункта инструкции).
		<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Перейдите на вкладку <strong>"Import"</strong> и нажмите кнопку <strong>"Browse"</strong>.
		<figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Перейдите в папку <strong>"/sources/sample_data"</strong> вашего шаблона и выберите файл <strong>dump.sql.gz.</strong> Нажмите кнопку <strong>"GO"</strong>. 
		<figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Процесс импортирования может занять несколько минут.</li>
</ol>