Reading this is completely optional. It just provides better insight and is a way for me to organize the inner workings.

I KNOW I should not use include with absolute paths because it would
not work on other systems, but honestly whenever I tried to use relative paths
it wouldn't work. For example, if I had directories foo, bar. Foo: foo1.php, and foo2.php.
Bar: bar1.php, bar2.php. If in Foo/foo1.php I used require/include("../Bar/bar1.php")
it would work. But if I did the EXACT SAME THING in foo2.php, for some reason it wouldn't.
In the end absolute paths won.

The directory structure is as follows:

Home	redir	src	README.txt

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


