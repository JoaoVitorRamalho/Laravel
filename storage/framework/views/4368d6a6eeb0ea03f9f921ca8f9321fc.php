<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('titulo', null, []); ?> Pessoas <?php $__env->endSlot(); ?>



    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>

    <?php echo e(session('success')); ?>


    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>



    <?php if(count($pessoas) > 0): ?>

    <table border="1">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nome</th>

                <th>CPF</th>

                <th>Ano de Nascimento</th>

                <th>Profissão</th>

                <th>Ações</th>

            </tr>

        </thead>

        <tbody>

            <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>

                <td><?php echo e($pessoa->id); ?></td>

                <td><?php echo e($pessoa->nome); ?></td>

                <td><?php echo e($pessoa->cpf); ?></td>

                <td><?php echo e($pessoa->datadenascimento); ?></td>

                <td><?php echo e($pessoa->profissao); ?></td>
                
                <td>

                    <form action="/pessoas/editar" method="post">

                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($pessoa->id); ?>">

                        <button type="submit">Editar</button>

                    </form>

                    <form action="/pessoas/deletar" method="post">

                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($pessoa->id); ?>">

                        <button type="submit">Deletar</button>

                    </form>

                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

    <?php else: ?>

    <p>Nenhum pessoa foi encontrada.</p>

    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\João Victor\Desktop\Web II\lavarel\resources\views/pessoas/lista.blade.php ENDPATH**/ ?>