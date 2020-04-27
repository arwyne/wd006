Agenda  for the next few days is to create a PHP ecommerce web app:

Day 1:
	- folder structure
	- create the database
	- registration page
	- login page

	stretch goals:
	- add item
	- display items

activity
- personalize login view
- inside partials/header, create a navbar with 2 nav items
	- will load register view
	- will load login view
- create controllers/auth.php
	- once login is submitted, store the values from the form the 
	superglobal post to a variable called $email and $password.
	var_dump the values if the user submits the form

DEADLINE: 4:30pm


Day 2
	- login page - done
	- logout
	- add item - partial
	- display items - done

Day 3
	- Add item - done
	- Log out - done
	- Once logged in, Display user's first name on the nav bar - done
	- Once logged out, user can not access, gallery page - done
	- On the nav bar, if the user is logged in, the link register and log in should not appear.
	- if the user is logged out, the link log out shot not appear


Next Week (April 27)
	Continue doing your php-minicapstone Covid19 Screening Tool App
		1.5 session, you will build the back end part:
		requirements: 
		Create a registration form that will get the users'age, firstname, lastname, email, username and password
			*Registration of the user is optional*
		Create a login form so users can choose to login if they want to view the results on their profile page
		Once logged in, the firstname of the user should appear on the app's nav bar
		Logged in users that took the test can access their profile page that fetches the results from the app's database
		If the user took the test anonymously, the summary page will display the results but user will not be able to access the result once he leaves the page. (use Session)

		Stretch Goal: 
		 *Create an admin account that shows a page of all the result gathered by the app:
		      * of PUI
		      * of PUM
		      * of neither

For the Database - We'll host it on Remotemysql.com (Later 4pm)