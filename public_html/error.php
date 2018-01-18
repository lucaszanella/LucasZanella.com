<?php 
echo '<div id=\'error\'>';
if ($language=='en') {
    echo 'Critical error! For some reason, the page you tried to access couldn\'t be loaded.';
}
if ($language=='pt') {
    echo 'Erro crítico! Por algum motivo, a página que você está tentando acessar não foi incluída.';
}
echo '</div>'
?>