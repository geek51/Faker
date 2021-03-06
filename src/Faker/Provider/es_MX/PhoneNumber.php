<?php

namespace Faker\Provider\es_MX;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+52 ## ## ## ## ##',
        '+52 ### ## ## ## ##',
        '## ## ## ## ##',
        '### ## ## ## ##',
        '## #### ####',
        '### #### ####',
        '## ####-####',
        '### ####-####',
        '####-####',
        '##-##-##-##',
        '##-##-##-##-##',
        '## ##-##-##-##',
        '### ##-##-##-##',
        '(###) #### ####',
        '(##) #### ####',
        '(###) ####-####',
        '(##) ####-####',
        '(##) ##-##-##-##',
        '(###) ##-##-##-##',
        '(##) ## ## ## ##',
        '(###) ## ## ## ##',
    );
}
