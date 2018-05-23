<?php

interface Passaro
{
    public function anda();
    public function nada();
}

interface PassaroQueVoa extends Passaro
{
    public function voa();
}

class Andorinha implements PassaroQueVoa
{
    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
    
    public function voa()
    {
        //
    }
}

class Pinguin implements Passaro
{
    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
}