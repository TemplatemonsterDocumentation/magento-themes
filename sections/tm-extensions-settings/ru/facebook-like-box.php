<h3>Facebook like box</h3>
<p>Данный модуль позволяет выводить Facebook like box в вашем Magento магазине.			<br>			
Настроить его мы можете в админ панели Magento, в секции <strong>System > Configuration > Templatemonster > Facebook</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Рассмотрим опции модуля:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>идентификатор вашего приложения в Facebook. Для использования Facebook Like box, вам необходимо зарегистрировать ваше приложение. Как это сделать вы можете узнать, перейдя по следующей <a href="https://developers.facebook.com/" target="_blank">ссылке</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>ссылка на страницу в Facebook.</td>
	</tr>					
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>позволяет скрывать или отображать фото профиля людей, которые лайкнули страницу.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>позволяет убрать фоновую картинку в хедере.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>позволяет включить отображение последних постов на странице.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>высота области плагина</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>ширина области плагина.</td>
	</tr>				
</table>
<p>По умолчанию, блок плагина выводится в левой колонке. Но существует три варианта вывода: <strong>слева</strong>, <strong>справа</strong> и в <strong>футере</strong>. <br>
Для изменения позиции вывода блока необходимо открыть файл <strong>tm_facebook.xml</strong>, который находится в папке <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> вашей установки.</p>

В этом файле есть три блока <strong><em>reference</em></strong> с параметром <strong>name="left"</strong> (name="right", name="footer").
<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_facebook_like_left" as="tm_facebook_like_left" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_facebook_like_right" as="tm_facebook_like_right" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_facebook_like_footer" as="tm_facebook_like_footer" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>В этом файле закомментировано два блока. И лишь один блок с <strong>name="left"</strong> не закомментирован. Он и отвечает за вывод плагина в левой колонке. <br>Если же вам необходимо вывести плагин, к примеру, в футере, вам необходимо:</p>
<ol class="index-list">
	<li>Удалить комментирование блока с <strong>name="footer"</strong> (последний в примере кода выше) и закомментировать блок с <strong>name="left"</strong> (первый в примере кода выше).</li>
	<li>Открыть файл <strong>footer.phtml</strong>, который находится в папке <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Вставить в нужное вам место следующий код:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Теперь Facebook блок будет отображаться в футере.</p>
		