## Library  

> This is a library service that accepts an SMS request and returns a Json response  

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Installing

1. open your terminal inside the application directory or use the following command ```cd library```

2. Install dependencies

   ```
   composer install
   ```
4. Setup Aplication

Copy and Rename .env.example to .env and fill the environment variable with the following command.
```
cp .env.example .env
```
Generate a new key for your local application
```
php artisan key:generate
```
run the application using the below command 
```
php artisan serve
```
your application is now running on `http://localhost:8000`




## Making a Request
All post request are made to this url `http://localhost:8000/`
your request body should be in either form below.
```
{"reg":"CS/20/2016", "book":"PE 1478 S65 1991", "date":"21/01/2016-30/01/2016"}
```
or
```
"CS/20/2016", "PE 1478 S65 1991","21/01/2016-30/01/2016" 
```

your response will look like below
```
{
    "reg": "CS/20/2016",
    "book": "PE 1478 S65 1991",
    "date": "21/01/2016-30/01/2016"
}
```

# Assumptions Made When Developing This Service
1. There is an sms sender (Api)
2. That there are books stored in the Library System

# Improvements on the message structure
1. I would engage the sms provider/telco directly to provide the service.
2. Standardize the way the messages should be sent to the library system (to be uniform and in Json format)

# Improvements on my solution
1. I would have added logging into the app to track the requests and responses & errors in the application (elasticsearch)
2. Setup a database that would save the requests