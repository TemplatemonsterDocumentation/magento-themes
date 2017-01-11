<h3>Configuração de blocos estáticos</h3>
<p>Quando terminar de configurar as páginas, você precisa configurar os blocos estáticos. O procedimento é parecido: você copia o código dos arquivos fonte e cola nos campos correspondentes no painel do Magento. Você precisa usar uma tabela semelhante só que para os blocos estáticos.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>No menu superior navegue para <strong>Content > Blocks (Conteúdo > Blocos)</strong>. </li>
	<li>No topo superior direito, clique em <strong>"Add New block" (Incluir novo bloco)</strong> para incluir um novo bloco estático. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Especifique o nome e identificador do bloco. Você pode obter os detalhes do bloco através da tabela na página de configuração do template (na parte Configuração de Páginas).</li>
	<li>Abra o arquivo fonte do bloco e copie código HTML na área de conteúdo.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOTA: alguns templates não contém blocos estáticos, então a tabela pode estar vazia. </span></p>
<p class="alert alert-info"><span>Os arquivos fonte com blocos estáticos estão em "<strong>sources\demo\static_blocks\</strong>" no pacote do template. </span></p>

<h4>Como exibir nossos blocos com conteúdo estático?</h4>

<ol class="index-list"> 
	<li>No menu superior navegue até <strong>Content > Widgets (Conteúdo > Widgets)</strong></li>
	<li>No menu superior direito, clique no botão <strong>"Add Widget" (Incluir Widget)</strong> para incluir um novo widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Especifique o tipo de widget <strong>CMS Static Block</strong> e a que tema deseja ablicar o widget, então clique no botão <strong>Continue (Continuar)</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Na próxima página no campo <strong>Widget Title (Título do Wdiget)</strong> escreva o nome do Widget que deve ser exibido no painel administrativo. No campo <strong>Assign to Store Views (Definir Visualizações da Loja)</strong> você precisa escolher que visualizações da loja vão exibir o widget. no campo <strong>Layout Updates (Atualizações de layout)</strong> clique em <strong>Add Layout Update(Incluir atualização de layout)</strong>. No campo <strong>Display On (Exibir em)</strong> você pode escolher que páginas terão o widget exibido. Dependendo na página escolhida você terá a oportunidade de preencher campos adicionais. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Na barra esquerda, clique na aba <strong>Widget Options (Opções de Widget)</strong> e escolha o bloco estático a qual se refere. Não esqueça de gravar as alterações. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Quando terminar de configurar as páginas da loja e blocos, sua loja está pronta.</p>