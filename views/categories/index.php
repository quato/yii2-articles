<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-articles
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-articles
* @version 0.4.0
*/

use yii\helpers\Html;
use kartik\grid\GridView;
use cinghie\articles\assets\ArticlesAsset;

// Load Articles Assets
ArticlesAsset::register($this);
$asset = $this->assetBundles['cinghie\articles\assets\ArticlesAsset'];

// Set Title
$this->title = Yii::t('articles', 'Categories');

// Render Yii2-Articles Menu
echo Yii::$app->view->renderFile('@vendor/cinghie/yii2-articles/views/default/_menu.php');

?>

<div class="categories-index">
	
    <div class="page-header">
    	<h1><?= Html::encode($this->title) ?></h1>
    </div>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <!-- Categories Grid -->
    <div class="categories-grid"> 
        <?= GridView::widget([
            'dataProvider'=> $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
				[
					'class' => '\kartik\grid\CheckboxColumn'
				],
				'name',
				[
					'attribute' => 'parentid',
					'value'     => 'parent.name'
				],
				'access',
				[
					'attribute' => 'image',
					'format' => 'html',
					'hAlign' => 'center',
					'value' => function ($model, $key, $index, $column) {
						if ($model->image) {
							return Html::img($model->getImageThumbUrl("small"),
								['width' => '36px']);
						}
					},
					'width' => '8%',
				],
				[
					'attribute' => 'language',
					'width' => '7%',
					'hAlign' => 'center',
				],
				[ 
					'class' => '\kartik\grid\BooleanColumn',
					'attribute' => 'published',
					'trueLabel' => '1',
					'falseLabel' => '0',
					'hAlign' => 'center'
				],
				[
					'attribute' => 'id',
					'width' => '6%',
					'hAlign' => 'center',
				],
				[
					'class' => '\kartik\grid\ActionColumn',
				]
			],
            'responsive' => true,
            'hover' => true,
			'panel' => [
				'heading'    => '<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i></h3>',
				'type'       => 'success',
				'before'     => Html::a(
					'<i class="glyphicon glyphicon-plus"></i> '.Yii::t('articles', 'Create Category'), ['create'], ['class' => 'btn btn-success']
				),				
				'after'      => Html::a(
					'<i class="glyphicon glyphicon-repeat"></i> '.Yii::t('articles', 'Reset Grid'), ['index'], ['class' => 'btn btn-info']
				),
				'showFooter' => false
			],
        ]); ?>
	</div>

</div>
