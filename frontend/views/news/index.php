<?php

/**
 * @var string $title
 */

use yii\helpers\Html;


echo HTML::tag('h2', $title);

echo HTML::a('Go to a first news', ['news/view', 'id' => 2]);