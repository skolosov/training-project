<?php
namespace App\classes;

use App\interfaces\InputInterface;
use App\traits\InputTrait;

class InputClass implements InputInterface
{
    use InputTrait;

    private string $type;
    private string $name;
    private string $placeholder;

    public function __construct(string $type, string $name, string $placeholder)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }
}