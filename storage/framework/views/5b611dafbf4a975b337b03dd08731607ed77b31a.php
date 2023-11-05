<?php $__env->startComponent($view, $params); ?>
    <?php $__env->slot($slotOrSection); ?>
        <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html']; ?>

    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\Work\Desktop\Data\TheMovers\ecommerce-laravel-9\vendor\livewire\livewire\src/Macros/livewire-view-component.blade.php ENDPATH**/ ?>