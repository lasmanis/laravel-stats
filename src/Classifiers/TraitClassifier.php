<?php

namespace Wnx\LaravelStats\Classifiers;

use Wnx\LaravelStats\Contracts\Classifier;
use Wnx\LaravelStats\ReflectionClass;

class TraitClassifier implements Classifier
{
    public function getName()
    {
        return 'Traits';
    }

    public function satisfies(ReflectionClass $class)
    {
        return $class->isTrait();
    }
}
