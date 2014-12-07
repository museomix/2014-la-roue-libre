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
		'message' => $_POST['text']
	);

	/*- création d'un nouveau message ---------------*/
	$o_message = new Message($_donnees);

	/*- création d'un du manager --------------------*/
	$o_messageManager = new MessageManager($_bdd);

	/*- Ajout d un utilisateur ----------------------*/
	$o_messageManager->add($o_message);

	header('Location:TestMessage.php');
?>
