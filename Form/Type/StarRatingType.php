<?php

namespace Nurikabe\StarRatingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StarRatingType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'star_rating';
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
