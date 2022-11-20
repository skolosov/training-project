<?php
require_once "classes/InputClass.php";

class FactoryInput
{
    private array $inputs;
    public array $inputFields;

    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
        $this->inputFields = $this->generateInputs();
    }

    private function generateInputs(): array
    {
        $inputs = [];
        foreach ($this->inputs as $input) {
            $inputs[] = new InputClass($input['type'], $input['name'], $input['placeholder']);
        }
        return $inputs;
    }
}