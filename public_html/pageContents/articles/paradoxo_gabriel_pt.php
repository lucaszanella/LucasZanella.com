<div align='justify'>
<h2>Trombeta  de Gabriel</h2>
				<p>O paradoxo da trombeta de Gabriel consiste no fato de, ao se analisar a área e o volume de uma trombeta de largura infinita, gerada pela função $f(x) = \frac{1}{x}$, observamos uma <b>área infinita</b>, porém <b>volume finito</b>. Daí concluímos que precisaríamos de <b>infinitas</b> pinceladas para pintar a parte interna do trompete. Porém, uma quantidade <b>finita</b> de tinta, ao ser despejada dentro do trompete, o preencheria, pintando completamente. É claro que se trata apenas de uma conclusão matemática, pois a tinta não é infinitamente divisível, isto é, a quantidade pintada se limita ao tamanho dos átomos. Já nossos cálculos, se baseiam em quantidades infinitesimais, ($dx$), uma espécie de conceito de cálculo em que se usa uma quantidade infinitamente divisível.
			<h2>Calculando o volume através de sólido de revolução</h2>
				<p><div align="center"><img src='http://lucaszanella.com/img/1overX.png'></div>
				<p><h5>*Gráfico da função $f(x)=\frac{1}{x}$</h5>
				<p>Para nossos cálculos, vamos gerar um trompete a partir da parte em vermelho do gráfico abaixo, que começa em 1 e vai para o infinito
				<p><div align="center"><img src='http://lucaszanella.com/img/1overX_trompet_2.png'></div>
				<p>Agora vamos rotacionar o gráfico ao longo do eixo $x$, formando assim o formato do trompete.
				<p><div align="center"><img src='http://lucaszanella.com/img/trompet.png'></div>
				<p><h5>*imagem da <a href="http://en.wikipedia.org/wiki/File:GabrielHorn.png" target="_blank">wikipedia</a></h5>
				<p>Como o volume deste sólido pode ser calculado pela <b>altura</b> vezes <b>o perímetro do cilindro</b> de altura <b>dx</b> (lembrando que a altura do cilindro se refere ao comprimento de uma 'base' à outra, sendo <b>dx</b> uma pequena parcela do eixo x, e somado infinitamente, basta encontrarmos a área (integral) do nosso gráfico, e multiplicarmos pelo perímetro pelo qual rotacionamos a figura. Imaginando o perímetro como uma das linhas em roxo na figura (sendo o comprimento dessa linha horizontal, infinitamente pequeno, ou seja, $dx$, podemos ver que nada mais é que um círculo, cujo perímetro é $\pi r^2$, e $r^2$ é o valor da função naquele local, ou seja, $r^2 = \frac{1}{x^2}$. Finalizamos com a integral:
				<p>$$V = \int_1^{\infty} \pi \frac{1}{x^2}dx $$
				<p><h5>*dica: imagine que está integrando vários cilindros de altura $dx$, e raio $f(x) = \frac{1}{x}$, de $1$ a $\infty$, como na imagem abaixo:</h5>
				<p><div align="center"><img src='http://lucaszanella.com/img/cilindro.png'></div>
				<p><h5>*usamos o valor 1 para evitar a singularidade em $x=0$</h5>
				<p>Esta é apenas uma definição formal, mas basta integrar o perímetro do gráfico ao longo de $dx$, ou seja: $\int_1^{\infty} \pi \frac{1}{x^2} dx$
				<p>Fatorando a constante $\pi$ e integrando $\frac{1}{x^2}$, que é, notadamente, $-\frac{1}{x}$, ficamos com:
				<p>$$V = \pi\left(- \frac{1}{\infty} + \frac{1}{1}\right)$$
				<p>Percebemos claramente que o volume tende a $\pi$, pois $\frac{1}{\infty} = 0$. Provando assim que o volume é <b>finito</b>
			<h2>Calculando a área através da superfície de revolução:</h2>
				<p>Para calcular a área do trompete, vamos integrar pequenas partes $ds$ da curva $\frac{1}{x}$, como mostrado na figura:
				<p><div align='center'><img src="http://lucaszanella.com/img/1overx_surface.png"></div>
				<p>Ao rotacionarmos a figura pelo eixo $x$, obtemos a área lateral do cilindro formado por $ds$, multiplicando pelo <b>perímetro</b> do círculo, que é $2\pi r$. Sendo $r$ (raio) o valor da função no ponto, ou seja, $f(x)$.
				<p>Basta integrar:
				<p>$$\int_1^{\infty} (2\pi r) ds$$
				<p>Porém como $r = \frac{1}{x}$, devemos obter nosso $d$ em função de x. Então devemos modificar o $ds$ para $dx$, deste modo:
				<p><div align="center"><img src="http://lucaszanella.com/img/trompet_ds.png"></div>
				<p>Observe que $ds$ é a composição de $dx$ e $dy$. Uma vez que podemos montar um triângulo, observamos no plano cartesiano que, aplicando o teorema de pitágoras, terminamos com:
				<p>$$ds^2 = dx^2 + dy^2$$
				<p>Agora vamos utilizar de um pequeno truque. A parte de $dy^2$ sozinho não nos ajuda muito com os cálculos. Mas sabemos que podemos calcular $\frac{dy^2}{dx^2}$, pois é $(\frac{dy}{dx})^2$. Ou seja, se transformarmos $dy^2$ em $\frac{dy^2}{dx^2}$, podemos continuar com nossos cálculos. Para isso, como nossa integral requer $ds$, basta calcular a raiz quadrada dos dois lados, resultando:
				<p>$$ds = \sqrt{dx^2 + dy^2}$$
				<p>O truque consiste em multiplicar os dois lados por $\frac{1}{dx}$:
				$$\frac{ds}{dx} = \sqrt{dx^2 + dy^2} \frac{1}{dx}$$
				<p>E então inserir o $dx$ na raiz. (lembre-se da propriedade: $\frac{\sqrt{y}}{x} = \sqrt{\frac{y}{x^2}}$), ficamos com:
				<p>$$\frac{ds}{dx} = \sqrt{\frac{dx^2}{dx^2} + \frac{dy^2}{dx^2}}$$
				<p>Multiplicando os dois lados por $dx$ e simplificando $\frac{dx^2}{dx^2}$:
				<p>$$ds = \sqrt{1 + \frac{dy^2}{dx^2}} dx$$
				<p>Sabemos que $\frac{dy^2}{dx^2}$ se trata da derivada da função $y = \frac{1}{x}$, que sabemos ser $\frac{d}{dx} x^{-1}$, logo:
				<p>$$\frac{d}{dx} x^{-1} = -\frac{1}{x^2}$$
				<p>$$ds = \sqrt{1 + {\left(-\frac{1}{x^2}\right)}^2}dx$$
				<p>Terminamos com:
				<p>$$ds = \sqrt{1+\frac{1}{x^4}}\cdot dx$$
				<p>Voltando à integral $\int_1^{\infty} (2\pi r) ds$, subtituindo $ds$ pela nossa nova expressão, e $r$ por $f(x)$:
				<p>$$A = \int_1^{\infty} 2\pi \frac{1}{x} \sqrt{1 + \frac{1}{x^4}} dx$$
				<p>Fatorando $2\pi$:
				<p>$$A = 2\pi \int_1^{\infty} \frac{1}{x} \sqrt{1 + \frac{1}{x^4}}dx$$
				<p>Como $\sqrt{1 + \frac{1}{x^4}}$ é uma expressão sempre maior que $1$, isto é, não diminuirá seu coeficiente $\frac{1}{x}$, faremos um pequeno truque, ao comparar esta integral com uma de valor menor, porém parecida, mas que sabemos que é infinita, quando $x$ tende a infinito:
				<p>$$A = 2\pi \int_1^{\infty} \frac{1}{x} \sqrt{1 + \frac{1}{x^4}} dx \geq 2\pi \int_1^{\infty} \frac{1}{x} dx$$
				<p>A integral da direita é fácil de se resolver. Sabemos que $\int \frac{1}{x} = ln(x) + C$, então:
				<p>$$\int_1^{\infty} \frac{1}{x} dx = \ln(\infty) - \ln(1) = \infty$$
				<p>Ao comparar a integral original, com nossa integral de valor $\infty$, e sabendo que ela é maior, automaticamente resulta na conclusão de que nossa integral referente à área do trompete também tende a infinito. Provando assim que a área é infinita.
</div>