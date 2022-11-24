<?php


namespace App\interfaces;


interface TableGenerateInterface
{
    public function getTable();

    function getRow(array $data);

    function getCell($value);
}