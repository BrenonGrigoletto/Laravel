<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Bem-vindo ao Laravel</h1>

        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-primary mt-3">Ver Clientes</a>  
        <br>

        <a href="<?php echo e(route('produto.index')); ?>" class="btn btn-success mt-3">Ver Produtos</a>
    </div>
</body>
</html>
<?php /**PATH C:\Users\aluno\Downloads\Brenon-Laravel\Brenon-Laravel\resources\views/home.blade.php ENDPATH**/ ?>