<?php 

  class table {
    public $content_id;
    public $input_content;
    private $connexion;
		public $content_1;
		public $content_2;
		public $content_3;
		public $content_4;
		public $dataTable;

    function __construct() {

      $this->content_id = "";
      $this->input_content="";
			$this->dataTable=array();
      require("connexion.class.php");
      $this->connexion = connexion::getConnexion();
    }
    
    function chargeNewData(){
      
      if(isset($_POST["content_id"])){
        $this->content_id=intval($_POST["content_id"]);
        $this->input_content=$_POST["input_content"];
      }  
    }
		
		function chargeDatabaseData(){
			
			try {
						$select="SELECT * FROM tableau";
						$result = $this->connexion->query($select);
						while ($objet = $result->fetch(PDO::FETCH_OBJ)) {
							array_push($this->dataTable, $objet->content);
						}
												
			} catch (Exception $e) {
					print("Erreur : " . $e->getMessage() . "<br/>");
					echo $select;
					exit;
			}

		}
    
    function changeContent(){
      try {
          $ligne = $this->connexion->prepare('UPDATE tableau SET content="'.$this->input_content.'" WHERE id='.$this->content_id.';CHARACTER SET utf8 COLLATE utf8_unicode_ci;');
          $ligne->execute();
					echo("THIS INPUT CONTENT".$this->input_content);
					echo("THIS CONTENT ID".$this->content_id);
      } catch (Exception $e) {
          print("Erreur : " . $e->getMessage() . "<br/>");
          echo $select;
          exit;
      }

}

			function affiche($wantedPost=null){
			    try {
							if($wantedPost==null){
								//display all
								$select="SELECT * FROM tableau";
								$result = $this->connexion->query($select);
								$result->setFetchMode(PDO::FETCH_OBJ);
								$allPostsArray = $result->fetchAll();
								$jsonAllPostArray=json_encode($allPostsArray);
								echo($jsonAllPostArray);
							}
							elseif($wantedPost!=null){
								$select="SELECT * FROM billet WHERE billet.id=".$wantedPost."";
								$result = $this->connexion->query($select);
								$result->setFetchMode(PDO::FETCH_OBJ);
								$allPostsArray = $result->fetchAll();
								$jsonAllPostArray=json_encode($allPostsArray);
								echo($jsonAllPostArray);
								//echo "WANTED POST".$wantedPost;
							}
			        //$result = $this->connexion->query("SELECT * FROM data LIMIT 10;SELECT nom FROM COM INNER JOIN data ON COM.id=data.id_com WHERE id_com=COM.id ");

			    } catch (Exception $e) {
			        print("Erreur : " . $e->getMessage() . "<br/>");
							echo $select;
			        exit;
			    }

			}
    
  }
