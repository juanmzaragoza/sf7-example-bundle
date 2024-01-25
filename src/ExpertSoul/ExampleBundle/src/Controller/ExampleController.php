<?php
namespace App\ExpertSoul\ExampleBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\ExpertSoul\ExampleBundle\Service\ExampleService;

class ExampleController
{
    #[Route('/bundle/example', name: 'expertsoul_example_bundle_example')]
    public function example(ExampleService $exampleService): Response
    {
        return new Response(
            '<html><body><p>Bundle Example Controller</p><p>'+$exampleService->getNumber()+'</p></body></html>'
        );
    }
}