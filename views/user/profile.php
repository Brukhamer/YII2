<?php
/** @var $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?= $this->title  ?>


<?php $form = ActiveForm::begin()?>
<?= $form->field($model, 'login')->textInput()?>
<?= $form->field($model, 'age')->textInput()?>
<?= $form->field($model, 'username')->textInput()?>
<?= $form->field($model, 'password')->passwordInput()?>
<?= $form->field($model, 'passwordRepeat')->passwordInput()?>
<?= Html::submitButton('Сохранить данные')?>
<?php ActiveForm::end()?>
