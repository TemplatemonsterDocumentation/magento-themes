<h2 class="item7">Выводы</h2>
<p>Движок Magento - это замечательное решение для вашего онлайн магазина. Он по умолчанию содержит все модули необходимые для организации эффективных продаж. Открытый исходный код предоставляет вам огромные возможности для создания интернет-магазинов. Но из-за сложности структуры этого движка вам потребуется некоторое время, чтобы освоить все его возможности. Вам понадобится узнать гораздо больше, чем включает эта инструкция. </p>
<p>Чтобы стать настоящим профессионалом Magento, вам потребуются следующие ресурсы:</p>
<h4 id="useful_resources">Полезные ресурсы</h4>
<ul class="marked-list">
   <li><a href="https://zemez.io/magento/support/">ZEMEZ Support</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">Официальное Руководство Пользователя Magento</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento ВИКИ</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">База Знаний</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Форум Magento</a></li>
    <li><a target="_blank" href="/help/ru/ecommerce/magento/magento-tutorials/">Magento туториалы</a></li>
</ul>
<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Чат</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"  target="_blank">Тикет-система</a></li>
</ul>
<h4>Загрузка данных с серверов Google</h4> 
В некоторых странах существуют проблемы с подключением к серверам Google. Это может привести к загрузке шрифтов Google Fonts с Google CDN. Для решения проблемы следуйте инструкциям:
<ol class="index-list"> 
    <li>Откройте файл <strong>app\design\frontend\default\theme***\template\page\html\head.phtml</strong></li> 
    <li>Найдите строку: <br> 
    <pre class="prettyprint linenums">  &lt;link href='//fonts.googleapis.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
    <li>Замените её на следующую: <br> 
    <pre class="prettyprint linenums">  &lt;link href='//fonts.useso.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
</ol>