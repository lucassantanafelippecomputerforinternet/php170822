<?php include_once('templates/header.php'); ?>
<div class = "container">
    <?php if(isset($printMsg) && $printMsg != ''):  ?>
        <p id='msg'><? $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-tittle">Atividades</h1>
        <?php if(count($tarefas) > 0): ?>
            <table class="table" id="tarefas-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tarefas</th>
                        <th scope="col">Opções</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach($tarefas as $registro): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $registro["id"] ?></td>
                            <td scope="row"><?= $registro["nome"] ?></td>
                            <td scope="row"><?= $registro["tarefa"] ?></td>
                            <td class="actions">
                                <a href="show.php?id=<?= $registro["id"] ?>">
                                    <i class="fas fa-eye check-icon"></i>
                                </a>
                                <a heref="editar.php?id=<?= $registro["id"] ?>">
                                    <i class="far fa-edit edit-icon"></i>
                                </a>
                                <button type="submit" class="delete-btn">
                                    <i class="fas fa-times delete-icon"></i>
                                </button>
                            </td>
                        </tr>