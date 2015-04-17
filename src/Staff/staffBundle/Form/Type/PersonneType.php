<?php
namespace Staff\staffBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class PersonneType
 *
 * @package Staff\staffBundle\Form\Type
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
            ->add('name')
            ->add('prenom')
            ->add('username')
            ->add('DateArrivee', 'date')
            ->add('ServicePrincipal', 'entity', array('class'=> 'StaffstaffBundle:Services'));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'    => 'Staff\staffBundle\Entity\Personnes'
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