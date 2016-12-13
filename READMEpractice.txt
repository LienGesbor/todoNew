Reading this is completely optional. It just provides better insight and is a way for me to organize the inner workings.
I will get to using sanitized, prepared statements and all that security stuff once I get the dang thing actually working.

The directory structure is as follows:

Home	redir	src	explanation.txt

Home:
index.php, along with the js and css.

Redir:
 Used for security purposes,
Used for pages that execute a function and redirect to index.php.
This is so that the href link attributes within index.php don't
reveal sensitive folder structure.
I will change this habit once I find out a better way.

	Redir/DeleteAndReturn.php:
	Executes DeleteTask.php and ReturnToIndex.php
	respectively.


Src:
 Any webdev would know. This is where the primitive MVC structure is located.

	model:
	model/db/DbConnect: Contains database connection class and info.
	
	controller:
	Contains functions: DeleteTask.php, ReturnToIndex.php, RetrieveTask.php (queries PDO for row display in /src/views/DisplayTask.php).
	I believe the controller should have the business and model maniplulation logic, while model should have database logic.

View:

DisplayTask.php: Uses the query from controller/RetrieveTask.php, and echos the rows. All that is necessary in index.php is: DisplayTask();
DispayTask.php echos an <a> element with an href leading to /redirs/DeleteAndReturn.php. It was originally leading to src/controller/DeleteAndReturn.php,
but my gut was screaming at me that this iplementation was stupid, for some reason. Probably because it was displayed in the console window.

That should be it.


