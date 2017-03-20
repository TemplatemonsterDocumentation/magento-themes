<h3>Film Slider</h3>
<p>O módulo FilmSlider da TemplateMonster é uma implementação do elegante e profissional plugin de jQuery ‘Slider Pro’. Permite que você inclua um slider com diversas camadas na página principal da sua loja. Opções de configuração e interface de usuário ricas e detalhadas vão te ajudar a configurar seu slider de forma fácil e rápida.</p>
<p>No menu de navegação principal você verá uma nova opção <strong>TemplateMonster</strong>. <br>Para começar a trabalhar com o módulo FilmSlider module, clique no item <strong>Template Monster -> Sliders</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Aqui você pode ver uma lista de sliders disponíveis onde você pode ativar/desativar, apagar ou alterar sliders.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Para incluir um novo slider clique em ‘Add New Slider’ no canto superior direito. <br>
Na tela de configuração do slider, na seção ‘General Options’ você pode ver todos as configurações do slider. A seção ‘Slider Items’ permite incluir slides ao seu slider.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Vejamos que opções de slider estão disponíveis. Como pode ver, opções são divididas em diversas partes que fazem a interface de configuração mais amigável.</p>

<h4>Opções Gerais</h4>
<h5>Configurações principais</h5>
<p>Esta seção permite definir um título de slider, escolher a view da loja, ativar/desativar slider, definir sua largura e altura. Cada opção faz referência às propriedades do plugin Slider Pro jQuery. Você pode encontrar descrições mais específicas de cada propriedade na <a target="_blank" href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties"></a>documentação oficial do Slider Pr. Algumas propriedades do plugin de jQuery podem não estar presentes na configuração do FilmSlider, nós vamos incluí-las em lançamentos futuros.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
As dimensões do slider (largura/width e altura/height) podem ser definidas como um valor fixo, como 900 (indicando 900 pixels), ou em valor de porcentagem, coomo '100%'.
<div class="alert alert-warning">
	Perceba que: o título do slide, a view da loja e o estado são obrigatórios, você não pode salvar o slide sem esses valores.
</div>

<h5>Configurações de imagem</h5>
<p>Na seção imagem você pode ajustar a configuração das imagens do slider. Cada opção tem uma descrição breve. Vamos olhar algumas delas de forma específica.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Define a razão do aspecto dos slides. Se definido para um valor diferente de -1 , a altura dos slides será alterada para manter a razão especificada.
<h6>imageScaleMode</h6>
Define o tipo de cobertura das imagens principais do slide(imagens incluídas como fundo). 'cover' vai alterar e cortar a imagem de forma que ela cubra o slide inteiro. 'contain' vai manter a imagem inteira visível dentro do slide. 'exact' vai combinar o tamanho da image e o tamanho do slide. 'none' vai manter a imagem do tamanho original.
<h6>forceSize</h6>
Indica se o tamanho do slider será forçado à largura total ou janela à toda.

<div class="alert alert-warning">
	Nota: É possível fazer o slider com a largura total ou largura total da janela definindo sua largura e/ou altura para '100%'. No entanto, ás vezes o slider pode estar dentro de outra caixa com um tamanho menor do que  a largura total da janela. A propriedade 'forceSize' é útil nesta sotiação pois ela ainda vai aumentar o slider para cobrir toda a área de largura da janela atravessando os elementos pais.
</div>

<h5>Configuração dos Slides</h5>
Esta seção permite configurar o comportamento dos slides. Aqui você pode configurar a animação dos slides, o tamanho visível, se será aleatório e se vai se repetir.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Configurações da animação de fade</h5>
Esta seção contém configuração para a animação de fade.A animação de fade pode ser ativada ao alterar o slide.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Você pode liga-la se você quer uma transição para o slide anterior, sua duração em milisegundos. 

<h5>Configurações de reprodução automática</h5>
Reprodução automática é uma funcionalidade que permite avançar pelos slides automáticamente. As configurações contém opções para alterar o intervalo entre cada passagem automática, direção e parar a reprodução automática quando o mouse estiver em cima do slider.
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Configurações de controle</h5>
Os controles do slider são os botões de navegação que você usa para mudar o slide. No FilmSlider existem diversos tipo de controle de navegação: setas de anterior/próximo, botões de paginação. Com a navegação de teclado ativada você pode mudar de slides usando o teclado. Você também pode ativar o botão que passa o slider para o modo tela cheia.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Configurações responsivas</h5>
A seção de configurações responsivas altera o comportamento do slider em dispositivos móveis. Aqui você pode definir os pontos de limite (pequena, média, grande). Também pode ativar o comportamento ao passar o dedo.
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Configurações de caption</h5>
A funcionalidade caption permite incluir texto em cada slide. Esta seção permite ativar a animação de transparência da caption e definir sua duração.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Configurações principais de camadas</h5>
Configuração de camadas define o comportamento das camadas dos slides. Cada opção tem uma breve descrição nos campos de entrada.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Inclusão de slides</h4>
Voce pode incluir novos slides apenas após salvar o slider. Clique em ‘Save and Continue Edit’ no canto superior direito. Quando o slider estiver salvo, mude para a aba ‘Slider Items’.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Clique em ‘Add Slider Item’ para incluir um novo slide. Vejamos que as opções de configuração estão disponíveis.

<h5>Informação do slide</h5>
Aqui você pode incluir o título do slide e definir seu estado (ativado/desativado).

<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Imagens do slide</h5>
Esta seção permite incluir imagens ao slide. Clique no botão Insert Image para abrir a biblioteca de imagens onde você pode escolher as imagens disponíveis.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
Você também pode enviar imagens do seu computador.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
No campo “Image” você pode ver a visualização do seu slide. Você pode ver no tamanho que preferir. Nós movemos a próxima seção de configuração de slides para uma seção separada já que está relacionada à camadas do slide.

<h4>Trabalhando com camadas</h4>
FilmSlider é um slider multi-camadas. Isso significa que você pode incluir diversas camadas independentes ao seu slide. Camadas podem ser incluídas ao slide na tela de configurações de slide como descrito acima. Essa tela contém diversas seções de configurações de camada.

<h5>Lista de camadas</h5>
A seção de lista de camadas permite incluir camadas ao seu slide. Você pode incluir camadas de imagem e camadas de texto. Utilize os botões correspondentes para incluir camadas.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
Ao clicar em ‘Add layer image’ você verá uma biblioteca de imagens onde pode escolher entre as imagens disponíveis ou enviar uma imagem do seu computador. Ao clicar em ‘Add layer text’, você verá uma nova camada de texto e configurações de camada serão associadas à camada que você criou.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Layer text settings</h5>
Ao usar a seção ‘Layer text settings’ você pode incluir o texto da camada, o tamanho, cores, fontes, etc.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
No campo ‘Layer text/html’ você pode incluir o conteúdo de sua camada com ambos texto e código html.

<h5>Layer text position settings</h5>
Nesta seção você pode definir a posição do texto na camada.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Layer animation settings</h5>
Nesta seção você pode definir as animações da camada. Você pode definir sua posição no slide, transições, margens, atraso, duração, etc.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Quando você incluir diversas camadas, as configurações definidas embaixo (posição e animação) vão mostrar as configurações da camada escolhida.
<figure class="img-polaroid"><img src="img/magento/slide-23.png" alt="" /></figure>

<h4>Adding slider to page</h4>
To add slider to your page please use Magento widgets. In the main admin panel menu click <strong>Content -> Pages</strong> item.
<figure class="img-polaroid"><img src="img/magento/slide-24.png" alt="" /></figure>
Select the page you want to add slider to and click <strong>Edit</strong>.
<figure class="img-polaroid"><img src="img/magento/slide-25.png" alt="" /></figure>
At the page editing screen switch to <strong>Content</strong> section and click <strong>Insert Widget</strong> button.
<figure class="img-polaroid"><img src="img/magento/slide-27.png" alt="" /></figure>
In the appeared window select widget type <strong>Template Monster FilmSlider</strong>, select the slider you want to insert and click <strong>Insert Widget</strong> button. 
<figure class="img-polaroid"><img src="img/magento/slide-28.png" alt="" /></figure>
When you are done adding the widget click <strong>Save Page</strong> button and switch to store frontend to see the result.