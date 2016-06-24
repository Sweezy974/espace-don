<?php

namespace Donation\DonationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class RegistrationUsersType extends AbstractType {
    
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
                ->add('lastname', null, [
                    "label" => "Nom"
                ])
                ->add('firstname', null, [
                    "label" => "Prénom"
                ])
                ->add('adress', null, [
                    "label" => "Adresse"
                ])
                ->add('phone', null, [
                    "label" => "Numéro de téléphone"
                ])
        ;
    }
        
        
        
    public function getParent(){
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    
     public function getBlockPrefix(){
        return 'app_user_registration';
    }
    
    public function getName(){
        return 'donation_user_registration';
        
    }
    
}