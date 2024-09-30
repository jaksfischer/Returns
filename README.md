
# Returns

## Português (pt-BR)

### Descrição
Módulo criado para padronização de retornos de sistemas e APIs. O módulo pode ser utilizado para padronização dos retornos, quando necessário.

### Instalação
Para instalar o módulo via Composer, execute o seguinte comando:

```
composer require jakson-fischer/returns
```

### Parâmetros
- `$status`: **bool**, obrigatório
- `$message`: **string**, obrigatório
- `$errorCode`: não obrigatório (Campo aberto para uso interno, a documentação ficará na responsabilidade do usuário)
- `$errorType`: não obrigatório
- `$httpStatus`: não obrigatório

### Funções

- **toArray**: Retorno dos dados enviados no formato de array.
- **toJson**: Retorno dos dados enviados no formato JSON.
- **arrayDataReturn**: Retorna os dados enviados encapsulados em um array dentro da chave `data`.
- **jsonDataReturn**: Retorna os dados enviados encapsulados em JSON dentro da chave `data`.

### Exemplos de uso

#### toArray

**Entrada:**
```php
return Returns::toArray(false, "Cliente não está autenticado no sistema!", "#EA1527", "Erro de sistema", 511);
```

**Saída:**
```php
[
    "status" => false, 
    "msg" => "Cliente não está autenticado no sistema!", 
    "errorCode" => "#EA1527", 
    "errorType" => "Erro de sistema", 
    "httpStatus" => 511 
]
```

#### toJson

**Entrada:**
```php
return Returns::toJson(false, "Cliente não está autenticado no sistema!", "#EA1527", "Erro de sistema", 511);
```

**Saída:**
```json
{
    "status": false,
    "msg": "Cliente não está autenticado no sistema!",
    "errorCode": "#EA1527",
    "errorType": "Erro de sistema",
    "httpStatus": 511
}
```

#### arrayDataReturn

**Entrada:**
```php
Returns::arrayDataReturn(false, "Cliente não está autenticado no sistema!", "#EA1527", "Erro de sistema", 511);
```

**Saída:**
```php
[
    "data" => [
        "status" => false,
        "msg" => "Cliente não está autenticado no sistema!",
        "errorCode" => "#EA1527",
        "errorType" => "Erro de sistema",
        "httpStatus" => 511
    ]
]
```

#### jsonDataReturn

**Entrada:**
```php
Returns::jsonDataReturn(false, "Cliente não está autenticado no sistema!", "#EA1527", "Erro de sistema", 511);
```

**Saída:**
```json
{
    "data": {
        "status": false,
        "msg": "Cliente não está autenticado no sistema!",
        "errorCode": "#EA1527",
        "errorType": "Erro de sistema",
        "httpStatus": 511
    }
}
```

---

## Returns

### English

### Description
This module was created to standardize the returns for systems and APIs. It can be used for return standardization whenever necessary.

### Installation
To install the module via Composer, run the following command:

```
composer require jakson-fischer/returns
```

### Parameters
- `$status`: **bool**, required
- `$message`: **string**, required
- `$errorCode`: optional (Open field for internal use, documentation responsibility lies with the user)
- `$errorType`: optional
- `$httpStatus`: optional

### Functions

- **toArray**: Returns the sent data as an array.
- **toJson**: Returns the sent data as JSON.
- **arrayDataReturn**: Returns the sent data encapsulated in an array under the `data` key.
- **jsonDataReturn**: Returns the sent data encapsulated in JSON under the `data` key.

### Usage examples

#### toArray

**Input:**
```php
return Returns::toArray(false, "Client is not authenticated in the system!", "#EA1527", "System error", 511);
```

**Output:**
```php
[
    "status" => false, 
    "msg" => "Client is not authenticated in the system!", 
    "errorCode" => "#EA1527", 
    "errorType" => "System error", 
    "httpStatus" => 511 
]
```

#### toJson

**Input:**
```php
return Returns::toJson(false, "Client is not authenticated in the system!", "#EA1527", "System error", 511);
```

**Output:**
```json
{
    "status": false,
    "msg": "Client is not authenticated in the system!",
    "errorCode": "#EA1527",
    "errorType": "System error",
    "httpStatus": 511
}
```

#### arrayDataReturn

**Input:**
```php
Returns::arrayDataReturn(false, "Client is not authenticated in the system!", "#EA1527", "System error", 511);
```

**Output:**
```php
[
    "data" => [
        "status" => false,
        "msg" => "Client is not authenticated in the system!",
        "errorCode" => "#EA1527",
        "errorType" => "System error",
        "httpStatus" => 511
    ]
]
```

#### jsonDataReturn

**Input:**
```php
Returns::jsonDataReturn(false, "Client is not authenticated in the system!", "#EA1527", "System error", 511);
```

**Output:**
```json
{
    "data": {
        "status": false,
        "msg": "Client is not authenticated in the system!",
        "errorCode": "#EA1527",
        "errorType": "System error",
        "httpStatus": 511
    }
}
```
