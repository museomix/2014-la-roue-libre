<?php
class Message{
  private $m_id;
  private $m_message;

 	/*-- constructeur ---------------------*/
	public function __construct(array $_donnees){
		$this->hydrate($_donnees);	
    //echo 'L utilisateur a bien ete cree<br />';	
  }

  /*-- hydrater objet -------------------*/
  public function hydrate($_donnees){

    if (isset($_donnees['id'])){
      $this->m_id = $_donnees['id'];
    }

    if (isset($_donnees['message'])){
      $this->m_message = $_donnees['message'];
    }

  }

  /*-- Getter ---------------------------*/
	public function id(){
    return $this->m_id;
  }
  
  public function message(){
    return $this->m_message;
  }

  /*-- Setter ---------------------------*/
  public function setMessage($_message){
   	$this->m_message = $_message;
  }
}
?>