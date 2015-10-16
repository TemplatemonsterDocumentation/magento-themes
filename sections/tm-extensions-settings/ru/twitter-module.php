<h3>Twitter module</h3>
<p>Twitter модуль позволяет отобразить ленту твитов в вашем магазине. <br>Все опции управления доступны в админ панели, в секции <strong>System > Configuration > Templatemonster > Twitter</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
<p>Рассмотрим опции модуля:</p>			
<table  class="options-table">
	<tr>
		<td class="col-1"><strong>Widget ID -</strong></td>
		<td>-</td>
		<td>идентификатор Twitter виджета. Данный идентификатор можно получить, зарегистрировав ваш виджет в <a href="https://twitter.com/settings/widgets/new" target="_blank">настройках</a> аккаунта.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Account name</strong></td>
		<td>-</td>
		<td>название Twitter аккаунта пользователя, чью ленту вы хотите отобразить.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Color Scheme</strong></td>
		<td>-</td>
		<td>цветовая схема виджета. Может быть светлой или тёмной.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Layout enhancements</strong></td>
		<td>-</td>
		<td>данная опция позволяет скрывать часть элементов разметки виджета.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Tweet limit</strong></td>
		<td>-</td>
		<td>количество отображаемых твиттов в ленте.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Link color</strong></td>
		<td>-</td>
		<td>позволяет изменить цвет ссылок в ленте.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Border color</strong></td>
		<td>-</td>
		<td>позволяет изменяет цвет границ в ленте.</td>
	</tr>			
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>высота окна виджета.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>ширина окна виджета.</td>
	</tr>
</table>
<p>По умолчанию, блок плагина выводится в левой колонке. Но существует три варианта вывода: <strong>слева</strong>, <strong>справа</strong> и в <strong>футере</strong>. <br>Для изменения позиции вывода блока необходимо открыть файл <strong>tm_twitter.xml</strong>, который находится в папке <strong>/app/design/frontend/tm_themes/themeXXX/layout</strong> вашей установки.</p>
В этом файле есть три блока <strong><em>reference</em></strong> с параметром <strong>name="left"</strong> (name="right", name="footer").
<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>В этом файле закомментировано два блока. И лишь один блок с <strong>name="left"</strong> не закомментирован. Он и отвечает за вывод плагина в левой колонке. </p>Если же вам необходимо вывести плагин, к примеру, в футере, вам необходимо:
<ol class="index-list">
	<li>Удалить комментирование блока с <strong>name="footer"</strong>  (последний в примере кода выше) и закомментировать блок с <strong>name="left"</strong> (первый в примере кода выше).</li>
	<li>Открыть файл <strong>footer.phtml</strong>, который находится в папке <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Вставить, в нужное вам место, следующий код:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Теперь Twitter блок будет отображаться в футере.</p>		