<?php

//interface Worker
//{
//    public function work(): void;
//}
//
//class Developer implements Worker
//{
//    public function work(): void
//    {
//        print_r('im developing');
//    }
//}
//
//class Designer implements Worker
//{
//    public function work(): void
//    {
//        print_r('im designing');
//    }
//}
//
//interface WorkerFactory
//{
//    public static function make(): Worker;
//}
//
//class DeveloperFactory implements WorkerFactory
//{
//    public static function make(): Worker
//    {
//        return new Developer();
//    }
//}
//
//class DesignerFactory implements WorkerFactory
//{
//    public static function make(): Worker
//    {
//        return new Designer();
//    }
//}
//
//DeveloperFactory::make()->work();
//print_r(PHP_EOL);
//DesignerFactory::make()->work();

//Данный код демонстрирует применение паттерна Factory Method для создания объектов разных классов, реализующих интерфейс Worker. Каждый класс фабрики (DeveloperFactory и DesignerFactory) реализует метод make(), который возвращает объект своего соответствующего класса.
//
//Плюсы использования паттерна Factory Method:
//
//Позволяет создавать объекты без явного указания их классов в коде;
//Упрощает добавление новых классов, реализующих интерфейс Worker, так как для этого достаточно создать соответствующую фабрику.
//Минусы использования паттерна Factory Method:
//
//Добавление новых классов может привести к созданию большого количества классов фабрик, что может усложнить код.
//Паттерн Factory Method применяют в ситуациях, когда нужно создавать объекты разных классов, реализующих один и тот же интерфейс или абстрактный класс, но классы для создания объектов не известны заранее или могут изменяться. Также этот паттерн может использоваться для создания объектов в зависимости от условий, например, от переданных аргументов или значения переменной.
