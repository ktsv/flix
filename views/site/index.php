<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\base\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'URL Shortener for FlixBus interview';
?>
<div>
<?php
ActiveForm::begin ();
echo Html::activeInput ( 'text', $model, 'long' );
echo Html::submitInput ( 'Create' );
ActiveForm::end ();
echo '<h2>Previousely created short links:</h2>';
echo ListView::widget ( [ 
        'dataProvider' => $provider,
        'itemView' => function ($model, $key, $index, $widget) {
        return  '<br><b>http://flix.loc/r/'.$model->short.'</b><br>'.
                Html::a($model->long,$model->long,['target' => '_blank']).'<br>'.
        '<b>created</b>:'. $model->time.'<br><hr>';
        } 
] );

?>
</div>