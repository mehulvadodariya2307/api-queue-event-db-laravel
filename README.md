
# Laravel API Submission App

This Laravel API project allows you to submit data and demonstrates proficiency with Laravel's job queues, database operations, migrations, and event handling.

## Setup

1. Clone the repository:

    ```
    git clone git@github.com:mehulvadodariya2307/api-queue-event-db-laravel.git
    ```

2. Navigate to the project directory:

    ```
    cd api-queue-event-db-laravel
    ```

3. Install Composer dependencies:

    ```
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

5. Generate an application key:

    ```
    php artisan key:generate
    ```

6. Configure your database settings in the `.env` file.

7. Set `QUEUE_CONNECTION=database` in `.env`

7. Run database migrations to create the necessary tables:

    ```
    php artisan migrate
    ```

## Testing the API Endpoint

You can test the API endpoint using a tool like Postman or cURL.

1. Send a `POST` request to `api/submit` with the following JSON payload structure:

    ```json
    curl -X POST http://localhost:8000/api/submit \
     -H "Content-Type: application/json" \
     -d '{
        "name": "John Doe",
        "email": "john.doe@example.com",
        "message": "This is a test message."
       }'
    ```

    Ensure you replace `"name"`, `"email"`, and `"message"` with appropriate values.

2. You should receive a successful response indicating that the submission has been received.

## Running Unit Tests

Unit tests have been provided to ensure the functionality of the submission endpoint.

Run the following command to execute the tests:

    
    php artisan test
    

## Additional Notes

- This project utilizes Laravel's job queues, database migrations, event handling, and error handling to demonstrate proficiency with Laravel's features.
- Ensure you have a compatible PHP version and required PHP extensions installed before running the project.

