<?php

/**
 * @author Chandan Kumar <chandan.k@echidnainc.com>
 */

namespace Echidna\Yves\ContactUs\Form;

use Spryker\Yves\Kernel\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactUsForm extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix(): string
    {
        return 'ContactUsForm';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addFormField($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */
    private function addFormField(FormBuilderInterface $builder)
    {
        $builder->add('Name', TextType::class, [
            'required' => true,
            'label' => 'Name',
            'constraints' => [
                new NotBlank(),
                new Length(['min' => 1, 'max' => 255]),
            ],
        ])->add('Email', EmailType::class, [
            'required' => true,
            'label' => 'Email',
            'constraints' => [
                new NotBlank(),
            ],
        ])->add('Contact', NumberType::class, [
            'required' => true,
            'label' => 'Contact No.',
            'constraints' => [
                new NotBlank(),
                new Length(['min' => 1, 'max' => 10]),
            ],
        ])->add('Message', TextareaType::class, [
            'required' => true,
            'label' => 'Message/Enquiry Details',
            'constraints' => [
                new NotBlank(),
            ],
        ])->add('save', SubmitType::class, [
            'attr' => [
                'class' => 'button btn-success',
                'style' => 'margin-top:11px',
            ],

        ]);

        return $this;
    }
}
