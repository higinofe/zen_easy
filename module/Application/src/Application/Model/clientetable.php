<?php

namespace Application\Model;

class clienteTable
{

    private $tableGateway;

    public function __construct($tableGateway)
    {
        $this->tableGateway = $tableGateway;        
    }

    public function findAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }


}