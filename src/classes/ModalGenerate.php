<?php

namespace App\classes;

use App\interfaces\ModelGenerateInterface;

class ModelGenerate implements ModelGenerateInterface
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
        $idModel = "ModelW" . $this->data["id"];
        echo "<td>";
        echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{$idModel}">Open</button>';
        echo '<div class="modal fade" id="{$idModel}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog modal-dialog-centered" role="document">';
        echo '<div class="modal-content">';
        $this->getModalBody($this->data["name"]);
        echo '<div class="modal-body">';
        $this->getModalBody($this->data);
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
    }

    function getModalHeader(string $name){
        echo '<div class="modal-header">';
        echo '<h5 class="modal-title">{$name}</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
    }

    function getModalBody(array $data)
    {
        // TODO: Implement getModalHeader() method.
    }
}
