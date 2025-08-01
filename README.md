# Catalogo

Tudo começou com um pedido simples: "estou precisando de um aplicativo que...". Um amigo precisava de uma forma de organizar e divulgar seus produtos, e eu vi ali a oportunidade perfeita para criar algo novo.

Assim nasceu o **Catalogo**. Um projeto que já começa com um propósito real, mas que estou construindo de forma aberta. A ideia é que ele sirva não só para o meu amigo, mas para qualquer pessoa que precise de um sistema simples para criar catálogos de produtos ou serviços, seja para controle interno ou para ter uma vitrine online.

Por enquanto, o foco é esse. Mas, com o tempo, a ideia é adicionar mais recursos, como uma área de comentários, integração com pagamentos e o que mais a imaginação (e o tempo livre) permitir, já que tenho outro projeto fechado que me demanda bastante tempo\!

[](https://www.google.com/search?q=https://github.com/nicolahsss/catalogo)

## 🤔 Por que um projeto de código aberto?

Apesar de programar há um tempo, meu código viveu em dois lugares: em um HD antigo com projetos de aprendizado (que talvez nem funcione mais) e em repositórios privados. Os projetos atuais são para clientes ou um SaaS fechado que estou homologando e, se tudo der certo, devo liberá-lo publicamente ainda este ano.

Aproveitando o pedido do meu amigo, decidi fazer do "Catalogo" o meu primeiro projeto de código aberto. É o meu "laboratório" público para experimentar, errar, acertar e, quem sabe, criar algo que possa ser útil para outras pessoas. Meu compromisso é tocar ele no meu tempo livre, mantendo o código atualizado e adicionando novidades sempre que possível.

## 🛠️ O que estou usando aqui?

Para dar vida a este projeto, escolhi as seguintes ferramentas (com alguns comentários):

  * **Backend:** PHP, com Slim Framework para manter a simplicidade.
  * **Frontend:** Angular *(amado por uns, odiado por outros, mas eu gosto\!)*.
  * **Infraestrutura:** IaC é uma paixão! Pretendo extrapolar aqui com Docker, k8s, CloudFormation... a diversão é garantida. **Mas calma: o objetivo é manter o projeto simples. Se eu adicionar recursos mais avançados, como um Object Storage (S3), eles serão sempre opcionais e configuráveis, para não complicar a vida de quem só quer o básico.**
  * **Banco de Dados:** MySQL é o padrão, mas estou pensando em adicionar suporte a PostgreSQL para sair da zona de conforto *(e por que não?)*.

## 🚀 Quer rodar aí na sua máquina?

A ideia é que seja muito simples colocar o projeto para rodar. As instruções abaixo são para configurar o **ambiente de desenvolvimento**. Minha meta é que, para uma versão estável, com poucos comandos no terminal você tenha tudo funcionando. Parece mágica, mas é IaC\!

### Pré-requisitos

Antes de começar, você vai precisar de algumas ferramentas instaladas na sua máquina.

1.  **Git:** Essencial para clonar o repositório.
2.  **Docker (e Docker Compose):** Usado para criar o ambiente de desenvolvimento sem dor de cabeça.
3.  **Node.js (com npm):** Para gerenciar as dependências do Frontend (Angular).
4.  **Composer:** Para gerenciar as dependências do Backend (PHP).

> **Atenção usuários de Windows:** É **altamente recomendado** usar o **WSL2** (Subsistema do Windows para Linux). Todas as ferramentas (Git, Node.js, Composer) devem ser instaladas e os comandos, executados **dentro do ambiente WSL2** para garantir que tudo funcione corretamente.

### Configurando o Ambiente de Desenvolvimento

Com os pré-requisitos em ordem, abra seu terminal e vamos lá. Separei em duas partes: a configuração inicial e como iniciar o projeto nas próximas vezes.

#### 1\. Configuração Inicial (apenas na primeira vez)

Estes passos instalam as dependências do PHP e do JavaScript. Você só precisa fazê-los uma única vez.

```bash
# Clone o repositório para sua máquina
git clone https://github.com/nicolahsss/catalogo.git

# Entre na pasta do projeto
cd catalogo

# Acesse a pasta do Backend e instale as dependências do PHP
cd Backend
composer install

# Volte para a raiz e acesse a pasta do Frontend para instalar as dependências do JS
cd ../Frontend
npm install

# Volte para a raiz do projeto
cd ..

# Agora, suba o ambiente completo com o Docker
docker-compose up
```

#### 2\. Iniciando o Ambiente (nas próximas vezes)

Depois que as dependências já foram instaladas, basta fazer o seguinte para iniciar o projeto:

```bash
# Entre na pasta do projeto (caso não esteja nela)
cd catalogo

# Suba o ambiente. Simples assim!
docker-compose up
```

Após o `docker-compose up` terminar de subir os serviços, acesse **[http://localhost:8088](https://www.google.com/search?q=http://localhost:8088)** no seu navegador para ver o sistema.

## 🤝 E aí, quer ajudar?

Se você curtiu a ideia e quer participar, vou adorar\! Toda ajuda é super bem-vinda.

  * Encontrou um **bug** ou tem uma **ideia** legal? Abra uma **[Issue](https://github.com/nicolahsss/catalogo/issues)**.
  * Quer colocar a mão na massa e melhorar o **código**? Manda um **[Pull Request (PR)](https://github.com/nicolahsss/catalogo/pulls)**.

## ✨ Minha Jornada com a Programação (O porquê de tudo isso)

Minha paixão por tecnologia começou cedo, com a curiosidade despertada em uma lan house perto da escola. Aos 12 anos, um curso de informática foi o pontapé inicial, onde tive o primeiro contato com lógica de programação e criação de sites com Dreamweaver, que me fascinou.

A jornada foi marcada por muita experimentação: do meu primeiro PC com Mandriva Linux (e a crença popular de que "Linux não prestava") à reinstalação de sistemas e as primeiras aventuras quebrando e consertando o Windows. Meu primeiro "trabalho" remunerado veio daí: junto com um amigo do hardware, formatamos um PC e ganhamos R$ 20,00 cada — um valor bem significativo naquele ano\!

Na escola, meu conhecimento me abriu portas. Em troca de ajuda com os computadores, eu ganhava acesso livre à sala de informática e sua internet, que era meu portal de aprendizado. Foi lá que desmistifiquei o Linux e entendi anos depois a frase de um técnico que nunca esqueci: "Eu acho o Windows difícil".

Eventualmente, descobri o PHP **(minha primeira linguagem de programação)**, e apesar de conhecer outras hoje, tenho um carinho especial por ela. Durante a faculdade de Administração, deixei a programação um pouco de lado. Ao retornar, me deparei com um ecossistema completamente novo.

Essa jornada de curiosidade e aprendizado autodidata é a base que me permitiu criar projetos remunerados, estar desenvolvendo um SaaS e, agora, dar vida ao **Catalogo**: um lugar para continuar aprendendo e compartilhar um pouco dessa jornada com a comunidade.