# Alex's Shopping App

Welcome to my shopping app! I'm testing my dev skills, troubleshooting, and logic.

I chose PHP for the backend because I'm most familiar with it, and breaking in and out of PHP in the same file is ridiculously convenient.

## How does it work?

This uses a PHP backend, MySql tables for the products, and simple html/javascript.

## What does it do?

There are four products in the store that the user can choose from. They can change the quantity of the items they'd like to purchase, and remove items from the cart if they'd like.

Once they're happy with their choices, they can pay for their items using Stripe Checkout (specifically this [js example](https://stripe.com/docs/quickstart)).

## Which Stripe APIs does it use?

I used the Stripe PHP example from the [documentation](https://stripe.com/docs/checkout/php) to get my config.php and charge.php, and I used the snippet of JS from the Payments>Quickstart page (referenced in the "What does it do?" section above)

## How I approached the problem

I tried to think about how I put together custom demos now:
* use a backend I'm familiar with
* use the prospect's front-end code (view-source from their site and complete the urls so I have full or mostly-full functionality) to build a functional demo with the user-journey+features in mind
* this allows me to give the prospects a real-world (or relatively close approximation) idea of what our product can do, and what it could look like right in their site

## Why I picked this language/framework

I'm most familiar with PHP, and from an ease-of-use perspective, I love that I can break in and out of PHP and HTML/javascript on the fly, and I don't typically have to worry about types - PHP does a pretty great job most of the time inferring the type

## How might I extend this if I wanted a more robust instance of this application

None! It's perfect the way it is! I'm going to market!

=]

There's so much that would need to be done to this site to make it one that I'd actually want to use.

I think I'd start with infosec, and rewrite the codebase with infosec in mind (or more likely have someone amazing at infosec help me with it).

Then I'd work on the product itself 
* Have a designer help with layout, logos, and a brand guide
* add pages for each item available for purchase, each with
 * a larger image
 * an overview of the features/benefits
 * a reviews section
 * an awesome specs section
 
A quick and easy thing to do would be add more products - these four are sad.
