<?php include "_inc.php";

$errors = array();

    $captcha = new Recaptcha('6LcKeQoUAAAAAKSAM6jiLBwCAmd2wKq4U67XnIiQ');
if(!empty($_POST)){

    if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
        $errors['firstname'] = "Vous n'avez pas renseigné de <strong>prénom</strong>";
    }
    if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == ''){
        $errors['lastname'] = "Vous n'avez pas renseigné de <strong>nom</strong>";
    }
    if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Vous n'avez pas renseigné d'<strong>email</strong> valide";
    }

    if(!array_key_exists('city', $_POST) || $_POST['city'] == ''){
        $errors['city'] = "Vous n'avez pas renseigné de <strong>ville</strong>";
    }
    if(!array_key_exists('soft', $_POST) || $_POST['soft'] == ''){
        $errors['soft'] = "Vous n'avez pas renseigné de <strong>logiciel</strong>";
    }

    if($captcha->checkCode($_POST['g-recaptcha-response']) == false){

        $errors['Vérification']= "il semblerais que vous soyez un <strong>robot</strong>...";
    }

    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: formulaire.php');

    }else{
        $_SESSION['success'] = 1;
        $message_content = "Expéditeur : " . $_POST['email'] . "\r\n";
        $message_content .= "<strong>Nom :</strong> " . $_POST['lastname'] . " " . "<strong>Prénom :</strong> " . " " . $_POST['firstname'] . "\r\n";
        $message_content .= "<strong>Numéro de télépéhone :</strong> " . $_POST['phone']. " " . "<strong>Ville :</strong>" . $_POST['city'] . " " . "<strong>Logiciel :</strong> " . $_POST['soft'] . "\r\n";
        $message_content .= "<strong>Message :</strong>" . "\r\n" . $_POST['message'];
        $headers = 'from: ' . $_POST['email'];
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

        mail('ledeclicvital@cgtm.fr', 'fomulaire contact de ' . $_POST['firstname'] . ' ' . $_POST['lastname'], $message_content, $headers);
        header('Location: index.php');
    }
    
}




