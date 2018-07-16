<?php
/**
 * EasyGo implementation of HiPanel
 *
 * @link      https://github.com/hiqdev/easygo-hipanel
 * @package   easygo-hipanel
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::setAlias('@easygo/hipanel', dirname(__DIR__) . '/src');
