<?php

namespace Acme\PizzaBundle\Form\Type;

use
    Symfony\Component\Form\Type\AbstractType,
    Symfony\Component\Form\FormBuilder
    ;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('address', new AddressType())
            ->add('items', 'collection', array(
                'type'       => new PizzaItemType(),
                'modifiable' => true,
            ))
            ->end()
            ;
    }
}