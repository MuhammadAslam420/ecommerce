<!DOCTYPE html>

<html lang="zxx">


<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/fonts.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/icofont.min.css')); ?>">

    <!--Page Specific -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/nice-select.css')); ?>">
    <!--Custom Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css"
        integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>


<body>
    
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Header Start -->
        <header class="header-wrapper main-header">
            <div class="header-inner-wrapper">
                <div class="header-right">

                    <div class="header-left">
                        <div class="header-links">
                            <a href="javascript:void(0);" class="toggle-btn">
                                <span></span>
                            </a>
                        </div>

                    </div>
                    <div class="header-controls">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('order-notifications', [])->html();
} elseif ($_instance->childHasBeenRendered('lirt8qR')) {
    $componentId = $_instance->getRenderedChildComponentId('lirt8qR');
    $componentTag = $_instance->getRenderedChildComponentTagName('lirt8qR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lirt8qR');
} else {
    $response = \Livewire\Livewire::mount('order-notifications', []);
    $html = $response->html();
    $_instance->logRenderedChild('lirt8qR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('message-notifications', [])->html();
} elseif ($_instance->childHasBeenRendered('skRbLiQ')) {
    $componentId = $_instance->getRenderedChildComponentId('skRbLiQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('skRbLiQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('skRbLiQ');
} else {
    $response = \Livewire\Livewire::mount('message-notifications', []);
    $html = $response->html();
    $_instance->logRenderedChild('skRbLiQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <div class="user-info-wrapper header-links">
                            <a href="javascript:void(0);" class="user-info">
                                <img src="<?php echo e(asset('admin/assets/images')); ?>/<?php echo e(Auth::user()->profile_photo_path); ?>"
                                    alt="" class="user-img">
                                <div class="blink-animation">
                                    <span class="blink-circle"></span>
                                    <span class="main-circle"></span>
                                </div>
                            </a>
                            <div class="user-info-box">
                                <div class="drop-down-header">
                                    <h4><?php echo e(Auth::user()->name); ?></h4>
                                    <p><?php echo e(Auth::user()->utype); ?></p>
                                </div>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('admin.profile_setting')); ?>">
                                            <i class="fa fa-edit"></i> Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.profile_setting')); ?>">
                                            <i class="fa fa-lock"></i> Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out mr-10"></i>Logout</a>
                                    </li>
                                    <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sidebar Start -->
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.aside','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('aside'); ?>
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
        <!-- Container Start -->
        <div class="page-wrapper">

            <?php echo e($slot); ?>

        </div>
    </div>

    <audio id="notification-sound" src="<?php echo e(asset('admin/assets/sounds/notification.mp3')); ?>" preload="auto"></audio>


    <!-- Script Start -->
    <script src="<?php echo e(asset('admin/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/swiper.min.js')); ?>"></script>
    <!-- Page Specific -->
    <script src="<?php echo e(asset('admin/assets/js/nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/apexcharts.min.js')); ?>"></script>
    <!-- Custom Script -->
    <script src="<?php echo e(asset('admin/assets/js/custom.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
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
<?php /**PATH C:\Users\Work\Desktop\Data\TheMovers\ecommerce-laravel-9\resources\views/layouts/admin.blade.php ENDPATH**/ ?>