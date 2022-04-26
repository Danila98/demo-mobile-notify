
<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
// стилизованная версия под bootstrap 3
// use yii\bootstrap\ActiveForm
use yii\helpers\Html;

$this->title = 'Обратная связь';
?>
<div class="site-feedback">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'number')->textInput()->label('Куда'); ?>
        <?= $form->field($model, 'message')->textInput()->label('Текст'); ?>
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']); ?>
    <?php ActiveForm::end(); ?>
</div>