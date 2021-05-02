<?php
    function lang( $pharse ) {
        static $lang = array(
            'massage0' => 'مرحبا' ,
            'massage1' => 'فلا موقعنا'
        );
        return $lang[$pharse];
    }
?>