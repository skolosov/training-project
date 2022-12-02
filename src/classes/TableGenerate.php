<?php


namespace App\classes;


use App\interfaces\TableGenerateInterface;

class TableGenerate implements TableGenerateInterface
{
    private array $header;
    private array $data;
    private array $classes;

    public function __construct(array $header, array $data, array $classes)
    {
        $this->header = $header;
        $this->data = $data;
        $this->classes = $classes;
    }

    public function getTable()
    {
        $class_table = implode(' ', $this->classes['table']);
        $class_table_thead = implode(' ', $this->classes['thead']);

        echo "<table class='$class_table'>";
        echo "<thead class='$class_table_thead'>";
        $this->getRow($this->header, true);
        echo "</thead>";
        echo "<tbody>";
        foreach ($this->data as $row) {
            $this->getRow($row);
        }
        echo "</tbody>";
        echo "</table>";
    }

    function getRow($data, bool $is_header = false)
    {
        echo "<tr>";
        foreach ($data as $cell) {
            $this->getCell($cell, $is_header);
        }
        echo '<td>
<!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>

                </div>
            </div>
        </div>
</td>';
        echo "</tr>";
    }

    function getCell($value, bool $is_header = false)
    {
        echo $is_header ? "<th>" : "<td>";
        echo $value;
        echo $is_header ? "</th>" : "</td>";
    }
}