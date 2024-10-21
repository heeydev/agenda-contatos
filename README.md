<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Projeto Prático de Laravel + Livewire + Tailwind

![alt text](image.png)
![alt text](image-1.png)
![alt text](image-2.png)

> Exemplo básico do Framework Laravel com Livewire

## Baixar o projeto
Primeiro passo, clonar o projeto:
``` bash
# Clonar
git clone https://github.com/heeydev/agenda-contatos.git

# Acessar
cd agenda-contatos
```

## Configuração - Backend
Segundo passo, instalar as dependências e subir o servidor:
``` bash
# Instalar dependências do projeto
composer install

# Subir o servidor
php artisan serve
```

## Configuração - Frontend
Terceiro passo, atualizar dependências, verificar se o projeto possui algum erro e rodar ambiente:
``` bash
# Atualizar dependências
npm install

# Verificar se possui algum erro
npm run build

# Rodar ambiente em tempo real
npm run dev
```

### Endpoints

|URL|Descrição|
|---|---|
|http://127.0.0.1:8000/cadastro | Tela de cadastro dos contatos |
|http://127.0.0.1:8000/api/contatos | Todos os contratos cadastrados no formato JSON  |

