# Projeto - Sistema de Criação de Formas Geométricas com Factory Method

## Descrição do Projeto

Este projeto visa implementar um sistema para a criação de formas geométricas (Círculos, Quadrados, Retângulos e Triângulos) de forma modular e extensível, utilizando o padrão de projeto **Factory Method**. O sistema permite ao usuário escolher o tipo de forma que deseja criar e visualizá-la na tela, com a possibilidade de adicionar novas formas no futuro sem a necessidade de alterar o código existente.

### Padrão de Projeto: **Factory Method**

O **Factory Method** é um padrão de design creacional que oferece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objeto que será criado. O objetivo deste projeto é criar as formas de maneira modular e garantir que a adição de novas formas seja feita de forma simples, sem modificar o código existente.

## Como Rodar o Projeto

Para rodar este projeto, siga as instruções abaixo:

### Passos para rodar

1. **Clone o repositório**

   Abra o terminal e clone o repositório com o comando:

   ```bash
   git clone https://github.com/alinehoffmann123/DessignPatternsFactorMethod.git
   cd DesignPatterns
   ```

2. **Rodando o servidor local: Inicie o servidor de desenvolvimento**:

   ```bash
   php artisan serve
   ```

## Perguntas

1. **Foram implementados dois padrões de projeto e o problema foi explicado pelos alunos de acordo com o escopo da questão?**

O padrão de projeto Factory Method foi implementado corretamente, seguindo as melhores práticas do padrão para criação modular de objetos. O escopo da questão, que visava garantir a criação modular de objetos, foi atendido com a implementação do Factory Method.

2. **O padrão de projeto e a problemática abordada foram explicadas corretamente?**

Sim, o padrão de projeto Factory Method foi corretamente explicado e aplicado ao problema. O objetivo de criar um sistema extensível para a criação de formas geométricas foi alcançado através da implementação da fábrica que cria instâncias de formas com base no tipo fornecido. Esse padrão facilita a adição de novas formas no futuro sem a necessidade de modificar o código existente, seguindo os princípios de modularidade e flexibilidade.


## Considerações Finais

Este projeto demonstra como o padrão Factory Method pode ser utilizado para resolver problemas de criação de objetos de forma modular e extensível. Ele pode ser facilmente expandido para adicionar novas formas, como pentágonos, hexágonos ou outras formas geométricas, sem a necessidade de alterar o código da classe principal ou da fábrica.


**Aluna: Aline Fernanda Hoffmann**