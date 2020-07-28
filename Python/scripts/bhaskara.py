import math
import sys

for line in sys.stdin:
    try:
        input_list = line.split(' ')

        a = float(input_list[0])
        b = float(input_list[1])
        c = float(input_list[2])

        delta = (b ** 2 - 4 * a * c)

        if a == 0:
            print("Impossivel calcular")

            continue
        elif delta < 0:
            print("Impossivel calcular")

            continue
        else:
            raw_r1 = (-b + (math.sqrt(delta))) / (2 * a)
            raw_r2 = (-b - (math.sqrt(delta))) / (2 * a)

            print('R1 = {output_r1}'.format(output_r1 = round(raw_r1, 5)))
            print('R2 = {output_r2}'.format(output_r2 = round(raw_r2, 5)))

            continue
    except:
        break
