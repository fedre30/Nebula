<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 21/06/2018
 * Time: 14:42
 */

// src/Admin/MoviesAdmin.php
namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HomeQuestionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('Question', TextType::class);
        $formMapper->add('Page');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('Question');
        $datagridMapper->add('Page');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('Question');
        $listMapper->add('Page');
    }
}