<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php 
/** @var BootActiveForm $form **/
$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id'=>'contact-form',
	'type' => 'vertical',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions'=>array('class'=>'well'),
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name'); ?>
	
	<?php echo $form->textFieldRow($model,'email'); ?>
	
	<?php echo $form->textFieldRow($model,'subject',array('maxlength'=>128, 'class'=>'span6')); ?>
	
	<?php echo $form->textAreaRow($model,'body',array('class' => 'span6', 'rows'=>6, 'cols'=>150)); ?>
	<br/>
	<?php $this->widget('CCaptcha'); ?>
	<?php echo $form->textFieldRow($model,'verifyCode',
				array('hint' => 'Please enter the letters as they are shown in the image above.<br />Letters are not case-sensitive.')); ?>
		
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
					'buttonType'=>'submit', 
					'type'=>'primary', 
					'label'=>'Submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>