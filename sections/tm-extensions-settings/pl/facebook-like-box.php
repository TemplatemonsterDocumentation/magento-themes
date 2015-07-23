<h3>Moduł Facebook like box</h3>
<p>Ten moduł pozwala na wyświetlenie Facebook like box w Twoim sklepie Magento.		<br>					
Możesz go skonfigurować za pomocą panelu administracyjnego Magento w sekcji <strong>System > Configuration > Templatemonster > Facebook</strong>.</p>	
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Moduł posiada następujące opcje:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>identyfikator konta na Facebook'u. Aby korzystać z Facebook like box, należy zarejestrować Twoje konto. W celu uzyskania dalszych instrukcji możesz użyć linka <a href="https://developers.facebook.com/" target="_blank"></a></td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>adres URL strony konta na Facebooku.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>pozwala ukryć lub wyświetlić zdjęcie użytkownika, który polubił stronę.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td> pozwala usunąć obraz tła w nagłówku.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>pozwala na włączenie/wyłączenie najnowszych postów na stronie.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>wysokość obszaru modułu.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>szerokość obszaru modułu.</td>
	</tr>				
</table>
<p>Moduł jest wyświetlany domyślnie w lewej kolumnie. Jednak są trzy opcje wyświetlania: <strong>left</strong>, <strong>right</strong> oraz <strong>footer</strong>. <br>
	Aby zmienić położenie bloku, należy otworzyć plik <strong>tm_facebook.xml</strong> zlokalizowany w folderze <strong>app/design/frontend/default/themeXXX/layout</strong> Twojej instalacji.</p>

Plik ten zawiera trzy <strong><em>reference</em></strong> do bloków o parametrach <strong>name="left"</strong> (name="right", name="footer").
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
<p>Dwa bloki są przekonwertowane na komentarz w tym pliku. A jeden blok z <strong>name="left"</strong> nie jest przekonwertowany. Wyświetla moduł w lewej kolumnie. <br>
				Jeśli chcesz wyświetlić moduł w stopce, należy postępować zgodnie z poniższymi instrukcjami:
</p>
<ol class="index-list">
	<li>Uncomment lines of code for <strong>name="footer"</strong> block (the last one in the example of the code above) and comment out the block <strong>name="left"</strong> (the first one in the example of the code above).</li>
	<li>Otwórz plik <strong>footer.phtml</strong> zlokalizowany w folderze <strong>app/design/frontend/default/themeXXX/template/page/html</strong>.</li>
	<li>Wklej następujący kod do wskazanego miejsca:
<pre class="prettyprint linenums">	&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Blok Facebook'a wyświetli się teraz w stopce.</p>
		