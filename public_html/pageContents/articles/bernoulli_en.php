<div align='justify'>
<h2>Números de Bernoulli</h2>
		<p>Os números de Bernoulli são coeficientes de um polinômio, que permitem a soma de números elevados à uma certa potência, no modo:
		<p>$$1^s + 2^s + 3^s + 4^s + 5^s + 6^s + 7^s + ... + n^s$$
		<p>Jacob Bernoulli (1655-1705) foi o matemático que, analisando cada fórmula para soma de números elevados a uma certa potência, percebeu o padrão, descobrindo os coeficientes chamados números de Bernoulli.
		<p> Chamamos de $S_1$ a fórmula para soma da sequência elevada à potência $1$. Generalizando, $S_u$ é a soma da sequência elevada à potência $u$ (usa-se asterisco pois no decorrer do artigo, apresento a forma sem asterisco, um pouco modificada).
		<p> Veja abaixo algumas das fórmulas de soma:
		$$\begin{align}
		S_1(n) & = \frac{n^2}{2} + \frac{n}{2}  \\
		S_2(n) & = \frac{n^3}{3} + \frac{n^2}{2} + \frac{n}{6} \\
		S_3(n) & = \frac{n^4}{4} + \frac{n^3}{2} + \frac{n^2}{4} \\
		S_4(n) & = \frac{n^5}{5} + \frac{n^4}{2} + \frac{n^3}{3} - \frac{n}{30}
		\end{align}$$
		<p><h5>*Onde n é o número máximo para o qual a soma alcança. Exemplo: $S_2(7) = 1^2 + 2^2 + 3^2 + 4^2 + 5^2 + 6^2 + 7^2$</h5>
		<p>Cada polinômio encerra com seu último termo com o coeficiente de $n$ sendo um <b>número de Bernoulli</b>. Na fórmula da soma $S_1$, possuímos o último termo como o número de Bernoulli $B_1 = \frac{1}{2}$, na fórmula para soma dos quadrados, possuímos o segundo número de Bernoulli: $B_2 = -\frac{1}{6}$ e assim em diante (em breve mostrarei o motivo deste coeficiente ser negativo). <b>Obs:</b> nos polinômios a partir de $S_3$, todos as fórmulas de soma $S_u$, sendo $u$ ímpar, possuem último termo sendo o número de bernoulli $B_u$ = 0.
		<p>Mas antes de demonstrar o padrão existente, vamos aprender um método para encontrar estas fórmulas.
		<p><h2><span id='soma1'>Soma para potência 1</span></h2>
		Dizem que, no século 18, um menino, ainda com 10 anos, mas que viria a ser conhecido como o grande matemático Carl Friedrich Gauss, demonstrou grande talento para sua idade, descobrindo sozinho uma fórmula simples para somar uma sequência de inteiros. Quando requisitado por seu professor que realizasse todo o processo manualmente, ele encontrou o seguinte método:
		<p>$$S_1(10) = 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10$$
		<p>E escrevendo-a ao contrário:
		<p>$$S_1(10) = 10 + 9 + 8 + 7 + 6 + 5 + 4 + 3 + 2 + 1$$
		<p><h5>*note que as duas igualdades correspondem a uma soma de mesmo valor, então a variável $S_1(10)$ é válida para os dois.</h5>
		<p> Basicamente, se somarmos cada termo da primeira equação, com seu respectivo termo na segunda, observamos a seguinte equação:
		<p>$$S_1(10) + S_1(10) = (10+1) + (2+9) + (3+8) + (4+7) + (5+6)+ (6+5) + (7+4) + (8+3) + (9+2) + (10+1)$$
		<p> Ou seja:
		<p>$$2 S_1(10) = 11 + 11 + 11 + 11 + 11 + 11 + 11 + 11 + 11 + 11$$
		<p> Note que o dobro da soma (ou seja, $2S_1(10)$) é igual a <b>10 vezes</b> o valor $11$. Ou seja: basta somar o primeiro termo com o último termo $(1+10)$ e multiplicar pelo valor máximo que foi escolhido para a soma $(10)$. Isto equivalerá a $2S_1(10)$, ou seja: basta dividirmos os dois lados por $2$, que vamos obter o valor de $S_1(10)$:
		<p>$$S_1(10) = \frac{11\cdot 10}{2}$$
		<p>$$S_1(10) = 55$$
		<p> Generalizando:
		<p>$$S_1(n) = 1^1 + 2^1 + 3^1 + 4^1 + ... + n^1 = \frac{(n+1)n}{2}$$
		<p><h5>*basicamente: ((último termo + primeiro termo) vezes quantidade de termos) sobre 2 </h5>
		<p>Porém Bernoulli só foi capaz de notar o padrão observando as fórmulas em seu modo mais explícito. Então vamos multiplicar os termos, desenvolvendo o fator $(n+1)n$ e distribuindo cada termo com o denominador $2$:
		<p>$$\frac{(n+1)n}{2} = \frac{n^2 + n}{2} = \frac{n^2}{2} + \frac{n}{2}$$
		<p> Infelizmente, o método acima só nos permite encontrar a fórmula geral da soma para sequências de potências $1$. Felizmente, há outro método, que nos permite encontrar a fórmula para potências maiores de inteiros que $1$.
		<p><h2>Soma telescópica</h2>
		<p>Neste exemplo, vou demonstrar o método da soma telescópica, que nos permite encontrar valores para somas elevadas a potências de inteiros maiores que 1. 
		<p>Uma soma telescópica consiste num truque em que uma mesma expressão pode ser escrita de outra forma, adicionando termos externos à equação, mas os subtraindo nela mesma.
		<p> Tome como exemplo a soma $a + b$. Ao adicionarmos, por exemplo, $c$ e depois o subtrairmos, continuaremos com a mesma soma, observe:
		<p>$$a + b = a + c - c + b$$
		<p> Embora pareça desnecessário, e você se assuste: "ok, mas os termos $c$ e $-c$ se cancelam, não há necessidade de escrevê-los na equação", estará correto. Eles realmente não são necessários para obtermos a soma $a + b$. Mas calma, você verá neste artigo que este tipo de truque pode ser bem útil.
		<p><h2>Obtendo $S_2(n)$ através de soma telescópica</h2>
		<p>Neste caso, vamos encontrar a fórmula para a soma $S_2(n)$ 
		<p> Vamos começar com $n^3$ (você verá em breve que para achar o valor de $S_2(n)$, deve-se realizar a soma telescópica com o valor de $n$ elevado a uma potência 1 vez maior.
		<p>Podemos pensar numa soma telescópica para $n^3$, onde, de qualquer modo, obteremos $n^3$ no final:
		<p>$$n^3  \color{Red}{-(n-1)^3 + (n-1)^3} \color{Green}{-(n-2)^3 + (n-2)^3} \color{Blue}{-(n-3)^3 + (n-3)^3} -... \color{Brown}{-3^3 + 3^3} \color{Orange}{-2^3 + 2^3} \color{Purple}{-1^3 + 1^3}$$
		<p>Agora, com um pequeno truque, vamos agrupar os termos novamente, dois a dois (usarei cores diferentes para não confundir):
		<p>$$\color{Brown}{n^3  -(n-1)^3} + \color{Orange}{(n-1)^3 -(n-2)^3} + \color{Purple}{(n-2)^3 -(n-3)^3} + ... + \color{Green}{3^3 - 2^3} + \color{Red}{2^3 - 1^3} + \color{Blue}{1^3 - 0^3}$$
		<p>Com este novo arranjo, podemos calcular o valor das expressões de mesma cor, resultando em:
		<p>$$\color{Brown}{n^3  -(n-1)^3} = 3n^2 -3n +1$$
		<p>Para os outros valores, é claro que simplesmente poderíamos calcular $\color{Orange}{(n-1)^3 -(n-2)^3}$ em seu modo explícito e remover os termos semelhantes, resultando em $3n^2 -9n + 7$. Mas este método é exaustivo e não produz um resultado em que podemos observar alguma semelhança com a equação anterior. Então, para os próximos cálculos, ao invés de usar este método, simplesmente tomaremos a equação $\color{Green}{n}^3 - (\color{Green}{n-1})^3 = 3\color{Green}{n}^2 -3\color{Green}{n} +1$ e substituíremos $\color{Green}{n}$ por $\color{Blue}{n-1}$, observe:
		$$(\color{Blue}{n-1})^3 - ((\color{Blue}{n-1})-1)^3 = 3(\color{Blue}{n-1})^2 -3(\color{Blue}{n-1}) +1$$
		<p>Continuamos com uma igualdade válida, e agora temos o nosso mesmo termo no lado esquerdo, e seu 'resultado útil' no lado direito: 
		<p>$$\color{Orange}{(n-1)^3 - (n-2)^3} = 3(n-1)^2 -3(n-1) +1$$
		<p>Mais uma vez substituindo $n$ na equação acima, por $n-1$:
		<p>$$\color{Purple}{(n-2)^3 - (n-3)^3} = 3(n-2)^2 -3(n-2) +1$$
		<p>Generalizando, até chegarmos nos últimos termos:
		<p>$$\color{Green}{3^3 -2^3} = 3\cdot 3^2 -3\cdot 3 + 1$$
		<p>$$\color{Red}{2^3 -1^3} = 3\cdot 2^2 -3\cdot 2 + 1$$
		<p>$$\color{Blue}{1^3 -0^3} = 3\cdot 1^2 -3\cdot1 + 1$$
		<p> Agrupando todos os nossos termos coloridos da esquerda em uma coluna, e os respectivos cálculos realizados acima, na coluna da direita, podemos obter a seguinte tabela, onde a soma de cada lado está mostrada na linha abaixo:
		<p align="center"><img src="http://lucaszanella.com/img/telescope.png">
		<p>Na coluna da esquerda, temos nossa série 'telescopada', ou seja, já sabemos que a soma equivale a $n^3$. 
		<p>Com uma rápida observação percebe-se que se somarmos todos os termos da primeira coluna da parte <b>direita</b> da equação: $3n^2 + 3(n-1)^2 + 3(n-2)^2 + 3\cdot3^2 + 3\cdot2^2 + 3\cdot1^2$ equivale a colocarmos o termo $3$ em evidência e realizarmos uma simples soma dos quadrados dos inteiros, de $n$ a $1$, ou seja: $3(1^2 + 2^2 +3^2 + ... + (n-2)^2 + (n-1)^2 + n^2)$(observe que estamos tentando chegar exatamente em uma fórmula para isto, então vou chamar de $3S_2(n)$). Já na segunda coluna, observamos a mesma coisa, porém com uma soma de potência $1$, com o termo $3$ em evidência, então $-3S_1(n)$. E na terceira coluna, temos apenas uma soma do número $1$, $n$ vezes.
		<p> Terminamos com a seguinte igualdade: $n^3 = 3S_2(n) -3S_1(n) + n$
		<p> Perceba que chegamos a uma fórmula que envolve $S_2(n)$ e $S_1(n)$. Como já possuímos $S_1(n)$, para achar $S_2(n)$ isolá-lo na equação e substituir $S_1(n)$ por sua fórmula:
		<p> $$S_2(n) = \frac{n^3 + 3S_1(n) -n}{3}$$
		<p>Onde $S_1(n) = \frac{n(n+1)}{2}$, então:
		<p>$$S_2(n) = \frac{n^3 + 3\frac{n(n+1)}{2} -n}{3}$$
		<p>Simplificando:
		<p>$$S_2(n) = \frac{n^3}{3} + 3\frac{n(n+1)}{6} - \frac{n}{3}$$
		<p>Deixando no modo mais explícito (novamente, para posterior comparação, assim como feito por Bernoulli):
		<p>$$S_2(n) = \frac{n^3}{3} + \frac{n^2}{2} +\frac{n}{6}$$
		
		
		<p>Bernoulli também não calculou todas estas igualdades, pois na sua época já haviam calculado (através de 'força bruta') as fórmulas para alguns valores de potência, facilitando e permitindo assim que ele pudesse se concentrar em observar os padrões. 
		<p><h2>Outro método para encontrar a fórmula de soma de potências</h2>
		<p>Espaço reservado para o método de encontrar as fórmulas usando coeficiente binomial. Em construção.
		<p><h2>O trabalho de Bernoulli</h2>
		Observe abaixo a publicação original do trabalho de Bernoulli:
		<p align='center'><img src='http://lucaszanella.com/img/JakobBernoulliSummaePotestatum.png'>
		<p>Esta foto e as análises abaixo, foram baseadas neste <a href='http://en.wikipedia.org/wiki/Bernoulli_number#Reconstruction_of_.22Summae_Potestatum.22' target='_blank'>artigo</a> da wikipedia. 
		<p>Primeiramente, o símbolo $\int$ (introduzido por Leibniz) era usado para representar <b>soma</b> (e não integral como usamos hoje), e o $n$ é o valor do termo máximo da soma, como já mencionei no início do artigo.
		<p>Jacob denotou os coeficientes de Bernoulli como 'A', 'B', 'C', [...]. Vale lembrar que não foi ele quem deu seu nome a estes coeficientes. Então, na época, foram representados simplesmente como coeficientes úteis para encontrar estas fórmulas.		
		<p>Vamos analisar a quantidade de coeficientes nos polinômios.  
		$$\begin{align}
		S_1(n) & = \frac{n^2}{2} + \frac{n}{2}  \\
		S_2(n) & = \frac{n^3}{3} + \frac{n^2}{2} + \frac{n}{6} \\
		S_3(n) & = \frac{n^4}{4} + \frac{n^3}{2} + \frac{n^2}{4} \\
		S_4(n) & = \frac{n^5}{5} + \frac{n^4}{2} + \frac{n^3}{3} - \frac{n}{30} \\
		S_5(n) & = \frac{n^6}{6} + \frac{n^5}{2} + \frac{5n^4}{12} - \frac{n^2}{12} \\
		S_6(n) & = \frac{n^7}{7} + \frac{n^6}{2} + \frac{n^5}{2} - \frac{n^3}{6} + \frac{n}{42} \\

		\end{align}$$
		<p>A partir de $S_3$, quando o expoente da soma é <b>par</b>, os termos de índice maior que $3$, com $n^u$, sendo $u$ par, não existem.
		<br>A partir de $S_3$, quando o expoente da soma é <b>ímpar</b>, os termos de índice maior que $3$, com $n^u$, sendo $u$ ímpar, não existem.
		<br><h5>*Entenda índice como sendo o a posição do termo no polinômio. Então o termo $\frac{1}{2}n^2$ no polinômio $\frac{1}{2}n^2 + \frac{1}{2}n$ tem índice $1$. O termo $\frac{1}{2}n$, no mesmo polinômio, tem índice $2$, e assim em diante.</h5>
		<p>As regras abaixo lidam com os coeficientes de índice maior que 2. Elas só não são válidas para o último coeficiente de cada polinômio, pois cada um desses coeficientes, é um número de bernoulli. Você verá a seguir, o motivo.
		<p>É fácil notar que o primeiro coeficiente do polinômio $S_u$ é sempre $\frac{n^{(u+1)}}{u+1}$. Assim, por exemplo:
		<p>$$S_2(n) = \frac{1}{3}n^3 + ...$$ $$S_3(n) = \frac{1}{4}n^4 + ... $$ $$ S_5(n) = \frac{1}{5}n^5 + ...$$
		<p>O segundo termo, é sempre $\frac{1}{2}n^{u}$
		<p>O terceiro termo do polinômio $S_u(n)$, quando existe, é da forma $\frac{u}{12}n^{u-1}$
		<p>Sabemos que a soma de cada fórmula $S_u(n-1)$ deve ser igual a $0$. E conseguimos observar que, assim como num triângulo de Pascal, há a formação de uma 'pirâmide'. Os coeficientes antes de cada termo final (número de Bernoulli), são, na verdade, os números de Bernoulli de índice antecessor, porém com uma combinatória envolvida. Isso foi percebido <b>empiricamente</b> por Bernoulli, e publicado no livro "Ars Conjectandi" em 1713. Abaixo faço uma análise do seu artigo.
		<h2>Definição de Euler</h2>
		<p>A definição formal dos números de Bernoulli vem da seguinte função geradora encontrada por Euler:
		$$\frac{t}{e^t-1}=\sum_{n=0}^{\infty} B_n \frac{t^n}{n!} \tag{3}$$
		<p>Expandindo os dois lados da equação:
		<p>$$1 - \frac{t}{2} + \frac{t^2}{12} - \frac{t^4}{720} + ... = B_0 \frac{t^0}{0!} + B_1 \frac{t^1}{1!} + B_2 \frac{t^2}{2!} + B_3 \frac{t^3}{3!} + B_4 \frac{t^4}{4!} + ...$$
		<p>Igualando os coeficientes de $t^n$ das duas expansões, temos que:
		<p>$$B_0 \frac{t^0}{0!} = 1\frac{t^0}{0!}$$
		<p>$$B_1 \frac{t^1}{1!} = -\frac{t^1}{2}$$
		<p>$$B_2 \frac{t^2}{2!} = \frac{t^2}{12}$$
		<p>$$B_3 \frac{t^3}{3!} = 0 t^3$$
		<p>...
		<p>Perceba que para $t^u$ com valores de $u$ maiores que 2, e ímpares, usamos o coeficiente como sendo 0, porque não existe termo $t^u$ com $u$ sendo ímpar e maior que 2, na expansão de $\frac{t}{e^t-1}$, portanto todos os números de Bernoulli com índice ímpar e maior que 2, valem $0$.
		<p>Resolvendo para cada número de Bernoulli, obtemos:
		<p>$$B_0 = 1, B_1 = -\frac{1}{2}, B_2 = \frac{1}{6}, B_3 = 0, B_4 = -\frac{1}{30}, ...$$
		<h2>Derivando uma fórmula recursiva para encontrar números de Bernoulli</h2>
		<p>Voltando com a equação $(3)$:
		$$\frac{t}{e^t-1}=\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}$$
		<p>Escrevendo o denominador da parte esquerda da equação na notação compacta, ficamos com:
		$$\frac{t}{\sum_{n=1}^{\infty}\frac{t^n}{n!}}=\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}$$
		<p>Resolvendo para $t$:
		<p>$$t = \left(\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}\right) \left(\sum_{n=1}^{\infty}\frac{t^n}{n!}\right)$$
		<p>Fatorando $t$ no segundo termo do lado direito da equação:
		<p>$$t = \left(\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}\right) t\left(\sum_{n=1}^{\infty}\frac{t^{n-1}}{n!}\right)$$
		<p>Agora dividimos os dois lados por $t$:
		<p>$$1 = \left(\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}\right) \left(\sum_{n=1}^{\infty}\frac{t^{n-1}}{n!}\right)$$

		
		<h2>Série para a função cotangente</h2>
		Vamos derivar um método
		<h6>*Este artigo está em construção</h6>
</div>