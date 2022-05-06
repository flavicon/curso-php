<?php

declare(strict_types=1);

class IndexController extends AbstractController
{
    public function home(): void
    {
        parent::render('index/home');
    }
}