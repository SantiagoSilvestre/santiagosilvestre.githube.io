if(isset($_POST['name']) && !empty($_POST['name'])){

$nome = addslashes( $_POST['name']);
$email = addslashes( $_POST['email']);
$mensagem = addslashes( $_POST['message']);

$to = "dramariatatianesilvestre@gmail.com";
$subject = "Contato Dra Tati site";
$body =  "Nome: ".$nome. "\r\n"
         ."Email: ".$email. "\r\n"
         ."Mensagem: ".$mensagem;
$header = "From: silvestre.satiago732@umeet.com". "\r\n"
          ."Replay-To: ".$email ."\r\n"
          ."X=Mailer: PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo 'Email enviado com sucesso!';

}else {
    echo 'Email não pode ser enviado';
}
if(isset($to)){
    echo 'existe';
}

} else {
    echo 'erro';
}