<?php

include dirname(__DIR__).'/Tree.php';

$data = include __DIR__."/data.php";

print_r(Tree::makeTree($data));

