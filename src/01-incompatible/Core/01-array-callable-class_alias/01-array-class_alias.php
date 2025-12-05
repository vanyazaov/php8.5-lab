<?php

class Test {}

try {
    class_alias(Test::class, 'array');
} catch (Throwable $e) {
    var_dump($e::class, $e->getMessage());
}
