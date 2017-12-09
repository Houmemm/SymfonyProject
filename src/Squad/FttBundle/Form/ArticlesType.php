<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleArticle')
            ->add('prix')
            ->add('description')
            ->add('file', 'file')
//            ->add('submit', 'submit', array('label' => 'Ajouter'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Articles'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_articles';
    }
}
