<?php
class MessageManager
{
  private $m_bdd; // Instance de PDO.

  public function __construct($_bdd){
   	$this->setBdd($_bdd);
   // echo 'le manager a bien ete cree<br />';
  } 

  public function setBdd(PDO $_bdd){
    $this->m_bdd = $_bdd;
  }

  public function add(Message $_message){
   	$q = $this->m_bdd->prepare('INSERT INTO message (message) VALUES (:message)');
    $q->bindValue(':message', $_message->message());   
    $q->execute();
  }

  public function get($_id){
    $q = $this->m_bdd->query('SELECT id, message FROM message WHERE id = '.$_id);
    $_donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Message($_donnees);
  }

  public function getMessages(){
    $_donnees = $this->m_bdd->query('SELECT id, message FROM message');
    return $_donnees;
  }
}
?>