<?php


namespace App\classes;


use App\interfaces\TableGenerateInterface;

class TableGenerate implements TableGenerateInterface
{
    private array $header;
    private array $data;
    private string $classes;

    public function __construct(array $header, array $data, array $classes)
    {
        $this->header = $header;
        $this->data = $data;
        $this->classes = implode(' ', $classes);
    }

    public function getTable()
    {
        echo "<table class='{$this->classes}'>";
            echo "<thead>";
                $this->getRow($this->header);
            echo "</thead>";
            echo "<tbody>";
                foreach ($this->data as $row) {
                    $this->getRow($row);
                }
            echo "</tbody>";
        echo "</table>";
    }

    function getRow($data)
    {
        echo "<tr>";
        foreach ($data as $cell) {
            $this->getCell($cell);
        }
        echo "</tr>";
    }

    function getCell($value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
}