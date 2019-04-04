<?php
/*реализовывали в рамках одного из курсов PHP - оставила из проекта только то, что относится к FrontController и запуску приложения и саму структуру проекта. */
namespace app\base;
use \app\traits\TSingletone as TSingletone;

class App {
    public $config;
    private $components = [];

    public function run($config) {
        $this->config = $config;
        FrontController::runController($config);
    }
}