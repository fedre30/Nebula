<?php

namespace App\Form;

use App\Entity\Quizz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Question')
            ->add('firstAnswer')
            ->add('firstAnswerCorrection')
            ->add('secondAnswer')
            ->add('secondAnswerCorrection')
            ->add('thirdAnswer')
            ->add('thirdAnswerCorrection')
            ->add('Page')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Quizz::class,
            'csrf_protection' => false
        ]);
    }
}
