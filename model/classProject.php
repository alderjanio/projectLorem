<?php


include ("classConnect.php");
class ClassProject extends ClassConnection{

    public function addProjects($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes)
    {
        var_dump($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes);
       
        $sql = "INSERT INTO tbl_project VALUES (null,?,?,?,?,?,?)";
        $add = $this->connectDB()->prepare($sql);
        $add->bindValue(1, $nameProject);
        $add->bindValue(2, $dataInicio);
        $add->bindValue(3, $DataTermino);
        $add->bindValue(4, $valorProject);
        $add->bindValue(5, $nameRisco);
        $add->bindValue(6, $nameParticipantes);
    
        $add->execute();
  
    echo json_encode('ok');
    }

}
?>