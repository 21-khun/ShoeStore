<?php
class queryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;

    }    
    public function selectAll($table){
        $statement=$this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
    return $tasks=$statement->FETCHALL(PDO::FETCH_OBJ);
        
    }
    public function selectOne($table,$id){
        $statement=$this->pdo->prepare("SELECT * FROM $table WHERE id=$id");
        $statement->execute();
    return $tasks=$statement->FETCHALL(PDO::FETCH_OBJ);
        
    }
    public function insert($data,$table){
        
        $getarrayKey=array_keys($data);
       
        
      $cols=implode(",",$getarrayKey);
    //    dd($getarrayKey);

      $questionMark="";
     foreach($getarrayKey as $key){
         $questionMark.="?,";
     }
      $questionMark=rtrim($questionMark,",");
  
  
      
        $sql="INSERT INTO $table ($cols) VALUES ($questionMark)";
        
        $statement=$this->pdo->prepare($sql);
        $getarrayValue=array_values($data);
        // dd($getarrayValue);
        
        $statement->execute($getarrayValue);
    }

}