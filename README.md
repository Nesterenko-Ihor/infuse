```markdown
# Infuse

Файлы с конфигурацией маршрутов располагаются в папке `/local/routes/`. Для подключения файла следует описать его в файле `.settings.php` в секции `routing`.

```php
'routing' => [
    // ...
    'infuse' => [
        'path' => '/local/routes/',
    ],
    // ...
],
```

Пример использования `BX.ajax.runAction`:

```javascript
BX.ajax.runAction("infuse:rest.user.getUserNameVowels", { data: { id: 1 } }).then(function (response) {
    console.log(response);
});
```

В данном примере мы вызываем метод `getUserNameVowels` модуля "infuse:rest.user" с параметром `id`, равным 1, и выводим результат в консоль.
```
