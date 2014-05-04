<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TW\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')    
            ->add('username', null, array('label' => 'Prenom', 'translation_domain' => 'FOSUserBundle'))
            ->add('Sexe', 'choice', array(
             'choices' => array('m' => 'Homme', 'f' => 'Femme'),
             'multiple' => false,
              ))
            ->add('dateNaissance', 'date', array(
             'input'  => 'datetime',
             'widget' => 'choice',
              ))
            ->add('email', 'email', array('label' => 'Email', 'translation_domain' => 'FOSUserBundle'))
            ->add('Login')     
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Retype'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('Adress')     
                           
              
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    public function getName()
    {
        return 'TW_user_registration';
    }
}
