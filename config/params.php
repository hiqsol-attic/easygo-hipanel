<?php
/**
 * EasyGo implementation of HiPanel
 *
 * @link      https://github.com/hiqdev/easygo-hipanel
 * @package   easygo-hipanel
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

return [
    'ticket.canSetSpent' => function ($model) {
        return is_array($model->topics) && array_key_exists('vds', $model->topics);
    },
];
