>>> ("Olá, mundo!")
'Olá, mundo!'
>>> 1+1
2
>>> 2^
  File "<stdin>", line 1
    2^
     ^
SyntaxError: invalid syntax
>>> 2^2
0
>>> 4*2
8
>>> 4^2
6
>>> 4**2
16
>>> clear
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
NameError: name 'clear' is not defined
>>> print(5+2)
7
>>> print('Palmeiras será que vem o Mundial?')
Palmeiras será que vem o Mundial?
>>> print('5'+'2')
52
>>> ('São','Paulo')
('São', 'Paulo')
>>> print('São', 'Paulo')
São Paulo
>>> print('Olá', 5)
Olá 5
>>> nome='Thiago'
>>> idade=18
>>> hobby="Livros"
>>> print(nome, idade, hobby)
Thiago 18 Livros
>>> Qual o seu nome?Thiago
  File "<stdin>", line 1
    Qual o seu nome?Thiago
         ^
SyntaxError: invalid syntax
>>> nome=input('Qual o seu nome?')
Qual o seu nome?Thiago
>>> nome=input('Qual o seu nome?')
Qual o seu nome?Gilvan
>>> nome=input('Qual a sua idade?')
Qual a sua idade?18
>>> idade=input('Qual a sua idade?')
Qual a sua idade?18
>>> hobby=input('Qual o seu hobby?')
Qual o seu hobby?Programação
>>> print(nome, idade, hobby)
18 18 Programação
>>> nome=input('Qual o seu nome?')
Qual o seu nome?Thiago
>>> print(nome, idade, hobby)
Thiago 18 Programação
>>> Qual o seu nome?
  File "<stdin>", line 1
    Qual o seu nome?
         ^
SyntaxError: invalid syntax
>>> nome=input('Qual o seu nome?')
Qual o seu nome?Flavio
>>> mensagem=input('Seja bem vindo, ')
Seja bem vindo, nome
>>> print(mensagem, nome)
nome Flavio
>>> mensagem=input('Qual a mensagem?')
Qual a mensagem?Seja bem vindo
>>> print(mensagem, nome)
Seja bem vindo Flavio
>>> mensagem=input('Qual a mensagem?')
Qual a mensagem?Seja bem vindo,
>>> print(mensagem, nome)
Seja bem vindo,  Flavio
>>> print(nome, "Seja bem vindx!")
Flavio Seja bem vindx!
>>> print(nome, ", Seja bem vindx!")
Flavio , Seja bem vindx!
>>> print(nome,',',"Seja bem vindx!")
Flavio , Seja bem vindx!
>>> dia=input('Que dia vc nasceu?')
Que dia vc nasceu?12
>>> mês=input('Que mês vc nasceu?')
Que mês vc nasceu?04
>>> ano=input('Que ano vc nasceu?')
Que ano vc nasceu?2000
>>> print(dia, mês, ano)
12 04 2000
>>> dia=input('Que dia vc nasceu?')
Que dia vc nasceu?12
>>> print(dia'/',mês'/', ano'/')
  File "<stdin>", line 1
    print(dia'/',mês'/', ano'/')
             ^
SyntaxError: invalid syntax
>>> print(dia,'/',mês,'/', ano,'/')
12 / 04 / 2000 /
>>> print(dia,'/',mês,'/', ano)
12 / 04 / 2000
>>> print('Vc nasceu em ', dia,'/',mês,'/', ano)
Vc nasceu em  12 / 04 / 2000
>>> dia=input('Que dia vc nasceu?')
Que dia vc nasceu?12
>>> mês=input('Que mês vc nasceu?')
Que mês vc nasceu?04
>>> ano=input('Que ano vc nasceu?')
Que ano vc nasceu?2000
>>> print('Vc nasceu em ', dia,'/',mês,'/', ano)
Vc nasceu em  12 / 04 / 2000
>>>