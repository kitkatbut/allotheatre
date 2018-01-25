<?php


namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('username', TextType::class)
            ->add('adresse', TextType::class)
            ->add('code_postal', TextType::class)
            //->add('email', choiceType::class,
                //array('choices' => array(
                //  'Professionnel'=> 1,
                //  'Particulier' => 2),
                //Dans l'ordre libellé et value
                //'expanded'=>false,
                //'multiple'=>false))
            //expanded false + multiple false = select
            //expanded true + multiple false = radio
            //expanded true + multiple true = checkbox
            //->add('dateService', DateType::class,
                //Pour avoir un seul champs date
                //Par défault, tous les champs sont required
                //array('widget' => 'single_text',
                     // 'required'=> false))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Inscription::class,
        ));
    }

}

