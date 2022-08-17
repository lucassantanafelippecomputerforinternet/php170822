<?php 
    include_once('templates/header.php'); ?>

<div class="container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-tittle">Criar contato</h1>
    <form id="create-form" action="config/processa.php" method="post">
        <input type="hidden" name="type" value="create">
        <div class="formgrupo">
            <label for="nome">Nome do responsável:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome:" class="form-control" required>
        </div>
        <div  class="formgroup">
            <label for="tarefa">Tarefa:</label>
            <input type="text" name="tarefa" id="tarefa" placeholder="Organizar....:" class="form-control" required>
        </div>
        <div class="formgrupo">
            <label for="obs">Observações:</label>
            <textarea type="text" name="obs" id="obs" placeholder="Insira as observações:" class="form-control" rows="3">
        
            </textarea>
        </div>
        <button  type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>]

<?php include_once('templates/footer.php'); ?>