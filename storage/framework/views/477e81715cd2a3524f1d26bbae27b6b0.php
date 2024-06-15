<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de Produtos</title>
</head>
<body>
    <main class="container">
        <h1>Produtos</h1>
        <a href="<?php echo e(route('produto.create')); ?>">Inserir Produto</a>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produto->nome); ?></td>
                    <td> 
                        <a href="<?php echo e(route('produto.show', $produto->id)); ?>">Ver</a>
                        <a href="<?php echo e(route('produto.edit', $produto->id)); ?>">Alterar</a> 
                        <a href="<?php echo e(route('produto.destroy', $produto->id)); ?>" onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir este produto?')) document.getElementById('delete-form-<?php echo e($produto->id); ?>').submit();">Excluir</a> 
                        <form id="delete-form-<?php echo e($produto->id); ?>" action="<?php echo e(route('produto.destroy', $produto->id)); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </main>
</body>
</html>
<?php /**PATH C:\Users\aluno\Downloads\Brenon-Laravel\Brenon-Laravel\resources\views/produto/index.blade.php ENDPATH**/ ?>