<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserção de Empresa</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário de Inserção de Empresa</h1>
        <form action="<?php echo e(route('empresa.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nome_fantasia">Insira o Nome Fantasia da Empresa</label>
                <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia"> <br/>
            </div>
            <div class="mb-3">
                <label for="cnpj">Insira o CNPJ da Empresa</label>
                <input type="text" class="form-control" name="cnpj" id="cnpj"> <br/>
            </div>
            <div class="mb-3">
                <label for="receita">Insira a receita da Empresa</label>
                <input type="number" class="form-control" name="receita" id="receita"> <br/>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\brenon\OneDrive\Área de Trabalho\Brenon-Laravel\resources\views/empresa/create.blade.php ENDPATH**/ ?>