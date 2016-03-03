<h3>MegaMenu</h3>
<p class="indent">Данный модуль заменяет стандартное меню на меню, в котором можно настроить отображение подкатегорий до двух уровней вложенности, добавлять статические блоки в выпадающее меню, добавлять бэйджи (Labels), выводить продукты и т.п.</p>
<strong>MegaMenu</strong> включено в шаблонах по умолчанию, но включить или выключить его можно в меню <strong>Stores > Configuration > TemplateMonster > Mega Menu</strong>.
<figure class="img-polaroid"><img src="img/magento/megamenu-1.jpg" alt="" /></figure>

<ol class="index-list">
	<li>Настроить отображение каждого выпадающего меню можно на странице настройки категории, которую вы можете найти в <strong>Products > Categories -> Megamenu</strong>.
		<a class="pretty_image" href="img/magento/Megamenu.png"><figure class="img-polaroid"><img src="img/magento/Megamenu.png" alt="" /></figure></a>
			
	</li>
	<li>
		Чтобы добавить статик блок в выпадающее меню, вам необходимо добавить статик блок в <strong>CMS > Static Blocks</strong> и только после этого добавить его в меню. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-static.jpg" alt="" /></figure>
	</li>
	<li>
		В модуле есть возможность добавить бэйдж для любой категории. Сделать это вы можете в меню категорий <strong>Products > Categories -> Megamenu</strong>. Вы можете указать класс для беджа, чтобы застилить его с помощью css кода.
		<figure class="img-polaroid"><img src="img/magento/megamenu-badge.jpg" alt="" /></figure>
	</li>		
	<li>
		Вы можете указать количество колонок в мега меню. Для этого включите отображение колонок и укажите их количество. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-column.jpg" alt="" /></figure>
	</li>		
	<li>
		Чтобы вывести продукты вы должны включить опцию <strong>Turn on products show</strong> и выбрать продукты из списка. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-product.jpg" alt="" /></figure>
	</li>		
	<li>
		Добавить картинку для подкатегории вы можете пункте <strong>MegaMenu</strong> этой подкатегории. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-image.jpg" alt="" /></figure>
		<p>Но, чтобы ваша картинка отображалась, вам необходимо включить опцию <strong>Turn on images for subcategories</strong>, которая находится в секции <strong>MegaMenu</strong> родительской категории.</p>
		<figure class="img-polaroid"><img src="img/magento/megamenu-image-1.jpg" alt="" /></figure>
	</li>
	<li>
		Леяуты мегаменю вы можете изменять, используя опцию <strong>Custom template for megamenu item</strong>. Эти темплейты находятся по пути <strong>app\design\frontend\TemplateMonster\theme764\TemplateMonster_Megamenu\templates\html\topmenu\</strong>
		<figure class="img-polaroid"><img src="img/magento/megamenu-template.jpg" alt="" /></figure>
	</li>
</ol>