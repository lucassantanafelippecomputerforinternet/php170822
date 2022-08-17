<?php 
    include_once('templates/header.php'); ?>

<div class="container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-tittle">Editar contato</h1>
    <form id="edit-form" action="config/processa.php" method="edit">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $tarefas['id'] ?>">
        <div class="formgrupo">
            <label for="nome">Nome do responsável:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome:" value="<?= $tarefas['nome'] ?>" class="form-control" required>
        </div>
        <div  class="formgroup">
            <label for="tarefa">Tarefa:</label>
            <input type="text" name="tarefa" id="tarefa" placeholder="Organizar....:" value="<?= $tarefas['tarefa'] ?>" form-control" required>
        </div>
        <div class="formgrupo">
            <label for="obs">Observações:</label>
            <textarea type="text" name="obs" id="obs" placeholder="Insira as observações:" class="form-control" rows="3">
        
            </textarea>
        </div>
        <button  type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>]

<?php include_once('templates/footer.php'); ?>