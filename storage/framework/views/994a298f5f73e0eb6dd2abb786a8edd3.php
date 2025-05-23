<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade Laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>



<body>

    <header>

        <h1>Atividade Laravel</h1>

        <?php echo $__env->make('components.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <h3><?php echo e($titulo); ?></h3>

    </header>

    <main>

        <?php echo e($slot); ?>


    </main>

    <footer>

        <p>&copy; João Vítor - DEW II 2025.</p>

    </footer>

</body>



</html>
<?php /**PATH C:\Users\João Victor\Desktop\Web II\lavarel\resources\views/components/layout.blade.php ENDPATH**/ ?>