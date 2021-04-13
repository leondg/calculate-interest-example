# Calculate Interest Example

## Requirements
- PHP 7.4 CLI
- Composer


## Setup
- Clone the project with git  
`git clone https://github.com/leondg/calculate-interest-example.git <project-dir>`

- Run composer in the project directory to install all the dependencies.  
`composer install`

- You can now run the console command with:  
`php console.php app:interest:calculate`

- To get the final amount for 10 years with an anual contribution of 500 and an interest rate of 2:  
`php console.php app:interest:calculate 500 2 10`

Example results:
```
php console.php app:interest:calculate 500 2 10
- Calculating with the following arguments:
-- Contribution: 500
-- Interest Rate: 2
-- Years: 10
[ Year: 1 - Amount: 510.00 ]
[ Year: 2 - Amount: 1,030.20 ]
[ Year: 3 - Amount: 1,560.80 ]
[ Year: 4 - Amount: 2,102.02 ]
[ Year: 5 - Amount: 2,654.06 ]
[ Year: 6 - Amount: 3,217.14 ]
[ Year: 7 - Amount: 3,791.48 ]
[ Year: 8 - Amount: 4,377.31 ]
[ Year: 9 - Amount: 4,974.86 ]
[ Year: 10 - Amount: 5,584.36 ]
```

## Improvements
- Use a web layout instead of the php console
