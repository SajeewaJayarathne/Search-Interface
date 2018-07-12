<?php $__env->startSection('title'); ?>
    Solr Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="search-bar" class="row" style="height: 20%; padding-top: 5%; padding-bottom: 5%">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Keyword(s)">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div> 
    
    <div class="results-container">
        <div class="row">
            <h2>Search</h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>