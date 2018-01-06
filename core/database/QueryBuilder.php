<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 10:10
 */

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statment = $this->pdo->prepare('select * from ' . $table);
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(' , :', array_keys($parameters))
        );

        try {

            $statment = $this->pdo->prepare($sql);
            $statment->execute($parameters);

        } catch (Exception $e) {
            die($e);
        }
    }

    public function getFromId($table, $id)
    {
        $statment = $this->pdo->prepare('select * from ' . $table . ' WHERE id = ' . $id);
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}