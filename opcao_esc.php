
<?php
  if (empty($opcaoSelecionada)) 
    echo "Nenhuma opção selecionada.";
if(isset($_POST['metodo'])){
    $metodo = $_POST['metodo'];
    
    switch($metodo){
        case 'cartao':
            header("Location: cartao.php");
            break;
        case 'pix':
            header("Location: pix.php");
            break;
        case 'boleto':
            header("Location: boleto.php");
            break;
        default:
            header("Location: metodo_pag.php");
            break;
    }
    exit();
}
?>
 
