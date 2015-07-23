<h2 class="item7">Conclusi&oacute;n</h2>
<p>El motor de Magento es una gran soluci&oacute;n para su tienda en l&iacute;nea. El paquete del motor predeterminado contiene todos los m&oacute;dulos necesarios para el &eacute;xito de ventas. El c&oacute;digo abierto le permite ofrecer posibilidades mercantes realmente sobresalientes para sus clientes. Sin embargo, debido a la compleja estructura del uso avanzado del motor de Magento necesitar&aacute; una gran cantidad de tiempo. Usted necesitar&aacute; mucho m&aacute;s que este manual. </p>
<p>Los siguientes recursos le ayudar&aacute;n a convertirse en un verdadero profesional de Magento:</p>
<h4 id="useful_resources">Recursos &uacute;tiles</h4>
<ul class="marked-list">
    <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">La Gu&iacute;a oficial del usuario de Magento</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento Wiki</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">Base de conocimiento</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Foro de Magento</a></li>
    <li><a target="_blank" href="/help/ecommerce/magento/magento-tutorials/">Manuales de Magento</a></li>
</ul>
<h4>Help and Support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"  target="_blank">Help ticket system</a></li>
</ul>


<h4>Loading data from Google servers</h4> 
Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts from Google CDN. To resolve these issues please do the following:
<ol class="index-list"> 
    <li>Open <strong>app\design\frontend\default\theme***\template\page\html\head.phtml</strong></li> 
    <li>Locate the line:
<pre class="prettyprint">   &lt;link href='//fonts.googleapis.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
    <li>Replace it with the following: <br> 
<pre class="prettyprint">   &lt;link href='//fonts.useso.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
</ol>