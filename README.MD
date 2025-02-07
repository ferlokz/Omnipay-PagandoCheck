# Cencerro/OmnipayPagandoCheck
Integración de pasarela de pago de Pagando Check para su uso mediante la interfaz de Omnipay.

[Omnipay](https://omnipay.thephpleague.com/) es una librería de php que permite la integración y gestión de múltiples pasarelas de pago compartiendo una única interfaz para reducir o evitar ajustes complejos en código.

[Pagando Check](https://www.pagandocheck.com/) es una pasarela de pago que permite transacciones en comercios electrónicos y en terminal.


## Implementación
1. Crear una cuenta en [Pagando Check](https://www.pagandocheck.com/) y acceder al portal de administración.
2. Buscar sección de API para sitio web. Seleccione el método de cobro "API".
3. Configurar API siguiendo los pasos mostrados y obtener llave de pruebas.
4. Para consumir la pasarela de pago necesita el **nombre de usuario** y la **Llave pública** para pruebas.
5. Definir el uso de la librería de Omnipay y otras si aplica.

```php
    // Librerías a usar
    use Omnipay\Omnipay;
    use Dotenv\Dotenv;
```
6. Configurar **nombre de usuario** y la **Llave pública**.
```php
    // Obtener los valores de user y password desde las variables de entorno
    $api_user = $_ENV['API_USER'];
    $api_password = $_ENV['API_PUBLIC_KEY'];
```
7. Inicializar la pasarela de pago con Omnipay.
```php
    // Inicializar el gateway
    $gateway = Omnipay::create('Cencerro\OmnipayPagandoCheck\Gateway');
    $gateway->setUser($api_user);
    $gateway->setPassword($api_password);
```
8. Recuperar el token de autorización.
```php
    // Recuperar el token
    $response = $gateway->getAuthorizationToken()->send();

    if ($response->isSuccessful()) {
        $token = $response->getAuthorizationToken();
        echo "Token obtenido: " . $token . "<br/>";
    } else {
        echo "Error al obtener el token.";
        exit();
    }

    $gateway->setToken($token);
```
9. Crear un cliente.
```php
    // Crear un cliente
    $response = $gateway->createClient([
        'email' => 'jdoe@test.com',
        'name' => 'John',
        'lastName' => 'Doe',
        'secondLastName' => 'Johnson',
        'phone' => '1234567890',
        'birthday' => '01/01/2007',
    ])->send();

    if ($response->isSuccessful()) {
        $userId = $response->getUserId();
        echo "Id del usuario: " . $userId . "<br/>";
    } else {
        echo "Error al obtener el Id del usuario.";
        exit();
    }

    $gateway->setUserId($userId);
```
10. Agregar una tarjeta al cliente.
```php
    // Agregar una tarjeta
    $response = $gateway->addCard([
        'userId' => $gateway->getUserId(),
        'pan' => '1111111111111111',
        'cvv' => '171',
        'exp_month' => '02',
        'exp_year' => '23',
        'name' => 'FRANCISCO TORRES BENAVIDES',
        'street' => 'Diego Rivera',
        'noExt' => '720',
        'district' => 'Insurgentes',
        'zipCode' => '31104',
        'city' => 'Chihuahua',
        'state' => 'Chihuahua',
        'country' => 'MX'
    ])->send();

    if ($response->isSuccessful()) {
        $cardId = $response->getCardId();
        echo "Id de la tarjeta: " . $cardId . "<br/>";
    } else {
        echo "Error al obtener el Id de la tarjeta.";
        exit();
    }

    $gateway->setCardId($cardId);
```
11. Realizar una compra con la información del cliente y la tarjeta registrada.
```php
    // Realizar una compra
    $response = $gateway->purchase([
        'userId' => $gateway->getUserId(),
        'amount' => 500.00,
        'concept' => '',
        'cardId' => $gateway->getCardId(),
        'aftToken' => '',
        'pin' => '',
        'street' => '',
        'noExt' => '',
        'district' => '',
        'zipCode' => '',
        'city' => '',
        'state' => '',
        'country' => '',
        'expediteShipping' => 'false',
        'items' => [
            [
                'quantity' => 1,
                'productSku' => 'ABC2567',
                'productName' => 'Producto de Prueba',
                'productType' =>'OTHER',
                'unitPrice' => 500,
                'totalAmount' => 500
            ]
        ],
    ])->send();

    if ($response->isSuccessful()) {
        $folio = $response->getFolio();
        echo "Folio: " . $folio . "<br/>";
    } else {
        echo "Error al obtener el folio.";
        exit();
    }

    $gateway->setFolio($folio);
```