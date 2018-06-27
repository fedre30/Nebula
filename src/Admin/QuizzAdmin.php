<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class QuizzAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('Question', TextType::class);
        $formMapper->add('firstAnswer');
        $formMapper->add('firstAnswerCorrection');
        $formMapper->add('secondAnswer', TextType::class);
        $formMapper->add('secondAnswerCorrection');
        $formMapper->add('thirdAnswer', TextType::class);
        $formMapper->add('thirdAnswerCorrection');
        $formMapper->add('Page');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('Question');
        $datagridMapper->add('firstAnswer');
        $datagridMapper->add('firstAnswerCorrection');
        $datagridMapper->add('secondAnswer');
        $datagridMapper->add('secondAnswerCorrection');
        $datagridMapper->add('thirdAnswer');
        $datagridMapper->add('thirdAnswerCorrection');
        $datagridMapper->add('Page');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('Question');
        $listMapper->add('firstAnswer');
        $listMapper->add('firstAnswerCorrection');
        $listMapper->add('secondAnswer');
        $listMapper->add('secondAnswerCorrection');
        $listMapper->add('thirdAnswer');
        $listMapper->add('thirdAnswerCorrection');
        $listMapper->add('Page');
    }
}