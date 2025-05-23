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

     <?php $__env->slot('titulo', null, []); ?> Nova Pessoa <?php $__env->endSlot(); ?>

    <form method="POST" action="/pessoas/<?php echo e(isset($pessoa) ? 'atualizar' : 'armazenar'); ?>">

    <?php echo csrf_field(); ?>

    <input type="hidden" name="id" value="<?php echo e($pessoa->id ?? ''); ?>">

    <div>

        <label for="nome">Nome:</label><br>

        <input type="text" id="nome" name="nome" value="<?php echo e($pessoa->nome ?? ''); ?>" required>

    </div>

    <div>

        <label for="cpf">CPF:</label><br>

        <input type="text" id="cpf" name="cpf" value="<?php echo e($pessoa->cpf ?? ''); ?>" required>

    </div>

    <div>

        <label for="datadenascimento">Ano de Nascimento:</label><br>

        <input type="number" id="datadenascimento" name="datadenascimento" value="<?php echo e($pessoa->datadenascimento ?? ''); ?>"

            required>

    </div>

    <div>

        <label for="profissao">Profissão:</label><br>

        <textarea id="profissao" name="profissao" required><?php echo e($pessoa->profissao ?? ''); ?></textarea>

    </div>

    <button type="submit">Criar</button>

</form>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\João Victor\Desktop\Web II\lavarel\resources\views/pessoas/form.blade.php ENDPATH**/ ?>