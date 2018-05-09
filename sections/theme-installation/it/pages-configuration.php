<h3>Configurazione pagine</h3>
<p>Al fine di rendere il modello apparire esattamente come il nostro Demo Live, è necessario impostare le pagine dei negozi in modo specifico. Noi forniamo tutti i file con il codice sorgente di pagine. È necessario aggiungere loro nel pannello di amministrazione di Magento secondo le istruzioni riportate di seguito utilizzando la tabella delle impostazioni. tabella delle impostazioni si trova sulla <strong>Dettagli tecnici (Technical details)</strong> pagina su pagina del modello di anteprima. Il file di documentazione contiene il link a questa pagina:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Documentazione (Documentation)</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>Il modello di pagina principale sarà influenzato di più. Di solito contiene i seguenti elementi: striscioni, slider, galleria, ecc.</p>
<div class="alert alert-warning"><span>Si consiglia di disattivare l'editor WYSIWYG. Per fare questo, dal menu di amministrazione superiore selezionare  <strong>Negozi &gt; Configurazione (Stores &gt; Configuration</strong>. Apri il "<strong>Gestione dei contenuti (Content Management)</strong>" e nella sezione <strong>WYSIWYG Opzioni (WYSIWYG Options)</strong> set finestra "<strong>Abilita WYSIWYG Editore (Enable WYSIWYG Editor)</strong>" opzione "<strong>Completamente Disabili (Disabled Completely)</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>Nel caso in cui avete già fatto le modifiche apportate al codice di pagine e desidera aggiungere il nostro codice senza influenzare le modifiche, si consiglia di contattare i tecnici professionisti o preparare un backup prima di apportare modifiche.</span></p>
<ol class="index-list">
	<li>Dal menu principale selezionare <strong>Contenuti > Pagine (Content > Pages)</strong>. Qui potete trovare tutte le pagine del negozio. <strong>Pagina Home (Home page)</strong>, <strong>Chi Siamo (About Us)</strong> e <strong>Assistenza Clienti (Customer Service)</strong> Dovrebbe essere già disponibile, quindi non c'è bisogno di aggiungere loro. Hai solo bisogno di aggiornare il codice HTML pagine e contenuti XML. Aprire qualsiasi di loro al fine di ottenere l'accesso al contenuto.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Aprire la pagina e selezionare il <strong>Contenuto (Content)</strong> linguetta. Esso contiene il codice HTML della pagina. Si può prendere il codice pagina HTML dal file di origine appropriata. È possibile visualizzare l'elenco dei file sorgenti inclusi nella sezione "Impostazioni modello" ("Template Settings") nella pagina dei modelli di anteprima. Copiare il codice dal file di origine e incollarlo al <strong>contenuto (content)</strong> area.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Quando si è fatto con il codice HTML, passare a  <strong>"Design" ("Design")</strong> linguetta. Esso contiene il codice della pagina XML. codice XML permette di aggiungere blocchi e widget statici Magento alla pagina. Il codice XML deve essere copiato allo stesso modo come il codice HTML dal file di origine. Copiare il codice XML per la "<strong>Disposizione XML di aggiornamento (Layout Update XML)</strong>" area.<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>Non dimenticate di selezionare la valida "<strong>Disposizione (Layout)</strong>" opzione.</li>
	<li>Nel caso in cui è necessario aggiungere una nuova pagina, fare clic sul <strong>Aggiungi nuova pagina ("Add New Page")</strong> pulsante nell'angolo in alto a destra.</li>
</ol>

<!-- <p>Nel caso in cui avete difficoltà, si prega di controllare il tutorial dettagliato su <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">Come configurare manualmente le pagine</a>.</p> -->		