# ureg
This personal project is done for school assignment.
The main aim of this project is to build a website where user can upload their information about previous work experience, 
who lost their job during this COVID-19.Their registration can be edited and deleted.

All those information are store in Database.

For this project I used HTML, CSS, Boostrap, PHP, and for Database I used phpmyadmin. 
In some points I gather information from https://www.w3schools.com/, https://stackoverflow.com/

First for the fronted I started with basic Boostrap Carousel Template 
(https://getbootstrap.com/docs/4.0/examples/carousel/). where I used navbar, slide, container, featurette and for modification 
later i added jumbotron container (for search option) and then customize some html and css. For later use of nav bar and footer 
I sparated them in 3 part. I added Nav bar in header.php main body of landing page in frontpage. and footer in footer.php then 
I created a registration form in reg-create.php

The second phase of this project was to create a database in phpmyadmin, I created two tables one for category and 
another was for registration form. In case of databse connection I created config.php where i includ all information 
about my database so the it can be accesable.

Then for backend I stared with index.php and called frontpage.php, in search option element I include category table from database. 
For registration form i created create.php and called reg-create.php there.

for edit the registration form both main file where a little updated.
In landing page previous registration can be found under the search option If you click view details name, 
location, about previous companay, email will be showed from the database.

Then I took help from https://www.w3schools.com/, https://stackoverflow.com/ for redirectory and Data Objects ( PDO ) extension

For note in nav bar Home is linked with index.php, registartion is linked with create.php but sign up page is not linked or connected with database. 
And I also added sql file of this project.

After the project was done I uploded this project in infinityfree.net and here in the link : http://ureg.epizy.com/index.php

Best Regards

Habib Al Islam
