<?php


require_once 'Zend/Gdata/Extension.php';

class Zend_Gdata_YouTube_Extension_QueryString extends Zend_Gdata_Extension
{

    protected $_rootElement = 'queryString';
    protected $_rootNamespace = 'yt';

    public function __construct($text = null)
    {
        $this->registerAllNamespaces(Zend_Gdata_YouTube::$namespaces);
        parent::__construct();
        $this->_text = $text;
    }

}
