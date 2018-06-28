<?php

namespace App\Form;

use App\Entity\FactSheets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactSheetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tab_title')
            ->add('category')
            ->add('main_title')
            ->add('video_description_title')
            ->add('video_description_text')
            ->add('video_src')
            ->add('video_alt')
            ->add('explanation_title')
            ->add('explanation_text')
            ->add('scientific_fact_title')
            ->add('scientific_fact_text')
            ->add('homeQuestions')
            ->add('releaseDate')
            ->add('Img_src')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FactSheets::class,
            'csrf_protection' => false
        ]);
    }
}
