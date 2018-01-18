<div align='justify'>
    <h1>Função Zeta</h1> 
            <p>Sendo um dos problemas mais belos de teoria dos números (e base para um <a href="http://pt.wikipedia.org/wiki/Problemas_do_Pr%C3%A9mio_Millenium" target="_blank">prêmio de 1 milhão de dólares</a>) a função zeta intriga os matemáticos há séculos. Os maiores nomes, como Euler e Riemann, estudaram tal função e nos trouxeram grande avanço no seu entendimento. Apesar de ser definida por uma simples soma, você verá que é possível derivar dela tanto belas identidades envolvendo a famosa constante irracional $\pi$, bem como explorar o misterioso mundo dos números primos.</p>
            <p>Embora seja necessário um conhecimento um pouco avançado de cálculo e análise, este artigo justifica cada passo com base num teorema ou técnica que pode ser estudado separadamente, e assim progredir na leitura conforme a atualização dos conhecimentos. Portanto, não desanime caso não entender algum trecho.</p>
            <p>O artigo, por vezes trata a função zeta no domínio dos <b>reais</b>, mas também apresenta alguns teoremas no domínio dos <b>complexos</b>, até mesmo porque o problema da <b>"Hipótese de Riemann"</b> envolve a função zeta com argumento complexo. Portanto, o artigo apresenta algumas partes em que se fala da função zeta com argumento real, usando a variável $s$, e argumento complexo usando a variável $z$. É recomendável que se saiba derivar, integrar e provar a convergência para domínio complexo, para uma melhor leitura do artigo, embora eu tente explicar do modo mais intuitivo possível.</p>
            <h2>Introdução</h2> 
            <p>A função zeta é definida por:</p>
            $$\zeta(s) = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + \cdots$$
            <p> Ou no modo compacto:</p>
            $$\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s}$$
            <p> Na forma mostrada acima, a função converge para qualquer valor com parte real maior que 1 ($\Re(s)>1$). Sim, há mais de uma 'definição' para a função zeta, porque existem outras funções chamadas de 'continuações analíticas' que interceptam a função zeta na sua primeira definição, mas convergem para outros valores onde a primeira falha. No decorrer do artigo, apresentarei tais formas alternativas.</p>
            <p> Primeiramente, vamos observar o que acontece quando substituímos a variável $s$ da fórmula por um número inteiro:</p>
            <p> $\zeta(1) = \infty$ (ver prova abaixo), $\zeta(2) = \frac{\pi^2}{6}$ (ler mais <a href="http://lucaszanella.com/pt/artigos/mat/basileia" target="_blank">aqui</a>), $\zeta(3) \approx 1.202$</p>
            <p>Veja que $\zeta(1)$ (também conhecida como <a href="http://pt.wikipedia.org/wiki/S%C3%A9rie_harm%C3%B3nica_%28matem%C3%A1tica%29">série harmônica</a>) diverge. A notação $\zeta(1)=\infty$ indica que, se continuarmos somando 'para sempre', termo a termo, nunca chegaremos próximos de um único valor. Já $\zeta(2) = \frac{\pi^2}{6}$ indica que, não importa o quanto somemos, chegaremos cada vez mais próximos do valor $\frac{\pi^2}{6}$. Por fim, $\zeta(3) \approx 1.202$ é uma aproximação. Apesar de convergir (sua soma nunca ultrapassar um tal valor) não sabemos se o seu limite envolve uma constante famosa (como $\pi$, $e$, $\gamma$, ...). </p>
            <p><h2>Prova de que $\zeta(1)$ diverge</h2>
            <p> Suponhamos uma série qualquer, em que somamos infinitamente uma mesma quantidade. É notável que, por mais que os termos sejam pequenos, a soma irá divergir. Tomemos como exemplo a série:</p>
            $$\frac{1}{2} + \frac{1}{2} + \frac{1}{2} + \cdots$$
            <p>Claramente, ao somarmos $\frac{1}{2}$, por um bom tempo, veremos que não estamos aproximando nenhum valor, mas sim 'indo para o infinito'. Mas calma! Nem todas as somas infinitas, necessariamente, vão para o infinito. Uma das condições necessárias (porém <b>não suficientes</b>) para que isso aconteça, é que cada termo da série diminua progressivamente. É o caso da soma $\zeta(1)$. No entando, eles não diminuem 'rápido o bastante'. Vamos provar, através de um 'método de comparação', de que isso realmente acontece com $\zeta(1)$.</p>
            <p> $\zeta(1)$ nos dá a seguinte soma:</p>
            $$1 + \frac{1}{2} + \frac{1}{3} + \frac{1}{4} + \frac{1}{5} + \frac{1}{6} + \frac{1}{7} +\cdots $$
            <p> Para provar que esta soma é infinita, vamos comparar seus termos com a seguinte série:</p>
            $$ 1 + \frac{1}{2} + \left(\frac{1}{4} + \frac{1}{4}\right) + \left(\frac{1}{8} + \frac{1}{8} + \frac{1}{8} + \frac{1}{8}\right) + \cdots $$
            <p>(perceba que os termos acima foram agrupados em parênteses por uma razão, que você verá em breve).</p>
            <p> É fácil observar que se somarmos os grupos dos parênteses, obtemos sempre $\frac{1}{2}$. Logo, a soma acima equivale à soma $1 + \frac{1}{2} + \frac{1}{2} + \frac{1}{2} + \cdots = \infty$, a qual já sabemos que diverge.</p>
            <p> Vamos alinhas as duas para fins de comparação:</p>
                    $$1 + \frac{1}{2} + \left(\frac{1}{3} + \frac{1}{4}\right) + \left(\frac{1}{5} + \frac{1}{6} + \frac{1}{7} + \frac{1}{8}\right) + \cdots \tag{converge ou diverge?}$$
                    $$1 + \frac{1}{2} + \left(\frac{1}{4} + \frac{1}{4}\right) + \left(\frac{1}{8} + \frac{1}{8} + \frac{1}{8} + \frac{1}{8}\right) + \cdots \tag{diverge}$$
            <p> Se compararmos cada grupo entre parênteses da soma $\zeta(1)$ (a primeira) com a nossa segunda soma (que sabemos que diverge), veremos que a primeira soma é sempre maior que a segunda. E como a segunda diverge, logo a primeira, por ser sempre maior, também irá. Prova-se assim que $\zeta(1) = \infty$.</p>
            <p> Se você ainda não estiver convencido, compare o primeiro grupo de cada equação: $\left(\frac{1}{3} + \frac{1}{4}\right)$ e $\left(\frac{1}{4} + \frac{1}{4}\right)$, o primeiro vale aproximadamente $0.58333\cdots$, enquanto o segundo, claramente vale $0.5$. Fica evidente que o grupo da primeira soma é maior que o da segunda. O mesmo ocorre para os outros grupos.</p>
            <p><h2>Convergência da função zeta</h2></p>
            <p>Através do <a href="http://http://pt.wikipedia.org/wiki/Teste_da_integral" target="_blank"> teste da integral</a> podemos encontrar o domínio de convergência da função. O teste diz que $\sum_{n=1}^\infty \frac{1}{n^z}$ só converge, se a integral $\int_{n=1}^\infty \frac{1}{n^z}$ convergir. Resolvendo a integral:</p>
            <p>$$|\zeta(z)| = \left|\sum_{n=1}^\infty \frac{1}{n^z}\right| \le \sum_{n=1}^\infty \left|\frac{1}{n^z}\right|$$</p>
            <p><h4>*em construção</h4></p>
            <p><h2>Produtório de Euler</h2>
            <p>Euler provou que a soma $\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s}$ pode ser representada também através de um produtório infinito de termos.</p>
            <p>Considere a forma explícita da função zeta:</p>
            <p>$$\zeta(s) = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + \cdots$$
            <p>Se multiplicarmos $\zeta(s)$ por $\frac{1}{2^s}$ obtemos:</p>
            <p>$$\frac{\zeta(s)}{2^s} = \left(\frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + \cdots\right)\frac{1}{2^s}$$</p>
            <p>$$\frac{\zeta(s)}{2^s} = \left(\frac{1}{2^s} + \frac{1}{4^s} + \frac{1}{6^s} + \frac{1}{8^s} + \frac{1}{10^s} + \cdots\right) = \sum_{n=1}^\infty \frac{1}{(2n)^s}$$</p>
            <p>Observe que todos os termos foram multiplicados por $\frac{1}{2^s}$, transformando assim $\frac{\zeta(s)}{2^s}$ no somatório $\sum_{n=1}^\infty \frac{1}{(2n)^s}$</p>
            <p>Ao subtrairmos $\frac{\zeta(s)}{2^s}$ de $\zeta(s)$:</p>
            <p>$$\zeta(s) - \frac{\zeta(s)}{2^s} = \left(\frac{1}{1^s} + \color{#F01C2C}{\frac{1}{2^s}} + \frac{1}{3^s} + \color{#F01C2C}{\frac{1}{4^s}} + \frac{1}{5^s} + \color{#F01C2C}{\frac{1}{6^s}} + \cdots\right) - \left(\color{#F01C2C}{\frac{1}{2^s} + \frac{1}{4^s} + \frac{1}{6^s} + \frac{1}{8^s} + \frac{1}{10^s} + \cdots}\right) $$
            <p>Os termos em vermelho da primeira equação (todos da forma $\frac{1}{(2n)^s}$) foram cancelados, deixando assim:
            $$\zeta(s) - \frac{\zeta(s)}{2^s} = \frac{1}{1^s} + \frac{1}{3^s} + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{9^s} + \frac{1}{11^s} + \cdots$$
            <p> E simplificando a expressão $\zeta(s) - \frac{\zeta(s)}{2^s}$ de modo a distribuir seus termos, obtêm-se: $\zeta(s)(1-\frac{1}{2^s})$
            <p>Multiplicando nossa nova expressão $\zeta(s)\left(1-\frac{1}{2^s}\right)$ por $\frac{1}{3^s}$ obtemos:
            <p>$$\zeta(s)\left(1-\frac{1}{2^s}\right)\frac{1}{3^s} = \left(\frac{1}{1^s} + \frac{1}{3^s} + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{9^s} + \frac{1}{11^s} + \cdots\right)\frac{1}{3^s}$$
            <p>Mais uma vez, multiplicando os termos da parte direita da equação:
            <p>$$\zeta(s)\left(1-\frac{1}{2^s}\right)\frac{1}{3^s} = \frac{1}{3^s} + \frac{1}{9^s} + \frac{1}{15^s} + \frac{1}{21^s} + \frac{1}{27^s} + \frac{1}{33^s} + \cdots$$
            <p> Subtraindo $\left(1-\frac{1}{2^s}\right)$ de $\zeta(s)\left(1-\frac{1}{2^s}\right)\frac{1}{3^s}$ obtemos:
            <p> $$\zeta(s)\left(1-\frac{1}{2^s}\right) - \zeta(s)\left(1-\frac{1}{2^s}\right)\frac{1}{3^s} = $$ $$\left(\frac{1}{1^s} + \color{#F01C2C}{\frac{1}{3^s}} + \frac{1}{5^s} + \frac{1}{7^s} + \color{#F01C2C}{\frac{1}{9^s}} + \frac{1}{11^s} + \frac{1}{13^s} + \color{#F01C2C}{\frac{1}{15^s}}\cdots\right) - \left(\color{#F01C2C}{\frac{1}{3^s} + \frac{1}{9^s} + \frac{1}{15^s} + \frac{1}{21^s} + \frac{1}{27^s} + \frac{1}{33^s} + \cdots}\right)$$
            <p> Todos os termos em vermelho (múltiplos de 3) do primeiro grupo em parênteses foram excluídos da nova equação.
            <p> Simplificando mais uma vez o lado esquerdo da equação obtemos: $\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)$, então:
            <p>$$\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right) = \frac{1}{1^s}  + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ \cdots$$
            <p>Agora, de um modo resumido, multiplicando mais uma vez nossa nova equação $\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)$ por $\frac{1}{5^s}$, subtraindo novamente da nossa equação antiga $\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)$, e simplificando a parte esquerda da equação:
            <p>$$\zeta(s)\left( 1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)\left(1-\frac{1}{5^s}\right) =$$ $$\left(\frac{1}{1^s}  + \color{#F01C2C}{\frac{1}{5^s}} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ \cdots\right)-\left(\color{#F01C2C}{\frac{1}{5^s}  + \frac{1}{25^s} + \frac{1}{35^s} + \frac{1}{55^s} + \frac{1}{65^s}+ \cdots}\right)$$
            <p>Então:
            <p>$$\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)\left(1-\frac{1}{5^s}\right) = \left(\frac{1}{1^s} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ \frac{1}{17^s} + \frac{1}{19^s}\cdots\right)$$
            <p>Percebemos que a cada multiplicação por um número primo, o eliminamos do outro lado da equação, e consequentemente, todos os seus múltiplos. Fica fácil observar que, se continuarmos com nosso produto infinito do modo $\zeta(s)\left(1-\frac{1}{2^s}\right)\left(1-\frac{1}{3^s}\right)\left(1-\frac{1}{5^s}\right)\left(1-\frac{1}{7^s}\right)\cdots$, convergimos, no lado direito da equação, para $\frac{1}{1^s}$, ou seja, $1$.
            <p>Um modo de representar isso é pelo símbolo do produtório $\zeta(s)\prod_{p}^\infty \left(1-\frac{1}{p^s}\right) = 1$ sendo $p$ cada número primo existente. Ou seja, isolando o valor de $\zeta(s)$ na equação:
            $\zeta(s) = \frac{1}{\prod_{p}^\infty \left(1-\frac{1}{p^s}\right)}$. Logo, nosso primeiro resultado envolvendo a função zeta:
            <p> $$\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s} = \prod_{p}^\infty \frac{1}{\left(1-\frac{1}{p^s}\right)}$$
            <p>E mais: nossa primeira conexão com os números primos!</p>
            <p><h2>Prova de que existem infinitos números primos</h2>
            <p>Através da prova de que $\zeta(1)$ diverge e do produtório de Euler, é possível provar que existem infinitos números primos. Como a soma infinita $\frac{1}{1^1} + \frac{1}{2^1} + \frac{1}{3^1} + \frac{1}{4^1} + \cdots$ diverge, somente um produto <b>infinito</b> de números pode suprir o "resultado infinito" da soma. Provando assim que <b>existem infinitos números primos</b>. Com certeza uma prova bem mais avançada que o milenar <a href="http://pt.wikipedia.org/wiki/Teorema_de_Euclides" target="_blank"> teorema de Euclides</a>.
            <p><h2>Visualizando a função zeta</h2>
            <p><div align="center"><img src="http://lucaszanella.com/img/zeta.png"></div>
            <p>Perceba a 'singularidade' em $s = 1$, quando a soma 'vai para o infinito'. Observe como quando $s\to\infty$, $\zeta(s)\to x$. Você consegue imaginar quanto vale $x$?
            <p><h2>Continuação Analítica</h2>
            <p>A função Zeta pode ser continuada analíticamente, para que seu domínio passe de $\Re(z)>1$ para $\Re(z)>0$ através do método abaixo:
            <p>$$\zeta(z) = \frac{1}{1^z} + \frac{1}{2^z} + \frac{1}{3^z} + \frac{1}{4^z} + \frac{1}{5^z} + \cdots$$
            <p>Vamos fazer uma pequena modificação na expressão:
            <p>$$\frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots \tag{1}$$
            <p>Ela se parece com a função zeta, a não ser pelo sinal negativo que se alterna com o positivo. Podemos adicionar termos de um modo estratégico para transformar a expressão acima na função zeta. O truque está em adicionar o dobro de cada elemento negativo. Ao adicionar uma vez, zeramos os termos negativos, porém ao adicionar duas vezes, eles simplesmente se tornam positivos. Logo:
            <p>$$\frac{2}{2^z} + \frac{2}{4^z} + \frac{2}{6^z} + \cdots \tag{2}$$
            <p>Assim, devido aos termos posicionados estrategicamente, transformamos a expressão na função zeta. Observe:
            <p>$$-\frac{1}{2^z} + \frac{2}{2^z} = \frac{1}{2^z}$$
            <p>$$-\frac{1}{4^z} + \frac{2}{4^z} = \frac{1}{4^z}$$
            <p>$$-\frac{1}{6^z} + \frac{2}{6^z} = \frac{1}{6^z}$$
            <p>$$\cdots$$
            <p>Utilizando um outro artifício, vamos fatorar a equação $(2)$ pelo termo $\frac{2}{2^z}$
            <p>$$\frac{2}{2^z} \left(\frac{1}{1^z} + \frac{1}{2^z} + \frac{1}{3^z} + \cdots\right)$$
            <p>Perceba que, ao fatorar, terminamos com a função zeta dentro dos parênteses. Finalmente, ao adicionar os termos à expressão original, terminamos com:
            <p>$$\zeta(z) = \left(\frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots\right) + \frac{2}{2^z} \underbrace{\left(\frac{1}{1^z} + \frac{1}{2^z} + \frac{1}{3^z} + \cdots\right)}_{\zeta(z)}$$
            <p> Ou seja:
            <p> $$\zeta(z) = \left(\frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots \right) + \frac{2}{2^z} \zeta(z)$$
            <p> O termo $\frac{2}{2^z}$ pode ser escrito na forma: $2^{1-z}$
            <p> $$\zeta(z) = \left(\frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots \right) + 2^{1-z} \zeta(z)$$
            <p> Ao subtrairmos  $2^{1-z} \zeta(s)$ dos dois lados:
            <p> $$\zeta(z) - 2^{1-z} \zeta(s) = \frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots$$
            <p> Deixando a parte esquerda em evidência e escrevendo a parte direita em notação de somatório:
            <p> $$\zeta(z) (1-2^{1-z}) = \sum_{n=1}^\infty \frac{(-1)^{n+1}}{n^z}$$
            <p> Dividindo os dois lados da equação por $1-2^{1-z}$:
            <p> $$\zeta(z) = \frac{1}{1-2^{1-z}} \sum_{n=1}^\infty \frac{(-1)^{n+1}}{n^z}$$
            <p> A expressão $\sum_{n=1}^\infty \frac{(-1)^{n+1}}{n^z}$ é conhecida como <b>"Função Eta"</b> ou <b>"Zeta Alternada"</b> e pode ser expressa pelo símbolo $\eta$:
            <p> $$\zeta(z) = \frac{1}{1-2^{1-z}} \eta(z)$$
            <p>Ao estudar a função eta por si só, veremos que ela converge pra valores com parte real maior que 0, e como encontramos uma expressão que relaciona a função zeta com a função eta, podemos determinar o domínio de convergência da nova expressão.</p>
            <p><h2>Convergência da continuação analítica</h2></p>
            <p><h4>*em construção</h4></p>
            <p><h2>Zeros da função zeta</h2></p>
            <p>Este será nosso primeiro contato com os zeros da função zeta. Os zeros são análogos às raízes de uma função real, ou seja, são os números para os quais a função vale $0$. Acontece que a continução analítica $\zeta(z) = \frac{1}{1-2^{1-z}} \eta(z)$ que nós calculamos logo acima, nos permite encontrar alguns zeros da função, pois ela converge para $\Re(z)>0$, e estes zeros têm parte real maior que $0$.</p>
            <p>Mas o que significa calcular essa expressão para um número complexo?</p>
            <p>$$\zeta(z) =  \frac{1}{1-2^{1-z}}\left(\frac{1}{1^z} - \frac{1}{2^z} + \frac{1}{3^z} - \frac{1}{4^z} + \frac{1}{5^z} - \frac{1}{6^z}\cdots \right)$$</p>
            <p>Na expressão acima, vemos que isso envolve calcular $a^z$, sendo $a$ um número inteiro, porém $z$ um número complexo. Para contornar isso, podemos escrever $a^z$ como $e^{\ln(a^z)} = e^{z\ln a}$, que é uma expressão perfeitamente possível de se calcular no domínio dos complexos.</p>
            <p>Ficamos com a expressão:</p>
            <p>$$\zeta(z) =  \frac{1}{1-e^{(1-z)\ln 2}}\left(\frac{1}{e^{z\ln 1}} - \frac{1}{e^{z\ln 2}} + \frac{1}{e^{z\ln 3}} - \frac{1}{e^{z\ln 4}} + \frac{1}{e^{z\ln 5}} - \frac{1}{e^{z\ln 6}}\cdots \right)$$</p>
            <p>Agora faz sentido calcular um valor em especial da função zeta no domínio dos complexos. Mas isso ficará pra depois, pois vamos derivar métodos mais rápidos para se calcular um valor para a função.</p>
            <p><h2>Um valor particular para a função eta</h2>
            <p> Adotando a expansão polinomial (série de taylor) para a função $\ln(1+x)$:
            <p>$$\ln(1+x) = x - \frac{x^2}{2} + \frac{x^3}{3} - \frac{x^4}{4} + \frac{x^5}{5} - \cdots$$
            <p> Vemos que para $x = 1$:
            <p>$$\ln(1+1) = 1 - \frac{1^2}{2} + \frac{1^3}{3} - \frac{1^4}{4} + \frac{1^5}{5} - \cdots$$
            <p>Ou seja:
            <p>$$\ln(2) = 1 - \frac{1}{2} + \frac{1}{3} - \frac{1}{4} + \frac{1}{5} - \cdots = \eta(1)$$
            <p><h2>Visualizando a continuação analítica</h2>
            <p align="center"><img src="http://lucaszanella.com/img/zeta_cont.png">
            <p> Perceba a convergência para $\Re(z)>0$ (exceto $\Re(z)=1$, é claro).
            <p><h2><span id="zeta_2n">Derivando a fórmula para $\zeta(2n)$</span></h2>
            <p>Vamos derivar uma das minhas fórmulas preferidas envolvendo a função zeta:
            <p>$$\zeta(2n) = (-1)^{n+1} \frac{B_{2n}(2\pi )^{2n}}{2(2n)!}$$
            <p>Essa equação uma íntima ligação com os <b>números de Bernoulli</b>, os quais explico totalmente <a href="http://lucaszanella.com/artigos/math/bernoulli" target="_blank">neste artigo</a>. 
            <p>Começamos com o produtório infinito da função $\sin x$, explorado por Euler:
            <p>$$\sin x =  x\prod_{n=1}^\infty \left[1-\frac{x^2}{n^2\pi^2}\right]$$
            <p>Abaixo, irei calcular a <b>derivada</b> de seu <b>logarítimo</b>, aproveitando a famosa propriedade da função $\log$, que quando aplicada num produto, o transforma em soma:
            <p>$$\log\sin x =  \log \left(x\prod_{n=1}^\infty \left[1-\frac{x^2}{n^2\pi^2}\right]\right)$$
            <p>Lembrando que $\log$ é o logatítimo de base $e$, ou seja $\ln$.
            <br>E agora transformando o logarítimo do produtório em um somatório de logarítimos:
            <p>$$\log\sin x = \log x + \sum_{n=1}^\infty \log \left (1-\frac{x^2}{n^2\pi^2}\right)$$
            <p>Derivando:
            <p>$$\frac{d}{dx} \log\sin x = \frac{d}{dx} \log x + \frac{d}{dx} \sum_{n=1}^\infty \log \left(1-\frac{x^2}{n^2\pi^2}\right)$$
            <p>Demonstrando como derivar a parte esquerda da equação:
            <p>$$\frac{d}{dx} \log\sin x = \frac{d \log\sin x}{d\sin x}\frac{d \sin x}{dx}  = \frac{1}{\sin x}\cos x  = \cot x$$
            <p> E agora a parte direita:
            <p>$$\frac{d}{dx} \log x + \frac{d}{dx} \sum_{n=1}^\infty \log \left(1-\frac{x^2}{n^2\pi^2}\right) = \frac{1}{x} + \sum_{n=1}^\infty \frac{d}{dx} \log \left(1-\frac{x^2}{n^2\pi^2}\right) = $$$$\frac{1}{x} + \sum_{n=1}^\infty \frac{d}{dx} \left (1 - \frac{x^2}{n^2\pi^2}\right) \frac{d \log \left(1-\frac{x^2}{n^2\pi^2}\right)}{d\left(1 - \frac{x^2}{n^2\pi^2}\right)} = \frac{1}{x} - \sum_{n=1}^\infty \left[\frac{2x}{n^2\pi^2} \frac{1}{1-\frac{x^2}{n^2\pi^2}}\right]$$
            <p>Terminamos com:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left[\frac{2x}{n^2\pi^2} \frac{1}{1-\frac{x^2}{n^2\pi^2}}\right]$$
            <p>A partir da série geométrica $\frac{1}{1-x} = 1 + x + x^2 + x^3 +\cdots$ para $|x|<1$  vamos expandir a parte $\frac{1}{1-\frac{x^2}{n^2\pi^2}}$ com a restrição $\left|\frac{x^2}{n^2\pi^2}\right|<1\implies |x^2|<|n^2\pi^2|$. Como $n$ começa em $1$, e temos que aplicar essa expansão para todo $n$, temos a restrição  $|x^2|<|\pi^2|\implies |x|<\pi$, e a série:
            <p>$$\frac{1}{1-\frac{x^2}{n^2\pi^2}} = 1 + {\left(\frac{x^2}{n^2\pi^2}\right)} + \left(\frac{x^2}{n^2\pi^2}\right)^2 + \left(\frac{x^2}{n^2\pi^2}\right)^3 + \cdots \tag{$|x|<\pi$}$$
            <p>Substituindo na equação anterior:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left[\frac{2x}{n^2\pi^2} \left(1 + {\left(\frac{x^2}{n^2\pi^2}\right)} + \left(\frac{x^2}{n^2\pi^2}\right)^2 + \left(\frac{x^2}{n^2\pi^2}\right)^3 + \cdots \right)\right]\tag{$|x|<\pi$}$$
            <p>Simplificando os expoentes:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left[\frac{2x}{n^2\pi^2} \left(1 + \frac{x^2}{n^2\pi^2} + \frac{x^4}{n^4\pi^4} + \frac{x^6}{n^6\pi^6} + \cdots\right)\right]\tag{$|x|<\pi$}$$
            <p>Evidenciando o $2$ para fora da soma e multiplicando $\frac{x}{n^2\pi^2}$ pelo termo entre parênteses:
            <p>$$\cot x = \frac{1}{x} - 2\sum_{n=1}^\infty \left[\frac{x}{n^2\pi^2} + \frac{x^3}{n^4\pi^4} + \frac{x^5}{n^6\pi^6} + \frac{x^7}{n^8\pi^8} + \cdots\right]\tag{$|x|<\pi$}$$
            <p>Multiplicando os dois lados da equação por $x$ (perceba que no lado direito da equação, ao invés de multiplicar $2$ por $x$, colocarei o $x$ dentro da soma, multiplicando assim todos os termos na forma $\frac{x^u}{n^{u+1}\pi^{u+1}}$:
            <p>$$x \cot x = 1 - 2\sum_{n=1}^\infty \left[\frac{x^2}{n^2\pi^2} + \frac{x^4}{n^4\pi^4} + \frac{x^6}{n^6\pi^6} + \frac{x^8}{n^8\pi^8} + \cdots\right]\tag{$|x|<\pi$}$$
            <p>Distribuindo a soma para cada termo (você entenderá em breve o motivo):
            <p>$$x \cot x = 1 - 2\left[\sum_{n=1}^\infty \frac{x^2}{n^2\pi^2} + \sum_{n=1}^\infty \frac{x^4}{n^4\pi^4} + \sum_{n=1}^\infty \frac{x^6}{n^6\pi^6} + \sum_{n=1}^\infty \frac{x^8}{n^8\pi^8} + \cdots\right]\tag{$|x|<\pi$}$$
            <p>Fatorando a fração $\frac{x^u}{\pi^u}$ de cada termo:
            <p>$$x \cot x = 1 - 2\left[\left(\sum_{n=1}^\infty \frac{1}{n^2}\right) \frac{x^2}{\pi^2} + \left(\sum_{n=1}^\infty \frac{1}{n^4}\right)\frac{x^4}{\pi^4}  + \left(\sum_{n=1}^\infty \frac{1}{n^6}\right)\frac{x^6}{\pi^6}  + \left(\sum_{n=1}^\infty \frac{1}{n^8}\right)\frac{x^8}{\pi^8}  + \cdots\right]\tag{$|x|<\pi$}$$
            <p>Fica fácil perceber a <b>função zeta</b> inclusa em vários termos do modo $\zeta(u) = \sum_{n=1}^\infty \frac{1}{n^u}$, deste modo, substituímos por seu símbolo:
            <p>$$x \cot x = 1 - 2\left[\zeta(2) \frac{x^2}{\pi^2} + \zeta(4)\frac{x^4}{\pi^4}  + \zeta(6)\frac{x^6}{\pi^6}  + \zeta(8)\frac{x^8}{\pi^8}  + \cdots\right]\tag{$|x|<\pi$}$$
            <p>Nota-se uma regularidade na soma infinita entre parênteses, no formato:
            <p>$$\sum_{n=1}^{\infty} \zeta(2n)\frac{x^{2n}}{\pi^{2n}}$$
            <p>Agora podemos escrever esta série para $x\cot x$:
            <p>$$x \cot x = 1 - 2\sum_{n=1}^{\infty} \zeta(2n)\frac{x^{2n}}{\pi^{2n}}\tag{$|x|<\pi$}$$
            <p>E aproveitando nossa fórmula já conhecida e que demonstro <a href="http://lucaszanella.com/pt/artigos/mat/bernoulli" target="_blank">aqui</a> como derivar (não explicarei neste artigo pois é uma parte exclusiva dos números de Bernoulli, então separei no outro artigo):

            <p>$$x \cot x = xi + \sum_{n=0}^\infty \frac{B_n}{n!}(2xi)^n$$
            <p>Vamos modificar a equação acima de modo que se aproxime o máximo possível da nossa identidade $x \cot x = 1 - 2\sum_{n=1}^{\infty} \left(\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right)$
            <br>Expandindo os dois primeiros termos da soma infinita:
            <p>$$x \cot x = xi + \frac{B_0}{0!}(2xi)^0 + \frac{B_1}{1!}(2xi)^1 + \sum_{n=2}^\infty \frac{B_n}{n!}(2xi)^n$$
            <p>Sabemos que $B_0 = 1$ e $B_1 = -\frac{1}{2}$, $0! = 1$ e $(2xi)^0 = 1$, então:
            <p>$$x \cot x = xi + 1 -\frac{2xi}{2} + \sum_{n=2}^\infty \frac{B_n}{n!}(2xi)^n$$
            <p>Resolvendo $xi-xi$, percebemos que a equação começa a ficar parecida com a identidade derivada acima para a função zeta:
            <p>$$x \cot x = 1 + \sum_{n=2}^\infty \frac{B_n}{n!}(2xi)^n$$
            <p>Agora com um pequeno truque, para obtermos um $-2$ na frente da soma, vamos multiplicá-la inteiramente por $\frac{2}{2}$, e alocar $\frac{1}{2}$ dentro da soma, e deixar o $2$ multiplicando por fora. Agora, converter para $-2$, e dentro, para $-\frac{1}{2}$, assim sua multiplicação gerará 1, novamente. Chegamos à equação:
            <p>$$x \cot x = 1 -2\sum_{n=2}^\infty \frac{B_n}{n!}\left(-\frac{1}{2}\right)(2xi)^n$$
            <p>Sabemos que todos os coeficientes $B_n$ onde $n$ é ímpar, exceto $B_1$, serão $0$, anulando todos os termos de índice ímpar da parte de somatório da equação. Assim podemos escrevê-la da seguinte forma:
            <p>$$x \cot x = 1 - 2\sum_{n=1}^\infty \left[\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right]$$
            <p>Como possuímos duas formas para escrever $x \cot x$, uma em função zeta, e outra em função dos números de Bernoulli, vamos igualar as duas:
            <p>$$1 - 2\sum_{n=1}^{\infty} \left[\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right] = 1 - 2\sum_{n=1}^\infty \left[\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right]$$
            <p>Subtraindo $1$ e multiplicando por $-\frac{1}{2}$ nos dois lados da equação:
            <p>$$\sum_{n=1}^{\infty} \left[\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right] = \sum_{n=1}^\infty \left[\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right]$$	
            <p>Notamos a igualdade:
            <p>$$\zeta(2n)\frac{x^{2n}}{\pi^{2n}} = \frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}$$	
            <p>Multiplicamos os dois lados por $\frac{\pi^{2n}}{x^{2n}}$ e transformamos $(2ix)^{2n}$ em $2^{2n}x^{2n}i^{2n}$
            <p>$$\zeta(2n) = \frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)2^{2n}x^{2n}i^{2n} \frac{\pi^{2n}}{x^{2n}}$$
            <p>Agora podemos dividir $\frac{x^{2n}}{x^{2n}}$ simplificando por $1$, e realocar o termo $-\frac{1}{2}$:
            <p>$$\zeta(2n) = \frac{B_{2n}}{2(2n)!}(-1)2^{2n}i^{2n}\pi^{2n}$$
            <p>Ao observar a expressão $i^{2n}$, que é $(\sqrt{-1})^{2n}$, vemos que a cada valor de $n$, começando de $1$, produzirá:
            <p>$$i^{2\cdot1} = i^2 = -1$$
            <p>$$i^{2\cdot2} = i^4 = +1$$
            <p>$$i^{2\cdot3} = i^6 = -1$$
            <p>$$\cdots$$ 
            <p>Há apenas uma alteração de sinais a cada iteração. Então resumimos $i^{2n}$ como $(-1)^n$. Como já possuímos outro termo $(-1)$ multiplicando os termos, vamos juntar com nossa nova expressão para $i^{2n}$, ficando assim com $(-1)^n\cdot (-1) = (-1)^{n+1}$. Ao juntar $\pi^{2n}$ com $2^{2n}$ produzimos a expressão $(2\pi)^{2n}$. Por fim, terminamos com a fórmula:
            <p>$$\zeta(2n) = (-1)^{n+1} \frac{B_{2n}(2\pi )^{2n}}{2(2n)!}$$
            <p>Agora com alguns valores de $B_n$:
            <p>$$B_0 = 1, B_1 = \frac{1}{2}, B_2 = \frac{1}{6}, B_4 = -\frac{1}{30}, B_6 = \frac{1}{42}, B_8 = -\frac{1}{30}$$
            <p>Podemos calcular valores para a função zeta:
            <p>$$
            \begin{aligned}
            \zeta(2\cdot 1)  &= \sum_{n=1}^\infty \frac{1}{n^2} = 1 + \frac{1}{2^2} + \frac{1}{3^2} + \frac{1}{4^2} + \cdots = (-1)^{1+1} \frac{B_{2\cdot 1}(2\pi )^{2\cdot 1}}{2(2\cdot 1)!} = \frac{\pi^2}{6}\\
            \zeta(2\cdot 2)  &= \sum_{n=1}^\infty \frac{1}{n^4} = 1 + \frac{1}{2^4} + \frac{1}{3^4} + \frac{1}{4^4} + \cdots = (-1)^{2+1} \frac{B_{2\cdot 2}(2\pi )^{2\cdot 2}}{2(2\cdot 2)!} = \frac{\pi^4}{90}\\
            \zeta(2\cdot 3)  &= \sum_{n=1}^\infty \frac{1}{n^6} = 1 + \frac{1}{2^6} + \frac{1}{3^6} + \frac{1}{4^6} + \cdots = (-1)^{3+1} \frac{B_{2\cdot 3}(2\pi )^{2\cdot 3}}{2(2\cdot 3)!} = \frac{\pi^6}{945}\\
            \zeta(2\cdot 4)  &= \sum_{n=1}^\infty \frac{1}{n^8} = 1 + \frac{1}{2^8} + \frac{1}{3^8} + \frac{1}{4^8} + \cdots = (-1)^{4+1} \frac{B_{2\cdot 4}(2\pi )^{2\cdot 4}}{2(2\cdot 4)!} = \frac{\pi^8}{9450}
                \end{aligned}$$
            <p><h6>*Este artigo está em construção</h6>
</div>