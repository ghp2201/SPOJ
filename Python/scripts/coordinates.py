from sys import stdin

for line in stdin:
    input_list = line.split(' ')
    x = float(input_list[0])
    y = float(input_list[1])

    if x > 0 and y > 0:
        print('Q1')
    elif x < 0 and y > 0:
        print('Q2')
    elif x < 0 and y < 0:
        print('Q3')
    elif x > 0 and y < 0:
        print('Q4')
    elif x == 0 and y != 0:
        print('Eixo Y')
    elif x != 0 and y == 0:
        print('Eixo X')
    else:
        print('Origem')
