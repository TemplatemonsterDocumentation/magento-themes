<h3>Moduł Twitter</h3>
	<p>Moduł Twitter pozwala wyświetlić kanał (feed) tweetów w Twoim sklepie. <br>Wszystkie opcje konfiguracji są dostępne w panelu administracyjnym w sekcji <strong>System > Configuration > Templatemonster > Twitter</strong>.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>Moduł posiada następujące opcje:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Identyfikator widgetu Twitter'a. Identyfikator możesz otrzymać po rejestracji Twojego widgetu w ustawieniach <a href="https://twitter.com/settings/widgets/new" target="_blank">account</a>.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>nazwa użytkownika konta Twitter, którego kanał (feed) chcesz wyświetlić.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>kolor skin widgetu. Może być jasny lub ciemny.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>pozwala częściowo ukryć elementy formatowania widgetu.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>ilość tweetów wyświetlanych w kanale.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>pozwala na zmianę koloru linków w kanale.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>pozwala na zmianę koloru obramowania w kanale.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>wysokość okna widgetu.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>szerokość okna widgetu.</td>
		</tr>
	</table>
	<p>Moduł jest wyświetlany domyślnie w lewej kolumnie. Jednak są trzy opcje wyświetlania: <strong>left</strong>, <strong>right</strong> oraz <strong>footer</strong>. <br>
				Aby zmienić położenie bloku, należy otworzyć plik <strong>tm_twitter.xml</strong> zlokalizowany w folderze <strong>/app/design/frontend/tm_themes/themeXXX/layout</strong> Twojej instalacji.</p>
	Plik ten zawiera trzy <strong><em>reference</em></strong> do bloków o parametrach <strong>name="left"</strong> (name="right", name="footer").
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
<p>Dwa bloki są przekonwertowane na komentarz w tym pliku. A jeden blok z <strong>name="left"</strong> nie jest przekonwertowany. Wyświetla moduł w lewej kolumnie.
				Jeśli chcesz wyświetlić moduł w stopce, należy postępować zgodnie z poniższymi instrukcjami:</p>

<ol class="index-list">
	<li>Uncomment lines of code for <strong>name="footer"</strong> block (the last one in the example of the code above) and comment out the <strong>name="left"</strong> block (the first one in the example of code above).</li>
	<li>Otwórz plik <strong>footer.phtml</strong> zlokalizowany w folderze <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Wklej następujący kod do wskazanego miejsca:
		<pre class="prettyprint linenums">	&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Blok Twitter'a wyświetli się teraz w stopce.</p>
		