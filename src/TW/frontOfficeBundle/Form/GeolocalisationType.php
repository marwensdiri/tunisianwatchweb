<?php

namespace TW\frontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GeolocalisationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lon')
            ->add('lat')
            ->add('idreclamation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TW\frontOfficeBundle\Entity\Geolocalisation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tw_frontofficebundle_geolocalisation';
    }
}
