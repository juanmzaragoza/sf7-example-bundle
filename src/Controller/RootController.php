<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RootController
{
    #[Route('/root/example', name: 'root_example')]
    public function example(): Response
    {
        return new Response(
            '<html><body>Example Controller</body></html>'
        );
    }
}