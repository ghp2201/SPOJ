input_value = float(input())

""" List structure: [value, quantity] """

money_notes = [
    [100.00, 0],
    [50.00, 0],
    [20.00, 0],
    [10.00, 0],
    [5.00, 0],
    [2.00, 0],
]

coins = [
    [1.00, 0],
    [0.50, 0],
    [0.25, 0],
    [0.10, 0],
    [0.05, 0],
    [0.01, 0]
]


def calc_quantity(data_list):
    global input_value

    for data in data_list:
        if data[0] < 0.05:
            data[1] = input_value / data[0]
        else:
            data[1] = input_value // data[0]

        input_value = input_value % data[0]


def print_quantity(text, data_list):
    for data in data_list:
        print(f"{data[1]:0.0f} {text} de R$ {data[0]:0.2f}")

if input_value > 0:
    calc_quantity(money_notes)

    if input_value > 0 and input_value < 2:
        calc_quantity(coins)


print('NOTAS:')
print_quantity('nota(s)', money_notes)
print('MOEDAS:')
print_quantity('moeda(s)', coins)
