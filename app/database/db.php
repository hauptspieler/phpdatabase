<?php

require('connect.php');

function dd($value)
{
   
    echo "<pre>", print_r($value, true), "</pre>";      // apenas para testes de prints, deletar mais tarde...
    die();

}

function selectAll($table, $conditions = [])
{
        global $conn;
        $sql = "SELECT * FROM $table";
        if(empty($conditions)){
            $stmt = $conn-> prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        } else {
            // retornar apenas as condicoes dadas
             $i = 0;
            foreach ($conditions as $key => $value) {
               if ($i === 0){
                $sql = $sql . "WHERE $key=?";    // faz a "injeção" de values de uma forma mais segura 
               } else {
                    $sql = $sql . " AND $key=?";    // faz a "injeção" de values de uma forma mais segura 
                }
                $i++;
            }
           
           
            $stmt = $conn-> prepare($sql);
            $values = array_values($conditions);
            $types = str_repeat('s', count($values));             // faz a injection de values de uma forma mais segura 
            $stmt->bind_param($types, ...$values);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
       
        }

}


