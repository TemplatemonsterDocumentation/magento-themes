<h2 class="item1">Tanıtım</h2>
<p>
    Magento şablonunu satın aldığınız için teşekkür ederiz. Bu dökümantasyonda, tüm kurulum ve Magento satış sisteminin yönetim süreçleri adım adım anlatılmaktadır. Her şeyi, mümkün olduğunca açık ve kolay anlaşılır şekilde anlatmaya çalıştık.
</p>

<article id="whatismagento">
    <h3>Magento Commerce nedir?</h3>
    <p>Magento, açık-kaynaklı teknolojiye sahip ve çok özellikli bir E-Ticaret platformudur. E-Ticaret mağazanızı esnek bir tasarım, içerik ve işlevsellikle kontrol edebilmenizi sağlar. Magento’nun yönetici arayüzü, özgün mesleki ihtiyaçlarınızı karışalamak amacıyle size etkili bir ticaret sistemi, arama motoru optimizasyonu ve katalog-yönetim araçları sunar. Tamamen ölçeklenebilir tasarımı ve Varien destek ağıyla Magento, şirketlere üst düzey bir e-Ticaret çözümü sunmaktadır. <a href="http://www.magentocommerce.com/download" target="_blank">Daha fazlası.</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Magento teması nedir?</h3>
    <p>Magento teması, kendine özgü bir online mağaza tasarımı sunmaktadır. Dilerseniz Magento mağazanızın görünüşünü, bir kaç kolay adımla, yeni bir tema kurarak tamamen değiştirebilirsiniz. Magento temasında tüm gerekli kaynak kodları bulunmaktadır. Yani bu temada kolaylıkla, dilediğiniz şekilde düzenleme veya geliştirme yapabilirsiniz.</p>
</article>

<article id="updatabletheme">
    <h3>Ketty temasý</h3>
    <p>Premium temasýna güncel bir tasarým ve özellik eklemiþ olmaktan mutluluk duyuyoruz. </p>
    <h4>Deðiþiklikler</h4>
    <h6>Önemli Güncelleme:</h6>
    <ul class="line-list">
        <li>Magento 1.9.2.1 versiyonuyla uyumlu olan tema paketini çýkarttýk;</li>
        <li>Ayarlanabilir örnek ürün özelliði ekledik.</li>
    </ul>
    <h6>Diðer Güncellemeler:</h6>
    <ul class="line-list">
        <li>About Us page 2 sayfasýný ekledik;</li>
        <li>Contact us page 2 sayfasýný ekledik;</li>
        <li>Garanti sayfasýný ekledik;</li>
        <li>Nakliye &amp; Teslimat sayfasýný ekledik;</li>
        <li>24/7 Destek sayfasýný ekledik;</li>
        <li>404 sayfasýný ekledik;</li>
        <li>Sýk Sorulan Sorular sayfasýný ekledik;</li>
        <li>Ketty Haber Bülteni þablonunu oluþturduk;</li>
        <li>Yeni alt sayfa ve ürün sayfasý tasarýmlarý ekledik.</li>
    </ul>
    <p>Þablon paketinin içeriði, standart Magento þablonuna göre farklýlýk içermektedir. Bu yüzden size bu konuda destek vermek isteriz. </p>
    <p>Arþivde iki klasör bulunmaktadýr :</p>
    <ul class="marked-list">
        <li><strong>magento_1.9x_v.1.0</strong></li>
        <li><strong>magento_1.9x_v.2.0</strong></li>
    </ul>
    <p><strong>magento_1.9x_v.1.0</strong> klasörü, standart temaya dayanan Magento 1.9.1.0 klasörleri içermektedir. Bu tema daha önceki zamanlarda satýlmaktaydý.</p>
    <p><strong>magento_1.9x_v.2.0</strong> klasörü, RWD temasýna dayanan güncellenmiþ Magento 1.9.2.1 temasýný içermektedir. Bu temada güncellenmiþ alt sayfa tasarýmý ve ayarlanabilir iþlevsellikler bulunmaktadýr.</p>
    <div class="alert alert-warning">
        <p>Eski tema yenisiyle uyumlu deðildir. Bu yüzden yeni temayý, eskisinin üzerine yüklemeyin.</p>
    </div>
    <p>Sayfa ayarlarý için daha fazla bilgiye <strong>Magento tema kurulumu</strong> ve <strong>Özgün tema ayarlarý</strong> bölümlerinden ulaþabilirsiniz.</p>
</article>

<article id="file_structure">
    <h4>Dosya yapısı</h4>

    <p>İndirmiş olduğunuz tema dosyasında bir kaç klasör bulunmaktadır. İçlerinde neler olduğuna şöyle bir bakalım:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> dökümantasyon dosyalarını kapsar.</dd>
            </dl>
            <ul>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            şu anda okumakta olduğunuz ana dökümantasyon dosyası.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> temaya ait olan görselleri içerir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>magento_1.9x_v.1.0</strong></dt>
                <dd> Magento 1.9.x. <strong>base -> default</strong> temasýna dayanan eski þablon dosyalarýný içermektedir.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                        <dd> temanın kaynak dosyalarını içerir.</dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                                <dd>
                                    temayla gelen ek sayfaları ve örnek kutuları içerir.
                                </dd>
                            </dl>
                        </li>
                        <li class="last-example">
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                                <dd>
                                    Magento temasının örnek veri dosyalarını içerir.
                                </dd>
                            </dl>
                            <ul>
                                <li>
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                        <dd>
                                            Magento'yu kurduğunuz ana dizine yüklemeniz gereken dosya ve dizinleri içerir.
                                        </dd>
                                    </dl>
                                </li>
                                <li class="last-example">
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                        <dd>
                                            veritabanı yedek dosyası. Tema için örnek içerik içerir.
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>                        
                    </ul>
                </li>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                        <dd> Magento'yu kurduğunuz ana dizine yüklemeniz gereken tema dosyaları ve dizinleri içerir.</dd>
                    </dl>            
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>magento_1.9x_v.2.0</strong></dt>
                <dd> Magento 1.9.x. <strong>RWD -> default</strong> temasýna dayanan yeni þablon dosyalarýný içermektedir.</dd>
            </dl>
            <ul>                
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>newsletter</strong></dt>
                         <dd> Bu tema; tasarýmýna tam olarak uyumlu þekilde oluþturulan, bülten þablonunun dosya ve klasörlerini içermektedir.</dd>
                    </dl>            
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                        <dd> temanın kaynak dosyalarını içerir.</dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                                <dd>
                                    temayla gelen ek sayfaları ve örnek kutuları içerir.
                                </dd>
                            </dl>
                        </li>
                        <li class="last-example">
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                                <dd>
                                    Magento temasının örnek veri dosyalarını içerir.
                                </dd>
                            </dl>
                            <ul>
                                <li>
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                        <dd>
                                            Magento'yu kurduğunuz ana dizine yüklemeniz gereken dosya ve dizinleri içerir.
                                        </dd>
                                    </dl>
                                </li>
                                <li class="last-example">
                                    <dl class="inline-term">
                                        <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                        <dd>
                                            veritabanı yedek dosyası. Tema için örnek içerik içerir.
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
                        <dd> Magento'yu kurduğunuz ana dizine yüklemeniz gereken tema dosyaları ve dizinleri içerir.</dd>
                    </dl>            
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                        <dd> içermektedir Tam Magento kurulum paketi motor dosyaları ile, tema ve örnek içeriği (örnek fotoğraflar).</dd>
                    </dl>            
                </li>
                <li class="last-example">
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                        <dd> dosyaları ayıklayabilmek için kullanılan dosya fullpackage.zip hosting sunucusuna yüklendiği zaman.</dd>
                    </dl>            
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> şablonun özel fontlarını (yazı karakter türü) yükleyebileceğiniz bağlantı adreslerini içerir.</dd>
            </dl>            
        </li>
        <li class="last-example">
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> kaynak dosyaları nasıl çıkarmanız gerektiğini anlatan bilgiler içerir.</dd>
            </dl>            
        </li>
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
    <ol class="index-list">
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