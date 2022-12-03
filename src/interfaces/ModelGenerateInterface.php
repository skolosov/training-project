<?php


namespace App\interfaces;


interface ModelGenerateInterface
{
    public function getModal();

    function getModalButton(array $data);

    function getModalHeader(string $NameModel);

    function getModalBody(array $data);
}