# Learn Laravel


## Usando o ORM do Laravel
- Eloquent é a **ORM** do Laravel
- Cada tabela tem um **Model** que sendo responsavel pelas requisições ao banco
- A convenção para o Model é utilizar o nome da **Entidade** no singular enquanto que a tabela é a entidade no plural:
  - **exemplo:** Model -> Event | Tabela -> Events
- No Model normalmente não se faz muitas alterações dos arquivos, **geralmente para configurações específicas** 

## Usando Eloquent
- Deve-se importar:
  - Sintaxe:
    `use App\Models\NomeEvent;`



