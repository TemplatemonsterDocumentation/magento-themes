<h3>Konfiguracja bloków statycznych</h3>
<p>Po zakończeniu konfiguracji strony, musisz skonfigurować statyczne bloki. Procedura jest podobna: należy skopiować kod z plików źródłowych i wkleić go do odpowiednich pól w panelu administratora Magento. Musisz użyć podobną tabelę, ale dla statycznych bloków.</p>
<ol class="index-list"> 
	<li>Z górnego menu wybierz <strong>CMS > Static Blocks</strong>.</li>
	<li>Kliknij przycisk "Add New block" w prawym górnym rogu, aby dodać nowy blok.<figure class="img-polaroid"><img src="img/magento/pages-setting-5.jpg" alt="" /></figure></li>
	<li>Wpisz nazwę bloku oraz identyfikator. Możesz uzyskać szczegóły o bloku z tabeli szablonu na stronie Live Demo (sprawdź rozdział o Konfiguracji Strony).</li>
	<li>Otwórz plik źródłowy bloku oraz skopiuj kod HTML do obszaru zawartości.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages-setting-6.jpg" alt="" /></figure>

<p class="alert alert-info"><span>Uwaga: niektóre szablony nie zawierają żadnych statycznych bloków, więc tabela może być pusta. </span></p>
<p class="alert alert-info"><span>Pliki źródłowe z bloków statycznych są przechowywane w katalogu "<strong>sources\demo\static_blocks\</strong>" pakietu szablonu.</span></p>

<h4>Jak wyświetlać nasze bloki z zawartością statyczną?</h4>

<ol class="index-list"> 
	<li>Przejdź do <strong>CMS > Widżety</strong> w górnym menu.</li>
	<li>Kliknij przycisk <strong>Dodaj nową instancję widżetu</strong> w prawym górnym rogu, aby dodać widżet.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Określ typ widżetu <strong>CMS > Bloki statyczne</strong> i motyw, który chcesz zastosować do widżetu, a następnie kliknij przycisk <strong>Kontynuuj</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure></li>
	<li>Na następnej stronie, w polu <strong>Tytuł instancji widżetu</strong> wpisz nazwę widżetu, która będzie wyświetlona w panelu administratora.  W polu <strong>Przypisz do widoku sklepu</strong> należy wybrać widok sklepu, który będzie wyświetlać widżet. W bloku <strong>Aktualizacje układu</strong> kliknij przycisk <strong>Dodaj aktualizację układu</strong>. W polu <strong>Wyświetl na</strong> można wybrać strony, na których będzie wyświetlany widżet. W zależności od wybranych stron istnieje możliwość wypełnienia dodatkowych pól.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Wybierz zakładkę <strong>Opcje widżetu</strong> w lewym bocznym pasku i wybierz blok statyczny, który masz na myśli. Nie zapomnij zapisać zmian.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>

<p>Po zakończeniu konfiguracji strony sklepu oraz bloków, twój sklep jest gotowy do pracy.</p>