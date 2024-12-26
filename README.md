# Local Setup

Follow these steps to set up the project locally:

## Prerequisites

Make sure you have the following installed on your machine:
- PHP >= 8.x
- Composer
- MySQL (or your preferred database)
- Git
- Node.js and npm (for Tailwind CSS)

## Steps to Set Up Locally

1. **Get the Project**  
   You can either clone the repository or download it as a ZIP file:

   ### Clone the Repository
   ``` bash
   git clone https://github.com/Napyleon-Blownaparte/perkantas-self-paced-learning-app.git
   cd yourproject
   ```

   ### Download as ZIP
   - Go to the repository page on GitHub.
   - Click the green **Code** button and select **Download ZIP**.
   - Extract the ZIP file and navigate to the project folder.

3. **Install PHP Dependencies**  
   Install the PHP dependencies using Composer:
   ``` bash
   composer install
   ```

5. **Set Up Environment File**  
   Copy the example environment file and update the necessary values:
   ``` bash
   cp .env.example .env   
   ```

   Update the following database-related fields in the `.env` file:
   ``` plaintext
   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306  
   DB_DATABASE=your_database_name  
   DB_USERNAME=your_database_user  
   DB_PASSWORD=your_database_password 
   ```
    

7. **Generate Application Key**  
   Generate the application key required by Laravel:
   ``` bash
   php artisan key:generate  
   ```
   
9. **Set Up the Database**  
   - Create a new database for the project in MySQL (or your preferred database).  
   - Run the migrations to set up the tables:
     ``` bash
     php artisan migrate --seed
     ```

10. **Install Node.js Dependencies (for Tailwind CSS)**  
   Install Node.js dependencies required for Tailwind CSS:
    ``` bash
    npm install  
    ```
   
12. **Compile Tailwind CSS (Local Only)**  
   Compile the Tailwind CSS assets for local development:
    ``` bash
    npm run dev  
    ```

14. **Link Storage**  
   Link the `storage` folder to `public` for serving user-uploaded files:
    ``` bash
    php artisan storage:link  
    ```  
   
16. **Run the Development Server**  
    Start the Laravel development server:
    ``` bash
    php artisan serve 
    ```    

    The project will be accessible at `http://localhost:8000`.

11. **Set Up Email Service**  
    You can use **Mailpit** or another email service for local testing. Here's an example with Mailpit:

    ### Mailpit Setup
    - Install and run Mailpit:
      Visit the official [Mailpit GitHub page](https://github.com/axllent/mailpit) for installation instructions. You can download the binary for your operating system or install it via Docker.    
      ``` bash
      mailpit 
      ```
    - Update the `.env` file for Mailpit:
      ``` plaintext
      MAIL_MAILER=smtp  
      MAIL_HOST=127.0.0.1  
      MAIL_PORT=1025  
      MAIL_USERNAME=null  
      MAIL_PASSWORD=null  
      MAIL_ENCRYPTION=null
      ```

    ### Other Email Services
    If you're using another email service (e.g., Gmail, Mailgun), update the `.env` file accordingly:
    ``` plaintext
    MAIL_MAILER=smtp  
    MAIL_HOST=smtp.gmail.com  
    MAIL_PORT=587  
    MAIL_USERNAME=your_email@gmail.com  
    MAIL_PASSWORD=your_email_password  
    MAIL_ENCRYPTION=tls
    ```
