﻿<?php

require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO

if(isset($_GET['setor'])){
  $setor =$_GET['setor'];//PARAMETRO
}else{
  $setor = "";//PARAMETRO
}


//selects dashboard

//drop com a lista dos setores
$select_dos_setores = "SELECT id, nome as nome_setor, sigla FROM setores";
$altera_titulo_do_setor = "SELECT id, nome as nome_setor, sigla FROM setores where id = $setor";

$lista_de_pacientes_por_setor = "SELECT a.id,  a.Hora_cirurgia, a.Cirurgia, a.nm_paciente, a.Cirurgiao, a.Centro_Cirurgico, a.Sala_Cirurgia,s.id as id_da_sala, a.Observacao
                                                          FROM agendamento as a inner join setores as s on a.Sala_Cirurgia = s.nome
                                                          where date_format(Hora_cirurgia,'%Y %M %D') = date_format(now(),'%Y %M %D') and s.id = 39
                                                          group by nm_paciente";






//parametro passado
if ($parametro === 'setores'){
  geraJson($select_dos_setores, $conexao);
}else if($parametro === 'alteraTitulo'){
  geraJson($altera_titulo_do_setor, $conexao);
}else if($parametro === 'lista'){
  geraJson($lista_de_pacientes_por_setor, $conexao);
}


 

//retorna e exibe o json
  function geraJson($select, $conexao){
    $sql = $select;
    $stmt = $conexao->prepare( $sql );
    $stmt->execute();
    $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
    $novo = array();
      foreach ($result as $key => $value) {
        foreach ($value as $k => $v) {
          $novo[$key][$k] = $v;
        }
      }
    $json = json_encode($novo);
   echo $json; 
  }
?>




