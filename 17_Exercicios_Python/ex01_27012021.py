#Aula de Python 27.01.2020_com José

#declarar variável: passar apenas o nome
nome = "Flavio"
print(nome)

#exibir na tela
print(nome)

#calculo resto de divisão
numero = 15
print(numero//4)

#exibir o tipo da variável (int, "string", float, etc)
numero = 15.5
print(type(numero))

#importar conteúdo no python (exemplo data)
from datetime import date
data_completa = date.today()

dia = data_completa.day
mes = data_completa.month
ano = data_completa.year
print("dia = {}, mes = {}, ano = {}".format(dia, mes, ano))

#print("dia = {2}, mes = {1}, ano = {0}".format(dia, mes, ano))

#tipos:
# s = string
# f = float
# d = int
# EXEMPLO: print("%s" %nome)

# function nome(){}
def exibir_nome():
    nome = input("Digite um nome: ")
    print(nome)

exibir_nome()

