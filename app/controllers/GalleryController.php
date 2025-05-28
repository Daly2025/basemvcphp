<?php

namespace formacom\controllers;

use formacom\core\Controller;

class GalleryController extends Controller
{
    public function index(...$params)
    {
        $this->view('index');
    }
}