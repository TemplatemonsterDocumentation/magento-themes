<h3>Configuração das páginas</h3>
<p>Para fazer seu template ficar exatamente igual ao site de exemplo, você precisa configurar as páginas da loja de forma específica. Nós te damos todo o código fonte da página. Você precisa incluí-las no painel administrativo do Magento como instruído abaixo usando a tabela de configurações. A tabela de configurações está na página <strong>Technical details</strong> na página de visualização do template. O arquivo de documentação contém o link para esta página:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Documentation</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>A página principal do template é a que será mais afetada. Em geral contém os seguintes elementos: banners, slider, galeria, etc.</p>
<div class="alert alert-warning"><span>Nós recomendamos desativar o editor WYSIWYG. Para fazer isso, no menu superior do painel administrativo escolha <strong>Stores &gt; Configuration (Lojas &gt; Configuração)</strong>. Abra a seção "<strong>Content Management</strong>" e na janela <strong>WYSIWYG Options (Opções WYSIWYG)</strong> troque "<strong>Enable WYSIWYG Editor (Ativar Editor WYSIWYG)</strong>" para "<strong>Disabled Completely (Desativar Completamente)</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>Caso você já tenha feito alterações no código de suas páginas e não queira incluir código sem afetar estar mudanças, recomendamos entrar em contato com técnicos profissionais ou preparar um backup delas antes de alterá-las.</span></p>
<ol class="index-list">
	<li>Do menu superior escolha <strong>Content > Pages (Conteúdo > Páginas)</strong>. Aqui você pode encontrar todas as páginas da loja. <strong>Home page</strong> (Página principal), <strong>About Us</strong> (Sobre nós) e <strong>Customer Service</strong>(Serviço ao cosumidor, ou SAC) já devem estar disponíveis, então você não precisa incluí-las. Você só precisa atualizar o conteúdo HTML e XML. Abra qualquer uma delas em qualquer ordem para ter acesso ao conteúdo. <figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Abra a página e escolha a aba <strong>Content</strong>. Ela deve conter o código HTML da página. Você pode Você pode pegar o código HTML do arquivo fonte aproprieado. Você pode ver a lista de arquivos fonte incluídos na seção "Template Settings" (Configurações de template) na sua página de visualização do template. Copie o código do arquivo fonte e cole na área de <strong>conteúdo</strong>.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Quando terminar de editar o código HTML, troque para a aba <strong>"Design"</strong>. Ela contém o código XML da página. Código XML permite que você inclua blocos estáticos do Magento e widgets à página. O código XML deve ser copiado da mesma forma que os arquivos fonte do HTML. Copie o código XML para a área "<strong>Layout Update XML (Atualização de Layout XML)</strong>".<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>Não esqueça da opção "<strong>Layout</strong>" válida.</li>
	<li>No caso de precisar incluir uma página, clique no botão <strong>"Add New Page" (Incluir nova página)</strong> no topo superior direito.</li>
</ol>

<!-- <p>In case you have any difficulties, please check the detailed tutorial on <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p> -->		