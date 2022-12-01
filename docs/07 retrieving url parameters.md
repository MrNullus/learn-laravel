# Learn Laravel


## Recuperando paramêtros da URL (Rescuing Parameters)

- Podemos mudar como as views tem uma response adicionando parametros a uma rota;
- Ao definir parametros devemos colocar o pârametro dentro de chaves e seu respectivo nome: `{id}`;
- Pode-se ter também pârametros opcionais usando o ponto de interrogação (?);
- O Laravel também aceita `Query Parameters` (Algo como: Pârametros de Consulta), utilizando a sintaxe: `?nome=Gustav&idade=17`;

### Definir que uma rota deve espera um pârametro:
```php
[routes/web.php]

// -> onde `parameter` é o parametro que está sendo esperado para aquela route
// -> deve ser passado um array com o nome do parametro e o seu valor
Route::get('/products/{parameter}', function () {
  return view('product', ['id' => $id]);
});
```
