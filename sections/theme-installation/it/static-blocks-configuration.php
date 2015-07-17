<h3>Configurazione Blocchi Statici</h3>
<p>Una volta terminata la configurazione delle pagine, dovrai configurare i blocchi statici. La procedura è simile: devi semplicemente copiare il codice dal file sorgente e incollarlo nei campi corrispondenti del pannello admin di Magento. Dovrai usare una tabella simile, ma per i blocchi statici.</p>
<ol> 
	<li>Dal menù in alto, seleziona  <b>CMS > Static Blocks</b>.</li>
	<li>Clicca sul pulsante "Add New Block" nell'angolo a destra per aggiungere un nuovo blocco.</li>
	<li>Inserisci il nome e l'identificativo del blocco. Puoi trovare i dettagli del blocco dalla tabella nella pagina del Live Demo del template (vedi sulla sezione Pages Configuration).</li>
	<li>Apri il file sorgente del blocco e copia il codice HTML nell'area contenuti.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting5.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting6.png" alt="" /></figure>

<p class="alert alert-info"><span>Nota Bene: alcuni template non hanno blocchi statici, quindi la tabella potrebbe essere vuota.</span></p>
<p class="alert alert-info"><span>I file sorgente con il codice dei blocchi statici sono contenuti nella directory "<b>sources\demo\static_blocks\</b>" del pacchetto. </span></p>

<p>Come visualizzare i blocchi con contenuto statico?</p>

<ol> 
	<li>Andare su <b>CMS > Widgets</b> nel menu principale.</li>
	<li>Fare clic sul pulsante <strong>Add New Widget Instance </strong> in alto a destra per aggiungere il widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Specificare il tipo di widget <strong>CMS > Static Blocks</strong> e il tema a cui si desidera applicare il widget, quindi fare clic sul pulsante <strong>Continue</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure></li>
	<li>Nella pagina successiva, nel campo <strong>Widget Instance Title </strong>, inserire il nome del widget da visualizzare nel pannello admin. Nel campo <strong>Assign to Store Views </strong> è necessario selezioare le viste Store che dovranno visualizzare il widget. Nel blocco <strong>Layout Updates </strong> fare clic sul pulsante <strong>Add Layout Update</strong>. Nel campo <strong>Display On</strong> è possibile selezionare le pagine in cui visualizzare il widget. A seconda delle pagine selezionate, si avrà la possibilità di compilare altri campi.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Scegliere la scheda <strong>Widget Options </strong> nella barra laterale sinistra e selezioare il blocco statico a cui si sta facendo riferimento. Non dimenticare di salvare le modifiche.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
</ol>

<p>Una volta terminata la configurazione di pagine e blocchi, il tuo negozio è pronto a partire.</p>