<?php
$statements = array(
    "getsampledata" => 'SELECT * FROM products WHERE ean = ?;', //? will be replaced by param value in functions

    'updateexample' => 'UPDATE XYZ
                              SET field1 = ?, field2 = ?
                              WHERE field3 = ? AND field4 = ? AND field5 = ?;',

    'insertexample' => 'INSERT INTO table(field1,field2,field3) VALUES(?, ?, ?)',                          

)

?>