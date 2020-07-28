line1 = input().split(' ')
line2 = input().split(' ')

code1 = int(line1[0])
quantity1 = int(line1[1])
value1 = float(line1[2])

code2 = int(line2[0])
quantity2 = int(line2[1])
value2 = float(line2[2])

print('VALOR A PAGAR: R$ {total:0.2f}'.format(
    total = (quantity1 * value1) + (quantity2 * value2)
))
