<?php $__env->startPush('styles'); ?>
<style>
    .ck-editor__editable {
    background-color: transparent !important;
}
</style>
<?php $__env->stopPush(); ?>
<div class="main-content" id="main">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Pages</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <span class="icon-menu feather-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-link">Page</li>
                        <li class="breadcrumb-link active">Create</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- From Start -->
    <div class="from-wrapper">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h5>Add New Page</h5>
                </div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addPage">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">Page ID <b class="text-danger">*</b></label>
                                <input type="number" name="page_id" id="page_id" class="form-control" wire:model="page_id" min="1">
                                <?php $__errorArgs = ['page_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">Title <b class="text-danger">*</b></label>
                                <input type="text" name="title" id="title" class="form-control" wire:model="title">
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" wire:ignore> <!-- wire:ignore -->
                                <label class="label-control">Content <b class="text-danger">*</b></label>
                                <textarea name="content" id="content" cols="30" rows="10" placeholder="Add content here..." wire:model="content"></textarea>
                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success pull-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="ad-footer-btm">
        <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<script>
    $(function() {

        ClassicEditor
        .create( document.querySelector( '#content' ), {
            ckfinder: {
                options: {
                    skin: 'moono-lisa',
                    backgroundColor: 'rgb(0,0,0)'
                }
            }
        } )
        .then( editor => {
            editor.model.document.on('change:data', (e) => {
                window.livewire.find('<?php echo e($_instance->id); ?>').set('content', editor.getData());
            });
        })
        .catch( error => {
            console.error( error );
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Work\Desktop\Data\TheMovers\ecommerce-laravel-9\resources\views/livewire/admin/pages/create-component.blade.php ENDPATH**/ ?>