<h3>Konfiguracja stron</h3>
<p>Aby uczynić, żeby szablon wyglądał dokładnie tak jak nasze Live Demo, trzeba skonfigurować strony sklepu w sposób szczególny. Zapewniamy wszystkie pliki z kodem źródłowym strony. Trzeba dodać je do panelu administracyjnego Magento zgodnie ze wskazówkami poniżej, wykorzystując tabelę ustawień. Ustawienia tabeli znajduje się na stronie <strong>Szczegóły techniczne</strong> na stronie podglądu szablonu. Plik z dokumentacją zawiera łącze do tej strony:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Dokumentacja (Documentation)</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>Główny szablon strony zostanie naruszony najbardziej. Zwykle składa się z następujących elementów: banery, suwak, galeria, itp.</p>
<div class="alert alert-warning"><span>Zaleca się wyłączenie edytora WYSIWYG. Aby to zrobić, należy z górnego menu administratora wybrać  <strong>Sklepy & gt; Konfiguracja (Stores &gt; Configuration)</strong>. Otwórz sekcję "<strong>Zarządzanie zawartością</strong>" i w oknie <strong>Opcje WYSIWYG</strong> ustaw opcję z "<strong>Włącz Edytor WYSIWYG</strong>" na "<strong>Całkowicie Wyłączone</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>W przypadku, gdy zmiany w kodzie stron już zostały dokonane i chciałbyś dodać nasz kod bez wpływu na zmiany, zaleca się, aby skontaktować się z profesjonalnymi technikami lub przygotować kopię zapasową przed wprowadzeniem zmian.</span></p>
<ol class="index-list">
	<li>Z górnego menu wybierz <strong>Zawartość > Strony</strong>. Tutaj można znaleźć wszystkie strony sklepu. <strong>Strona Główna</strong>, <strong>O Nas</strong> oraz <strong>Obsługa Klienta</strong> powinny być już dostępne, więc nie ma potrzeby, aby je dodawać. Wystarczy tylko zaktualizować HTML strony i zawartość XML. Otwórz dowolny z nich, w celu uzyskania dostępu do zawartości.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Otwórz stronę i wybierz kartę <strong>Zawartość</strong>. Ona zawiera HTML kod strony. Można wziąć HTML kod strony z odpowiedniego pliku źródłowego. Można zobaczyć listę plików źródłowych zawartych w sekcji "Ustawienia szablonu" na swojej stronie podglądu szablonów. Skopiuj kod z pliku źródłowego i wklej go do obszaru <strong>zawartość</strong>.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Po zakończeniu z kodem HTML, przejdź do karty  <strong>"Projektowanie"</strong>. Zawiera on XML kod strony. XML kod pozwala na dodawanie statycznych bloków oraz widżetów Magento na stronie. XML kod należy skopiować w taki sam sposób jak HTML z pliku źródłowego. Skopiujuj XML kod do obszaru "<strong>XML Aktualizacja Układu (Layout Update XML
	)</strong>".<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>Nie zapomnij zaznaczyć poprawną opcję "<strong>Układu</strong>".</li>
	<li>W przypadku jeżeli trzeba dodać nową stronę, w prawym górnym rogu kliknij przycisk <strong>"Dodaj Nową Stronę"</strong>.</li>
</ol>

<!-- <p>W przypadku jakichkolwiek problemów, prosimy sprawdzić szczegółowy tutorial w <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p> -->		