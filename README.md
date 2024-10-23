<a id="Sumário"></a>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://laravel-livewire.com/" target="_blank"><img src="https://raw.githubusercontent.com/livewire/livewire/main/art/logo.svg" width="400" alt="Livewire Logo"></a></p>

# Projeto Prático de Laravel + Livewire

<p>
  <a href="#Introdução"> 🧩 Introdução </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#Resultados"> 🚀 Resultados </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#Instalação"> 📖 Instalação </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#Ideias">💡 Possíveis Melhorias </a>&nbsp;&nbsp;&nbsp;
</p>

<br/>

<p>
  <b> CRUD Simples de uma Agenda de Contatos</b></br>
  <sub>A finalidade do projeto é a criação de uma Agenda para realizar o gerenciamento e busca de contatos, incluindo informações de endereço além de realizar a validação do CEP via API<sub>
</p>

<a id="Introdução"></a>
## 🧩 Introdução

  ***A finalidade do projeto é a criação de uma Agenda para realizar o gerenciamento e busca de contatos, incluindo informações de endereço além de realizar a validação do CEP via API.***

<br/>

<a id="Resultados"></a>
## 🚀 Resultados
### 🎯 Todos os critérios mínimos foram alcançados. A seguir, uma breve descrição sobre o conteúdo.

<br/>

> Formulário com a funcionalidade de adição para novos contatos realizando validação, busca de CEP via API, além de persistência de dados.
<p><img src="https://raw.githubusercontent.com/heeydev/agenda-contatos/master/image.png" width="400" alt="Cadastrar contatos"></a></p>

> Possibilidade de busca, edição e exclusão de contatos previamente cadastrados realizando paginação.
<p><img src="https://raw.githubusercontent.com/heeydev/agenda-contatos/master/image-3.png" width="800" alt="Cadastrar contatos"></a></p>

> Criação de endpoint retornando todos os contratos cadastrados em formato JSON.
<p><img src="https://raw.githubusercontent.com/heeydev/agenda-contatos/master/image-2.png" width="200" alt="Cadastrar contatos"></a></p>

<br />

<a id="Instalação"></a>
## `📖 Instalação`
Primeiro passo, clonar o projeto:

<br />

> Clonar
``` bash
git clone https://github.com/heeydev/agenda-contatos.git
```

> Acessar
``` bash
cd agenda-contatos
```

### Configuração - Backend
Segundo passo, instalar as dependências e subir o servidor:

> Instalar o SQLite:
``` bash
sudo apt-get install php-sqlite3
```

> Configurar a conexão da base de dados no arquivo .env
``` bash
php artisan key:generate
```

> Subir o servidor
``` bash
php artisan serve
```

### Configuração - Frontend
Terceiro passo, atualizar dependências, verificar se o projeto possui algum erro e rodar ambiente:

> Atualizar dependências
``` bash
npm install
```

> Verificar se possui algum erro
``` bash
npm run build
```

> Rodar ambiente em tempo real
``` bash
npm run dev
```

### Endpoints

|URL|Descrição|
|---|---|
|http://127.0.0.1:8000/cadastro | Tela de cadastro dos contatos |
|http://127.0.0.1:8000/api/contatos | Todos os contatos cadastrados no formato JSON  |

<br />

<a id="Ideias"></a>
## 💡 Possíveis Melhoras
> Possíveis melhorias no código e no projeto.

<br />

- [ ] ***- Acrescentar uma API secundária para buscar e validar os CEPs, caso a API da ViaCEP demore a responder ou fique indisponível.***
- [ ] ***- Criar testes unitários.***
- [ ] ***- Segregar no banco de dados em uma nova tabela as informações de usuário e endereço.***
- [ ] ***- Segregar as funções de salvar e atualizar.***
- [ ] ***- Criar uma confirmação de exclusão dos contatos, para não ocorrer deleções ocasionalmente.***
- [ ] ***- Criar um painel para rápido acesso entre as rotas.***
- [ ] ***- Criar uma rota específica para listagem e busca de contatos.***

<br/>

<a href="#Sumário"> 📖 Volta ao Sumário </a>

<br />