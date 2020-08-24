# SPA com VueJS e API com Laravel

Esta aplicação é parte de um desafio que utiliza [Vue.js](https://vuejs.org/) no frontend e [Laravel](https://laravel.com/) como api no backend.

Versão Laravel utilizada: 7.25.0

Versão Vuejs utilizada: 2.1.5

O projeto segue a [licença MIT](https://opensource.org/licenses/MIT) e o código pode ser usado por qualquer pessoa, basta que se dê as devidas referências.

### Instalação e utilização.

O projeto utiliza duas aplicações:

A aplicação em Vue.js é o frontend da Desafio. É uma SPA que consome os dados de uma api.
A aplicação em Laravel é a api que provém dados para o desafio.
A aplicação roda na porta 8000.

A aplicação frontend necessita ter o [Node.js](https://nodejs.org) para instalar as dependencias.

A aplicação backend necessita ter o [Composer](https://getcomposer.org/) para ser utilizada. Ela utiliza o framework [Laravel](https://laravel.com/) que, por sua vez, utiliza o [Artisan](https://laravel.com/docs/7.x/artisan).


**Subir o backend**

Para instalar as dependências:
```
composer install
```

Para instalar as migrações do banco de dados:
```
php artisan migrate
```

Para rodar o server:
```
php artisan serve
```


**Subir o frontend**

Para instalar as dependências:
```
npm install
```

Para rodar o server:
```
npm run dev
```

**Url para acesso**
http://127.0.0.1:8000/