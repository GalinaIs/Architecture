<?php
namespace app\services;

public class FrontController {
    public static function runController($config) {
        $controllerName = $this->request->getControllerName() ?: $this->config['defaultController'];
        $actionName = $this->request->getActionName();
        $controllerClass = $this->config['controllerNamespace'] . "\\" . ucfirst($controllerName) . 'Controller';

        try {
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                try {
                    $controller->run($actionName);
                } catch (\Exception $e) {
                    $errorClass = $this->config['controllerNamespace'] . "\\ErrorController";
                    (new $errorClass())->actionIndex($e->getMessage());
                }
            } else {
                throw new \Exception('Запрашиваемая страница не найдена!');
            }
        } catch (\Exception $e) {
            $errorClass = $this->config['controllerNamespace'] . "\\ErrorController";
            (new $errorClass())->actionIndex($e->getMessage());
        }
    }
 }