<?php
/**
 * Created by PhpStorm.
 * User: ilaoniu
 * Date: 2019/7/29
 * Time: 20:05
 */

return [
    'diff_options' => [
        // show how many neighbor lines
        'context' => 3,
        // ignore case difference
        'ignoreCase' => false,
        // ignore whitespace difference
        'ignoreWhitespace' => false,
    ],
    'renderer_options' => [
        // how detailed the rendered HTML in-line diff is? (none, line, word, char)
        'detailLevel' => 'line',
        // renderer language: eng, cht, chs, jpn, ...
        // or an array which has the same keys with a language file
        'language' => 'chs',
        // show a separator between different diff hunks in HTML renderers
        'separateBlock' => true,
        // the frontend HTML could use CSS "white-space: pre;" to visualize consecutive whitespaces
        // but if you want to visualize them in the backend with "&nbsp;", you can set this to true
        'spacesToNbsp' => false,
        // HTML renderer tab width (negative = do not convert into spaces)
        'tabSize' => 4,
        // internally, ops (tags) are all int type but this is not good for human reading.
        // set this to "true" to convert them into string form before outputting.
        'outputTagAsString' => true,
    ],
];