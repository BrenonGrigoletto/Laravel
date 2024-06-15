<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Exclusão de Empresa</title>
</head>
<body>
    <div class="container mt-5">
    <h1>Formulário de Exclusão de Empresas</h1>
    <div class="alert alert-warning" role="alert">
        Realmente deseja excluir esta empresa?
    <div>
        <div class="mb-3">
            <label class="form-label"><strong>ID:</strong></label>
            <p><?php echo e($empresa->id); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Nome Fantasia:</strong></label>
            <p><?php echo e($empresa->nome_fantasia); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>CNPJ:</strong></label>
            <p><?php echo e($empresa->cnpj); ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Receita: R$</strong></label>
            <p><?php echo e($empresa->receita); ?></p>
        </div>
    <form action="<?php echo e(route('empresa.destroy' , $empresa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="<?php echo e(route('empresa.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\brenon\OneDrive\Área de Trabalho\Brenon-Laravel\resources\views/empresa/delete.blade.php ENDPATH**/ ?>