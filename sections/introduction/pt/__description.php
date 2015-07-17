<h2 class="item1">Introdução</h2>
<p class="intro">
    Obrigado por comprar um template do Magento. Essa documentação consiste em diversas partes e demonstra todo o processos de como iniciar e administrar uma loja Magento do zero. Fizemos o máximo para manter este manual o mais claro e fácil de seguir possível.
</p>

<h3>O que é o Magento Commerce?</h3>
<p>Magento é uma plataforma de eCommerce rica em recursos e desenvolvida com tecnologia open-source. Ela provém controle sobre o conteúdo, a aparência e a funcionalidade de sua loja de eCommerce. A interface intuitiva do Magento oferece ferramentas poderosas de marketing, busca, otimização de busca e gerenciamento de catá-logo para entregar ao comerciante o poder de criar sites de acordo com suas necessidades únicas. Desenhado para ser completamente escalonável e segurado pela rede de suporte Varien, o Magento oferece à empresas a solução de eCommerce definitiva. <a href="http://www.magentocommerce.com/download" target="_blank">Mais informações</a></p>

<h3>O que é um tema do Magento?</h3>
<p>Um tema de Magento é um o design da sua loja online contruindo em cima do Magento. Isso quer dizer que você pode facilmente alterar a aparência da sua loja instalando um novo tema em poucos passos simples. Para garantir toda essa simplicidade, um tema de Magento contém todos os arquivos necessários para você extender e alterar o quanto quise.</p>

<article id="file_structure">
    <h4>Estrutura de arquivos</h4>

    O pacote do tema que você baixou consiste de diversos diretórios. Vejamos o que cada pasta contém:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - contém os arquivos de documentação.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - a documentação principal que você está lendo agora.</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - onde tem imagens de como seu tema se parecerá. Não é indicado para colocar no servidor de produção.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - contém os arquivos fonte do tema.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - com os arquivos fonte do Adobe Photoshop usados na criação do tema (.psd).</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - contém páginas e blocos adicionais que são providos junto com o tema.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - contém os arquivos de dados de amostra do tema.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - onde você encontra arquivos e diretórios que deveriam ser enviados para o diretorio raiz da instalação do Magento.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  o arquivo de recuperação do banco de dados. Contém o conteúdo de amostra do tema. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - contém os arquivos do tema do magento e diretórios que deveriam ser enviados para o diretório raiz de sua instalação do Magento.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - contém pacote de instalação completa do Magento com arquivos do mecanismo, tema e conteúdo de amostra (imagens de amostra).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - arquivo usado para extrair arquivos do fullpackage.zip ao enviar para o servidor de hospedagem.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - contém os links de onde as fontes personalizadas do template podem ser baixadas.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - contém instruções de como extrair o código fonte.</small></li>
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
    <ol>
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