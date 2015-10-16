<h3>Facebook like box</h3>
<p>Bu modül sayesinde Magento maðazanýzda bir Facebook beðeni kutusu gösterebilirsiniz.			<br>			
Genel ayarlar için Magento Yönetici Paneli'ndeki <strong>System > Configuration > Templatemonster > Facebook</strong> kýsmýný kullanýnýz.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Modül seçenekleri þu þekildedir:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>Facebook hesabýnýza ait olan özel kimlik. Facebook Like box kullanabilmek için, kayýtlý bir hesabýnýz bulunmasý gerekir. Detaylý bilgi için <a href="https://developers.facebook.com/" target="_blank">açýklama</a> adresini kullanabilirsiniz.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>Facebook Sayfası URL'si.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>sayfayý beðenen kiþilerin fotoðraflarýný gösterebilir veya saklayabilirsiniz.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>Başlığında kapak fotoğrafını gizleyin.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>sayfadaki güncel yazýlarý göster/gösterme.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>modül alanýnýn uzunluðu.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>modül alanýnýn geniþliði.</td>
	</tr>				
</table>
<p>Temel olarak modül, sol sütunda yer alýr. Fakat üç adet görüntüleme seçeneði bulunmaktadýr: <strong>sol</strong>, <strong>sað</strong> ve <strong>alt</strong>. Kutunun konumunu deðiþtirmek için, <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> klasöründe yer alan <strong>tm_facebook.xml</strong> dosyasýný düzenlemelisiniz.</p>

Bu dosyada <strong>name="left"</strong> (name="right", name="footer") parametreleriyle üç ayrý <strong><em>reference</em></strong> özelliðine ait kutu bulunur.
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
<p>Buradaki iki kutu aktif deðil. Sadece <strong>name="left"</strong> olan etkin durumda. Ve bu sayede modül sol sütunda gösteriliyor. <br>	Eðer modülü altta göstermek isterseniz, yapmanýz gerekenler:
</p>
<ol class="index-list">
	<li>Öncelikle <strong>name="footer"</strong> yazan satýrý, baþýndaki ok ünlem ve tireleri kaldýrarak etkinleþtirin ve onlarý <strong>name="left"</strong> satýrýnýn baþýna koyun.</li>
	<li>Daha sonra <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong> klasöründeki <strong>footer.phtml</strong> isimli dosyayý açýn.</li>
	<li>Gereken yere bu kodu yapýþtýrýn:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Artýk Facebook kutusu alt kýsýmda gösterilecek.</p>
		