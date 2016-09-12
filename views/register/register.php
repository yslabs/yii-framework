<h2>Registration Form</h2>
<div class="form">
<?php echo CHtml::beginForm(); ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'Name'); ?>
        <?php echo CHtml::activeTextField($model,'name') ?>
    </div>


    <div class="row">
        <?php echo CHtml::activeLabel($model,'email'); ?>
        <?php echo CHtml::activeTextField($model,'email') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'password'); ?>
        <?php echo CHtml::activePasswordField($model,'password') ?>
    </div>

    
    <div class="row submit">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>

    <?php echo CHtml::endForm(); ?>
</div>