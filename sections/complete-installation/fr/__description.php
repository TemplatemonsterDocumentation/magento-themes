<h2 class="item7"></i> Conclusion</h2>
<p>L'engine Magento est une excellente solution pour votre boutique en ligne. Le package d'engine par défaut contient tous les modules nécessaires pour faire de bonnes ventes. Le côté open source vous permet d'offrir d'incroyables possibilités à vos clients. Cependant, à cause de la structure assez complexe de l'engine, une utilisation avancée de Magento demandera beaucoup de temps et d'inspiration. Il vous faudra bien plus que ce manuel.</p>
<p>Les ressources suivantes vous aideront à devenir un vrai professionnel Magento:</p>
<h4 id="useful_resources">Ressources utiles</h4>
<ul class="marked-list">
<li><a href="https://zemez.io/magento/support/">ZEMEZ Support</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">Le Guide d'Utilisateur Officiel de Magento</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Wiki de Magento</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">Base de Connaissances</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Forum Magento</a></li>
    <li><a target="_blank" href="/help/ecommerce/magento/magento-tutorials/">Tutoriels Magento</a></li>
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