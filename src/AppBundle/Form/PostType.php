<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Vich\UploaderBundle\Form\Type\VichImageType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                  'attr'  => array(
                      'class' => 'form-control',
                      'autocomplete'  => 'off',
                      'placeholder' => 'Titre de l\'article'
                  )
            ))
            ->add('resume', null, array(
                    'attr'  => array(
                        'class' => 'form-control',
                        'autocomplete'  => 'off',
                        'placeholder' => 'Resumé de l\'article',
                        'rows' => '5'
                    )
              ))
            ->add('contenu', CKEditorType::class)
            ->add('tag', null, array(
                  'attr'  => array(
                      'class' => 'form-control tag-input',
                      'data-role' => "tagsinput",
                  )
            ))
            ->add('statut')
            //->add('imageName')->add('imageSize')->add('updatedAt')->add('slug')
            //->add('publiePar')->add('modifiePar')->add('publieLe')->add('modifieLe')
            ->add('imageFile', VichImageType::class, array(
                  'required' => false,
                  'allow_delete' => true,
              ))
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_post';
    }


}
