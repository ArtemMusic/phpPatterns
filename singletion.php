<?php

// Порождающий шаблон, создает объект, который является единственным в своем роде (я, солнце, алина)
// Например 1 соединение к бд (не может быть 2 соединения к бд)

//final class Connection // final означает, что класс нельзя будет наследовать в будущем
//{
//    private static ?self $instance = null;
//    private static string $name;
//
//    public static function getName(): string
//    {
//        return self::$name;
//    }
//
//    public static function setName(string $name): void
//    {
//        self::$name = $name;
//    }
//
//    //Если объект $instance уже есть, то верни его, иначе создай
//    public static function getInsnatce(): self
//    {
//        return self::$instance ?: self::$instance = new self();
//    }
//
//    //Запретили клонировать (private и пустое тело)
//    private function __clone(): void
//    {
//
//    }
//}
//
//$connection = Connection::getInsnatce();
//$connection::setName('ComandF5');
//$connection2 = Connection::getInsnatce();
//var_dump($connection2::getName());

//Этот код реализует паттерн Singleton (одиночка) - пораждающий шаблон проектирования, который гарантирует, что у класса может быть только один единственный экземпляр.
//
//Класс Connection объявлен как final, что означает, что он не может быть унаследован в будущем. Он имеет три статических метода и два статических свойства.
//
//Первое статическое свойство $instance хранит единственный экземпляр класса. Оно объявлено как приватное и статическое, чтобы предотвратить создание других экземпляров класса и обеспечить доступ к единственному экземпляру через статический метод.
//
//Второе статическое свойство $name хранит имя соединения.
//
//Метод getName() возвращает имя соединения, которое было установлено методом setName(), а метод setName() устанавливает имя соединения.
//
//Метод getInsnatce() реализует ленивую инициализацию (lazy initialization) и возвращает единственный экземпляр класса. Если экземпляр еще не был создан, метод создает его и сохраняет в свойство $instance, а затем возвращает его. Если экземпляр уже существует, метод просто возвращает его.
//
//В данном примере, мы создаем единственный экземпляр класса Connection через вызов метода getInsnatce(). Затем мы устанавливаем имя соединения с помощью метода setName(), вызывая его на объекте $connection. Затем мы получаем имя соединения из другого экземпляра класса Connection, который мы создаем через вызов метода getInsnatce() на объекте $connection2.
//
//Выводом на экран будет строка "ComandF5", так как мы установили это имя для единственного экземпляра класса Connection, и все последующие вызовы метода getName() будут возвращать это значение.



//Плюсы паттерна "Одиночка" (Singleton):
//
//Гарантирует, что у класса есть только один экземпляр во время выполнения программы;
//Предоставляет глобальную точку доступа к этому экземпляру;
//Уменьшает количество создаваемых объектов и экономит ресурсы;
//Позволяет гибко управлять созданием и доступом к единственному экземпляру;
//Легко реализуется и может быть использован во многих сценариях.
//Минусы паттерна "Одиночка" (Singleton):
//
//Затрудняет тестирование классов, которые зависят от объекта Одиночки;
//Усложняет процесс обновления кода, так как может потребоваться переработка кода при замене Одиночки на другой объект;
//Нарушает принцип единственной ответственности, так как класс Одиночка не только выполняет свою основную функцию, но и отвечает за создание и контроль доступа к своему единственному экземпляру.
//Паттерн "Одиночка" применяют в следующих случаях:
//
//Когда необходим только один экземпляр класса во время выполнения программы;
//Когда необходим глобальный доступ к этому экземпляру из любой части программы;
//Когда необходимо сократить количество создаваемых объектов и экономить ресурсы;
//Когда необходимо гибко управлять созданием и доступом к единственному экземпляру.
//Примеры использования паттерна "Одиночка":
//
//Классы для работы с базами данных, файловыми системами, логгерами и т.д., когда необходимо обеспечить глобальный доступ к единственному экземпляру этих классов;
//Классы для работы с настройками и конфигурацией приложения;
//Классы для создания графического интерфейса, например, для управления окнами и диалоговыми окнами.