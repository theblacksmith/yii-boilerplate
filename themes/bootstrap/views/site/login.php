<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php 
/** @var BootActiveForm $form **/
$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id'=>'verticalForm',
	'type' => 'vertical',
    'htmlOptions'=>array('class'=>'well'),
));
?>
	
	<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array(
			'class' => 'span3',
			'hint' => 'Hint: You may login with demo/demo or admin/admin.')); ?>
	<?php echo $form->checkboxRow($model, 'rememberMe'); ?>

	<?php $this->widget('bootstrap.widgets.BootButton', 
			array(
				'buttonType'=>'submit',
				'label'=>'Submit',
				'type'=>'primary'
			)); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->
