# Project overview.



# Instructions to set up the project locally.

Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings.

# Instructions to run the project.

1. Start the local development server:
    ```bash
    php spark serve
    ```

2. Open your web browser and navigate to `http://localhost:8080`.

3. You should see the welcome page of CodeIgniter.

# Any assumptions or limitations of your implementation.


- This project assumes you have PHP and Composer installed on your local machine.
- The instructions are tailored for a local development environment and may need adjustments for production.
- The project does not include authentication or authorization features by default.
- The database configuration provided is for MySQL; other databases may require additional setup.
- The project is based on CodeIgniter 4, and compatibility with future versions is not guaranteed.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.