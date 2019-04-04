<?php
/*1. Реестр (Registry)
Например, можно использователь такой класс для хранения настроек в файле - при старте приложения читать из файла настройки в массив, а при установке значений или удалении изменять настройки в файле - таким образом, каждый раз при запуске приложения у нас поддерживается актуальное состояние настроек - именно такое, какое было настроено при прошлом запуске приложения.*/

class Registry {
    private static $fileName = "congif.txt";
    protected static $data = array();

    public static function readDataFromFile() {
        //читаем данные из файла в массив
    }

    private function setDataInFile($key, $value) {
        //изменяем в файле значение по ключу $key на $value
    }

    public static function setData($key, $value) {
        self::$data[$key] = $value;
        setDataInFile($key, $value);
    }

    public static function getData($key) {
        if(isset(self::$data[$key])) {
            return  self::$data[$key];
        }
        return null;
    }

    private function removeDataFormFile($key) {
        //удалить из файла значение по ключу $key
    }

    public static function removeData($key) {
        if(isset(self::$data[$key])) {
            unset(self::$data[$key]);
            removeDataFormFile($key);
        }
    }
}

//использование в index.php
Registry::readDataFromFile();
Registry::setData('lesson', 'Lesson7');
echo "Lesson: " . Registry::getData('lesson') . PHP_EOL;
?>


