# Project overview.

A Basic Blog Application with the following pages:

- Homepage: Displays the list of blogs with **Title, Excerpt (First 100 characters), Author, Publication Date, Read More** link that redirects to the detailed page.
- Blog Detail Page: Shows the full details of the blog page. Also, displays existing comments of the blog and the option to add a comment using **Name, Email and the Comment content**.
- Admin Panel: Shows all the blogs with the option to edit or delete the blogs. Also, an **Add New Blog** button to create a new blog

MySQL is used to store the database **first_ci4** which contains 2 tables: **posts** and **comments**.

Table **posts** contains the following columns:
post_id, post_title, post_content, post_author, post_created_at, post_updated_at

**post_id** is auto-incremented whenever a blog post is added.

**post_created_at** defaults to the date the post was created at.

**post_updated_at** defaults to the latest date the post was last updated at. If the post is never updated, it defaults to **post_created_at**

Table **comments** contains the following columns:
id, blog_id, name, email, comment, created_at

**id** is auto-incremented whenever a new comment is added to any of the blog posts.

**blog_id** is a foreign key referencing the **post_id** in the **posts** table.

**created_at** defaults to the date the comment was created at.

# Instructions to set up the project locally.

1. Clone the repository

2. Install XAMPP

3. Set up the database

    * Copy the **first_ci4.sql** file to a safe location.
    * Open **phpMyAdmin** (```http://localhost/phpmyadmin```).
    * Create a new database named **first_ci4**
    * Select the **first_ci4** database and click **Import**.
    * Choose the **first_ci4.sql** file and click **Go**.

4. Configure the project

    * Open the **citest** project folder in a code editor.
    * Edit the database configuration (```app/Config/Database.php```)

5. Copy the cloned **citest** project folder to ```xampp/htdocs/```.

# Instructions to run the project.

1. Open XAMPP Control Panel

2. Start **Apache** and **MySQL** services.

3. Open a browser and navigate to: ```http://localhost/citest/public/blog```

# Any assumptions or limitations of your implementation.


- This project assumes you have PHP and Composer installed on your local machine.
- The instructions are tailored for a local development environment and may need adjustments for production.
- The project does not include authentication or authorization features by default.
- The database configuration provided is for MySQL; other databases may require additional setup.
- The project is based on CodeIgniter 4, and compatibility with future versions is not guaranteed.