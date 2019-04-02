<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class WelcomeController
{
    public function hello()
    {
        return new Response("
        <html><body>hello Mathieu</body> </html>"
    );
    }

}