<div align="justify">
    <h2>Prevenção contra ataques XSS</h2>
    <p>Um ataque XSS consiste em inserir código javascript indesejado no corpo do documento. Geralmente, sites exibem em suas páginas, conteúdo digitado pelo usuário. Se este conteúdo não for filtrado corretamente, há brechas para a inserção de código malicioso. O principal objetivo de um ataque XSS, geralmente, é roubar os cookies do navegador da vítima, e assim ganhar controle sobre sua conta.</p>
    <h2>Entendendo como o PHP funciona</h2>
    <p>Vamos começar com um script simples que exibe na tela o que o usuário enviou pela URL. Suponha que você tem um site chamado <b>site.com</b>. A página <b>index.php</b> será:</p>
    <pre class="prettyprint">
        &lt;html>
            &lt;body>
                &lt;?php
                    echo "Seja bem vindo, ".$_GET["nome"];
                ?>
            &lt;/body>
        &lt;/html>
    </pre>
    <p>Ao acessar o link <b>http://site.com/index.php?nome=Lucas</b>, o servidor receberá o nome "Lucas", o PHP processará a página, e enviará o código HTML de volta para você, do seguinte modo:</p>
    <pre class="prettyprint">
        &lt;html>
            &lt;body>
                Seja bem vindo, Lucas
            &lt;/body>
        &lt;/html>
    </pre>
    <p>Como o script da página index.php simplesmente confiou no texto fornecido pelo usuário, o site apresenta uma brecha: podemos inserir um código malicioso no lugar do nome "Lucas". Por exemplo, ao requisitar a página <b>http://site.com/index.php?nome=&lt;script>alert('XSS')&lt;/script></b>, o PHP processaria o texto, e enviaria para seu navegador o seguinte código HTML:
    <pre class="prettyprint">
        &lt;html>
            &lt;body>
                Seja bem vindo, &lt;script>alert('XSS')&lt;/script>
            &lt;/body>
        &lt;/html>
    </pre>
    <p>Conseguimos inserir a tag <b>&lt;script></b> no código fonte do nosso arquivo. Ao acessar a página, o usuário veria a mensagem "XSS" como um alerta do navegador:</p>
    <div align="center"><img src="http://lucaszanella.com/img/xss_alert_box.png"></div>
    <p>Em geral, o código <b>&lt;script>alert('XSS')&lt;/script></b> é usado para testar vulnerabilidades XSS em sites. Alguns, no entando, podem rodar algum tipo de filtro para impedir a tag &lt;script>, mas veremos neste artigo que isso não é suficiente!</p>
    <h2>E se filtrarmos a tag &lt;script>?</h2>
    <p>Alguns sites podem simplesmente tentar filtrar a tag <b>&lt;script></b>, numa tentativa de impedir que código javascript seja inserido na página. Se você conhece bem javascript e HTML, já sabe que tal prática, sozinha, é ridícula. Mas acredite, eu já descobri uma loja on-line com mais de milhões de acessos por dia usando exatamente essa técnica (é claro que os avisei).</p> 
    <p>Escrever um filtro que impede a palavra <b>&lt;script></b> pode ser facilmente enganado injetando um código que envolve letras maiúsculas alternadas com minúsculas<b>&lt;sCriPt></b>. Além disso, há diversas outras maneiras de injetar código javascript sem o uso de tags HTML, portanto mesmo filtrando eficientemente a tag <b>script</b>, não estamos seguros.</p>
    <h2>Javascript sem tags HTML: onMouseMove = "alert('XSS')"</h2>
    <p>Suponha um site que tenha uma ferramenta de buscas. Geralmente, quando se procura algo na caixa de pesquisas, uma nova página é carregada, e na nova página, sua busca <b>continua escrita</b> dentro da caixa de pesquisas. Vamos ver como este "efeito memória" é implementado, e demonstrar como um ataque poderia ser feito caso o servidor não filtre as informações do usuário.</p>
    <p>Página: <b>index.php</b></p>
    <pre class="prettyprint">
    &lt;html>
        &lt;body>
            &lt;form action="index.php" method="get">
                &lt;input type="text" name="texto" value="&lt;?php echo $_GET["texto"];?>"/>
            &lt;/form>
        &lt;/body>
    &lt;/html>
    </pre>
    <p>De fato, ao abrirmos <b>index.php</b>, digitarmos nossa pesquisa e pressionar <b>enter</b>, o navegador carregará <b>index.php</b> novamente, desta vez enviando nosso texto para o servidor. O script PHP então, irá escrever na caixa de texto, através do atributo <b>value</b>, o que foi digitado na página anterior. Aconteceria exatamente o seguinte:</p>
    <p><div align="left"><img src="http://lucaszanella.com/img/xss_pesquisa.png"></div></p>
    <p>Analisando o código fonte de tal página:</p>
    <p><div align="left"><img src="http://lucaszanella.com/img/xss_pesquisa_codigo_fonte.png"></div></p>
    <p>Perceba o texto "minha pesquisa" selecionado. Qualquer coisa que escrevemos na caixa de texto, é reproduzida no atributo <b>value</b> da tag <b>&lt;input></b>. Podemos, então, colocar um texto de modo estratégio na pesquisa, para que feche o atributo <b>value</b> e abra o atributo <b>onMouseMove.</b></p> Se digitarmos o texto <b>" onMouseMove="alert('XSS')</b> (atenção: digitar exatamente o que está em negrito), vamos fechar o atributo <b>value</b>, e abrir o atributo <b>onMouseMove</b>. Observe como ficaria o código fonte após dar <b>enter</b>:
    <p><div align="left"><img src="http://lucaszanella.com/img/xss_pesquisa_on_mouse_move.png"></div></p>
    Agora transformamos nossa caixa de pesquisas numa bomba javascript esperando para dar <b>alert('XSS')</b> assim que o usuário passar o mouse por cima!
    <h2>Quais os possíveis ataques que minha página pode sofrer?</h2>
    <p>Sendo possível rodar javascript indesejado na sua página, você pode esperar de tudo. Talvez o tipo de site perfeito para ataques XSS seja o de comércio on-line: ao roubar os cookies do usuário, o 'assaltante' pode tomar controle da conta como se estivesse logado nela! E tudo isso sem o usuário suspeitar. Dependendo de quanto javascript você pode inserir, é possível também editar a página por completo, de modo a inserir o conteúdo que você quiser.</p>
    <p>O sistema de login da maioria dos sites funciona através de cookies, que são informações gravadas no seu computador. Quando você faz login num site, seu navegador armazena um cookie chamado "session", contendo um número único que te representa no servidor. O seu navegador, é claro, só informa o cookie do site <b>x</b> para o próprio site <b>x</b>, e mais nenhum. Isso impede que o site <b>y</b> tenha acesso a estes cookies (e de qualquer outro site). Porém, em um ataque XSS, é o próprio site <b>x</b> que está requisitando os cookies.</p>
    
    <h4>*artigo em construção</h4>
</div>