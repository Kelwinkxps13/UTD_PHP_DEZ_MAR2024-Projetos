<div align="center">

##### vou reescrever abaixo, todo o arquivo necessario pra fazer a atividade, em markdown

</div>


<div align="center">
  
  ### HTML (HyperText Markup Language)

</div>


<p>HTML é a linguagem de marcação padrão para criar páginas web. Ele fornece a estrutura básica para o conteúdo de uma página, permitindo a criação e organização de elementos que compõem o conteúdo visualizado em um navegador web.
Estrutura Básica de um Documento HTML:</p>

~~~html

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
</head>
<body><!DOCTYPE html>
    <!-- Conteúdo da Página -->
</body>
</html>


~~~~

  - **\<!DOCTYPE html>**: Define a versão do HTML sendo utilizada (HTML5).
  - **\<html>**: Engloba todo o conteúdo da página.
  - **\<head>**: Contém metadados, como título, codificação de caracteres, e configurações de viewport.
  - **\<title>**: Define o título da página, exibido na barra de título do navegador.
  - **\<body>**: Contém todo o conteúdo visível da página.

<div align="center">
  
  ### Elementos HTML
  
  </div>

<p>Os elementos HTML são construídos com tags, que são delimitadas por < e >. Alguns elementos comuns incluem:</p>


  Parágrafo:  
~~~~html
<p>Este é um parágrafo.</p>
~~~~


Cabeçalhos:
~~~~html
<h1>Titulo Principal</h1>
<h2>Subtítulo</h2>
<!-- ... até h6 -->
~~~~

Lista Não Ordenada:
~~~~html
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
</ul>
~~~~

Lista Ordenada:
~~~~html
<ol>
  <li>Item 1</li>
  <li>Item 2</li>
</ol>
~~~~

Links:
~~~~html
<a href="https://www.exemplo.com">Visitar Exemplo</a>
~~~~

Imagens:
~~~~html
<img src="caminho-da-imagem.jpg" alt="Descrição da Imagem">
~~~~

Formulários HTML:

Os formulários permitem a interação do usuário. Exemplo de um formulário simples:

~~~~html
<form action="/processar-dados" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha">

    <input type="submit" value="Enviar">
</form>
~~~~

  - **\<form>**: Define um formulário.
  - **action**: Especifica para onde os dados do formulário devem ser enviados.
  - **method**: Especifica o método de envio dos dados (GET ou POST).
  - **\<label>**: Rótulo para um campo de formulário.
  - **\<input>**: Cria campos de entrada (como texto ou senha).
  - **type**: Especifica o tipo de campo de entrada (text, password, submit, etc.).

Esses são apenas alguns conceitos básicos; HTML é uma linguagem muito rica e existem muitos outros elementos e atributos para diferentes finalidades que iremos abordar em breve.
