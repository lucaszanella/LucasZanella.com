<div align='justify'>
    <h2>Função Zeta</h2> 
            <p>A função zeta é definida por:
            $$\zeta(s) = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + ...$$
            <p> Ou no modo compacto:
            $$\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s}$$
            <p> A função zeta mostrada acima converge para qualquer valor com parte real maior que 1 ($Re(s)>1$), o que será provado neste artigo.
            <p> Alguns valores já calculados para a função zeta:
            <p> $\zeta(1) = \infty$ (ver prova abaixo), $\zeta(2) = \frac{\pi^2}{6}$ (ler mais <a href="http://lucaszanella.com/pt/artigos/mat/basileia" target="_blank">aqui</a>), $\zeta(3) \approx 1.202$
            <p> Vamos provar, através do método de comparação, que $\zeta(1) = \infty$:
            <p> Suponhamos uma série qualquer, em que somamos infinitamente uma mesma quantidade. É notável que, por mais que os termos sejam pequenos, a soma irá divergir. Tomemos como exemplo a série:
            $$\frac{1}{2} + \frac{1}{2} + \frac{1}{2} + ...$$
            <p>Vamos provar abaixo que $\zeta(1)$ (também chamada de série harmônica) diverge.
            <p><h2>Prova de que $\zeta(1)$ diverge</h2>
            <p> $\zeta(1)$ nos dá a seguinte soma:
            $$1 + \frac{1}{2} + \frac{1}{3} + \frac{1}{4} + \frac{1}{5} + \frac{1}{6} + \frac{1}{7} +... $$
            <p> Que recebe o nome de "série harmônica".
            <p> Para provar que esta soma é infinita, vamos comparar seus termos com a série tomada como exemplo logo acima:
            $$ 1 + \frac{1}{2} + (\frac{1}{4} + \frac{1}{4}) + (\frac{1}{8} + \frac{1}{8} + \frac{1}{8} + \frac{1}{8}) + ... $$
            <p>(perceba que os termos acima foram agrupados em parênteses por uma razão, você verá em breve).
            <p> É fácil observar que se somarmos os grupos dos parênteses, obtemos sempre $\frac{1}{2}$, assim sabemos que a soma $1 + \frac{1}{2} + \frac{1}{2} + \frac{1}{2} + ...$ é $\infty$ (diverge).
            <p> Vamos colocar uma acima da outra para fins de comparação:
                    $$1 + \frac{1}{2} + (\frac{1}{3} + \frac{1}{4}) + (\frac{1}{5} + \frac{1}{6} + \frac{1}{7} + \frac{1}{8}) + ... \tag{converge ou diverge?}$$
                    $$1 + \frac{1}{2} + (\frac{1}{4} + \frac{1}{4}) + (\frac{1}{8} + \frac{1}{8} + \frac{1}{8} + \frac{1}{8}) + ... \tag{diverge}$$
            <p> Se compararmos cada grupo entre parênteses da soma $\zeta(1)$ (a primeira) com a nossa segunda soma (que sabemos que diverge), veremos que a primeira soma é maior que a segunda. E como a segunda diverge, logo a primeira, sendo maior, também irá. Prova-se assim que $\zeta(1) = \infty$.
            <p> Se você ainda não estiver convencido, compare o primeiro grupo de cada equação: $(\frac{1}{3} + \frac{1}{4})$ e $(\frac{1}{4} + \frac{1}{4})$, o primeiro vale aproximadamente $0.58333...$, enquanto o segundo, claramente vale $0.5$. Fica evidente que o grupo da primeira soma é maior que o da segunda. O mesmo ocorre para os outros grupos. Assim, concluímos que a primeira soma (que equivale a $\zeta(1)$) é maior que a segunda soma (que diverge, por ser $1 + \frac{1}{2} + \frac{1}{2} + \frac{1}{2} + ... = \infty $).
            <p><h2>Produtório de Euler</h2>
            <p>Euler provou que a soma $\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s}$ pode ser representada também através de um produtório infinito de termos. 
            <p>Considere a forma explícita da função zeta:
            <p>$$\zeta(s) = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + ...$$
            <p>Se multiplicarmos $\zeta(s)$ por $\frac{1}{2^s}$ obtemos:
            <p>$$\frac{\zeta(s)}{2^s} = (\frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + ...)\frac{1}{2^s}$$
            <p>$$\frac{\zeta(s)}{2^s} = (\frac{1}{2^s} + \frac{1}{4^s} + \frac{1}{6^s} + \frac{1}{8^s} + \frac{1}{10^s} + ...) = \sum_{n=1}^\infty \frac{1}{(2n)^s}$$
            <p>Observe que todos os termos foram multiplicados por $\frac{1}{2^s}$, transformando assim $\frac{\zeta(s)}{2^s}$ no somatório $\sum_{n=1}^\infty \frac{1}{(2n)^s}$
            <p>Ao subtrairmos $\frac{\zeta(s)}{2^s}$ de $\zeta(s)$:
            <p>$$\zeta(s) - \frac{\zeta(s)}{2^s} = (\frac{1}{1^s} + \color{Red}{\frac{1}{2^s}} + \frac{1}{3^s} + \color{Red}{\frac{1}{4^s}} + \frac{1}{5^s} + \color{Red}{\frac{1}{6^s}} + ...) - (\color{Red}{\frac{1}{2^s} + \frac{1}{4^s} + \frac{1}{6^s} + \frac{1}{8^s} + \frac{1}{10^s} + ...}) $$
            <p>Os termos em vermelho da primeira equação (todos da forma $\frac{1}{(2n)^s}$) foram cancelados, deixando assim:
            $$\zeta(s) - \frac{\zeta(s)}{2^s} = \frac{1}{1^s} + \frac{1}{3^s} + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{9^s} + \frac{1}{11^s} + ...$$
            <p> E simplificando a expressão $\zeta(s) - \frac{\zeta(s)}{2^s}$ de modo a distribuir seus termos, obtêm-se: $\zeta(s)(1-\frac{1}{2^s})$
            <p>Multiplicando nossa nova expressão $\zeta(s)(1-\frac{1}{2^s})$ por $\frac{1}{3^s}$ obtemos:
            <p>$$\zeta(s)(1-\frac{1}{2^s})\frac{1}{3^s} = (\frac{1}{1^s} + \frac{1}{3^s} + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{9^s} + \frac{1}{11^s} + ...)\frac{1}{3^s}$$
            <p>Mais uma vez, multiplicando os termos da parte direita da equação:
            <p>$$\zeta(s)(1-\frac{1}{2^s})\frac{1}{3^s} = \frac{1}{3^s} + \frac{1}{9^s} + \frac{1}{15^s} + \frac{1}{21^s} + \frac{1}{27^s} + \frac{1}{33^s} + ...$$
            <p> Subtraindo $(1-\frac{1}{2^s})$ de $\zeta(s)(1-\frac{1}{2^s})\frac{1}{3^s}$ obtemos:
            <p> $$\zeta(s)(1-\frac{1}{2^s}) - \zeta(s)(1-\frac{1}{2^s})\frac{1}{3^s} = $$ $$(\frac{1}{1^s} + \color{Red}{\frac{1}{3^s}} + \frac{1}{5^s} + \frac{1}{7^s} + \color{Red}{\frac{1}{9^s}} + \frac{1}{11^s} + \frac{1}{13^s} + \color{Red}{\frac{1}{15^s}}...) - (\color{Red}{\frac{1}{3^s} + \frac{1}{9^s} + \frac{1}{15^s} + \frac{1}{21^s} + \frac{1}{27^s} + \frac{1}{33^s} + ...})$$
            <p> Todos os termos em vermelho (múltiplos de 3) do primeiro grupo em parênteses foram excluídos da nova equação.
            <p> Simplificando mais uma vez o lado esquerdo da equação obtemos: $\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})$, então:
            <p>$$\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s}) = \frac{1}{1^s}  + \frac{1}{5^s} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ ...$$
            <p>Agora, de um modo resumido, multiplicando mais uma vez nossa nova equação $\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})$ por $\frac{1}{5^s}$, subtraindo novamente da nossa equação antiga $\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})$, e simplificando a parte esquerda da equação:
            <p>$$\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})(1-\frac{1}{5^s}) =$$ $$(\frac{1}{1^s}  + \color{Red}{\frac{1}{5^s}} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ ...)-(\color{Red}{\frac{1}{5^s}  + \frac{1}{25^s} + \frac{1}{35^s} + \frac{1}{55^s} + \frac{1}{65^s}+ ...})$$
            <p>Então:
            <p>$$\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})(1-\frac{1}{5^s}) = (\frac{1}{1^s} + \frac{1}{7^s} + \frac{1}{11^s} + \frac{1}{13^s}+ \frac{1}{17^s} + \frac{1}{19^s}...)$$
            <p>Percebemos que a cada multiplicação por um número primo, o eliminamos do outro lado da equação, e consequentemente, todos os seus múltiplos. Fica fácil observar que, se continuarmos com nosso produto infinito do modo $\zeta(s)(1-\frac{1}{2^s})(1-\frac{1}{3^s})(1-\frac{1}{5^s})(1-\frac{1}{7^s})...$, o único termo que restará no outro lado da equação será o $\frac{1}{1^s}$, ou seja, $1$.
            <p>Um modo de representar isso é pelo símbolo do produtório $\zeta(s)\prod_{p}^\infty (1-\frac{1}{p^s}) = 1$ sendo p cada número primo existente (veja abaixo a prova de que há uma infinidade de números primos). Ou seja, isolando o valor de $\zeta(s)$ na equação:
            $\zeta(s) = \frac{1}{\prod_{p}^\infty (1-\frac{1}{p^s})}$. Então:
            <p> $$\zeta(s) = \sum_{n=1}^\infty \frac{1}{n^s} = \prod_{p}^\infty \frac{1}{(1-\frac{1}{p^s})}$$
            <p><h2>Prova de que existem infinitos números primos</h2>
            <p>Através da prova de que $\zeta(1)$ diverge, e do produtório de Euler, é possível provar que existem infinitos números primos. Como a soma infinita $\frac{1}{1^1} + \frac{1}{2^1} + \frac{1}{3^1} + \frac{1}{4^1} + ...$ diverge, somente um produto <b>infinito</b> de números pode suprir o "resultado infinito" da soma. Provando assim que <b>existem infinitos números primos</b>.
            <p><h2>Visualizando a função zeta</h2>
            <p><div align="center"><img src="http://lucaszanella.com/img/zeta.png"></div>
            <p>Perceba a singularidade em $s = 1$.

            <p><h2>A função Eta</h2>
            <p> A função eta (ou zeta alternada), é definida pelo símbolo $\eta$ e é a seguinte soma:
            <p> $$\eta(s) = \frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}...$$

            <p><h2>Continuação Analítica</h2>
            <p>A função Zeta pode ser continuada analíticamente, para que seu domínio passe de $Re>1$ para $Re>0$ através do método abaixo:
            <p>$$\zeta(s) = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \frac{1}{4^s} + \frac{1}{5^s} + ...$$
            <p>Com um pequeno truque, vemos que se alternarmos os sinais deste modo:
            <p>$$\frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}... \tag{1}$$
            <p>Podemos reconstruir a função original, readicionando os termos abaixo, para cancelar as partes negativas da soma, e transformar de volta na função zeta:
            <p>$$\frac{2}{2^s} + \frac{2}{4^s} + \frac{2}{6^s} + ... \tag{2}$$
            <p>Deste modo, veremos que se somarmos cada parte negativa da equação alternada $1$ com seu respectivo termo na equação $2$, resultará no termo original da função zeta:
            <p>$$-\frac{1}{2^s} + \frac{2}{2^s} = \frac{1}{2^s}$$
            <p>$$-\frac{1}{4^s} + \frac{2}{4^s} = \frac{1}{4^s}$$
            <p>$$-\frac{1}{6^s} + \frac{2}{6^s} = \frac{1}{6^s}$$
            <p>$$...$$
            <p>Então, se colocarmos o termo $\frac{2}{2^s}$ em evidência, resultará em:
            <p>$$\frac{2}{2^s} (\frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + ...)$$
            <p>Perceba que a parte entre parênteses é a nossa função zeta original, então:
            <p>$$\zeta(s) = (\frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}...) + \frac{2}{2^s} (\frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + ...)$$
            <p> Ou seja:
            <p> $$\zeta(s) = (\frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}...) + \frac{2}{2^s} \zeta(s)$$
            <p> O termo $\frac{2}{2^s}$ pode ser escrito na forma: $2^{1-s}$
            <p> $$\zeta(s) = (\frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}...) + 2^{1-s} \zeta(s)$$
            <p> Ao retirarmos $2^{1-s} \zeta(s)$ dos dois lados:
            <p> $$\zeta(s) - 2^{1-s} \zeta(s) = \frac{1}{1^s} - \frac{1}{2^s} + \frac{1}{3^s} - \frac{1}{4^s} + \frac{1}{5^s} - \frac{1}{6^s}...$$
            <p> Deixando a parte esquerda em evidência e escrevendo a parte direita em notação de somatório:
            <p> $$\zeta(s) (1-2^{1-s}) = \sum_{n=1}^\infty \frac{(-1)^{n+1}}{(n)^s}$$
            <p> Dividindo os dois lados da equação por $1-2^{1-s}$:
            <p> $$\zeta(s) = \frac{1}{(1-2^{1-s})} \sum_{n=1}^\infty \frac{(-1)^{n+1}}{(n)^s}$$
            <p> A expressão $\sum_{n=1}^\infty \frac{(-1)^{n+1}}{(2n)^s}$ é conhecida como "Função Eta" ou "Zeta Alternada" e pode ser expressa pelo símbolo $\eta$:
            <p> $$\zeta(s) = \frac{1}{1-2^{1-s}} \eta(s)$$
            <p> Obtemos uma nova expressão que converge para valores não só maiores que 1, mas também os maiores que 0. 
            <p><h2>Um valor particular para a função eta</h2>
            <p> Adotando a expansão polinomial (série de taylor) para a função $\ln(1+x)$:
            <p>$$\ln(1+x) = x - \frac{x^2}{2} + \frac{x^3}{3} - \frac{x^4}{4} + \frac{x^5}{5} - ...$$
            <p> Vemos que para $x = 1$:
            <p>$$\ln(1+1) = 1 - \frac{1^2}{2} + \frac{1^3}{3} - \frac{1^4}{4} + \frac{1^5}{5} - ...$$
            <p>Ou seja:
            <p>$$\ln(2) = 1 - \frac{1}{2} + \frac{1}{3} - \frac{1}{4} + \frac{1}{5} - ... = \eta(1)$$
            <p> O valor em particular $\eta(1) = \ln(2)$ foi calculado, e podemos definir a eta em função de zeta:
            <p> $$\eta(s) = (1-2^{1-s})\zeta(s)$$
            <p><h2>Visualizando a continuação analítica</h2>
            <p align="center"><img src="http://lucaszanella.com/img/zeta_cont.png">
            <p> Perceba a convergência para $Re>0$ (exceto $Re=1$, é claro).
            <p><h2><span id="zeta_2n">Derivando a fórmula para $\zeta(2n)$</span></h2>
            <p>Vamos agora derivar a fórmula para calcular a função zeta para valores pares (não se conhece uma fórmula que nos permita calcular os valores para números ímpares). 
            <p>A fórmula seguinte:
            <p>$$\zeta(2n) = (-1)^{n+1} \frac{B_{2n}(2\pi )^{2n}}{2(2n)!}$$
            <p>Possui uma íntima ligação com os <b>números de Bernoulli</b>, os quais explico totalmente <a href="http://lucaszanella.com/artigos/math/bernoulli" target="_blank">neste artigo</a>. 
            <p>Euler fez uso de uma importante equação, que exibe $\sin(x)$ em termos de de um produtório infinito. Você perceberá, em breve, a intuição por trás do uso desta equação, por Euler.
            <p>$$\sin(x) =  x\prod_{n=1}^\infty \left(1-\frac{x^2}{n^2\pi^2}\right)$$
            <p>Como já mostrado no artigo sobre o <a href="http://lucaszanella.com/artigos/math/basel" target="_blank">problema de Basileia</a>, esta função possui algumas propriedades interessantes. Abaixo, irei calcular a <b>derivada</b> de seu <b>logarítimo</b>. A intuição por trás deste processo é que o logarítimo de um produto, produz uma soma dos logarítimos. Deste modo: $\log(a \cdot b) = \log(a) + \log(b)$. 
            <p>Euler modificou a equação, para ver que propriedades o somatório podia nos gerar. Fica fácil perceber a grande oportunidade que este processo nos gera, uma vez que transformamos um produtório infinito de logarítimos, em somatório infinito de logarítimos. Ainda, após derivar, nos livramos também dos logarítimos, ficando com uma simples expressão matemática sem funções transcendentais.
            <p>$$\log(\sin x) =  \log \left(x\prod_{n=1}^\infty \left(1-\frac{x^2}{n^2\pi^2}\right)\right)$$
            <p>Lembrando que $\log$ é o logatítimo de base $e$, ou seja $\ln$.
            <br>E agora transformando o logarítimo do produtório em um somatório de logarítimos:
            <p>$$\log(\sin x) = \log x + \sum_{n=1}^\infty \log \left (1-\frac{x^2}{n^2\pi^2}\right)$$
            <p>Derivando:
            <p>$$\frac{d}{dx} \log(\sin x) = \frac{d}{dx} \log x + \frac{d}{dx} \sum_{n=1}^\infty \log \left(1-\frac{x^2}{n^2\pi^2}\right)$$
            <p>Demonstrando como derivar a parte esquerda da equação:
            <p>$$\frac{d}{dx} \log(\sin x) = \frac{d \sin x}{dx} \cdot \frac{d \log(\sin x)}{d(\sin x)} = \cos x \cdot \frac{1}{\sin x} = \cot x$$
            <p> E agora a parte direita:
            <p>$$\frac{d}{dx} \log x + \frac{d}{dx} \sum_{n=1}^\infty \log \left(1-\frac{x^2}{n^2\pi^2}\right) = \frac{1}{x} + \sum_{n=1}^\infty \frac{d}{dx} \log \left(1-\frac{x^2}{n^2\pi^2}\right) = $$$$\frac{1}{x} + \sum_{n=1}^\infty \frac{d}{dx} \left (1 - \frac{x^2}{n^2\pi^2}\right)\cdot \frac{d \log \left(1-\frac{x^2}{n^2\pi^2}\right)}{d(1 - \frac{x^2}{n^2\pi^2})} = \frac{1}{x} - \sum_{n=1}^\infty \left(\frac{2x}{n^2\pi^2} \cdot \frac{1}{1-\frac{x^2}{n^2\pi^2}}\right)$$
            <p>Terminamos com:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left(\frac{2x}{n^2\pi^2} \cdot \frac{1}{1-\frac{x^2}{n^2\pi^2}}\right)$$
            <p>A partir da série geométrica $\frac{1}{1-x} = 1 + x + x^2 + x^3 +...$ para $x<1$  vamos expandir a parte $\frac{1}{1-\frac{x^2}{n^2\pi^2}}$ deste modo:
            <p>$$\frac{1}{1-\frac{x^2}{n^2\pi^2}} = 1 + {\left(\frac{x^2}{n^2\pi^2}\right)} + \left(\frac{x^2}{n^2\pi^2}\right)^2 + \left(\frac{x^2}{n^2\pi^2}\right)^3 + ...$$
            <p>Substituindo na equação anterior:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left(\frac{2x}{n^2\pi^2} \left(1 + {\left(\frac{x^2}{n^2\pi^2}\right)} + \left(\frac{x^2}{n^2\pi^2}\right)^2 + \left(\frac{x^2}{n^2\pi^2}\right)^3 + ... \right)\right)$$
            <p>Simplificando os expoentes:
            <p>$$\cot x = \frac{1}{x} - \sum_{n=1}^\infty \left(\frac{2x}{n^2\pi^2} \left(1 + \frac{x^2}{n^2\pi^2} + \frac{x^4}{n^4\pi^4} + \frac{x^6}{n^6\pi^6} + ...\right)\right)$$
            <p>Evidenciando o 2 para fora da soma e multiplicando $\frac{x}{n^2\pi^2}$ pelo termo entre parênteses:
            <p>$$\cot x = \frac{1}{x} - 2\sum_{n=1}^\infty \left(\frac{x}{n^2\pi^2} + \frac{x^3}{n^4\pi^4} + \frac{x^5}{n^6\pi^6} + \frac{x^7}{n^8\pi^8} + ...\right)$$
            <p>Multiplicando os dois lados da equação por $x$ (perceba que no lado direito da equação, ao invés de multiplicar $2$ por $x$, colocarei o $x$ dentro da soma, multiplicando assim todos os termos na forma $\frac{x^u}{n^{u+1}\pi^{u+1}}$:
            <p>$$x \cot x = 1 - 2\sum_{n=1}^\infty \left(\frac{x^2}{n^2\pi^2} + \frac{x^4}{n^4\pi^4} + \frac{x^6}{n^6\pi^6} + \frac{x^8}{n^8\pi^8} + ...\right)$$
            <p>Distribuindo a soma para cada termo (você entenderá em breve o motivo):
            <p>$$x \cot x = 1 - 2\left(\sum_{n=1}^\infty \frac{x^2}{n^2\pi^2} + \sum_{n=1}^\infty \frac{x^4}{n^4\pi^4} + \sum_{n=1}^\infty \frac{x^6}{n^6\pi^6} + \sum_{n=1}^\infty \frac{x^8}{n^8\pi^8} + ...\right)$$
            <p>Fatorando a fração $\frac{x^u}{\pi^u}$ de cada termo:
            <p>$$x \cot x = 1 - 2\left(\left(\sum_{n=1}^\infty \frac{1}{n^2}\right) \frac{x^2}{\pi^2} + \left(\sum_{n=1}^\infty \frac{1}{n^4}\right)\frac{x^4}{\pi^4}  + \left(\sum_{n=1}^\infty \frac{1}{n^6}\right)\frac{x^6}{\pi^6}  + \left(\sum_{n=1}^\infty \frac{1}{n^8}\right)\frac{x^8}{\pi^8}  + ...\right)$$
            <p>Fica fácil perceber a função zeta inclusa em vários termos do modo $\sum_{n=1}^\infty \frac{1}{n^u}$, deste modo, substituímos por seu símbolo:
            <p>$$x \cot x = 1 - 2\left(\zeta(2) \frac{x^2}{\pi^2} + \zeta(4)\frac{x^4}{\pi^4}  + \zeta(6)\frac{x^6}{\pi^6}  + \zeta(8)\frac{x^8}{\pi^8}  + ...\right)$$
            <p>Nota-se uma regularidade na soma infinita entre parênteses, no formato:
            <p>$$\sum_{n=1}^{\infty} \left(\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right)$$
            <p>Agora podemos escrever esta série para$x\cot x$:
            <p>$$x \cot x = 1 - 2\sum_{n=1}^{\infty} \left(\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right)$$
            <p>E aproveitando nossa fórmula já conhecida e que demonstro <a href="http://lucaszanella.com/artigos/math/bernoulli" target="_blank">aqui</a> como derivar (não explicarei neste artigo pois é uma parte exclusiva dos números de Bernoulli, então separei no outro artigo):

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
            <p>$$x \cot x = 1 - 2\sum_{n=1}^\infty \left(\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right)$$
            <p>Como possuímos duas formas para escrever $x \cot x$, uma em função zeta, e outra em função dos números de Bernoulli, vamos igualar as duas:
            <p>$$1 - 2\sum_{n=1}^{\infty} \left(\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right) = 1 - 2\sum_{n=1}^\infty \left(\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right)$$
            <p>Subtraindo $1$ e multiplicando por $-1\frac{1}{2}$ nos dois lados da equação:
            <p>$$\sum_{n=1}^{\infty} \left(\zeta(2n)\frac{x^{2n}}{\pi^{2n}}\right) = \sum_{n=1}^\infty \left(\frac{B_{2n}}{(2n)!}\left(-\frac{1}{2}\right)(2ix)^{2n}\right)$$	
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
            <p>$$...$$ 
            <p>Há apenas uma alteração de sinais a cada iteração. Então resumimos $i^{2n}$ como $(-1)^n$. Como já possuímos outro termo $(-1)$ multiplicando os termos, vamos juntar com nossa nova expressão para $i^{2n}$, ficando assim com $(-1)^n\cdot (-1) = (-1)^{n+1}$. Ao juntar $\pi^{2n}$ com $2^{2n}$ produzimos a expressão $(2\pi)^{2n}$. Por fim, terminamos com a fórmula:
            <p>$$\zeta(2n) = (-1)^{n+1} \frac{B_{2n}(2\pi )^{2n}}{2(2n)!}$$
            <p>Agora com alguns valores de $B_n$:
            <p>$$B_0 = 1, B_1 = \frac{1}{2}, B_2 = \frac{1}{6}, B_4 = -\frac{1}{30}, B_6 = \frac{1}{42}, B_8 = -\frac{1}{30}$$
            <p>Podemos calcular valores para a função zeta:
            <p>$$
            \begin{aligned}
            \zeta(2\cdot 1)  &= \sum_{n=1}^\infty \frac{1}{n^2} = 1 + \frac{1}{2^2} + \frac{1}{3^2} + \frac{1}{4^2} + ... = (-1)^{1+1} \frac{B_{2\cdot 1}(2\pi )^{2\cdot 1}}{2(2\cdot 1)!} = \frac{\pi^2}{6}\\
            \zeta(2\cdot 2)  &= \sum_{n=1}^\infty \frac{1}{n^4} = 1 + \frac{1}{2^4} + \frac{1}{3^4} + \frac{1}{4^4} + ... = (-1)^{2+1} \frac{B_{2\cdot 2}(2\pi )^{2\cdot 2}}{2(2\cdot 2)!} = \frac{\pi^4}{90}\\
            \zeta(2\cdot 3)  &= \sum_{n=1}^\infty \frac{1}{n^6} = 1 + \frac{1}{2^6} + \frac{1}{3^6} + \frac{1}{4^6} + ... = (-1)^{3+1} \frac{B_{2\cdot 3}(2\pi )^{2\cdot 3}}{2(2\cdot 3)!} = \frac{\pi^6}{945}\\
            \zeta(2\cdot 4)  &= \sum_{n=1}^\infty \frac{1}{n^8} = 1 + \frac{1}{2^8} + \frac{1}{3^8} + \frac{1}{4^8} + ... = (-1)^{4+1} \frac{B_{2\cdot 4}(2\pi )^{2\cdot 4}}{2(2\cdot 4)!} = \frac{\pi^8}{9450}
                \end{aligned}$$
            <p><h6>*Este artigo está em construção</h6>
</div>