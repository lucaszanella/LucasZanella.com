<div align='justify'>
    <h1>Função gama</h1>
    <p>A função gama surge da necessidade de encontrar uma representação para a função fatorial que funcione não apenas com os naturais, mas sim um intervalo nos reais, e quem sabe até nos complexos.</p>
    <p>Ao <i>plotarmos</i> o gráfico da função $f(x) = x!$, só conseguimos atribuir um valor para a função no domínio dos naturais. Isso ocorre pois a função fatorial ($x!$) é <b>discreta</b>:</p>
    <p><div align="center"><img src="http://lucaszanella.com/img/fatorial_plot.png"></div></p>
    <p>A função gama é uma integral que intercepta a função fatorial para valores inteiros, e justamente por ser uma integral, nos dá uma função contínua para os reais entre eles. Ela nos permite, por exemplo, assimilar um valor para expressões até então sem sentido, como $\frac{1}{2}!$, e também definir a função fatorial para domínio <b>complexo</b>. Pois bem, esta é a famosa função:</p>
    <p>$$\Gamma(z) = \int_0^\infty t^{z-1}e^{-t}dt$$</p>
    <p>A função gama gera o seguinte gráfico:</p>
    <p><div align='center'><img src='http://lucaszanella.com/img/gamma.png'></div>
    <p><h5>*perceba que ela converge inclusive para alguns valores negativos</h5>
    <p>Sua real utilidade se aplica a valores de $x$ não inteiros, e variáveis complexas. Ela foi descoberta por Euler e tem grande utilidade em vários campos da matemática. Usamos o símbolo $\Gamma(n)$ para a função gama. Abaixo vamos derivar a igualdade que relaciona a função gama com a função fatorial:
    $$\Gamma(n+1) = n!$$
    <p><h2>Função Gama e a função fatorial.</h2>
    <p>Integrando por partes, terminaremos com uma recursividade que nos leva à função fatorial.</p>
    <p>$$\Gamma(z) = \int_0^\infty t^{z-1}e^{-t}dt$$
    <p>Relembrando como integrar por partes:
    <p>$$\int_a^b f(z)g'(z)dz = f(z)g(z)]_a^b - \int_a^b f'(z)g(z)dz$$</p>
    <p>Para ficar mais fácil, vamos calcular $\Gamma(z+1)$, que é:</p>
    <p>$$\Gamma(z+1) = \int_0^\infty t^{z}e^{-t}dt$$</p>
    <p>Vamos considerar $f(z)$ como $t^{z}$ e $g'(z)$ como $e^{-t}$. Perceba que a fórmula também requer $g(z)$, bastando calcular a anti-derivada de $g'(x)$, que facilmente percebemos ser $-e^{-t}$, e $f'(z)$, que é $zt^{z-1}$. Agora, substituindo tudo na fórmula:</p>
    <p>$$\int_0^\infty t^{z}e^{-t}dt = t^{z}e^{-t}]_0^\infty - \int_0^\infty zt^{z-1}\cdot -e^{-t} dt$$</p>
    <p>Percebe-se que a expressão $t^{z}e^{-t}]_0^\infty$ tende a zero. Fatorando o sinal negativo de dentro da integral da direita e o $z$, ficamos com:</p>
    <p>$$\int_0^\infty t^{z}e^{-t}dt = z\int_0^\infty t^{z-1}e^{-t} dt$$</p>
    <p>A expressão da esquerda é $\Gamma(z+1)$, a da direita, $z\Gamma(z)$. Logo percebemos a recursividade que esta função nos gera:</p>
    <p>$$\Gamma(z+1) = z\Gamma(z)$$</p>
    <p>$$\Gamma(z) = (z-1)\Gamma(z-1)$$</p>
    <p>$$\Gamma(z-1) = (z-2)\Gamma(z-2)$$</p>
    <p>$$\cdots$$</p>
    <p>Então:</p>
    <p>$$\Gamma(z+1) = z\cdot (z-1)\cdot (z-2) \cdots$$</p>
    Se continuarmos, chegaremos em $\Gamma(1) = t^0\cdot e^{-t} dt = 1$.Será a mesma coisa que calcular $z!$ (repetindo: a utilidade desta integral não é um modo mais fácil de calcular a função fatorial, o processo é o mesmo, porém nos permite calcular para variáveis complexas e não inteiras).
    <p><h2>Convergência da função gama</h2>
<p>Para provar sua convergência, vamos separá-la em duas integrais:</p>
    <p>$$\Gamma(z) = \int_0^1 t^{z-1}e^{-t}dt + \int_1^\infty t^{z-1}e^{-t}dt$$
<p>Para provar a convergência da primeira integral, note que:</p>
    $$t^{z-1}e^{-t} \le t^{z-1}$$
    <p>Pois a função $e^{-t}$, em $t=0$ vale $1$ e em $t=1$ vale $\frac{1}{e}$ que é maior que $0$ porém menor que $1$, e sabemos que se multiplicarmos $t^{z-1}$ para qualquer $t$ no intervalo $[0,\frac{1}{e}]$ teremos o lado esquerdo menor que o direito, exceto para $t=0$ onde temos uma igualdade.</p>
    <p>Portanto, ao integrar:</p>
    $$\int_0^1 t^{z-1}e^{-t}dt < \int_0^1 t^{z-1}dt$$
    <p>Mas para $z>0$ a integral $\int_0^1 t^{z-1}dt$ converge.</p>
    <p>Para a segunda integral, vamos usar o fato de que $e^\frac{t}{2}>t^{z-1}$ para $t$ suficientemente grande (em outras palavras, dizemos que a função exponencial cresce mais rápido do que qualquer função polinomial). Logo $t^{z-1} < e^\frac{t}{2} \implies t^{z-1}e^{-t} < e^{\frac{t}{2}}e^{-t} = e^{\frac{-t}{2}}$. Portanto, temos que:</p>
    $$\int_1^\infty t^{z-1}e^{-t}dt<\int_1^\infty e^{\frac{-t}{2}}dt = \left.-2e^{-t/2}\right|_1^\infty = 2e^{-1/2}$$
    <p>Segue que:</p>
    $$\int_1^\infty z^{t-1}e^{-t}dt < 2e^{-1/2}$$
    e portanto converge. Logo, $$\Gamma(z) = \int_0^{\infty} t^{z-1}e^{-t}dt$$ converge para $z>0$.
    <p><h2>Derivando alguns resultados</h2>
    <h3><span id='zerofatorial'>Zero fatorial</span></h3>
    <p>Temos que:
    <p>$$\Gamma(1) = 0! = \int_0^\infty t^{1-1}e^{-t}dt$$
    <p>Como $t^0 = 1$ e a antiderivada de $e^{-t} = -e^{-t}$, resulta:
    <p>$$0! = -e^{-t}]_0^\infty = -\frac{1}{e^\infty} - (-e^0) = 1$$
    <p>
    <h3>Gamma de $\frac{1}{2}$ ou  $\Gamma\left(\frac{1}{2}\right) = \sqrt{\pi}$</h3>
    <p>Vamos calcular abaixo o valor de $\Gamma\left(\frac{1}{2}\right)$:
    <p>Esta é uma integral que não pode ser calculada por métodos 'elementares', digamos. Ou seja, não basta apenas integrar até chegarmos no valor 1. Mas há uma outra maneira de calcular esta integral. Vamos proceder da seguinte maneira:
    <p>$$\Gamma\left(\frac{1}{2}\right) = \int_0^{\infty} t^{\frac{1}{2}-1}e^{-t}dt = \int_0^{\infty} t^{-\frac{1}{2}}e^{-t}dt $$


    <h3>$\Gamma\left(\frac{3}{2}\right) = \left(\frac{1}{2}\right)! = \frac{\sqrt{\pi}}{2}$</h3>
    <p>Através da identidade $x! = \Gamma(x+1)$ podemos calcular $\left(\frac{1}{2}\right)!$ sabendo o valor de $\Gamma\left(\frac{3}{2}\right)$:
    <p>$\Gamma\left(\frac{3}{2}\right)$ = 
    <p><h5>*Artigo em construção</h5>
</div>