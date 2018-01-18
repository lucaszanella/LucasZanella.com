<div align='justify'>
<h2>Paradox of Gabriel's Horn</h2>
    <p>The Gabriel's Horn paradox is based on the fact that the function $f(x) = \frac{1}{x}$, from $1$ to <b>infinity</b> has an <b>infinite area</b>, but a <b>finite volume</b>. This leads us to imagine that it would be needed <b>inifite</b> ink to 'paint' the interior surface of the horn. But a <b>finite</b> quantity of ink, when dumped inside the horn, would paint it completely. Of course this is just a mathematical conclusion, because ink is not infinitely divisible. However, in our calculations, we use infinetesimal quantities, called $dx$, which is a concept of calculus that theats infinitely divisible quantities.
			<h2>Taking the volume of the solid of revolution for the function $\frac{1}{x}$</h2>
				<p><div align="center"><img src='http://lucaszanella.com/img/1overX.png'></div>
				<p><h5>*Graph of $f(x)=\frac{1}{x}$</h5>
				<p>In our calculations, we'll generate the the horn by taking the graph from $1$ to $\infty$:
				<p><div align="center"><img src='http://lucaszanella.com/img/1overX_trompet_2.png'></div>
				<p>Then we'll rotate the graph about the $x$ axis to get the shape of the horn:
				<p><div align="center"><img src='http://lucaszanella.com/img/trompet.png'></div>
				<p><h5>*image from <a href="http://en.wikipedia.org/wiki/File:GabrielHorn.png" target="_blank">wikipedia</a></h5>
				<p>The volume of this solid is given by the sum of little cilinders. Each one has the volume: <b>height</b> times <b>perimeter of the cilinder</b> of height <b>dx</b>. 
                <p><div align="center"><img src='http://lucaszanella.com/img/cilindro.png'></div>
                <p>Remember that the height of a cilinder is the length of a 'base' to the other, being $dx$ a little fraction of the $x$ axis. Summing these infinite little cilinders, is the same as integrating. We know that the volume of the cilinder is $\pi r^2$, where $r^2$ is the value of the function at that point. Then $r^2 = \frac{1}{x^2}$. We're left with:
				<p>$$V = \int_1^{\infty} \pi \frac{1}{x^2}dx $$
				<p><h5>*we integrate from 1 because the function is not defined at $x=0$</h5>
				<p>An integral with bound at infinity is the same as $ \lim_{a\to\infty} \int_1^{a} \pi \frac{1}{x^2} dx$
				<p>Let $\pi$ out of the integral and find the antiderivative of $\frac{1}{x^2}$, that is $-\frac{1}{x}$. We get, then, from $1$ to $\infty$:
				<p>$$V = \pi\left(- \frac{1}{\infty} + \frac{1}{1}\right)$$
				<p>The volume tends to $\pi$, because $\frac{1}{\infty} \to 0$. Then, we have a <b>finite volume</b>.
			<h2>Finding the area by surface of revolution:</h2>
				<p>To find the area of the horn's surface, we integrate $ds$ of the curve $\frac{1}{x}$, like is shown at the figure:
				<p><div align='center'><img src="http://lucaszanella.com/img/1overx_surface.png"></div>
				<p>Rotate the graph around the $x$ axis, and we obtain the area of the cilinder with height $ds$. Multiply by the <b>perimeter</b> of the cilinder's base, which is $2\pi r$. Where $r$ is the value of the function at that point, the same as $f(x)$.
				<p>Integrate to sum up these infinite little cilinders:
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
				<p>$$ds = \sqrt{1 + \frac{dy^2}{dx^2}}\cdot dx$$
				<p>Sabemos que $\frac{dy^2}{dx^2}$ se trata da derivada da função $y = \frac{1}{x}$, que sabemos ser $\frac{dy}{dx} x^{-1}$, logo:
				<p>$$\frac{dy}{dx} x^{-1} = -\frac{1}{x^2}$$
				<p>$$ds = \sqrt{1 + {(-\frac{1}{x^2})}^2}\cdot dx$$
				<p>Terminamos com:
				<p>$$ds = \sqrt{1+\frac{1}{x^4}}\cdot dx$$
				<p>Voltando à integral $\int_1^{\infty} (2\pi r) ds$, subtituindo $ds$ pela nossa nova expressão, e $r$ por $f(x)$:
				<p>$$A = \int_1^{\infty} 2\pi \frac{1}{x} \sqrt{1 + \frac{1}{x^4}}\cdot dx$$
				<p>Fatorando $2\pi$:
				<p>$$A = 2\pi \int_1^{\infty} \frac{1}{x} \sqrt{1 + \frac{1}{x^4}}\cdot dx$$
				<p>Como $\sqrt{1 + \frac{1}{x^4}}$ é uma expressão sempre maior que $1$, isto é, não diminuirá seu coeficiente $\frac{1}{x}$, faremos um pequeno truque, ao comparar esta integral com uma de valor menor, porém parecida, mas que sabemos que é infinita, quando $x$ tende a infinito:
				<p>$$A = 2\pi \int_1^{\infty} \frac{1}{x} \sqrt{1 + \frac{1}{x^4}}\cdot dx \geq 2\pi \int_1^{\infty} \frac{1}{x} \cdot dx$$
				<p>A integral da direita é fácil de se resolver. Sabemos que $\int \frac{1}{x} = ln(x) + C$, então:
				<p>$$\int_1^{\infty} \frac{1}{x} dx = ln(\infty) - ln(1) = \infty$$
				<p>Ao comparar a integral original, com nossa integral de valor $\infty$, e sabendo que ela é maior, automaticamente resulta na conclusão de que nossa integral referente à área do trompete também tende a infinito. Provando assim que a área é infinita.
</div>