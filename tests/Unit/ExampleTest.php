<?php

test('test that true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
});
