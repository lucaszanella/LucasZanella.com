<div align='justify'>
<h1>Números de Bernoulli e números figurados</h1>
    <p>Os números de Bernoulli aparecem em diversas séries infinitas, bem como outras partes da matemática. Tratar sobre eles neste artigo, sem tratar dos números figurados, seria um crime. A relação entre os dois mostra o poder da conjectura na matemática, e também sugere que muitas descobertas importantes começaram geometricamente, mesmo que por intuição. Portanto, o começo do artigo tratará os números figurados e posteriormente os conectará com os números de Bernoulli.</p>
    <h2>Números triangulares (o primeiro tipo de número figurado)</h2>
    <p>Ficará evidente para você, que estes números estudados milenarmente por diversas civilizações, recebem este nome por poderem ser facilmente visualizados através de figuras geométricas que seguem um determinado padrão. Os números figurados de primeira ordem, se referem à soma dos inteiros até um certo $n$. Em respeito aos gregos, essa parte do artigo será tratada geometricamente.</p>
    <p><div align='center'><img src="http://lucaszanella.com/images/nth_triangular.png"></div></p>
    <p>O n-ésimo número triangular é a n-ésima figura da sequência. Ou melhor, é a quantidade de quadrados da n-ésima figura. Perceba que isso nada mais é que o valor da soma $1 + 2 + 3 + \cdots + n$.</p>
    <p>Talvez a forma mais fácil de encontrar uma fórmula pra essa soma, seja com a observação geométrica abaixo:</p>
    <p><div align='center'><img src="http://lucaszanella.com/images/triangular.png"></div></p>
    <p>Desejamos a soma $1 + 2 + 3 + 4 +5$. Ao copiar a quantidade de quadrados e juntá-los de modo a formar um retângulo, basta verificar que a quantidade de quadrados na nova figura é $5\cdot 6 = 30$. Desses $30$, metade são a soma desejada. Logo $1+2+3+4+5 = 15$. Fica fácil notar que o padrão segue para outras quantidades, de modo que para encontrar $1+\cdots + n$, basta dobrar a figura que representa essa soma, montar um retângulo de lado $n$ e outro lado $n+1$. Assim, a quantidade total de quadrados na nova figura é $n(n+1)$. A soma $1+\cdots+ n$ é metade disso. Então $1+\cdots +n = \frac{n(n+1)}{2}$.</p>
    <p>Tais números são conhecidos como números figurados de primeira ordem, ou números triangulares, por razões óbvias. Eles formam a sequência:</p>
    $$1, 3, 6, 10, 15, 21, 28, 36, 45, \cdots$$
    <h2>Números tetraédricos (números figurados de segunda ordem)</h2>
    <p>Como o próprio nome sugere, os números piramidais podem ser visualizados na construção de um tetraedro. Cada camada é formada por esferas arranjadas de modo a formar um triângulo equilátero. Na imagem abaixo podemos visualizar melhor:</p>
    <p><div align='center'><img src="http://lucaszanella.com/images/tetraedro.png"></div></p>
    <p>Começamos com uma base de lado $5$. A segunda camada é formada por um triângulo de lado $4$. E assim segue até chegarmos à camada do topo, com apenas uma esfera. Como vimos antes no exemplo dos números triangulares, percebe-se que a quantidade de esferas de cada camada (cada triângulo) é um número triangular. Então, a n-ésima camada tem $T(n)$, onde $T(n)$ é o n-ésimo número triangular (por exemplo, a segunda camada tem $T(2) = 3$ esferas).</p>
    <p>Vejamos como ficaria a sequência:</p>
    <p>$$\begin{array}{lcr}1 &=& 1\\3 &=& 1 + 2\\6 &=& 1 + 2 + 3\\10 &=& 1 + 2 + 3 + 4\\ 15 &=& 1 + 2 + 3 + 4 + 5\\ 21 & =& 1 + 2 + 3 + 4 + 5 + 6 \\ &\cdots& \end{array}$$</p>
    <h2>Números de Bernoulli</h2>
    <p><b>Jakob Bernoulli</b> (1655-1705) foi o primeiro matemático a descobrir os famosos números hoje chamados de <b>"Números de Bernoulli"</b>. Para entender sua descoberta, vamos definir a <b>soma dos inteiros</b> até $n$, cada um elevado a uma certa potência $a$:</p>
    <p>$$S_a(n) = 1^a + 2^a + 3^a + 4^a + 5^a + 6^a + 7^a + \cdots + n^a$$</p>
    <p>Por exemplo: $S_2(3) = 1^2 + 2^2 + 3^2$</p>
    <p>Os famosos <b>Números de Bernoulli</b> aparecem nas fórmulas que permitem calcular estas somas. Por exemplo: não é preciso somar manualmente a seguinte expressão: $1 + 2 + 3 + 4 + 5 + 6 + \cdots + n$ pois existe uma fórmula para isso:</p>
    <p>$$1 + 2 + 3 + 4 + 5 + 6 + \cdots + n = \frac{n^2}{2} + \frac{n}{2} $$</p>
    <p>Ao investigar a fórmula para os casos de potências maiores, como $S_2, S_3, S_4 \cdots$, percebemos um padrão nos coeficientes, que serão definidos como os famosos números.</p>
    <p>Abaixo, a fórmula para as potências $1,2,3$ e $4$:</p>
    $$\begin{align}
    S_1(n) & = \frac{n^2}{2} + \frac{n}{2}  \\
    S_2(n) & = \frac{n^3}{3} + \frac{n^2}{2} + \frac{n}{6} \\
    S_3(n) & = \frac{n^4}{4} + \frac{n^3}{2} + \frac{n^2}{4} \\
    S_4(n) & = \frac{n^5}{5} + \frac{n^4}{2} + \frac{n^3}{3} - \frac{n}{30}
    \end{align}$$
    <p>Cada polinômio encerra com seu último termo com o coeficiente de $n$ sendo um <b>número de Bernoulli</b>. Na fórmula da soma $S_1$, possuímos o último termo como o número de Bernoulli $B_1 = \frac{1}{2}$, na fórmula para soma dos quadrados, possuímos o segundo número de Bernoulli: $B_2 = -\frac{1}{6}$ e assim em diante (em breve mostrarei o motivo deste coeficiente ser negativo). <b>Obs:</b> nos polinômios a partir de $S_3$, todos as fórmulas de soma $S_u$, sendo $u$ ímpar, possuem último termo sendo o número de bernoulli $B_u$ = 0.
    <p>Mas antes de demonstrar o padrão existente, vamos aprender um método para encontrar estas fórmulas.
    <p><h2><span id='soma1'>Soma dos inteiros ($S_1(n))$</span></h2>
    <p>A soma $S_1(n)$ pode ser obtida facilmente notando um padrão. Para isso, vamos representar a mesma soma de duas formas:</p>
    <p>$$ \begin{matrix} S_1(n) & = & 1^1 & + & 2^1 & + & 3^1 & + & 4^1 & + & \cdots & + & n^1 \\ S_1(n)&  = & n^1 & + & (n-1)^1 & + & (n-2)^1 & + & (n-3)^1 & + & \cdots & + & (1)^1  \end{matrix}$$</p>
    <p>Somando os termos de cada <b>coluna</b>, obtemos:</p>
    <p>$$2S_1(n) = \underbrace{(n+1) + (n+1) + (n+1) + \cdots +(n+1)}_{\mbox{n vezes}}$$</p>
    <p>Logo:</p>
    <p>$$2S_1(n) = n(n+1) \implies S_1(n) = \frac{n(n+1)}{2}$$</p>
    <p>Temos nossa primeira fórmula:</p>
    <p>$$S_1(n) = 1^1 + 2^1 + 3^1 + 4^1 + ... + n^1 = \frac{n(n+1)}{2}$$
    <p>Porém Bernoulli só foi capaz de notar o padrão observando as fórmulas em seu modo mais explícito. Expandindo a expressão, temos:
    <p>$$\frac{n(n+1)}{2} = \frac{n^2 + n}{2} = \frac{n^2}{2} + \frac{n}{2}$$
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
    <p>Observe abaixo a publicação original do trabalho de Bernoulli:</p>
    <p align='center'><img src='http://lucaszanella.com/img/JakobBernoulliSummaePotestatum.png'>
    <p>A imagem e as análises abaixo, foram baseadas neste <a href='http://en.wikipedia.org/wiki/Bernoulli_number#Reconstruction_of_.22Summae_Potestatum.22' target='_blank'>artigo</a> da wikipedia. 
    <p>Uma observação importante, é de que o símbolo $\int$ foi usado para representar <b>soma</b>, e não integral como usamos hoje. Então, por exemplo $\int n^3 = 1^3 + 2^3 + 3^3 + \cdots + n^3$
    <p>Jacob denotou os coeficientes de Bernoulli como <b>A, B, C, [...]</b>. Vale lembrar que não foi ele quem deu seu nome a estes coeficientes. Então, na época, foram representados simplesmente como coeficientes úteis para encontrar estas fórmulas.		
    <p><h2>Reconstrução moderna do artigo de Bernoulli:</h2></p>  
    <p>Ao reconstruir o artigo com notação moderna, onde $S_a(n) = \sum_{k=1}^n  k^a$ teríamos:</p>
    $$\begin{matrix}
    \sum_{k=1}^n  k^1 = &\frac{n^2}{2} &+ &\frac{n^1}{2}  \\
    \sum_{k=1}^n  k^2 = &\frac{n^3}{3} &+ &\frac{n^2}{2} &+ &\frac{n^1}{6} \\
    \sum_{k=1}^n  k^3 = &\frac{n^4}{4} &+ &\frac{n^3}{2} &+ &\frac{n^2}{4} \\
    \sum_{k=1}^n  k^4 = &\frac{n^5}{5} &+ &\frac{n^4}{2} &+ &\frac{n^3}{3} &- &\frac{n^1}{30} \\
    \sum_{k=1}^n  k^5 = &\frac{n^6}{6} &+ &\frac{n^5}{2} &+ &\frac{5n^4}{12} &- &\frac{n^2}{12} \\
    \sum_{k=1}^n  k^6 = &\frac{n^7}{7} &+ &\frac{n^6}{2} &+ &\frac{n^5}{2} &- &\frac{n^3}{6} &+ &\frac{n^1}{42} \\
    \sum_{k=1}^n  k^7 = &\frac{n^8}{8} &+ &\frac{n^7}{2} &+ &\frac{7n^6}{12} &- &\frac{7n^4}{24} &+ &\frac{n^2}{12} \\
    \sum_{k=1}^n  k^8 = &\frac{n^9}{9} &+ &\frac{n^8}{2} &+ &\frac{2n^7}{3} &- &\frac{7n^5}{15} &+ &\frac{2n^3}{9} &- &\frac{n^1}{30} \\
    \sum_{k=1}^n  k^9 = &\frac{n^{10}}{10} &+ &\frac{n^9}{2} &+ &\frac{3n^8}{4} &- &\frac{7n^6}{10} &+ &\frac{n^4}{2} &- &\frac{n^2}{12} \\
    \sum_{k=1}^n k^{10} = &\frac{n^{11}}{11} &+ &\frac{n^{10}}{2} &+ &\frac{5n^9}{6} &- &\frac{n^7}{1} &+ &\frac{n^5}{1} &- &\frac{n^3}{2} &+ \frac{5n}{66}  
    \end{matrix}$$
    <p>O primeiro padrão facilmente observável está nas primeira e segunda colunas (após o sinal de igual):</p>
    <p>$$ \sum_{k=1}^n  k^c = \frac{n^{c+1}}{c+1} + \frac{n^c}{2} + \cdots $$</p>
    <p>Para a terceira coluna, ao fatorar $\frac{1}{6}$, obtemos a progressão $1, \frac{3}{2}, 2, \frac{5}{2}, 3 \cdots$ que são $\frac{1}{2}$ da sequência $2, 3,4,5,6\cdots$ A quarta coluna consiste apenas de zeros (explicarei o motivo em breve). Ao fatorar a quinta coluna por $1\frac{1}{30}$, obtemos a progressão $1, \frac{5}{2}, 5, \frac{35}{4}, 14, \cdots$ Tal sequência é igual a $\frac{1}{4}$ da quarta coluna na tabela de <b>números figurados</b>.</p>
    <h2>Definição de Euler</h2>
    <p>A definição formal dos números de Bernoulli vem da seguinte função geradora encontrada por Euler. Ao que parece, ele definiu os famosos números sem saber que Bernoulli já os havia definido de outra maneira há certo tempo.
    $$\frac{t}{e^t-1}=\sum_{n=0}^{\infty} B_n \frac{t^n}{n!} \tag{3}$$
    <p>Expandindo os dois lados da equação:
    <p>$$1 - \frac{t}{2} + \frac{t^2}{12} - \frac{t^4}{720} + \cdots = B_0 \frac{t^0}{0!} + B_1 \frac{t^1}{1!} + B_2 \frac{t^2}{2!} + B_3 \frac{t^3}{3!} + B_4 \frac{t^4}{4!} + \cdots$$
    <p>Igualando os coeficientes de $t^n$ das duas expansões, temos que:
    <p>$$B_0 \frac{t^0}{0!} = 1\frac{t^0}{0!}$$
    <p>$$B_1 \frac{t^1}{1!} = -\frac{t^1}{2}$$
    <p>$$B_2 \frac{t^2}{2!} = \frac{t^2}{12}$$
    <p>$$B_3 \frac{t^3}{3!} = 0 t^3$$
    <p>$$.\\.\\.$$
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
    <p>É possível simplificar o somatório $\left(\sum_{n=1}^{\infty}\frac{t^{n-1}}{n!}\right)$ para que comece em $n=0$, assim temos:</p>
    <p>$$1 = \left(\sum_{n=0}^{\infty} B_n \frac{t^n}{n!}\right) \left(\sum_{n=0}^{\infty}\frac{t^{n}}{(n+1)!}\right)$$
    <h2>Produto de Cauchy</h2>
    <p>O produto de Cauchy permite escrever o produto de dois somatórios infinitos na forma de um novo somatório infinito. Suponha:</p>
    <p>$$\begin{align}\left(\sum_{n=0}^{\infty} a_n z^n\right) \left(\sum_{n=0}^{\infty} b_n z^n\right) &= (a_0 + a_1z + a_2z^2+\cdots)(b_0 + b_1z + b_2z^2+\cdots)\\
    &= a_0b_0 + (a_0b_1 + a_1b_0)z + (a_0b_2 + a_1b_1 + a_2b_0)z^2 + \cdots    
    \end{align}$$</p>
    <h2>Série para a função cotangente</h2>
    Vamos derivar um método
    <h6>*Este artigo está em construção</h6>
</div>