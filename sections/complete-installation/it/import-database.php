		
<h3>Importazione Dati Campione</h3>
<p>Il pacchetto del template Magento include il file con i dati campione (dump.sql o dump.gz). Questo file si trova nella cartella <strong>/sources/sample_data</strong> del tuo template. Ti permette di caricare i dati campione, in modo che il tuo sito web appaia esattamente come nel nostro template dimostrativo.</p>
<p class="alert alert-danger"><span>Se hai già i dati sul tuo sito, NON importare dump.sql.gz. Importando dump.sql.gz, tutti i prodotti sarebbero cancellati dal tuo store. Se non vuoi installare i dati campioni, usa un database vuoto per l'installazione di Magento, e salta la fase di installazione dei dati campione. </span></p>	
<p>Per installare il file dump, segui questa procedura:</p>
<ol class="index-list">
	<li>Accedi a PhpMyAdmin e seleziona il database che utilizzerai per Magento Commerce (Dovresti già averlo creato seguendo la procedura descritta qui in precedenza).<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Naviga sulla scheda <strong>"Import"</strong> e clicca sul pulsante <strong>"Browse"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Trova la cartella <strong>"/sources/sample_data"</strong> nel tuo template e seleziona il file <strong>dump.sql.gz</strong>. Clicca <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> L'operazione di importazione potrà richiedere alcuni minuti.</li>
</ol>