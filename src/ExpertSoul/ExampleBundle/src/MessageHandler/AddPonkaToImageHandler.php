<?php
namespace App\ExpertSoul\ExampleBundle\MessageHandler;

use App\ExpertSoul\ExampleBundle\Message\AddPonkaToImage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class AddPonkaToImageHandler
{

    public function __invoke(AddPonkaToImage $addPonkaToImage)
    {
        dump("object dumped", $addPonkaToImage);
    }

}