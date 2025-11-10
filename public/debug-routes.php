<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::capture();

echo "Request URI: " . $request->getRequestUri() . "<br>";
echo "Path Info: " . $request->getPathInfo() . "<br>";
echo "Route: " . ($request->route() ? get_class($request->route()) : 'NULL') . "<br>";

$response = $kernel->handle($request);
echo "Response Status: " . $response->getStatusCode() . "<br>";
echo "Response Content Length: " . strlen($response->getContent()) . "<br>";

$response->send();
$kernel->terminate($request, $response);
