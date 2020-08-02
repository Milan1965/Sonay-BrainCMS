<?php

class Crud {

	/**
	 * @var array $fields The array with the model's data
	 */
	private $fields = [];

	/**
	 * @param string $id
	 * @return string $value
	 */
	public function __construct($id){
		global $dbh;
		$query = $dbh->prepare('SELECT * FROM kvdw WHERE id=:id');
		$query->execute([':id' => $id]);
		if ($query->rowCount() == 1)
		{
			foreach ($query->fetch() as $key => $value) {
				$this->fields[$key] = $value;
			}
		}
	}

	/**
	 * Get user info from the database.
	 * @param string $key
	 * @return string
	 */
	public function data($key)
	{
		if(isset($this->fields[$key]))
		{
			return $this->fields[$key];
		}
		return false;
	}
	
	  
	  public function add($caption){
	  global $dbh;
	  
	  $query = $dbh->prepare("SELECT `caption` FROM `rooms` WHERE `caption` = :caption");
	  $query->execute([':caption' => $caption]);
	 
	
	  if($query->rowCount() > 0){
	  if(!empty($caption)){
	   $insertQuery = $dbh->prepare("INSERT INTO `kvdw`(
	                                       `username`,
	                                       `caption`,
										    `voted`)
	                               VALUES(
								           :username,
								           :caption,
										   :voted)");
       $insertQuery->execute([
	    ':username' => User::userData('username'),
	    ':caption' => $caption,
		':voted' => 1
	   ]);		
	   
       echo "
				<div class='box'>
					<div class='title green'>
						Je stem is geplaatst, bedankt voor het stemmen!
					</div>
				</div>"; 
	  } else {
      echo "
				<div class='box'>
					<div class='title red'>
						Je hebt niks ingevoerd!
					</div>
				</div>"; 
	 }
	} else {
	echo "
				<div class='box'>
					<div class='title red'>
						Deze kamer bestaat niet!
					</div>
				</div>";
	}
   }
 
}
   
   
 
	

?>