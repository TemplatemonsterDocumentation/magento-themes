<h2 class="item7"><i class="icon-question-sign"></i> Conclusioni</h2>
        <p>Il motore Magento è un'ottima soluzione per il tuo negozio online. Il pacchetto di default del motore contiene già tutti i moduli necessari per iniziare a vendere con successo. Essendo open source, ti permette di offrire ai tuoi clienti possibilità davvero notevoli. Data però la struttura piuttosto complessa del motore, l'uso avanzato di Magento richiede tempo e dedizione. Per gli usi più avanzati, serve molto di più di quanto esposto in questo manuale. </p>
        <p>Queste risorse ti aiuteranno a diventare un vero esperto di Magento:</p>
        <h4 id="useful_resources">Risorse Utili</h4>
        <ul>
            <li><a target="_blank" href="http://www.magentocommerce.com/support/magento-user-guide-book">The Official Magento User Guide</a></li>
            <li><a target="_blank" href="http://www.magentocommerce.com/wiki/">Magento Wiki</a></li>
            <li><a target="_blank" href="http://www.magentocommerce.com/knowledge-base">Knowledge Base</a></li>
            <li><a target="_blank" href="http://www.magentocommerce.com/boards/">Magento Forum</a></li>
            <li><a target="_blank" href="/help/ecommerce/magento/magento-tutorials/">Magento tutorials</a></li>
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
            <li>Locate the line:<pre class="prettyprint">   &lt;link href='//fonts.googleapis.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
            <li>Replace it with the following: <br> 
            <pre class="prettyprint">   &lt;link href='//fonts.useso.com/css?family=[---your_web_font_name_here---]' rel='stylesheet' type='text/css' /></pre></li> 
        </ol>