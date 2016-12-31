<?php

namespace TuniGo\tripBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('NomPrenom')->add('email')->add('nbrPlace')->add('typePaiment',ChoiceType::class, array(
            'choices'  => array('VisaCard' => 'Visa','MasterCard' => 'MasterCard','PayPal' => 'PayPal'),
            'expanded' => true,
            'multiple' => false))->add('idOffre',HiddenType::class)->add('resrver',SubmitType::class)        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TuniGo\tripBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tunigo_tripbundle_reservation';
    }


}
