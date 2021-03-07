<?php

/*
 * This file is part of isamuraii/op-dark-mode-tuning.
 *
 * Copyright (c) 2021 wonderbeel.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace AISamuraii\OPDarkModeTuingkModeTuning;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    
    
];
