COLLEGE FEST WEBSITE INTEGRATED WITH DATABASE .
	This project has full working website connected to database that is managed by admin panel.


A). Features:

- made with HTML5,CSS3,Javascript,Jquery,PHP
- neat , simple and modern design
- fully responsive
- cross browser optimization
- use of Google Map and Google Calendar
- pdf viewer 

********************************************************************************************************************************************

B). Installation :
Here you can see two folders, front_zephyr and admin_zephyr
	front_zephyr-> It consists of all the files , necessary to run the frontend webpages
	admin_zephyr-> It consists of all the files , necessary to run the admin panel of ZEPHYR ,i.e. ZEPHYR Admin .

To run the code on localhost , in your PC, 
1)Install Xampp from https://www.apachefriends.org/index.html
2)Go to Xampp-control , in the xampp folder, and start Apache and Mysql
3)Now, save the two folders, front_zephyr and admin_zephyr in the folder 'htdocs' , which you will find in the xampp folder itself.
4)Open any web browser, preferably chrome, now search for "localhost/phpmyadmin/" in URL tab, this will take you to your phpmyadmin page.
5)Go to import and import the database using the file zephyr.sql provided in this folder.
6)Create a user and give it all the privileges of the imported database.
7)In both the folders, front_zephyr and admin_zephyr , you will find a file "linc.php", this file makes connection of the webpages with the database. Open this file in any text editor and change the name of user and password to the same which you have created in previous steps. Save the changes.
8)Again go to any web browser, preferably chrome, and in URL tab , type "localhost/front_zephyr/mainpage.php", this will take you to the website.
9)Now the website can be  traversed.
10)To login to the admin panel, go to admin menu in navigation bar, valid credentials are:-
Username:-  admin
Password:-  admin
(These credentials can be changed as per convinience.)

********************************************************************************************************************************************

C). ADMIN PANEL :
Admin Dashboard  or panel to use during college fests.

1). Overview - 
ZEPHYR Admin is a full-featured, multipurpose admin, built with Bootstrap 4 Framework, HTML5, CSS, Javascript , PHP.
It is a fully responsive admin dashboard that is user-friendly and can be operated with great ease .

2). How to use -
Index Page - The first page that is opened after admin is logged in is Index Page. When opened , we can see stastics related to fest's database in the middle area.
When clicking on the ZEPHYR logo on top left corner or on 'Home' in navigation area , we are directed to index page.

Along with index page , all other pages have following parts in left menu - 
- Query Box - This is an input field that takes any query as input and prints the corresponding results . Some queries have been provided handy for non-MySQL users. If you want to  see your queries in the Available Queries section , type them in file 'availableQueries.txt' inside folder admin_zephyr and save it.

- Event Menu - It takes care of showing all events in Google Calendar, creating an event, editing and deleting events .

- Managers Menu - Information associated with Managers - all Manager's details ,adding a Manager, editing and deleting a Manager data, can be done using this menu .

- Participants Menu -  Information associated with Participants - all Participant details , important/required details of Participants and delete Participants , can be selected from this menu .

- Volunteers Menu - Information associated with Volunteers - all Volunteer details , adding a Volunteer, editing and deleting a Volunteer data, can be done using this menu .

- Sponsors Menu - Information associated with Sponsors - all Sponsors details , adding a Sponsor , editing and deleting a Sponsor data, can be done from this menu .

- Chief Guests Menu - Information associated with Chief Guests - all Chief Guests details , adding a Chief Guest, editing and deleting a Chief Guest data, can be done using this menu .

- Interface 
	- Google Map - All venue related to events are shown on Google Maps with markers . 
	- PDF Viewer - To view any PDF/text file , PDF viewer can be used . Also PDF can be printed and downloaded.
	
- Logout  tab - To successfully come out of ZEPHYR Admin , this tab has to be clicked .	