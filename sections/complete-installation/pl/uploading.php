<h3>Przesyłanie i rozpakowywanie</h3>

<p>Aby rozpocząć pracę z Magento należy przesłać pliki na serwer hostingowy. Można to zrobić za pomocą menedżera plików hostingu lub jakieś strony trzeciej menedżera FTP.</p>
            
<ol class="index-list">
  <li>Wybierz pliki <strong>'unzip.php'</strong> oraz <strong>'fullpackage.zip'</strong> i prześlij je na serwer (
    <a href="/help/how-upload-files-server-2.html" target="_blank">Jak przesłać pliki na serwer</a>).</li>
  <li>Wpisz ścieżkę do pliku <strong>'unzip.php'</strong> na serwerze (http://your_domain_name/unzip.php) in your <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">browser</abbr>.</li>
  <li>
  	Powinieneś zobaczyć następujący ekran:
  	<figure class="img-polaroid"><img src="img/magento/complete-install-unzip-php.jpg" alt="Unzip.php initial screen."></figure>
  </li>
  <li>W polu wyboru <strong>'Wybierz włąsny plik zip'</strong> należy wybrać presłany plik <strong>fullpackage.zip</strong>.</li>
  <li>W polu <strong>'Rozpakuj do'</strong> określ katalog, w którym chcesz rozpakować pliki.</li>
  <li>Kliknij przycisk <strong>'Rozpakuj'</strong> aby kontynuować.</li>
</ol>
          
<p class="alert alert-warning"><span>Należy upewnić się czy odpowiednie uprawnienia dla katalogu, w którym planuje się rozpakować pliki, zostały ustawione. Uprawnienia powinny być <strong>CHMOD 755 or 777</strong> w zależności od konfiguracji serwera. </span></p>
		
