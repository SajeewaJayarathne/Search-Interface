<?php $__env->startSection('title'); ?>
    Solr Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="search-bar" class="row" style="height: 20%; padding-top: 5%; padding-bottom: 5%">
        <?php echo $__env->make('includes/search-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    </div> 
    
    <div class="results-container">
        <h3>Search</h3>

        
        <?php echo $__env->make('includes/search-menu-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

        
        <div class="results" style="padding: 1.5%">
            <?php echo $__env->make('includes/empty', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>