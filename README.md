Olá,

Essa é a API do teste para desenvolvedor back-end da Goflux!

Abaixo descreverei como utilizá-la baseado nas especificações do teste.

Foram utilizados para desenvolvimento:Laravel 8 e MySQL com ORM Eloquent


Toda a lógica de banco de dados pode ser encontrada aqui: https://github.com/matheusasp/Teste-Go-Flux/tree/main/database/migrations



Parte 1: Configurando o ambiente para execução.

Primeiramente será necessário instalar o Laravel e MySQL na máquina que executará o projeto.
Após isso será necessário configurar o arquivo .env de acordo com as especificações de banco da sua máquina. Deixei o meu na pasta raíz como um exemplo.

Parte 2: Criando os registros

Os endpoints para criação dos registros são: 

POST: api/embarcador/create 

Deverá conter no body um json como esse:
{
  "id": 1,
  "name": "goFlux Brasil",
  "doc": "60.429.484/0001-10",
  "about": "goFlux, uma empresa especializada em inovar na contratação de fretes",
  "active": true,
  "site": "https://goflux.com.br/"
}


POST: api/transportador/create

Deverá conter no body um json como esse:

{
  "id": 12,
  "name": "Transportadora Rodoclub",
  "doc": "99.974.145/0001-50",
  "about": "Transportadora Rodoclub, transportando sonhos",
  "active": true,
  "site": "https://goflux.com.br/"
}


POST: api/cliente/create

Deverá conter no body um json como esse:
{
  "id": 1,
  "name": "Teste",
  "doc": "5555555",
  "phone": "1199999"
  
}

POST: api/oferta/create

Deverá conter no body um json como esse:

{
  "id": 1,
  "id_customer": 1,
  "from": "Porto Alegre - RS",
  "to": "São Paulo - SP",
  "initial_value": 130.00,
  "amount": 300.00,
  "amount_type": "TON"
}

POST: api/lance/create

Deverá conter no body um json como esse:

{
  "id": 1, 
  "id_provider": 12,
  "id_offer": 1,
  "value": 105.00,
  "amount": 230.00
}

Parte 3: Consultando os registros

GET: api/embarcador/{id}  

GET: api/transportador/{id}  

GET: api/cliente/{id}  

GET: api/oferta/{id} 

GET: api/lance/{id}

Obs: No {id} deve-se colocar o id que foi inserido no registro ao criar ele.
