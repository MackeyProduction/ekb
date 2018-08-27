<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                    'style' => 'margin-bottom:1rem;'
                ],
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Vorname',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                    'style' => 'margin-bottom:1rem;'
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nachname',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                    'style' => 'margin-bottom:1rem;'
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Profile',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_profile';
    }
}
