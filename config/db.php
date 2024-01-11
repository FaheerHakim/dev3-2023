return [
    'driver' => getenv('CRAFT_DB_DRIVER'),
    'server' => getenv('CRAFT_DB_SERVER'),
    'port' => getenv('CRAFT_DB_PORT'),
    'database' => getenv('CRAFT_DB_DATABASE'),
    'user' => getenv('CRAFT_DB_USER'),
    'password' => getenv('CRAFT_DB_PASSWORD'),
    'schema' => getenv('CRAFT_DB_SCHEMA'),
    'tablePrefix' => getenv('CRAFT_DB_TABLE_PREFIX'),
];
