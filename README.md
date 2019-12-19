# Under the GUI

This is the final project in the RED Academy Web Dev program. A custom WordPress theme for Under The GUI Academy, a childrens after-school coding academy and real life client of RED Academy.

![Preview Image](https://raw.githubusercontent.com/redacademy/undergui-fall-2019/master/themes/utg-2019/assets/utg-mockup.png?token=ANHOTVFMLXNGDWYGR2BXORK6AURMO)

Image by <a href="https://pixabay.com/users/Tumisu-148124/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=492184">Tumisu</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=492184">Pixabay</a>

## Setup

This WordPress site is not hosted so you will need to follow this setup to view the site.

1. ensure you have [Node.js](https://nodejs.org/en/) installed in your terminal

2. ensure you have [MAMP](https://www.mamp.info/en/) installed and running a local server in order to view the site and access the database

3. with the previous technologies installed you can now run `npm install` to now install the dev dependencies associated with the project

4. with the technologies and dependencies installed you can now run and view the site!

## Key Learnings

### HTML

- used semantic class and id names to reference in SCSS and JavaScript
- demonstrated effective organization of directory by implementing file and folder naming and categorizing best practices
- included essential HTML elements in both head and body of the index
- implemented icon fonts via script to font-awesome account

### SASS / CSS 

- translated original design concept into my own, personalized code
- used a preprocessor to effectively use variables, partials, and mixins to create scalable code
- used appropriate selectors and kept code DRY and not over-specific
- demonstrated effective use of box model, flexbox, and CSS grid properties
- demonstrated effective use of font properties to implement design concepts
- embedded custom fonts using the @font--face method and with linking Google fonts
- animated DOM elements using transform: translate to avoid jankiness

### Javascript     

- defined variables using appropriate types, let and const
- used semantically named functions and variables to keep code easy to read and relevant
- used strict equality operators where needed
- used loops, functions, and conditionals to effectively implement JavaScript

### [jQuery](https://jquery.com/)

- wrapped jQuery in DOMContentLoaded function to wait for content to load
- used variables to store variables accessed more than once in jQuery
- used event listeners to appropriately respond to events on screen - load and scroll specifically
- selectively hid/showed DOM elements using jQuery

### [PHP](https://www.php.net/)

- effectively integrated PHP, HTML, JS, and SCSS to bring a WordPress custom theme together
- effectively communicated with a database to retrieve information to display on webpages

### [WordPress](https://wordpress.org/)

- effectively used WordPress as a content management system
- used an underscores based theme starter, combined with RED starter boilerplate, to create a completely custom theme
- filled in the appropriate comment fields to describe the theme
- effectively used WordPress menus, custom post types, taxonomies, Gutenberg blocks, and custom widgets to create and style content
- properly enqueued CSS and JS files in functions.php
- leveraged WordPress template hierarchy to effectively create pages
- wrapped jQuery in an IIFE to make \$ available in no-conflict mode

### [Gulp](https://gulpjs.com/)

- used appropriate developer dependencies for the scope of the project
  - [gulp](https://www.npmjs.com/package/gulp) - task automation toolkit
  - [gulp-terser](https://www.npmjs.com/package/gulp-terser) - compresses JS files
  - [gulp-rename](https://www.npmjs.com/package/gulp-rename) - renames compressed files in /build directory
  - [browserSync](https://www.npmjs.com/package/browser-sync) - keeps browser in sync during development
  - [gulp-eslint](https://www.npmjs.com/package/gulp-eslint) - identifies and reports errors and patterns
  - [gulp-sass](https://www.npmjs.com/package/gulp-sass) - normalizes SCSS files into browser ready CSS files
  - [gulp-autoprefixer](https://www.npmjs.com/package/gulp-autoprefixer) - parses CSS and adds vendor, or browser, prefixes
  - [gulp-cssnano](https://www.npmjs.com/package/gulp-cssnano) - compresses CSS files
  - [gulp-prettyError](https://www.npmjs.com/package/gulp-prettyerror) - displays errors in a pretty way without breaking tasks

### [Git](https://git-scm.com/)

- created a repository both locally and in the cloud with GitHub
- effectively used git push to upload my local repository to my remote repository
- used commits to follow version control best practices
- effectively used command line and commands on iTerm2 to initiate and commit git repositories
