2<?php
class Funcionarios {
	// database connection and table name
    private $conn;
    private $table_funcionarios = "funcionarios";
    // object properties
    public $id;
    public $nome;
    public $sobrenome;
    public $idade;
    public $cargo;
    public $salario;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

	public function getFuncionarios()
	{
		$query = "SELECT * FROM ".$this->table_funcionarios."";
		// prepare query statement
		$stmt = $this->conn->prepare( $query );
		// execute query
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($row as $key => $value)
		{
			echo utf8_encode($value["nome"]).' '
          .utf8_encode($value["sobrenome"]).' '
          .utf8_encode($value["cargo"]).' '
          .utf8_encode($value["salario"]).'
          <a href="editar.php?id='.$value["id"].'">Editar</a>
          <a href="deletar.php?id='.$value["id"].'">Deletar</a><br>';
		}
  }
  public function getFuncionario($id)
	{
		$query = "SELECT * FROM ".$this->table_funcionarios." WHERE id=:id";
		// prepare query statement
		$stmt = $this->conn->prepare( $query );
    // bind value
    $stmt->bindParam(":id", $id);
		// execute query
		$stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // return result
    return $row;
  }
  public function cadastraFuncionario()
  {
  // query to insert record
	  	$query = "INSERT INTO
				  " . $this->table_funcionarios . "
			  SET
				  nome=:nome,
				  sobrenome=:sobrenome,
				  idade=:idade,
				  cargo=:cargo,
				  salario=:salario";

	  // prepare query
	  $stmt = $this->conn->prepare($query);

	  // bind values
	  $stmt->bindParam(":nome", utf8_decode($this->nome));
	  $stmt->bindParam(":sobrenome", utf8_decode($this->sobrenome));
	  $stmt->bindParam(":idade", $this->idade);
	  $stmt->bindParam(":cargo", utf8_decode($this->cargo));
	  $stmt->bindParam(":salario", $this->salario);

	  // execute query
	  if($stmt->execute()){
		 //print_r($stmt->fetchALL(PDO::FETCH_OBJ));
		 return true;
	  }else{
		 //print_r($stmt->errorInfo());
		 return false;
		 }
   }
   public function editaFuncionario()
   {
   // query to insert record
 	  	$query = "UPDATE
 				  " . $this->table_funcionarios . "
 			  SET
 				  nome=:nome,
 				  sobrenome=:sobrenome,
 				  idade=:idade,
 				  cargo=:cargo,
 				  salario=:salario
        WHERE id=:id";

 	  // prepare query
 	  $stmt = $this->conn->prepare($query);

 	  // bind values
    $stmt->bindParam(":id", $this->id);
 	  $stmt->bindParam(":nome", $this->nome);
 	  $stmt->bindParam(":sobrenome", $this->sobrenome);
 	  $stmt->bindParam(":idade", $this->idade);
 	  $stmt->bindParam(":cargo", $this->cargo);
 	  $stmt->bindParam(":salario", $this->salario);
 	  // execute query
 	  if($stmt->execute())
    {
 		 //print_r($stmt->fetchALL(PDO::FETCH_OBJ)); die;
 		 return true;
 	  }else{
 		 //print_r($stmt->errorInfo()); die;
 		 return false;
 		 }
    }
    public function deletaFuncionario()
    {
    // query to insert record
       $query = "DELETE FROM
           " . $this->table_funcionarios . "
         WHERE id=:id";
     // prepare query
     $stmt = $this->conn->prepare($query);
     // bind values
     $stmt->bindParam(":id", $this->id);
     // execute query
     if($stmt->execute()){
      //print_r($stmt->fetchALL(PDO::FETCH_OBJ)); die;
      return true;
     }else{
      //print_r($stmt->errorInfo()); die;
      return false;
      }
     }

}
?>
