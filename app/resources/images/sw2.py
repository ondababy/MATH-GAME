while True:
    num1 = int(input("Enter the first number: "))
    num2 = int(input("Enter the second number: "))

    result = num1 + num2

    with open("result.txt", "a") as file:
        file.write(f"The result of {num1} + {num2} = {result}\n")
    
    choice = input("Do you want to add more numbers? (y/n): ")
    
    if choice.lower() == 'n':
        with open("result.txt", "r") as file:
            print(file.read())
        break

print("All results have been appended to 'result.txt'")
