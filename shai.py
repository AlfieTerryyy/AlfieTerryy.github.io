import os
import random

responses = {
    # Help
    "help": ["https://alfieterry.co.uk/shai/help"],
    "h": ["https://alfieterry.co.uk/shai/help"],
    # Functions
    "ss": ["Systems Stored Are Currently at : 000"],
    "cm": ["The Current Amount of members is : 000"],
}

def SHAI_response(user_input):
    return random.choice(responses.get(user_input.lower(), ["Invalid Request - Error Code: 001"]))

def clear_console():
    os.system('cls' if os.name == 'nt' else 'clear')

while True:
    user_input = input("Usr: ")
    if user_input.lower() in ["usr stop", "us"]:
        print("SHAI: Command Prompt Closing")
        break
    elif user_input.lower() == "clear":
        clear_console()
    else:
        print("SHAI:", SHAI_response(user_input))
