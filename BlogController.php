<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    /**
    *@Route("/blogs")
    */

    public function blogs()
    {
        return new Response(
            '<html><body>I list all the blog posts!</body></html>'
        );
    }
}
