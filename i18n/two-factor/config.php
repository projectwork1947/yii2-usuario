<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
    'sourcePath' => __DIR__ . '/../../../Usuario/TwoFA',
    'messagePath' => __DIR__,
    'languages' => [
        'ca',
        'da',
        'de',
        'de-DU',
        'es',
        'et',
        'fa-IR',
        'fi',
        'fr',
        'hr',
        'hu',
        'it',
        'kk',
        'lt',
        'nl',
        'pl',
        'pt-BR',
        'pt-PT',
        'ro',
        'ru',
        'th',
        'tr-TR',
        'uk',
        'vi',
        'zh-CN',
    ],
    'translator' => 'Yii::t',
    'sort' => false,
    'overwrite' => true,
    'removeUnused' => false,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
    ],
    'format' => 'php',
];
