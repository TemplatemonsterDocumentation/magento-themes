		
<h3>Загрузка и разархивация</h3>

<p>Для начала работы с Magento, требуется загрузить файлы на хостинг сервер. Это можно сделать при помощи файлового менеджера хостинга или альтернативного FTP менеджера.</p>
            
<ol>
  <li>Выделите файлы 'unzip.php' и 'fullpackage.zip' и загрузите на сервер (
      <i class="icon-film"> </i><a href="/help/how-upload-files-server-2.html" target="_blank"> Как загрузить файлы на сервер.</a>
      )</li>
  <li>Введите путь к файлу  'unzip.php' на сервере(<i class="muted">http://your_domain_name/unzip.php</i>) в адресной строке браузера<abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."></abbr>.</li>
  <li>Должно появиться следующее окно:</li>
</ol>
          
<figure class="img-polaroid"><img src="img/magento/complete-install-unzip-php.jpg" alt="Unzip.php initial screen."></figure>
<p class="muted text-center">Рис 1. Стартовый экран скрипта Unzip.php.</p>
          
<ol start="5">
  <li>В поле <b>'Choose your zip file (Выберите файл zip)'</b> выберите загруженный файл <b>fullpackage.zip file</b>.</li>
  <li>В поле <b>'Unzip to (Распаковать в)'</b> укажите директорию, куда нужно распаковать файлы.</li>
  <li>Нажмите кнопку <b>'Unzip  (Распаковать)'</b>, чтобы распаковать файлы.</li>
</ol>
          
<p class="alert alert-warning"><span>Задайте правильные разрешения на папку, куда нужно разархивировать файлы. Разрешения должны быть  CHMOD 755 или 777 в зависимости от конфигурации сервера. </span></p>
		
