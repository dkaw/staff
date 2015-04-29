<?php
namespace Trombinoscope\StaffBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class PersonneType
 *
 * @package Trombinoscope\StaffBundle\Form\Type
 * Created by PhpStorm.
 * User: kawtar
 * Date: 16/04/15
 * Time: 15:40
 */
class PersonneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text',array(
                'label'=> 'Name',
                'required'=> true,
                'attr'     => array(
                    'style'     => 'width: 20%',
                )
            ))
            ->add('prenom', 'text',array(
                'label'=> 'Prenom',
                'required'=>true,
                'attr'    =>array(
                   'style' =>'width:20%'
    )
            ))
            ->add('username', 'text',array(
                'label'=>'Username',
                'required'=>true,
                'attr'    =>array(
                    'style' =>'width:20%'
                )

            ))
            ->add('DateArrivee', 'date',array(
                'required'=>false,
                'attr'    =>array(
                    'style' =>'width:20%'
                )
            ))
            ->add('ServicePrincipal', 'entity', array(
                'class'=> 'TrombinoscopeStaffBundle:Services',
                'attr'    =>array(
                    'style' =>'width:20%'
                ),
                'empty_data' => null,
                'empty_value' => ''
            ))
            ->add('nomPhoto', 'text',array(
                'label'=>'Nom photo',
                'required'=>true,
                'attr'    =>array(
                    'style' =>'width:20%'
                )

            ))
            ->add('photo' ,'textarea',array(
                'label'=>'Photo',
                'required'=>true
            ))
;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'    => 'Trombinoscope\StaffBundle\Entity\Personnes'
        ));
    }
   /**
   * Returns the name of this type.
   *
   * @return string The name of this type
   */
      public function getName()
      {
          return 'personne';
      }
  }