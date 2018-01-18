<div align='justify'>
<h1>Problema de Basileia</h1>
    <p>A solução do <b>problema de Basileia</b> foi a primeira grande conquista de Leonhard Euler em 1735. Apesar de ser um problema de formulação simples, demorou quase 1 século para ser resolvido. <b>Basileia</b> é o nome da cidade onde Euler morava quando resolveu o problema.</p>
			<p>O problema consiste em descobrir o valor soma infinita:
			<p>$$1 + \frac{1}{2^2} +\frac{1}{3^2} + \frac{1}{4^2} + ...$$
			<p>Que pode ser escrita também na forma:
			<p>$$1 + \frac{1}{4} + \frac{1}{9} + \frac{1}{16} + ...$$
			<p>Como chegar a um valor exato para a soma? É claro que se somarmos 'manualmente' poderemos obter um valor aproximado, já que a série converge para $1.6449340\cdots$
			<p>Euler atacou o problema numericamente e conjecturou que o valor da soma equivale a $\frac{\pi^2}{6}$. Posteriormente, conseguiu provar sua conjectura usando o método demonstrado neste artigo.</p>
			<p>Para começar, devemos lembrar da expansão polinomial para a função seno de $x$. A expansão provém das séries de taylor:
			$$\sin x = x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + ...$$
			<p> A série acima nos permite calcular $\sin(x)$ para qualquer valor de $x$ (em radianos, não em graus). Quanto mais termos somarmos, mais exato será nosso valor. Caso você não conheça as expansões polinomiais, procure sobre "séries de taylor" (pretendo escrever sobre elas em breve).
            <p> Agora que temos a forma de somatório infinito para a função $\sin(x)$, vou apresentar a forma de produtório, onde a função seno é representada por um produto infinito de termos. Para isso, vamos observar a função seno e suas raízes:
			<p><div align="center"><img src="http://lucaszanella.com/img/sinx.png"></div>
			<p> As raízes (valores de $x$ para que o $\sin(x)$ seja $0$) ocorrem periodicamente. Podemos observar um padrão: elas se distanciam de $\pi$ em $\pi$, na forma:
			<p> $$\cdots, -3\pi, -2\pi, -\pi, 0 , \pi, 2\pi, 3\pi, \cdots$$
			<p> Vamos criar um produto infinito de termos, de modo que cada raiz da função $\sin(x)$ zere nossa nova fórmula.
            $$\left(1-\frac{x}{a}\right)\left(1+\frac{x}{a}\right)\left(1-\frac{x}{b}\right)\left(1+\frac{x}{b}\right)\left(1-\frac{x}{c}\right)\left(1+\frac{x}{c}\right)\cdots$$
			<p> A razão para o uso de $\left(1-\frac{x}{a}\right)\left(1+\frac{x}{a}\right)$ é que seu produto gera uma diferença de quadrados do modo $\left(1-\frac{x^2}{a^2}\right)$ em que qualquer valor de $x$ inserido (ex: $x = a$ ou $x = -a$ ou $x = b$ ou $x = -b$...) zerará um dos parênteses, e acarretará o valor $0$ para a equação inteira. Logo, criamos um produto infinito, que valerá $0$ para cada raiz. 
			<p> Exemplo substituindo $x$ por $a$ ou $-a$ em:
			$(1-\frac{x^2}{a^2}) = 0$ resultará em $(1-\frac{a^2}{a^2}) = 0$ que é $1-1 = 0$ o que satisfaz a equação. 
			Basta que um dos termos seja zero para que multiplique e anule todos os outros termos. 
			<p>Se você ainda não estiver convencido, observe que qualquer termo dentro da sequência $a$ e $-a$, $2a$ e $-2a$, $3a$ e $-3a$, ... resultará em pelo menos um dos parênteses tendo valor <b>zero</b>, o que é suficiente para que toda a equação se iguale a <b>zero</b>:
			$$\left(1-\frac{x^2}{a^2}\right)\left(1-\frac{x^2}{(2a)^2}\right)\left(1-\frac{x^2}{(3a)^2}\right)\cdots = 0$$
			<p> Substituindo $x$ por $a$, $-a$, $2a$, $-2a$, $3a$, $-3a$... resultará em um dos termos sendo $0$ e multiplicando toda a equação, prevalecendo 0 = 0.
			<p> Porém há um problema: já conseguimos representar as raízes $a$ e $-a$, $2a$ e $-2a$, $3a$ e $-3a$ ... mas e o $0$? (vimos que o zero também é raíz da função seno).
			<p> Calma, vamos primeiro montar nossa expansão em produtório, substituindo $a$ pelas raízes da nossa equação $\sin(x)$:
			$$\left(1-\frac{x}{\pi}\right)\left(1+\frac{x}{\pi}\right)\left(1-\frac{x}{2\pi}\right)\left(1+\frac{x}{2\pi}\right)\left(1-\frac{x}{3\pi}\right)\left(1+\frac{x}{3\pi}\right)\cdots$$
			<p> Efetuando a multiplicação par a par dos semelhantes $\left(1-\frac{x}{\pi}\right)\left(1+\frac{x}{\pi}\right)$ e assim por diante, obtemos:
			$$\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots$$
			<p> E claro, não podemos esquecer do $x=0$. Para que uma equação possua raiz $0$, basta multiplicá-la inteiramente por $x$. Assim quando $x$ vale 0, multiplicará toda a equação por $0$, transformando $x=0$ numa raiz da equação.
            <p>Apesar de ser uma construção bem intuitiva, não provamos realmente que a fórmula acima realmente representa a função $\sin(x)$ para qualquer valor de $x$, apenas montamos uma expressão que possui as mesmas raízes da função seno. Euler também não apresentou uma prova para isso, e é por tal motivo que, posteriormente, ele apresentou uma prova mais rigorosa para o problema de Basileia, que não envolvia este produtório infinito. A prova de que o produtório infinito realmente representa a função $\sin(x)$ será tratada no meu artigo sobre a <a href="http://lucaszanella.com/pt/artigos/mat/zeta">função zeta</a>.</p>
			$$\sin x = x\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots$$
			<p> Pronto, nossa expansão de produtório para a função $\sin(x)$. Agora estamos com as duas fórmulas:
			$$\sin x = x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + ...\tag{somatório}$$
			$$\sin x = x\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots\tag{produtório}$$
			<p> Lembrando que queremos encontrar o valor de $1 + \frac{1}{4} + \frac{1}{9} + \frac{1}{16} + ...$ e que podemos encontrar algo semelhante na expansão $x\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots$ (observe a presença dos números $2$, $4$ e $9$).
			<p> Primeiro notamos que o $x$ da expansão em forma de produtório somente irá nos atrapalhar, então efetuando a divisão $\frac{\sin x}{x}$ obtemos:
			$$\frac{\sin x}{x} = \left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots\tag {1}$$
			<p> E como estamos trabalhando com as mesmas funções, vou efetuar a mesma divisão na expansão em forma de somatório (você perceberá o motivo em breve):
			$$\frac{\sin x}{x} = 1 - \frac{x^2}{3!} + \frac{x^4}{5!} - \frac{x^6}{7!} + ...\tag{2}$$
			<p> Ambas as equações ($1$ e $2$) representam a mesma função, e por isso poderão ser igualadas no futuro, de modo que tudo que é coeficiente de $x$ em uma, tem que ser igual ao que é coeficiente de $x$ em outra. Tudo que é coeficiente de $x^2$ em uma, deve ser em outra, e assim em diante.
			<p> Expandindo ainda mais a multiplicação da equação $1$, além dos muitos termos que vamos obter (todas as combinações possíveis entre cada coeficiente da equação), obteremos a soma que provém de cada raiz multiplicada pelo 1, sendo assim:
			$$1 - \frac{x^2}{\pi^2} - \frac{x^2}{4\pi^2} - \frac{x^2}{9\pi^2} - ... - \frac{x^2}{n^2\pi^2} + ... (\mbox{outros termos})x^4 + \cdots $$
			<p> O que realmente nos interessa é a soma dos termos do tipo $\frac{x^2}{n^2\pi^2}$ que podem ser agrupados na forma:
			$$-\left(\frac{x^2}{\pi^2} + \frac{x^2}{4\pi^2} + \frac{x^2}{9\pi^2} + \cdots +\frac{x^2}{n^2\pi^2}\right)$$
			<p> Deixando em evidência o termo semelhante $x^2$ ficamos com:
			$$\cdots-x^2\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + \cdots +\frac{1}{n^2\pi^2}\right)+\cdots$$
			<p> Agora, embora não seja rigorosamente correto em algumas partes, podemos comparar os coeficientes de $x$ das duas formas de expansão (somatório e produtório). Todos os termos que multiplicam $x^2$ na expansão em forma de somatório devem ser iguais aos da expansão na forma de produtório. Lembrando as duas formas: 
			$$...-x^2\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + \cdots +\frac{1}{n^2\pi^2}\right)+\cdots$$
			$$\frac{\sin x}{x} = 1 - \frac{x^2}{3!} + \frac{x^4}{5!} - \frac{x^6}{7!} + \cdots\tag{somatório}$$
			<p>(observe que a primeira equação é a mesma forma de expansão do produtório apresentada pela primeira vez, porém mais desenvolvida para coletarmos os termos de $x^2$, que são os que nos importam)
			<p> O termo de $x^2$ na expansão de somatório é $-\frac{1}{3!}$, ou seja, $-\frac{1}{6}$. O coeficiente de $x^2$ na expansão de produtório é $-\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + ... +\frac{1}{n^2\pi^2}\right)$
			<p> Igualando os dois:
			$$-\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + ... +\frac{1}{n^2\pi^2}\right) = -\frac{1}{6} $$
			<p> Multiplicando os dois lados da equação por $-1$ e em seguida evidenciando o termpo $\frac{1}{\pi^2}$:
			$$\frac{1}{\pi^2}\left(\frac{1}{1} + \frac{1}{2^2} + \frac{1}{3^2} + ... +\frac{1}{n^2}\right) = \frac{1}{6}$$
			<p> Por fim basta multiplicar os dois lados da equação por $\pi^2$
			$$\left(\frac{1}{1} + \frac{1}{2^2} + \frac{1}{3^2} + ... +\frac{1}{n^2}\right) = \frac{\pi^2}{6}$$
			<p> Chega-se ao resultado:
			$$\sum_{n=1}^\infty \frac{1}{n^2} = \frac{\pi^2}{6}$$
            <p>Referências:</p>
            <p>(1)<a href="http://eulerarchive.maa.org/hedi/HEDI-2003-12.pdf" target="_blank"> How Euler did it - Basel Problem</a></p>
</div>