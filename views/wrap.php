<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$content = ListView::widget(['dataProvider' => $provider->getModels(), 'itemView' => $this->context->itemView]);
echo Html::tag($this->context->wrapTag, $content, ['class' => $this->context->wrapClass]);
