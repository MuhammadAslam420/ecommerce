<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>MA Solution Tech</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo e($seo->description ?? ''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo e($seo->title ?? ''); ?>">
    <meta property="og:type" content="<?php echo e($seo->type ?? ''); ?>">
    <meta property="og:url" content="<?php echo e($seo->url ?? ''); ?>">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/logo.png')); ?>">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/evara-font.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/uicons-regular-straight.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css"
        integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body >
    <!-- Quick view -->

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header.headercomponent')->html();
} elseif ($_instance->childHasBeenRendered('AdheXeo')) {
    $componentId = $_instance->getRenderedChildComponentId('AdheXeo');
    $componentTag = $_instance->getRenderedChildComponentTagName('AdheXeo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AdheXeo');
} else {
    $response = \Livewire\Livewire::mount('header.headercomponent');
    $html = $response->html();
    $_instance->logRenderedChild('AdheXeo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header.mobile-header-component')->html();
} elseif ($_instance->childHasBeenRendered('BgpvsgN')) {
    $componentId = $_instance->getRenderedChildComponentId('BgpvsgN');
    $componentTag = $_instance->getRenderedChildComponentTagName('BgpvsgN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BgpvsgN');
} else {
    $response = \Livewire\Livewire::mount('header.mobile-header-component');
    $html = $response->html();
    $_instance->logRenderedChild('BgpvsgN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo e($slot); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer-component')->html();
} elseif ($_instance->childHasBeenRendered('5uwZd6k')) {
    $componentId = $_instance->getRenderedChildComponentId('5uwZd6k');
    $componentTag = $_instance->getRenderedChildComponentTagName('5uwZd6k');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5uwZd6k');
} else {
    $response = \Livewire\Livewire::mount('footer-component');
    $html = $response->html();
    $_instance->logRenderedChild('5uwZd6k', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <script src="<?php echo e(asset('assets/js/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-migrate-3.3.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.syotimer.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counterup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/images-loaded.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.vticker-min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.theia.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.elevatezoom.js')); ?>"></script>
    <!-- Template  JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/shop.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"
        integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo $__env->yieldPushContent('modal'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/layouts/base.blade.php ENDPATH**/ ?>