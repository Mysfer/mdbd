<?php

namespace Project\Db;

use Project\Db\Connection;

class QueryBuilder
{
    
    private $pdo;

    public function __construct()
    {
        $this->pdo = Connection::getConnection();
    }

    public function select($table, $parameters = [], $first = false, $condition = 'and',  $fetch = \PDO::FETCH_ASSOC)
    {

        $params = array_map(function($p){
            return "$p = :$p";
        }, array_keys($parameters));

        $where = !empty($parameters) ? 'where ' . implode(" {$condition} ", $params) : '';
 
        $s = $this->pdo->prepare("select * from {$table} {$where}");
        try{
            $s->execute($parameters);

            return $first ? $s->fetch($fetch) : $s->fetchAll($fetch);

        }  catch(\PDOException $e){
             die($e->getMessage());
        }
        
    }
    
    public function insert($table, $data)
    {

        $columns = implode(',', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        $stmt = $this->pdo->prepare($sql);

        try {
            return $stmt->execute($data);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function delete($table, $data)
    {   
        $where = key($data) . ' = :' . key($data);
        //die($where);
        $sql = "DELETE FROM {$table} WHERE {$where}";
        $stmt = $this->pdo->prepare($sql);

        try {
           return $stmt->execute($data);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function update($table, $data, $condition)
    {   
        $columns = implode(' =?, ', array_keys($data)) . ' =? ';
        $where = key($condition) . ' = ?';

        $sql = "UPDATE {$table} SET {$columns} WHERE {$where}";
        $stmt = $this->pdo->prepare($sql);

        $dados = array_values($data);
        $dados[] = $condition[key($condition)];
        
        try {
            return $stmt->execute($dados);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    //Função que recebe o nome da tabela e um id
// e retorna os dados de um determinado aluno

    public function innerdicio($id)
    {

    $sql = "select dicionario.nome from dicionario
    inner join pertence 
    on dicionario.id_dicionario = table1_id_dicionario
    inner join palavras
    on palavras.id = pertence.palavras_id
    where palavras.id = :id"; 
    $s = $this->pdo->prepare($sql);

    $s->bindParam(':id', $id);

    try{
        $s->execute();

        return $s->fetch(\PDO::FETCH_ASSOC);

    }  catch(\PDOException $e)
        {
        die($e->getMessage());
        }
    }

public function selectWhere($id)
{

  $sql = "select * from palavras where id = :id"; 
  $s = $this->pdo->prepare($sql);

  $s->bindParam(':id', $id);

  try{
      $s->execute();

      return $s->fetch(\PDO::FETCH_ASSOC);

  }  catch(\PDOException $e)
    {
       die($e->getMessage());
    }
}
    public function sinonimo($id)
    {

    $sql = "select * from palavras
left join sinonimo
on sinonimo.palavras_id1 = palavras.id
where sinonimo.palavras_id = :id"; 
    $s = $this->pdo->prepare($sql);

    $s->bindParam(':id', $id);

    try{
        $s->execute();

        return $s->fetch(\PDO::FETCH_ASSOC);

    }  catch(\PDOException $e)
        {
        die($e->getMessage());
        }
    }
}
