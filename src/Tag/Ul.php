<?php

namespace SavioASR\Solid\Tag;

class Ul
{
    public function render($content)
    {
        return '<ul>'.$content.'</ul>';
    }
}