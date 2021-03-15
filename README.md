Personal additions
1) Instead having premade users in database added an authentication/registration system 
2) Instead having premade users list of films in the database added a piece of functionality 
to dynamically add films into the database.
3) Added a simple search functionality. 
4) The site ended up being a few small pages instead of being just one.

To test:
1) I have used XAMPP as my web server using MySQL, I would assume you should have your own solution.
2) In the env. file change the "foo" on the line DB_DATABASE=foo to any appropriate db name that you are going to use.
3) Once the db is created with the same name as in previous step from the terminal run php artisan migrate and then php artisan serve.
4) Once the development server has started up press on the link in the terminal and it will open the website in the browser.
5) Register a user 
6) Once you are registered and logged in press on add film button in the top left.
7) Input correct imdbID of a film e.g. tt8526872 or tt4154756
8) Press Submit
9) You will be returned to the main page with newly added film. Repeat steps 6 to 8 to add more films.
10) To add a film to favourites press on your name in the top right of the page.
11) Select a film from the dropdown and press submit. 
12) Repeat steps 10 and 11 to add more favourite films. 
13) To see the list of favourite films press on "My Favourites" 
14) To remove films from favourite press on "Remove from favourites :("
15) To search for a certain film, type in characters tha can be in a name of a film e.g. b or batman and press submit.

Choices/Limitations:
1) Project made in Laravel since at the moment it is my most practiced framework which is also very suitable for small web apps.
2) Currently, there is no front-end validation so if a user doesn't do something right a scary error message is shown.
3) When a user removes a film from favourites it removes all films that are liked by that user. That is what I struggled with the most 
as I have tried to make it to delete only a single film, but I could not do it. I would assume it something with how Laravel works with pivot table I've set up.

Next steps:
1) Add front-end validation as well as some more back-end validation
2) Make it so that when user deletes a film from favourites it deletes a single film instead of all of them.
3) Make the website look nicer.
4) Add functionality to add films by name as well.
