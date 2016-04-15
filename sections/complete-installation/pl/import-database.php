<h3>Importowanie przykłądowych danych</h3>
<p>Pakiet szablonu Magento zawiera przykładowy plik danych (<strong>dump.sql</strong> or <strong>dump.gz</strong>). Ten plik znajduje się w folderze <strong>/sources/sample_data</strong> szablonu. To pozwala na wczytywanie przykładowych danych, tak, że witryna wygląda dokładnie jak nasz szablon demo.</p>
<p class="alert alert-danger"><span>Nie należy importować <strong>dump.sql.gz</strong> jeśli już masz dane na swojej stronie. Importując <strong>dump.sql.gz</strong>, wszystkie produkty zostaną usunięte ze sklepu. Jeżeli nie chcesz instalować przykładowe dane, należy użyć czystej bazy danych podczas instalacji Magento. Pomiń krok instalacji przykładowych danych. </span></p>	
<p>W celu zainstalowania pliku zrzutu, wykonaj poniższe czynności:</p>
<ol class="index-list">
	<li>Zaloguj się do PhpMyAdmin i wybierz bazę danych, która będzie używana dla Magento Commerce (została stworzona przez użytkownika (Ciebie) za pomocą instrukcji podanej wcześniej). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Przejdź do karty <strong>"Importowanie"</strong> i kliknij przycisk <strong>"Przeglądaj"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Znajdź folder <strong>"/sources/sample_data"</strong> szablonu i wybierz plik <strong>dump.sql.gz.</strong>. Kliknij <strong>"IDŹ"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Proces importowania może potrwać kilka minut.</li>
</ol>