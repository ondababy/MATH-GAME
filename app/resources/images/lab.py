def write_to_file(num1, num2, multiplication_result, division_result):
    with open('math_results.txt', 'w') as file:
        file.write(f'{num1} * {num2} = {multiplication_result}\n')
        file.write(f'{num1} / {num2} = {division_result}\n')
    print("Results overwritten in the file.")

def append_to_file(num1, num2, multiplication_result, division_result):
    with open('math_results.txt', 'a') as file:
        file.write(f'{num1} * {num2} = {multiplication_result}\n')
        file.write(f'{num1} / {num2} = {division_result}\n')
    print("Results appended to the file.")

def read_from_file():
    try:
        with open('math_results.txt', 'r') as file:
            content = file.read()
        print("File contents:")
        print(content)
    except FileNotFoundError:
        print("File not found. No operations have been written yet.")

def main():
    while True:
        try:
            print("\n1- Write to a file (overwrite)")
            print("2- Append to a file")
            print("3- Read file")
            print("4- Exit")
            option = int(input("Enter option (1/2/3/4): "))
            if option == 1 or option == 2:
                num1 = float(input("Enter the first number: "))
                num2 = float(input("Enter the second number: "))
                multiplication_result = num1 * num2
                try:
                    division_result = num1 / num2
                except ZeroDivisionError:
                    division_result = "undefined (division by zero)"
                
                if option == 1:
                    write_to_file(num1, num2, multiplication_result, division_result)
                elif option == 2:
                    append_to_file(num1, num2, multiplication_result, division_result)
            elif option == 3:
                read_from_file()
            elif option == 4:
                print("Laboratory file handling done!")
                break
            else:
                print("Invalid option. Please choose 1, 2, 3, or 4.")
        except ValueError:
            print("Invalid input. Please enter a number.")

main()
