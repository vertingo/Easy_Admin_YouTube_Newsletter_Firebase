newsletterBundle
================

Newsletter bundle for Symfony 2.

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require usn/newsletter-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Usn\NewsletterBundle\UsnNewsletterBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Update your database schema 
-----------------------------------

```bash
php app/console doctrine:schema:update --force
```

Step 4: Include javascript
-------------------------

This bundle requires jquery. Include it in the layout template.

Run the command to install js assets

```bash
$ php app/console assets:install --symlink
```

Include the main.js file as below.

```twig
  <script src="{{ asset('bundles/usnnewsletter/js/main.js') }}"></script>
```

Step 5: update the routing file
-------------------------------

```
#app/config/routing.yml

usn_newsletter:
    resource: "@UsnNewsletterBundle/Resources/config/routing.yml"
```

Step 6: setup confirmation email parameters
-------------------------------------------

These parameters are used when sending the confirmation email after a user register it email address.

```
 #app/config/parameters.yml

 parameters:   
    
    confirmation_email_subject: Your auto-reply email subject
    newsletter_from_address: 'no-reply@yourdomain.com'
    newsletter_from_name: 'Sender name'
```

The confirmation email templates are located herer:

```
Resources/views/Default/comfirmation_email.html.twig
Resources/views/Default/comfirmation_email.txt.twig
```

How to include the newletter form into a template.
==================================================

```twig
{{render(controller('UsnNewsletterBundle:Default:subscribe'))}}
```



Get a report on the number of subscribers by emails
===================================================

The following command will send by email the number of subscribers:
```bash
php app/console usn:newsletter:report <recipient email>
```





