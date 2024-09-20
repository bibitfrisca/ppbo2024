<?php

namespace App\Model\Pustaka;

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type): array
    {
        $result = [];
        if ($type == 'name') {
            $result = ['name'=> $this->name];
        } elseif ($type == 'description'){
            $result = ['descriprion'=> $this->description];
        } elseif ($type == 'all'){
            $result = [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        return $result;
    }
}