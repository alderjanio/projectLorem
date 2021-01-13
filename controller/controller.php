<?php

if(isset($_POST['action'])){

    include "../model/classProject.php";
    
    $projeto = new classProject();

switch ($_POST['action']) {
    case 'insert':

    $nameProject = $_POST['nameProject']; 
    $dataInicio  = $_POST['dataInicio'];
    $DataTermino  = $_POST['DataTermino'];
    $valorProject = $_POST['valorProject'];
    $nameRisco = $_POST['nameRisco'];
    $nameParticipantes = $_POST['nameParticipantes'];
    $action = $_POST['action'];
    
    
    $projeto->addProjects($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes);
        break;

    case 'list':
  
    $projeto->list();
    break;

    case 'del':
    $id = $_POST['id'];
    $projeto->funcdelete($id);
    default:
        
        break;
}


}

?>