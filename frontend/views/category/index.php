<?php

/**
 * @var string $title
 */

use yii\helpers\Html;


echo HTML::tag('h2', $title);

echo HTML::a('Go to a view page', ['category/view', 'id' => 19]);