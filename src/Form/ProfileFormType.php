<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseProfileFormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->remove('email')
            ->remove('current_password')
            ->add('firstName')
            ->add('lastName')
            ->add('gender', ChoiceType::class, array(
            			'choices'  => array(
						        'Male' => 'm',
						        'Female' => 'f',
						        
    ),
            	));
    }
    public function getParent()
    {
        return BaseProfileFormType::class;
    }
}