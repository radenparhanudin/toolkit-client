<?php

return [
    'source'      => ['app/Helpers/Helper.php', 'config/app.php', 'database', 'routes'], // Path(s) to encrypt
    'destination' => 'encrypted', // Destination path
    'key_length'  => 6, // Encryption key length
];
