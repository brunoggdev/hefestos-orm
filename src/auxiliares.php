<?php

use Hefestos\Database\HefestosORM;

if (!function_exists('db')) {
    /**
     * Atalho conveniente para retornar uma instancia do ORM;
     * Pode receber um array de configuração customizado.
     * @author Brunoggdev
    */
    function db(?array $config = null):HefestosORM
    {
        return HefestosORM::instancia($config);
    }
}

// alias para db
if (!function_exists('orm')) {
    /**
     * Atalho conveniente para retornar uma instancia do ORM;
     * Pode receber um array de configuração customizado.
     * @author Brunoggdev
    */
    function orm(?array $config = null):HefestosORM
    {
        return HefestosORM::instancia($config);
    }
}