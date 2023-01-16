<?php

namespace App\Form;

use App\Entity\Game;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'attr' => ['class' => 'form-control']
            ])
            ->add('genre', TextType::class,[
                'attr' => ['class' => 'form-control']
            ])
            ->add('price',IntegerType::class,[
                'attr' => ['class' => 'form-control']
            ])
            ->add('imageName', TextType::class,[
                'attr' => ['class' => 'form-control']
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
