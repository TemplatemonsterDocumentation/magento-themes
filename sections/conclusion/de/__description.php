<h2 class="item7"><i class="icon-question-sign"></i> Fazit</h2>
<p>Magento Engine ist eine wunderbare Lösung für Ihren Online-Shop. Sie enthält standardmäßig alle Module, damit Sie erfolgreich Ihre Produkte verkaufen können. Offener Quellcode gibt Ihnen die ganze Breite von Möglichkeiten, damit Sie Online-Shops erstellen können. Die Struktur dieser Engine ist nicht ganz einfach, deshalb brauchen Sie noch Zeit, um sich mit ihr bekannt zu machen. Außer Information, die diese Anleitung enthält, müssen Sie noch mehr erfahren. </p>
<p>Um Magento Fachmann zu werden, benötigen Sie folgende Ressourcen:</p>
<h4 id="useful_resources">Nützliche Ressourcen</h4>
<ul>
    <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">Offizielle Anleitung des Magento Benutzers</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento Wiki</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">Wissensdatenbank</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Magento Forum</a></li>
    <li><a target="_blank" href="/help/de/ecommerce/magento/magento-tutorials/">Magento Tutorials</a></li>
</ul>
<h4>Help and Support</h4>
<ul class="list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"  target="_blank">Help ticket system</a></li>
</ul>


<h4>Loading data from Google servers</h4> 
Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts from Google CDN. To resolve these issues please do the following:
<ol> 
    <li>Open <strong>app\design\frontend\default\theme***\template\page\html\head.phtml</strong></li> 
    <li>Locate the line:
<pre class="prettyprint">   &lt;link href='//fonts.googleapis.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
    <li>Replace it with the following: <br> 
<pre class="prettyprint">   &lt;link href='//fonts.useso.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
</ol>