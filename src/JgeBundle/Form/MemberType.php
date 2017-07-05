<?php

namespace JgeBundle\Form;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackTransformer;


class MemberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array('label'=>'Nom '))
            ->add('lastname', TextType::class, array('label'=>'Prénom '))
            ->add('licenceNum', TextType::class, array('label'=>'N° de licence '))
            ->add('role', ChoiceType::class, array(
                'label'=>'Rôle(s) ',
                'choices'=> array(
                    'Joueur'=>'player',
                    'Entraîneur'=>'coach',
                    'Responsable'=>'responsible',
                    'Rédacteur'=>'author',
                ),
                'expanded' => true,
                'multiple'=> true,
            ))
            ->add('dateOfBirth', DateType::class, array('label'=>'Date de naissance '))
            ->add('email', EmailType::class, array('label'=>'Email(s) '))
            ->add('password', TextType::class, array('label'=>'Mot de passe '))
            ->add('telNumber', TextType::class, array('label'=>'N° de téléphone '))
            ->add('sex', ChoiceType::class, array('label'=>'Sexe ', 'choices'=> array('Masculin'=>'m', 'Féminin'=>'f')))
            ->add('shoeSize', TextType::class, array('label'=>'Pointure '))
            ->add('heigth', TextType::class, array('label'=>'Taille (en cm) '));
    }

    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JgeBundle\Entity\Member'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jgebundle_member';
    }


    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options
     *
     * @deprecated since version 2.7, to be renamed in 3.0.
     *             Use the method configureOptions instead. This method will be
     *             added to the FormTypeInterface with Symfony 3.0.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        // TODO: Implement setDefaultOptions() method.
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     *
     * @deprecated Deprecated since Symfony 2.8, to be removed in Symfony 3.0.
     *             Use the fully-qualified class name of the type instead.
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}
