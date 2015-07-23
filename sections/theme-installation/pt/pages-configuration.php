<h3>Configurar páginas</h3>
<p>Para fazer com que seu template fiquei idêntico à nossa demonstração, você precisa criar páginas de forma específica. Providenciamos todos os arquivos com o código fonte das páginas. Você precisa adicioná-las ao painel do Magento seguindo as instruções abaixo. A tabela de configurações está localizada na página <b>Technical details</b> na demonstração do template. O arquivo de documentação contém o link para esta página:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <b>Documentation</b>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>A página principal do template é a que mais será afetada. Em geral ela contém os seguintes elementos: banners, slider, galeria, etc.</p>
<div class="alert alert-warning"><span>Nós recomendamos que você desabilite o editor WYSIWYG. Para fazer isso, navegue para  <strong>System &gt; Configuration</strong>. Abra a seção "<strong>Content Management</strong>" e na janela <strong>WYSIWYG Options</strong> troque a opção "<strong>Enable WYSIWYG Editor</strong>" para "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/pages_setting1.png" alt="" /></figure></div>
<p class="alert alert-warning"><span>Se você já tiver feito mudanças nos códigos das suas páginas e preferir adicionar nosso código sem afetar suas mudanças, recomendamos entrar em contato com profissionais da área ou faça um backup antes de alterar.</span></p>
<ol class="index-list">
	<li>No menu do topo, selecione <b>CMS > Pages</b>. Aqui você pode encontrar todas as páginas da loja. <b>Home page (a página inicial)</b>, <b>About Us (sobre nós)</b> e <b>Customer Service (SAC)</b> já devem estar habilitadas, então você não precisa adicioná-las. Você só precisa atualizar o HTML e XML delas. Abra qualquer uma delas para acessar o conteúdo.</li>
	<li>Abra a página e clique na aba <b>Content</b>. Ela contém o código HTML da página. Você pode pegar o código HTML do arquivo fonte apropriado. VOcê pode ver a lista de arquivos fonte incluídos na seção "Template Settings" da página de visualização do template. Copie o código do arquivo e cole na área <b>content</b>.</li>
	<li>Quando terminar de mexer no código HTML, mude para a aba <b>"Design"</b>. Nela, você encontrará código XML. Esse código permite que você adicione blocos estátios do Magento e widgets na página. O código XML deve ser copiado da mesma maneira que o HTML. Copie o código na área "<b>Layout Update XML</b>".</li>
	<li>Não esqueça de escolher uma opção válida de "<b>Layout</b>".</li>
	<li>Se você precisar de uma página nova, cique no botão <b>"Add New Page"</b> no topo à direita.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting2.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting3.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting4.png" alt="" /></figure>

<p>Se tiver dificuldade, leia um tutorial detalhado em <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p>	