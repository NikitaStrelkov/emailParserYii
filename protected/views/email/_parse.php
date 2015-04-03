<?php
/* @var $this EmailController */
/* @var $model Email */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'email-add-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Please, enter sitename</p>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model,'site'); ?>
        <?php echo $form->urlField($model,'site',array()); ?>
        <?php echo $form->error($model,'site'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Get Email'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->