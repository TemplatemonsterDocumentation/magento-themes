<h2 class="item1">Introdução</h2>
<p>
    Obrigado por comprar um template do Magento. Essa documentação consiste em diversas partes e demonstra todo o processos de como iniciar e administrar uma loja Magento do zero. Fizemos o máximo para manter este manual o mais claro e fácil de seguir possível.
</p>

<article id="whatismagento">
    <h3>O que é o Magento Commerce?</h3>
    <p>Magento é uma plataforma de eCommerce rica em recursos e desenvolvida com tecnologia open-source. Ela provém controle sobre o conteúdo, a aparência e a funcionalidade de sua loja de eCommerce. A interface intuitiva do Magento oferece ferramentas poderosas de marketing, busca, otimização de busca e gerenciamento de catá-logo para entregar ao comerciante o poder de criar sites de acordo com suas necessidades únicas. Desenhado para ser completamente escalonável e segurado pela rede de suporte Varien, o Magento oferece à empresas a solução de eCommerce definitiva. <a href="http://www.magentocommerce.com/download" target="_blank">Mais informações</a></p>
</article>

<article id="whatismagentotheme">
    <h3>O que é um tema do Magento?</h3>
    <p>Um tema de Magento é um o design da sua loja online contruindo em cima do Magento. Isso quer dizer que você pode facilmente alterar a aparência da sua loja instalando um novo tema em poucos passos simples. Para garantir toda essa simplicidade, um tema de Magento contém todos os arquivos necessários para você extender e alterar o quanto quise.</p>
</article>

<article id="file_structure">
    <h4>Estrutura de arquivos</h4>

    <p>O pacote do tema que você baixou consiste de diversos diretórios. Vejamos o que cada pasta contém:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contém os arquivos de documentação.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            a documentação principal que você está lendo agora.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> onde tem imagens de como seu tema se parecerá. Não é indicado para colocar no servidor de produção.</dd>
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
                            com os arquivos fonte do Adobe Photoshop usados na criação do tema (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contém páginas e blocos adicionais que são providos junto com o tema.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            contém os arquivos de dados de amostra do tema.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                <dd>
                                    onde você encontra arquivos e diretórios que deveriam ser enviados para o diretorio raiz da instalação do Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    o arquivo de recuperação do banco de dados. Contém o conteúdo de amostra do tema.
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
                <dd> contém os arquivos do tema do magento e diretórios que deveriam ser enviados para o diretório raiz de sua instalação do Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contém pacote de instalação completa do Magento com arquivos do mecanismo, tema e conteúdo de amostra (imagens de amostra).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> arquivo usado para extrair arquivos do fullpackage.zip ao enviar para o servidor de hospedagem.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contém os links de onde as fontes personalizadas do template podem ser baixadas.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contém instruções de como extrair o código fonte.</dd>
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
    <h3>Preparando-se</h3>

    <p>Antes de prosseguir com a instalação de sua loja Magento, verifique se você está preparado. Siga os passos abaixo:</p>

    <h4>Software de Edição</h4>

    <p>Para trabalhar com templates do Magento, recomendamos baixar todas as aplicações necessárias. Você pode verificar a lista de software necessário na visualização do template. <br>
        Os requerimentos variam entre templates, mas para a maioria deles você vai precisar de:</p>
    <ol class="index-list">
        <li>Primeiro, você vai precisar do WinZip 9+ (para Windows) ou do Stuffit Expander 10+ (para Mac) para extrair o conteúdo protegido por senha do arquivo sources_#########.zip.</li>
        <li>Você também deve precisar do Adobe Photoshop. Ele é usado para editar arquivos .PSD, e é necessário se você quiser editar gráficos e imagens do template.</li>
        <li>Para editar arquivos de código fonte, você vai precisar de um editor de códigos como Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Para subir arquivos para o servidor de hospedagem você vai precisar de um gerenciador de FTP como Total Commander,  FileZilla, CuteFTP, etc.</li>
    </ol>
    <h4>Hospedagem</h4>
    <p>O Magento Commerce é um programa desenvolvido com PHP/MySQL, você precisa preparar um ambiente de hospedagem para rodá-lo.</p>
    <p>Se você tem uma hospedagem que você administra, certifique-se de que ela está de acordo com os <a href="http://magento.com/resources/system-requirements" target="_blank">requisitos mínimos do Magento</a>.</p>
    <p>Do contrário, você pode rodar o Magento localmente no seu computador usando um servidor local. Para criar um servidor local, use os aplicativos próprios para isso, como <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Qualquer um desses pode ser facilmente instalado como qualquer outro programa e usá-lo para rodar o Magento. </p>
    <p>SPlease check the following tutorials on how to configure the local development environment:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
    </ul>
</article>