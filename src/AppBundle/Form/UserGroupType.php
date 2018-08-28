<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserGroupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', ChoiceType::class, [
            'label' => 'Benutzergruppe',
            'choices' => [
                'Schüler' => 'ROLE_STUDENT',
                'Lehrer' => 'ROLE_TEACHER',
                'Administrator' => 'ROLE_SUPER_ADMIN',
            ],
            'attr' => [
                'class' => 'form-control',
                'required' => true,
                'style' => 'margin-bottom:1rem;',
            ],
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UserGroup'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usergroup';
    }


}
