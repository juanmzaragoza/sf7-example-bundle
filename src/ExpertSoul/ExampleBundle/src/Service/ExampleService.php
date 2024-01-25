<?php
namespace App\ExpertSoul\ExampleBundle\Service;

class ExampleService
{
    public function getNumber(): string
    {

        $index = rand(0, 100);

        return $index;
    }

}