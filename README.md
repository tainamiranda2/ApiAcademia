

# API de Academia

Esta é uma API para gerenciar academias.

## Endpoints

- **Autenticação:**
  - `POST /login`: Realiza o login de um usuário. Retorna um token de acesso.
  - `POST /logout`: Realiza o logout de um usuário. Revoga o token de acesso.

- **Usuários:**
  - `GET /user`: Retorna todos os usuários cadastrados.
  - `POST /user`: Cria um novo usuário.
  - `PUT /user/{id}`: Atualiza as informações de um usuário existente.
  - `DELETE /user/{id}`: Remove um usuário existente.

- **Academias:**
  - `GET /academia`: Retorna todas as academias cadastradas.
  - `POST /academia`: Cria uma nova academia.
  - `PUT /academia/{id}`: Atualiza as informações de uma academia existente.
  - `DELETE /academia/{id}`: Remove uma academia existente.

## Autenticação

Para acessar os endpoints protegidos, você precisa estar autenticado. Faça login usando `/login` e inclua o token de acesso recebido no cabeçalho `Authorization` nas solicitações subsequentes.

Exemplo de cabeçalho de autorização:
```
Authorization: Bearer {seu_token_aqui}
```

## Exemplos de Uso

- **Login:**
  ```
  POST /login
  Corpo:
  {
    "email": "usuario@example.com",
    "password": "sua_senha"
  }
  ```

- **Logout:**
  ```
  POST /logout
  Header:
  Authorization: Bearer {seu_token_aqui}
  ```

- **Obter Usuários:**
  ```
  GET /user
  Header:
  Authorization: Bearer {seu_token_aqui}
  ```

- **Criar Usuário:**
  ```
  POST /user
  Corpo:
  {
    "name": "Novo Usuário",
    "email": "novo_usuario@example.com",
    "password": "nova_senha"
  }
  ```

- **Atualizar Usuário:**
  ```
  PUT /user/{id}
  Corpo:
  {
    "name": "Novo Nome"
  }
  ```

- **Excluir Usuário:**
  ```
  DELETE /user/{id}
  ```

---

## Testes

Aqui estão alguns testes básicos para os endpoints da API:

- **Obter Academias (GET /academia):** Verifica se a rota `/academia` retorna um status 200 e um JSON contendo informações das academias.
- **Criar Academia (POST /academia):** Verifica se a rota `/academia` cria uma nova academia com sucesso.
- **Atualizar Academia (PUT /academia/{id}):** Verifica se a rota `/academia/{id}` atualiza os dados de uma academia existente.
- **Excluir Academia (DELETE /academia/{id}):** Verifica se a rota `/academia/{id}` exclui uma academia existente.

---