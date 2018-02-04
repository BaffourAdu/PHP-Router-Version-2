<?php


class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @protected PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    
    /**
     * Inserts into a database table.
     *
     * @param string $table, $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try{
             $statement = $this->pdo->prepare($sql);

             $statement->execute($parameters);

        }catch(Exception $e){
            die("Whoops, something went wrong!");
            //$e->getMessage();
        }
    }

}
