<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <p>All Seo</p>
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
                        <li class="breadcrumb-link">SEO</li>
                        <li class="breadcrumb-link active">View</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- From Start -->

    <div class="from-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5>All Available&nbsp;(<?php echo e($seos->count()); ?>)</h5>
                            <div class="pull-right">
                                <select name="perPage" id="perPage" class="form-control" wire:model="perPage">
                                    <option value="" selected disabled>Sort By Size</option>
                                    <option value="8">8</option>
                                    <option value="12">12</option>
                                    <option value="16">16</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>

                                </select>
                            </div>
                            <div class="pull-right">
                                <input type="text" name="search" id="search" placeholder="search here" class="form-control" wire:model.debounce.500ms="search">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-styled mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Page Name</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>URL</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    ?>
                                    <?php $__currentLoopData = $seos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($seo->id); ?></td>
                                        <td>
                                            <?php echo e($seo->page_name); ?>

                                        </td>
                                        <td> <?php echo e($seo->title); ?>

                                        </td>
                                        <td><?php echo e($seo->type); ?></td>
                                        <td><?php echo e($seo->url); ?></td>
                                        <td><?php echo e($seo->description); ?></td>
                                        
                                        <td class="relative ">
                                            <a class="action-btn " href="javascript:void(0); ">
                                                <svg class="default-size " viewBox="0 0 341.333 341.333 ">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z "></path>
                                                                <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z "></path>
                                                                <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z "></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                            <div class="action-option ">
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo e(route('admin.seo.edit',['id'=>$seo->id])); ?>"><i class="fa fa-edit mr-2 "></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a wire:click="seoDelete(<?php echo e($seo->id); ?>)"><i class="fa fa-trash mr-2 "></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($seos->links("pagination::bootstrap-4")); ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="ad-footer-btm">
        <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
    </div>
</div>
<?php /**PATH C:\Users\Work\Desktop\Data\TheMovers\ecommerce-laravel-9\resources\views/livewire/admin/seo/view-component.blade.php ENDPATH**/ ?>