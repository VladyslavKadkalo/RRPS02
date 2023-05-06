<?php

/**
 * Class Singleton
 */
class Singleton
{
    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * Метод приватний задля неможливості створення об'єкта за допомогою методу new ззовні класу
     */
    private function __construct()
    {
    }

    /**
     * Повертає існуючий екземпляр класу або створює новий якщо він не був створений раніше
     *
     * @return self|null
     */
    public static function getInstance(): ?self
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

