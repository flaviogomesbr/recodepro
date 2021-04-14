#for (exemplo tabuada)
a = int(input('Digite o numero que deseja da tabuada: '))

print('A tabuada de {} é:'.format(a))

for tabu in range (1,11):
    vezes = a * tabu
    print('{} * {} = {}'.format(a, tabu, vezes))