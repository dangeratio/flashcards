# dangeratio-flashcards

a flashcard implementation based on cakephp and XAMPP

Installation:

    Get a recent version of CakePHP. (http://cakephp.org/) I used CakePHP 2.6.1
    Get a recent version of XAMPP.  (https://www.apachefriends.org/index.html) I used XAMPP 5.6.3-0 for Mac
    Build an initial cakephp project, setup SQL connections etc.
    Run the cakeflashcards.sql on your sql database to create the required tables
    Copy flashcard files into the directory of your cakephp project
    You may also need to make ./app/tmp directory editable

Features

    Multiple flashcard sets
    Ability to "test" a set, cycling through random flashcards showing the front then the back of each randomly selected card
    Ability to add new cards to a set
    Ability to edit / delete sets
