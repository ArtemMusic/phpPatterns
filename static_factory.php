<?php
//
//interface Worker
//{
//    public function work(): void;
//}
//
//class Developer implements Worker
//{
//    public function work(): void
//    {
//        print_r('Developing');
//    }
//}
//
//class Manager implements Worker
//{
//    public function work(): void
//    {
//        print_r('Managment');
//    }
//}
//
//class WorkerFactory
//{
//    public static function make($classTitle): ?Worker
//    {
//        $ClassName = strtoupper($classTitle);
//
//        return class_exists($ClassName) ? new $ClassName() : null;
//    }
//}
//
//$worker = WorkerFactory::make('manager');
//$worker->work();


//Данный код демонстрирует применение паттерна Factory Method для создания объектов классов Developer и Manager, реализующих интерфейс Worker. Класс WorkerFactory содержит метод make(), который на основе переданного параметра $classTitle создает объект класса с именем, соответствующим $classTitle. Если класс с таким именем не существует, метод возвращает null.
//
//Плюсы использования паттерна Factory Method:
//
//Позволяет создавать объекты без явного указания их классов в коде;
//Упрощает добавление новых классов, реализующих интерфейс Worker, так как для этого достаточно создать соответствующий класс и добавить его имя в параметры метода make().
//Минусы использования паттерна Factory Method:
//
//Добавление новых классов может привести к созданию большого количества условий в методе make(), что может усложнить код.
//Паттерн Factory Method применяют в ситуациях, когда нужно создавать объекты разных классов, реализующих один и тот же интерфейс или абстрактный класс, но классы для создания объектов не известны заранее или могут изменяться. Также этот паттерн может использоваться для создания объектов в зависимости от условий, например, от переданных аргументов или значения переменной.