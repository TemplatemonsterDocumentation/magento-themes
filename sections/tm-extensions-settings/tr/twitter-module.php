<h3>Twitter modülü</h3>
	<p>Twitter modülü, maðazanýzda günceler tweetlerinizi göstermenizi saðlar.<br>						
	Tüm ayarlarý yönetici panelindeki <strong>System > Configuration > Templatemonster > Twitter</strong> kýsmýndan yapabilirsiniz.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>Modül seçenekleri þu þekildedir:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Twitter bileþeni için özgün kimlik. Bu kimliði, bileþeninizi <a href="https://twitter.com/settings/widgets/new" target="_blank">kaydettirdikten</a> sonra hesabýnýzýn ayarlar kýsmýndan alabilirsiniz.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>Tweetlerinin görüntülenmesini istediðiniz Twitter hesap ismi.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>bileþenin rengi. Açýk veya koyu.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>bileþen biçimlendirme öðelerinin kýsmen saklanmasýný saðlar.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>gösterilecek olan en fazla tweet sayýsý.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>tweetlerdeki baðlantý adreslerinin rengi..</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>kutunun çerçeve rengi.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>bileþen penceresinin uzunluðu.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>bileþen penceresinin eni.</td>
		</tr>
	</table>
	Bu kutu, temel olarak sol sütunda gösterilir. Fakat üç adet görüntüleme seçeneði bulunmaktadýr: <strong>sol</strong>, <strong>sað</strong> ve <strong>alt</strong>. <br>
				Kutunun konumunu deðiþtirmek için, <strong>app/design/frontend/default/themeXXX/layout</strong> klasöründe yer alan <strong>tm_twitter.xml</strong> dosyasýný düzenlemelisiniz.<br>
	Bu dosyada <strong>name="left"</strong> (name="right", name="footer") parametreleriyle üç ayrý <strong><em>reference</em></strong> özelliðine ait kutu bulunur.
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
Buradaki iki kutu aktif deðil. Sadece <strong>name="left"</strong> olan etkin durumda. Ve bu sayede modül sol sütunda gösteriliyor. <br>
				Eðer modülü altta göstermek isterseniz, yapmanýz gerekenler:

<ol>
	<li>Öncelikle <strong>name="footer"</strong> yazan satýrý, baþýndaki ok ünlem ve tireleri kaldýrarak etkinleþtirin ve onlarý <strong>name="left"</strong> satýrýnýn baþýna koyun.</li>
	<li>Daha sonra <strong>app/design/frontend/default/themeXXX/template/page/html</strong> klasöründeki <strong>footer.phtml</strong> isimli dosyayý açýn.</li>
	<li>Gereken yere bu kodu yapýþtýrýn:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>
	</li>
</ol>
<p>Twitter kutusu artýk alt kýsýmda gösterilecektir.</p>
		