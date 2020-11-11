<?php

require('connect.php');

function dd($value)
{
   
    echo "<pre>", print_r($value, true), "</pre>";      // apenas para testes de prints, deletar mais tarde...
    die();

}


function executeQuery($sql, $data)
{
    global $conn;
    $conn-> prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));             // faz a injection de values de uma forma mais segura 
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
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
           
           
            $stmt = executeQuery($sql, $conditions)
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
       
        }

}


function selectOne($table, $conditions = [])
  {
        global $conn;
        $sql = "SELECT * FROM $table";
        
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

            $sql - $sql . " LIMIT 1 ";
           
           
            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_assoc();
            return $records;
       
    

}
 

function create($table, $data){
    
    global $conn;

    $sql= "INSERT INTO $table SET";


    $i = 0;
    foreach ($conditions as $key => $value) {
       if ($i === 0){
        $sql = $sql . "WHERE $key=?";    // faz a "injeção" de values de uma forma mais segura 
       } else {
            $sql = $sql . " AND $key=?";    // faz a "injeção" de values de uma forma mais segura 
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;

}


function update($table, $id, $data){
    
    global $conn;

    $sql= "UPDATE INTO $table SET";


    $i = 0;
    foreach ($conditions as $key => $value) {
       if ($i === 0){
        $sql = $sql . "WHERE $key=?";    // faz a "injeção" de values de uma forma mais segura 
       } else {
            $sql = $sql . " AND $key=?";    // faz a "injeção" de values de uma forma mais segura 
        }
        $i++;
    }

    $sql = $sql . "WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;

}

function delete($table, $id){
    
    global $conn;

    $sql= "DELETE INTO $table SET";

    $
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;

}



// https://www.youtube.com/watch?v=-yV1DCLcqyM&list=PL3pyLl-dgiqD0eKYJ-XSxrHaRh-zsA2tP&index=18&ab_channel=AwaMelvine
// video 18