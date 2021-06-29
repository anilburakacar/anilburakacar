<?php

namespace App\Service;

class NameGenerator
{
    public function randomName()
    {
        $names = [
            'Bahram',
            'Selim',
            'Ayşe',
            'Zeynep'
        ];

        $index = array_rand($names);

        return $names[$index];
    }
}

?>