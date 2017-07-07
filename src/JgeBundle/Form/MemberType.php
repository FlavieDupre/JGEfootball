<?php

namespace JgeBundle\Form;

use JgeBundle\Entity\Role;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;



class MemberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        Création des champs du formulaire d'ajout de membre
        $builder
            ->add('firstname', TextType::class, array(
                'label' => 'Nom ',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 3,
                        'max' => 50,
                    ])],
            ))
            ->add('lastname', TextType::class, array(
                'label' => 'Prénom ',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 3,
                        'max' => 50,
                    ])],
            ))
            ->add('licenceNum', TextType::class, array(
                'label' => 'N° de licence ',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 3,
                        'max' => 12,
                    ])],
            ))
            ->add('role', EntityType::class, array(
                'class' => Role::class,
                'choice_label' => 'name',
                'multiple'      => true,
                'expanded'      => true
            ))
            ->add('dateOfBirth', DateType::class, array(
                'label' => 'Date de naissance ',
                'years' => range(date('Y') - 70, date('Y')),
            ))
            ->add('email1', EmailType::class, array(
                'label' => 'Email 1',
                'attr' => array(
                    'placeholder' => 'ex. : adresse@domaine.tld',
                ),
            ))
            ->add('email2', EmailType::class, array(
                'label' => 'Email 2 (optionnel)',
                'required' => false,
            ))
            ->add('password', TextType::class, array(
                'label' => 'Mot de passe '
            ))
            ->add('telNumber1', TextType::class, array(
                'label' => 'N° de téléphone 1',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 10,
                        'max' => 10,
                    ])],
            ))
            ->add('telNumber2', TextType::class, array(
                'label' => 'N° de téléphone 2 (optionnel)',
                'required' => false,
                'constraints' => [
                    new Constraints\Length([
                        'min' => 10,
                        'max' => 10,
                    ])],

            ))
            ->add('sex', ChoiceType::class, array(
                'label' => 'Sexe ',
                'choices' => array(
                    'Masculin' => 'm',
                    'Féminin' => 'f')
            ))
            ->add('shoeSize', TextType::class, array(
                'label' => 'Pointure ',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 1,
                        'max' => 2,
                    ])],
            ))
            ->add('heigth', TextType::class, array(
                'label' => 'Taille ',
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\Length([
                        'min' => 2,
                        'max' => 3,
                    ])],
                'attr' => array(
                    'placeholder' => 'en cm',
                ),

            ))
        ;
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
