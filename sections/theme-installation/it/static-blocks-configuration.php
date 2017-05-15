<h3>Configurazione blocchi statici</h3>
<p>Quando hai finito di configurare le pagine, è necessario configurare i blocchi statici. La procedura è simile: è necessario copiare il codice dal file di origine e incollarlo ai campi corrispondenti nel pannello di amministrazione di Magento. È necessario utilizzare un tavolo simile, ma per i blocchi statici.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>Nel menu principale accedere alla <strong>Contenuti > Blocchi (Content > Blocks)</strong>. </li>
	<li>Nell'angolo in alto a destra fare clic sul <strong>"Inserisci nuovo blocco" ("Add New block")</strong> pulsante per aggiungere un nuovo blocco statico. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Specificare il nome del blocco e l'identificatore. È possibile ottenere i dettagli del blocco dalla tabella alla pagina di configurazione del modello (controllare la parte di configurazione Pagine).</li>
	<li>Aprire il file di origine del blocco e copiare il codice HTML nell'area del contenuto.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOTA: alcuni modelli non contengono blocchi statici, in modo che il tavolo può essere vuoto. </span></p>
<p class="alert alert-info"><span>I file di origine con il codice blocchi statici sono memorizzati nella "<strong>sources\demo\static_blocks\</strong>" cartella del pacchetto modello. </span></p>

<h4>Come visualizzare i blocchi con contenuto statico?</h4>

<ol class="index-list"> 
	<li>Nel menu principale accedere alla <strong>Contenuti > Widget (Content > Widgets)</strong></li>
	<li>Nell'angolo in alto a destra fare clic sul <strong>"Aggiungi Widget" ("Add Widget")</strong> pulsante per aggiungere un nuovo widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Specificare il tipo di widget <strong>CMS statico Block (CMS Static Block)</strong> e il tema che si desidera applicare il widget, quindi fare clic su <strong>Proseguire (Continue)</strong> pulsante.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Nella pagina successiva nella <strong>Widget Titolo (Widget Title)</strong> campo immettere il nome del widget che verrà visualizzato nel pannello di amministrazione. Nel <strong>Assegnare al negozio Visualizzazioni (Assign to Store Views)</strong> campo è necessario selezionare una vista negozio che visualizzare il widget. Nel <strong>Aggiornamenti Layout (Layout Updates)</strong> blocco click <strong>Aggiungere Layout Aggiornamento (Add Layout Update)</strong> pulsante. In <strong>Display Acceso (Display On)</strong> campo è possibile selezionare le pagine in cui sarà visualizzato sul widget di. A seconda delle pagine selezionate si avrà possibilità di compilare i campi aggiuntivi. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Nella barra laterale sinistra click <strong>Opzioni widget (Widget Options)</strong> scheda e selezionare il blocco statico si fa riferimento. Non dimenticare di salvare le modifiche.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Quando hai finito di configurare l'archiviazione delle pagine e blocchi, il tuo negozio è pronto ad andare.</p>