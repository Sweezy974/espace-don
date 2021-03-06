<?php

namespace Donation\DonationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add(
             'category', ChoiceType::class, array(
             'choices' => array(
                 'Electromenager' => 'Electromenager',
                 'Meubles' => 'Meubles',
                 'Fournitures de bureau' => 'Fournitures de bureau',
                 'Multimedia' => 'Multimedia',
                 'Vêtements' => 'Vetement',
                 'Animaux' => 'Animaux',
                 'Bijoux' => 'Bijoux',
                 'Jeux' => 'Jeux',
                 'Autre' => 'Autre',
             ),
             ))
            ;
           
        
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Donation\DonationBundle\Entity\Dons'
        ));
    }
}
