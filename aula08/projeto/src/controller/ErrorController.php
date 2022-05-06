<?php

declare(strict_types= 1);

class ErrorController extends AbstractController
{
    public function notFound(): void
    {
        parent::render('error/notFound');
    }
}