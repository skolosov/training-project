<?php


namespace App\interfaces;


interface ModelGenerateInterface
{
    public function getModal();

    function getModalButtom(string $idModel);

    function getModalHeader(string $name);

    function getModalBody(array $data);
}