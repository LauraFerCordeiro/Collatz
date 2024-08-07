## Conjectura de Collatz

#### O que é?
Em 1930, o matemático alemão Luther Collatz teria criado um problema matemático aparentemente simples que ficou conhecido posteriormente como "Conjectura de Collatz". Muitos outros nomes existem para esse problema, sendo conhecido também simplesmente como 3x+1.
Funciona da seguinte forma: ao escolher um número, aplica-se uma regra dependendo se esse número é par ou ímpar. As mesmas regras continuam sendo aplicadas aos resultados obtidos. Assim, todos os números, independente de qual seja o primeiro escolhido, acabam resultando em um loop infinito de 4, 2, 1.

###### Regra: Número Ímpar:
 - Caso o número seja impar, o número X deve ser multiplicado por 3 e somado a 1. Ou seja, 3x+1.

###### Regra: Número Par:
 - Para os casos de números pares, dividimos por 2 o valor, ou seja x/2.

#### Descrição do Programa
Um website que exibe as informações como uma tabela, calculando para os primeiros 1000 números (1 a 1000) quantos passos são necessários para chegar ao valor 1 seguindo a regra do 3x+1, e também qual é o maior número que é alcançado.

#### Exemplo:
Número escolhido: 7
   - 7 (impar): 3*7+1 = 22
   - 22 (par): 22/2 = 11
   - 11 (impar): 3*11+1 = 34
   - 34 (par): 34/2 = 17
   - 17 (impar): 3*17+1 = 52
   - 52 (par): 52/2 = 26
   - 26 (par): 26/2 = 13
   - 13 (impar): 3*13+1 = 40
   - 40 (par): 40/2 = 20
   - 20 (par): 20/2 = 10
   - 10 (par): 10/2 = 5
   - 5 (impar): 3*5+1 = 16
   - 16 (par): 16/2 = 8
   - 8 (par): 8/2 = 4
   - 4 (par): 4/2 = 2
   - 2 (par): 2/2 = 1
    
#### Documentação:
Esse projeto foi realizado em Php, por isso para executá-lo no navegador é necessário um servidor web Apache que irá interpretar os scripts. No meu caso utilizei o XAMPP.

XAMPP (Servidor web Apache): [Download](https://www.apachefriends.org/pt_br/index.html)

Após a instalação do XAMPP é necessário executar o Apache Web Server:

<div align="center">
 
 ![imagem inicialização do XAMPP](https://github.com/user-attachments/assets/5a74e1b8-7ebf-46ee-977b-6e907831689a)

 ![imagem inicialização do Servidor Apache Web](https://github.com/user-attachments/assets/5cf4155e-c013-4258-ad89-71fafa4ca4e7)

 ![imagem Servidor rodando](https://github.com/user-attachments/assets/b37c0184-a2f0-41ba-94a4-261894dc38aa)

</div>

Agora nosso Apache Web Server já está rodando. Precisamos então colocar a nossa pasta de códigos PHP dentro da pasta htdocs do Xampp, para que ele possa executar localmente os scripts. 

##### Para Windows:

 *1º Vá até o diretório de instalação do XAMPP. Normalmente, a pasta “htdocs” está dentro da pasta XAMPP*

 *2º Cole a pasta do seu projeto dentro da pasta "htdocs"*

 *3º Acesse seu projeto digitando “http://localhost/NomeDoSeuProjeto” na barra de endereços do navegador*

##### Para Linux:

 *1º Localize a pasta "opt" do seu computador e a pasta "lampp" (normalmente fica dentro da "opt")*

 *2º Agora entre na pasta "htdocs" (normalmente fica dentro da pasta "lampp")*

 *3º Pronto, é aqui que você irá colocar todos seus projetos para serem executados localmente em seu servidor. Então cole a pasta do seu projeto aqui*

 *4º Acesse seu projeto digitando “http://localhost/NomeDoSeuProjeto” na barra de endereços do navegador*

