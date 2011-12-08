<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facade
 *
 * @author simao-ana-sara
 */
abstract class Facade {
    public $_parent_name = '';
    public function Facade()
    {
        $this->_parent_name = ucfirst(get_class($this));
        log_message('debug', "Facade Class Initialized");
    }
    public function _assign_libraries($use_reference = TRUE)
    {
        $CI =& get_instance();
        foreach (array_keys(get_object_vars($CI)) as $key)
        {
            if ( ! isset($this->$key) AND $key != $this->_parent_name)
            {
                // In some cases using references can cause
                // problems so we'll conditionally use them
                if ($use_reference == TRUE)
                {
                    $this->$key = NULL; // Needed to prevent reference errors with some configurations
                    $this->$key =& $CI->$key;
                }
                else
                {
                    $this->$key = $CI->$key;
                }
            }
        }
   }
}
?>