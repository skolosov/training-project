<?php


namespace App\classes;

use App\interfaces\ModelGenerateInterface;

class ModalGenerate implements ModelGenerateInterface
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

    public function getModal()
    {
        $idModel = "Model_StarShip_" . $this->data["id"];
        echo "<td>";
        $this->getModalButtom($idModel);
        echo <<<EOT
            <div class="modal fade bd-example-modal-lg" id="{$idModel}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
        EOT;
//        $this->getModalHeader($this->data["name"]);
        echo '<div class="modal-body">';
        $this->getModalBody($this->data);
        echo <<<EOT
                        </div>
                    </div>
                </div>
            </div>
        </td>
        EOT;
    }

    function getModalButtom(string $idModel)
    {
        echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#' . $idModel . '">Open</button>';
    }

    function getModalHeader(string $name)
    {
        echo <<<EOT
        <div class="modal-header">
            <!--<h5 class="modal-title">{$name}</h5>-->
        </div>
        EOT;
    }

    function getModalBody(array $data)
    {
        echo <<<EOT
        <div class="container">
            <div class="row">
                <div class="col">
        EOT;
//        echo "{$data["name"]}";
        echo '<img class="starship" src="src/images/' . $data["name"] . '.png" alt="">';
        echo '</div>';
        echo '<div class="col">';

        $header_model_row = [
            'Name',
            'model',
            'starship_class',
            'manufacturer',
            'length',
            'cargo_capacity',
            'Max_atmosphering_speed',
        ];
        foreach ($header_model_row as $value) {
            echo '<div class="row">';
            echo mb_strtolower($value)=="name" ? '<b>' : ' ';
            echo "$value: " . $data[mb_strtolower($value)];
            echo mb_strtolower($value)=="name" ? '</b>' : ' ';
            echo '</div>';
        }
//        for ($i = 0; $i < count($header_model_row); ++$i) {
//            echo '<div class="row">';
//            echo $i==0 ? '<b>' : '';
//            echo "$header_model_row[$i]: " . $data[mb_strtolower($header_model_row[$i])];
//            echo $i==0 ? '</b>' : '';
//            echo '</div>';
//        }

        echo <<<EOT
                </div>
            </div>
        </div>
        EOT;
    }
}