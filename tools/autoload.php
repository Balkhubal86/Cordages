<?php
    function autoload($class)
    {
        $result = substr($class, 0, 4);

        if (strcmp($result, 'ctrl') == 0)
        {
            include_once 'Controller/'.$class.'.php';
        }
        else
        {
            if (strcmp($result, 'Acce') == 0)
            {
                include_once 'tools/'.$class.'.php';
            }
            else
            {
                if (strcmp($result, 'cont') == 0)
                {
                    include_once 'site/Containers/'.$class.'.php';
                }
                else
                {
                    if (strcmp($result, 'acti') == 0)
                    {
                        include_once 'site/Models/'.$class.'.php';
                    }
                    else
                    {
                        if (strcmp($result, 'view') == 0)
                        {
                            include_once 'site/Views/'.$class.'.php';
                        }
                    }
                }
            }
        }
    }
    spl_autoload_register('autoload');
?>