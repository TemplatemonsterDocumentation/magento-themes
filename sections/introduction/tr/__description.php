<h2 class="item1">Tanıtım</h2>
<p class="intro">
    Magento şablonunu satın aldığınız için teşekkür ederiz. Bu dökümantasyonda, tüm kurulum ve Magento satış sisteminin yönetim süreçleri adım adım anlatılmaktadır. Her şeyi, mümkün olduğunca açık ve kolay anlaşılır şekilde anlatmaya çalıştık.
</p>

<h3>Magento Commerce nedir?</h3>
<p>Magento, açık-kaynaklı teknolojiye sahip ve çok özellikli bir E-Ticaret platformudur. E-Ticaret mağazanızı esnek bir tasarım, içerik ve işlevsellikle kontrol edebilmenizi sağlar. Magento’nun yönetici arayüzü, özgün mesleki ihtiyaçlarınızı karışalamak amacıyle size etkili bir ticaret sistemi, arama motoru optimizasyonu ve katalog-yönetim araçları sunar. Tamamen ölçeklenebilir tasarımı ve Varien destek ağıyla Magento, şirketlere üst düzey bir e-Ticaret çözümü sunmaktadır. <a href="http://www.magentocommerce.com/download" target="_blank">Daha fazlası.</a></p>

<h3>Magento teması nedir?</h3>
<p>Magento teması, kendine özgü bir online mağaza tasarımı sunmaktadır. Dilerseniz Magento mağazanızın görünüşünü, bir kaç kolay adımla, yeni bir tema kurarak tamamen değiştirebilirsiniz. Magento temasında tüm gerekli kaynak kodları bulunmaktadır. Yani bu temada kolaylıkla, dilediğiniz şekilde düzenleme veya geliştirme yapabilirsiniz.</p>

<article id="file_structure">
    <h4>Dosya yapısı</h4>

    İndirmiş olduğunuz tema dosyasında bir kaç klasör bulunmaktadır. İçlerinde neler olduğuna şöyle bir bakalım:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - dökümantasyon dosyalarını kapsar.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - şu anda okumakta olduğunuz ana dökümantasyon dosyası.</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - temaya ait olan görselleri içerir.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - temanın kaynak dosyalarını içerir.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - temanın (.psd) formatındaki Adobe Photoshop kaynak dosyalarını içerir.</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - temayla gelen ek sayfaları ve örnek kutuları içerir.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - Magento temasının örnek veri dosyalarını içerir.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - Magento'yu kurduğunuz ana dizine yüklemeniz gereken dosya ve dizinleri içerir.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  veritabanı yedek dosyası. Tema için örnek içerik içerir. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - Magento'yu kurduğunuz ana dizine yüklemeniz gereken tema dosyaları ve dizinleri içerir.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - içermektedir Tam Magento kurulum paketi motor dosyaları ile, tema ve örnek içeriği (örnek fotoğraflar).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - dosyaları ayıklayabilmek için kullanılan dosya fullpackage.zip hosting sunucusuna yüklendiği zaman.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - şablonun özel fontlarını (yazı karakter türü) yükleyebileceğiniz bağlantı adreslerini içerir.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - kaynak dosyaları nasıl çıkarmanız gerektiğini anlatan bilgiler içerir.</small></li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Hazırlıklar</h3>

    <p>Magento mağazanızı kurmadan önce, tüm hazırlıkları yaptığınıza emin olunuz. Aşağıdaki hazırlık aşamalarını tamamlayınız:</p>

    <h4>Yazılımı düzenleme</h4>

    <p>Magento şablonunun üzerinde rahatça çalışabilmek için, tüm gerekli uygulamaları indirmenizi tavsiye ederiz. Gerekli yazılım listesini, şablon sayfasından görebilirsiniz.<br /> Her şablon farklı gereksinimler içerebilir fakat çoğunlukla aşağıdakiler geçerlidir:</p>
    <ol>
        <li>Öncelikle WinZip 9+ (Windows) ve Stuffit Expander 10+ (Mac) kullanarak, şifreyle korunmakta olan sources_#########.zip arşivini açmalısınız.</li>
        <li>Ayrıca Adobe Photoshop uygulamasına da ihtiyacınız olabilir. Bu uygulama, .PSD kaynak dosyalarını düzenlemek içindir. Eğer şablona ait olan grafik ve görselleri düzenlememek isterseniz, bu programa ihtiyacınız vardır.</li>
        <li>Şablonun kaynak dosyalarını düzenlemek için; Adobe Dreamweaver, Notepad++, Sublime Text gibi bir kod editörüne ihtiyacınız var.</li>
        <li>Dosyaları hosting sunucusuna yüklemek için, Total Commander, FileZilla, CuteFTP gibi bir dosya aktarım programına ihtiyacınız var.</li>
    </ol>
    <h4>Hosting (Site barındırma)</h4>
    <p>Magento Commerce, PHP/MySQL tabanlı bir uygulama olduğu için Magento'nun çalışabileceği bir barındırma sistemi kullanmanız gerekir.</p>
    <p>Eğer kullanmakta olduğunuz bir hosting servisi varsa,<a href="http://magento.com/resources/system-requirements" target="_blank"> Magento gereksinimleri </a> ni karşıladığına ve Magento mağazası için kullanıma hazır olduğuna emin olunuz.</p>
    <p>Veya dilerseniz Magento'yu, kendi bilgisayarınızda kurulu olan bir lokal sunucu üzerinden de kullanabilirsiniz. Bunun için <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> gibi bir uygulamaya ihtiyacınız olacaktır. Bu uygulamalar kolaylıkla kurulabilir ve Magento'yu çalıştırmak için kullanılabilir.</p>
    <p>Lokal bir barındırma sunucusu kurmak için, aşağıdaki sayfaları inceleyebilirsiniz:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">AppServ web geliştiricisi nasıl kurulur?</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">WAMP web geliştiricisi nasıl kurulur?</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">XAMP web geliştiricisi nasıl kurulur?</a></li>
    </ul>
</article>