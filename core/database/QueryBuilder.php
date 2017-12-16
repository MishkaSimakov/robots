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
        $statment = $this->pdo->prepare('select * from '. $table);
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}