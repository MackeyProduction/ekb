<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Benutzername',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                ],
            ])
            ->add('shortcut', TextType::class, [
                'label' => 'Kürzel',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                ],
            ])
            ->add('profile', ProfileType::class, [
                'label' => false,
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Passwort',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true,
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\User',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }
}
