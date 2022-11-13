# Learn Laravel


## Blade

Para começar o Blade é uma **template engine** do Laravel, sendo ela a padrão para o Laravel. Usando ele, as páginas das nossas aplicações se **tornam mais dinâmicas**.

Inserindo dados que provém do Banco e também tags HTML. Ou seja, as Views serão responsabilidade do Blade de se fazer tota a interpretação do template


### Diretivas


**Exibir dados**

- Para tal deve-se, usar ``{{ code.. }}``:

```php
# Com isso o dado que estiver dentro de $nome será retornado e impresso na View
<p>{{ $nome }}</p>
```

<br>

**if-else statement**

- Quando se quer usar a diretiva if do blade deve se usar:

```php
@if (condition)
    <p>Code HTML</p>
@endif
```

- Quando nas operações lógicas é necessario usar mais de uma condição, ou seja, o else:

```php
@if ($nome === 'Pedro')
    <p>O nome é Pedro</p>
@else
    <p>O nome não é Pedro</p>
@endif
```

- Para casos de varias condicionais, em uma mesma verificação lógica usando o elseif:

```php
@if ($nome === 'Pedro)
    <p>O nome é pedro</p>
@elseif ($nome === 'Gustavo')
    <p>O nome é Gustavo</p>
@else
    <p>Não sei que nome é</p>
@endif
```

