# Operações CRUD

## Resumo

- C: CREAT (INSERT) -> inserir dados
- R: READ (SELECT) -> ler/carregar dados
- U: UPTADE -> atualizar dados
- D: DELETE -> deletar dados

## Exemplos

### INSERT na tabela de usuários

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Eduarda', 'eduardacsousa@gmail.com', 'duda098', 'admin');
```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Fulano', 'fulano@gmail.com', 'fulaninho098', 'editor');
```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Ozzy', 'osbourne@gmail.com', 'ozzy098', 'editor');
```

### INSERT na tabela de usuários

```sql
SELECT nome, email FROM usuarios;
```

```sql
SELECT nome, email FROM usuarios
WHERE tipo = 'admin';
```

```sql
SELECT * FROM usuarios
WHERE id > 1;
```