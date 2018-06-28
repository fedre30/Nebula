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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class FactSheetsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('tab_title', TextType::class);
        $formMapper->add('category', TextType::class);
        $formMapper->add('main_title', TextType::class);
        $formMapper->add('video_description_title', TextType::class);
        $formMapper->add('video_description_text', TextareaType::class);
        $formMapper->add('video_src', TextType::class);
        $formMapper->add('video_alt', TextType::class);
        $formMapper->add('explanation_title', TextType::class);
        $formMapper->add('explanation_text', TextareaType::class);
        $formMapper->add('scientific_fact_title', TextType::class);
        $formMapper->add('scientific_fact_text', TextareaType::class);
        $formMapper->add('releaseDate', IntegerType::class);
        $formMapper->add('Img_src');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('tab_title');
        $datagridMapper->add('category');
        $datagridMapper->add('main_title');
        $datagridMapper->add('video_description_title');
        $datagridMapper->add('video_description_text');
        $datagridMapper->add('video_src');
        $datagridMapper->add('video_alt');
        $datagridMapper->add('explanation_title');
        $datagridMapper->add('explanation_text');
        $datagridMapper->add('scientific_fact_title');
        $datagridMapper->add('scientific_fact_text');
        $datagridMapper->add('releaseDate');
        $datagridMapper->add('Img_src');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('tab_title');
        $listMapper->addIdentifier('category');
        $listMapper->addIdentifier('main_title');
        $listMapper->addIdentifier('video_description_title');
        $listMapper->addIdentifier('video_description_text');
        $listMapper->addIdentifier('video_src');
        $listMapper->addIdentifier('video_alt');
        $listMapper->addIdentifier('explanation_title');
        $listMapper->addIdentifier('explanation_text');
        $listMapper->addIdentifier('scientific_fact_title');
        $listMapper->addIdentifier('scientific_fact_text');
        $listMapper->addIdentifier('releaseDate');
        $listMapper->addIdentifier('Img_src');
    }
}