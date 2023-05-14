<?php

namespace Modules\Math\Test;

use Modules\Math\Math;

test('add', function () {
    $math = new Math();
    $result = $math->add(1, 2);
    
    expect($result)->toBe(3);
});
