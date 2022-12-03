><?php

use App\classes\Database;
use App\classes\TableGenerate;

$db = new Database();
?>

<div class="content_starship">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Starship</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="table_filter"
                               placeholder="Введите значение для поиска">
                        <small class="form-text text-muted">Фильтр космических кораблей</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                $header = [
                    'Name',
                    'Length',
                    'Starship_class',
                    'Max_atmosphering_speed',
                ];
                $db_rez = $db->query('select id,Name,model,length,Starship_class,Max_atmosphering_speed from starships');
                $classes = ['table' => ['table', 'thead-spread'], 'thead' => ['thead-light']];
                $tableGenerator = new TableGenerate($header, $db_rez, $classes);
                $tableGenerator->getTable();
                ?>

            </div>

        </div>

    </div>
</div>