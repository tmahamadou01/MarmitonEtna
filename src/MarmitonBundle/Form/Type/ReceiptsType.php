<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 19/07/17
 * Time: 10:32
 */

namespace MarmitonBundle\Form\Type;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ReceiptsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nom de la recette :',
            ))
            ->add('TypePlat', EntityType::class, array(
                'class' => 'MarmitonBundle:TypePlat',
                'choice_label' => 'TypePlat',
            ))
            ->add('niveau',  ChoiceType::class, array(
                'label' => 'Difficulté :',
                'choices' => array(
                    'Facile' => 'Facile',
                    'Moyen' => 'Moyen',
                    'Difficile' => 'Difficile',
                )))
            ->add('ingredients', TextareaType::class, array(
                'attr' => array('class' => 'tinymce'),
                'label' => 'Ingredients (Saisissez la liste en les séparant par des virgules) :',
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('class' => 'tinymce'),
                'label' => 'Description :',
            ))
            ->add('file', null, array(
                'label' => 'Image de la recette'
            ));

    }
}