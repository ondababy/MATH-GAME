def diary_application():
    while True:
        # Display the menu options
        choice = input("Choose an option:\n1. Add Diary Entry\n2. Read Diary Entries\nEnter your choice (1 or 2): ")

        if choice == "1":
            entry = input("Enter your diary entry: ")
            try:
                with open(r"C:\Users\Adrian\pythonlab\diary.txt", "a") as file:
                    file.write(f"{entry}\n")
                    print("Your diary entry has been saved successfully.")
            except PermissionError:
                print("Error: Permission denied! Unable to write to the diary file.")

        elif choice == "2":
            try:
                with open(r"C:\Users\Adrian\pythonlab\diary.txt", "r") as file:  
                    entries = file.readlines()
                    if entries:
                        print("Your Diary Entries:")
                        for entry in entries:
                            print(entry.strip())  
                    else:
                        print("No entries found.")
            except FileNotFoundError:
                print("Error: Diary file not found.")
            except PermissionError:
                print("Error: Permission denied! Unable to read from the diary file.")


        else:
            print("Invalid choice! Please select either 1 or 2.")

        continue_choice = input("Do you want to continue? (yes/no): ").strip().lower()
        if continue_choice != "yes":
            break  

diary_application()