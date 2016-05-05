<h3>Konfiguracja bloków statycznych</h3>
<p>Po zakończeniu konfiguracji stron, należy skonfigurować statyczne bloki. Procedura wygląda podobnie: trzeba skopiować kod z plików źródłowych i wpisać go do odpowiednich pól w panelu administracyjnym Magento. Należy zastosować podobną tabelę, lecz dla bloków statycznych.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>W górnym menu przejdź do <strong>Zawartość > Bloki</strong>. </li>
	<li>W prawym górnym rogu kliknij przycisk <strong>"Dodaj Nowy blok"</strong>, aby dodać nowy blok statyczny. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Podaj nazwę bloku i identyfikator. Możesz uzyskać szczegółowe informacje o bloku z tabeli na stronie konfiguracji szablonu (sprawdź w rozdziale Konfiguracja Stron).</li>
	<li>Otwórz plik źródłowy bloku i skopiuj kod HTML do obszaru zawartości.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>UWAGA: Niektóre szablony nie zawierają statycznych bloków, więc tabela może być pusta. </span></p>
<p class="alert alert-info"><span>Pliki źródłowe z kodem bloków statycznych przechowywane są w folderze pakietu szablonów "<strong>sources\demo\static_blocks\</strong>". </span></p>

<h4>Jak wyświetlić nasze bloki o zawartości statycznej?</h4>

<ol class="index-list"> 
	<li>W górnym menu przejdź do <strong>Zawartość > Widżety</strong></li>
	<li>W prawym górnym rogu kliknij przycisk <strong>"Dodaj Widżet"</strong> aby dodać nowy widżet.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Określ typ widgetu <strong>CMS Blok Statyczny</strong> oraz motyw, do którego chcesz zastosować widżet, a następnie kliknij przycisk <strong>Kontynuuj</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Na następnej stronie w polu <strong>Nazwa Widżetu</strong> wprowadź nazwę widżetu, która zostanie wyświetlona w panelu administracyjnym. W polu <strong>Implikuj do Wyświetleń Sklepu</strong> należy wybrać poglądy sklepu, które będą wyświetlać widżet. W bloku <strong>Aktualizacje Układu</strong> kliknij przycisk <strong>Dodaj Aktualizację Układu</strong>. W polu <strong>Wyświetlaj w</strong> można wybrać strony, na których będzie wyświetlany widżet. W zależności od wybranych stron, będziesz potrzebować wypełnić dodatkowe pola. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>W lewym pasku bocznym kliknij kartę <strong>Opcje Widżetu</strong> i wybierz statyczny blok, do którego się odnosisz. Nie zapomnij o zapisaniu zmian. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Po zakończeniu konfiguracji stron i bloków, twój sklep będzie gotowy do obsługi.</p>