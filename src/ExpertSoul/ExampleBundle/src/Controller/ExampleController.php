<?php
namespace App\ExpertSoul\ExampleBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController
{
    #[Route('/bundle/example', name: 'expertsoul_example_bundle_example')]
    public function example(): Response
    {
        return new Response(
            '<html><body>Bundle Example Controller</body></html>'
        );
    }
}