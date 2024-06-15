<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de Empresa</title>
</head>
<body>
    <main class="container">
        <h1>Empresas</h1>
        <a href="<?php echo e(route('empresa.create')); ?>" class="btn btn-primary">Inserir Empresa</a>
        <table class="table table-stripped table-hover">
            <tr>
                <td>Nome Fantasia</td>
                <td>Ações</td>
            </tr>
            <?php $__currentLoopData = $empresa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($e->nome_fantasia); ?></td>
                <td> 
                    <a href="<?php echo e(route('empresa.show', $e->id)); ?>" class="btn btn-info">Ver</a>
                    <a href="<?php echo e(route('empresa.edit', $e->id)); ?>">Alterar</a> 
                    <a href="/empresa/delete/<?php echo e($e->id); ?>">Excluir</a> 
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>

</body>
</html><?php /**PATH C:\Users\brenon\OneDrive\Área de Trabalho\Brenon-Laravel\resources\views/empresa/index.blade.php ENDPATH**/ ?>