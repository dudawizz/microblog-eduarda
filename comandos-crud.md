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

### UPDATE na tabela de usuários

```sql
UPDATE usuarios SET tipo = 'admin'
WHERE id = 1;

-- Obs: NUNCA esqueça de passar pelo menos uma condição para o UPDATE
```

### DELETE na tabela de usuários

```sql
DELETE FROM usuarios WHERE id = 2;

-- Obs: NUNCA esqueça de passar pelo menos uma condição para o DELETE
```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Pink Floyd', 'pinkfloyd@gmail.com', 'pink0101floyd', 'admin');
```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Mark', 'mark@gmail.com', 'mark0101', 'editor');
```

```sql
SELECT id, nome, tipo FROM usuarios;
```

### Exemplos para a tabela de notícias

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Meu pai ganhou na mega-sena',
    'Jogou bons números e bla bla bla',
    'Vai pegar o prêmio',
    'premio.jpg',
    1
);
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'temporada nova de demon slayer',
    'depois de tanto tempo, finalmente sairá a nova temporada de demon slayer',
    'sera a temporada mais famosa',
    'demon-slayer.jpg',
    4
);
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'onda de frio esta vindo para sao paulo',
    'proxima semana, virá uma onda gélida para a capital de sao paulo',
    'devido a aproximação do inverno, o tempo frio estará presente desde já',
    'dia-nublado.jpg',
    5
);
```

### Select em notícias

```sql
SELECT titulo, data FROM noticias;
```

```sql
SELECT titulo, data FROM noticias ORDER BY data;
-- Usamos o ORDER BY data DESC para classificar em ordem decrescente pela data
```

### SELECT com JOIN (consulta com junção de tabelas)

**Objetivo:** realizar uma consulta que mostre a data e o título da notícia **e** o nome do autor da notícia.

```sql
-- Selecionando as colunas indicando as tabelas em que estão
SELECT
    noticias.data,
    noticias.titulo,
    usuarios.nome

-- Especificamos as tabelas que serão "juntadas/combinadas"
FROM noticias JOIN usuarios

-- Critério da junção/relação entre as tabelas
-- Usamos as referências de FK e PK
ON noticias.usuario_id = usuarios.id;
-- usuario_id tem que ser no singular!
```