<?php
namespace Blog;

class Module
{
    public function getConfig()
    {
        error_log(__DIR__ . '/config/module.config.php');
        return include __DIR__ . '/config/module.config.php';
    }
}
