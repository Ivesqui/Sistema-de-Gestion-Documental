$api_url = 'http://worldtimeapi.org/api/ip'; // Utiliza la IP del usuario para obtener la hora actual

// Realiza la solicitud a la API
$response = file_get_contents($api_url);

// Decodifica la respuesta JSON
$data = json_decode($response);

// Extrae la información de la fecha y hora
$datetime = new DateTime($data->datetime);
$timezone = new DateTimeZone($data->timezone);

// Establece la zona hora
$datetime->setTimezone($timezone);
