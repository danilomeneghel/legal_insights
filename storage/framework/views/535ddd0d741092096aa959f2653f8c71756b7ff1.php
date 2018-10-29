<?php $__env->startSection('content'); ?>

<h2 class="page-header">Cliente</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/clientes'.( isset($model) ? "/" . $model->id : ""))); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <?php if(isset($model)): ?>
                <input type="hidden" name="_method" value="PATCH">
            <?php endif; ?>

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo e(isset($model['nome']) ? $model['nome'] : ''); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo e(isset($model['email']) ? $model['email'] : ''); ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/clientes')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>