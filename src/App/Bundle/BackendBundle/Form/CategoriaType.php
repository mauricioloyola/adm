<?php

namespace App\Bundle\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion','text',array('label' => 'Categoría','max_length' => '50','required' => true, 'attr' => array(
             'placeholder' => 'Ingrese la Categoría','class' => 'form-control')))                        
            ->add('activo', 'checkbox', array('label' => 'Activar','required' => false))            
            /*
            ->add('fchCreate')
            ->add('usrCreate')
            ->add('fchUpdate')
            ->add('usrUpdate')*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\BackendBundle\Entity\Categoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_backendbundle_categoria';
    }
}
