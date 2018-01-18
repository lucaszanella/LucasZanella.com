<div align='justify'>
    <h1>Regra da cadeia reversa para integrais</h1>
        <p>A maioria dos livros trata as técnicas de integral por substituição como um teorema, e simplesmente o utilizam por todo o livro, sem mencionar que as mesmas integrais podem ser resolvidas de modo intuitivo, sem recorrer à substituicões. Portanto, vejo a necessidade de tal artigo evidenciando estas técnicas.</p>
    <p>É claro, vamos relembrar a famosa regra da cadeia:</p>
    <p>$$f(g(x))' = f'(g(x))g'(x)$$</p>
    <p>Ou usando a notação de Leibniz, podemos lembrá-la facilmente por:</p>
    <p>$$\frac{dz}{dx} = \frac{dz}{dg}\frac{dg}{dx}$$</p>
    <p>Onde, deixando o rigor de lado, podemos imaginar os '$dg$' se cortando e simplificando tudo para $\frac{dz}{dx}$, que apesar de ser um pensamento equivocado, tem um lado intuitivo muito interessante que é tratado no meu artigo sobre a <a href="">regra da cadeia</a> (em breve).</p>
    <h2>Exemplo 1:</h2>
    $$\int\cos(2x)dx$$
    <p>Vamos começar com o exemplo mais simples de integral que pode ser resolvida usando a regra da cadeia reversa:</p>
    <p>$$\int \cos(2x)dx$$</p>
    <p>A integral pode ser resolvida facilmente ao percebermos que:</p>
    <p>$$\sin(2x)' = \color{#66f}{2\cos(2x)}$$</p>
    <p>Que é quase o que nós temos na integral. Para isso, basta multiplicá-la por $\frac{2}{2}$, de modo a obter, sem alterar o valor da integral pois estamos multiplicando por $1$:</p>
    <p>$$\frac{2}{2}\int \cos(2x)dx = \frac{1}{2}\int \underbrace{\color{#66f}{2\cos(2x)}}_{\sin(2x)'}dx$$</p>
    <p>Perceba que, dentro da integral, terminamos exatamente com a <b>derivada</b> de $\sin(2x)$ que é  $2\cos(2x)$. Ora, sabemos então que $\frac{1}{2}\int 2\cos(2x)dx$ é a mesma coisa que $\frac{1}{2}\int \sin(2x)'dx$. A integral da derivada de uma função, é igual à própria função:</p>
    <p>$$\frac{1}{2}\int \sin(2x)'dx = \frac{1}{2}\sin(2x) + \mbox{C} $$</p>
    <p>Ao resolver esta integral, não precisamos realizar nenhuma substituição, e nem voltar para a variável original. Tudo foi feito de modo intuitivo!</p>
    <h2>Como saber se o integrando é a derivada de uma outra função?</h2>
    <p>Você pode ter achado meio mágico o modo com que eu enxerguei, no exemplo acima, $2\cos(2x)$ como $\sin(2x)'$. Porém, há um modo bem fácil de reconhecer estes termos. Sempre que tivermos uma integral de função composta $f(g(x))\cdot\mbox{alguma coisa}$ é sempre útil enxergar $g'(x)$ no lugar de alguma coisa. Caso seja preciso, você deve modificar a integral, como fiz acima, para que apareça exatamente $g'(x)$ dentro dela. Deste modo, você conseguirá chegar no integrando $f'(g(x))g'(x)$, que nada mais é que $f(g(x))'$, cuja integral é $f(g(x)) + \mbox{C}$.</p>
    <p>No primeiro exemplo, $\int \cos(2x)dx$, tentei enxergar na integral a derivada de $2x$ multiplicando $\cos(2x)$. O que fiz então, foi multiplicar por $2$ no integrando, e dividir por $2$ fora da integral (assim não modifico o resultado da expressão). Chegamos então à integral na forma $\int f'(g(x))g'(x)dx$.</p>
    <h2>Exemplo 2:</h2>
    $$\int \frac{\cos(\ln(x))}{2x}dx$$
    <p>Para resolver esta integral, vamos notar que:</p>
    <p>$$\sin(\ln(x))' = \color{#66f}{\frac{\cos(\ln(x))}{x}}$$</p>
    <p>Ao modificá-la notamos a derivada presente no integrando:</p>
    $$\int \frac{\cos(\ln(x))}{2x}dx = \frac{1}{2}\int \underbrace{\color{#66f}{\frac{\cos(\ln(x))}{x}}}_{\sin(\ln(x))'}dx$$
    <p>E finalmente temos, dentro da integral, a derivada de $\sin(\ln(x))$, logo:</p>
    $$\frac{1}{2}\int \frac{\cos(\ln(x))}{x}dx = \frac{1}{2}\int \sin(\ln(x))'dx = \frac{1}{2}\sin(\ln(x)) + \mbox{C}$$
    <h2>Regra da cadeia para composição de 3 funções:</h2>
    <p>É claro que podemos usar a mesma técnica para quando existem $3$ ou mais funções no nosso integrando. Aqui vou derivar brevemente a regra da cadeia pra uma composição tripla de funções. No exemplo 3, veremos como aplicar essa fórmula num exemplo real.</p>
    <p>Suponha $p(x) = g(h(x))$. Então, pela regra do produto que já conhecemos:</p>
    $$f(p(x))' = f'(p(x))p'(x)\tag{1}$$
    <p>Precisamos encontrar $p'(x)$, que pela mesma regra do produto:</p>
    $$p'(x) = g'(h(x))h'(x)$$
    <p>Logo, substituindo $p'(x) = g'(h(x))h'(x)$ e $p(x) = g(h(x))$ em $(1)$ temos:</p>
    <p>$$f(g(h(x)))' = f'(g(h(x)))g'(h(x))h'(x)$$</p>
    <p>Ou, pela notação de Leibniz, fica fácil de lembrar a fórmula na hora:</p>
    $$\frac{df(g(h(x)))}{dg(h(x))}\frac{dg(h(x))}{dh(x)}\frac{dh(x)}{dx}$$
    <p>Eu juro que tentei simplificar o máximo possível!</p>
    <h2>Exemplo 3:</h2>
    $$\int x\ln(\cos(x^2))\sin(x^2)\mathrm dx$$
    <p>No integrando, temos como função principal $\ln(\cos(x^2))$, e junto, temos $\sin(x^2)$, que é parecido com a derivada de $\cos(x^2)$, e por último tempos $x$, que de algum modo se relaciona com a derivada de $x^2$. Precisamos, então, enxergar o integrando como a derivada de alguma função.</p>
    <p>Como $\cos' = -\sin$, vamos multiplicar incluir um sinal negativo dentro do integrando. Temos também a derivada de $x^2$, que é $2x$. Como temox $x$, vamos multiplicar por $2$ dentro da integral e dividir por $2$ fora. Perceba que fazendo tais modificações, não estamos alterando o valor da integral.</p>
    <p>Podemos enxergar a derivada dentro do integrando, apenas rearranjando nossa integral:</p>
    $$\int x\ln(\cos(x^2))\sin(x^2)\mathrm dx = -\frac{1}{2}\int \ln(\cos(x^2))2x[-\sin(x^2)]\mathrm dx$$
    <p>Arranjando a integral de modo ainda melhor:</p>
    $$\begin{matrix}\int x\ln(\cos(x^2))\sin(x^2)\mathrm dx &= -\frac{1}{2}\int &\color{#66f}{\ln(\cos(x^2))}&\color{#F01C2C}{[-\sin(x^2)]}&\color{#01cf84}{2x}& dx\\
& = -\frac{1}{2}\int &\color{#66f}{f'(g(h(x)))}&\color{#F01C2C}{g'(h(x))}&\color{#01cf84}{h'(x)}& dx\end{matrix}$$
    <p>Mas sabemos que $-\frac{1}{2}\int \color{#66f}{f'(g(h(x)))}\color{#F01C2C}{g'(h(x))}\color{#01cf84}{h'(x)}dx = -\frac{1}{2}\int f(g(h(x)))'dx = -\frac{1}{2}f(g(h(x))) + \mbox{C}$</p>
    <p>Para encontrar $f$, $g$ e $h$ basta encontrar suas antiderivadas.</p>
    $$\begin{align}f &= x(\ln(x)-1)\mbox{(usando integral por partes)}\\
    g &= \cos(x)\\
    h &= x^2\end{align}$$
    <p>Como sabemos que o resultado da integral se resume a $-\frac{1}{2}f(g(h(x))) + \mbox{C}$, basta agora substituir $g(h(x))$ em $f(x)$, de modo a encontrarmos o resultado:</p>
    <p>$$-\frac{1}{2}\cos(x^2)(\ln(\cos(x^2))-1) + \mbox{C}$$</p>
    <h2>O teorema</h2>
    <p>Agora que já temos a intuição, vou apresentar e provar o teorema que nos permite realizar a substituição por $u$ e substituição trigonométrica. Relembrando a <b>regra da cadeia:</b></p>
    <p>$$F(g(x))' = f(g(x))g'(x)\tag{2}$$</p>
    <p>Integrando os dois lados da equação:</p>
    <p>$$\int F(g(x))'dx = \int f(g(x))g'(x)dx$$</p>
    <p>Portanto:</p>
    <p>$$F(g(x)) = \int f(g(x))g'(x)dx$$</p>
    <p>Se deixarmos nossa integral igual ao lado direito da equação, basta identificar $f$, achar sua antiderivada $F$ e aplicar em $g$.</p>
    <p>Agora, usando $(2)$ novamente, podemos integrar do mesmo modo, porém agora usando limites de integração de $a$ até $b$:</p>
    <p>
    $$\begin{align}
    \int_a^b F(g(x))'dx &= \int_a^b f(g(x))g'(x)dx\\
    F(g(b)) - F(g(a)) &=  \int_a^b f(g(x))g'(x)dx\\
    \int_{g(a)}^{g(b)} f(t)dt &= \int_a^b f(g(x))g'(x)dt
    \end{align}$$</p>
    <p>Na primeira linha, estamos integrando a derivada de $F(g(x))$ de $a$ a $b$, que é a mesma coisa que $F(g(b))-F(g(a))$. Porém, isso é a mesma coisa que integrar $f(t)$, cuja antiderivada é $F(t)$, do ponto $g(a)$ até $g(b)$.</p>
    <p>Chegamos à igualdade:</p>
    <p>$$\int_a^b f(g(x))g'(x)dx = \int_{g(a)}^{g(b)} f(t)dt$$</p>
    <p>Se não nos preocuparmos com os limites de integração, temos:</p>

    <h2>A substituição trigonométrica</h2>
    <p>Até agora, nós tentamos enxergar uma integral na forma $\int_a^b f(g(x))g'(x)dx$ para assim encontrar $\int_{g(a)}^{g(b)} f(t)dt$. No caso da substituição trigonométrica, nos será útil realizar o processo contrário.</p>
    <h2>Exemplo 1:</h2>
    <p>$$\int_1^2 \frac{\sqrt{9-x^2}}{x^2}dx$$</p>
    <p>Relembrando nosso teorema:</p>
    <p>
    $$\int_{g(a)}^{g(b)} f(x)dx = \int_a^b f(g(t))g'(t)dt $$
    <p>Escolhendo estrategicamente $g(t) = 3\sin t$, que tem derivada $g'(t) = 3\cos t$e substituindo dentro da função $f$:</p>
    $$\int_1^2 \frac{\sqrt{9-x^2}}{x^2}dx = \int_{g^{-1}(1)}^{g^{-1}(2)} \frac{\sqrt{9-(3\sin t)^2}}{(3\sin t)^2}3\cos t \ \mathrm dt$$
    </p>
    <p>Vou justificar todas as escolhas! Primeiramente, usei a fórmula $\int_{g(a)}^{g(b)} f(x)dx = \int_a^b f(g(t))g'(t)dt $ e enxerguei a nossa integral $\int_1^2 \frac{\sqrt{9-x^2}}{x^2}dx$ comparando com a parte esquerda da fórmula. Ou seja: $f(x) = \frac{\sqrt{9-x^2}}{x^2}$, $g(a) = 1$ e $g(b) = 2$. Portanto, como consegui enxergar a integral no formato $\int_{g(a)}^{g(b)} f(x)dx$ posso escrevê-la do modo que está na parte direita da nossa fórmula, escolhendo uma função $g(t)$ qualquer. Nesse caso, escolhi $g(t) = 3\sin t$ porque irá simplificar a integral na direita, como você verá em breve. </p>
    <p>Nós substituímos $g(a) = 1$ e $g(b) = 2$ no lado esquerdo da fórmula. O lado direito requer os valores $a$ e $b$ para que tenhamos $1$ e $2$, ou seja, os valores de $a$ e $b$ tal que $g(a)=1$ e $g(b) = 2$. Logo, a solução $a$ e $b$ é denotada por $g^{-1}(a)$ e $g^{-1}(b)$.</p>
    <p>Como $g(t) = 3\sin(t)$, sua inversa é $g^{-1}(t) = \arcsin (\frac{t}{3})$. Logo $g^{-1}(1) = \arcsin (\frac{1}{3})$ e $g^{-1}(2) = \arcsin (\frac{2}{3})$. Podemos finalmente resolver a integral:</p>
    <p>$$\int_1^2 \frac{\sqrt{9-x^2}}{x^2}dx = \int_{\arcsin (\frac{1}{3})}^{\arcsin (\frac{2}{3})} \frac{\sqrt{9-(3\sin t)^2}}{(3\sin t)^2} 3\cos t \ \mathrm dt = \int_{\arcsin (\frac{1}{3})}^{\arcsin (\frac{2}{3})} \frac{|3\cos t|}{9\sin^2 t} 3\cos t \ \mathrm dt = \int_{\arcsin (\frac{1}{3})}^{\arcsin (\frac{2}{3})} \cot^2 t \ \mathrm dt\\
    = \Bigr[-\cot t - t \Bigr]_{\arcsin(\frac{1}{3})}^{\arcsin(\frac{2}{3})} = -\cot \arcsin \frac{2}{3} - \arcsin \frac{2}{3} + \cot \arcsin \frac{1}{3} + \arcsin \frac{1}{3}
    $$</p>
    <p>Note que para encontrar a função inversa da função $\sin(x)$ temos que definí-la num intervalo, já que ela é periódica. Vamos definir em $-\frac{\pi}{2} \le t \le \frac{\pi}{2}$. É por isso que reduzimos $|3\cos t|$ para $3\cos t$, pois no intervalo  $-\frac{\pi}{2} \le t \le \frac{\pi}{2}$, $0 \le \cos t\le 1$.</p>
    <p>*artigo em construção</p>
</div>