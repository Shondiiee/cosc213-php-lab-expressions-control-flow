# cosc213-php-lab-expressions-control-flow
This is a group repository for Course 213 Lab 6.

Prerequisites: Ensure PHP 7+ is installed (php -v in terminal). 

Setup: Clone this repo and navigate to the lab4/ folder. 

Running Scripts: For CLI-based parts (01_expressions.php, 02_branching.php, 03_loops.php): Run php filename.php in your terminal. For web-based parts (04_grade_form/, 05_toolkit/): Start a local server with php -S localhost:8000 from the lab4/ folder, then open the browser to http://localhost:8000/04_grade_form/ or http://localhost:8000/05_toolkit/. 

Testing: Use query parameters in URLs for dynamic inputs (e.g., ?score=95 for forms). 

Notes On '==' and '===': 

== (Loose Equality): Performs type coercion, meaning it converts values to the same type before comparing. We use this when we want flexible comparisons, but it's risky for user inputs or mixed types. 
=== (Strict Equality): Checks both value and type without coercion. Prefer === for security and accuracy, especially in conditionals, form validation, or when dealing with GET/POST data to avoid bugs from type mismatches. When to Choose: Use === by default for comparisons involving variables from external sources (like $_GET). Reserve == for cases where coercion is intentional.
