<?php

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Admin;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class SettingsCurrentAdmin.
 */
class SettingsCurrentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('variable')
            ->add('subkey')
            ->add('type')
            ->add('category')
            ->add('selectedValue')
            ->add('comment', CKEditorType::class)
            ->add('accessUrl')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('variable')
            ->add('category')
            ->add('accessUrl')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('variable')
            ->add('selected_value')
            ->add('category')
        ;
    }
}
