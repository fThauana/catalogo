# 🎵 TopTuns – Catálogo Musical Dinâmico (Projeto Acadêmico)

Este é um catálogo musical online desenvolvido como parte de um projeto acadêmico, com foco em PHP, manipulação de arrays, sessões e criação de páginas dinâmicas.  
O sistema permite que visitantes visualizem músicas cadastradas e que usuários autenticados gerenciem o catálogo.

---

## 🚀 Funcionalidades

### 🔓 Acesso público
- Exibição do catálogo de músicas contendo:
  - Imagem
  - Título
  - Categoria
  - Botão “Ver mais”
- Página de detalhes exibida via ID utilizando `GET`
- Página de filtro permitindo filtrar músicas por:
  - Categoria
  - Tipo musical

### 🔐 Área restrita
- Página de login com validação via `POST`
- Autenticação com usuário e senha armazenados com hash
- Acesso protegido por sessão
- Cadastro de novas músicas:
  - Dados enviados por `POST`
  - Itens são armazenados na sessão
  - Aparecem automaticamente na página inicial

---

## 🗂️ Estrutura do Projeto

| Arquivo | Função |
|--------|--------|
| `index.php` | Página inicial com a lista de músicas |
| `detalhes.php` | Exibe detalhes completos de uma música |
| `filtrar.php` | Formulário de filtro por categoria ou tipo |
| `login.php` | Autenticação do usuário via POST |
| `protegido.php` | Área restrita com cadastro de itens |
| `dados.php` | Array inicial com músicas predefinidas |
| `style.css` | Estilos visuais do catálogo |
| `logout.php` | Finaliza a sessão do usuário |

---

## 🧪 Tecnologias Utilizadas
- PHP
- HTML5
- CSS3
- Git & GitHub
- Sessões PHP (`$_SESSION`)
- Envio de dados via `GET` e `POST`

---

## 🔧 Como executar o projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git
   ```

2. Inicie o servidor PHP local:
   ```bash
   php -S localhost:8000
   ```
   
3. Acesse no navegador:
   ```bash
   http://localhost:8000/index.php
   ```

---

## 👥 Autores

Projeto acadêmico desenvolvido por:
- Thauana Vitória Ferreira Farias
- Vitor Gonçalves

---

## 🎯 Objetivos do Projeto
- Praticar fundamentos de PHP
- Manipular arrays e exibir conteúdo dinâmico
- Utilizar sessões e autenticação simples
- Desenvolver um pequeno CRUD básico
- Organizar código e versionar com Git
- Trabalhar em equipe no GitHub

---

## 📄 Licença

Projeto criado exclusivamente para fins educacionais.
Uso comercial não permitido.
