<?php

function render(array $data, string $file): void {
    require __DIR__ . "/../view/$file-view.php";
} 