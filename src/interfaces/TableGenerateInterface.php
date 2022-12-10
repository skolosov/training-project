<?php


namespace App\interfaces;


interface TableGenerateInterface
{
    public function getTable();

    function getRowHeader(array $heading, bool $is_header);

    function getRowData(array $header, array $data, bool $is_header);

    function getCell($value, bool $is_header);
}