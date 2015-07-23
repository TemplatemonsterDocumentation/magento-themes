<h3>Configurazione Pagine</h3>
<p>Per fare in modo che il tuo template appaia esattamente come nella nostra Live Demo, sarà necessario impostare le pagine dello store in una maniera specifica. Noi ti forniremo tutti i file con il codice sorgente delle pagine. Dovrai aggiungerli nel pannello di amministrazione di Magento seguendo la procedura descritta qui sotto, utilizzando la tabella delle impostazioni. La tabella delle impostazioni è localizzata nella pagina <b>Technical details</b> sulla pagina di anteprima del template. Il file di documentazione contiene il link a questa pagina:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <b>Documentation</b>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>La pagina template principale è quella maggiormente interessata. Contiene solitamente i seguenti elementi: banner, slider, galleria, ecc.</p>
<div class="alert alert-warning"><span>Consigliamo di disabilitare l'editor WYSIWYG. Per farlo, dal menù admin in alto, seleziona  <strong>System &gt; Configuration</strong>. Apri la sezione "<strong>Content Management</strong>" e nelle finestra delle opzioni <strong>WYSIWYG Options</strong> imposta l'opzione "<strong>Enable WYSIWYG Editor</strong>" su "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/pages_setting1.png" alt="" /></figure></div>
<p class="alert alert-warning"><span>Nel caso in cui tu avessi già effettuato le modifiche al codice della tua pagina e vorresti aggiungere il nostro codice senza che questo abbia alcun effetto sulle tue modifiche, ti consigliamo di contattare un tecnico professionista, o almeno di fare un backup prima di effettuare le modifiche.</span></p>
<ol class="index-list">
	<li>Dal menù in alto, seleziona <b>CMS > Pages</b>. Qui troverai tutte le pagine dello store. <b>Home page</b>, <b>About Us</b> e <b>Customer Service </b> dovrebbero già essere disponibili per cui non sarà necessario aggiungerle. Devi solo caricare i contenuti HTML e XML delle pagine. Aprile per accedere ai contenuti.</li>
	<li>Apri la pagina e seleziona la scheda <b>Content</b>. Questa contiene il codice HTML della pagina. Puoi prendere il codice HTML della pagina dal rispettivo file sorgente. Puoi vedere la lista dei codici sorgente inclusi nella sezione "Template Settings" sulla tua pagina di anteprima del template. Copia il codice dal file sorgente e incollalo nell'area <b>content</b>.</li>
	<li>Una volta finito con il codice HTML, passa alla scheda <b>"Design"</b>. Questa contiene il codice XML della pagina. Il codice XML ti permette di aggiungere alla pagina blocchi statici e widget. Il codice XML andrebbe copiato allo stesso modo del codice HTML, dal file sorgente. Copia il codice XML sull'area "<b>Layout Update XML</b>".</li>
	<li>Non dimenticare di selezionare l'opzione corretta in "<b>Layout</b>".</li>
	<li>Se devi aggiungere una nuova pagina, clicca su <b>"Add New Page"</b> nell'angolo in alto a destra.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting2.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting3.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting4.png" alt="" /></figure>

<p>In caso di difficoltà, puoi consultare il tutorial dettagliato su <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">Come configurare le pagine manualmente</a>.</p>		