<?php

namespace SavioASR\Solid\Tag;

class A
{
    public function render($href, string $ancor)
    {
        return '<a href="'.$href.'">'.$ancor.'</a>';
    }
}