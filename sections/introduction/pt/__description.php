<h2 class="item1">Introdução</h2>
<p>
    Obrigado por baixar este tema do Magento. Esta documentação consiste em diversas partes e cobre 
    todo o processo de instalação e configuração do tema do Magento do início.
</p>

<article id="whatismagento">
    <h3>O que é o Magento Commerce?</h3>
    <p>Magento é uma plataforma de eCommerce construída com tecnologia open-source. Ele te dá flexibilidade e controle sobre a aparência, conteúdo e funcionalidades da loja de comércio eletrônico. A interface administrativa intuitiva do Magento's contém poderosas ferramentas de marketing, otimização de motores de busca e de gerenciamento de catálogo para oferecer a comerciantes o poder de criar sites que são criados especificamente para suas necessidades únicas de negócio. Criado para ser completamente escalável e protegido pela rede de suporte da Varien, Magento oferece às empresas a solução definitiva de eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">More information</a></p>
</article>

<article id="whatismagentotheme">
    <h3>O que é um tema do Magento?</h3>
    <p>O tema do Magento é o design completo de sua loja online baseado no motor do Magento. Em outras palavras, você pode mudar a aparência de sua loja Magento instalando o novo tema em passos fáceis. Com toda a sua simplicidade o tema do Magento já vem com todos os arquivos necessários para você alterar e extender como desejar.</p>
</article>

<article id="file_structure">
    <h4>Estrutura de arquivos do Magento</h4>

    <p>O pacote do tema que você baixou consiste em diversas pastas. Vejamos o que cada uma contém:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contém arquivos de documentação.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            o arquivo principal de documentação que você está lendo no momento.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contém as capturas de tela do tema. Não é para produção.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> contém os arquivos fonte do tema.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            contém os arquivos de Adobe Photoshop fontes do tema (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contém páginas adicionais e blocos personalizados que vem com o tema.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            contém os arquivos de dados de exemplo do tema do Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    contém arquivos e diretórios que devem ser enviados ao diretório raíz da instalação do Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    o arquivos de backup do banco de dados. Contém conteúdo de exemplo.
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
                <dd> contém os arquivos e diretórios do tema do Magento e devem ser enviados para o diretório raiz da sua instalação do Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contém o pacote completo de instalação do Magento com arquivos do motor, tema e conteúdo exemplo (imagens de exemplo).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> arquivo usado para extrair os arquivos de fullpackage.zip quando enviados para o servidor de hospedagem.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contém links de onde você pode baixar as fontes personalizadas.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contém instruções de como extrair arquivos fonte.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validação</h3>
    <div class="alert alert-warning">
        <span>Ambos a marcação HTML e os estilos CSS usados em nosso template são semânticamente corretos e válidos. No entanto, alguns erros W3C ainda podem ocorrer. Criar código 100% válido para a W3C elimina o uso de tecnologias modernas da web como funcionalidades do CSS3 e da marcação do HTML5. Nosso objetivo é entregar uma experiência rica de usuário com templates de alta qualidade e às vezes precisamos quebrar algumas regras.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparação</h3>

    <p>Antes de prosseguir com a instalação de sua loja Magento, verifique se você tem tudo o que precisa. Siga os passos de preparação:</p>

    <h4>Programas de edição</h4>

    <p>Para mexer no template Magento com conforto, recomendamos baixar todas as aplicações necessárias. Você pode ver a lista de software necessário na página de previsão do template.</br> Os requisitos podem variar para diferentes templates, para muitos deles são os seguintes:</p>
    <ol class="index-list">
        <li>Primeiro, você precisa usar o WinZip 9+ (Windows) ou Stuffit Expander 10+ (Mac) para extrair o arquivo sources_#########.zip que é protegido por senha. </li>
        <li>Você também precisa do Adobe Photoshop application. Ele é usado para alterar os arquivos fonte .PSD, e é necessário se deseja alterar os gráficos e imagens do template.</li>
        <li>Para alterar o código fonte, você vai precisar de um editor de código como o Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Para enviar arquivos para o servidor de hospedagem você pode precisar de um gerenciador de FTP como Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hospedagem</h4>
    <p>O Magento Commerce é um aplicativo baseado em PHP/MySQL, você precisa preparar um ambiente de hospedagem desse tipo para rodar o Magento.</p>
    <p>Se você tiver uma hospedagem, verifique se está adequado aos <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> requisitos do Magento </a> e está pronto para ser usado por uma loja Magento.</p>
    <p>Do contrário, você pode rodar o Magento localmente na sua máquina usando um servidor local. Para criar um servidor local de hospedagem use aplicações de localhost como <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Qualquer um desses pode ser instalado facilmente no seu computador como qualquer outro programa e usados para rodar o Magento. </p>
    <p>Leia os seguintes tutoriais de como configurar um ambiente local:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
    </ul>
</article>