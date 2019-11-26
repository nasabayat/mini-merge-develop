echo 'success';
echo file_get_contents('./.env');
print_r($_SERVER);
echo getenv('DB_USER').PHP_EOL;
echo getenv('DB_PASS');
