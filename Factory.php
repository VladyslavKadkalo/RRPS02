<?php

/**
 * інтерфейс для класів геометричних фігур
 */
interface Shape {
    public function draw();
}

/**
 * коло
 */
class Circle implements Shape {
    public function draw() {
        echo "Drawing a Circle\n";
    }
}

/**
 * квадрат
 */
class Square implements Shape {
    public function draw() {
        echo "Drawing a Square\n";
    }
}

class ShapeFactory {
    public function getShape($shapeType) {
        if ($shapeType == "Circle") {
            return new Circle();
        }

        if ($shapeType == "Square") {
            return new Square();
        }
        return null;
    }
}