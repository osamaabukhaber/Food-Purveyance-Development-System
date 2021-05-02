<?php
    function lang( $pharse ) {
        static $lang = array(
            'Home' => 'Home',
            'lang' => 'Langouge' ,
            'arab' => 'Arabic' ,
            'eng' => 'English' ,
            '' => '' ,
            '' => '' ,
            'acount' => 'My acount' ,
            'setting' => 'Setting' ,
            'pass' => 'Password' ,
            'phone' => 'PhoneNumber' ,
            'lang' => ' Langouge' ,
            'Scane' => 'Scane Qr' ,
            'pay' => 'pay' ,
            'Inbox' => 'Inbox' ,
            'View / Edit Products' => 'View / Edit Products' ,
            'delete' => 'Delete' ,
            'log out' => 'Log out'
        );
        return $lang[$pharse];
    }
?>