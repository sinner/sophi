<?php
    namespace Sophi\UserBundle\Form\Type;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;
    use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

    class RegistrationFormType extends BaseType
    {
        private $class;

        /**
         * @param string $class The User class name
         */
        public function __construct($class)
        {
            $this->class = $class;
        }

        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            //parent::buildForm($builder, $options);
            $builder
                ->add('username', null, array('label' => 'Usuario', 'translation_domain' => 'FOSUserBundle'))
                ->add('email', 'email', array('label' => 'Correo Electrónico', 'translation_domain' => 'FOSUserBundle'))
                ->add('firstName', 'text', array('label' => 'Nombre', 'translation_domain' => 'FOSUserBundle'))
                ->add('lastName', 'text', array('label' => 'Apellido', 'translation_domain' => 'FOSUserBundle'))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'Clave'),
                    'second_options' => array('label' => 'Confirme su Clave'),
                    'invalid_message' => 'La clave y su confirmación no coinciden.',
                ))
            ;
        }

        public function setDefaultOptions(OptionsResolverInterface $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => $this->class,
                'intention'  => 'registration',
            ));
        }

        public function getName()
        {
            return 'sophi_user_registration';
        }
    }