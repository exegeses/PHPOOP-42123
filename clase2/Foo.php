<?php

    class Foo
    {
        private static $bar;

        private function __construct()
        {
            echo 'método constructor <br>';
        }

        public function publico()
        {
            echo 'método público <br>';
        }
        private function privado()
        {
            echo 'método privado <br>';
        }
        static function estatico()
        {
            echo 'método estático <br>';
            // $this se usa cuando HAY UN OBJETO
            // self se va a usar de modo estático
            if ( !isset( self::$bar ) ){
                self::$bar = new PDO();
            }
        }
    }

// en la práctica en el archivo de declaración de clase
// sólo va el código de la clase

    //$Foo = new Foo;
    //$Foo->publico();
    //$Foo->privado();
    //$Foo->estatico();

    Foo::estatico();