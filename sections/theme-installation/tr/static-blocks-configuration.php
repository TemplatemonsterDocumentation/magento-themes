<h3>Sabit kutucuk ayarlar�</h3>
<p>Sayfa d�zenlemesini bitirdikten sonra sabit kutucuklar� da ayarlamal�s�n�z. ��lem hemen hemen ayn�: kaynak dosyadan kopyalayaca��n�z kodlar� Magento y�netici panelindeki gerekli yere yap��t�racaks�n�z. Sabit kutucuklar i�in de kullanaca��n�z tablo benzer olacak.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>�st men�den <strong>��erik > Kutucuklar</strong> k�sm�na girin. </li>
	<li>Sa� �st k��eden <strong>"Yeni Kutu Ekle"</strong> d��mesine bas�n. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Kutunun ismini ve kimli�ini girin. Kutu detaylar�n� �ablon ayar sayfas�ndan edinebilirsiniz (Sayfa D�zeleme k�sm�na bak�n�z).</li>
	<li>Open the block source file and copy the HTML code into the content area.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOT: baz� �ablonlar sabit kutucuk i�ermez, bu y�zden tablo bo� olabilir. </span></p>
<p class="alert alert-info"><span>Sabit kutucuk kodunun bulundu�u kaynak kodlar, �ablon paketindeki "<strong>sources\demo\static_blocks\</strong>" klas�r�nde bulunmaktad�r. </span></p>

<h4>Sabit i�erikli kutucuk nas�l g�sterilir?</h4>

<ol class="index-list"> 
	<li>�st men�den <strong>��erik > Bile�enler</strong> b�l�m�ne girin.</li>
	<li>Sa� �st k��eden <strong>"Bile�en Ekle"</strong> d��mesine bas�n.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>T�r� <strong>CMS Static Block</strong> olarak belirleyin ve bile�enin uygulanaca�� temay� se�in. Ard�ndan <strong>Devam</strong> d��mesine t�klay�n.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Bir sonraki sayfada <strong>Bile�en Ba�l���</strong> alan�n� doldurun. B�ylece bile�en, y�netici panelinizde bu isimle yer al�r. <strong>Ma�aza G�r�n�m�ne Ata</strong> k�sm�ndan, bile�enin g�r�nt�lenece�i ma�aza g�r�n�m�n� se�in. <strong>Tasar�m G�ncelleme</strong> kutucu�undan <strong>Tasar�m G�ncellemesi Ekle</strong> d��mesine t�klay�n. <strong>G�ster</strong> alan�ndan, bile�enin g�sterilece�i sayfalar� se�in. Se�ece�iniz sayfalara g�re farkl� alanlar� da doldurman�z gerekebilir.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Sol taraftan <strong>Bile�en Se�enekleri</strong> sekmesine t�klay�p, ilgili sabit kutucu�u se�in. De�i�iklikleri kaydetmeyi unutmay�n. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Ma�aza sayfalar�n� ve kutucuklar� d�zenledikten sonra, ma�azan�z art�k kullan�ma haz�r hale gelir.</p>