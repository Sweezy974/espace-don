<?php

namespace Donation\DonationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType;


class RegistrationAssociationType extends RegistrationFormType {


    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
                ->add('associationname', null, [
                    "label" => "Nom Association"
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
        return 'donation_association_registration';

    }

}
