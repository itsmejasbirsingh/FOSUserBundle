<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->remove('username')
            ->add('gender', ChoiceType::class, array(
            			'choices'  => array(
						        'Male' => 'm',
						        'Female' => 'f',
						        
    ),
            	));
    }
    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }
}