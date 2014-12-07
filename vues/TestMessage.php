<?php

	function chargerClasse($classe){
	  require $classe.'.class.php';
	}

	spl_autoload_register('chargerClasse');

	try{
		$_bdd = new PDO('mysql:host=localhost;dbname=messages', 'root', 'root');
	}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
	}

	$_donnees = array(
  		'message' => 'Olivier chez Dassault System'
	);

	/*- création d'un nouveau message ---------------*/
	// $o_message = new Message($_donnees);
	// echo $o_message->message().'<br />';

	/*- création d'un du manager --------------------*/
	$o_messageManager = new MessageManager($_bdd);

	/*- Ajout d un utilisateur ----------------------*/
	//$o_messageManager->add($o_message);

	/*- Retour d un message -------------------------*/
	// $o_message = $o_messageManager->get(1);
	// echo 'id : '.$o_message->id().'<br />';
	// echo 'id : '.$o_message->message().'<br />';

	/*- Retour de tous les messages -----------------*/
	$_reponse = $o_messageManager->getMessages();
	//print_r($_reponse);
	echo '<h1>Messages</h1><ul>';
	while ($_donnees = $_reponse->fetch())
	{
		//echo 'salut';
		$o_message = new Message($_donnees);
    	//echo 'id : '.$o_message->id().'<br />';
		echo '<li>'.$o_message->message().'<br /></li>';
	}
	echo '</ul>'
?>