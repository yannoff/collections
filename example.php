#!/usr/bin/env php
<?php
require_once __DIR__ . "/vendor/autoload.php";

use Yannoff\Component\Collections\Collection;

function title($title)
{
    printf("\n%s:\n", $title);
}
$array = [
    'first' => 'PSG',
    'second' => 'LOSC',
    'third' => 'OL',
];

$collection = new Collection($array);

$array['fourth'] = 'OM';
echo "--------- Array ---------\n";
title("foreach");
foreach ($array as $key => $item) {
    printf("%s: %s\n", $key, $item);
}
title("print_r(\$array)");
print_r($array);

$collection['fourth'] = 'OM';

echo "------ Collection -------\n";
title("foreach");
foreach ($collection as $key => $item) {
    printf("%s: %s\n", $key, $item);
}
title("print_r(\$collection->all())");
print_r($collection->all());
