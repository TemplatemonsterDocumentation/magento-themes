<h2 class="item1">Giri�</h2>
<p>
    Magento'yu indirdi�iniz i�in te�ekk�r ederiz. Bu dok�mantasyon Magento'nun s�f�rdan kurulup kullan�lmas� a�amalar�n� anlatmaktad�r.</p>

<article id="whatismagento">
    <h3>Magento E-Ma�aza nedir?</h3>
    <p>Magento a��k kaynak teknolojisiyle kurulmu� zengin �zellikleri olan bir E-Ma�aza platformudur. Ma�aza i�erikleri ve i�levsellikleri i�in esneklik sa�lar. Magento'nun y�netici aray�z� g��l� pazarlama, arama optimizasyonu ve katalog y�netimi ara�lar�yla, kurumlara t�m ihtiya�lar�n� kar��layabilen bir site sa�lar. Tamamen �l�eklenebilen bir �ekilde tasarlanm��t�r ve Varien destek a��yla sa�lamla�t�r�lm��t�r. Magento �irketlere �st d�zey E-Ma�aza ��z�m� sunmaktad�r. <a href="http://www.magentocommerce.com/download" target="_blank">Daha fazlas�n� oku..</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Magento temas� nedir?</h3>
    <p>Magento altyap�s�na dayanan, ma�azan�z i�in tam bir tasar�md�r. Magento ma�azan�z�n g�r�nt�s�n� bir ka� kolay ad�mla yeni bir tema kurarak de�i�tirebilirsiniz. Magento temas�n�n kaynak dosyalar�n� diledi�iniz gibi d�zenleyip, geni�letebilirsiniz.</p>
</article>

<article id="file_structure">
    <h4>Magento dosya yap�s�</h4>

    <p>�ndirdi�iniz tema paketi pek �ok klas�rden olu�ur. Bakal�m i�lerinde neler var:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> size rehberlik edecek dok�mantasyonlar i�erir.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            �u anda okumakta oldu�unuz ana rehber dosyas�.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> temaya ait g�rseller i�erir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> teman�n kaynak kodlar�n� i�erir.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            teman�n Adobe Photoshop kaynak dosyalar�n� i�erir (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            teman�n i�inde yer alan �rnek sayfa ve kutucuklar� i�erir.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                           Magento temas� i�in �rnek veri dosyas�n� i�erir.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    Magento kurulumu s�ras�nda ana dizine y�klenmesi gereken dosya ve klas�rleri i�erir.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    veritaban� yedekleme dosyas�. Teman�n �rnek verilerini i�erir.
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                <dd> Magento kurulumu s�ras�nda ana dizine y�klenmesi gereken tema dosyalar�n� ve dizinlerini i�erir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> dosyalar, tema ve �rnke veriyle (�rnek g�rseller) tam Magento kurulum paketini i�erir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> sunucuya y�klendi�inde, fullpackage.zip dosyas�n�n i�eri�ini a�mak i�in kullan�l�r.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> �ablon i�in yaz� t�rlerinin indirilebilece�i adresleri i�erir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> kaynak dosyalar�n nas�l a��laca��n� anlatan rehberi i�erir.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Onaylama</h3>
    <div class="alert alert-warning">
        <span>�ablonlar�m�zda kullan�lan HTML bi�imlemesi ve CSS stilleri anlamsal olarak do�ru ve ge�erlidir. Yine de baz� W3C hatalar� ile kar��la�abilirsiniz. Kodu 100% W3C onayl� olarak haz�rlamak, modern site teknolojilerinin kullan�m�n� k�t� �ekilde etkileyebilmektedir. Bizim amac�m�z, y�ksek kalitede �ablonlar kullanarak tatmin edici bir kullan�c� deneyimi sa�lamakt�r. Bu y�zden baz� kurallar� g�zard� etmekten �ekinmemekteyiz.</span>
    </div>
</article>
<article id="prepare">
    <h3>Haz�rl�k</h3>

    <p>Magento ma�azan�z� kurmadan �nce t�m haz�rl�klar� yapt���n�za emin olunuz. L�tfen a�a��daki haz�rl�k a�amalar�n� tamamlay�n�z:</p>

    <h4>Yaz�l�m� d�zenlemek</h4>

    <p>Magento �ablonu �zerinde rahat�a �al��abilmek i�in, gerekli olan t�m uygulamalar� indirmenizi �neririz. Bu uygulamalar�n listesini �ablonun �ng�sterim sayfas�nda bulabilirsiniz. </br> Farkl� �ablonlar i�in farkl� uygulamalar gerekebilir fakat �o�u i�in liste �u �ekildedir:</p>
    <ol class="index-list">
        <li>�ncelikle �ifreyle korunmakta olan sources_#########.zip ar�ivini a�mak i�in WinZip 9+ (Windows) ve Stuffit Expander 10+ (Mac) uygulamalar�na ihtiyac�n�z var. </li>
        <li>.PSD dosyalar�n�, �ablon tasar�m g�rsellerini ve genel g�rselleri d�zenlemek i�in Adobe Photoshop uygulamas�na ihtiyac�n�z var.</li>
        <li>�ablonun kaynak kod dosyalar�n� d�zenlemek i�in Adobe Dreamweaver, Notepad++, Sublime Text, vs. gibi bir kaynak d�zenleyicisi gerekir.</li>
        <li>Dosyalar� sunucuya y�klemek i�in ise Total Commander, FileZilla, CuteFTP, vs. gibi bir dosya y�neticisi gerekir.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Magento E-Ma�aza PHP/MySQL tabanl� bir uygulama oldu�u i�in servis sa�lay�c�n�z bunu kar��layabilmeli.</p>
    <p>Zaten bir hostinginiz varsa <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento gereksinimleri </a>ni kar��lad���na ve Magento ma�azas� i�in kullan�labilir oldu�una emin olun.</p>
    <p>Aksi halde, Magento'yu bilgisayar�n�zdaki yerel sunucunuza da kurabilirsiniz. Yerel bir sunucu olu�turmak i�in <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> gibi bir uygulama kullanabilirsiniz. Bunlar da herhangi bir program gibi kolayca kurulabilir ve Magento'yu �al��t�rabilir.</p>
    <p>Yerel bir sunucu kurmak i�in a�a��daki rehberleri inceleyebilirsiniz:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">AppServ nas�l kurulur</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">WAMP nas�l kurulur</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">XAMP nas�l kurulur</a></li>
    </ul>
</article>