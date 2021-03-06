<?php

namespace TW\frontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReclamationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('date')
                ->add('heure')
                ->add('description')
                //->add('etat')
                ->add('iddomaine', 'entity', array('label' => 'domaine', 'class' => 'TW\frontOfficeBundle\Entity\Domaine'))
                ->add('idlieu', 'entity', array('label' => 'lieu', 'class' => 'TW\frontOfficeBundle\Entity\Lieu'))
                ->add('documents', 'collection', array('type'         => new DocumentType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TW\frontOfficeBundle\Entity\Reclamation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'tw_frontofficebundle_reclamation';
    }

}
