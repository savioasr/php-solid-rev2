<?php

namespace SavioASR\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderizaUmaImagem()
    {
        $html = new Html;
        $img  = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComImagemComAncora()
    {
        $html = new Html;
        $img  = $html->img('images/photo.jpg');
        $link = $html->a('http://seusite.com/perfil', $img);

        $this->assertEquals('<a href="http://seusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
    }

    public function testCriaUmaLista()
    {
        $html = new Html;
        $list  = $html->ul('<li>Savio</li>');

        $this->assertEquals('<ul><li>Savio</li></ul>', $list);
    }
}