<? 
$id = $_POST['id'];
$saida = file_get_contents($id);
$saida = str_replace("<","&lt;",$saida);
echo "<pre>";
print_r($saida); 
echo "</pre>";

?>