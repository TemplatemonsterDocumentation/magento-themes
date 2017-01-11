<h2 class="item7">Sonuç</h2>
<p>Magento, sanal mağazanız için mükemmel bir çözüm aracıdır. Paketin içinde, başarılı bir satış sağlayabilmeniz için gereken tüm modüller bulunmaktadır. Açık kaynak, müşterilerinize muhteşem seçenekler sunmanızı sağlar. Yine de ileri düzeyde bir kullanım için, Magento'nun detaylı yapısı açısından, buradaki kılavuzdan daha fazlasına ihtiyacınız olabilir.</p>
<p>Aşağıdaki kaynaklar tam bir Magento ustası olmanıza yardımcı olacaktır:</p>
<h4 id="useful_resources">Kullanışlı kaynaklar</h4>
<ul class="marked-list">
    <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">Resmi Magento Kullanıcı Kılavuzu</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento Wiki</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">Bilgi Tabanı</a></li>
    <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Magento Forum</a></li>
    <li><a target="_blank" href="/help/ecommerce/magento/magento-tutorials/">Magento rehberleri</a></li>
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
<pre class="prettyprint">
    &lt;link href='//fonts.googleapis.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
    <li>Replace it with the following: <br> 
<pre class="prettyprint">
    &lt;link href='//fonts.useso.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
</ol>