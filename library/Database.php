<?php

class Database extends PDO
{
    function __construct($type, $host, $port, $user, $pass, $db)
    {
        parent::__construct(
            $type.":host=".$host."::".$port.";dbname=".$db,
            $user,
            $pass
        );
    }


    /**
     * Execute an sql query and return the result
     * @param string $sql
     * @param array $param
     * @param int $fetch
     */
    public function select($sql="", $param=array(), $fetch=PDO::FETCH_ASSOC){

        $q = $this->prepare($sql);
        foreach($param as $key => $value){
            $q->bindValue("$key", $value);
        }
        $q->execute();
        $q->fetchAll($fetch);
    }


}
