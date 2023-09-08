<?php
    final class DashboardController
    {
        public function sayHello() {
            return 'hello world';
        }
    }
    
    $object = new DashboardController;
    echo $object->sayHello();
?>