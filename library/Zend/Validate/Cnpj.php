<?php

/**
 * Validador para Cadastro de Pessoa Física
 *
 * @author   Wanderson Henrique Camargo Rosa
 * @category Hazel
 * @package  Hazel_Validator
 */
class Zend_Validate_Cnpj extends Zend_Validate_cpfCnpjAbstract
{
    /**
     * Tamanho do Campo
     * @var int
     */
    protected $_size = 14;
 
    /**
     * Modificadores de Dígitos
     * @var array
     */
    protected $_modifiers = array(
        array(5,4,3,2,9,8,7,6,5,4,3,2),
        array(6,5,4,3,2,9,8,7,6,5,4,3,2)
    );
}
?>
