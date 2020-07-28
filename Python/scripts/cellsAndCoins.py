input_value = float(input())

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

def quantity_calc(data_list):
    global input_value

    for data in data_list:
        data[1] = input_value // data[0]
        if data[0] < 0.05:
            data[1] = input_value / data[0]
        input_value = input_value % data[0]


def print_quantity(text, data_list):
    for data in data_list:
        print('{quantity:0.0f} {text} de R$ {value:0.2f}'.format(
            quantity = data[1],
            text = text,
            value = data[0]
        ))

if input_value > 0:
    quantity_calc(money_notes)

    if input_value > 0 and input_value < 2:
        quantity_calc(coins)

print('NOTAS:')
print_quantity('nota(s)', money_notes)
print('MOEDAS:')
print_quantity('moeda(s)', coins)
