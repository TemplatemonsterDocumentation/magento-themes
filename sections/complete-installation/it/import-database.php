		
<h3>Importazione Dati Campione</h3>
<p>Il pacchetto del template Magento include il file con i dati campione (dump.sql o dump.gz). Questo file si trova nella cartella <b>/sources/sample_data</b> del tuo template. Ti permette di caricare i dati campione, in modo che il tuo sito web appaia esattamente come nel nostro template dimostrativo.</p>
<p class="alert alert-danger"><span>Se hai già i dati sul tuo sito, NON importare dump.sql.gz. Importando dump.sql.gz, tutti i prodotti sarebbero cancellati dal tuo store. Se non vuoi installare i dati campioni, usa un database vuoto per l'installazione di Magento, e salta la fase di installazione dei dati campione. </span></p>	
<p>Per installare il file dump, segui questa procedura:</p>
<ol>
	<li>Accedi a PhpMyAdmin e seleziona il database che utilizzerai per Magento Commerce (Dovresti già averlo creato seguendo la procedura descritta qui in precedenza).</li>
	<li>Naviga sulla scheda <b>"Import"</b> e clicca sul pulsante <b>"Browse"</b>.</li>
	<li>Trova la cartella <i>"/sources/sample_data"</i> nel tuo template e seleziona il file <b>dump.sql.gz</b>.</li>
	<li>Clicca <b>"GO"</b>. L'operazione di importazione potrà richiedere alcuni minuti.</li>
</ol>
<p>Seleziona il database che utilizzerai per Magento Commerce. Seleziona <b>"IMPORT"</b>. Clicca su <b>"Browse"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump1.png" alt="" /></figure>
<p>Vai sulla cartella <b>"/sources/sample_data"</b> del tuo pacchetto template e seleziona il file <b>dump.sql.gz</b> file.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump2.png" alt="" /></figure>
<p>Clicca su <b>"GO"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump3.png" alt="" /></figure>
			
		