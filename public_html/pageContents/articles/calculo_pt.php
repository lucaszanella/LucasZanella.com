<div align='justify'>
<h2>Teoremas de Cálculo</h2>
			Este artigo é dedicado a fazer uma revisão sobre alguns aspectos do cálculo diferencial e integral, pois a maioria dos meu artigos requer um conhecimento prévio destes aspectos.
			<h2>Definição precisa de limite</h2>
			<p>Se $\lim_{x\to a}f(x) = L$ então para todo $\epsilon > 0$, existe um $\delta$ (que depende de $\epsilon$ e $a$) tal que:
			$$0<|x-a|<\delta \implies |f(x)-L| < \epsilon$$
			<h2>Limite de uma soma é a soma dos limites</h2>
			<p>Se $\lim_{x\to a}f(x) = L$ e $\lim_{x\to a}g(x) = M$, então para provarmos que $\lim_{x\to a} [f(x) + g(x)] = L + M$ devemos usar a definição precisa de limite:
			
			$$\lim_{x\to a} [f(x) + g(x)] = L + M$$ significa dizer que $$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |f(x) + g(x) -[L+M]|<\epsilon$$
			<p>Só precisamos provar que para todo $\epsilon>0$ teremos $|f(x) + g(x) -[L+M]|<\epsilon$. Para isso, vamos usar o que já supomos ser verdade: os limites individuais de cada função.
			<p>Sabemos que para todo $\epsilon>0$ temos $ |f(x)-L| < \epsilon$ e $ |g(x)-M| < \epsilon$. Somando as duas desigualdades, temos:
			<p>$|f(x)-L| + |g(x)-M| < 2\epsilon$
			<p>Porém precisamos que $|f(x) + g(x) -[L+M]|$, (que ao rearranjar temos $|f(x)-L + g(x) - M|$) apareça na desigualdade acima. Usando a inequação triangular:
			$$|a+b|\le |a| + |b|$$
			Então:
			$$|f(x) - L + g(x) - M| \le |f(x)-L| + |g(x)-M| < 2\epsilon$$
			Embora seja preciso terminar com algo menor que $\epsilon$ (e não $2\epsilon$ como acima), nosso resultado já basta para provar que a função tem limite. Se quiséssemos, por exemplo, provar que a função é sempre menor que $2$, bastaria usar $\epsilon = 1$. Para provar que é menor que $\frac{1}{2}$, bastaria tomar $\epsilon = \frac{1}{4}$. Seguindo o mesmo raciocínio, não há nenhum motivo pelo qual não conseguimos provar que a função é menor que um tal número (basta apenar tomarmos o $\epsilon$ correto). Alguns livros, no entanto, definem $|f(x)-L|<\frac{\epsilon}{2}$ e $|g(x)-M|<\frac{\epsilon}{2}$, para que assim, ao somarmos as duas inequações, obtermos $|f(x)-L| + |g(x)-M| < \epsilon$. Os dois modos estão corretos.
			<h2>Limite de uma função com constante</h2>
			<p>Dado que $\lim_{x\to a} cf(x) = cL$, então, pela definição:
			$$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |cf(x)-cL|<\epsilon$$
			<p>Mas através de propriedades de módulo, sabemos que $|cf(x)-cL|<\epsilon \implies |c||f(x)-L|<\epsilon$, então:
			$$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |f(x)-L|<\frac{\epsilon}{|c|}$$
			<p>Podemos provar que a função é sempre menor que qualquer número maior que zero, apenas escolhendo o $\epsilon$ correto. Logo:
			$$\lim_{x\to a}cf(x) = c\lim_{x\to a}f(x) = cL$$
			<h2>Definição de derivada</h2>
			<p><div align='center'><img src='http://lucaszanella.com/img/fx.png'></div>
			<p>Observe o gráfico da função arbitrária $f(x)$
			<p>Sabemos que se calcularmos a o cateto oposto/cateto adjacente do triângulo vermelho, obteremos a tangente do triângulo entre os dois pontos escolhidos. Porém, para se obter uma tangente cada vez mais precisa, precisamos escolher pontos cada vez mais próximos. No caso, os dois pontos escolhidos são $x$ e $x+\Delta x$. 
			
			<p>Observe que a distância entre eles é $x+\Delta x - x$, ou seja, apenas $\Delta x$. Então, conforme $\Delta x$ for ficando menor, mais adequada será nossa tangente. É daí que vem a noção de derivada, ela nos dará a expressão da tangente de uma função. Para calcularmos exatamente, usamos o conceito de que $\Delta x$ deve estar o mais próximo possível de $0$. 
			<p>Então, calculando a tangente:
			<p>Cateto oposto: $f(x+\Delta x)-f(x)$
			<p>Cateto adjacente: $x+\Delta x - x = \Delta x$
			<p>A tangente então é:
			<p>$$\frac{f(x+\Delta x)-f(x)}{\Delta x}$$
			<p>Como $\Delta x$ tem de tender a $0$, para que nossa derivada seja correta, calculamos o <b>limite</b> da expressão, com $\Delta x$ tendendo a $0$:
			<p>$$f'(x) = \lim_{\Delta x\to 0}\frac{f(x+\Delta x)-f(x)}{\Delta x}$$
			<p><h5>*detalhe: $f'(x)$ denota a derivada de $f(x)$</h5>
			<h2>Segunda definição de derivada</h2>
			<p><div align='center'><img src='http://lucaszanella.com/img/fx2.png'></div>
			<p>Recorremos ao mesmo processo do esquema enterior, porém desta vez a distância entre os dois pontos escolhidos $a$ e $b$ não é dava por $\Delta x$. A tangente continua a mesma, porém vamos calcular nosso limite com $b$ se aproximando de $a$. Assim, do mesmo modo que na definição anterior, nossa derivada ficará exata, porque a distância entre $b$ e $a$ irá diminuir, tendendo a $0$. Observe:
			<p>$$f'(x) = \lim_{b\to a}\frac{f(b)-f(a)}{b-a}$$
			<h2>Derivada de uma soma</h2>
			<p>Considere a soma:
			<p>$$f(x)+g(x)$$
			<p>Vamos chamá-la de $p(x)$ e calcular sua derivada:
			<p>$$\frac{d}{dx}p(x) = \lim_{\Delta x \to 0}\frac{p(x+\Delta x)-p(x)}{\Delta x}$$
			<p>Substituindo pela nossa soma original:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\frac{f(x+\Delta x)+g(x+\Delta x)-f(x)-g(x)}{\Delta x}$$
			<p>Podemos separar os numeradores, preservando o denominador em cada um:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\left[\frac{f(x+\Delta x)-f(x)}{\Delta x} + \frac{g(x+\Delta x)-g(x)}{\Delta x}\right]$$
			<p>Separando em dois limites:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\left[\frac{f(x+\Delta x)-f(x)}{\Delta x}\right] + \lim_{\Delta x \to 0} \left[\frac{g(x+\Delta x)-g(x)}{\Delta x}\right]$$
			<p>As duas expressões acima, nada mais são do que a soma das derivadas, provando assim que:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \frac{d}{dx} f(x) + \frac{d}{dx}g(x)$$
			
			<h2>Derivada de $c\cdot f(x)$ (função com constante)</h2>
			<p>Para o caso de uma derivada com uma constante multiplicando a função, podemos fatorar a constante e multiplicar pela derivada da função. Veja a prova abaixo:
			<p>Considere a expressão:
			<p>$$c\cdot f(x)$$
			<p>Para derivar isso, vamos considerar que $p(x) = c\cdot f(x)$. Logo, pela definição de derivada:
			<p>$$\frac{d}{dx}p(x) = \lim_{\Delta x\to 0}\frac{p(x+\Delta x)-p(x)}{\Delta x}$$
			<p>Substituindo $p(x)$ por $c\cdot f(x)$:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = \lim_{\Delta x\to 0}\frac{c\cdot f(x+\Delta x)-c\cdot f(x)}{\Delta x}$$
			<p>Observa-se fácilmente que o c pode ser colocado em evidência para fora da fração:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = \lim_{\Delta x\to 0}c\cdot \frac{f(x+\Delta x)- f(x)}{\Delta x}$$
			<p>Pela regra do limite, podemos fatorar a constante $c$ para fora da expressão, terminando assim com:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = c\cdot \lim_{\Delta x\to 0}\frac{f(x+\Delta x)- f(x)}{\Delta x}$$
			<p>O que é equivalente a dizer que:
			<p>$$\frac{d}{dx}p(x) = \frac{d}{dx}(c\cdot f(x)) = c\cdot \frac{d}{dx}f(x)$$
			<h2>Regra do produto</h2>
			<p>Ao derivar o produto de duas funções, podemos usar uma regra simples. Vamos começar com:
			<p>$$f(x)g(x)$$
			<p>Podemos nomear este produto como uma nova função $p(x)$, por exemplo:
			<p>$$p(x) = f(x)g(x)$$
			<p>Usando a nossa definição de derivada:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{p(x+\Delta x) - p(x)}{\Delta x}$$
			<p>Substituindo $p(x)$ pelo produto de funções:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{f(x+\Delta x)g(x+\Delta x) - f(x)g(x)}{\Delta x}$$
			<p>Vamos recorrer a um recurso: adicionar um termo e retirá-lo logo em seguida. Isso não altera o valor da equação, e nos ajudará a fatorar os termos. Observe que $a+b$ é a mesma coisa que $a+c-c+b$. Então, por um motivo que ficará óbvio logo em seguida, escolhemos $\color{Blue}{f(x+\Delta x)g(x)}$ para adicionar:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{f(x+\Delta x)g(x+\Delta x) -\color{Blue}{f(x+\Delta x)g(x)} +\color{Blue}{f(x+\Delta x)g(x)}- f(x)g(x)}{\Delta x}$$
			<p>Agora podemos separar cada equação para um lado da fração (mantendo o denominador $\Delta x$ em ambas, claro):
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\frac{f(x+\Delta x)g(x+\Delta x) -\color{Blue}{f(x+\Delta x)g(x)}}{\Delta x} + \frac{\color{Blue}{f(x+\Delta x)g(x)}- f(x)g(x)}{\Delta x}\right]$$
			<p>Agora irei alterar as cores dos termos semelhantes, para você visualizar melhor que podemos fatorar esta equação:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\frac{\color{Green}{f(x+\Delta x)}g(x+\Delta x) -\color{Green}{f(x+\Delta x)}g(x)}{\Delta x} + \frac{f(x+\Delta x)\color{Red}{g(x)}- f(x)\color{Red}{g(x)}}{\Delta x}\right]$$
			<p>Finalmente, fatorando:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\frac{\color{Green}{f(x+\Delta x)}\left[g(x+\Delta x) -g(x)\right]}{\Delta x} + \frac{\color{Red}{g(x)}\left[f(x + \Delta x) - f(x)\right]}{\Delta x}\right]$$
			<p>Como os termos $\color{Green}{f(x+\Delta x)}$ e $\color{Red}{g(x)}$ estão <b>multiplicando</b>, logo podem ficar fora da fração, sem que acompanhem o denominador, então terminamos com:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\color{Green}{f(x+\Delta x)} \frac{g(x+\Delta x) -g(x)}{\Delta x} + \color{Red}{g(x)} \frac{f(x + \Delta x) - f(x)}{\Delta x}\right]$$		
			<p>Agora calculando o limite com $\Delta x$ se aproximando de $0$, vemos que $\color{Green}{f(x+\Delta x)}$ ficará $\color{Green}{f(x)}$ e $\color{Red}{g(x)}$ permanece como está, pois não depende de $\Delta x$. E o mais interessante, os termos que sobraram, em preto, nada mais são que as definições de derivada para $g(x)$ e $f(x)$, logo, podemos escrevê-los como $f'(x)$ e $g'(x)$
			<p>Finalizamos então, com a regra do produto:
			<p>$$\frac{d}{dx}f(x)g(x) = f(x)g'(x) + f'(x)g(x)$$
			<p> O uso de ' é comum para designar a primeira derivada de uma função, assim como $f''(x)$ designa a segunda derivada, $f'''(x)$ designa a terceira derivada, e a partir daí começamos a usar $f^4(x)$...
			<p>Basicamente, a derivada do produto de duas funções, é igual à primeira função multiplicada pela derivada da segunda, somada à derivada da primeira função multiplicada pela segunda.
			<h2>Derivada de $x^n$</h2>
			<p>Apesar de poder ser provada apenas algébricamente, vou usar uma técnica mais fácil para provar a derivada de $x^n$. Considere:
			$$\log_e{x} = log_e{x}$$
			<p>Podemos escrever o logarítimo acima de outro modo, pois ele significa:
			<p>$$x = e^{log_e{x}}$$
			<p>Por convenção, quando há $log$, sem base especificada, considera-se sua base $e$, então, simplesmente:
			<p>$$x = e^{log(x)}$$
			<p>Logo, podemos dizer que:
			<p>$$x^n = e^{log(x^n)}$$
			<p>Pela propriedade dos logarítimos, podemos multiplicar o expoente interno $x$ pelo $log$, ficamos com:
			<p>$$x^n = e^{nlog(x)}$$
			<p>Agora vamos calcular a derivada:
			<p>$$\frac{d}{dx} x^n = \frac{d}{dx} e^{nlog(x)}$$
			<p>Podemos reescrever a parte direita da equação como:
			<p>$$\frac{d}{dx} e^{nlog(x)} = \frac{d}{d f(x)}e^{f(x)}\cdot \frac{d}{dx}f(x)$$
			<p>Onde $f(x) = n\cdot log(x)$.
			<p>A derivada de $e^{f(x)}$ a respeito de $f(x)$ é simplesmente $e^f(x)$. E a derivada de $n\cdot log(x)$ é igual a $n\frac{d}{dx}log(x) = n\frac{1}{x}$
			<p>Colocando tudo junto:
			<p>$$\frac{d}{dx} x^n = e^{f(x)}\cdot n\frac{1}{x} = e^{nlog(x)}\cdot n\frac{1}{x}$$
			<p>Vimos anteriormente que $e^{log(x^n)} = x^n$, logo:
			<p>$$\frac{d}{dx} x^n = e^{f(x)}\cdot n\frac{1}{x} = x^n\cdot n\frac{1}{x} = n\cdot x^{n-1}$$
			<p><h2>Integral por partes</h2>
			<p>Sabemos, pela regra do produto, que:
			<p>$$\frac{d}{dx}f(x)g(x) = f(x)g'(x) + f'(x)g(x)$$
			Agora vamos integrar os dois lados:
			<p>$$\int \frac{d}{dx}f(x)g(x)dx = \int f(x)g'(x)dx + \int f'(x)g(x)dx$$
			<p>Na esquerda da equação, temos a integral da derivada, o que basicamente consiste em calcular o valor da função para os valores da integral. Exemplo:
			<p>$$\int_0^1 \frac{d}{dx}\sin(x)dx = \int_0^1 \cos(x)dx$$
			<p>Agora integrando $\cos(x)$:
			<p>$$\int_0^1 \cos(x)dx = \sin(x)]_0^1$$
			<p>Ou seja: 
			<p>$$\int_0^1 \frac{d}{dx}\sin(x)dx =  \sin(x)]_0^1$$
			<p>Logo, na nossa fórmula:
			<p>$$\int_0^1 \frac{d}{dx}f(x)g(x)dx = f(x)g(x)]_0^1$$
			<p>Na parte direita da equação, podemos escolher uma das integrais para isolar. Assim encontraremos nossa identidade. Com isso, podemos gerar duas identidades diferentes. Observe:
			<p>$$\int_a^b \frac{d}{dx}f(x)g(x)dx = \int_a^b f(x)g'(x)dx + \int_a^b f'(x)g(x)dx$$
			<p>Substituindo a parte esquerda pelo que já calculamos, e isolando a primeira integral da parte direita:
			<p>$$\int_a^b f(x)g'(x)dx = f(x)g(x)]_a^b - \int_a^b f'(x)g(x)dx$$
			<p><h5>*Artigo em construção</h5>
</div>