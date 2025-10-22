# cosc213-php-lab-expressions-control-flow
This is a group repository for Course 213 Lab 6.

Prerequisites: Ensure PHP 7+ is installed (php -v in terminal). 

Setup: Clone this repo and navigate to the lab4/ folder. 

Running Scripts: For CLI-based parts (01_expressions.php, 02_branching.php, 03_loops.php): Run php filename.php in your terminal. For web-based parts (04_grade_form/, 05_toolkit/): Start a local server with php -S localhost:8000 from the lab4/ folder, then open the browser to http://localhost:8000/04_grade_form/ or http://localhost:8000/05_toolkit/. 

Testing: Use query parameters in URLs for dynamic inputs (e.g., ?score=95 for forms). 

Notes On '==' and '===': 

== (Loose Equality): Performs type coercion, meaning it converts values to the same type before comparing. We use this when we want flexible comparisons, but it's risky for user inputs or mixed types. 
=== (Strict Equality): Checks both value and type without coercion. Prefer === for security and accuracy, especially in conditionals, form validation, or when dealing with GET/POST data to avoid bugs from type mismatches. When to Choose: Use === by default for comparisons involving variables from external sources (like $_GET). Reserve == for cases where coercion is intentional.

Sample Inputs and Sample Outputs:
Each PHP file in this lab shpws a specific aspect of control flow and expressions.
Here are examples of what each file does along with what output you should see when you test them.

01_expressions.php
This file carries out arthmetic, string and logical operations. It accepts no input. When run, this emits results for an addition operation, a multiplication operation, a comparision and a generic ternary test to the terminal.
For instance, it shows sum = 13 prod = 30 a =15, and explains that PHP considers text that begins with a number to be that number, so "5cats" + 1 produces 6.
If that is done in a browser with ?score=80 in the URL, it prints Result: Pass.

02<branching.php
This file tests decision-making structures using if, elseif, switch, and match.
You can test this by running:

http://localhost:8000/02_branching.php?role=admin&day=Sat&code=404
The output will read:

"Welcome, admin"
"Enjoy your weekend!"
"404 => Not Found"

Changing these query parameters changes the message to:
(For example)
?role=editor&day=Mon&code=200 → “Welcome, user / Back to work. / OKish”

03_loops.php
This file shows how to use loops within PHP.
The code shows the multiples of 7 from a terminal at runtime. It adds numbers until the sum goes over 100. It implements the FizzBuzz challenge with that addition.

04_grade_form/index.php
This section creates a grade calculator form.
A letter grade(A-F) returns for you upon entering a number between 0 and 100.
For example:
Entered 85 - "Your grade is B."
Entered 45 - "Your grade is F. Consider office hours for support"
It uses conditional logic to validate user input.

05_toolkit/index.php
This is the most complete program, a small toolkit that changes depending on what "view" you select on the URL.

?view = times - shows the current time, followed by the next five minutes in a vertical list.
Example output:
17:58:41
17:59:41
18:00:41
18:02:41
18:03:41

?view=table - generates the 10x10 multiplication table using nested loops.

?view=stats&nums= 5,10,15,20 - computes statistics from a list of numbers.
Example output:
Count: 4
Sum: 50
Max: 20
Average: 12.50
The system will show an error message saying "enter a valid comma-sparated list of integers" in the event that the input is not an integer. This includes letters, empty input or other symbols.
