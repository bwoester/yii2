<?php
use yii\helpers\Html;
/**
 * @var yii\base\View $this
 * @var yii\widgets\ActiveForm $form
 * @var app\models\LoginForm $model
 */
$this->title = 'Login';
?>
<h1><?php echo Html::encode($this->title); ?></h1>

<p>Please fill out the following fields to login:</p>

<?php $form = $this->beginWidget('yii\widgets\ActiveForm', array('model' => $model, 'options' => array('class' => 'form-horizontal'))); ?>
	<?php echo $form->field('username')->textInput(); ?>
	<?php echo $form->field('password')->passwordInput(); ?>
	<?php echo $form->field('rememberMe')->checkbox(); ?>
	<div class="form-actions">
		<?php echo Html::submitButton('Login', null, null, array('class' => 'btn btn-primary')); ?>
	</div>
<?php $this->endWidget(); ?>