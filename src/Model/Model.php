<?php
namespace Core\src\Model;
use PDO;
use PDOStatement;

class Model
{
    protected static PDO $pdo;

    public static function initialize(PDO $pdo): void
    {
        static::$pdo = $pdo;
    }

    public static function getPDO() : PDO
    {
        return self::$pdo;
    }

    protected static function prepareExecute(string $sql, array $data): false|PDOStatement
    {
        $stmt = static::getPDO()->prepare($sql);

        foreach ($data as $param => $value)
        {
            $stmt->bindValue(":$param", $value);

        }
        $stmt->execute();

        return $stmt;

    }

}