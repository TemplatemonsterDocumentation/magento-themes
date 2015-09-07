		
<h3>Import przykładowych danych</h3>
<p>Pakiet szablonu Magento zawiera przykładowy plik danych (dump.sql lub dump.gz). Ten plik znajduje się w folderze<strong>/sources/sample_data</strong> Twojego szablonu. Pozwala to załadować przykładowe dane w taki sposób, że witryna wygląda dokładnie tak jak nasze demo szablonu.</p>
<p class="alert alert-danger"><span>Nie importuj dump.sql.gz, jeśli masz już dane na swojej stronie. Importując dump.sql.gz, wszystkie produkty zostaną usunięte z Twojego sklepu. Jeśli nie chcesz instalować przykładowych danych, należy użyć czystej bazy danych podczas instalacji Magento. Pomiń krok instalacji przykładowych danych. </span></p>	
<p>Aby zainstalować plik zrzutu (dump file), wykonaj następujące czynności:</p>
<ol class="index-list">
	<li>Zaloguj się do phpMyAdmin, wybierz bazę danych, która ma zostać użyta do Magento Commerce (Został on stworzony przez Ciebie przy pomocy kroków wskazanych wcześniej).<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Przejdź do zakładki<strong>"Import"</strong> i kliknij przycisk <strong>"Browse"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Znajdż folder <strong>"/sources/sample_data"</strong> Twojego szablonu i wybierz plik <strong>dump.sql.gz.</strong>. Naciśnij <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Proces importowania może potrwać kilka minut.</li>
</ol>