<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'error.passwords_do_not_match',
            'required' => true,
            'first_options'  => ['label' => 'label.new_password'],
            'second_options' => ['label' => 'label.repeat_password'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'error.password_required']),
                new Assert\Length([
                    'min' => 6,
                    'minMessage' => 'error.password_too_short',
                ]),
            ],
        ]);
    }
}
