# Learn Laravel


## Migrations

- As **Migrations** funcionam como um versionamento de banco de dados;
- Podemos **avançar e retroceder** a qualquer momento;
- **Adicionar colunas e remover** de forma mais facilitada;
- Fazer o setup da base de dados de uma nova instalação em apenas um comando;
- Podemos verificar as migrations com **migrate:status**;


### Criar uma migration

- Para criar deve-se usar o Artisan, executando o comando:
	`php artisan make:migration create_product_table`

- Ao fazer isso, criara uma estrutura básica para a Migration:
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};

```

- O método `up` irá avançar a migration

- O método `down` vai voltar a migration


## Comando fresh
- Com o uso do comando fresh da migrate é possivel deletar todas as migrations e 
- em seguida cria-las de novo, uma especie de refresh
- Comando:
    `php artisan migrate:fresh`