<h2 class="item1">Introduction</h2>
<p>
    Grazie per aver acquistato un template Magento. Questa documentazione è suddivisa in diverse parti e illustra l'intera procedura per installare e gestire uno store Magento a partire da zero. Abbiamo fatto del nostro meglio per rendere questo manuale il più chiaro possibile.
</p>

<article id="whatismagento">
    <h3>Cos'è Magento Commerce?</h3>
    <p>Magento è una piattaforma eCommerce ricca di funzioni basata su tecnologia open-source. La piattaforma offre la possibilità di gestire contenuti, aspetto e funzionalità del vostro negozio eCommerce con grande flessibilità e pieno controllo. L'interfaccia di amministrazione di Magento è intuitiva ma offre potenti strumenti di marketing, ottimizzazione di motori di ricerca, e gestione catalogo, dando al commerciante la possibilità di creare un sito che sia fatto su misura per i propri specifici modelli di business. Sviluppato per essere completamente scalabile e sostenuto dalla rete di supporto Varien, Magento offre a ogni compagnia la soluzione eCommerce definitiva. <a href="http://www.magentocommerce.com/download" target="_blank">Altre informazioni</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Cos'è un tema Magento?</h3>
    <p>Un tema Magento è un progetto completo per il tuo store online, basato sul motore Magento. In altre parole, installando un nuovo tema, potrai facilmente modificare l'aspetto del tuo negozio con una semplice procedura. A renderlo ancora più semplice c'è il fatto che un tema Magento include tutti i file sorgente necessari, che tu potrai modificare o estendere secondo i tuoi bisogni.</p>
</article>

<article id="file_structure">
    <h4>Struttura dei Files</h4>

    <p>Il pacchetto che hai scaricato si suddivide in diverse cartelle. Vediamo cosa ciascuna di esse contiene:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contiene i file della documentazione.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            il file principale della documentazione. È il file che stai leggendo adesso.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contiene alcune schermate del tema. Non da usare per la produzione.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> contiene i file sorgente del template.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            contiene i file sorgente del tema in formato Adobe Photoshop (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contiene pagine aggiuntive e blocchi custom  inclusi nel tema.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            contiene file campione del tema Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    contiene file e directory da caricare sulla directory root della tua installazione Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    i file di backup del database. Contiene i contenuti campione.
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
                <dd> contiene file e directory del tema da caricare sulla directory root della tua installazione Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contiene il pacchetto d’installazione completa Magento con i file engine, i temi ei esempi di contenuti (immagini campione).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> estrae I file da fullpackage.zip quando caricati sul server di hosting.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contiene i link da cui scaricare i font custom del template.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contiene istruzioni su come estrarre i file sorgente.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparazione</h3>

    <p>Prima di procedere con l'installazione del tuo store Magento, assicurati di avere tutto il necessario. Completa tutte le seguenti operazioni:</p>

    <h4>Software per l'Editing</h4>

    <p>Per lavorare in comodità sul template Magento, si consiglia di scaricare tutti i programmi necessari. Sulla pagina di anteprima del template è possibile trovare una lista di tutto il software necessario. </br> I requisiti possono variare da tema a tema, ma in genere sono i seguenti:</p>
    <ol class="index-list">
        <li>Prima di tutto sarà necessario WinZip 9+ (per Windows) o Stuffit Expander 10+ (per Mac), per estrarre l' archivio sources_#########.zip protetto da password. </li>
        <li>Potrebbe anche servirti l'applicazione Adobe Photoshop, da usare per modificare i file sorgente in formato .PSD source files, e se vuoi modificare grafica e immagini del template.</li>
        <li>Per modificare i file sorgente del template, avrai bisogno di un editor di codice, come Adobe Dreamweaver, Notepad++, Sublime Text, ecc.</li>
        <li>Per caricare i file sul server di hosting potrebbero essere necessari dei gestori FTP, come Total Commander, FileZilla, CuteFTP, ecc.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Dal momento che Magento Commerce è un'applicazione basata su PHP/MySQL, sarà necessario preparare l'ambiente di hosting ad accogliere ed eseguire Magento.</p>
    <p>Se hai un hosting live, assicurati che questo risponda ai <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> requisiti Magento </a> e che sia pronto all'uso per lo store Magento.</p>
    <p>Altrimenti, è possibile eseguire Magento localmente sul tuo computer utilizzando il server locale. Per creare un server da hosting locale, si possono utilizzare applicazioni localhost come <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> ecc. Ognuna di queste applicazioni può essere facilmente installata ed essere utilizzata per eseguire Magento. </p>
    <p>Guarda le seguenti guide su come configurare l'ambiente di sviluppo locale:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web con AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web con WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Come installare l'ambiente di sviluppo web con XAMP</a></li>
    </ul>
</article>