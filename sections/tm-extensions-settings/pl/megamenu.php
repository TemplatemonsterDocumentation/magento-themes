<h3>MegaMenu</h3>
<p class="indent">Ten moduł zezwala technologicznie zaawansowanemu menu zastąpić standardowe, umożliwiając wyświetlanie podkategorii na 2 poziomie zagnieżdżenia, dodawanie statycznych bloków do rozwijanego menu, przypisywanie etykiety, wyświetlanie produktów, itp.</p>
<strong>MegaMenu</strong> jest domyślnie uwzględnione do szablonów, ale można go włączyć lub wyłączyć w sekcji <strong>Sklepy > Konfiguracja > TemplateMonster > Mega Menu (Stores > Configuration > TemplateMonster > Mega Menu)</strong>.
<figure class="img-polaroid"><img src="img/magento/megamenu-1.jpg" alt="" /></figure>

<ol class="index-list">
	<li>Jest możliwość konfigurowania wyglądu każdego rozwijanego menu na stronie konfiguracji kategorii, która znajduje się w sekcji <strong>Produkty > Kategorii -> Megamenu (Products > Categories -> Megamenu)</strong>.
		<a class="pretty_image" href="img/magento/Megamenu.png"><figure class="img-polaroid"><img src="img/magento/Megamenu.png" alt="" /></figure></a>
			
	</li>
	<li>
		W celu dodawania statycznego bloku do rozwijanego menu, należy najpierw utworzyć go w sekcji <strong>CMS > Statyczne Bloki (CMS > Static Blocks)</strong>, i wtedy będzie dostępny do wyświetlania w rozwijanym menu. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-static.jpg" alt="" /></figure>
	</li>
	<li>
		Ten moduł umożliwia dodawanie etykiety do każdej kategorii produktów. Można to zrobić na stronie kategorii menu: <strong>Produkty > Kategorie -> Megamenu (Products > Categories -> Megamenu)</strong>. Opcja "niestandardowa klasa" jest dostępna, There is a 'custom class' option available, so that you can create styles for this label using css rules.
		<figure class="img-polaroid"><img src="img/magento/megamenu-badge.jpg" alt="" /></figure>
	</li>		
	<li>
		Ilość kolumn w mega menu może być ustalona domyślnie. Żeby to zrobić, należy najpierw włączyć wyświetlanie kolumn, a zatem ustalić potrzebną ilość kolumn. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-column.jpg" alt="" /></figure>
	</li>		
	<li>
		W celu wyświetlania produktów, należy najpierw włączyć opcję <strong>Włącz pokazywanie produktów (Turn on products show)</strong>, a zatem wybrać kilka elementów z listy. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-product.jpg" alt="" /></figure>
	</li>		
	<li>
		W sekcji podkategorii <strong>MegaMenu</strong> można dodać zdjęcie podkategorii. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-image.jpg" alt="" /></figure>
		<p>Jednakże, aby zdjęcie pojawiło się, należy również włączyć jego wyświetlanie, wybierając <strong>Pokazuj zdjęcia podkategorii (Turn on images for subcategories)</strong>, w sekcji nadrzędnej kategorii <strong>MegaMenu</strong>.</p>
		<figure class="img-polaroid"><img src="img/magento/megamenu-image-1.jpg" alt="" /></figure>
	</li>
	<li>
		Układy megamenu można edytować przez zastosowanie opcji <strong>Niestandardowy układ elementu megamenu</strong>. Pliki źródłowe takich szablonów znajdują się w następującym katalogu: <strong>app\design\frontend\TemplateMonster\themeXXX\TemplateMonster_Megamenu\templates\html\topmenu\</strong>.
		<figure class="img-polaroid"><img src="img/magento/megamenu-template.jpg" alt="" /></figure>
	</li>
</ol>