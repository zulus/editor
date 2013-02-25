<?php

/**
 * Document   : ckeditor
 * Created on : 2011-01-04, 17:28:25
 *
 * @author Dawid Pakuła(ZuluS) <dawid.pakula [at] w3des.net>
 * @package $(package)
 */
abstract class Formo_Core_Driver_Editor extends Formo_Driver {

    protected $_view_file = 'editor';

    public function html() {
        $this->_view
                ->set_var('tag', 'textarea')
                ->set_var('text', $this->_field->val())
                ->attr('name', $this->name());
    }

}