# MVC method template for vanilla PHP projects.

## Why ?
As part of my web developer studies, we often have the opportunity to code in groups on full-stack projects. For the backend, we are required to use PHP, and for the frontend, we utilize HTML, CSS, and JS, all in vanilla form. To code efficiently as a group and save time by avoiding starting from scratch for each project, I have created this MVC template.

## For who ?
The goal is for our group and others to be able to reuse this template at the beginning of each new full-stack project. It also serves as a solid starting point for my personal projects.

## After ?
This template will continue to evolve as I progress in the field of web development.

## How use this template ?

To get started, you can clone the Git repository using the following command:

```bash Copy code
git clone https://github.com/LeBenjos/mvc-template-php-vanilla.git
```

The main objective of this project is quite simple. It all starts with the index.php file located in "public/index.php". This file is present there to prevent certain security issues. Our entire application will be managed from this file, so it is the page that will be constantly updated.

index.php calls the router (Router) located in "src/app/Router.php". The router then retrieves the HTTP request using the Request class located in "src/app/Request.php".

If the HTTP request matches a route defined in "src/app/routes.php", the router will load the appropriate controller and the corresponding method to be used. Otherwise, it will load the controller and method associated with the 404 error.

### Controllers:
The controllers "src/controllers/..." will be responsible for calling the view (what the user sees) as well as the necessary models (the database queries required by the view for proper functioning). They also filter the information received from the view before passing it to the model. Additionally, they handle loading the appropriate CSS styles using the updateStyles() method. It is important to ensure that the correct controller and method are called to load the desired page.

### Models:
The models are connected to the database.

>Remember to modify your database connection in "src/models/Databases.php".

Here, you will find all the queries related to your table. Typically, one model corresponds to one table in your database.

### Views:
The views represent the visual interface that the user sees and is loaded on top of "public/index.php". They include the HTML structure, CSS styles, JavaScript scripts, resources, and more. This encompasses the entire front-end aspect. To simplify things, you may also find templates such as the header and footer that are common to all pages. The specific content for each page is typically located in a file at the root of "src/views/...", for example, "TemplateView.php".