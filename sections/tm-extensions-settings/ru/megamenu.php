<h3>MegaMenu</h3>
<p class="indent">Модуль TemplateMonster_Megamenu расширяет функционал стандартного меню Magento и позволяет отобразить блок с колонками подкатегорий, продуктами и статик блоками, а также гибко настроить его внешний вид в панели администрирования.</p>

<h4>Глобальная настройка</h4>
<p>Для изменения глобальных настроек модуля перейдите в секцию <strong>Stores -> Settings -> Configuration</strong>.</p>
В меню слева выберите пункт <strong>TEMPLATEMONSTER -> Megamenu</strong> для перехода в интерфейс настроек модуля. 
<figure class="img-polaroid"><img src="img/magento/menu.png" alt="" /></figure>
Модуль содержит 2 опции:
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Enable/Disable</strong></td>
		<td>-</td>
		<td>вы можете включить или отключить модуль.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Menu position</strong></td>
		<td>-</td>
		<td>выбор позиции меню.</td>
	</tr>					
</table>
Опция Menu position содержит два значения: <strong>Topnav</strong> и <strong>Sidebar</strong>.
<table class="options-table">
	<tr>
		<td class="col-1"><strong>Topnav</strong></td>
		<td>-</td>
		<td>выводит меню в хедере.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Sidebar</strong></td>
		<td>-</td>
		<td>выводит меню в сайдбаре.</td>
	</tr>					
</table>
<div class="alert alert-danger">
	<p>Внимание!!! Если вы хотите вывести мегаменю в сайдбаре, обязательно, включите леяут с левой или правой колонкой. </p> В случае, когда у вас одноколоночный леяут на страницах и включена опция <strong>Menu position:Sidebar</strong>, меню не будет отображаться.
</div>

<h4>Настройка категорий</h4>
Отображение блока мегаменю настраивается на странице редактирования категории первого уровня в табе Megamenu, который находится в <strong>Products -> Categories</strong>. 
<figure class="img-polaroid"><img src="img/magento/menu-1.png" alt="" /></figure>
В табе Megamenu вы увидите опцию <strong>Turn on megamenu for this category</strong>. Данная опция включает отображение блока мегаменю в данной категории. При включении данной опции у вас появится два поля и виджет настройки содержимого меню.
<figure class="img-polaroid"><img src="img/magento/menu-2.png" alt="" /></figure>
<p>Опция Label позволяет вывести бедж (new, sale) для категории первого уровня. Бедж имеет дефолтную стилизацию и для изменения его внешнего вида есть опция <strong>Css class</strong>. Данная опция задает класс для тегов &lt;li&gt; и &lt;a&gt; данного пункта меню и используя этот класс вы можете легко застилизировать ваш бедж.</p>
<p>Виджет настройки содержимого блока мегаменю позволяет настроить количество строк, количество колонок их ширину и много другое.<br>
Для добавления строки вам необходимо нажать на кнопку <strong>Add row</strong>. После этого у вам появятся пустое поле с кнопками <strong>Add column(s)</strong> и <strong>Remove row</strong>. </p>
<p><strong>Remove row</strong> - удалит ряд (поле).</p>
<figure class="img-polaroid"><img src="img/magento/menu-3.png" alt="" /></figure>
<p>При нажатии на <strong>Add column(s)</strong> у вас появится попап в котором вы должны выбрать ширину колонки, которую хотите добавить. Максимальная ширина колонки равна <strong>col-12</strong>, то есть на всю ширину контейнера. Это значит, если вам нужно 4 колонки в одной строке, вы должны добавить 4 колонки с шириной <strong>col-3</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/menu-4.png" alt="" /></figure>
<p>Рассмотрим настройки колонок.</p>
<figure class="img-polaroid"><img src="img/magento/menu-5.png" alt="" /></figure>
<ul class="marked-list">
	<li>
		<strong>Set column width</strong> - ширина колонки. Может принимать значения от col-1 до col-12. 
		<figure class="img-polaroid"><img src="img/magento/menu-7.png" alt="" /></figure>
	</li>
	<li>
		<strong>Enter specific class</strong> - цсс класс который вешается на колонку. Используя данный класс вы можете придать отдельные стили для данной колонки. 
		<figure class="img-polaroid"><img src="img/magento/menu-6.png" alt="" /></figure>
	</li>
	<li>
		<strong>Add subcategory</strong> - выпадающий список с подкатегориями данной категории. Данная опция позволяет вам выбрать и вывести те подкатегории, которые вы хотите. Для этого выберите подкатегорию в списке и нажмите на кнопку <strong>Add</strong>. После этого вы увидите данную категорию в поле <strong>Selected items</strong>.
		<figure class="img-polaroid"><img src="img/magento/menu-8.png" alt="" /></figure>
	</li>
	<li>
		<strong>Select static block</strong> - выпадающий список с статик блоками. В меню вы можете вывести не только список из полдкатегорий, но и любой статик блок, который вы предварительно добавили в админку магазина. Чтоб добавить статик блок, выберите его из списка и нажмите <strong>Add</strong>. Название статик блока появится в поле <strong>Selected items</strong>.
		<figure class="img-polaroid"><img src="img/magento/menu-9.png" alt="" /></figure>
	</li>
	<li>
		<strong>Add products</strong> - добавление продукта в меню. Используя данную опцию вы можете добавить любые продукты в меню. Вывод продукта будет в виде картинки продукта, его названия и цены. При нажатии на кнопку вы увидите всплывающее окно со списком продуктов. Когда вы добавите продукт в меню, его название отобразится в поле <strong>Selected items</strong>.
		<figure class="img-polaroid"><img src="img/magento/menu-11.png" alt="" /></figure>
	</li>
	<li>
		<strong>Selected items</strong> - поле сортировки блоков. В данном поле вы можете менять порядок (сортировать) отображение содержимого вашей колонки. Интерфейс Drag&amp;Drop позволяет просто перетаскивать поля внутри блока. Если вы не хотите, чтобы продукт или статик блок отображался снизу, то вы можете перетащить их вверх и получить желаемое отображение. У вас есть возможность удалить значения с данного поля. Для этого выделите элементы, которые вы хотите удалить и нажмите кнопку <strong>Remove selected</strong>.
		<figure class="img-polaroid"><img src="img/magento/menu-10.png" alt="" /></figure>
	</li>
</ul>

<h4>Настройка подкатегорий</h4>
<p>В подкатегориях вы можете добавить картинку подкатегории и указать бедж. Для настройки подкатегории перейдите на неё и зайдите в таб <strong>Megamenu</strong>. Вы видите две опции: <strong>Category image</strong> и <strong>Label</strong>.</p>
Чтобы выбрать картинку для подкатегории нажмите кнопку <strong>browse</strong> и выбирите картинку из клипарта.<br>
Для добавления беджа, введите значение в поле <strong>Label</strong>.
<figure class="img-polaroid"><img src="img/magento/menu-12.png" alt="" /></figure>
<h4>Настройка стилей</h4>
Для настройки внешнего вида мегаменю вы можете отредактировать scss файлы стилей. Файлы находятся в  <strong>app\code\TemplateMonster\Megamenu\view\frontend\</strong>. При изменении стилей и компиляции не забудьте почистить кеш.
