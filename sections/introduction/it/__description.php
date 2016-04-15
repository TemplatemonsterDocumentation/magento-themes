<h2 class="item1">Introduzione</h2>
<p>
    Grazie per aver scaricato Magento tema. Questa documentazione è costituito da più parti e le coperture
    l'intero processo di installazione e la configurazione di Magento tema partendo da zero.
</p>

<article id="whatismagento">
    <h3>Qual è Magento Commerce?</h3>
    <p>Magento è una piattaforma di e-commerce ricco di funzionalità costruito con la tecnologia open-source. Esso fornisce flessibilità e controllo sul look, contenuti e funzionalità del negozio e-commerce. Interfaccia di amministrazione intuitiva di Magento dispone potente marketing, ottimizzazione dei motori di ricerca e strumenti di gestione catalogo per dare i commercianti il potere di creare siti che sono su misura per le loro esigenze di business. Progettato per essere completamente scalabile e sostenuta da rete di sostegno di varie network, Magento offre alle aziende la soluzione di eCommerce definitiva.<a href="http://www.magentocommerce.com/download" target="_blank">Maggiori informazioni</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Che cosa è un tema di Magento?</h3>
    <p>Magento tema è un progetto completo per il tuo negozio online basato sul motore di Magento. In altre parole, si può facilmente cambiare il vostro Magento negozio aspetto con l'installazione di un nuovo tema in pochi semplici passi. Con tutta la sua semplicità, un tema di Magento è dotato di tutti i file di origine necessari che è possibile modificare o estendere in modo in cui si ha bisogno.</p>
</article>

<article id="file_structure">
    <h4>Struttura dei file di Magento</h4>

    <p>Il pacchetto di tema che avete scaricato è costituito da diverse cartelle. Vediamo cosa ogni cartella contiene:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>'documentazione' (documentation)</strong></dt>
                <dd> contiene file di documentazione.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            un file di documentazione principale si sta leggendo in questo momento.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>'screenshots' (screenshots)</strong></dt>
                <dd> contiene le schermate a tema. Non per production.a file di documentazione principale si sta leggendo in questo momento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>'sorgente' (sources)</strong></dt>
                <dd> contiene i file di origine tema.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>'psd' (psd)</strong></dt>
                        <dd>
                            contiene i file sorgente di Adobe Photoshop tema (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>'demo' (demo)</strong></dt>
                        <dd>
                            contiene pagine aggiuntive e blocchi personalizzati forniti con il tema.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>'sample_data' (sample_data)</strong></dt>
                        <dd>
                            contiene i file di dati campione Magento tema.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>'pub' (pub)</strong></dt>
                                <dd>
                                    contiene i file e le cartelle che devono essere caricati nella directory principale della vostra installazione di Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    il file di backup del database. Contiene il contenuto del campione tema.
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                <dd> contiene file del tema di Magento e le cartelle che devono essere caricati nella directory principale della vostra installazione di Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contiene il pacchetto completo di installazione di Magento con i file del motore, il tema e il contenuto del campione (immagini campione).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> il file utilizzato per estrarre i file dalla fullpackage.zip quando caricati sul server di hosting.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contiene i link in cui i font personalizzati template possono essere scaricati.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contiene le istruzioni su come estrarre file di origine.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validazione</h3>
    <div class="alert alert-warning">
        <span>Entrambi i markup e CSS stili HTML utilizzati nei nostri modelli sono semanticamente corretti e validi. Tuttavia alcuni errori W3C ancora in grado di prendere posto. Fare 100% del codice W3C valida elimina l'utilizzo di moderne tecnologie sito web come HTML5 e CSS3 caratteristiche markup. Il nostro obiettivo è quello di offrire una ricca esperienza utente con modelli di alta qualità ed a volte dobbiamo rompere alcune regole.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparazione</h3>

    <p>Prima di procedere a configurare il vostro negozio Magento, si prega di assicurarsi che si sono pienamente preparati. Si prega di effettuare le seguenti operazioni di preparazione:</p>

    <h4>Software modifica</h4>

    <p>Per sentirsi a proprio agio a lavorare con template Magento, si consiglia di scaricare tutte le applicazioni richieste. È possibile visualizzare l'elenco dei software richiesto sulla pagina del modello di anteprima. </br> I requisiti possono variare a seconda dei modelli, per la maggior parte dei modelli sono i seguenti:</p>
    <ol class="index-list">
        <li>In primo luogo, è necessario utilizzare WinZip 9+ (Windows) e Stuffit Expander 10+ (Mac) per estrarre la protetto da password sources_#########.zip archivio. </li>
        <li>Potrebbe anche essere necessario l'applicazione Adobe Photoshop. Viene utilizzato per modificare i file di origine PSD, ed è necessario se si desidera modificare il modello di disegno grafica e immagini.</li>
        <li>Per modificare i file di codice sorgente di modello, avete bisogno di qualche editor di codice, come Adobe Dreamweaver, Notepad ++, Sublime Text, etc.</li>
        <li>Per caricare i file sul server di hosting potrebbe essere necessario un Gestore FTP come Total Commander, FileZilla, CuteFTP, ecc.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Come Magento Commerce è un / applicazione basata su MySQL PHP, è necessario preparare un ambiente di hosting per eseguire Magento.</p>
    <p>Se si dispone di hosting dal vivo, si prega di accertarsi che corrisponda <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento requisiti </a> ed è pronto per essere utilizzato per il negozio di Magento.</p>
    <p>In caso contrario, è possibile eseguire Magento localmente sul proprio computer utilizzando il server locale. Per creare un server di hosting locale si prega di utilizzare le applicazioni come ad esempio localhost <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> ecc. Una di queste può essere facilmente installato come qualsiasi altro programma e utilizzati per l'esecuzione di Magento. </p>
    <p>Si prega di verificare i seguenti tutorial su come configurare l'ambiente di sviluppo locale:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web XAMPP</a></li>
    </ul>
</article>