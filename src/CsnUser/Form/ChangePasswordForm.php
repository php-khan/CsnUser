<?php
namespace CsnUser\Form;

use Zend\Form\Form;

class ChangePasswordForm extends Form
{
    public function __construct($name = null)
    {
		parent::__construct('registration');
        $this->setAttribute('method', 'post');
	
        $this->add(array(
            'name' => 'currentPassword',
            'attributes' => array(
                'type'  => 'password',
				'placeholder' =>'currently Password',
            ),
            'options' => array(
                'label' => ' ',
            ),
        ));
		
		$this->add(array(
            'name' => 'newPassword',
            'attributes' => array(
                'type'  => 'password',
				'placeholder' =>'New Password',
            ),
            'options' => array(
                'label' => ' ',
            ),
        ));
		
        $this->add(array(
            'name' => 'newPasswordConfirm',
            'attributes' => array(
                'type'  => 'password',
				'placeholder' =>'New Password Confirm',
            ),
            'options' => array(
                'label' => ' ',
            ),
        ));
		
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        )); 
    }
}