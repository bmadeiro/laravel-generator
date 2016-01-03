<?php

namespace Peaches\Generator\Generators;

interface GeneratorInterface
{
    public function getTemplatePath();

    public function getType();

    public function generate($data = []);
}
