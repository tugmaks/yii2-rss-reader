<?php

use yii\helpers\Html;
use yii\widgets\ListView;

$content = ListView::widget(['dataProvider' => $provider, 'itemView' => $this->context->itemView, 'layout' => "{items} \n {pager}"]);
echo Html::tag($this->context->wrapTag, $content, ['class' => $this->context->wrapClass]);
