<?php
namespace App\ExpertSoul\ExampleBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ExpertSoulExampleBundle extends AbstractBundle
{

    public function getPath(): string
    {
        return __DIR__;
    }

}