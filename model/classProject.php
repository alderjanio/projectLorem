<?php


include ("classConnect.php");
class ClassProject extends ClassConnection{

    public function addProjects($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes)
    {
        var_dump($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes);
     
        $sql = "INSERT INTO tblprojeto VALUES (null,?,?,?,?,?,?)";
        $add = $this->connectDB()->prepare($sql);
        $add->bindValue(1, $nameProject) ;
        $add->bindValue(2, $dataInicio);
        $add->bindValue(3, $DataTermino);
        $add->bindValue(4, $valorProject);
        $add->bindValue(5, $nameRisco);
        $add->bindValue(6, $nameParticipantes);
    
        $add->execute();
  
    echo json_encode('ok');
    }
    public function list()
    {
        $sql = "SELECT * FROM tblprojeto";
        $list = $this->connectDB()->prepare($sql);
        $list->execute();
        $res = $list->fetchAll();
        echo json_encode($res);
   
    }
    public function funcdelete($id)
    {
      $sql = "DELETE FROM tblprojeto WHERE id=$id";
      $list = $this->connectDB()->prepare($sql);
      $list->execute();
    }
    public function funcbusca($id)
    {
        $sql = "SELECT * FROM tblprojeto WHERE id=$id";
        $list = $this->connectDB()->prepare($sql);
        $list->execute();
        $res = $list->fetchAll();
        echo json_encode($res);
   
    }
    public function atualizar($id,$nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes)
    {
        $sql = "UPDATE tblprojeto SET projeto_nome=?, projeto_datainicio=?, projeto_datatermino=?, projeto_price=?, projeto_risco=?, projeto_participantes=? WHERE id=?";
        $up = $this->connectDB()->prepare($sql);
        $up->bindParam(1, $nameProject);
        $up->bindParam(2, $dataInicio);
        $up->bindParam(3, $DataTermino);
        $up->bindParam(4, $valorProject);
        $up->bindParam(5, $nameRisco);
        $up->bindParam(6, $nameParticipantes);
        $up->bindParam(7, $id);
        $up->execute();
     
        echo json_encode($nameProject);
   
    }

}
?>