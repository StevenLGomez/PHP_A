
PHP Essentials Course Instructor's Dialog
=========================================

Introduction
------------

**Welcome**

Welcome to PHP with MySQL essential training part one. My name is Kevin Skoglund. In this course, we will learn to use PHP to create,
read, update and delete records in a MySQL database. We will discover how to effectively organize the PHP pages in a project. 
We will build web pages in PHP that can send and read parameters in the URL. We will learn about headers, redirects, and the 
importance of output buffering. We will learn to create forms and to process form data. We will cover the basics of MySQL, 
use PHP to communicate with the database, and learn to perform the most common database operations.

And finally, we will learn how to validate and sanitize dynamic data to keep your application and its data in good shape. 
Once you're ready, let's get started learning to use PHP with MySQL.

**How to use the Exercise Files**

   This course includes exercise files. In order to make use of those files, you'll want to first make sure that you have 
   PHP and MySQL installed and working. The exercise files are arranged by chapter, and by movie. And you can find the 
   exercise files that correspond to the movie that you're watching by first looking for the chapter number, and then 
   the movie number. You should copy the exercise files into your web document route directory. That's the location 
   where your web server will look for files when a browser requests them. On my Mac, that will be inside my User 
   directory, inside the Sites directory.

   It's always a good idea to make a copy of the exercise files so that you'll still have the original to refer back 
   to if you make changes. I'm going to opt + drag the folder to create a new copy. Beginning in chapter five, we'll 
   be incorporating a database into our project, and for the exercise files to work, your database needs to match what 
   the files expect. In the exercise files for these chapters, you will find a database file that you can load into MySQL 
   to put your database into the same state as mine. If you don't already have a database, the first few movies of chapter 
   five will get you started.

   You can load that file directly into a MySQL database, either by using a tool such as phpMyAdmin, or by going to a 
   command line program, and typing, mysql, then a space, -u, and then a space, and then a username that's authorized 
   to access the database, and then, -p. Follow that with the database name that you want to import into, and then a 
   less than sign, and finally, the path to the exercise file. If you're on a Mac, you may be able to just drag that 
   file into the window, in order to get the full path to that file.

   When we finally hit Return, it'll prompt you for a password, and you enter the password for the user that you specified. 
   And then the data will be imported. Note that the import will remove all old database data at the same time as it imports 
   new data. Importing can also be useful if you do a lot of experimenting on your own, but then want to get your data back 
   in sync with mine. Once you have the same files in the same database, you'll be able to follow along with me. 
   Everything that's in the exercise files, we will create together during the tutorials.

   So you can just work along with me, and your files will mirror what's in the exercise files. Remember, that you can 
   pause the video, or rewind if you need more time to copy something down. You can also use the exercise files to check 
   your work, or to get back in sync, if you experiment on your own.

## 1. Start a Database Driven Project

### 1.1 Blueprint the Application

   We will begin creating our database driven project by learning how to blueprint an application. The web application that 
   we're going to be building is a Content Management System. Or CMS, for short. The idea is to have private webpages which 
   administrators can use to create and edit website content. But the public has different pages where they can read the 
   content but which are not editable. An essential first step when beginning any web project is to create a project blueprint. 
   If the site is simple, you may be able to simply type up a few notes or draw a picture on a single piece of paper.

   If your site's complex, you may need page mock-ups and flowcharts to keep track of everything. The fundamental idea, 
   in either case, is to take what's in your head and to put it on paper. So that you can look it over and assess it 
   before you start your work. It helps you to clarify the work that's ahead. And forces you to think about problems that 
   you might otherwise have put off until you were well down the road with your development. I usually do my blueprinting 
   by getting out pen and paper and drawing boxes to represent different parts of the site. I draw connections between the 
   boxes and I make notes and details that I don't want to forget.

   By the end, I have the full picture in front of me. And I don't have to hold all the moving parts in my head anymore. 
   Instead, I can use that part of my brain for development. I also don't have to try and build the whole site all at once. 
   I can begin to tackle it piece by piece. Moving through it in a methodical fashion. I can also tack my blueprint up on 
   the wall in front of me. So that I can refer to it constantly as I'm developing. It's efficient and it's liberating. 
   So let's begin our blueprint for our Content Management System.

   We know that we're going to need to have two areas. The Public Area and the Admin Area. The Public Area is going to 
   be fairly simple. The pages are all going to have a similar page structure. An area for navigation, like a menu of 
   content, and then an area to view that page content. So users will pick a navigation item and then the PHP page that 
   loads will show that pages content. Pick a new navigation item, get new page content. For the Admin Area, I know that 
   I'm going to need to start with a login page. Where we can ask admin users to provide a user name and password to 
   authenticate themselves and gain access.

   That'll keep the public out. If they log in successfully, then we'll take them to an admin menu page. This is a simple 
   landing page that lists the options in the admin area. Those options are just links to those other pages. The menu 
   choices will be manage content, manage admins, and logout. In the manage content area, I want to divide our website 
   content into two parts. Subjects and pages. So the webpage content will be stored on pages but then those pages are 
   going to be grouped by their subject.

   We'll see an example of this in just a moment. Next, we'll need a section to maintain the admin users. That is the 
   users who can access this admin area and use the CMS to update content. And, of course, the final menu option is 
   going to be, simply, logout. Which will perform that action of logging us out of the admin area. In this course, 
   which is part one of a two part series, we're going to focus on building the Admin Area section that allows us 
   to manage page content. Our subjects and our pages. This is going to give us an opportunity to learn how to interact 
   with the database and to create new records, read existing records in the database, edit those records and delete records.

   Then, in part two of this course, we'll build on those fundamentals of database interaction to complete our Content 
   Management System. So that completes the blueprint of our application architecture. Let me show you some examples so 
   that you'll have a better idea of where we're headed. This is what the public facing version of our website is going to 
   look like. At the moment, these are just simple HTML pages. You can see that we have the name of our fictitious website, 
   Globe Bank International, up at the top. And then we have a navigation over here that allows us to select different 
   subjects that we might want to view the content for.

   We also get a default homepage that's here. If we click About Globe Bank, you'll see that it loads up the About Globe 
   Bank page. This is a page content below the subject. We also have History, Leadership, Contact Us, and so on. And each 
   one of these subjects has different pages that are listed underneath it. So, again, this is our navigation. This is our 
   page content area. So that's what we're going to be building on the public side, eventually. What we're going to be 
   building in this course is going to be the Content Management System portion that'll allow us to manage this page content.

   Here's an example of what that might look like. So here's an example of the Staff Area that we're going to be building 
   in this course. Now there is no login or logout at the moment. We don't have any admin users, there's no passwords or 
   anything like that. We're going to be building all of that in part two. We'll learn about user authentication. We'll 
   learn how to password protect all this content. For this course, we're going to be focused exclusively on how we 
   interact with the database. So that we can manage the content of our subjects and our pages. So let's click on Subjects 
   to get an idea of what that looks like.

   When I click on Subjects, you'll see I get a list of the subjects that are in the database. Notice this is PHP, it is 
   pulling content from the database. And I'm getting a list of all the subjects that are currently in the database. It's 
   reading those back and displaying them. Then I also have the ability to view detail on any one of those. I'll click View. 
   And you can see I get a detailed view about what's in each one of those records. I also have options for editing. Or, 
   I'll go back, I have an option for deleting. If I want to delete the content.

   There's also an option up here for creating a new subject. If I want to add a new subject to the database as well. 
   So those are the basic ways we're going to interact with this content. We're going to do it for both subjects and, 
   also, for our page content. Now that we have an overall understanding of what we're going to be creating, let's get 
   started by creating the beginnings of our project.

### 1.2 Establish Your Work Area

   Now that we have a blueprint for our application, let's begin creating the project files that we're going to need. I 
   use a standard structure for all of my php projects and it looks something like this. I have the main project directory, 
   here I've just called it basic_php_project/, but I would rename it to be whatever the project name was. But then, inside 
   of there, I've got two subdirectories, or folders. One is called public/ and one is called private/. The idea is that we
    configure our web server to serve content from the public directory.

   In other words, public/ becomes our web document route. If our website was called coolsite.com, then a request for 
   coolsite.com would come to our web server and our web server would look for files in this public directory. Therefore, 
   everything in public/ is public. This is the place where we'd put all of the webpages that a user ought to be able to 
   see, as well as images, style sheets, java scripts, or any other media or assets that our website needs to function. 
   Those are all the things that the public should be able to get their hands on.

   In our private/ directory; however, we can put content that should not be accessible by the public. There's no way 
   for a request for coolsite.com to be sent, via the web server, to that private/ directory. So this is a place then, 
   we can put libraries of php code and the public won't be able to access it directly; however, the php files that are 
   in the public directory, can still access that code stored in the private/ directory because they have access via 
   the file system. That is, they can navigate the hard drive structure in order to load those files.

   We'll see how to do that later in this chapter and we'll also talk about the roles of initialize.php and functions.php 
   when we do. For now, notice also that public/ has an index.php file already in place. It's a best practice to always 
   have an index.php page in every single public directory that you create. The reason why, is that it's possible to have 
   a web server which is configured to display the contents of the directory whenever an index.php page is not present, 
   and that's probably not desirable.

   That might give away information about some files that are present on our web server that we don't want the public 
   to know. So, by putting that index.php page there, it prevents that web server behavior. So, let's start with that 
   basic_php_project/, I'm going to open up my sites directory, this is my web document route, currently, for development, 
   and I'm going to take my basic_php_project and I'm just going to drag it in there. And you can see that I've got all 
   those files that we just talked about, they're in a different order now because they're being alphabetized, so you 
   can see that I've got private here on top, with functions and initialize and shared; and I've got public with images, 
   index.php, and stylesheets here.

   So, now that we it in our sites directory, I'm just going to change the name of this and the name of our project is 
   goin' to be globe_bank, so globe bank is going to be the name of the project that we're going to be working with. 
   So now that we have the basic structure of our project in place, now let's talk about what we're going to be 
   creating in this course. We're going to be working in the staff area. So, let's create a new directory. It's going 
   to be inside the public directory because we want it to be publicly accessible. Now, it's going to be password 
   protected, so that only certain people can get in there, but it still is accessible by someone via our web server 
   so it goes in the public directory.

   So public doesn't mean it's accessible by the general public, it just means that it's accessible by some of the 
   public. So let's call that staff. and inside staff, we know that we want to have index.php declared. Now, this 
   file doesn't actually do anything at the moment, if we actually open it up, you'll see that it just contains 
   some basic html, just as a starter template for us. For now, we just want to make sure that we remember to have s
   ome place holder that's in there. Let's talk for a moment about the contents of this admin, or staff area, that 
   we're creating.

   We could create a flat staff area, where we have all of our php files for all the things that you can do inside 
   that staff area just listed directly in that folder. So, for example, we might have page_edit, page_delete, page_
   list, page_new, page_show, subject_edit, subject_delete, subject_list, subject_new, subject_show. You can see 
   each one is named with the resource that we're working with, either page or subject, at the beginning of it, 
   and then a underscore followed by the action that we want to perform. That's a good way to keep ourselves 
   organized and be able to have different pages that accomplish these different features of our website.

   That's fine for a small website, but it doesn't scale really well if we start to have a much larger website. 
   So I want to show you another idea, which is to group them into resource folders. You can see here, I have 
   the same thing, but instead of pages_edit, I have a directory called pages_ and then a file called edit inside 
   that directory. Now, inside my staff area, I'll have a folder called pages/ and a folder called subjects/ and 
   I'll know that everything having to do with subjects is inside that subjects/ folder.

   It really just helps you to stay organized. Notice also, that I've renamed list.php to be index.php and that's 
   because we need an index.php file in each one of these directories anyway. So it's a convenient way to handle 
   both of those at once. So this is what I'm going to be working with. Now, we're going to come back and create 
   all of those php files later, but for now, let's go ahead and create pages/ and subjects/ for the directories 
   that we're going to be working with. So back to my desktop here, I'm going to take the staff directory, which 
   has index.php in it already, and I'm just going to option drag that to get a copy.

   And I think I can do that, just drop it right in there. No, it came out here, but that's alright, I'll move 
   it up here. Now I've got staff.index.php and I'm going to rename that as being subjects and then I'll just 
   option drag that one, create a duplicate, and I'll call that one pages. You can also copy paste it. A number 
   of different ways you create that file. But the overall idea is we want to have pages, we want to have subjects, 
   and we want to make sure we create that default index.php just so we get in that good habit.

   Okay, so now we have our basic project structure together. In the next movie, let's start working with the 
   content of these pages.

### 1.3 Create and Style the First Page

   In the previous movie, we created the starting structure of the files that we're going to need, the basics of our 
   project. Now we want to bring those up in a text editor, so that we can work with them. For most text editors,
    you can simply drag the directory onto the icon for the text editor, in order to open up the entire project i
    n a project view, all at once, I've already done that here. It works the same way whether you're using TextMate, 
    or Sublime, or something else. The overall idea is that my project is now visible in one column, I can navigate 
    the files that I want to edit, and I can edit them over in the window on the right.

   Let's begin by opening up the index.php page. It's immediately inside the public directory. Inside this file, 
   you'll see that I've included a very simple HTML5 template. Nothing special about this, it's just the beginning 
   of an HTML5 document, that we could then serve up to the public. PHP pages are just HTML pages that have PHP 
   embedded in them, so this makes sense, that we would have this as a starting point. Now let's think for a moment, 
   index.php, inside the public directory, is going to be the root of our website.

   That's because we're going to tell our web server that the document root that it should serve to the public is 
   this public directory, so for example, if we had a globebank.com as our URL, then globebank.com would load up 
   index.php as its default page. So I'm going to put in here for the title, just Globe Bank. And then in the body, 
   for now, I'm going to put h1, Globe Bank: Coming Soon. Now we're going to come back and work on the public site 
   later, for now, I just want to have a placeholder here that we can look at.

   Let's save that file, and let's bring it up in our web browser, so we can see that it's working. At this point, 
   you should have already installed PHP, and have it enabled for your web server. You'll also want to make sure 
   that your web server, whichever one you choose to use, is running, and able to serve files when your browser 
   requests them. If you need help with any of that, you can refer to the course on installing and setting up PHP 
   with MySQL. I'm going to navigate to that project. Now for me, in development, my web document for development, 
   is localhost, and then ~kevinskoglund.

   Now yours may be different, you'll have to use whatever is your default, it might just simply be localhost on its 
   own, or it might be something different. Change it to fit your needs, but that's going to be my document root. And 
   from there, then I'll need to have my project, which is globe_bank, and then the public directory. That's how I'm 
   going to navigate to that index.php page. Now when we launch this to the public, remember, the public's not going 
   to type all that. The public's just going to type our URL, globebank.com, and it's going to go to this exact same s
   pot, right here, to start with.

   So all of that is just for development, that's why we're going to have that full root path in there while we're 
   developing. And you see that I get Globe Bank: Coming Soon. So that's great, we now know that we're able to locate 
   the correct file via our browser, and our web server was able to handle the fact that it was a PHP file, with no 
   problem. All right, so now let's go back over to our project, and now, let's take a look at this staff page, 
   staff/index.php. Now here, let's just change the title. Let's make it GBI, just the initials for Globe Bank 
   International, and let's add in here, to our body, a little bit more, let's add a header tag, and let's do 
   one for navigation.

   Just mistyped that, there we go, and let's do one for footer. Okay, those are just some basic HTML5 tags. 
   Inside the header, we'll put h1, and let's make this one just say, GBI Staff Area. That's indented a little 
   too far, let's take one of those out. For the navigation, let's put in ul tags. We'll put in one li tag, 
   which is going to be a link, a href="index.php", and, it's going to be Menu.

   And then let's close our li tag, and close our ul tag. And then down here in the footer, let's put &copy; that'll 
   be the HTML entity for the copyright symbol, 2017 Globe Bank. Okay, so we can save that file, and we should be able 
   to bring this up in our browser. But before we do that, I'm just going to go ahead and add in our first bit of PHP 
   code here. I'm just going to drop in, instead of 2017 for the date, we're going to go put in php echo date, capital Y.

   That'll call the PHP date function, it'll return the current year. So now we've actually got our first bit of 
   PHP code, and we're going to make sure that that is working correctly, as well. If not, you'll need to 
   troubleshoot that, and make sure you've got PHP working. So let's go back now, now, in order to get to this 
   page, it's in the public directory, and then, inside staff. Now we could type out index.php, but by default, 
   it should render that index.php page. And sure enough, here it is, GBI Staff Area, and you see we've got 
   Menu link, and the PHP code did load up correctly.

   We did get the year's 2017. Now if you're watching this in the future, your year will be different, that's not a 
   problem. Just make sure that you did, in fact, get a year there, and not an error saying the PHP code didn't render. 
   Okay, so we've now got it working, but this is pretty ugly. What we need to do is introduce a style sheet, so that 
   we can style this code, and to do that, I'm just going to hide these files for a moment, and I'm going to go here 
   to this staff.css file. I've already got a style sheet written up, we'll take a look at it, but I'm going to drag 
   it into my stylesheets directory of my project.

   Then I can come in here, to my project again, and let's take a look at what's in there. So you can see, I've just 
   got some basic styling. You can pause the movie if you want to copy this down, it's also included in the exercise 
   files. So you go down here, you see we've got a header, header h1. I've got navigation, I've got some styling on 
   the navigation ul and li elements. I've got content, which we're going to add in later. I've got in the footer, and 
   then I've got some styles here that we're going to be using as we go on. I wanted to go ahead and add them now, so 
   that we don't have to come back to them.

   I'm styling some of the different elements that we're going to be using as we create forms, and create all the 
   different parts of the website. So there we go, we've got our errors. So that's it, it's a pretty simple style 
   sheet, altogether. Again, it's included in your exercise files. Now we need to tell our page that it's going to 
   use that style sheet. So the way we do that is we come up here into the head of our index.php that's in the staff 
   page, and we're going to add a link tag, with rel=stylesheet, and the media for that is going to be all.

   Everyone should get this style sheet, href=, and I'm just go leave that blank for now, and then close out the 
   rest of the tag. Okay, so now we need the path to the style sheet. So what is the path to this style sheet? If 
   you've worked with HTML before, then you already know how you do this. You need to navigate backwards one 
   directory, because we're in the staff directory now, and we need to go out of the staff directory, and then 
   into the stylesheets directory to get to staff.css. So that means that we've got to go .., which means go 
   backwards a directory to the parent directory, and then locate the stylesheets directory, and then staff.css.

   Now this href is telling it to go backwards in the URL. This is a browser path, not a file path. Now they're 
   very similar, because it also happens to be the file path, as well, but I just wanted to make that point. 
   We're going to come back to it a couple of times. This is the browser path, it's telling the browser to back
    up one level, and then look for stylesheets, staff.css. So let's save it, and let's go back and try it, see 
    if it worked out, let's reload our page. And there you go, now there's not a lot there at the moment, because 
    I don't have my content element, I think that's the one that probably gives it the real meat.

   Let's add that, div id="content". And there we go, save it, go back, and I think that should probably give it, 
   yeah, a nice big chunk of space here, that we can fill in below. And then we've got one link on the page, 
   which is Menu. If we click that, you can see it just brings us back to this same page, index.php. So for now, 
   make sure that you're able to bring up pages in your browser, make sure that PHP works, so that you have a 
   date at the bottom of the footer, and that you are able to access the style sheet, that you do have the 
   ability to link to the staff style sheet.

### 1.4 Include and Require Files

   One useful feature in PHP is the ability to include code from other files into a PHP page. It's an important 
   feature because it helps us to stay organized, and to not repeat ourselves. For example, if we define a function 
   that we want to use on one webpage of our site, and we need to use it again on another page, we don't want to 
   copy and paste that a second time. That would mean that we now have two versions of the function, and if we 
   find a bug or we make an improvement, we have to remember to update the code in more than one place. That 
   leads to bugs and code that's hard to maintain.

   It's much better if we can put that function in a single file, and then load it in to both PHP pages, so 
   that they're using the same version of the function all the time. And remember, that's the main reason we 
   create functions, is to have reusable code. The way that we can do this in PHP is by using the include function. 
   So inside our PHP tags we use include, and then the file name that we want to include. Functions are probably 
   the most common thing that we include, but they're not the only thing. In addition to having libraries of 
   functions, we can also load in sections of our page, such as the header, the footer, the navigation of the sidebar.

   This allows us to take those sections of the website and create reusable portions of them that can be loaded 
   into different pages. And now that code is all self-contained in one area where it's easy to find, and easy 
   to update. And the same thing is true for really any reusable section of code, whether it has HTML, PHP, J
   avaScript or something else. Maybe there's code that defines how a banner ad ought to display, or page analytics, 
   or the way that we want to display images on the site. All those can be packaged up into reusable portions that 
   then we can use include and require to load them in as needed.

   Now include is not the only way we can do that. We can also use require, and then variations on those, include_once 
   and require_once. Require works exactly like include does, except it raises an error if the file is not found and 
   able to be loaded. So really you use require if the file is essential to the operation of the rest of the page. 
   If we get to require and something goes wrong, the rest of the PHP code will simply not execute. Include doesn't do that.

   Include_once and require_once work the same way as include and require, except that they also keep track in PHP 
   when a file is loaded. And if you ask it to load that file again, it'll skip over it. For something like PHP 
   functions, this is an important feature, because you don't want to define a function more than once. PHP will 
   give you an error, it'll say, "Sorry, you've already defined that function before." But if we wanted to do 
   something like include code to load up a web advertisement on a page in three different places, then we'd want 
   to use include and require, because we do want it to load three different times.

   Now in practice, many times all four of these will work the same. They'll load in the code that you asked it to. 
   But it's still a good programming habit to try to use the correct one for the current circumstances. Let's try 
   doing this inside our project. I'm going to go into initialize.php, you can see I've already got some PHP tags 
   here, and what I want to do is I want to tell initialize.php that it should load up all the code that's in 
   functions.php. Now at the moment, that's empty, there's nothing that's in there either. But that's a place 
   where we would define a library of functions that we could use.

   The idea is that initialize is going to take care of loading not only this functions.php file, but other libraries 
   of code as well. For example, I might want to have another file that contains all of my login functions, once I 
   have login ability to the staff area. Or when I have another set of functions that's dedicated just to working 
   with forms, and how we output forms on a page. I can separate all those out into separate files, and then 
   initialize will take care of loading all of them in for me.

   Now we want to use require, because the functions are required for our site to work correctly, and we want to 
   use once because we only want to load them one time. So require_once, functions.php. And that's going to load 
   up that functions.php file. If I had other files I would list them right underneath here, and we will. Later 
   we'll have for example, database functionality. We'll keep that in a separate file. Now the reason I want to 
   have it all in initialize.php is because then, let's say this file, I want to come back over here to my staff 
   area, and on this staff page, I want to tell it that it should load up the functions, but I don't want to have 
   to tell it to load up the basic functions and my form functions and my database functions.

   I want to tell it just to load up initialize. And if it loads up initialize, I'll know that I've got all the 
   functions that I need, all loaded in the correct order, and all available to me. So I'm going to have one line 
   here at the very top of my file, it's going to be PHP, and it's going to be require_once, and it's going to be 
   initialize.php, and let's close my tags. Okay so right here at the top of the file I'm going to load in that 
   initialize.php file, and it will take care of loading everything else that needs to be loaded, getting e
   verything all set up for me so I'm good to go.

   But this isn't going to work quite right. When I was over here and I used require_once, functions.php was 
   sitting in the same directory as initialize, so it found it no problem. Here I've got to tell this how to 
   find initialize.php, it's not in the same directory. What I have to do is navigate the file system to get 
   into the private directory and locate it. And I do that by first going backwards one directory, from the s
   taff directory into the public directory, and then going backwards one more directory into the globe_bank 
   directory.

   Now I'm in the root of my project, and I can go forward into the private directory. Dot dot means go 
   backwards, it means the parent directory. Notice here we're navigating the file system, not the browser 
   URL like we were down here. It's different from this version. So dot dot does the same thing, it has the 
   same concept to it, but here we're working with a URL, here we're working with the file system. I also 
   want to make one important footnote here which is that you should always use static strings inside 
   include and require_once.

   Don't use dynamic data, if you do you can create major security issues where users can potentially load 
   up files on your computer that they should not have access to. So just use static strings in here to keep 
   yourself safe. Alright let's save that file. Now we could put a function in here and then try it out on 
   this page to make sure we have access to it. I'm not going to do that. You can try that on your own if 
   you want. Instead, what I want us to do, is I want us to look at the part of this page here that we have, 
   all the beginning, everything up to the navigation, is going to be the same on every single page of our 
   staff area.

   And the footer is also going to be the same on every single page of the staff area. So again, that's 
   reusable code. Even though it's not PHP code, it's mostly HTML, it's still what we're going to be using 
   over and over again. So this is a good candidate for code that should also be included and required. So 
   what I'm going to do is I'm going to take that code and I'm just going to cut the top of it, everything 
   above content, and inside shared, I'm going to create a new file in there, and I'm going to call that 
   file staff_header.php.

   I'm going to paste my code in there. So now, all that staff header is in there, and let's go back to 
   this file, and let's grab the footer, I'm going to cut that, and let's go into shared, create a new 
   file, footer.php. Let me just open those so you can see them, oops, not footer, sorry let me rename that. 
   Should be staff_footer, there we go. And let's paste that in there. So now we've got our staff footer as 
   well. Let's save that, now you'll see that our index.php page is really limited to just the content 
   that's unique to that page.

   All we need to do is add in our shared code, include, and I'm using include now because it's really not 
   a show-stopper if we didn't get it. You could also use require, it would work exactly the same, but I'm 
   going to use include and say that it should go backwards two directories, it should go into private, and 
   then into shared, and get staff_header.php. I'll copy that line, let's come down here, do the same thing, 
   but this time it's staff_footer.php.

   And I'm just going to take away the indentation there. So now we've got our basic code, staff/index.php, 
   let's load it up in our browser and see if it all worked correctly. And let's reload our page. And sure 
   enough, it works exactly the same, reading the exact same code there. You can reload it, force reload it 
   with option if you want to make sure that you're getting a new one, or actually modify the header and 
   footer so you can verify that you did get the new one. But you can see now I'm loading up the functions 
   that I need, I'm loading up the header, then I just have to define what's unique to this page, and then 
   I have the standard footer at the bottom.

   You can see how this keeps our code well organized, and gives us reusable parts. In the next movie, 
   we'll talk more about this idea.

### 1.5 Make Page Assets Reusable

   In the previous movie, we learned to use include and require. In this movie, we'll learn some additional 
   techniques that can help you to use them better in your projects. So, the first thing I want to show you is 
   how we can use variables in PHP to work with these included and required files. Specifically, I want to be 
   able to set a page title on this page, $page_title and I'm going to set it equal to, let's just call it Staff 
   menu. I'll make it capital, Menu. Okay, so I'm setting this variable, $page_title, what I want to show you 
   is that that variable is available inside this file.

   It's an exactly as if that PHP code were right in this spot. Right at line four, all of the content of 
   staff_header right there. That means we have access to any variables that have been set. I just want to 
   make sure that that's clear to you. So, here we go, let's put in a dash and let's do echo our assigned 
   page title. Now, of course, we want to make sure that page title is set. So let's go up here to the very 
   top, let's put in a bit of PHP which says, if it's not set, page_title, then page_title will be equal to, 
   and let's have it just say Staff Area.

   That'll make sure we have a default page title set. We won't have a problem when we get down here because 
   either we'll have one that's been passed in, or we have a default that'll kick in. So let's try it out, 
   let's see if that works. Let's save this, let's go back to index.php, make sure we save that page as well. 
   Let's go to out browser, let's reload our page. Notice now it says GBI - Staff Menu. So that's the first thing 
   I want to make sure I showed you is that variables are still available inside those included files. That can 
   be useful to know. The second thing is, let's take all of this code from index.php, and I'm going to copy it, 
   and let's go to subjects index.php, where I also just have a basic HTML5 template.

   I'm going to just replace that. I'm going to remove everything that's there and paste in my new code instead. 
   It's not the Staff Menu now, instead now we're looking at the list of subjects. So that's the page title, is 
   Subjects. So it should be able to now use a different page title with the staff_header. So let's save this file, 
   and let's go try it out. Let's go back to Firefox, and this time, it's going to be staff/subjects, and you could 
   put the index.php after it if you wanted. Notice that I get a warning followed by a fatal error.

   Require_once was not able to find the file that it was looking for. So the problem here is that now my index.php 
   page is nested inside the subjects directory. So the path to initialize.php is not the same. Now I have to go i
   backwards one more directory. And the same thing for finding the staff header. Dot dot, slash. And the footer, 
   dot dot, slash. Have to go one level further back. Let's save it, let's go back, let's reload our page, and now 
   you see that the page opens up.

   So now the page loads as expected and we don't get errors anymore. Now you'll notice that our style sheet is 
   broken. We're not getting the big blue header and footer that we would expect to get from our style sheet. 
   We'll come back to that issue in a moment. For now, I instead want to just deal with the issue of these dot dots. 
   This can be a little bit of a hassle to remember where you're nested. To remember whether you're nested one level 
   deep or two levels deep. One good solution to work from that is to set up some constants that you can use to 
   define the path to these files.

   So what I'm going to do is I'm going to come over to initialize.php, and before we even get to our functions, 
   I'm going to paste in some code here. Let's just indent that a bit. And what I'm doing is I'm defining several 
   constants. I'm defining a constant called private path, and that's using the current file, __FILE__, all in caps, 
   returns the current path to this file, that file being initialize.php, tells PHP, hey, find this file's location 
   and get its directory.

   So what's the directory? Well, it's the private directory, so that's what we're calling PRIVATE_PATH, that's the 
   same thing as the private folder, here. So what is our project path? Well, that's one directory above that. So I 
   ask for the directory name, and that says go backwards one, and that tells us globe_bank. So now I have my private 
   path, my project path, my public path is going to be the project path plus public. And my shared path, where my 
   footer and header live, is going to be the private path plus the shared directory. Now I have these constants 
   defined in PHP that I can use the easily locate those files.

   So let me show you how we could use those. Let's save this file, come back over to index.php, this is the main 
   index page. Now, instead of having all of these, let's remove all of this, and let's add in SHARED_PATH in all 
   caps, and concatenate that together with staff_header.php. See how that works? Just copy this, do the same thing 
   here, we'll just remove everything except for that forward slash. See how much nicer that is? It says, find that 
   shared path folder, that's where you're going to find this file.

   So this is a handy tool for being able to locate directories. Now, again, this is file paths that we're working 
   with. Now, you might think, well, what about this one? Can I use private path here? No, you can't. And the reason 
   why is because initialize.php is where all of this is defined. So there's one place that we still have to use t
   he dot dots to get everything located correctly. And that's here when we first require the initialize. After t
   hat, we have our constant setup that we can work with. So let's save this file, and now let's come back over here.

   Let me just copy these, and let's go into our subjects. Now, my subjects, I can just take those same lines and 
   paste them in there. See how nice that is? So now my shared path is always the same. I still have to have an 
   extra dot dot here that I didn't have there, because I do have to load up that initialize.php as the very first 
   thing. Let's try it one last time, make sure it's all working. Come here, we'll reload it, and you'll see it 
   still works exactly the same. And if we take subjects out and go back to this other page, it works correctly here.

   Now, the style sheets still are broken, and in the next chapter, we're going to talk about how we can do the 
   same kind of idea when working with links and URLs so that we can address our style sheet problem.

## 2. Build Web pages with PHP

### 2.1 Links and URLs

   In the previous chapter, we built a simple web page and learned how to create reusable page assets. In this chapter, 
   we're going to work on building webpages using PHP. Let's begin by learning how to create links between pages. You 
   should already know how to code a simple HTML link. We use a tags around the word that we want to link, and then 
   we use the href attribute of the a tag to define where we want the link to go to, in this case, index.php. Now, 
   the first thing you should know is that there's no such thing as a PHP link.

   It's still an HTML link. We can use PHP in order to generate the link, but the output will still be a string that c
   reates an HTML link. So, the second example is using PHP, but it's still creating an HTML link exactly like the 
   first one. Notice that it's using the word echo to output the string index.php. echo is very important. We have 
   to make sure that we actually output the content from PHP into the HTML in order to have it work. Let's start by 
   adding a link to our project to the main menu page.

   So, that's staff, index.php, and inside the content area here I'm just going to paste some HTML. It's just going 
   to be the main menu div that I'm creating. And let me just indent this a bit. There we go. And I'm missing a 
   final div here. Here we go, div. All right, so you see it has a div, id main-menu, has h2 tags that says Main Menu, 
   and then I've got ul tags that will just be a list of all the different things that we can do in the site. And you 
   can see I've got an HTML link here for the subjects, right? So, that's going to link to the Subjects page, and the 
   path to that page is inside the subjects directory, index.php.

   Right, so let's save this file, and let's try it out. Let's save it. We'll come over here to Firefox. Let's reload 
   our page. And sure enough, Main Menu, and it says Subjects. Okay, so let's click on the subjects link and see where 
   it takes us. It came up with a page not found. Notice the URL that it went to right here, localhost/subjects/index.php. 
   Now, if you are on a production server and the root of your website was the same as the domain, this would've worked 
   fine, but it didn't work for us, because we're nested several layers deep here.

   It's not localhost. It's localhost and then a bunch of directories after that. When we use this forward slash, it 
   gives us an absolute URL, and that's not what we want. What we want is a relative URL. So, let's take that out, 
   let's save the file, and let's go back. Let's reload the page, and now let's click subjects again, and now it takes 
   us to the correct page, staff/subjects/index.php. That's where we wanted to be. So, it works because we used a 
   relative path instead.

   All right? So, now let's go up here. We've got that link there. Let's jump over to staff_header, and notice that 
   I've got this link that says menu at the top of all my pages. The idea is that I have that menu link, and no 
   matter where I am in the staff area, I could always click menu, and it'll just shoot me right back to that main 
   menu so that I can navigate from there. So, right now it's index.php. We already know that we can use PHP there, 
   and we can echo index.php, and it does the exact same thing, so let's try that.

   Let's go back here. We'll load up the page. We'll reload our main menu, and if I click menu, it takes me where we 
   would expect, takes me back to this same page, the page I'm already on. Let's click on subjects though, 'cause t
   hat's what we really want, is to be able to click menu on this page and shoot back to that other menu. So, let's 
   click it. And it didn't work, and the reason it didn't work is not because we used PHP. The reason it didn't work 
   is because it's a relative URL, and index.php is taking us back to the same page that it's already on, 
   subjects, index.php.

   What we really want is to tell it that it needs to go backwards a directory. It needs to go from relative from 
   this page, we want to shoot backwards one. Let's save it. Let's go back over and go to Firefox, and let's reload 
   this page. And now when I click menu, it takes me to the right page. Well, let's click menu again up here at the 
   top of this page. Can you guess what's going to happen? Takes me back to my main home page. Why? Because I said 
   relative to this page, go up one directory, right? We look back at our structure. It went from this index.php 
   page back to this one.

   That's not what we wanted. So, you can see that we have a problem here, and the problem is that we have a shared 
   header file that we're using on multiple pages, and the links that we want to use, we want to use relative links, 
   but they're relative to pages that are in different places. They're not in the same directory. Some of them are 
   nested one level deeper, and they might even be nested several levels deeper. That's the exact same problem that 
   we had with our stylesheets before. The the stylesheet works correctly when we're on our staff index.php page, 
   but when we go to subjects, what we really need is ../../stylesheets/staff.css.

   So, PHP enabled us to have this shared template, but now we've got a problem. How do we solve it? PHP can help us 
   to do that. A good trick is to set a constant that defines the web root. Let me just jump over here to initialize.php, 
   and we can define it here. Now, this is similar to what we did at the end of the last movie with SHARED_PATH. You see 
   that right here. But it's not the same, because there we were talking about file paths on the hard drive. If you 
   actually output SHARED_PATH and do echo on it on one of your pages, you'll see that's a path on your hard drive, 
   from the root of your hard drive, all the way to the file that it's trying to find.

   That's not what we want here. We want a path for the URL. So, we can do that a couple of different ways. I'm going 
   to paste in some code. Some of it is instructions telling you you don't need to include the domain name. We want 
   to use the same document root as the web server uses, and you can set a hard-coded value, like this. That would 
   define WW_ROOT, and it would set it equal to my path, which is ~kevinskoglund/globe_bank/public. That's not the 
   same for you. If you are on a production machine, you might define it as just being the root.

   It's just simply whatever the domain name is. It's not nested anything deeper, or what I've got here, something 
   that finds it dynamically. I'm doing it this way so that if you grab the code out of the exercise files, it'll 
   work automatically for you in development. What it does is it looks for the presence of the word /public in the 
   URL and figures out that that must be where the document root is. So, that's how it defines WWW_ROOT dynamically. 
   And any of these would work. The main thing is to make sure that you set this value equal to an absolute value 
   that we can then use on all our pages.

   And once we have that set, now we can go back over to our staff_header and instead, we can use WWW_ROOT and 
   append it with /staff/index.php. Now, I have to include the staff now, because WW_ROOT is the root of the entire 
   website, not the staff area. I could also define another one of these called STAFF_ROOT if I wanted, but here 
   I'm using WW_ROOT so that I can just use something generic. Let's try it, and let's see the difference.

   Let's take this stylesheet back to what it was, save our file, come back over here, and we'll reload our page. 
   And now when I click Menu, it's correct here. When I click Subjects, now it's correct there. Both of them work 
   the same, and we can do the same thing for our stylesheets. Before we do that though, I want to show you that 
   there's another nice trick, which is that we can actually roll all this up into a function that we can use. 
   So, I'm going to define a function, I'm going to put it in functions.php, and I call it url_for, so url_for, a
   nd pass it in the path that you want.

   It goes ahead and takes care of figuring out whether you have the leading forward slash or not. If it's not there, 
   it adds it for you in case you forget, and then it appends it to that WW_ROOT and returns the value. It doesn't 
   echo it. You still have to do the echoing, but it will calculate that value for you using that constant. All right, 
   so let's save that. Now, we've got our function. Let's come back over here into our header, and let's use it. We're 
   going to use it right here. php echo, we still need to echo, url_for, and then, in parentheses, let's just 
   take stylesheets.

   It doesn't matter whether we put the forward slash or not. And close our php tags. All right, let's do the same 
   thing down here. We'll do url_for, and we'll just surround the whole thing in parentheses. Oops. Tapped one key 
   too many. There we go. Okay. So, now that we've got that, let's try it out. Let's reload the page. It works 
   correctly. Menu works correctly. Click on Subjects. Look at that. Our CSS is fixed now.

   And menu works correctly. So, let's just review, why does all that work correctly? It's because we've defined 
   an absolute point that we can base all of our other URLs off of. We've basically said here's the root of the
    website. Base everything off of that. So, now we have a single function that we can use which will make sure 
    that we always have a URL that takes care of whether or not it's on a shared piece of code or whether it's 
    something that's nested several layers deep. It'll always be a URL to the correct place.

   It's a really handy tool to have.

### 2.2 Use URL Parameters

   In this movie, we'll learn send a value from one page to the next by using URL parameters. This can also be 
   referred to as query parameters. The URL parameters are the part of the URL which comes after the question mark. T
   he format is always name of the parameter, then an equal sign and then the value of the parameter, so here we 
   have page equals two. URL parameters generally modify the behavior of the code used for the response, so, in 
   this example, the same PHP code would be run, but its behavior would probably be modified, so that it return 
   the second page of results.

   You can send more than one URL parameter by using an ampersand in-between them. Here you I have category equals 
   seven and page equals three. If you surf around on sites like Google and Amazon, you'll see many examples of 
   URL parameters being used. URL parameters are useful, because they allow us to pass data from one page to 
   another via links. When a new page request is received, PHP is automatically going to take all of those URL 
   parameters that were sent and put them into an associate of array where we can access them.

   That array is what's called a Super global variable and the name for the one we're using here is going to be $_ 
   and then capital GET and that makes sense, because get is the name of the HTTP method that relates to URLs and 
   links. We'll learn more about get and post when we talk about forms. Notice that it has an underscore at the 
   beginning and that it uses all capital letters. That's how all super globals are going to be named. There are 
   about nine super globals altogether and we'll be looking at a few more later on.

   Super globals are always available in all variable scopes. Basically, that just means that you have access to 
   them from anywhere inside your code. That's not true for all variables and PHP is going to set those values for 
   the super globals before our page of code even starts processing. They're available for us right at the start. 
   Let's see how we can access them. In our PHP code, we would ask the super global get for its value for page and 
   remember, it's an associative array, so we use the square bracket notation to access the array values, so here 
   I'm asking the associative array that's stored in the super global get for the value that corresponds to page.

   So, I'm retrieving that value and then I'm taking the variable page; a local variable and setting that value 
   equal to it. This process of retrieving values from the super globals and assigning them to local variables 
   is very common to have at the top of your PHP page. It's also important to note that the values that you 
   retrieve from super globals are always going to be strings. Even if the value being set was a number like 99, 
   the value that's retrieved is going to be a string containing the number 99; you'll need to change its PHP 
   type to an integer if you want to use it as a number.

   Here I've got a simple example; using get type, you can see that when we ask for get type of just the value 
   that came straight out of get page, it's a string; if we typecast it using parenthesis int in front of it, 
   that forces it to become an integer. Now, when we ask for its type, it's integer. So, just keep that in mind; 
   the values are always strings no matter what. Let's try adding it to our project. Since the last movie, I've 
   made a couple of changes to our project; let's take a look at what they are. The first it that on the staff 
   many page.

   I simply added in the url_for function that we wrote in the last movie, so now I'm using url_for here for my 
   links to the subjects index page; otherwise, that's the same. Then, on the subjects index page, I've put quite 
   a bit of code and this code is included in the exercise files and you can get it directly from there; there's 
   no need to pause it and copy it down. Let's see what I've done here. The first thing is that I've got a variable 
   called subjects and that variable contains an array and inside that array are four other arrays.

   Each one of those arrays is a standing for record that would be in the database. We don't have a database yet; 
   we are not working with databases until a little later on, but we're going to fake it here a bit. Database 
   records work very much the same way. They work like arrays that have label bits of data. So, we have an ID, 
   we have a position, we have visible and we have menu name and we have values for each of those stored in our 
   database; here we just simply have arrays with that data hard-coded in. We'll come back and talk about this 
   idea later on, but this just gives us a set of subjects that we can then display on our subjects listing page.

   Let's scroll down and look at that listing. You can see at the top, I've got an h1 tag that just says subjects; 
   I've got a link for create new subject; that link doesn't go anywhere yet, but it's a placeholder for it and 
   then I've got a table and that table is a list of all the subjects that are going to be in my database later 
   on. Right now, it's a list of all the subjects that are in my array. I have headers at the top that label each 
   of the columns and then I'm looping through that array using foreach. So, foreach, one of the subjects in the 
   array. I'm going to make each array called subject and now I can ask for the values inside that array for ID, 
   position, visible and menu name.

   I've also got placeholder links for view, edit and delete, but those don't go anywhere either. Let's go ahead and 
   just bring this up, so that we can see what it looks like in our browser. Let's make sure we save it; let's go to 
   Firefox (mumbles) start with my menu; I've got my subjects link. I click on that; it takes my into a Subjects page 
   and now it's looping through that array in order to list out each one of these subjects. I've got About 
   Glove Bank, Consumer, Small Business, etc. Now, this would be my listing of all the subjects that are in the 
   database. What I want is to have a show page that will show me detail about just one subject.

   So, when I send a link to go to that page, I need to tell it which one I want it to be. These four links have to 
   all be different. One has to say: When you go to the next page, show me details about the subject about Globe Bank. 
   This one should show me details about the subject called Consumer, so the way that we do that with databases is we 
   use an ID to identify each record, so if I send along a URL parameter that includes the ID, then the next page will 
   know which one I was referring to. It will be able to go to the database and retrieve that ID and bring back more 
   information about it, so passing around these IDs is something that happens very frequently when we're doing web 
   development, so let's edit this View link, so that it has that URL parameter in it.

   Let's go right here; Let's start by just putting in echo url_for and I'm just going to leave that blank for a 
   second, finish my PHP link and then let's come back here and let's think about what are url_for (mumbles) be. 
   It's going to be /staff and then it's going to be subjects and then show.php; now, I've already created that page. 
   It's in here, as well, but it's just blank. There is nothing in it at the moment. We'll come back to that in a 
   moment. So, we need to think about what do we need to send after that; after it loads the page; what other 
   parameter does it need to load properly? It needs to know the ID; question mark, ID equals and then we would 
   want to provide the value.

   The value could just be five, for example, but we want that to be dynamic. As we are looping through each of 
   these subjects, we want it to change for each and everyone, so what I want to do is I want to use this value 
   for the ID; copy that and I'm just going to use a period to concatenate it together, so ID equals and then 
   whatever that value is. That'll build up a string and it'll create a different link for each one of these. 
   Let's save it and try it out and let's reload our page. Now, when I click View; the second one down, you'll 
   see it sends ID equals two.

   At the back arrow; let's try the last one. Since ID equals four; so, now we're sending the correct query 
   parameter; we're passing information from one page to the next; now, we just need to receive that information 
   on the show page and we know how to do that; id equals underscore GET and then square brackets, id; that's going 
   to get the value and assign it to our local variable and then let's just use echo id, so that we can see the 
   results of that; let's go back and try it out. Click here on the link number four and here it is; it says four.

   I'll click Go back; let's click two and it says two, so we're passing that data and on the next page, we are 
   reading that data; now, that's sets us up for later on being able to take that value and make another database 
   request based on that. That what we're going to eventually be doing. For now, we're just learning how to pass 
   that value back and forth. If you want, you can also try adding additional parameters. For example, you could 
   add page equals one ampersand and try passing multiple values if you want.

   But I'll leave that as an exercise for you to do on your own.

### 2.3 Default Values for URL Parameters

   In this movie, I want to talk about how to work with missing URL parameters and how to set default values for them. In the last movie, we learned how we can retrieve values from the associative array inside the GET super global. This process of retrieval and assignment works great, provided that there is a value to be found. In other words, if page wasn't sent in the URL, then a value would not be set inside the associative array and when PHP went to look for this value, it would raise either a warning or a notice to us telling us that the index can't be found.

   Now, you can configure PHP to not show those warnings and notices, but it's a much better practice to go ahead and fix the problem. We want to check and make sure that the value is present before we try to retrieve it. One way that we can do that is by using an if statement. We can use if along with the PHP function isset to check and see if that value exists. So if isset then use that value and assign it to page. If not, then we can use some default value and assign that to page. This is great because now we've solved our problem.

   Now, we make sure that the value is there before we try and use it and we also have the opportunity to provide a default value if we want. The only problem with this approach is that we just used five lines of code to do something that's fairly simple and that we're going to be doing over and over again, potentially for lots of different URL parameters. It's much more common for PHP developers to abbreviate this by using a ternary conjunction. It's just a one line way to write the exact same thing as that five lines of code up above.

   The ternary conjunction uses a condition as its first part, you see we've got the same isset there, then it's got a question mark and then it's got two choices divided by a colon. The first one is the result if it's true, the second is the result if it's false. Ternary conjunctions are not limited to just checking whether something is set or not. We can use any condition that we want so they're common in other places as well. But here we're using it to check and see if the value is set. This is very, very common. If you're using PHP 7, there's actually something that makes it even easier which is called the null coalescing operator and it's a double question mark.

   It's a special new operator introduced in PHP 7 that allows us to do this exact same thing even shorter. It essentially says check and see if there's a value there. If there is, use it. If not, then use this second value as a default instead. So that's become the hip new way to do it if you're using PHP 7 which I hope all of you are. If not, you can always default back to the old way of doing it which does the exact same thing. All three of these examples will have the exact same effect in your code.

   In order to see this in action, let's go back to our website here and let's click on one of these. Let's click on this link here and you see it says id=4, right? So it's happily grabbing the id and returning it to us so we can see it. Now, let's just take that value away. Let's try and load show.php without any URL parameter and see what happens. You'll see I get back notice undefined index id. It was looking for an index called id in that associative array. It couldn't find it so it raised a notice to us.

   So what we want to do is come back here and fix this so that doesn't happen anymore. So as I mentioned, the good way to do this in PHP 7 is just to do ?? and then put whatever you want as a default value in there. I'm going to just make a note here. This is PHP greater than 7.0. Now, if you are not using PHP 7, the way that we would have done it, let me just erase this, is using that ternary operator with isset. There we go, sorry.

   Let me take GET id and just paste it right in here. So check and see if it's set. Then we have a question mark. If it is set, then do this. If it's not set, do that. So that's the old style way of doing it. So I'm just going to comment that out. I'm going to try and do it using this way because I do have PHP greater than 7 and let's try and see what we get as a value then. Let's come back over here to our page and let's reload it, I'll just click the reload button, and you'll see it comes back with one. That's my default value. So now it works in both cases.

   I'll hit my back arrow. If I click on this one, it works to id=3. But if no id was sent at all, it goes back to default to one. So this is considered a best practice and a good habit to get in. Whenever you're pulling a value out of the super global, you want to check and make sure that it's there. And if you want, you can set a default value for it instead. You can also set it equal to null if you didn't want to set it to anything at all, but most of the time you're probably going to want to set it to some kind of a value.

### 2.4 Encode URL Parameters

   Over the last few movies, we learned to send a value as a URL parameter. So far we used it to send simple data, like an ID or a page number. In this movie, I want us to discuss how to handle data, which could include certain special characters that require extra attention. And the reason why is because they might have special meaning to the URL. Let me give you an example. Let's imagine that we have a link that we want to use that passes along a query parameter that is the name of a company, so company equals, and then the name of the company. And one of our links happens to use the company name Widgets&More, and the name of the company is Widgets & More.

   Notice the ampersand right in the middle of the name though. If you'll remember, that ampersand has special meaning to the URL. When we want to join together more than one URL parameter, we use ampersand to join them together. So, what we want is for the ampersand to be seen as being data, as simply being part of the string Widgets & More. The problem is that the URL might be interpreted to actually be separating out two different query parameters, company=Widgets&, a second query parameter More, and then nothing after it.

   Right, we want to make sure that that doesn't happen, that the ampersand is seen as data, not as being a meaningful character in the URL. Now ampersand is one example, but there are a number of different reserve characters that we need to watch out for. The top row of this table shows a list of them. When we're constructing URLs for links, we want to encode these characters, so that they can't interfere with the function of the URL. Encoding a reserve character, means converting that character to its equivalent, and that's what's in the second row. Notice that they all have a percent sign, followed by a pair of hexadecimal digits.

   Hexadecimal just means that in addition to zero through nine, we can use the letters A through F, as if they were digits too. Once it's encoded, it will no longer have its special meaning, and it will be treated simply as data. Then when the page is processed by PHP, we can decode these values to restore the original character. PHP give us two functions to perform this encoding, urlencode, and rawurlencode. They're almost the same, but there are some subtle differences. Both of these functions will allow letters, numbers, underscore, and dash.

   Anything that's not a reserve character, pass through unchanged. However, any reserve charactering it encounters, is going to be encoded into its hexadecimal equivalent. Urlencode is also going to take the spaces that it finds and convert them to a plus sign. Spaces are not technically reserve characters, but they can cause problems, so it's a good idea to have those encoded as plus signs. Rawurlencode also converts spaces, but it converts them to %20 instead.

   The reason why these handle it differently, has to do with a history of some technical specifications from a long time ago. What you need to know now, is when to use each one of these. Rawurlencode is what you want to use on the path, the part that says how you find the script that ought to be run. That's everything that comes before the question mark. In that case, you want all of the spaces to be encoded as %20. Urlencode is what you want to use on the query string. The query string is the part that comes after the question mark. It's all of those URL parameters that we've been talking about.

   Those should be urlencoded. In that case the spaces are better encoded as being a plus sign. %20 would also work, but plus sign is a little more traditional. Now in truth, you're rarely going to use rawurlencode, because most of the time the path is not something that's being dynamically generated by PHP. It's usually something that you have total control over when you're typing that link into your html code. You decide what it's going to be. It's not something that gets determined on the fly.

   However, the query string is very dynamic. It can contain values that come from the database, it can be values that you've assembled together in PHP, or it can be values that the user has given you. Maybe they've typed a query into a form. They're searching for a term in a search box. They type the term into global search, they hit search, and now we need to encode that value to make sure that it doesn't break anything when it goes up into the URL parameters. So urlencode, you're going to use way more often than rawurlencode.

   So it's the one you'll use far more often. Now once the string is encoded, of course we need to then decode it on the other side, and PHP gives us two functions that do exactly that, urldecode, and rawurldecode. However, you're rarely going to need these. Why is that? Because PHP automatically calls the decode functions when it receives a URL. So as soon as PHP gets that URL, it parses it, it figures out where the query parameters are, it decodes the values, and then it puts them into your superglobal forget, so the values that are in the superglobal forget, have already been decoded, you don't need to do it yourself.

   Let's try an example in our project. I'm going to go into Firefox, and I'm going to navigate the subjects, and let's just go to one of our pages here for show. So that's where we're going to go to. So on this show page, I'm going to just add in some links. Let's come down here, I'm going to paste them in. All of these just go to the same show page, and I'm just using different query parameters. Now, for each one of them, the value I'm putting in PHP. So I've got a inside PHP here, as an echo statement, in each and every case. I've got one that has a space, I've got one that has an ampersand, and one that just has a few crazy characters in it.

   Now, this also didn't have to be like this of course, it could just be a link like this, and it would do the exact same thing. But I wanted to put the PHP there to start with, to make it easy for us to add urlencoding and decoding to it. Now, we can bring these up in our browser, and we can take a look at them, we'll just reload our page. There you'll see the three links, and I can click on them. And you can see that it did handle it okay, to put it up here in my URL. It was able to put it there. You see the space, you see that's a bit odd, you don't normally see spaces in URLs, and if we click this one you see that it says Widgets & More.

   It seems to have put it up there okay, but what we don't know is how the web server in PHP would handle this on the other side. We don't know if this would be interpreted correctly once it's received on the other end, and that's what we want to be careful of. So let's add that urlencode to each one of these, urlencode. Then we'll just put parentheses around it. I'll just copy each one of these, and let's put our parentheses. There we go.

   You still want to make sure you use echo. We don't want to just encode it and then do nothing, we have to echo back whatever our results are. But now let's take a look at what those look like. Let's come back to our web browser. And let's just reload our page, and let's click on that first link. You see we get John+Doe, that looks a little better. We get Widgets%26More, and we get a set of characters here. You can see that a couple of these got swapped out. %23, %3F, those got changed out to their other versions.

   So that's all there is to it. Remember when we actually receive those values in our GET superglobal, those will automatically be decoded for us. All we have to do is make sure that we encode them. Now, we're going to use this a lot, and urlencode is a little bit long to type, so one of the things I like to do is I like to go over into my functions, and I like to create a new function. I like to call it just U, and pass in a string, and then in that string we're just going to return the value from urlencode on that string. Nice and simple.

   And then I'd like to do another version of that that I call raw_u, that just does rawurlencode on the string and returns that value. This gives me something that's shorter, I can just simply put a U around any string that I want to send, and know that it'll get url-encoded. So let me just come back over here, and I can just change all these to just be my custom function which is U, which does the exact same thing. It just gives me a nice little shortcut. And just to close the loop, let's go back here and make sure everything works. Oops, I caught an undefined error function U.

   The problem here, is that at the top of my page I have not required those functions yet, so let's just do that real quick right here at the top. Require once initialized, let's come back and let's try it. There we go, and now it works just fine, and we get our encoded version.

### 2.5 Encode for HTML

   Over the last few movies, we learned to send a value as a URL parameter. So far we used it to send simple data, like an ID or a page number. In this movie, I want us to discuss how to handle data, which could include certain special characters that require extra attention. And the reason why is because they might have special meaning to the URL. Let me give you an example. Let's imagine that we have a link that we want to use that passes along a query parameter that is the name of a company, so company equals, and then the name of the company. And one of our links happens to use the company name Widgets&More, and the name of the company is Widgets & More.

   Notice the ampersand right in the middle of the name though. If you'll remember, that ampersand has special meaning to the URL. When we want to join together more than one URL parameter, we use ampersand to join them together. So, what we want is for the ampersand to be seen as being data, as simply being part of the string Widgets & More. The problem is that the URL might be interpreted to actually be separating out two different query parameters, company=Widgets&, a second query parameter More, and then nothing after it.

   Right, we want to make sure that that doesn't happen, that the ampersand is seen as data, not as being a meaningful character in the URL. Now ampersand is one example, but there are a number of different reserve characters that we need to watch out for. The top row of this table shows a list of them. When we're constructing URLs for links, we want to encode these characters, so that they can't interfere with the function of the URL. Encoding a reserve character, means converting that character to its equivalent, and that's what's in the second row. Notice that they all have a percent sign, followed by a pair of hexadecimal digits.

   Hexadecimal just means that in addition to zero through nine, we can use the letters A through F, as if they were digits too. Once it's encoded, it will no longer have its special meaning, and it will be treated simply as data. Then when the page is processed by PHP, we can decode these values to restore the original character. PHP give us two functions to perform this encoding, urlencode, and rawurlencode. They're almost the same, but there are some subtle differences. Both of these functions will allow letters, numbers, underscore, and dash.

   Anything that's not a reserve character, pass through unchanged. However, any reserve charactering it encounters, is going to be encoded into its hexadecimal equivalent. Urlencode is also going to take the spaces that it finds and convert them to a plus sign. Spaces are not technically reserve characters, but they can cause problems, so it's a good idea to have those encoded as plus signs. Rawurlencode also converts spaces, but it converts them to %20 instead.

   The reason why these handle it differently, has to do with a history of some technical specifications from a long time ago. What you need to know now, is when to use each one of these. Rawurlencode is what you want to use on the path, the part that says how you find the script that ought to be run. That's everything that comes before the question mark. In that case, you want all of the spaces to be encoded as %20. Urlencode is what you want to use on the query string. The query string is the part that comes after the question mark. It's all of those URL parameters that we've been talking about.

   Those should be urlencoded. In that case the spaces are better encoded as being a plus sign. %20 would also work, but plus sign is a little more traditional. Now in truth, you're rarely going to use rawurlencode, because most of the time the path is not something that's being dynamically generated by PHP. It's usually something that you have total control over when you're typing that link into your html code. You decide what it's going to be. It's not something that gets determined on the fly.

   However, the query string is very dynamic. It can contain values that come from the database, it can be values that you've assembled together in PHP, or it can be values that the user has given you. Maybe they've typed a query into a form. They're searching for a term in a search box. They type the term into global search, they hit search, and now we need to encode that value to make sure that it doesn't break anything when it goes up into the URL parameters. So urlencode, you're going to use way more often than rawurlencode.

   So it's the one you'll use far more often. Now once the string is encoded, of course we need to then decode it on the other side, and PHP gives us two functions that do exactly that, urldecode, and rawurldecode. However, you're rarely going to need these. Why is that? Because PHP automatically calls the decode functions when it receives a URL. So as soon as PHP gets that URL, it parses it, it figures out where the query parameters are, it decodes the values, and then it puts them into your superglobal forget, so the values that are in the superglobal forget, have already been decoded, you don't need to do it yourself.

   Let's try an example in our project. I'm going to go into Firefox, and I'm going to navigate the subjects, and let's just go to one of our pages here for show. So that's where we're going to go to. So on this show page, I'm going to just add in some links. Let's come down here, I'm going to paste them in. All of these just go to the same show page, and I'm just using different query parameters. Now, for each one of them, the value I'm putting in PHP. So I've got a inside PHP here, as an echo statement, in each and every case. I've got one that has a space, I've got one that has an ampersand, and one that just has a few crazy characters in it.

   Now, this also didn't have to be like this of course, it could just be a link like this, and it would do the exact same thing. But I wanted to put the PHP there to start with, to make it easy for us to add urlencoding and decoding to it. Now, we can bring these up in our browser, and we can take a look at them, we'll just reload our page. There you'll see the three links, and I can click on them. And you can see that it did handle it okay, to put it up here in my URL. It was able to put it there. You see the space, you see that's a bit odd, you don't normally see spaces in URLs, and if we click this one you see that it says Widgets & More.

   It seems to have put it up there okay, but what we don't know is how the web server in PHP would handle this on the other side. We don't know if this would be interpreted correctly once it's received on the other end, and that's what we want to be careful of. So let's add that urlencode to each one of these, urlencode. Then we'll just put parentheses around it. I'll just copy each one of these, and let's put our parentheses. There we go.

   You still want to make sure you use echo. We don't want to just encode it and then do nothing, we have to echo back whatever our results are. But now let's take a look at what those look like. Let's come back to our web browser. And let's just reload our page, and let's click on that first link. You see we get John+Doe, that looks a little better. We get Widgets%26More, and we get a set of characters here. You can see that a couple of these got swapped out. %23, %3F, those got changed out to their other versions.

   So that's all there is to it. Remember when we actually receive those values in our GET superglobal, those will automatically be decoded for us. All we have to do is make sure that we encode them. Now, we're going to use this a lot, and urlencode is a little bit long to type, so one of the things I like to do is I like to go over into my functions, and I like to create a new function. I like to call it just U, and pass in a string, and then in that string we're just going to return the value from urlencode on that string. Nice and simple.

   And then I'd like to do another version of that that I call raw_u, that just does rawurlencode on the string and returns that value. This gives me something that's shorter, I can just simply put a U around any string that I want to send, and know that it'll get url-encoded. So let me just come back over here, and I can just change all these to just be my custom function which is U, which does the exact same thing. It just gives me a nice little shortcut. And just to close the loop, let's go back here and make sure everything works. Oops, I caught an undefined error function U.

   The problem here, is that at the top of my page I have not required those functions yet, so let's just do that real quick right here at the top. Require once initialized, let's come back and let's try it. There we go, and now it works just fine, and we get our encoded version.

### 2.6 Challenge -> Add Pages

   It's time for your first challenge assignment. Over the last two chapters, we've covered the basics of building web pages with PHP. I've been demonstrating concepts by working with the subjects area of our content management system. From our initial project blueprint, we know that our content will be divided into subjects and into pages and we'll need to be able to manage the pages of our project as well. Your challenge assignment is to do the same work that I did on the subjects area, but to do it for the pages area. Let's run through some of the points that you'll want to make sure that you hit.

   First, we know that we're going to need to have a link from the main staff menu that'll take us to this pages area, so we want to put a link from /staff/index.php that'll take us to /staff/pages/index.php. We already had a placeholder in place for that. You're then going to want to take that placeholder and replace it with the correct HTML and PHP for the pages index, that is a list of the pages that we can work with. You want to make sure that it loads up the initialize file that we created. You want to make sure it includes the correct header and footer that we used as a shared header and footer.

   And you want to have it go through and list all the different pages as a table. You can use the /staff/subjects work that we did as a reference. I don't expect you to be able to do it all from scratch. However, it's very much to your benefit and will help you to learn if you and try do as much of it as you can on your own. Don't simply copy and paste from the work that we already did. Try to write it yourself. That's the best way that you can learn this stuff. You'll also want to make sure that you add a pages variable that contains an array that holds a list of pages.

   You can structure it to look exactly like what we had for the subjects variable on subjects/index.php. The name that you use for those different pages is really up to you. Once you have your list of pages, then you'll want to link each page to /staff/pages/show.php. You'll need to create that page and you'll want to make sure that you include the page ID as a URL parameter in that link. You'll want to send that link over there and then you'll want to be able to retrieve and display it on the show.php page, just like we did in the subject page.

   Now later, we're going to learn how to use that ID to go to the database and retrieve more information. For now, it's enough to just simply retrieve it and be able to display it, to know that it was retrieved successfully. While you're doing all this, make sure that you use the file path techniques that we learned for including files, so that's include, require, include once, required once, and then the constant that we set for the shared path that we made use of. And also use the URL techniques that we learned to help you when creating links. Remember we set a constant for www root and we created a helper method that was URL four.

   Also make sure that you encode any dynamic data that's being used for links and for HTML. It's dynamic data that we're really concerned about here. We want to make sure that you use urlencode for dynamic data used in URLs and HTML special chars for any dynamic data output to HTML. And last, make sure that on all of these that you set the page title appropriately for all of the pages. Again, if you get stuck, go back and watch the movies that we did before or review the work that's already in the subjects directory because it's going to be very similar.

   In the next movie, I'll show you the results that I came up with.

### 2.7 Solution -> Add Pages

   I hope you were able to complete the challenge assignment. In this movie, I'm going to show you the solution that I came up with. Make sure you watch it, because there are going to be a few extra points that I want to make along the way. Let's start by looking at it in a browser, and then we'll look at the code second. First, you can see that on the staff menu area, I've added a new link for my main menu to pages. When I click on that link, it takes me to staff/pages/index.php. And I've replaced the placeholder content that we had there, with a list of the pages. So now, I've got a list of pages, showing me the basic attributes of these four different pages we would potentially manage in the future.

   Now, eventually, again, that'll be from a database. But right now, we're just iterating through a sample list. So I've got a list of those, and each one of those, you can see has an ID associated with it. And each one has a link that says view. It'll take me to the show page, and when I do, you can see it also includes the url parameter id=2. Now, on this page, I'm also using the same header and footer, and I'm showing the page ID equals two. I'm retrieving that, using php, from the parameters, and then displaying it on the page.

   I've also added another link here called back to list, and that just allows me to easily go back to this list page. Now I can click on a different one, ID three. Click on a different one, ID four, and so on. Okay, so now that we see what it looks like, let's go over and take a look at the code. As I mentioned, the first thing I did was go to the staff menu, and I added a new link that goes to pages. And I wanted to link that to staff/pages/index.php and I use that url for helper method that we created, that helps us to be able to create urls that are absolute, relative to the root of the entire website.

   So that's why I'm declaring staff in front of it. It's because it's from the root of the website, from the root of the public directory, going forward. All right, so then we have that page. Let's look at the index.php page that's inside pages. This had placeholder content before. Now, you can see we're using require_once and we're locating initialize.php. Once we do that, it loads up all the functions, and constants, and everything that we might need on this page. So everything is loaded, and ready and waiting for us. You can see that I have $pages as a variable.

   That's equal to an array, containing four other arrays. And those are my placeholders for the different pages. Again, this is a stand-in for a database in the future. I went ahead and just gave some sample names to those pages. Globe Bank, History, Leadership, Contact Us. It really doesn't matter what you call them. The important thing is that they all have an ID, so that we can use that ID later on. You can see I gave a page title to this page, and I used include, along with the shared_path constant, in order to locate the staff header. Then I've got some html here, to list off my pages, an h1 at the top that says pages.

   I've got some placeholder html for when we're able to create a new page later on, and then a table that lists off my pages. Here's the header at the top, saying what all the columns will be. And then I've got a loop using foreach that goes through that array, and uses each array inside there as a page, and I output, the ID, the position, menu name, and whether it's visible or not. Notice that I'm using h in front of each of those. I'm escaping each one. That's the helper method we created up here, for htmlspecialchars.

   So I'm using that, in order to escape these values, and make sure that they're safe for html. Now in this case, you may be thinking, "Well that seems like overkill. "These values up here, we know what they are. "We just set them, I set ID equal to one. "I know it's safe. "There's no chance that it is equal "to some bit of java script or bad html." But the thing is, it's a stand-in for a database, and in the future, that is going to be dynamic data. So it's important that anytime this data is dynamic, we just take that extra step.

   It's a precaution to make sure that we're safe, and it's one that you always want to take. I did not do it for visible here, because I'm not actually outputting the value of visible to the page. I'm checking the value of visible, to see if it's one, and what I'm outputting is either true or false, and I have total control over those strings. They're not actually dynamic, so I don't have to worry about those. Then here, you can see that I'm creating the url. It'll take me to the show page. It has a url parameter for id= and then I'm using the page ID.

   Notice here, that I'm using two kinds of escape on it. The first is that I'm url encoding it, to make sure that it's safe to be included in the url. And the second is that I'm html escaping it, because I also want to make sure it's safe to put in my html, because again, this is a dynamic value that I'm about to put on my html page, so I just want to check it and make sure. And then, down at the bottom, you can see that I have the include, using the shared_path to load in the footer. On the show page, I did something very similar, with having the initialize, using the same header and footer, and I went ahead and gave it a page title of show page.

   You can see that I'm finding the ID here, using id= and that superglobal for get, and I've got a default value, in case something wasn't sent. I'm using that new no coalesce operator, from php seven. And then down here on the page, you can see I'm just echoing that value back, and I'm escaping it, because again, I want to make sure that whatever value is passed in that url is safe to put in my html here. You can see the back to list link that I created, that just takes me back to that pages/index.php.

   Notice also, that I created a double arrow, going backwards, with this and L-A-Q-U-O semicolon. That's an html entity. Just like the html entities that we were using when we escape our html, there are other html entities that are available to you. I just wanted to show you that there are more of them out there, besides the ones that are created for us using htmlspecialchars. Once I had done all that work for my pages, I realized that my subjects needed some of that same attention. So I went back over to my subjects, and I made sure that I escaped all of those values, so that I used h in front of them, the exact same way, and I escape and url encode the subject ID.

   And, on the show.php page, for subject, I gave it the same treatment, with the header and the footer, and the page title, and the back to list link, just so that it would have the same kind of thing that the page has, so that those are a little nicer as well. And then the very last detail that I want to show you, is that I'm setting page title here. Page title is probably something that I have control over. It's a string here. But notice that in the staff header, I'm using that page title. I'm outputting it into my html.

   Now, as long as I'm using strings that I provide, that's not a problem. But the moment that I might potentially start using dynamic data in there, I could inadvertently create a problem for myself. I could accidentally put dynamic data in my page title. What if, for example, my name of my page wasn't just show page, but show page colon, and then whatever the name was. Now that's dynamic data that comes from the database. I could make sure that I escape it there, but it's better to just make sure that I do it all the time.

   Right before I drop it onto my page, let's escape that value, and make sure that it's safe. So I went ahead and added that to my staff header as well. So hopefully you did well with the challenge. I know that there were a few other extras that I threw in there as well, that weren't specifically part of the challenge. Take a few moments, and make sure that you add those to your project as well.

## 3. Headers and Redirects

### 3.1 Modify Headers

   In this chapter, we will learn about page headers and page redirects. Page redirects in particular are an essential web development skill. We're going to begin by learning about headers and how to modify them. Let's begin by reviewing the way in which a web server processes a request that comes from a browser. A request goes from the browser, to the web server software. The web server software looks for the correct PHP file and then reads that file, processes the PHP code that's inside, assembles an HTML response and sends it back to the browser.

   The web server also sends a small amount of data just before the HTML response. Which provides basic information to the browser about what to expect from the content to follow. It's similar to the cover page sent with the fax document telling you how many pages total to expect in the fax. This data is called the HTTP header and every response that uses the HTTP protocol has one. Here's an example of an HTTP header. You can see it says the protocol is HTTP.

   It also says the status code is 200 OK. Indicating that the request was handled without errors. It has the date, some information about the server, and information about the type and the size of content to follow. Usually you don't see or even need to think about this header information. It's automatically constructed by the web server. But we can also use PHP to give instructions to the web server on how to construct this header. We do that using PHPs header function. It expects a string as an argument. That string can be any line that we want added to the header.

   If the line contains some standard information then it's going to be used in place of the default settings. For example, I can tell it that the content type should not be HTML but that we're about to send a PDF file. Another common use is to respond to the browser with an error message. Instead of saying that the status is 200 OK, you can say that the page was not found with a 404 error. Or that something went very wrong with a 500 error. You can also use headers for more advanced techniques. Like sending attachments and setting page cache controls.

We're not going to talk about those here. There's an important point to remember about headers. And that's that headers come before all other page data. Remember they tell the browser hey browser here's what data is coming next. And they're required by the HTTP standard to proceed any communication. That means that any changes we want to make to the header has to be done before we output anything from our file. If we send even a single character to the user's browser. Then the header file is already on its way out the door right ahead of that data.

   At that point it's too late to make changes to the header information. And I mean anything. Even if it's a blank space or a line return. Those count. And you have to watch out for spaces and line returns that might be an included files as well. A space is allowed inside a block of your PHP code, just as long as that code doesn't actually output anything. We're going to revisit this topic again when we talk about output buffering later in this chapter. For now just remember headers must come first and any changes we make to headers must come before we output any data.

   Let's trying modifying our headers in our project file by going into our functions.php and creating a couple of new functions that will send error messages. Error 404 and we'll make another one down here that's going to be function error 500. So in order to return a 404 error we need to use that header function and we need to provide a string that's going to tell it what it should return.

   Now we saw that we could provide the protocol http slash one point one et cetera but a better way to do that since the protocol could potentially change is to use the super global for server and then ask it what the current server protocol is. So we'll just be repeating back whatever that current server protocol is and then we'll append on to that 404 Not Found. After that we're just going to call exit. Now you could render your own 404 page here instead. Exit is just going to quit. It's going to say, you know what, don't do any additional PHP, we're done.

   Just send what you've got back to the browser. You could have something that would actually render a PHP page here instead. So that you would have something to show the user that it was custom. We're not going to do that. And I'm just going to copy this two lines down here. But this time instead of 404 not found it's going to be 500 internal server error. Okay, so now whenever we call these functions. It will change the header and immediately exit our PHP. Let's create a way that we can try those out.

   I'm going to go into my subjects directory and I'm just going to create a new file in there which I'm going to call new.php. Eventually new.php is going to do more interesting things. For now we're just going to use it to test out these errors. And I also want to grab this line from the top of my index.php where I get initialize because I want to have that as well. I want to make sure that I load in those functions that we just created. So that's going to be on my new.php page. So now let's add some PHP code. php and let's set set variable test, equal to the value sent in the URL for test.

   And we'll use null coalesce operator to set it to a default value if it doesn't exist. And then we'll check if test is equal to 404, then, let me just close that parenthesis and then type the curly braces. I'm going to call error underscore 404. That's that function I just created. And then I'm going to copy that and let's add elseif test is equal to 500 then the error will be the 500 error.

   Else echo no error. And then let's close our php tags. Okay now remember, we said that before we can modify header data, there can be no white space. Well, guess what? Look at this right here, I have white space. It's right here after the require once. I want to remove that. I also still have white space because I have a line return in between those. That can count too. So I'm actually going to remove that as well. My php tag now is going to open right here at the beginning the very first character of the file is opening the php tag.

   And then it ends at the end. There's no extra white space before we get to having those headers. White space that's inside these PHP files that don't actually output anything, they're not a problem. It's only once we actually output to this page that it's an issue. Right, so let's save it and let's try it out. I'm going to go into my subjects area and instead of index.php I'm going to just change this to be new.php. So we get no error to start with. Now I'm just going to change this to be test 404.

   Now it returned a 404 error. But that's really hard to see in the browser because we didn't provide a custom 404 page back. So I would just want to show you a way that we can handle that. I'm going to copy this URL. You don't have to follow along with me. But I just want to show you that in my command line there's a tool called curl. And if I tell curl to use the --head option it will let me look at the headers that come back. Let's first look at the header when I don't provide anything. You'll see it gives me back a basic header here, HTTP 200 OK. Now when I go back and I put in test equals 404, you'll see it gives me a 404 not found error.

   It modified the header. And let's do the same thing, we'll test out our 500. And you'll see that we get back that 500 server error. Now those can be handled in a variety of different ways. We could have a custom error page re-returned, our web server can be configured to have a error page that it returns. Sometimes even the client, the browser can have something configured. Now that we know how to modify the header information we're ready to talk about page redirection in the next movie.

```
curl --head http://devserver/globe_bank/public/staff/pages/new.php
```
```
curl --head http://devserver/globe_bank/public/staff/pages/new.php?test=404
```
```
curl --head http://devserver/globe_bank/public/staff/pages/new.php?test=500
```

### 2.2 Page Redirection

   In this movie we're going to build on what we just learned about modifying header information to learn how to perform Page Redirection. In http a webserver can tell a webrowser that it ought to go to a new URL by something known as a "302 redirect". A 302 redirect has two parts to it, both of which are items that are in the header information that's sent back to the browser. The first is a status code of 302 Found and the second is a location attribute indicating the new URL that the browser ought to try instead.

   PHP's smart enough to know that if we're setting the location then we also want to set the status code to 302 at the same time. We don't have to manually set it. Just by saying "header", and then telling it the new location, it knows this must be a redirect because that's the only thing the location attribute is used for. A 302 status code in the header indicates to the browser that it should immediately make a new request to this new location. It ignores any page data that might follow, in fact it expects that there won't be any.

   The re-request happens very fast in the background so that the user doesn't even know that it's happened. Let me give you an example of the most basic usage. Let's imagine that we have a browser and that browser's going to make a request to our web server for a page that we'll call old.php. But let's say that the data that the user's looking for has actually moved to a new location, it's actually belongs somewhere else. So, instead of providing the data the user's looking for, old.php is helpfully going to tell the browser where it can find the data that it's looking for. So instead of responding with html it's going to respond with a redirect, 302 Found, and then the new location.

   In this case the location is new.php. That request happens very quickly and immediately afterwards without any indication of the user, the browser will issue a new request for new.php. That page is legitimate and has the information the user's looking for, and so it returns that data back to the browser. Now, this is a very simple example. One where one page does nothing except immediately redirect the user to another. But it doesn't have to be that way. Redirection can be used for other cases and it can happen after other code executes first.

   Let me give you another example. Let's imagine that the user submits the username and password on the login page. They want to login to a website. PHP code then will check their username and password to see if they're correct, and if they are the user is going to be sent to a success page. Maybe that's a menu of options or their home page, their personal homepage. But if it's not correct, then the user's going to be sent to a failure page. That failure page might say sorry it was incorrect, or it might be the same login form again so they can try again with a new username and password.

   That's where the redirection comes in though. Being able to send them to another page in each case. A page that's a different one than the page that they originally requested. I'm sure you've also seen this in eCommerce. You submit an order, the order is processed, and then you're redirected to a receipt page at the end. And you can tell that you've been redirected because the URL in your browser actually changes. Now let's remember that page redirection has one big caveat which is that page redirects are being sent in the header information.

   And the headers are sent before the page data, they precede any page data that's sent. Therefore header changes must be made before we have any html output. Even spaces or line returns. Therefore, page redirects must be sent before any html output. Now we'll revisit this again in the next movie where we talk about output buffering but for now just know that is is something you have to be careful of. Setting headers, making page redirects, need to happen before html output is sent back to the browser.

   Let's try an example of a redirect in our project. In the last movie we created new.php inside subjects and we created some test code so we could test out some errors. Let's just add in another case here and let's make it elseif(test == 'redirect') so if we send redirect in the URL then it will perform a redirect for us. So, what does that redirect look like? A redirect is, header and then ("Location: , only one space, and then the new location we want to go to.

   I'm just going to put index.php. I'll put a semi colon at the end and then it's a good practice to put exit afterwards so that no other code on the page executes. It just simply quits PHP right away. All it does is send back those headers and then the browser will make its new request for index.php. Let's try it out, let's save the file, let's come back over here, we'll want to make sure that we're on new.php and instead of test 404, I'm now going to test out a redirect. Test equals redirect, boom, look at that.

   It redirected me to my subject's page. Notice that the URL changed. You can try it again if you want to see it happen. It happens very quickly, the request is sent to the web server, the web server says, "Hey browser, go to this new page instead," and the browser makes a new request for this index.php. Before we leave this, let's just make a couple of improvements. The first is that instead of putting index.php in here let's actually concatenate it together and let's use that URL four that we had so that way we can just make sure that we're able to locate things consistently in the same way, index.php.

   So that'll work exactly the same. The second thing that I want to do is, because I'm redirecting I find header a really hard way to remember what I'm doing, to remember that I'm redirecting. I think it's much better to have a function that'll do this for us. So I'm going to copy these two lines, I'm going to go to my functions.php and right here after "error", let's put in a new one, function redirect_to, and it's going to then have a location. So we're going to provide the location that we want to reidrect and what's it going to do? Well, it's going to set the header equal to, and we'll just take all of that out that we just did and put in location instead.

   See how that works? So it gives me an easy way to say redirect to, and it's very clear what I'm doing in my code, but what it actually does behind the scenes is it sets that header for us. Let's save that and let's just go back over to new.php and let's use that instead. So it's going to be, redirect_to, and then we'll still use that URL four though to make sure we have the right one. There we go, two closing parenthesis. So URL four, this path. And then we don't need exit anymore because that's now taken care of for us in our function.

   Let's try it out and make sure that it works. Let's go back here, let's go to new.php first and then let's tack on, test=redirect. Watch how fast this happens. Boom, right away I'm redirected to the new spot. Page redirection is an important skill to have in your web development toolbox.

### 2.3 Output Buffering

   In this chapter, we've been discussing headers and page redirection. One of the important points, which has come up a few times, is that it's essential that any changes to the headers come before any output to the HTML. In this movie, we'll look at that a little closer and also learn how we can use output buffering to help us. Let me start by giving you a metaphor for illustration. Let's imagine that our PHP code is a faucet, and our web server is a glass. Every time our PHP code outputs some data, it goes into the glass like drops of water.

   As soon as the web server receives its first drops of data, it creates the headers for the data and they can't be changed. Once the PHP code is complete, the web server will take the accumulated data and send it to the users browser. Now, let's imagine a second example where our PHP code goes not directly into the glass but instead into another container. This container is the PHP output buffer, and it's like a measuring cup. The output from the PHP code goes into the output buffer and then when it's full, or when the PHP code is done, we take all of that data in the buffer, and we pour it into the web server.

   Then the web server returns the data to the users browser, just like before. That's how output buffering works. Here's the thing, while the data is in the output buffer, it's still editable by PHP. We can monkey around with the headers all we like. It's only once they get sent to the web server that they can't be changed. This gives us flexibility because its frees us from having to be certain that no whitespace or line returns happen to come before a header changer or a page redirect. We just have to make sure that the output buffer is turned on and any of our whitespace headaches disappear.

   There are two ways that we can turn on output buffering. The first is to turn it on in your php.ini file. This features become so common, that in most cases, it should already be turned on by default. One way to find out is by using the phpinfo function. Inside PHP tags, put phpinfo that's all you need to have inside the file, and then I'll take that file and I'll drag it into my web server here, right into my document root for sites. Then I can come over here to FireFox, and I can just load that page up.

   My_phpinfo.php and you can see that I can see all sorts of information about the configuration I have. I'm going to do a search on this page for output buffering. You can see that down here it has a listing for output buffering and it has a size. This is the number of characters that are going to be buffered. The fact that I have any number there at all, means that output buffering has been turned on. If it said off or had no value, then it would mean that it's not turned on. This tells me my output buffering is turned on.

   This page also tells us where our PHP.ini file resides. You can see right here, loaded configuration file, and it gives me a path to my file. I'm going to copy that path and then from my terminal, my command line, I can take a look at that file. I'm going to Linux's nano in order to be able to look at that file. You can bring it up in another text editor just as well. I am going to use ctrl + w to search for output_buffer and you'll see that the first thing it gives me is a commented out section here, telling me about the different values.

   That's not what I want. The semicolon in front lets me know that it's a comment. I'm going to ctrl + w again and hit return, and this time it gives me the real configuration. Output buffering has been set to 4096. It gives you some more information here about what settings you might use in different cases and how you could set it, what you could set it to. Notice though, that it's 4096. That means I can send 4,000 characters to the output buffer, to my measuring cup, before they get dumped into the web server. I have 4,000 characters to play with before my headers are set in stone.

   You can set this to a higher value if you want, but 4,000 is generally a good number to have. You usually don't need something more than that. Another way that you can turn output buffering on, is from your PHP code. PHP gives us two functions, ob_start and ob_end_flush. Ob start, of course, starts out with buffering. Ob_end flush ends buffering and flushes whatever results have accumulated over to the web server. Ob start has to come before any content, the same as headers.

   We need to have output buffering enabled otherwise our data is going to start being sent over the web server before it's turned on. It also doesn't hurt to use ob start a second time if you've already got it turned on in your PHP file. It doesn't do anything bad to call it twice. Which one should you use? My recommendation is that it's best to turn output buffering on in your PHP.ini file. Just have it there all the time so that you're always using it. It's also a good idea to use ob start any time that the code you use may be ported to other servers, especially if those other servers could potentially configured not to have output buffering turned off.

   We wouldn't want our code to stop working because we depend on having output buffering. It's not a bad idea for us to have both. One final point is that you don't explicitly need to call ob end flush because when you get to the end of your PHP code, it will do that step for you. Even though we have a function that will allow us to flush it manually, it's rare that we actually need to do it. I'm going to add it to my project, so that we always make sure we have output buffering enabled. The way I'm going to do that is in this initialize.php since all of our PHP files are calling this file to begin with, this seems like the appropriate place to put it right at the beginning.

   Ob_start and that lets us know that output buffering is turned on. Let's save our file. Let's just make sure that we haven't broken anything, we'll come back to FireFox, we'll click on our menu page, and everything works just fine. Click around, now our output buffering is on. It's buffering the page contents, but then in the end, it's taking those and flushing them to the web server, and then the web server is then returning them to the browser.

## 4. Build Forms with PHP

### 4.1 Build Forms

   In this chapter, we will learn to use PHP to build pages which have forms for submitting data, and we'll begin, by reviewing the basics of HTML forms and then adding some forms to our project. There are two main ways in which we can interact with websites using the HTTP protocol. The first is what we've been doing in the last few movies and that is, GET requests. Whenever you type a URL into your browser bar or when you click on a link, you're going to be issuing a GET request for the server, and it's called GET because the idea is that we're getting back information.

   We're making a request to read information back from the server. Forms work differently, because with forms, we're not just reading data back, we want to submit data to the server, so they use a different method, they use POST. So those are the two main ways that we communicate with the web server. They're not the only ones but they're by far and away the most common. Links allow us to GET data; forms allow us to POST data. This is what a basic HTML form looks like, and you'll notice that inside those form tags, I have attributes for action and method, and the method here is post.

   It doesn't have to be post, but most of the time that's what you're going to want it to be. The action is where were going to submit this form data to. It's a lot like the href that's inside the link. It says where this data will be submitted. Inside the form, we've got all of the form tags. All of the places we want the user to fill out so that we could submit that information. You can see I've got inputs of type text for city, state, and zip code. Those names are going to be used to label the data that's submitted, and then the last one you can see is just a big Submit button, and the value that's on that attribute is what the button text is going to say, in this case, it'll just say Submit.

   Let's add a form to our project. I want to start by adding one to our staff subjects new page. We were working with this in the last chapter and we went ahead and added some code at the top. We can leave all of that, but let's take out this last bit here that says echo 'No error' and the else that comes right before it, so that it won't actually output anything except for our form. Now right below all that php, I'm going to paste in some code, quite a lot of code actually, and it's included in the Exercise Files if you want to get it from there. Let's take a look at what we've got. It's very similar to what we had for other pages. You can see I'm setting $page_title to 'Create Subject'.

   We've got the header being put in the top, inside my content div. I've got a back-link to take me back to the subjects list, and then, I've got another div here with an h1 for Create Subject, and then my form, this is the key part of this page. You can see that my form has a blank action for now. We'll come back and talk about the action later, and my form has a method of post for submitting it, and then I've got a series of form fields. You see I've got an input of type text here from menu_name, and I'm also using some HTML just to maintain the structure of that on the page.

   I like to use these dl, dt, and dd tags, that stands for data list, data term, and data definition. You could also use div's or span's or table, whatever you want, but the overall idea is that we just have a label here followed by the field that we're going to fill out next to it. I've also got one for position, which is going to be a select option, where we can pull down a list of choices, and then, I've got a checkbox here for whether the item ought to be visible. So it's an input of type checkbox, the name is Visible, and the value is 1.

   Now you'll notice that in addition to the checkbox, I also have an input of type hidden right above it, which has the same name. What's that about? Well here's the thing and this is a very important point to remember. When we have a checkbox, if the checkbox is checked, then our form data will send this value, so it'll have a value of visible=1 in the form data that it sends, but if our checkbox is not checked, it's not going to send visible equals nothing, it's going to send no attribute for visible whatsoever.

   It just won't be included in our form data as if we never put it on the form at all. That's just how HTML works. That can be undesirable when you're processing the form because we want to know that visible was there and that the user chose not to check it. So in order to do that, one work around is to put a hidden field right before it, a hidden input with the same name and with a default value. So now what happens is if the form is checked, then this value takes precedence because it comes later on the form, that's the value that's going to be submitted with the form.

   If it's not checked, than this line, is not going to output anything at all, and the only thing submitted in the form data is going to be visible=0, because it's still in the hidden input. It's a handy trick and it's an important part of any web developer's toolbox, and then down here, you can see I've got an input of type submit and my footer at the bottom. Let's save our page and before we go look in our browser, let's also go to subjectsindex.php, and right here, you can see I've got a place holder for a Create New Subject link.

   Let's go ahead and put a link there for that. So php echo url_for() and what is our URL going to be? '/staff/subjects/new.php', that's going to be the link to it. Let's go try it out. I'll go into Subjects, Create New Subject, when I click on the link, now I get a form that allows me to create a new subject. I can type the Menu Name here, I can choose the Position, and I can check whether it's Visible or not, and then submit the form.

   So this form will allow us to create a new subject in the database. Now let's give some thought to once we create that subject, what happens if we want to make changes to it? We want to edit the existing data that's in the database. We would want to have a form for that as well right? Let's do that by creating a new page here. Let's call it edit.php, and I'm going to go to new.php, and I'm going to copy all of this information, and then let's go over to edit.php, and let's paste it all in there.

   Then let's go up to the top of the file, and let's go down, and see what changes we need to make to make it an edit page. Obviously it's not going to be called Create Subject, it'll be called Edit Subject. Scroll down a little further, and we can change this class to say edit, and change this h1 to say edit. Let's scroll down further. Now all these form fields are the same. We still want to be able to edit the menu-name, we still want to be able to edit the position and the visibility, so those are going to get reused. The label on the button will also say Edit Subject, and that's it.

   Let's save it, and let's go over and let's take a look. I'm going to change new.php to be edit.php, and there we are. Now we have our Edit Subject form. This is what would allow us to edit the subject. Now, eventually, we're going to want to actually go to the database and get that existing subject data and pre-populate those fields with the current values. That's what's different between the new and the edit forms. New, will not need to have an existing object in the database, right, we're creating one from scratch.

   Edit, is going to be using existing data and just allow us to make modifications to it. So, let's keep that in mind. Most of the time, the forms between the two are going to be almost identical, because data that we create in the database is probably data that we want to edit later on, but they're not going to be exactly the same. For one thing, we know that our edit subject is going to need to find an existing record in the database. So when we come back over here, let's go take our link from Create New Subject, let's copy it, let's scroll down here to where we have a place holder for an edit link and let's paste that in there.

   It's not just going to be going to the edit.php page we just created, it's also going to need to look up the existing record. So we're going to need to tell it which record that is, and we know how to do that 'cause we did it up here for show. Let me just copy all of this right here, and there, now you can see it's going to append the subject id to the end. So now the edit page is going to know what our current subject is, what are we looking for? It's going to go to the database, it'll get that information out, it'll pre-populate our form with it.

   We didn't need that up here for new. New didn't need to have any additional information, it just needed to display a blank form. Let's save that page. Let's go over here and let's try it out. Let's go back to this, and now when I click on Edit, next to Small Business, you can see it says id=3, So now it would know to go to the database and retrieve the subject that had id 3, and use that to pre-populate these fields. There's another difference too which is that this action is going to be different here at the top as well, because the action involved with creating a new subject in the database, is probably going to be different than the php code that we need to edit an existing subject in the database.

   So the form action is likely to be different as well. So while there are a number of similarities between our new and edit forms, they're not exactly the same. 

### 4.2 Use Form Parameters

   In the last movie, we added some forms to our project. When one of those forms is submitted, the page that receives the form is going to need to work with the form values. PHP takes these form values and automatically assigns them to an associative array where we can access them. That array is stored in a super global variable called POST, or dollar-sign, underscore, and then in all caps P-O-S-T. Remember, for URLS and links, which were GET requests, we access the URL parameters using the super global GET.

   It makes sense, then, that with forms, which are POST requests, we would expect to find the form parameters stored in the super global for POST and PHP puts these values into the POST super global before our page code starts processing, so they're there right from the start. But, unlike GET parameters, we do not need to do any special encoding on form parameters before we send them. There are no reserved characters that we need to worry about. HTML takes care of all of that for us already. The way that we access these values is just like we did with the GET super global.

   We simply ask for the name of the attribute we want to get out of the associative array. So here I'm getting the value that was sent in for name. It's also a good practice to make sure that value exists so we don't accidentally get a warning or an error so we can use either the ternary operator that'll check to see if it's set before we use it or if not use a default value, or if you're using PHP greater than 7, you can take advantage of that null coalescing operator, which does the same thing. If POST['name'] is there, use it; otherwise, go to the default value.

   In my project, I've already added a page called create.php in the subjects directory and you'll also find this in your exercise files. It's a very simple page. It doesn't even load up our initialize file or anything like that. All it does is it simply accesses this POST super global and it asks for the values that have been sent in for menu name, for position, and visible and assigns them to local variables and then we have a bit more PHP that just simply displays those back to us on the page so we can see what they look like. So that's it, we're just simply doing a simple exercise to read values that have been submitted to this page by a form.

   So this page is called create.php. We just need to submit our values there. So let's go to new.php and let's just change our action link here to go to that new page. So I'm going to use "<?php echo" ?> and I'm going to use my "url_for" function again here, make sure that I have a good URL that I can use, and it's going to be called /staff/subjects/create.php. That's it, I don't need to provide anything else, I just tell it what page to send, the package of all of this form data.

   Let's try it out. Let's save it, let's go to Firefox, let's click on "Create new subject." If you already had this page loaded, make sure you reload it because we want to make sure that we have that action at the top of our form so it knows where to submit it. Now let's try "Testing," position 1, visible true. Click "Create subject." Look, it took us to create.php, it read in the form parameters, here's "Testing," position, visible 1. We can click back, we can change it to "Testing Again," change it to not visible, and click "Create subject." There we go, again, create.php, our menu name, our position, and visible.

   That's all there is to reading back these form parameters. Now you may be wondering, well, what about when we take this code here and we want to put it on our edit form right here, I'm not going to paste it in yet, but for this action, the edit action needs to be a little bit different because the edit action needs to also be able to pull up the existing subject from the database. It needs to know which one we want to edit. We've given it a menu name and a position and visible in our form data, but we didn't tell it which one. Well, our action here would need to include the ID, the ID of the subject we want to edit, so we would want to include that as part of the URL.

   So you may be wondering, what about the fact that we're using both GET parameters and POST parameters? That's not a problem. PHP will take the URL parameters that come in from the URL and put those in the GET super global and it will take all of the parameters that come in from the form and put them in the POST super global. We can use both of them together. For now, we'll leave this edit action blank because I have a different idea in mind for what we'll do with it later on. 

### 4.3 Detect Form Submission

   In this movie, we'll discuss how we can tell when a form has been submitted. Let's begin by understanding why we might want to know that. Here I am on the create.php page that we created and used in the last movie. The way that we used it is that we had a new dot php page that submitted its form data over to create.php, so this was a POST request to create.php, which contained the form data here and then we had create.php that processed that data. It did some very simple processing, it just simply read the values back and put them on the screen for us.

   But I want you to notice that even though we made a POST request to create.php, it's also possible for us to make a get request. All we have to do is click on the URL up here in the browser bar at the top and hit return and now I've issued a get request to the same URL. In this case, our create.php handled the page just fine, we didn't get any errors back or anything like that, but that's not always necessarily the case. It might be that we want this page to be dedicated to form processing and not respond to simple requests that are not from a form.

   Maybe we want to redirect do another page in that case. To do that, we need to be able to detect whether the form has been submitted or not. There are three main techniques that developers use to know whether a form has been submitted. The first is that you can test to see whether a key parameter is present in the form data and whether it has a value. The second is you can see whether there's a submit parameter that's been sent. I'll show you what that means in just a moment, and then the third is we can check to see whether the request method was a POST request.

   The first of these is to check and see whether or not a key attribute has been submitted. For example, let's say we have a login form. We would expect that some value would be in the form data for username when the person goes to log in. So if we don't see username in the POST super global then we'll know that the form wasn't submitted. Because even if they left username blank, something should've been submitted for it. Another way people handle it is by adding a name attribute to their submit button. If we don't put any name attribute, our submit button doesn't submit any data for itself, it's just not included in the form data, but as soon as we add name equals something, now that value will be included in the form data.

   When the form is submitted, there will be something present for that submit button. So we can check to see if it's there, we can check to see if that value is present. If it is, we'll know that the submit button had to have been clicked. But I think an even better way to do it, and the way that I'm going to recommend is to actually check and see whether the request method was a POST, and we can do that using the server super global and asking it for the request method, in all caps with the underscore between the two words. So if the request method is equal to POST, then we'll know that a form has been submitted.

   If the request method is GET, then we'll know that it was a link or a URL. I like to take this and wrap it all up in a handy function, so here I have a function called request is post, and it just does that evaluation to see is the request method equal to post. And that's a nice handy convenient method we can put into any of our pages to find out whether the form has been submitted or not. Let's try adding this to our project. So I'm going to add this function into our private functions.php page, I'm just going to scroll down here after our redirect, I'm going to paste them in.

   They're also available in the exercise files or you can pause the movie to copy this down, it's not a lot of text. But you can see that I'm actually providing two different functions, one for whether is a POST request the other is it a GET request, and it just returns the result of this evaluation. It's either going to return true or false, this is just a condition to check and see, is this equal to this, so we'll return that value back and then we can use it as a condition inside our page. So let's go to create.php. Now in order to have access to that function, we also need to come to new.php and just grab this require once line.

   Let me make sure we have that, and then let's come back here, now we'll call initialize, that'll give us our functions, so now it has access to the function, and then we can put something in here for it, let's say if is post request, then and we're going to do all of this and I'll just indent it a bit, but if not, then what do we want it to do, let's have it redirect, redirect, and we wrote a helper method for that redirect to URL four and where do we want to send it, let's send them to staff subjects new.php.

   Alright, so either if it's a POST request, display the parameters, if not, redirect them back to the form. Let's save this page and let's try it out. Let's come back over here and let's start by going backwards so that we have our form again, you can fill it out with any simple data you want, we're going to click create subject. And you see that I get my parameters, it displays them on the page. Now let's click up here at the top, and let's hit return, and look at that. It redirected me. It no longer processed my form, we were able to detect that this was not a POST request, and so it redirected instead.

   Having these two functions in your standard library can be really useful, to check to see whether something is a POST request or a GET request and respond appropriately based on each one. 

### 4.4 Single Page Form Processing

   In the last movie we learned how to detect when a form was being submitted to a page or whether the page was being loaded directly. We used it to redirect whenever it was not a post request. We can also use this same technique to do something I call single-page form processing. The idea is that we have a single page which contains both the form and the code to process that form. In other words, we'll have a form that submits to itself. There's nothing wrong with having the form and the form processing on two separate pages like we did with new and create, but having them on one page adds a few nice perks.

   The first is just that all of the logic related to the form, how it's displayed and how it's processed, is all self contained in a single file. We haven't talked about form errors yet and when we do we'll realize that when there's a problem with the form we're going to want to redisplay the form back to the user so that they can fix it. We don't want that data to just simply disappear, we want to represent the form to the user pre-populated with their values so that they can fix the problems. So the idea here is that when we have a get request to the page it's going to simply show the form.

   But when it's a post request we're going to have all the form processing take place at the top and if something goes wrong the form will be further down on the page. So we can simply redisplay the form again as needed with all of the values and error messages that it might need. Let me demonstrate. So we already have new and create as a form and a form processing page. Now for edit I want to make the edit be a single-page processor. So what I want to do is I want to take all of this code from create.php that we have and all of this is post request right here.

   I'm going to take and just copy. I'm going to come back over here to edit.php, I'm going to take all of this code where we were testing things out, I'm just going to remove that and instead paste in my new code into the post request, then we're going to get those values and we're going to be able to display them. If not, right now we have something that says redirect, but we don't want to do that redirect, I'm going to just comment that out. So if it was not a post request then we want to just display the page. So process it if we've got it, if not display the page.

   Let's try that out. In order to make it work we'll need to first put in a form action. Remember we didn't have that before. I'm going to cheat and just copy this link that we had up here down here and then I can just edit it. So it's already got all the URL for and instead it's going to go to edit.php. Remember though that edit.php needs to know what we're editing, so we need to pass in an ID as well. So I'm going to include an ID here. And for that ID I'm going to want to make sure that I escape it for HTML and URL encode it and I'm just going to use a value for ID.

   Now that ID hasn't been set yet. We need to have a variable for the ID. So we need something that's going to read that in. So in every case, not just when it's a post request, we're always to want to have ID equals and get ID. Now if ID's not set, we know we could do something like this and have a default value, but if it's not set I want to do something more extreme than that. I want to say, if not is set get ID, then let's redirect.

   Let's redirect to, and actually I'm going to copy this line down here just to save me some time. I'll remove that and let's come up here. Redirect to and I'm going to redirect back to index.php. So it'll go back to the list. So if I don't have an ID, don't show this page. ID is required or else we're going to redirect back to the index. Then I know I have an ID. If this is present I can assign it confidently. If it's a post request then I'll process it, if not then I'm going to show the page.

   See how that works? Let's save it and let's try it all out. Go to our list and let's click on small business, click edit, ID is equal to three, you see we get our edit subject page. Let's try it, test, let's click edit subject. Look at that, it tested our form parameters. Now if I do a get request to it again, hit return up here, it doesn't do the form processing. Now let's take away our ID and let's just see that not having an ID is a show stopper, it takes us back to the subjects list page.

   So we've now implemented single-page form processing. However, we don't really see the benefits of this yet. Let me drop down here though and show you that if in this value if instead of having nothing what if we put in echo, dollar sign, menu name. Now that will display whatever menu name has been submitted for us automatically. It'll appear right there. Now we also want to go up and make sure that we have a value for menu name set in all cases.

   So I'm just going to come up here and before any of this page starts I'm going to make sure that menu name is initialized to just an empty string. And position, just so these don't blow up on us. And same thing with visible. Its not a bad idea whenever you have a form to just make sure that there are default values there. So if it's not a post request, then those will get handled. We could also put these here in this else statement, they could go there, but I like to go ahead and just put them at the top of the page. I'll remove that else statement 'cause we don't need it anymore.

   Let's go back and let's try it out and see how it works. Click on edit. So now we're going to submit testing, testing. Edit subject and look at that. My form value stuck around. So if there had been a problem with it and that's why the editing didn't actually take place then you can see how we'd have the opportunity to edit it. We'll talk more about that in a future chapter when we talk about validations and errors. For now I just want you to see that we're setting ourselves up for taking advantage of that by having the form processing take place on the same page.

   Our page can do double duty, it does one thing when it's a get request, it does a different thing when it's a post request. If you're still not convinced about the advantages that this offer, think for a moment about how you would do this with new.php and create.php. Once you process create.php how would you get this value to redisplay in the form? You can't just redirect back to the form because that's a new request when we do our redirect and those values would be lost. You can't really send those values in the URL string because there might be dozens of them.

   You could potentially store these values and retrieve them, but that's really making something much harder that could be very easy. Single-page submission solves the problem for us in a simple way. 

### 4.5 Challenge -> Add Forms

   It's time for another challenge assignment and like the challenge assignment that we had before, your goal is going to be to take the work that we did inside the subjects management area and to do the same thing inside the pages management area. Let's go over the points that you need to make sure you hit. The first is that you'll want to add a form under staff/pages/new.php. Replace any placeholder code you might have there and put in the correct page to display a form for creating a new page. Then you'll want to take that form and modify it so that you can also have an edit form so that you can edit an existing page.

   You want to make sure that you add links to both pages from pages/index.php and remember that in the link to the edit.php page, editing will require having a page ID so that that's accessible and that eventually that page can go to the database and retrieve an existing page. Once you've got that, then work on the form processing. Use single-page form processing for both of the forms. When we were working with the subjects, we only did it for the edit page. The new page actually used two pages: new and create.

   You're not going to use create.php. Do both of them as single-page form processing. So if a form was not submitted, you're just going to display the form, but if a form was submitted, then you'll display the form parameters at the top just like we did for subjects and then the form below that. Then inside the form, go ahead and display any submitted menu name that might have been sent in when the form was submitted. And then if you're up for a real challenge, as a bonus assignment you can display the submitted position and visible on the forms as well.

   Right now we were only working with that text input. This requires you to work with select options and check boxes. So we'll need to write some PHP to check and see if the select option value and the checkbox value match the submitted value for those two attributes. Do your best. Remember that you can refer to my work on subjects if you need to, but try to write as much of it on your own as possible. That's the way that you learn. And then in the next movie I'll show you the results that I came up with. 

### 4.6 Solution -> Add Forms

   I hope that you were successful with your challenge assignment. In this movie, I'm going to show you the solution that I came up with. First, let's look in a browser and then we'll take a look at the code. You can see, in the browser, I can click on Pages and I come up with my Pages area and I have a new link here now for Create New Page. And when I click on it, takes me to new.php and I get back a form to allow me to create a new page. So, I can add the Menu Name, I can type Position, and I can type Visible. So let's try just write Testing and I'll put in Visible true, and I'll click Create Page.

   Now this submits to the same page, new.php, that's different than what we did throughout the rest of this chapter where we used create.php. We're using single-page submission here. Single-page form processing. So it's going to submit to itself, new.php and you can see that it lists the form parameters that came in. It says it received Testing, Position: 1, Visible: 1. And then it redisplays the page and you can see that it redisplayed the Menu Name here. And we have the Position and Visible is checked. If we were to uncheck it and click Create Page, we see Visible's now zero and it's not checked.

   I added that detection in there. Let's go Back to List now and let's do the same thing for Edit. I'll click on leadership and you see, for here, we have Edit Page, we have our form, once again, we can type in Testing. Notice here that it also says id=3, it is passing along the ID of the page that it would look up in the database later on. And let's click Edit Page. You can see that it submits back to itself. It includes the ID, so that it can be found in the database again, using that URL parameter, but then we have the Form parameters here: Testing, Position: 1, Visible: 1, and those show up down here in the form as well.

   Let's go look at the code. So, the first thing was that on that index.php page, I needed to add links so I just added a link right here that'll take me to staff/pages/new.php and I added a link down here that would take me to edit.php and also include the ID that I'm going to need to look up in the database. So, I've got the ID included as well. Then, in new.php, I have a form. So, the first thing I actually did was I added the form itself. So I have all the form down here, page title, the page header.

   And then I've got my form with this action, then I've got all my form fields. Then, when that field submits, it's going to submit to itself, to new.php. And up here, I have code that says if it's a post request, then get those values and display them. Eventually, we would get those values and do something else with them. We would submit them to the database, for example. But for right now, we're just displaying them at the top of the page. If it's not a post request, then it just displays the form. So we only get that part when it's a post request but we go ahead and set default values for all of these just in case.

   Because, further down the page, I'm going to echo back the menu name. Now, notice that I've also put an h in front of this as well. I need to make sure that I escape this for html. I did not do that in the last movie when we were talking about outputting this value; that was an oversight on my part. So we do need to escape these values for html, so I've got the h there. I also did the bonus assignment, which is that I checked to see if position was equal to one and if so, it's going to echo selected next to this option.

   That'll mark this option as being selected. If the check box for visible is equal to one, then it's going to echo checked there. So that was the bonus assignment that I asked you to do. And then I did the same thing for edit.php. I've got my form, it just says edit page instead. It's going to submit to itself. It includes the ID with it. We did the same thing down here in the form, echoing back any existing menu name, checking to see whether these items were, in fact, the current values before outputting selected or checked. And then at the top, I've got my form processing.

   If it's a post request, then display this information. And I've got some default settings here. I also had this additional bit of code at the top of the edit page to just make sure that we have an ID and, if not, it redirects to pages/index.php. Once I had done that and completed the assignment, I also went back to the subjects page and just made the changes here so that I made sure that this was escaped using h, and added in the parts for selected and for visible.

   So that same code now applied to edit.php. On new.php, I did not change the code to make it single submission, you could do that if you wanted. And I did not bother putting in these additional values because if it's not single-page form submission, then there's really no way to redisplay these values on the page. That's the problem that we ran into. It's up to you whether you want to revise this page now, but we're going to come back to it a little later on. Hopefully, you were able to complete this challenge assignment on your own. If not, take a few minutes to figure out what you did wrong.

   Look at my code, pause the movie if you need to to compare, and make sure that you get everything right before you meet me in the next chapter. 

## 5. MySQL Basics

### 5.1 MySQL Introduction 

   We've learned to use PHP to build pages which link to other pages and to create web forms which can submit and process data. You can build a solid, dynamic website using only these tools, but for complex sites, you will reach the limits of what you can do with just PHP alone. Adding a database is the next step, and it offers many benefits. Databases provide a way to both read and write data. They allow you to store more information, and to keep that information organized, so that you can access it faster.

   They also allow you to easily relate different types of data to each other. The database we'll be using is MySQL. You can use other databases with PHP, but MySQL is the best supported, and the most common choice. It's open source, and free, just like PHP. It's also very easy to use, and because it's popular, you'll find a lot of online support if you ever need help, and it provides a good introduction to many common database concepts. If you've never worked with a database before, chances are that you have worked with a spreadsheet like Microsoft Excel.

   A database table is similar to a spreadsheet, in that it has columns and rows, which are populated with data. And, you can have multiple tables, the same way that many spreadsheets often let you have different worksheets or tabs, that you can switch between. But, databases are not like spreadsheets in some important ways. First of all, spreadsheets are optimized for adding numbers, that's what they do well, performing calculations on numbers. Databases are optimized for working with data, and most importantly, databases can traverse relationships between the tables.

   They can move between the data, and spot relationships that are there. The other difference, is that spreadsheets you work with by using your mouse or your trackpad and the keyboard. You interact with them directly. For databases, we're going to be issuing commands to the database in order to get the database to do what we want it to do. Let's review some common database terminology. A database is a set of tables, and we can have several databases running in MySQL at the same time. Each database will contain its own set of tables, and different tables do not interact.

   So, we'll create one database for the sample web application that we'll be building, and in general, you're going to have this relationship, one database equals one application. MySQL will allow you to control user access table by table, but with web applications, most of the time, we'll have one database user, being the web app, and it will have permission to use any of the tables that are in that database. Our database is going to be made up of tables, and our tables are going to made up of rows and columns. As we discussed, it's a lot like a spreadsheet.

   Each table will contain one type of information, a noun. And, since there will be many records of that type in the table, it's usually a plural noun. For example, products, customers, orders, maybe countries, students, or transactions. They don't have to be concrete nouns, they can represent more abstract ideas, like categories, favorites, or settings. Relational databases get their power from being able to make relationships between the tables. A single customer record in the customers table has a relationship to the customer's past orders, which are stored in the orders table.

   Each order in the orders table has a relationship to the products that are in that order, and those products are stored in the products table. A table has a defined structure for storing its data. A column is defined for storing each data type. For example, first_name, last_name, email and password. These are similar to the columns on a spreadsheet. Each column has a specific type. A column for holding strings like first_name can only hold strings. A column for holding numbers or integers can only hold integers. These keeps the data organized, but it also helps the database to allocate an appropriate amount of storage space for it, and to locate that data faster.

   A database row can also be called a record. It's the set of data that's in each column. So, if the columns are first_name, last_name, email, password, then a single row might contain Bob, Smith, bob@email.com, and then his password, secret. Again, this is similar to a spreadsheet row. A field is simply the intersection of a row and a column. And in practice, the terms field and column are used rather interchangeably. There are two concepts which are essential to making relational databases work. First, we have a primary key.

   Each record has a primary key which serves as a unique identifier for that record. For example, you might have a customers table containing 500 customers. By giving them all unique identifiers, numbered one through 500, I can request the record for customer 207, and the database knows right away where to look to retrieve that data. A foreign key is a column which references another table. It's the foundation of relational databases. For example, if we have a customer with a primary key of 207, and that customer has five orders, then in the orders table, I would expect that there would be five records with a customer ID of 207.

   The information in the foreign key column is the way that I know that those order records belong to that customer. We'll come back to this concept a little later on in more detail. And then, we've got an index. An index is a data structure on the table that increases its lookup speed. It's a lot like the index that's at the back of the book. You turn to the back of the book, you look in the index, and you look for what you want to find, and it tells you immediately what page to turn to. You don't have to search through the whole book, you can quickly go to exactly what you're looking for. Primary keys and foreign keys are the most common indexes that we use, because they allow us to look up those records by their identifiers very quickly, but you can also have other indexes on data which is used frequently, in order to look up records.

   There's one other term that's helpful to know when working with databases, and that's CRUD. It's an acronym for create, read, update, and delete. These are the four primary operations that we perform on databases. We create new records, we read existing records, we update those existing records, and we can delete records. We'll be performing these four operations over and over again on our database. So, we'll often just refer to it as CRUD as a shorthand. 

### 5.2 Create a Database

   In this movie, we're going to log into MySQL and create our first database. In order to interact with MySQL, we're going to do that from our command line program. If you're on Windows, that program is going to be command prompt, on Mac it's going to be the Terminal. So here I am inside my Terminal application and the first thing we want to do, is make sure that we have MySQL installed. So if you don't have it installed already, you'll want to do that. Let's just check and see here, mysql version. You see I have Version 5.7 installed. It doesn't matter if your version is slightly different from mine, MySQL in general works pretty much the same in all the versions.

   Then we want to actually try to log in, to make sure that it's running. We try mysql -you and I have a root user created. Every MySQL installation has a root user by default. I'm going to hit return, and you'll see that it doesn't open up for me, and that's because I didn't tell it that I had a password. By default, a lot of times MySQL doesn't have a root password, but it's a good idea to make sure that you do have one. Secure that root user, because the root user is your most powerful MySQL user. It's the user that has the ability to do anything inside MySQL.

   So I'm going to also put the -p option after it, and that's going to allow me to provide a password. So now it's going to ask for my password, and there it is. Now I'm logged into MySQL. So I know I have MySQL installed and it's running. So now we're ready to work inside MySQL. What are the commands that we want to issue? There are four main commands we need to know about creating databases. The first is show databases, and that just simply shows us a list of the databases that are already there.

   Notice that it has a semicolon at the end, all commands in MySQL should end in a semicolon. That's how MySQL knows that the command is done. The capitalization doesn't matter, but it's a best practice and it makes your code more readable, so I tend to capitalize things. The second command is to create the database. All we have to do is tell it the name of the database we want. Create database and then the name of the database. Capitalization does matter for the database name and there should be no spaces in it, but you can use underscores. Then, when ready to actually use the database, we can use database name.

   If we want to drop the database, or get rid of it, you use drop database and the database name. Use database name is really only if you didn't specify the database when you logged in, or if you want to switch between databases. It's not something we're going to use very often, but if you have multiple databases, it allows you to move around between them, so that you're currently in an active database. So to begin with, let's just do show databases. You can see the databases that are there by default. These are the default MySQL databases. They're not for your use, they're there for MySQL to use, so don't mess with any of these basic ones that are there.

   But we want to create our own. So create database and then let's call it globe_bank; That's it, that's all it took to create the database. Now I'm going to hit the up arrow. It'll allow me to go back to show databases again, and now you can see that my database is listed there. As I said, we can use the database, and that will switch us into it, so it's our current active database that we're working with, and we can also drop the database. Drop database globe_bank; and just like that, our database is gone.

   Now hopefully we didn't have lots of data in there, because as soon as we say drop database, you can see, everything that was in that database just instantly disappears. It's a very powerful command. So we want to be careful about that. I'm going to hit the up arrow a couple of times, so that I can create my database again, and now show databases, you can see it's going to list it again. So now I have my database there. Now when we logged into MySQL right now, we did it as the root user. That's the most powerful user with lots of privileges to perform actions inside MySQL, from creating tables to dropping them.

   We could log in from our web application as the root use as well, but I think that's a really bad habit. It's much better to create a new MySQL user and assign it a password, and then grant access to our database to that user. It limits the scope of access, to just that single database. Now, we don't have access to everything, we only have access to the database we've granted privileges on. It's better security and there's no excuse not to do it, because it's easy to set up. All we have to do is type a command like this, grant all privileges on, and then the name of the database and then a period and then an asterisk.

   The asterisk says we're granting privileges to all tables on that database, and that's a best practice. Then there's a space after the asterisk, that you can't see because I dropped to a new line, and then it says to, and then we want to create a username. This is going to be a new user that we're creating. It can be any name you want, inside those single quotes and then @ and then the IP address, or the location that that user would be allowed to log in from. We're going to use localhost. That means that only from this computer can that user log in.

   They can't log in from some other foreign country, some other IP address and get into this database. Only our web app, which is locally hosted, can access it. That's another good security practice. Then there's a space at the end of that, and then the next line is, identified by password. If this user already exists in the database, we can leave out that last bit, but if it's a brand new user, this gives us the chance to say what the password is that goes with that username. We can also take a look at what grants have already been given to that user, using show grants for that username.

   All right, so let's try adding a new user and granting privileges on our database to them. So again, my command is going to be grant all privileges on, and then the name of the database, globe_bank. and then the asterisk, because it's all tables, to, I'm going to call my user webuser. You can call it anything you want, and then @localhost, and then a space, identified by, and then whatever password you want to use.

   I'm going to use secretpassword, just to have a convenient one, but that's not a great password. You should hopefully pick a better password. So pick a good password that you can use for your user, and then let's hit return. Now we have a new user created called webuser, and that user can use their username and password to access our globe_bank database. 

### 5.3 Create a Database Table

   In the last movie, we created a database that we could use. And now we're ready to add our first table to that database. The way that you create a table in MySQL is using this syntax. CREATE TABLE, and then the table name you want to create, and then inside parentheses, you're going to provide a set of definitions for what the columns in that table are going to look like. So you have column_name1, and then its definition, a comma, and then column_name2, and its definition, and so on. And at the end, there's the opportunity to provide a few extra options for how you're going to create that table.

   We'll look at this in more detail. Once you've created a table, then you can show the tables, just like we showed databases. We can call SHOW TABLES to know what the tables are. We can show the columns that are from that table, to see what its structure looks like, and we can drop the table. Just like we drop the database, you can drop a whole table, which of course erases all its data at the same time. So, what are we going to create for our database table? That's always a good starting point, is to think about what the database ought to look like. We're going to create a table for subjects.

   It's going to be a place to hold all of the subjects that we need in our content management system. We know that it's going to need a primary key. That's the id. As a general rule, every single database table needs a primary key, an id, all lowercase, is a good one to use. Then, we should think about what it's going to contain. We've got the menu name, menu_name, and we know that's going to contain a string, right, it's text. Then we've got the position. The position will be an integer, one, two, three, four, five, so we're going to store that, and then we're also going to store whether or not this subject is visible or not.

   The idea is that we have the ability to suppress some subjects so they don't show up to the public. There it can be staged and get everything set up in the admin area, and then we can take the invisible only when we want to. That's going to be a boolean, meaning that it's going to be true or false. So the way that we would create this in MySQL would be like this. CREATE TABLE subjects, and then in parentheses, you can see I have id, menu_name, position, and visible. And next to each one of those, I have the definition for what that field ought to look like.

   The first one is very standard. Whenever we have a primary key, this is probably the way you want to do it. We're saying, the primary key is going to be an integer, and it can be a large integer, it can have 11 different characters in the number. That's how big it can be, and it's going to be NOT NULL, meaning it can never be empty, it always has to have a value. And we're going to ask MySQL to automatically AUTO_INCREMENT that value for us. That'll ensure that it always stays unique. So if we add one subject, it'll be subject number one, then we add a second one, MySQL will make sure that that second one automatically becomes id number two.

   It'll do it for us, we don't have to know what the next one is, we just say hey, add a new subject, and it'll say okay, I already have a subject number one, so this must be subject number two. It's a nice feature. And then you can see that menu_name, which was going to be a string, has a column type of VARCHAR. That's short for variable length characters, and it can have up to 255 characters in there. If we needed something longer, then MySQL has a type called text that we could use if we needed a large block of text.

   But 255 characters is good for most short strings, like the menu name. For position, I've told that it's going to be an integer, so it's an INT again, that's short for integer, but I've told it that it only needs to reserve three integer places for this. That is, it's a number that's going to be less than 999. For the position of this content, that should be more than enough. But it's not a problem if you want to make it a larger number too. And then for visible, which is a boolean, the convention is to use TINYINT. It's a tiny integer, and we just use one.

   We're basically saying there's a small integer, and that's because what we're going to store there is not true or false, but zero or one, and TINYINT will allow us to do that. And then you can see at the end, I've also told as a special option that the primary key of this table ought to be id. This can be a lot when you're first starting out, but remember you can always come back and refer to it, and then the MySQL documentation can also help you out. Let's add this table definition to our project. So you can see that I'm already logged into MySQL, I've called SHOW DATABASES, which shows me the databases, and you can see I created that globe_bank database in the last movie.

   You also want to make sure that you use USE and then globe_bank. That will make sure that we're using that database, that it's our active database. It's also possible when you first log in to provide that as an option, and go directly in to this database, but I didn't do that, so in order to make sure that I'm on the right database, I want to use that. And that's because when I call SHOW TABLES, I don't specify the database, I just said SHOW TABLES. So how does it know which database? Well it uses the database that I'm on right now, that's where it gets its SHOW TABLES from.

   All right, so now let's create our subjects table. I'm going to paste in the SQL for this. You can also find this in the Exercise Files, if you want to copy and paste it from there, or you can take the time to type it up, because it's a good way to actually learn it, by typing it all up and forcing yourself to actually go through the motions of typing each of those characters. So if you want to pause the movie, you can copy it down, but you can see that I created the table, I created all the different columns that I would need, and at the end it says Query OK, lets me know that everything worked out all right. Now when I call SHOW TABLES, you'll see that it says that I have my subjects table.

   And if I say SHOW COLUMNS FROM subjects, you'll see that it comes back and tells me what the subjects table looks like, it gives me a definition, and it tells me the different fields that it has, and the type associated with each one of those. Now I could DROP TABLE subjects, I'll just do that, you don't have to do this along with me, but I'm going to show you that I can drop it, and now it's gone, now the up arrow, it's just gone. And all the data that was in it is gone as well.

   I'm going to recreate it because I obviously want that table, so now when I say SHOW TABLES, it's there again. So that's it, that's how we create new tables in MySQL so that we can work with them. And because we granted access to all the tables to our web application user, we have access to any table that we create on this database, automatically. 

### 5.4 CRUD in MySQL

   At the beginning of this chapter, I introduced you to this acronym: CRUD, C-R-U-D. In this movie, we're going to learn how you implement CRUD in MySQL. You recall that CRUD is an acronym for the four most basic operations that we perform on databases: Create, Read, Update, and Delete, and these are the four things that we're going to do over and over and over again with MySQL, so we need to learn the syntax that we can use to perform each one of these and there's a specific syntax and it's different for each one.

   So let's first start by looking at read, this is the one we're going be performing the most often. The idea is that we're reading information back from the database, we do that far more often than we create, update, or delete data, we're constantly reading data back. The way that we read data in MySQL is with the select command. So select and then we say what we want to bring back from the database table. I've got an asterisk because I want to bring back all columns, so it's a while card saying, bring back all the data that you've got, every bit of information about this record, I want to bring back.

   You can also specify common unlimited list if you only wanted certain columns to come back from the database, and then, in the next line, you see I've got from table or I tell it what table it out of be retrieving this information from. I can specify a where clause if I want, I don't have to, but I can say where ID equals seven, if I want a specific record, if I want record number seven or where last name equals Scogland or where state equals Pennsylvania, anything like that you can bring back as a conditional clause and you can join those together too with and statements, where one thing is true and something else is true, where clauses can be very complex and then we've got order by, and again this is optional but it says how we want to order the records that are returned to us.

   There are other options available to you that will allow to pick only certain records from the set maybe to limit it to a certain amount or to skip over certain records, but we're just going to focus on the basics for now. This is a basic SQL select statement. Next, we have the SQL insert statement, which is used to create records and for that, we use insert and then into what table we want. Let me provide a list of columns, the order of the columns can be anything that we want but then in the next portion in the parenthesis after values, you'll see that we're specifying the values that out of go in each of those columns, and the order needs to match what was in the order before.

   So we're basically saying, take each one of these values and put 'em in the list of columns that I already gave you. And then there's SQL update. We update a table, we set values equal to each of the different attributes, where something is true. We usually don't want to do it to the whole table, you certainly can, you can update the entire table to have a certain value, but usually we want to update just a subset of the records, it can be one single record like it is in this case, where its ID equals one, or we could say, update all records where the state is equal to TX and convert that to be Texas, so we want to change TX to be Texas, all records would instantly be changed.

   So, update table, set each one of the columns equal to the new value and then where ID equals one. This syntax is a little different than the way we created records. And then we've got SQL delete and this just allows us to delete from a table where something is true and again we could delete all records, we could say delete all records where the state is Alaska and they would all just instantly disappear, but more often we want to delete one specific record, in this case we're deleting the record that has ID number one.

   Now I certainly don't expect that you're going to remember all four of these right from the start, as a beginner, you're probably going to have to look them up often. My hope is that this movie can serve as a reference if you forget. The MySQL documentation also has the same commands and gives you details on the many other options that you can use with them. In the next movie, we going to get some hands on experience using them. 

### 5.5 Populate a MySQL Table

   In the previous movie, we learned the syntax that we used to create, read, update, and delete records in MySQL. Let's start adding data to our subjects table and take our new MySQL commands out for a test drive. For my command line you can see that I'm already using my globe bank database, and then when I show the tables that are on that database, you can see that I have my subjects table already created. So if we use select all from subjects then it'll show us all of the subjects that are in the subjects table currently. You can see that there's nothing in there.

   So now we need to do an insert to put some data in there. So let's use that syntax for insert into subjects and then I'm going to open my parentheses, and I'm going to list out the columns that I want to insert data into. So I've got the id column, I've got the menu name column, I've got position, and I've got visible. I'm going to close my parentheses and then I'm going to tell it what values should correspond to those four columns. So in parentheses I've got to have the correct values for each one in the correct order.

   So I'm going to say 1 and then in single quotes, very important that strings go in single quotes in MySQL not double quotes, single quotes, about globe bank and then single quote comma 1 for position and 1 for visible. Even though it's true we're going to use 1 to represent true and 0 to represent false. That's our Boolean. And then I'll need to close those parentheses and put a semicolon at the end. All right let's hit return. And it says query okay.

   I'll hit the up arrow twice, and now I can run my select command again, and you can see that I have a subject now in my database table. Let's add another one. I'm going to hit the up arrow twice so that I can go back and make edits here. This one is going to be in position number 2. And let's change it's name to be consumer. Now I'm also going to show you another trick which let me use my arrow to go all the way back here, and I'm going to remove id from this list.

   Which means of course that I need to remove the value that corresponds to it. Okay so now I'm not giving it an id. But remember, id is the primary key. And we told it that it can't be blank, it's not null. And we told it to auto increment. That means that MySQL will handle adding the next value for us. It will auto increment on our behalf. I'll hit return. It says query okay. Let's do select all from subjects again and you can see that it added the id for us. It created it and it auto incremented that value.

   So we don't need to provide the id unless that we know we want a specific id. Most of the time, it's better to let MySQL do it itself. Part of the reason why is that you may just not know what the next id is going to be. But another good reason, is there might be two people submitting to the database at the same time. So even if you go and find out what the next id is, by the time you actually issue the command, someone else might've dropped another subject in there at the same time. So we want to just let MySQL handle it. It'll assign the value for us, and we don't need to worry about it.

   All right let's add a third one. I'll just hit my up arrow. And let's make this position 3. Let's change its name to be small business. And then everything else looks good. I'll hit return. And now you can see that I have 3 in my database. Now so far I've been looking at all of the subjects but I can also use that where clause to say where id equals 2 and now it only gives me back the ones where the id is equal to 2. Or I could say, where the position is equal to 3 and it only gives me back the one where the position is equal to 3.

   Where position equals 3 and visible equals 1 returns that one. Where position 3 and visible equals 0 returns nothing. Cause there are none that have position 3 with visible equal to 0. All right so that's how we can create records and search for them. Let's try and update real quick. Let's do update subjects set position equal to 4 where id equals 3.

   And that tells me query okay. It tells me how many rows were matched and how many were changed. Let's take a look here let's go back till we can look at all the subjects. And you can see that the position for id number 3 changed to be 4. Let's hit the up arrow a couple times and let's change this one let's change it back to 3. And let's also add another change in here which is we're going to make visible equal to 0. Now you don't specifically have to put the single quotes around numbers when you're submitting them, but it is a good practice and we'll talk about why a little later on.

   So for now I'm going ahead and doing it. So I'm setting those values, we select all from subject, and you can see they've changed the position and visible back. Let's try a delete. In order to do that, let's just create a subject that we don't care about. I'll get the up arrow till I find my insert subject, and let's create one here which I'll just call junk. Okay so now we've looked at all our subjects we see we have a new one called junk. And let's do delete from subjects where id equals 4.

   Now it's also not a bad idea when we're doing a delete, to go ahead and add a little line here when we're just deleting one record that says limit 1. That basically just makes sure that we're absolutely only going to get rid of one record. It's a good practice. It's not strictly necessary. It would work fine on its own, but it's a good sort of sanity check just to make sure that you don't delete all the records in your database accidentally. So now I've deleted it and if we look you can see that it's gone. Now if I were to create a new record, it would not be assigned id number 4 it'd be assigned id number 5 because 4 is gone it skips over it.

   It still keeps track of the fact that 4 used to exist. Right, so it's never going to be used again, it goes on to 5. And that's not a problem. The ids do not have to be sequential without any breaks in them. The important thing is just that we have a unique identifier for each one of them.

### 5.6 Relational Database Tables

   So far, we've been able to create our subjects table and to populate it. We also know that we're going to need a pages table as well and our pages table is going to have a relationship to our subjects table. So it's worth taking a moment to talk about how relational database tables work. The idea behind them is simple, but the results are powerful. Imagine that for a subject like about globe bank, it's going to have a set of pages that should be listed underneath that subject. This is what what we would call a one-to-many relationship because we have one subject and then below it, there are many pages.

   Those pages belong to that subject. Why are these types of relationships important? Imagine that when we display a page, we want to show the name of the subject that goes with that page. We could store the subject name in the pages table so we might have a pages table that looks like this. You'll notice that the third column there is subject name and you can see that I've repeated the subject name each and every time that we need it. So when I go to display a page, I could display its subject name. It would work just fine, but consider what happens if we want to make a change to a subject name.

   Now, we need to change the subject name for each and every page that has the same subject. We better not miss one or else our data is no longer going to be in sync and we might end up with bugs. It's much better if the page could just refer to the subject name in one place, then all the pages can get their data from there and if we need to make edits, we can just make edits to the data that's in one location and it'll flow through to all of the pages which rely on it. So how do we do that? Let's imagine that we have our subjects table and we have one of the records there that's about globe bank.

   You can see it has an ID or a primary key of three. And then we also have our pages table. So let's look at one specific page in there which is the history page and you can see that it has an ID of 12. The way that we relate the pages table to the subjects table is by using a foreign key. The foreign key always goes on the child record, the one that belongs to the other one. That's the side that's going to have the foreign key and it's going to contain a value that references rows in the other table. So you can see here that we have a column called subject ID and it has a value of three and that matches up with the primary key over in the subjects table.

   So now, whenever we have a page and we want to know its subject, we can ask MySQL, "Hey MySQL, go look for the subject whose ID "is the same as my subject ID." In this case, three. And it works the other way around as well. If we have a subject and we want to get a list of all of its pages, we can take its primary key being three and say, "Hey MySQL, give me all the pages back "which have a subject ID of three." This is a relational database. In order to make it work, all we have to do is add that extra column, the column that contains the foreign key that relates to the other table and then we can use it as we're constructing our SQL queries.

   There's one other important point about foreign keys which is that foreign keys really ought to have an index on them as well. You can create an index at the same time as you create a table. But honestly, I forget the syntax and I find it easier to just add it after I create the table. You can do it using this, ALTER TABLE and then the table name that you're using, ADD INDEX and then you provide the name of the index that you want to use and then in parenthesis the name of the column that's being indexed. It's perfectly fine for index name and column name to be the same if you want to just name your index the same thing or you can put index_ or something like that in front of it.

   Some people like to put fk_ for foreign key. Indexes go in columns which are used frequently for looking up information. And the two most common columns by far for looking up information are primary keys and foreign keys. Primary keys are automatically given an index so we don't need to worry about them, but foreign keys are not so you'll need to add this on foreign keys and it's a good rule to just have anytime you have a foreign key, put an index on it.

### 5.7 Challenge -> Pages Table

   It's time for another challenge assignment. So far in this chapter, we've been learning how to use MySQL to create tables and to populate them with data. We've been doing that using our Subjects Table. Now, your challenge assignment is to do that same work but with the Pages Table that we're also going to need. Let me walk you though the points you need to make sure you hit. First, start by logging completely out of MySQL, so you can get a fresh start. Log into MySQL. Make sure that you can do that confidently. You want to do that as the root user, and supply a password.

   And then once you're in there, make sure that you're using the correct database. Use the globe_bank database we already created. And then create a table for pages. It's extremely helpful if you construct that table definition in a text editor, and not try and do it from the command line. Do it in a text editor first, where you have the ability to make revisions, to check for bugs, make sure that you've got it all just right, and then copy and paste it into MySQL to actually create the pages. Remember you can also drop the table if you make a mistake, and you need to recreate it again.

   So what should that Pages Table look like? Let's walk though the different columns. I'm not going to give you the MySQL definition for them. Remember you can use MySQL to inspect the Subjects Table and see what column types we used there. So for the pages, we're going to need to have an ID that's the primary key. Remember that's going to also auto increment, because it's the primary key. We're going to have the subject ID, the subject-underscore-ID, and that's going to be the foreign key that relates to the subjects. We just talked about that in the last movie.

   It's very important that we have that. And it's just going to be of type integer. It's going to be a number because it's the same thing as the primary key that's in the Subjects Table. And then we've got the menu name. It's going to be a string. It's also going to have position, which will be an integer. We'll have visible, which will be a boolean, just true or false. But we'll actually store that as being either one or zero. And then we're going to have one new column, that isn't on our Pages Table, which is content. And that's going to be of type text. Not a string type, but text.

   And the MySQL type for it is text, T-E-X-T. And it's going to allow us to put in a lot of text, a lot of content in there, so that we can have a large amount to display to the user. After you do that, then you'll want to add indexes on all foreign keys. That's always a step you should do after you create a table is make sure that you have indexes on all foreign keys. And then you can start adding in the data for the pages. So what data should you put in for the pages? Here's a list of the different ones I'd like you to create. For each one of these, you can see that I've provided the subject name at the beginning.

   So you'll need to find out what subject has that name. You can look in the Subjects Table, use your SQL to do it, to know what subject it is, and then you want to relate the rest of the page information to that subject. Then you can use those menu names, the positions, and the visible. For content, you can just leave it blank for now or you can put in some dummy content. It really doesn't matter. The main thing I want you to do here is create this variety of pages and to associate those pages with the subjects, so that you understand how that relational database works.

   Once you've done all that, then spend some time trying out different CRUD commands that we've learned. Remember that's Create, Read, Update, and Delete. Try all of them. Get used them. Also spend some time trying to find subjects by their primary key. And finding pages by using their primary keys and their foreign keys. There's no harm in using SQL SELECT. You can just use SQL SELECT all day long and just read data back from the database. Try different things and get used to it. This is your opportunity to get familiar with how MySQL and relational databases work.

   In the next movie, I'll show you the solution that I came up with. Good luck.

### 5.8 Solution -> Pages Table

   I hope that you were able to complete the challenge assignment successfully. In this movie, I'm going to show you how I would do it. So if you had any problems, you can just follow along with me. The first thing I'm going to do, is go into my Command line application, that's Command Prompt on Windows, or Terminal on a Mac. And I'm going to use mysql -u root -p to login with my password as the root user. I'm also going to add another option here, which is globe_bank_. Now that I have my database created, I can specify it on the Command line here, and it'll drop me directly into it when I go into mySQL.

   I'll hit Return, it'll ask for my password. Now that I'm logged in I'm already using the Globe Bank database. But if I hadn't specified that, like we did before, I would also just simply need to say, USE globe_bank; and that'll make sure that I'm using the right database. Now, I'm ready to create my pages definition. Now I composed this in a text editor, over to the side, so that I had plenty of time to think about it, make sure I got everything right, and now, I'm just going to paste it in. It's also included in the Exercise Files, if you want to look at it from there, or copy and paste it.

   I'm going to paste that in. You can see it's creating a table pages. You can see it's got an ID column, INT(11) NOT NULL AUTO_INCREMENT. I have a subject_id of INT(11). Menu_name is a VARCHAR field of type 255. Position is an INT field with a size of three. And then we've got visible, which is TINYINT(1), that's going to hold our Boolean; it's going to be zero one. Content is of type TEXT, and my PRIMARY KEY is ID. So, that's all you need to do in order to create it.

   However, we also know that our foreign key needs to have an index on it. So, we want to make sure that we add that index as well. We do that with that alter table command. So ALTER TABLE pages ADD INDEX, and then the name of the index. I've called it fk_subjec_id, fk for foreign key, and then the name of the column we want indexed, subject_id. Now we've got that index added, we've completed the definition for our pages. So now we need to populate our table with data. I gave you a table of the different page information that you ought to enter.

   But it was not done in a relational way. And we want to use a relational database. So for each one of those subjects, we need to first find out what it's ID is. So I need to take a look at my subject's table, and I need to look at all these IDs, and then I need to use that instead of using the name of the subject. So, I want to build those relationships. So, for example, let me paste in the creation of these. This is also in the Exercise Files if you want to grab it from there. Scroll up here and let's take a look at the first one. INSERT INTO pages, subject_id, and I passed in one, cause it's linked to this subject here.

   That's the foreign key that relates this page to About Globe Bank. And that's the Globe Bank page. It's position is one, and it's visibility is one. The History page, also belongs to that same subject. And the Leadership page. But if we scroll down here, you'll see that the Banking page belongs to a different subject. The subject with ID two, and so on. So I populated each and every one of those. Now, I can actually just take a look with SELECT all FROM pages, and take a look at them, and see that I got them right.

   So here you can really see the subject name. You see that foreign key, that then relates to what's in the subject table. So, now that we've got it created, we've got it populated, let's try out some of our Cred methods. Now I'm not going to demonstrate update and delete. I think you can do those on your own. But I am going to show you how to select. Let's do SELECT all FROM pages WHERE ID equals three. You see we get our Leadership page. We also can change that, hit the up arrow, and I'll just go back and change this wild card to just pick out the different columns that we want.

   Instead of getting all columns now I just get back the ID and the subject ID. Notice that subject ID, it's one. So that is a foreign key. Now we can use mySQL to go find out more information about it. SELECT all FROM subjecs WHERE ID equals one. That's the subject that's related to it. We can do the same thing in reverse. Let's imagine we have a different subject. Let's find subjects where ID equals two. That's our Consumer subject. So, what are the pages that belong to the Consumer subject? SELECT all FROM pages WHERE subject_id, that's the foreign key, is equal to the ID of this one.

   Right up here, that's a two. And there's the different pages that belong to the Consumer subject. We can also play around with this a bit more. For example, we could say select all pages where subject ID is two, and visible is equal to one. So we're only seeing the visible pages. They happen to all be set to visible right now. But you can play around. You can try and make some of those not visible. And then we would see only visible pages, or we could see all pages. You can get a feel for how it works. Hopefully you were able to get the same results.

   If not, remember you can always drop your pages table and start from scratch to get it right.

## 6. Use PHP to Access MySQL

### 6.1 Database APIs in PHP

   In this chapter, we will learn how to use PHP to issue database commands. PHP offers three different ways to connect to the MySQL database API is the technical term for each of these connection options. API stands for Application Prgramming Interface. And an API is just a set of functions which define the way we use the software. Let's review these three APIs, so we can decide which one to use. The first is MySQL. This is just the original MySQL API, the most basic way that we can connect to MySQL.

   The second is MySQLi. The "I" stands for improved, so, as you can guess, it came along after the first one. And then the third one is PDO, which is an abbreviation for PHP Data Objects. All three of these are extremely similar, and once you learn how to use one, you can easily switch to another. The differences are a lot like the difference between driving different kinds of cars, like a Honda or a Toyota. The controls for the windshield wipers and the headlights may be in different places, but the overall concepts are the same, and with just a few minutes, you can make the switch.

   But there are a few key differences that are worth discussing. Here's a chart to outline the major differences between all three of those APIs. Notice in these first two lines that MySQL was introduced way back in version two of PHP. That was a long time ago. Notice also, though, that it was removed recently, and that's in version seven, so it's no longer included with PHP. MySQLi and PDO were introduced a little later on, but you can see that they are still active and included with PHP, so you could use either one of those.

   Notice the two lines related to database support. You'll see that MySQLi, as well as the older MySQL are preconfigured for MySQL, and you can kind of guess that just from the name, right? That they're made for MySQL. PDO is not preconfigured for MySQL, and that's because it supports a variety of other databases. So, if you want to use something besides MySQL, or maybe you're not sure, maybe you want to switch in the future, then PDO might be the right answer for you. Notice that MySQL and MySQLi have a procedural interface, whereas MySQLi and PDO have an object-oriented interface.

   Procedural interface basically means not object-oriented. So, if you're not familiar with object-oriented programming yet, then you're going to want to stick with that procedural interface. But, if you're more comfortable with object-oriented programming, then you may want to move right to that. We'll come back to that point in just a moment. And then, last of all, notice that MySQLi and PDO have support for prepared statements Prepared statements are an important security feature we'll talk about later on. So, we're going to be using MySQLi, and that's because of the particular combination that's there. It's included with PHP, it's preconfigured, we have a precedural database, and that allows students who don't have an object-oriented experience to go ahead and get started without it.

   And then we'll have advantage of those prepared statements later on, too. I don't want to complicate things by diving into teaching you object-oriented programming at this point, if you don't know it. But, at the same time, it's going to be very easy for you to move from the procedural version to the object oriented version later. Let me demonstrate. Here's a side-by-side comparison of some of the basic functions that you might perform with the MySQLi API, and the first one on the left is the MySQLi procedural version, and the second is the MySQLi object-oriented version.

   The API supports both. You can see that in the procedural version, we just have functions, and we just call those functions whenever we want to do something. So, we want to connect to the database, you call MySQLi underscore connect. Now in the object-oriented version, we're creating an object, and then we're calling functions on that object. So, you can see in the first line, I'm creating a new MySQL object. That is the same thing as essentially connecting, and now I have that connection as an object, and I can ask that object to do things for me, such as perform a query.

   So you can see, there's almost a one-to-one relationship between the functions in the procedural version and the object-oriented version. If you want to find out more about the different APIs or get additional help in choosing the right one for you, there is a page in the PHP manual that can help you.

### 6.2 Connect to MySQL With PHP

   In this movie, we'll learn how to use PHP's MySQLi API to connect to our database. There're five fundamental steps to getting PHP to interact with the database. The first is that we need to create a database connection. That's essentially like logging in to MySQL. Once we're logged in, then we can perform a database query. We can use the results of that query to create whatever part of our page we need to output the results, or maybe just to do calculations inside PHP. But once we done working with the data, we can release the returned data and finally close the database connection or log out.

   Now, steps one and five should only happen once for each PHP script. You log in at the beginning, you perform your queries, and at the very end, you log out. But you may repeat steps two through four many times in a PHP script. You would make a query on one table, get back the data, maybe you build part of your page, then you turn right around and you make another query to the database. Maybe to a different table, and you use that data to construct another part of your page. So, two, three, and four get repeated, but steps one and five should only happen once per PHP page.

   We'll be looking at all five of these steps throughout this chapter, but in this movie, we're going to focus just on steps one and five. To open and close a connection to the database, we'll need two functions from the MySQLi API. mysli_connect, and mysqli_close. mysqli_connect takes several arguments. You can see the first is host. That's going to be the location of the server that we want to connect to. For us in development that's going to be localhost, but if we're being hosted on a remote server, this would be the IP address of that machine.

   Next you would provide the username and the password that you need to log in to MySQL. And then, the database that we want to use. And that's very similar to what we were doing from the commandline. We were already on localhost, so when we wanted to log into MySQL, we provided the username and the password, and then we specified which database we wanted to use. mysqli_connect returns a connection handle as a result. And as you'll see, we want to assign that handle to a variable and keep track of it so that we can use it to make our queries across this open connection. And then mysqli_close takes one argument which is that connection handle.

   We essentially say close this connection that we opened earlier. Open MySQLi connections are automatically closed when the PHP script finishes its execution. You don't have to explicitly close open connections. However, it is recommended because closing them will return resources back to PHP and MySQL, and that can improve overall site performance. So, you don't have to close your open connection explicitly, but it is a best practice. So, we're going to add these MySQL connections to our globe_bank project, but I also want to add them in another place here, which is just a guide file.

   I want this to be a step-by-step walkthrough of the five points that you can use for reference on any project that you might do in the future. It's going to be a simplified version of what we're going to do in our project. So, I've got this file on my desktop. It's also included in the exercise files. I'm just going to double-click it. It opens up in the Atom text editor. Atom does this kind of weird thing where it looks like it belongs to my globe_bank project, even though it's actually sitting on my desktop. Don't let that confuse you. Notice in here that I've got those five steps outlined. Step one and step five are the ones we're working on now, and I've gone ahead and given you the basic code for those.

   Just like we were looking at. You can see that I'm catching the results of mysqli_connect in a variable called connection. And then when we go to close it, we close that connection. We're going to need to also specify the host, the user, the password, and the name. So, I'm going to put those here as well. It's going to be localhost. The user, we had webuser, was the one I created. And the password I created was secretpassword. You might've used something different. And the database name for our example here is globe_bank. Alright, so I'm just going to save that file and we're going to keep building up this file as we go along.

   Just as an example, so you have all five steps in a nice linear fashion. But I also want to add this into our project. So, let's close that file and let's now go into our project and in the private directory, I'm going to create two new files. The first is going to be called db_credentials.php. And the second that I'm going to create is going to be called database.php. The idea here is that database.php is going to be the place where we store all of our functions related to the database.

   So, let's put right here at the top of it, it's going to require db_credentials. So, if we load the database file, we'll automatically get the credentials at the same time. And let's make that a require_once. So, that'll load up this file for us. In the db_credentials file, let's just put in the definition for some constants that are going to be our database credentials. So, I'm going to use define and DB_SERVER will be the first constant.

   And that's just localhost, in this case. And then I'm going to copy that, paste four of them. And this one is going to be DB_USER. This one will be DB_PASS. And this one we'll make DB_NAME. So, our user, we know, is going to be webuser. Password for me was secretpassword. And DB_NAME, globe_bank. Okay, so that's going to set constants that we can then use over here in our database file. What I want to put in here is a function called db_connect.

   And db_connect is going to take care of all the business of getting us connected to the database. Eventually, it's going to house a lot more than what I'm putting now, but to start with, we know the initial part. We're going to create a new connection by calling mysqli_connect and then we're going to pass in those different constants. SERVER, DB_USER, DB_PASS, and DB_NAME. So, that's going to create a connection. And a function of course needs to also return a value, so it's going to return back connection.

   So, now if I call db_connect, it'll look for those constants, it'll create a connection for me, and I'll have it ready to use. Let's create another one here called function db_disconnect. And we know that it's going to do mysqli and it's going to close, and it's going to close the database connection. But, it doesn't have access to this variable, this variable's not in scope. So, we need to pass it in as well. So, tell it which one to close, we'll pass it in and it will close it. It's also a good practice to just check and see if that value is set.

   So, if the connection is set, then let's close it. We don't want to call close if it somehow never got set. Okay, so now I have two functions that'll take care of this business of connecting and disconnecting. But our application is still not actually making a connection. It's a function that would make a connection when it's called. So, where do we call that function from? It's up to you where you do it. But, here's my idea. I want to go into initialize.php and I want to tell this page that it should require_once the database file.

   So, now it'll load up database for us. We'll have those functions available. And then I'm going to define a variable here called db, we're just going to call db_connect. See what that does? It means that any time any page loads initialize.php, it's going to load in all those database functions and initiate the first connection to the database. And then, I have this variable db available to me that I can use to work with. And so db is going to be the thing I use to connect and to make queries on from then on. You can do it differently if you want.

   You can do this page-by-page. You can have pages that do connect and pages that don't connect. I'm just going to go ahead and create my connection right at the beginning. So, every page will immediately log into the server. Okay, so that takes care of logging in, what about logging out? We know it's a best practice to always log out at the end. So, what I'm going to do is I'm going to go to the staff_footer. And right here at the very bottom, I'm going to put in some PHP code. And it's going to call our custom db_disconnect function.

   And we know that it needs to pass in db as well. So, it passes in that db variable, that'll disconnect for us at the end. Now, you could put it other places. You could have some kind of shared code that would do this. I'm just going to put it in the footer so that it happens at the end of the page. The page is done, I'm done rendering everything, now let's disconnect. So, even though we don't do anything by querying the database, let's try it out, just to make sure that we didn't blow anything up in the process. Let's save all of that. Let's come back over here to Firefox. I'll click on the menu. And there it goes. It essentially created a database connection, it rendered the page without ever querying the database, and then at the end, it closed the database connection for me.

   Now, in the next movie, let's talk about how we actually query the database.

### 6.3 Retrieve Data

   Now that we know how to connect to the database, in this movie, we will learn to retrieve data using the MySQLI API. In the last movie, we talked about the five essential steps for PHP database interaction, and in the last movie we learned about number one and number five, creating the connection and closing it when we're done. In this movie, we're going to learn about number two and number four, performing a database query, getting back results, and then releasing those results when we're done with them. To query the database, we'll use another MySQLI API function, MySQLI query, it has a companion function which is MySQLI free result.

   MySQLI query is going to accept the first argument which is the database connection, that's the handle that we created in the last movie, that's how we refer to that open connection. We let it know what connection we want to use to connect to the database. And the second argument then is the query itself. This is the actual SQL code, the kind of thing that we were typing directly into MySQL before. So it might be a select statement, a create statement, update, delete, or something else. Any MySQL query can go in there. It's just a simple string.

   Now if we're doing a select query, then MySQLI query is going to return back a result set. We'll talk more about result sets in the next movie when we learn to work with them, but just know for now that if we're getting back data using select, we get back a result set. If we're using create, update, delete, or some other MySQL command then it's going to simply return true or false back to us as a result. So when we get back a result set that has lots of data in it, we can use that data. When we're done using it, then we want to call MySQL free result on that.

   It basically is a way of saying hey, PHP and MySQL, I'm done using the data that's in this big chunk of memory here, so if anyone needs to use this chunk of memory, you can feel free to go ahead and give it to them. Now the truth is it's not strictly necessary most of the time. For example, if you're finding four subjects from the database, then you're not using up a lot of memory and it's not a big deal if you forget to free it up. But if you're retrieving a thousand customers from the database, then it starts to be a big deal, or if you have hundreds of users who are all coming to your production server and they're all asking for a thousand records from the database every few seconds, well then the memory management starts to be a very big deal.

   It could have major impacts on the memory requirements for your website, as well as the overall performance. So it's a good habit to be in to always free up this result when you're done. Most of the time is a truth, the sky isn't going to fall if you forget. When you finally close the database connection and the PHP script exits, that memory will be freed up anyway. As we did in the last movie, I want to add this kind of code to our globe bank project but I also want to add it to our connection guide which is going to give you a single linear guide of how we go about creating these connections.

   So you can see here, I'm performing the database query in this step here, step two, you can see that I'm calling select all from subjects just a very simple SQL statement, it's just a string, I'm assigning it to the variable query, and then you can see that I'm taking the database connection we created before and that query and passing them into MySQLI query, and it gives me back a result set. We're going to work with that result set in step three. After we're done working with it though, we want to call MySQL free result to free up the memory that's associated with that result set, basically telling PHP hey, I'm done with this, feel free to use the memory for something else.

   Okay, so now that we've got it in our connection guide, let's actually use it inside our project. In the last movie, we added a line to initialize dot PHP down here that will make the database connection for us and assign it to this local variable DB, so we're going to have that available as our handle that we can use. So the place that I want to add this is going to be into subjectsindex.php, what we want to do is get this list of subjects up here. Right now we have a placeholder for it. Let's get it from the database instead. So let's start that process. Let's drop down here and let's first begin by just creating the SQL that we need.

   So dollar sign SQL, what SQL do we need to generate this exact same thing? Well let's do select all from subjects and we could just stop there, but I'm actually going to put a space and a semicolon, and I'm going to keep the line going, I'm going to concatenate together, this is a very common way of building up SQL over several lines, and I'm just going to add order by position ascending, and that's going to tell us to sort my subjects by their position ascending. It's not just binding them, it's also ordering them as well. Notice that I've got this space here.

   That's super, super important. If I took out the space, then when this gets concatenated together, this S and the O won't have a space between them. So when you break it on separate lines like that, just make sure you have that ending space so that the concatenated string will be correct. And then let's put a semicolon at the end of that line, now that I've got my SQL together, let's get back a subject set, and I'll call MySQLI query, and let's pass in DB, and let's pass in our SQL. That will return back the subject set that we can work with.

   Now we're going to have to go through that set to get this data out of here. We now have a subject set that we can work with. And then at the bottom of the page, when we're done with all of this code, we've gone through and we're finished looking at each of the different subjects, we're completely done with it, let's put it right here after this table, let's add PHP that says MySQLI free result. And what do we want to free up, we want to free up that subject set. That's where we stored the result, tell it to free it up, we no longer need it anymore.

   Now before we go and try this out, I just want to think about for a moment that this subjects finding that we're doing, finding all the subjects by their position, that's probably something that we're going to do pretty frequently, at a minimum we're going to do it in the staff area and also from the public area, but it's the kind of think I can see myself doing pretty often, finding a list of all subjects sorted by their position. So I'm actually going to copy that code and I'm going to come into private, and I'm going to create a new file here, which I'm going to call query functions.php, and let's open up some PHP tags.

   I'm going to put this code that we just created inside a new function called find all subjects. And now all I have to do is call this function and it's going to take care of handing me back this set. I'm going to paste that code in there, it's going to find all the subjects and then we'll get the subject set and then let's call return, I'm actually going to change the name of this just be result, and let's return the result back. See how that works? Now DB is not being passed in, right? DB is not in scope, right, this does not have a global scope to it, so what we need to do is make sure that we call global dollar sign DB on it so that we have access to it.

   So we're bringing it in from the outside scope into our function so it has access to it. We're going to need to do that for any function we do like this, anything that's calling MySQL query that needs the database, we'll need to make sure we either pass it in as an argument or we call global in order to have access to it. So now that I have it defined, let's also just drop back over to initialize and make sure that our query function is available, copy this line, require once, query functions. Now we'll have it loaded and then let's come back over to index.php and let's actually use it.

   Subject set is not going to be all this anymore, it'll just be find all subjects. There we go. So I'll tell it to find all subjects and it'll go to that function and do all of that work for me and return me back a subject set that I can then work with. Now of course we're not working with it yet so we're just going to find them, the rest of the page will render as it did before, and then we'll dispose of that at the end. Let's try it just to make sure we didn't blow anything up in the process though. Let's come back over here to Firefox, let's go to our subjects page, and there we go.

   Again, the data that we're seeing here on the page is actually coming from this hard-coded array here, subjects, it's still not coming from our subject set. So in the next movie, let's see how we can do that.

### 6.4 Work With Retrieved Data

   We've learned how to use PHP to connect the MySQL database and how to query the database to get back a result set. In this movie, we're going to learn the options we have for working with those result sets. There are three things were going to look at; We're going to look at mysqli_fetch_row, mysqli_fetch_assoc, short for association. And mysqli_fetch_array. Mysqli_fetch_row is going to return the results back from a results set as standard arrays. So for example, if we had a subjects result set that we pulled back from the database, use mysqli_fetch_row to get the first row of data from that.

   It would return back a standard array that looks something like this. The first item is '1'. That's the ID. The second one is the menu name, and then the third one would be the position. And the fourth one would be visible. In order to access these values, because it's a standard array, we would just use integers. That's how the keys are indexing it. SO if we wanted to take a subject and we wanted to ask for it's menu name, you'd ask for the item at index position one. And that would return 'About Globe Bank'. Now you can see why that's not ideal, because it's easy to forget what value corresponds to what index position in the array that you're getting back.

   So I think a much better way to work with it is as an associative array. And that's what the assoc version does. It returns the results back as an associative array, so then you get an array that looks something like this. You can see that we have labels for each one of the values. So we have 'id', '1', 'menu name', "About Globe Bank', 'position', '1', 'visible', '1'. Now for example, it's much clearer than it was in the last version, which on of those final two items is position and which one is visible? I couldn't really tell before. Now when we want to access those values, we can use the column names as the keys.

   That can be much easier to work with, so now when I ask for a subject, I ask for it's menu name, and it gives me back the value that corresponds. It is ever so slightly slower than fetch_row. But you'll never notice the difference. The reason why is because it has to make one additional query to the database, in order to get back those column names, to build the association. So it does take just a moment more while it does a quick SQL query, but it's worth it to make the data much easier to work with. And then there's a third option; mysqli_fetch_array.

   And what it does is it returns both types of arrays. Or either one. The reason why is because you can configure it. By default it returns both, but you can also pass on a constant that'll tell it that you just want the rows, simple arrays, or that you want back the associative arrays instead. Personally, I don't find mysqli_fetch_array to be beneficial at all. I think it's much better to just pick the one that you want and just stick with it all the time. And for me, that's the associate array, because we have that well labeled data, that's much easier to work with. Let's see an example of how we can do that.

   So we've already seen how we could find the result set on the last movie. We created a custom function called find_all_subjects that would do that. We can take that result set and we can call mysqli_num_rows on it, that's a handy function that will return the number of rows in the result set. So if we had 20 subjects, it will return back 20. Here I'm assigning that value over to the variable count. Once I know how many rows there are, I could write a for loop through them. So you can see that I initialize for loop with i equal to zero, then while i is less than the count, we're going to keep going, we're going to increment it each time, and every time through the loop, we're going to call mysqli_fetch_assoc on that result set.

   We're going to grab another row, and assign it to the variable subject, and then we can work with it, We can work with that rows data. Here I'm just echoing it back. Now mysqli_fetch_assoc automatically advances the pointer that's inside that result set. So the next time you call it, it knows that it needs to fetch the next row, not the row that it just returned. So every time you call it, it also advances to the next row. We can use that automatic advancing feature to greatly simplify this loop.

   Let me show you. Instead of having to go and find out the number of rows, and write a for loop that will loop through that number of times, we can use a while loop instead. We're using a while loop, and then inside the parenthesis for that while loop, that's a test condition, right? While this is true, it's also doing an assignment at the same time. That equal sign there is not a test assignment, it's an equals assignment, or saying go get another row of the database, and assign it to my variable subject. And as long as you return true, as long as you're getting a result back, keep doing the loop.

   So, essentially that while loop says while you're still able to grab a new row, do this loop. You can see that it's much shorter, and much simpler than the last version. This is the most common way to loop the result set, and it's the one that we're going to be using. So let's begin by going into our connection guide, and just making a note for ourselves on how that's going to work. So you see that it's right here under number three. We're just doing that while loop. While a subject is found, output the name. And I've also got it outputting br tag at the end just so that the next one will be on another line.

   SO that's it, that's the simple version which is basically say take this result set and grab each one. As you do assign it a subject, and as long as you're still getting results, keep looping. Save it, close that up. And now let's actually do that inside our project. Let's go to our subjects index.php page. We already found all our subjects. Now we could take all those values and populate this array right here. But instead what I'm going to do is I'm going to remove this array completely. Now we're just finding our subject at the top, now let's scroll down here where we loop through, and before we had a foreach subject.

   But instead we know it's going to be while. We're going to change the format of this to be while subject equals mysqli_fetch_assoc from subject_set that's what we called it up here, remember? Subject_set So while it's still able to fetch a result from the subject_set, go through each one and look at this. We already were using these labels, we already had an indexed array, so it's able to find them. We have the ID, we have the position, we have visible, we have menu name.

   It's able to find those exactly like it ought to. And then our loop ends down here. Let's try it out. Let's save it, let's reload the page. Look at that. Now you can see that it changed because we went from having four items to three items. Your visible may have changed, mine has a false here. Maybe you had some other data. But now we're getting database driven data. We completed all the steps. We logged in the database. We executed our query, we're using those results to output this list by looping through them using while. And then at the very end, we do good behavior, and we free up our result, and then down in the footer, we actually close our database.

### 6.5 Error Handling

   Over the last several movies, we've learned how to connect to a database, how to make a query for data, and then how to use that data in our website. Now, I want to talk about what to do when something goes wrong in that process and how can we handle it when it does. There are two more functions that we're going to to use from the MySQLi API for this. The first is mysqli_connect_errno, that's short for error number, E-R-R-N-O, short for error number. And then mysqli_connect_error. Errorno is going to return the error code from the last call that we made to connect to the database.

   So, whatever that was, whatever the last call to connect to the database was, we're going to be able to retrieve the error code that was there. If there is no error code, then it'll come back and return nothing. There's nothing there. The mysqli_connect_error function is going to return a string description of that last connect error. So it does the exact same thing, it looks to see what the error was, but it also does one additional thing, which is that it goes and looks up a string associated with it. So errorno is slightly faster because it just goes and finds the number.

   The second one takes that number and then matches it up with some kind of a string that will tell you what went wrong. We're going to add both of these to our project. So if you want to see it fail and see what might happen, one easy way to do that is just go into your database credentials and just add something at the end here to make the password or the user name wrong. I just added a $ at the end; let's save it. I'll go back to Firefox and let's just reload this page. Wow, look at that, all sorts of errors. I get a mysqli_connect error, Access denied for the user. I had a password but it came back it didn't work.

   And then down here you can see I also got an error then in mysqli_query function because it was expecting to have a handler that it could use, a handle for the connection, but instead it was boolean, probably false is what I got back. And then same thing, another error down here on fetch association and so on. You see this page is awful. This is definitely not something we'd want to show to our users, and we wouldn't even want to let them see this page at all. You don't want to have a broken page of any sort. So, how can we handle this better? Let's leave it broken and then find out how to fix it. I'm going to start out by actually going back to this guide that we've been creating, connection guide.

   And in this guide, I'll just show you what code I've added. So after we've got the connection, the next thing we do is just use an if statement with that mysqli_connect_errorno. So if there is an error number, do this code. I use errorno here just because it is slightly faster than using mysql_connect_error, which I also use when constructing the message. So, "Database connection failed:" and then whatever that string is. And then I went ahead and for good measure, just went ahead and put that error number, inside parenthesis after it. So I'm just building that up into this string for message, and then I'm calling exit with that message.

   And that's it. It'll just stop php cold at that point; it isn't able to make a connection. So, we want to add the same thing to our project. I'm actually going to go into database.php and I'm going to create a new function that we can use here. I'm going to call it confirm_db_connect. This'll be a custom function. And let's go back over to that guide, just going to copy all of those lines, and let's just paste them in. There we are. So, it's just going to check and see, it's going to check the most recent connection.

   We don't tell it which connection 'cause we didn't actually make one, so there is nothing to pass in. It's just going to check to see what was the most recent connection, was there an error, and, if so, display this error message and exit. So, confirm_db_connect could be something that we could put right here in our connection. Right after we connect, let's just call confirm_db_connect. So anytime we make a connection, it should handle it for us. Let's go back over to Firefox and let's try reloading our page. Look at that. Now, I still got an error mysql_connect failed, but this is a warning.

   We probably would remove this in production. You can see here I got, Database connection failed: Access denied for, this user, so it tells me what was the error, here's the error. That tells me exactly what the problem was and then you can see the error number that came back was right there. That's usually not meaningful to you, but sometimes you can Google for that to find out a little more details about what exactly went wrong if you run into a problem. So that handles the possibility that we weren't able to connect to the database at all. So let's go back to our credentials and let's just fix our credentials and then our page should load again.

   Now, what about the possibility when we make our database query. What if we submit our SQL and we have a problem getting back data? We also want to have some error checking for that. Let's go back to our connection guide here, and you'll see that I've added a bit of code, right here. After step two, performing the database query, I'm just going to check and see if there is a result set. So, if we got back a result set, then this won't run, but if we didn't, if we got back false for some reason, then this will run. It'll come up and say database query failed and it'll just exit.

   That's all it does. It just says, oops, there was a problem, you got back false. Now, obviously we only want to use this on a result set because we might get false back for other reasons. But if we're trying to get back a set of data using select, then we would expect there to be a set. So let's just save this. Let's go back over to our code here into database.php and let's add another function. I'm going to call this one confirm_result_set and guess what it's going to do, it's going to do that exact same code to check and see whether we got anything back.

   You could also just retype this, it's not a lot of code. We'll come in here; there, if not result_set, and of course we need to pass in result_set as an argument. Save that. Now we can put our confirm_result_set inside query functions right after we do our query. It will take the query, it gets back a result, confirm_result_set of the result, and now, we'll get our error message instead. So let's try it, let's remove this space from right here. Remember I told you before that would not work.

   Let's try that and see what kind of error we get. Let's come back to our page, reload the page: Database query failed; our SQL was no good. It's also worth noting, that if you ever want to check your SQL, one great technique for being able to troubleshoot it is just to put it in a line here that will echo it. Just echo back the SQL to the page and then you'll see what this string looks like before you execute it. Let's just come back over here, let's reload our page, and there it is: SELECT * FROM subjects... Oh, I see my problem. I'm missing that space right there; I can see that I have malformed SQL.

   I add back in my space, I can take out my troubleshooting code, just comment it out, come back over, reload the page, and now everything works correctly. So that'll handle the two most common types of errors. One is that you're not able to connect to the database for some reason. The second is that you're able to connect, but there's something wrong with the query that you made.

### 6.6 Challenge: List Pages

   It's time for another challenge assignment. Your challenge this time is to take what we've learned in this chapter so that you're able to connect to the database, retrieve records from the pages table, and then use that data to make a list of the key page attributes using PHP. Let's go over the points you want to make sure that you hit. The first is that you want to use the database connection that we've already set up, and you will remember, we assigned it to a variable in initialize dot PHP. Review that code, make sure that you understand it and that you know how to use it.

   Once you have that, you'll be able to query the pages table for all records sorted by their position so that we can generate a list of the pages. And what's the right place for a list? Well, that's going to be in our pages directory inside index dot PHP. You'll remember that we had some placeholder code in there to begin with. You can go ahead and remove that placeholder pages array because we're not going to need it anymore. Once you've got your query together, you can go ahead and package it up into a reusable function and put it inside the private directory in query underscore functions dot PHP.

   Give it a name like find all pages, and then whenever we call find all pages, it'll perform your query and retrieve a result set. Then, you'll want to loop through that result set. Remember, we do that using a special kind of loop, and then when you're done using the data, free the result set so that MySQL and PHP can have that memory back. Next, you'll want to confirm that the database connection is being closed, and finally, make sure that you handle errors on the connection and the query appropriately. It's a good idea to go ahead and break those, put in some bad information for the connection, or put in a bad query so that you can see what happens and make sure that you're handling it well.

   Now, if you get stuck, you can either use the database connection guide that we created, or you can refer to the work that we did on subjects, but try not to copy and paste it. You will learn the material better if you take the time to type it out. In the next movie, I'll show you the solution that I came up with.

### 6.7 Solution: List Pages

   Hopefully you were able to complete the challenge assignment on your own. If not, in this movie, I'm going to show you the solution that I came up with; and you can follow along with me. The first thing we know we need to do is we need to make a connection to the database. We had already created much of this functionality already in the chapter, and we're just going to reuse it; but it's good to review it to make sure that you understand it. The key part is here, what we're calling mysqli_connect, and we're passing in our credentials. Those are constants that we're getting out of the DB credentials file, and then I'm getting back from that connection a connection.

   So if the connection succeeded, I'll have a connection handle that I can use to work with; and then I'll return that down here in this line. I've also still got this error checking code in here, so it's going to confirm that there wasn't an error. So if, for some reason, something went wrong with the connection, it'll just handle the error appropriately inside that function. If not, it returns back that database handle that we can work with. So in order to trigger all this functionality, we need to call the DB connect function; and, if you remember, I was already doing that at the bottom of initialize.php.

   So any file that loads initialize.php will automatically have a connection to the database that's live and ready to make queries on. Remember, I also called that and assigned that handle to this variable DB. Throughout the rest of my application, it's DB that I'm going to be using in order to reference that. Not connection; the variable's not called connection. That was only inside the function. Here it's going to be called DB. Then I went over to my query_functions.php, and I wrote a new function called find_all_pages. It needs to bring in that DB variable from the global scope into the function scope so that we can make use of it; otherwise, the function wouldn't be able to see it.

   I then constructed the SQL here. I broke it into two parts, select all from pages, space, and then on a new line, order by position ascending, A-S-C. Once I have that SQL assembled in the string SQL, I use that database handle and SQL; and I pass it in to the mysql_query. I get back a result set, or at least I hope I do. I've got confirm result set to make sure. So I pass in the result set. If it's not a result set for some reason and I didn't get back anything, then I'll handle that error; but, if I did, then it's going to return the result back to whatever called this function.

   The place I want to call find all pages, at least for right now, is inside the pages directory on index.php. Up here at the top, I replaced the placeholder that we had for hard-coded pages, and instead now I'm querying the database to find all the pages and set it equal to page set. Scroll down a bit and you'll see where I used to have a loop that would loop through using four each. I've replaced it instead with this wild loop. So what it's going to do is it's going to go to my page set, it's going to fetch each row out of that page set, make an associative array out of it, and assign it to the variable page; and then, for the rest of my loop, I'll be able to use page as my variable that I reference.

   And because it's an associative array, I can find its values by using the label. Then once I'm done going through that loop and I'm done with page set, it's a good practice to go ahead and free up that result. So I tell my SQL in PHP that I'm done with it. You can have your memory back; and then finally at the end in the (mumbles) footer, you'll remember we called DB disconnect. Pass it in that variable for DB, and it closes our connection. Again, those last two steps aren't strictly necessary; but they are a good practice. You may have noticed that I also added another line in here.

   I added in a line for subject ID. Let's go over and take a look at all this so you'll see what I'm doing there. Let's go to our main menu; I'm going to click pages. Here you see I got a dynamic list of pages. Those are coming out of the database, and you'll see also that I've added a column for subject ID. So I'm displaying the subject ID that matches for each one of those. That wasn't a part of our placeholder before. That's something new that I've added. It also wasn't part of the assignment, so you might want to just take a moment and just add that line in there so that you could see it. What I want you to see, though, is I'm sorting by position; but the thing is my positions really are based on what the subject ID is, right? I have position one, two, and three under a particular subject.

   Here I have several ones all together, several twos all together, and so on; and they're really not in the order that I would want. So I'm going to go back and just make a little change here. I'm going to go into my query function, and instead of just order by position ascending, I'm going to do order by subject ID ascending, comma, position ascending; and that's going to sort by the subject ID first and then by the position. Let's save that file, come back over, and let's reorder it; and now you can see that we're getting them actually in the order that we want.

   They're grouped by their subject. All the subject ID ones are together, and they're position one, two, three, four. All the subject ID twos are together, and they have position one, two, three, and so on. Hopefully, you were able to complete this challenge assignment and you got results that are similar to mine. If not, take a few minutes to review and make sure that you understand these fundamental database concepts before we move on to the next chapter.

## 7. CRUD with PHP 

### 7.1 Find a Single Record

   In the previous chapter, we learned to use php to retrieve data from the database. In this chapter, we're going to learn how to use those skills to perform each part of the database CRUD. Remember that's create, read, update, and delete. And we'll begin by learning to find a single record. So far, we've querying the database for a list of subjects. But now, we want to find only a single subject or single record from the database. The process is similar but there are few key differences. It's still going to use an SQL select query just like we did when finding the list of subjects.

   But it's not the same as getting back that full list because we want to limit the results to only a single subject. We find that subject by using a WHERE clause with our SELECT and then using the primary key, to find the record that we want. Remember, the primary key is the unique identifier for each record. In our case, the primary key is ID and it's pretty standard. So we would need the php page to know which subject ID to find. And then, we'd be able to construct the WHERE clause that would find only subjects which match that ID. MySQL query will still return that results set to us even though that result set is only going to contain a single record.

   We still need to use MySQL fetch assoc to extract the row from the result set and turn it into an associative array. But because there's only one row, there will be no need to have a loop to go through them like we did before. We can just call that function one time, extract the single row, turn into an associative array, and be done. Here I am on my subject's list page and you can see that I already have a link for view here. So I'm going from my list to a view of a specific subject. In other words, I'm going to view the information of this one and only subject.

   I'm reading back a single record. And you can see when I click on that view link, that I actually include the ID up here of the record that I want. That's step one. We need to make sure we send the ID so we know which record we should be getting details about. Then, I need to read back that value and can see I'm already doing that here as well because I'm just displaying that the ID was two. If we go over to our code and take a look at that. For the show page, you can see I'm reading that value from the GET super global. And then down here, I'm just echoing on the page. Now, what we want to do is take that same ID and use it to construct SQL so we can find the subject record and display results that come from the database.

   So let's do that. Let's come right here and make ourselves some space and let's start by writing that SQL. What is that SQL going to look like? It's going to be SELECT all from subjects and I'm going to put a space and a semi-colon and I'm going to jump down to a new line and just break my SQL up like this. And that space important because we don't want it to run together with my next line here which is going to be a WHERE clause, WHERE ID equals. And then, where do we want it to equal to? We want it to be equal to dollar sign ID.

   Now, before we go on and actually call MySQLi query on this, I want to make a couple of points. The first is, that it's a best practice to always put single quotes around these values. So that means that I have to actually open my quotes here and build a string that's going to have single quotes around ID. It's not strictly necessary for SQL but it does prevent a security problem. We'll talk about that a little later on, we talk about SQL injection. But for now, just to know, you always want to put quotes around this even though SQL doesn't strictly require it.

   The other point I want to make is that when we were doing SQL from the command line, we were frequently ending our commands with a semi-colon. It's fine if you want to put a semi-colon here, it doesn't hurt anything, but it's not required. It will automatically add the semi-colon when we call MySQLi query. So it's pretty standard to just leave it off in this case. When you're in your command line, you will type the semi-colon to let it know that you're done typing. But here, you don't need to. And then, let's call result equals MySQLi query.

   We know that we want to call that db object, our handle on our database, and pass it in the SQL that we've constructed, and we'll get back a result set. We also know that we can use confirm result set to make sure that everything went okay. That's exactly like we were doing before. We're doing our error checking. Now that we have our result set and we confirm that that works, now we're ready to get our subjects. So, subject equals MySQLi fetch assoc and we'll use our result.

   And then we have a subject object that we can use. Now, remember, after we use the subject, we also want to free up this result set. When we're done using it, we free it up. Before, when we did a loop, we freed that result set after that we went to the loop all those times because we were still in the process of using it. But we weren't actually done with this result set now. We can go ahead and free up that memory that was require by that because we've assigned it to this variable. We have an array now based on that data. We don't need the result set. So we can go ahead and call MySQLi free result on the result.

   And then, we'll have subject ready to use down here. So, let's come down here and instead of looking for the ID, and just displaying that, let's actually display all of the different attributes of a subject. Now, we have this full rich array of data that we've pulled back. I'm going to paste in some code for this. This is included in the exercise files if you want to get it from there. It's also worth while exercise to try and type it yourself. These are all skills you should have by now. You can see I've just got an h1 at the top that says what the subject is. That is, I'm using echo.

   I'm escaping that value for HTML using H. And I'm calling subject and I'm asking for its menu name. And then, I've got a div here with class attributes. I'm using some dl, dt, and dd tags just to keep things organized. And I'm listing off the menu name again here. The position and visible down here. Okay, now that we've got all that, let's go back and try it out. Let's save this page. Let's go back over here and let's reload it. And look at that, consumer, two, true. Let's click back to list. Let's try small business. Small business, position three, visible false.

   So we're now able to find the single record. Make sure that you understand the differences between what we did here and what we did on the index page. Here, we're just finding a single subject because we're specifying the ID and we are able to fetch the association one time, not inside the loop and free the result immediately. Now, I also like to package these things up into functions. For example, in our query functions file here. We've got find all subjects, find all pages. I would like to have another one here that's called function find subject by ID.

   And we can just pass it in an ID and it will do all of that business for us and return a result. I want us to take a moment just to look at how you would do that. We could take all of this, right here. Let's cut this out. And put this in here. We also need, of course, bring in that db variable so we have that so it comes in from the global scope when we have access to it. And then, I could just have return result. And that would just return the result set back. Then, it would be up to us to call MySQL fetch association to extract to that subject out from the array.

   Right, so we're giving back an array first and then we would need to extract it. Or, the way I like to do it, is to go ahead and just take that step here and put that up here as well. And let's set our query functions. I'll just past in those lines. Let's go ahead and fetch the subject. We can free the result and then down here, let's return the subject. So, I'm returning an array, not a result set. See how that works? Let's just make a note here, returns an assoc array.

   And right, and then down here, all I have to do is have subject equals find subject by ID and then pass in that ID. Nice and simple. See how clean that is? All of that code has been moved over to my functions file. Let's go back and just check it out. Make sure we didn't break anything in the process. Let's go back over here where we load our page. Still works. Back to list. Let's click on this one. View about Globe Bank. We can see it all still works. So that's the process for finding a single record from the database.

### 7.2 Use Form Data to Create Records

   In this movie, we will learn to create new records in the database by using submitted form data. Let's start by reminding ourselves what an SQL insert statement looks like. We have insert into, and then the name of the table we're using, and then in parentheses we have a comma delimited list of the different columns we're going to be providing values for. Doesn't matter what order they're in, but the values have to correspond to the same order. And then you can see in the continuation there, we have values, and then in parentheses, the different values as a comma delimited list that matches the same order as the columns that we had above.

   So that's the SQL insert statement that we're going to be composing, and then we're going to be sending that in as our query to MySQLI Query. That's different from what we were doing when we were using select, and we were asking for it to select records, now we're going to be using an insert. And when we're doing a insert, we're not going to need a subject's ID anymore, like we did when we were finding a single record. Right, we're creating a new record, we're saying hey, SQL, here's a batch of data, create a record with it. That data is usually from form data.

   And that makes sense because a form allows us to provide a lot of information that we want to put in that record. However it doesn't have to come from a form. For example, when you click a like or favorite link on a blog post, it could tell SQL to create a new record there too. That wouldn't be from a form, it would just need to know the user ID and the blog post that was being favorited. And with those two bits of information, it could create a new record to mark that as a favorite. When MySQLI Query runs with an insert statement, instead of returning a record set, it returns only true or false, letting you know if it succeeded or failed.

   Now when we do a new insert, we don't always know what ID MySQL assigned to that new record. And it doesn't return it to us when it returns back a value, it only returns true or false. So the way to find out what ID was created is to use another function called MySQLi insert ID. And then you provide the connections and argument. It basically says, hey MySQL, I just gave you an insert statement, you just created a new record. I'd like to know what ID you assigned to it. Can you tell me that. And that's what it does, it returns it as a separate call.

   So after the record's created, if you need to know what ID it was, this is the way to retrieve it. So in my project, for subjects, I already have a page for create new subject. And I have a form here that I can submit, and once I fill it all out, I can hit create subject, it sends that form over to create.php. Let's remind ourselves that that's what we had done here. In new.php, I have some code up here at the top which I'm actually just going to remove, we don't need any of that code, so let's just remove that out of there. And let's save it. And then down here you can see that the action on my form is to go to create.php.

   That's different than what we did on some of our other forms. Later we learned about single page form submission, this is two page form submission. The new.php is going to submit to create.php. And here's what create.php looks like. It's just a form processing page, it doesn't display any HTML, all it does is say hey, was this a post request? If it was, process the form. If it wasn't, then send the person back to the form. That's all we have there. So what we want to do now is change this code. If it's a post request, then, let's not just display it, let's actually send it to the database.

   So let's make those edits. We still want to have all of this code here where we're setting up the variables and initializing them. But what we want to do is change this so that we're constructing SQL. So let's change this to instead be SQL equals, and let's remove what's in here. And let's start writing our SQL. Insert into subjects, and then a space, and then I'm actually going to go to a new line, SQL dot equals, and then let's put in the names of our different columns. So we have menu name, we have position, and we have visible.

   Notice that I'm leaving out ID, I'm not providing the ID. And then I need a space at the end of this. And then let's start a new line, SQL, equals, and this one is going to be values, space, and I'm going to open my parentheses, and then I need to actually have my values. So I'm going to change these down here, just going to copy this real quick. Let's replace all these echoes with that. There we go. Now instead of menu name, this needs to be, single quotes.

   Single quotes around menu name. So that's going to be the first one. Alright, just a single single quote. And then we need a comma at the end. Now even though this is broken up on separate lines, don't let this confuse you. I've got single quotes around the value, here's the value, another single quote here, and then a comma at the end of the line. A space is optional, you can put a space here or not, it doesn't really matter. So let's do the same thing for all of those. Just a single quote, and a single quote with a comma.

   And the same thing here. Single quote, now this last one, it's very important that we do not put a comma at the end. It's the last one, there's nothing after it, we'll get an SQL error if it has a comma there. So do not put a comma after the last one. And then, let's close our SQL, because remember we have to have that closing parentheses at the end. So values is from here down to here. Now I broke these up into separate lines because later we're going to be working with them more. That's the reason why I did it this way, because this is a good format for some of the work we're going to do in the future.

   Now, notice that I used single quotes, not only for the string of menu name, but also for position and visible. That's not strictly required by SQL that we have single quotes around those. It allows us to just pass in integers in place of that. But for security reasons, it's a good practice to always put single quotes around those values. We'll talk about SQL injection later on, and we'll come back to that topic, but for now, always put single quotes around all of the values that you submit to SQL. Okay, so now that we have all of that, now, we can simply pass it in to MySQLI Query.

   We'll get back a result from MySQLI Query, we're going to pass in that database connection, DB, and let's pass in the SQL. Let's make sure up at the top I did initialize up here, wanted to make sure of that. So I have all of that available to me. So that's going to return a result. And if you remember I told you that for insert statements, result is true false. So, down here, we can check and see whether it succeeded or not.

   We just check and see if result, and if it's true, then we'll know that it worked, otherwise, we'll know that it failed. So let's first do if it failed. We'll say insert failed. So in the case that it failed, we can echo back MySQLI error. This is a new function that we haven't talked about, but it basically just says, what was the error on the last connection. Not a connection error, just a general error. Just report back what was the problem, and then let's call our DB disconnect, which we already wrote as a custom function to just disconnect us, and we'll call exit, just to make sure that nothing else executes.

   We're just going to bail out at that point. So display the error message, disconnect the database, and quit everything. Alright so if it succeeds, then what do we want to do? In that case, let's find out what that new ID is. We can use that new function we just talked about, MySQLI insert ID, DB, and then, let's redirect the user to, and let's do URL for subjects, and, oops I forgot staff in front of that, sorry, staff, subjects, and then, show.php, and show.php needs to know the ID.

   Which is why we just went about and found that new ID. So now we can provide it. Now we can say, go to the show page for this. Right, we just created it, now show us, show us the detail page for this. We also could redirect back to the list or something if we wanted, but I wanted you to see how you go about getting this new ID when you need it. Alright, so let's save it all, let's go back, and let's try it all out. We'll go here to our form, and let's create a new form. The form I'm going to create is Commercial, I'm going to give it a position, that only has one as a position right now, we're going to need to come back and work on that a little later, for now we'll leave that, and let's say visible is going to be equal to one, and let's click create subject.

   There we go. You can see that it created the new subject in the database, and then it redirected us to show.php with ID five, and you can see that it's there, it's in the database, we know that because we're seeing the detail page that we just created in the previous movie. Now before we leave this, I also think that we can take this and move it all to a function. Let's just grab all of this code and I'm going to copy it, and let's just come over here to our query functions. You can see that we have find all subjects, I have find subject by ID and I have find all pages, I'm going to add a new one here, function, which I'm going to call insert subject.

   The idea is, if we pass it in the menu name and we pass it in the position, and we pass it in visible, that then we should be able to create a subject. We'll need to make sure we have access to the database variable, and then we can take all that code that we just created, and all those will just get dropped right in place to create our SQL and we'll get the result. Now, instead of having it redirect here, I actually think it's a little bit better to take that bit out, and if it works, just return true. That's going to create the subject, and then, back over here on our create page, we take all of this out.

   We'll just say, result equals, and we'll say, insert subject, and we'll pass in all those values for menu name, position, and visible. And then, we'll ask it for that new ID and redirect here. So this is just going to take care of the insert for us, actually figuring out what the ID is and redirecting we're going to leave here. And that's because in different circumstances we might want to redirect to a different place. Or we might want to create it and not find the ID.

   So I'm not going to build that into my function. Alright, let's try it out one more time and just make sure all of that's working as well. Let's click back to list, let's try create a new subject. I'm going to call this one Junk. Let's create our subject, and there we are. Now we're looking at our subject Junk. So now we've packaged up all of that creation logic, and moved it to a reusable function.

### 7.3 Use Form Data to Update Records

   In this movie, we'll learn to use submitted form data in order to update records in the database. First, let's remind ourselves what an SQL update statement looks like. We have update, and then table, and then we use set, followed by each column, and the value we want to provide for that column. That's different than what we did with an insert statement. Here, the columns and their values are paired up using equals signs, and commas in between them. And then, in this case you can see that I'm also providing where ID equals one, because I'm targeting a specific row in the database for my update.

   So we'll be constructing an update query, that looks like that, and then we'll pass it in to my SQL I query. SQL update, can update multiple records at once, but usually for crud, we're going to be targeting a single record, like you just saw in that example. When we do that, we're going to need to make sure that we have a primary key, so that we can identify the record. And the primary key we're using is the subject's ID, so we'll need to make sure we have that ID, so that we can know which record to update. Now, before we update, we're also going to need to display a form. That's the typical way that we do these, is we retrieve the data from the database, and display the current data on the form, we give the user a chance to make changes to that data, and then they submit it.

   In fact, it's really a combination of the work we did on show dot PHP, and new dot PHP. On the edit form, we're first going to find the existing subject, and display it, just like we did with find a single record. Then, when the form is submitted, we're going to process that form data, in a similar way to what we did with new dot PHP, and create dot PHP. And whenever we call an update query, it's going to return true or false to it. It's not going to return a result set, like when we were doing select. It only returns true or false, to let us know whether it succeeded or not.

   In the subjects portion of my staff area, you can see that I already have placeholders here for edit. And let's click on edit, junk. That's a good one for us to play around with. When I click on it, you can see I'm already sending the ID to the page, that's great. Now we know which ID we want to work with. So the first step, is we want to display the current information. So just like we did with show dot PHP, we want to go and retrieve that information, and then display it here in the form. So let's remember what we did with show dot PHP.

   In show dot PHP, all we did was call find subject by ID here. We found the ID, and then we called find subject by ID. So that's all we have to do here. Let's take this, and let's just move it over, to edit dot PHP, and instead of doing all of this, let's just find the subject. So now we have an array. Remember, find subject by ID returns an associative array to us, that contains all the attributes we need for that subject. So now, we can use those down here on our form. Let's skip down here, and instead of menu name, it's going to be subject, and then open our square brackets, single quote, and at the end, close our single quote, and close our square brackets.

   Let me just copy this portion here, make it a little faster, because we're going to do the same thing for position, close those up, and visible, down here, visible is also going to need a single quote, and closing square bracket. Okay, so now, I'm using the associative array for those values, instead of the values that I'd set before, so we have a subject, and then we're going to have a correct form. Let's save this. Let's go back and let's just try that part out. Let's reload our page, and look at that. The page is populated with the correct values.

   Those are coming from the database. It's very similar to what we were doing with show, we're just putting it in a form. Now, the user should be able to edit this. Let's just change it to junky, put a Y on the end. And if I hit edit subject, it will submit to the same page. You remember, that's where our form submits to. We used single page form submission for this, that's different than what we did for new and create, so this is submitting to edit dot PHP, with the ID. It'll come back up here to the top, and then it finds the ID, it then finds the subject, and then, since it's a post request, it then sends that information to the database, the form information.

   We don't actually need to find the subject here. We're just going to be submitting the data to the form, so there's no reason to make another trip to the database here. We can actually take that data, and just move it down here, and make it part of an else clause, so if it's a post request, process the form. If it's not, find the one that's already in the database. That'll just save us a trip to the database. Okay, so now, here we need to put together the form values, and then submit to the database. I'm going to erase all of this. Instead of menu name, though, let's now use that associative array, that same format that we're using.

   The reason why is because it's going to then be consistent, with what we have already down here in our form, where it's looking for subject menu name. And later, when we start having errors, we're going to want to be able to redisplay the data the user gave us, so we're going to want to use that same format. So, for now just take my word for it, this is going to be a little bit of an improvement. We're going to just change all these to use that same associative array format. The same thing, we'll still have the same values, we're just gathering them together in an associative array, instead of being single variables.

   Let's do that for each one of these. There we go, so now we've got those values. We're still bringing them from these same post variables, that hasn't changed, but we just putting them into an associative array. Okay, so now we need to actually do the SQL for this. So let's think about what that SQL should look like. Let's do SQL equals, update subjects, set, and then a space, and then a new line, let's concatenate to that, the first column that we want, which is menu name.

   And let's do equals, and then we're going to want to have single quotes around the value, and then we'll want to drop in the value. I'm going to do another double quote here, so I can concatenate this together. And the value that we're going to want, is this one right here, subject menu name. So how that works? Take a second if you need to, to see that there's menu name equals, single quote, then the actual string for the menu name, and then another single quote here at the end, and we need a comma after that. Put a space too if you want, but it's not strictly necessary.

   I'm going to just copy that and paste it two more times, because we want to do the same thing for position, and for visible. Now the last one does not need a comma after it, because it is in fact, the last one. But we do definitely want to have a space here at the end, because we've got more coming. We don't want to change it for all subjects in the database, that would be terrible. What we really want, is to target just one. So I'm going to use ID here, now I could just drop in the ID as is, but it's always a good security practice to put single quotes around that.

   We'll come back and talk about why that is a little later on. For now, let's just go ahead and add that in there, so that we'll have that, and we can put in, dollar sign, ID. So that'll say, find the one where the ID is equal to this ID, and then there's one more line I want to add here that's not strictly necessary, but it's a good extra safety measure, and that is, limit one. I'm only expecting to update one row in the database, so let's tell it to limit it to one. And that we if I accidentally have a mistake in my SQL somewhere or something, it doesn't inadvertently update a whole bunch of subjects.

   The worst thing it can do is update one row in the database. Again, not strictly necessary, a lot of people leave it off, but it's just an extra safety measure. Okay, so now I've got my SQL constructed, so now we know what we need to do. We need to send that to my SQL I query, with the database handle, and our SQL that we just constructed, and we'll get back a result. And you'll remember that I told you that for update statements, the result is true false.

   So we can test, if result, meaning that it's true, then it succeeded. If not, then it failed. And if it failed, what do we want to do? We're going to do something very similar to what we did, with insert subject, when it failed, I'm just going to copy this, bring it over here, because we'll just echo back the my SQL error, and say, update failed. So it'll display the error, disconnect and quit. Now if it succeeded, then what do we want to do? We want to redirect to, we'll use our URL for function, to say that it should go back to staff, subjects, show dot PHP, we'll look at the work, at what we just edited, which will need an ID, for us to keep track of there.

   So let's use this ID. We don't need to ask for the last inserted ID, because we already know the ID, it's an existing record. Okay, let's go and try all that out. We have to come back over here, let's reload our page. It still says junky, let's change this to junk one. Let's click edit subject, and now look at that, it redirected us to the show page, and it did make the change for us, junk one. Click back to list. Here it is, junk one. Click edit, now we can make it junk two, edit subject, and it changed to junk two.

   See how that works? Now this is all written in our single edit page. Let's go ahead and make reusable as a function. I'm just going to grab all of this code here, and cut it, come back over to our query functions, I'm going to fold up the work we did on insert subject, and let's create a new one here called update subject. Now unlike what we did with insert subject, I'm using a single array of attributes. I'm not passing them in one at a time. It's a good project for you, if you want to try to go back and change insert subject, so that it also uses a similar associative array.

   I'll leave that up to you, but here I'm going to have subject as an associative array. I'll get my database handle. I'll paste everything in. The only thing is, notice that I don't have an ID. So I could pass that in, that could be up here as another argument, or I think an even better way to do it, is to also just put that inside that associative array, so that it already has that in there. Let's save that, I'm just going to jump back over to edit dot PHP, and let's add a line here, that just says, subject ID, is going to be equal to the ID that I already found.

   All right, so that'll work. Let's add a line here to actually call that function. Result equals update subject, and then I just have to pass it in that associative array. All those values'll be in there, and update subject will take care of that business for us. So it'll do all of this process through here, set all these values. At the end though, instead of returning the redirect, we may not always want to redirect to the same place, so let's just return true instead. Now, if it returned false, it would go ahead and handle the error, so really it's only ever going to return true, so having result here isn't actually that meaningful, but that's fine.

   Once we get it back, update the subject if we got no errors, then we'll redirect back to this page. Let's save it, and let's try it all out. Let's go back over, click back to list and start from the beginning. Here we are on the page, let's change it to junk three. Now click, edit subject, and look at that. It still works even after we moved it to a function. Now you know how to find a single record in the database, you know how to create new records, and you know how to edit existing records. We still need to talk about how to delete a record, but before we do that, I want to talk about a problem that we have on our 

### 7.4 Form Options From Database Data

   In the last two movies we learned to create and edit records using form data. But there was a problem with the forms that we were using. And in this movie, we're going to learn how to use database data to address it. First, let's understand what the problem was. You can see here that I have a list of subjects that are being pulled from the database and there are five subjects currently in my database. Notice that the positions here are a little funky. I've got three position ones, and then position two and three. I would expect instead, that these would be numbered one through five. The reason why it's like this is because we're on our new subject form we only have the option to create position one.

   The same thing is true on our edit form. Click on Edit here next to Junk 3, you can see we only have the choice of Position one. That's not ideal, what we really want is to have a list of positions that we could choose from. That list of positions is based on how many subjects are in the database. So that's what I want us to do here. Let's look at the code. You can see that for the position on the edit.php page we just have a single option. We're checking to see if that option is checked or not but we don't loop through multiple options.

   So we want to change this to be a loop instead. I'm going to paste in some code just so you don't have to watch me type it. This is also included in the exercise files if you want to get it from there. The select is still called position but you can see that now I have a for loop that goes from one up to a variable called subject_count, we'll set that in a moment. But instead of outputting a single option now it will loop through a series of them and for each one it will output an option tag whose value is i, the number as we're counting through and whose label is also i.

   And then we're going to do some checking here just to see if the position is equal to the current value then we'll mark it as being selected. We just need to come up with this value for subject_count let's do that up at the top of the page. Up here, if it is a post request we know we just want to process the request. But you can see that if it's a get request, or not a post request the we're going to find the subjects by its ID so that we can display the form. We don't want to just find the current subject though we also want to find out how many subjects there are. We want to come up with a subject_count.

   So how can we do that? We know how to find subjects in the database subject_set and we wrote a custom function earlier called find_all_subjects that will return all the subjects to us. We also know that we have another function called mysqli_num_rows which we can pass that subject to and it will tell us how many rows there are. That'll give us a subject count. Let's also not forget, once we're done we can also call free result and free up that subject step.

   So there we are, those three lines are going to tell us what our subject count is. Now, you could take all three of those and wrap them up into their own function called count_all_subjects if you wanted. I'm not going to do that, I'm going to leave them separate. Also, if you know SQL really well, you'll know that SQL also has the ability to just return a count. We can just simply create a query that says count the records for me, and return that count. If you know how to do that, you can do that instead. But I'm going to stick with the tools that we've learned and all know, which is how to find the records in the database and get back the number of rows.

   So, now we have a subject count so our code down below should work. Let's save this, let's go try it out. Click back on this page, let's just reload this and when I click on it, now you see I have choices one, two, three, four, and five. There were five subjects, I have five choices, so let's make this choice number five, click Edit subject, and there it is, position number five. Back to the list, let's click on Commercial, let's make it position number four, Edit subject, back to list, and now I have subjects listed one, two, three, four, and five, exactly like I would expect.

   We need to do the same thing on the new subject page as well. This only has a single number here let's take that same code that we were just working with. Let's go to new.php, and let's paste it in there. Again, we're just going through a loop, all we have to provide is the subject_count, as long as it has the subject_count, it should loop through it correctly. Although, notice that it also depends on checking the current value of the array subject and the value position, that's not a value that we have currently so we want to make sure that we set that value as well.

   Let's just go up to the top and let's just make notes here that we're going to have to come up with the subject_count we also need to come up with the subject position and that's going to be inside an array we're going to need to create which I'll just call subject. Okay, so let's do this first one, subject_count we know how to do that, it's exactly the same as what we were doing over here for edit. Take those three lines and copy them, paste them in here, except that when we're creating a new subject, then the number should be one higher because we want to allow for the fact that we're going to put it in that top position plus one.

   So the number of rows, plus one extra for the record we're creating now, and in fact, that's a good idea for the position by default, let's have it default to that highest position so if we have five records, it'll have choices one through six and it will default to being in the sixth position automatically. Let's save it and let's try it out. Come back here, click Back first and then let's click on Create New Subject. Here we go, position six is automatically set for us. So we have choices one through six and six is the default. So that solved our problem.

   So now we successfully used database data to create these form options so that they draw on data in the database in order to create an appropriate looking form. Before we leave this subject I just want to do a bit of housekeeping here. Since we started using subject in the associative array format here, I want to do the same thing on create.php. I suggest that this is a possible exercise for you to do on your own, let's do it together now. You can see that here I have menu name, and I'm passing in the different attributes to insert subject.

   Instead, what I want to do is just create a new subject array and then use that subject array, actually here, we're going to put each one of these as values inside, just like we did with Edit. Copy this, update these to be position and visible. Then all I have to do is pass in that whole array subject to insert subject.

   So it's just wrapping these up into an associative array instead of being individual values. So if I change the syntax that I'm passing in to insert subject of course I have to go to query functions and I have to change it over here as well so this will just look for subject and then we'll need to get those values out of here, again, subject, menu_name, and this one's going to be position and this is going to be visible. So just a little bit of housekeeping just to make sure that we stay consistent. So now both insert_subject uses and array called subject, and update_subject does the same thing.

   We can just test this out to make sure it's working go back to the list, Create New Subject, just say More Junk, mark it as Visible, Create Subject, and here we are, More Junk. Back to list, now shows our new subjects. 

### 7.5 Delete a Record

   Throughout this chapter, we've been learning to implement CRUD in PHP and we've learned the first three of those. Create, Read and Update. In this movie, we're going to learn how to Delete records. First, let's refresh our memory about what an SQL Delete Statement looks like. You see we have 'DELETE FROM' and then the table we want to use to delete from and then 'WHERE id = 1'. We don't need to provide any data to deleting, we just have to have a condition telling it which record or records should be deleted. You can use delete to delete multiple records at a time but most of the time when we're working with CRUD, we're going to be deleting a single record at a time.

   We'll want to specify the primary key, like we do here. We'll construct our SQL Delete Statement and we'll pass that in to MySQLi Query. Remember that when we're deleting a single record, it's going to require that we know what subject id we have so we're going to want to pass that in, make sure we have access to that so we can construct our where clause with it. With a delete, having a form for it is optional. You could simply have a link and you click the link and the record gets deleted. Some people like to put JavaScript on that link that pops up a confirm that says, 'Are you sure you want to delete?' and then it proceeds to delete and then that keeps it nice and simple.

   But I like actually having another page that has a form on it, for two reasons. One, having this page gives us a way to double-check before we're deleting. It gives us a chance to have a page that says, 'Hey user, are you sure you really want to delete?' and then if they are, they'll submit it and it's a form that submits. The reason why that's important is because a Post request is desirable. You want to put your deletes behind Post requests, not Get requests. Why is that? Imagine for a moment that a search engine visits your site.

   Search engine spiders will click on all links, which are Get requests. That's how they move around the site. But they will not submit any forms, which are Post requests. Imagine if a link simply deleted a record in the database. A search engine spider could delete everything in your database, just by following all those different links. Now of course, you probably would have these pages password protected to keep search engines out, but it still illustrates the principle. It's a good idea to have Deleting records only work when you have Post requests.

   Of course, once we have our Delete query, it's only going to return True or False. We're not going to get back a record set to work with, just going to tell us whether it's succeeded. In our project, delete.php was not a page we'd created before so I've gone ahead and added it. It's also in the exercise files if you want to grab it from there. You can see that at the beginning it just has our require_once to initialize.php. It makes sure that we have an id, because we definitely need an id here to be able to delete it. Then it's going to find the subject by its id. Then we're going to have that subject and the reason why is because if it's not a Post request, we're going to display a form, just like we did when we were working with Edit.

   We're going to display the form and then that form will submit back to this page and if it's a Post request, then in this block will actually delete the code. Let's scroll down and look at what's on this page. It just comes up and says 'Delete Subject' and it says 'Are you sure you want to delete this subject' and because we've found the subject in the database, we can display its name. We can say, 'Are you sure this is the one you want to delete?' and then they'll have a button that says 'Yes, delete subject' and when they click it, it's going to submit a form and that form doesn't have any attributes on it, it's just a Post request, that's the important part.

   It's just a Post request that goes back to this same page but with an id, with a subject id, to tell it which one to delete. The important part is here we have a form just so we can get that Post request submitted. The Post request comes back and then if it's a Post request, what do we want to do? We want to construct SQL. Let's do, 'SQL = DELETE FROM subjects' and then we'll put a space and let me just add another line here where we'll concatenate together 'WHERE id=' and then we want to use single quotes around this value.

   Again, it's not strictly required by SQL that it's there, but it is a good security practice. Then we want to drop in that 'id', that's all we have to do. Take that id, put it in here and say, 'Yes, please delete it.' Then I'm going to put a space here and the reason why is because there's one other line that I want to add, which is a good sanity check. It's just a good way to make sure that you don't accidentally screw something up, 'LIMIT 1' since we know we only want to delete one record, we're going to add this 'LIMIT 1' to make sure. Even if we screw something up in our SQL, it can't accidentally delete a bunch of subjects, it can only delete one.

   Then we can assign the result from MySQLi_query and we'll pass in that database handle and the SQL we constructed and then we know what happens when we do that. We know that 'for DELETE' statements, the result is true-false. We can test to see if our result came back and if it did, let's redirect to url_for, now where do we want to redirect to? We can't go back to an existing record, because the record is just gone now so the only place really to go is back to the list, back to that index, that php page.

   That's if it succeeded, if it didn't, then we're going to want to have some code for if it failed and I'm actually going to go over here to my query functions, to update subject because it's going to look exactly the same as this. Instead of update failed it's going to be these three lines. There we go. We're going to display the error, we'll disconnect and then we'll quit. This will say 'DELETE failed'. We'll also need to make sure on index.php, add a link.

   Here we have delete, we'll want to link to that new delete.php page we had and pass in the id, make sure you do that as well. Here we are on the 'Subjects' page. You can see I have my 'Delete' pages, let's click on 'More Junk' first. Click on 'Delete' and look what we get. It uses the id up here to find the subject. It says, here's the subject name, it's called 'More Junk'. Are you sure you want to delete this subject? When I click 'Delete Subject' it goes back to the same page but as a Post request, it deletes it in the database and then redirects me back to index.php and we can see that it's gone.

   See how that works? Let's try taking all of that delete that we just did and let's move that into a function. We've been doing that to great effect so far. Let's just cut this code, let's move it over to our query functions and let's add a new one here. 'Function delete_subject' and in this case, we just need to pass it an id. We don't need to actually pass it a whole subject array. Let's paste in our code. We know we're also going to need to make sure we have access to global db.

   Oops, not sure what's going on down here with my text editor, there we go. 'Global $db', semicolon, 'DELETE FROM subjects' here we have the id that we passed in and we'll create the result. We don't want to automatically redirect to this page every time, so let's just return true. I cut that text so we can come back over here and we can use it. We're going to redirect after we call 'delete_subject' with the id. Now we could trap the result here but the result in truth is always going to be true.

   So it doesn't really matter. That'll delete the subject and then redirect us. Let's make one minor change here. If we're deleting, there's no reason to find the subject here. You could, you could check and make sure that the subject actually is in the database before we try and delete it but it's really not necessary. Let's go ahead and just change this so that it only finds the subject if it's not a Post request. Either we delete the subject or we find the subject, one of those two things. Let's try it out, make sure it still works. Let's go back to our site. Let's click on 'Junk 3', click on 'Delete'.

   Still works, 'Delete Subject', here's 'Junk 3', click 'Delete Subject' and now it's gone. Now we just have our four main subjects. With that, we've concluded learning about CRUD. You can see that we have some nice functions built up here that will do that CRUD for us. We can review them and remember how it works. We can find all subjects, find subjects by specific id, we can insert new subjects, update subjects or delete subjects. 

### 7.6 Challenge: Pages CRUD

   It's time for another challenge assignment. Similar to the other challenges we've had, your goal is going to be to take the work that we've done throughout this chapter on the Subjects area, and do it for yourself in the Pages area. To develop the Pages CRUD. Let's go over the points that you need to make sure you hit. First, you want to make sure that you can read back a single page. In the last chapter we already added pages/index.php So you have a list of pages, now we want to find a single page using its ID. Next, you want to enable our form that we already have for new.php, just submit those form values to the database in order to create a new record.

   Then you'll want to update an existing record, remember, this is a two part process. First, you need to read the existing database record, so that we can display the form with those values. And then, once it's submitted, then you actually will update the data in the database. And finally, the last item in our CRUD, is to delete a page. Pass in a page iD to tell it which page that it ought to delete. Remember, we're doing that using a web form so that we make sure it's behind a post request. Now also, don't forget that on show.php, new.php, edit.php there are a couple of extra attributes that are on the Pages table that are not on the Subjects table.

   We have the foreign key for subject ID, also one for content. So you want to make sure that you include both of those on your form and in your form processing. Once you've got those work on the select-option for the position of each of the pages. You're going to want to look at the database to find out how many existing pages there are, and then create a loop that will loop through that many times to display that many options. Checking to see whether the current value matches the option at each step along the way. And then, once you've got all of that, I've got a couple of advanced challenges for you.

   The first bonus challenge, is to display subject names anytime you would normally just display a subject ID. Now I'm not talking about on forms here, I'm talking about on index.php, and on show.php, instead of just displaying a number, instead display the subject name. It's going to require you to make a trip to the database, to find out that information. And then, if you're really up for a hard challenge, create a select-option on the new.php and edit.php pages to allow you to choose from a list of subjects in order to know what the foreign key ought to be.

   The value that you're going to submit on the form, is still going to be subject ID, because that's what the database needs. But, on the option, we can use the subject name as a label for each one of the options. The user sees the subject name, but the ID is submitted quietly in the background in the form data. I'll give you a hint for this one, you may want to use a while loop instead of a for loop for these select options. You can go back and review the work that we did throughout the chapter if you get stuck. But it's better if you try not to cut and paste the work you did for subjects before.

   Try to create it from scratch. That's the best way that you can learn and solidify this information in your head. In the next movie, I'll show you the solution that I came up with. 

### 7.7 Solution: Pages CRUD

   Hopefully you were able to complete the challenge assignment and you were able to implement the all the elements of CRUD for your page management area. If you ran into problems, don't worry. In this movie, I'm going to show you the solution that I came up with step-by-step. Let's begin by looking all the different query functions that I developed and I put those all in the query_functions.php file. You can see, we already had find_all_pages but I added one for find_by_page. It takes the id as an argument and what it does is just simply finds from the pages where the id is equal to that id.

   It passes that into mysqli_query, it gets back a result set, we make sure that it is a result set using our custom function. We don't want to have a set anymore. We just want to get the values out of that set. So I went ahead and used fetch association to get an associative array, assign that to page, and then I can free up the result and return the page back from the function. Then we have insert_page. For insert_page, I'm going to pass in an associative array of all the values that we want to use. I construct an insert statement: INSERT INTO pages.

   Notice that in includes subject_id and content. And then each of the values correspond to the same order that I have there. I have subject_id and content as well. Notice that each one of these has single quotes around it, a comma at the end of every line except for the last line. I pass that into mysqli_query. The result I get back is going to be true or false. And I handle the case when it might be an error or else, return true. Alright, let's look now at update_page. It also takes in an associative array. The sql is UPDATE pages SET and then we take each one of those attributes and its value as pairs so subject_id equals and then the subject_id that was passed in.

   So notice that I've got subject_id and content included there as well. Each one of these lines has single quotes around the value and it has a comma at the end of the line except for the last line. But we don't want to update all pages. We only want to update one specific one so we use the WHERE clause in order to find just where the specific id we want and I'm using LIMIT 1 just as a safety measure to make sure I don't accidentally update too many pages. And then I pass that into mysqli_query. I get back a result, I handle the case when there's an error. Otherwise, I return true. And the we have delete_page.

   For delete_page, we just pass in an id. It constructs the query with DELETE FROM pages where id is equal to that id and it uses LIMIT 1 as the safety check to make sure we don't accidentally delete too many pages. Pass it into mysqli_query, returns true or false and we handle any errors or else return true. Okay, so those are the basic CRUD functions. Now, how do we use those on our different pages? On the show.php page, I simply call find_page_by_id. That's all I need to do. Pass in the id and I get back an associative array ready for me to use.

   So then further down on this page, we have the ability to display that information: page and the menu name. Make sure that you escape these values with html escape as well. So I've got Menu Name, Position, Visible, Content, et cetera You may still have Subject ID up here. We'll come back and talk about that a little later. For now, just notice that we have a list of all the different attributes on the show page. Then we've got new.php. New.php will display a blank form by default but if its a post request, you will actually submit it to the database.

   So let's look first at when its not a post request. In that case, I'm going to initialize a new associative array called page and assign default values for all the different attributes. I'm also going to find all the pages to find out how many there are. So I'm going to have a page count. I'm going to add 1 to that because we're adding a new page and then I can free up that result. If we look down at the form, you can see that when we get to Position that its for a for loop here that's going to iterate through until it gets to the page_count and output those option values for us.

   Now once we submit the form, it's actually going to be a post request and so we're going to grab those form values and put them in our associative array. We're going to pass all that into insert_page. The result should be true if it succeeds. We'll then ask for the last id, the insert_id and then we'll redirect the user back to the show page using that id. And then on the edit form... Now on the edit form, it's similar. If it's a post request, we'll actually update the database but if its not a post request then we want to find the existing page by it's id.

   So we do that so we can display the current values in the form. We also want to find out the page count so we do that again but we don't add 1 this time. And then down here on the form, you can see that we have all the different values that we're outputting and the position is looping through just like we did on the new page. Now once we submit this form then, of course, its going to be a post request so we're going to get those form values, we're going to put them in an associative array, and send it to update_page and at the end, send the user back to the show page so they can view the results of their updates. And the we've got delete.php.

   Delete.php when its not a post request is going to find the page by the id mostly just so we can display a bit of text here that says "Are you sure you want to delete this page?" and it provides the menu name for the user. Then we have a form, they click "Delete Page" that submits a post request because this form uses the method post. Therefore the post request happens here and we have delete_page by it's id and then we send them back to the index.php because the page they were on has now disappeared. And finally the last thing we need to do is on index.php.

   We need to make sure that since delete.php was a new page that you add a link to it. So we just add a link to delete.php with it's id. That completes the main objectives of your challenge assignment. Take a minute if you need to, to get caught up and make sure you've got everything working. Next, I want to show you the solution to the bonus and the advanced challenges. For the bonus challenge, instead of just displaying a subject id on the list, what we want to do is display the name. And see here, its much nicer to the user if they don't have to look at subject id 1.

   Instead they see About Globe Bank. That's much more meaningful to them. And same thing on the view page. We want to see About Globe Bank here instead of the id 1. The way that we do that: Let's go to the show page You can see that before I display it, I just simply make a call. Instead of displaying the subject_id, that foreign key, I simply ask for find_subject_by_id and I get back an associative array and I can then display it's menu name. I did the same thing on index.php but I did it inside the loop so as its looping through each of the pages, we just take that subject_id, find the subject, and then down here I can display it using subject menu_name.

   Now that completes the bonus assignment and it makes those pages work well. But what about our forms? We also want our forms to have a nice pull-down like this so that we can choose between the different subjects instead of just having to enter in a text box some arbitrary number which we may not even know. So in order to implement that, let's go to our new.php page and take a look. Down here on the form, you can see that I'm finding all the subjects, just like we did before when we listed the subjects on the index.php page.

   I'm using a while loop just like I did on the index.php page but instead of outputting rows of all sorts of information about each subject... Instead I'm turning those into option tags. Along the way I'm also checking to see if the current page subject_id is equal to this subject id and if it is I'm marking it as selected. And then at the end, of course, we want to make sure that we free up that result. So it's a very similar process to what we were doing here on this page, the subjects page.

   It's very similar to what we're doing here where we're listing off these four. The only difference is that we're doing it over here on the form page as a select option. And then I did the same thing on edit.php. If you come down here, you'll see that we find_all_subjects and we iterate through them in order to come up with that option list. 

## 8 Validate Data with PHP

### 8.1 Common Data Validation Types

   In this chapter, we will discover the importance of validating data and learn how to write PHP code to do it. When we accept data from users, especially from forms that users submit, we should not just accept any data that the user gives us. The data may be the wrong length, it might have the wrong format or it might be missing a value altogether. The fact is our application has data requirements, and it's our job to consider those requirements and then to write code to enforce them. You're going to spend significant time on this for every project so it's worth learning how to do it and to avoid the pitfalls.

   Imposing data requirements is called validating data. You'll hear me refer to the process as passing or failing our validations. If it passes validations, the data was acceptable and we can use it. If it fails validations, that means there was a problem with the data and we should reject it. And most often we want to go back to the user and ask them to fix the data and try again. Data validations are always unique to each project, but there are some common types. The most common requirement is that the data can't be left blank, we validate that it's present.

   We're all familiar with forms which have required fields. In addition to being present, we might want the string that's provided to us to be of a certain length. Maybe it needs to be more than eight characters for a username, or maybe it needs to be less than 255 characters so that it can fit in our database. Or you might check that it's between two values or that it's exactly a value. We can also validate the type of the data, as the user provided us a string, an integer, or a float, we can also check for whether the data is included in a set of choices.

   So that only a certain set of choices should be provided to us. Or the reverse of that is the exclusion from a set of choices so that a user does not provide us certain values. We can also validate the format of the data. For example, that an email has the correct format, or that currency has a currency symbol in it, or maybe times that require hours followed by a colon followed by the minutes. And then if we're working with databases we often want to validate the uniqueness of the data. For example, if a user gives us a username, we want to check the database and see if that username is already taken and if it is, then it would fail the validation for uniqueness and we'd ask the user to pick a different username.

   These are general categories and they're by no means a full list. You will need to write custom validations that fit your specific project. For example, you might have a field that contains a path to a PDF file and your validation needs to check and see if that file already exists. Or, you might validate that a user password contains certain characters. Let's look at some PhP examples for a few of the most common validations. I've added a new file to our globe bank project inside the private directory and I've called it validation_functions.php.

   It's also included in the exercise files so you can find it there. The idea is that this file is going to contain all the functions that related to performing validations. And then also in initialize.php, I have a line here that requires that validation_functions file, so that it's available to any of my php pages that include initialize.php. So let's go through and let's look at what some of these validations look like. The first one I've got is is_blank, and it's checking to see if a value is blank. It will return true if the value is not set, that's what the exclamation point here means, is not the case, so not is set.

   Or, that's what these pipes are, or if we take the value, and we call trim on it, and the result is an empty string. Trim basically just removes the leading and trailing spaces. So that means that if I typed in five spaces and submitted a form, it would still be considered blank. It's a bit of a judgment call on whether you want to use something like that or not. But I decided that spaces should not be considered blank. Notice also that I'm just returning the result of this boolean, this is a boolean expression, it's going to return true or false, I'm not returning text, I'm not returning a number.

   I'm just returning the result of a boolean expression. So the result back will be true or false. I'm going to be doing that throughout all of these. Now is_blank is going to return true of the value is blank, false if it's not. Might make more sense to us when we're working with validations to use has_presence instead which does the opposite of is_blank, it simply reverses it. So now we're saying if this has a presence, then it's okay, if it doesn't have presence then it's not okay. It's up to you which one you prefer better.

   I like validation names that all begin with has, that just kind of keeps them all organized for me. In addition to those two, I can also check the length, here's one that checks for has_length_greater_than, it takes a value, and then the minimum length, it must be greater than this minimum. We call strlen on this value to get the length, and then it's going to return true or false whether that length is greater than the minimum. Notice here I'm not using trim. It's up to you whether you want to add it back in but this doesn't use trim so spaces do count towards the length, you can just trim a string before you pass the validations if you wanted to.

   And then I've got has_length_less_than which does the opposite, it gives a maximum value. It also does the same test here but it checks to see if length is less than the maximum. And then has_length_exactly. Very similar, but now it's testing to see if it's exactly the same length. Then I've got another function here which is a combination, has_length, and it's going to perform any or all of those three that were above. I'm going to provide a value, you can see the example here such as abcd, and then an array, an associative array, that I'm going to use for options.

   So I can pass in min, can pass in max, or I can pass in exact along with a value. And if I've included an option then it's going to perform that validation, so, if the minimum has been set and the length is not greater than that minimum, not greater than, notice that there, then it's going to return false. If it passed that test then it would check to do the same thing for max and the same thing for exact. I wanted to show you, this is a common design pattern to use for validations. That there are a number of different reasons that it could fail the validations and only if it gets through all of those reasons at the very end we return true.

   Let's skip down to our next one, I have has_inclusion_of, that takes a value and then a set, we want to make sure that value is included in that set, that set should be an array. Now the thing is php actually has a function that does exactly that, it's called an array. Takes a value and checks to see if the value is inside that set. You can certainly just use an array as your validation. By calling it has_inclusion_of, to me it makes it clear that what I'm doing is performing a validation, it just makes that a little more explicit but it does exactly the same thing.

   And has_exclusion_of does to the reverse. Next we have has_string that takes a value and then a required string that we want to make sure is present inside that value. Make sure that there's a presence of that string in there. To do that we're going to use another php function that's built in called strpos. Again, we could certainly just use strpos. This time though, it helps us to avoid a common pitfall with strpos, which is that strpos will return the position of the string or false if it's not there.

   And it's a common problem because it can return position zero if the required string is present at the very beginning of the value. It's position is zero, it's a zero indexed value. So if it's at the very beginning it returns zero, and if we're not careful then we could end up saying that it is equal to false. We can accidentally think that that's a true value but by using this exclamation point doubled equals version, it makes sure that it has to be exactly false which means that it wasn't present there. I also put a note here that strpos is a faster way to find out if a string is present or not than using preg_match, we're going to be talking about preg_match in the next example for has_valid_email_format.

   You pass in a value and it tells you if it looks like it's an email address or not. It does that by using preg_match, preg stands for Pearl regular expression, this is a Pearl compatible regular expression so you'll see preg a lot in PHP code, that's what the p stands for, it's the Pearl programming language. So it provided a pearl compatible regular expression as the first argument and the value we want to match against as the second. And it returns 1 if there is a match, zero if there is no match. Preg_match is a powerful tool that you can use for a lot of your validations, but it does require you to know regular expressions.

   For now all you need to know is that this regular expression that I've got here will match most email addresses, it basically says almost any character followed by an at sign followed by almost any character followed by period followed by two or more letters at the end, such as .com, .org, .uk, just about anything would work. And it's also case insensitive. So this gives us a good starter set of validation functions. You'll probably want to add to this and it will probably be specific to each project that you work on. So you can add your own into this file.

   In the next movie, let's start seeing how we can use these validations inside our project.

### 8.2 Validate Form Values

   In this movie, we'll begin adding validation functions to our project. The first thing we should think about is where we want to put these validations. We want to validate the data before we create or update records in the database. That's the right place to enforce these rules. So the form data comes in from the user, we run our validations, and then we either create or update the records. Often we want to use the same validations for both creating and updating. And that's because the rules about what data is acceptable when we're creating record, are usually the same rules about the data that's acceptable when we're updating a record.

   It's not always true, but most of the time it is. In that case, you want to put your validation code, in a reusable function, so that you can call it in both cases. And the same rules would be applied. You wouldn't want to inadvertently have one set of rules for creating data, and a different set of rules for updating data. And then, if our validations fail, the create or the update would be prevented. If they pass, then we can go ahead and let the data go into the database as we would normally do. If they fail, then we need to let the user know what went wrong, because we want the user to be able to fix it and then resubmit the form.

   That means we need to keep track of errors, and report them back to the user. It's important that we report all errors at once, in order to provide the best user experience. So, when we go and look at the data, we want to look at all aspects of the data, and come up with a tally of everything that's wrong, and send that back to the user at once. We don't want to just fail as soon as we encounter the first error. Think about it. It makes sense. If a user has a form that has ten different fields on it, we don't want them to submit the form, find out there was something wrong with the first field, fix it, submit the form a second time, find out there was something wrong with a different field, fix that, submit a third time, and so on.

   We want to present them with all errors at once, let them fix all the errors, and then hopefully submit good data to us the next time. Here I am in the subjects area for edit.php And right here is where I'm calling update subject. So I'm getting the form values that are submitted here, and then I'm actually performing the update, right here with this function. So somewhere in between we need to perform the validations. Now we could do it right here on line 19, so that we perform our validations inside this request.

   But often, it's the case that the, validations are fundamental to being able to update a subject. We want them to be enforced all the time. And we don't want to ever forget. If that's the case, then it's a good idea to put those validations inside this update subject function, so that they always run. And that's what I'm going to do. So I'm going to go in and find my update subject function, and if you look in here, it takes the subject, and right away it starts the SQL that it needs to actually create the subject. So before we do that, we need to add some code here, that's going to validate our subject.

   So I'm going to write a function that'll do that, a little later on. I'm going to call validate subject. I'm going to pass it in, all of that data in the associative array, and it's going to look at it, and tell me if there's anything wrong. And it's going to come back and give me a list of all the problems in an array. That array will have all the problems listed out. Now, once I have that array of errors, then I need to check and see were there any errors. So I know whether to execute this code or not. So I'll do a conditional here, if empty, and then we'll provide errors. Now I could say, if empty, do this SQL, but an even better way is to say, if it's not empty.

   In other words, there were errors, then let's use return, and let's return back those errors. By using your return here, if there are errors, this code never gets executed. Return will immediately stop the function. It returns this value back and none of the rest of the code will execute. Now as I mentioned, the same code needs to take place in both update and in inserts. So I'm going to copy that. I'm going to come up to insert, and I'm going to put the same code in there. So it's going to also validate the subject in that case. I don't have this function yet. So we need to add it.

   I'm going to paste in some code for this, and I actually have it included in the exercise files if you want to get it from there. Maybe just paste it in. We'll take a look. I have a function called validate subject. It takes an associative array for subject, and then you can see that it has an array for errors. And the idea is that we're going to build up those errors, during this function, and then at the very bottom, you'll see that returns back the errors. So that's what the function does. It basically just adds information to this array and then returns it at the end. You'll see for example here, we have for menu name we have a validation.

   If subject menu name is blank then, add this string to the errors, Name cannot be blank. That's our first error. Notice that I'm using this syntax to add a new item to the end of the error's array. Square bracket, and then equals. Next, if the subject menu name does not have length that matches minimum of 2 and maximum of 255, then add another error. Notice here that I'm using a maximum of 255 because my database will only hold strings that are only 255 characters long.

   Next I have one for position. For position, notice that I'm typecasting this as an integer to make sure that I'm working with an integer. Remember by default, form values are going to be strings. So I want to make sure I convert it to an integer and then I'm using that to compare it and see if it's less than or equal to zero, or if it's greater than 999. Now this second validation's, probably not strictly necessary, but again, remember my database has a requirement, the position can only be three digits long. That's how large I made it when I defined my database.

   So it won't accept a position larger than 999. And then I've got visible. Visible's also typecasting it to make sure that it's a string. It should be a string by default, but there's the chance that I might have accidentally converted it, either into an integer or a boolean before I called my validations. This ensures that it's a string, and I use has inclusion of. So if it's not has inclusion of, inside this array. Either the string's zero or one. It must be either true or false. So at the end it returns back the error's array.

   We just save that file. We pull this up. And you'll remember that update subject then takes that array that's returned and returns it as well. So now, we need to get that back as a result for update subject. Now normally update subject would return true. So we would expect this result to be true. But now we can test for that. If result is exactly equal to true, well then we know that it succeeded and we can do our regular redirect. But if it didn't succeed, then we know that we probably have errors.

   And so I'm going to make a new variable here called errors. Set it equal to the result. Now eventually we'll learn a nice way to look at the errors on the screen. But just for now, just for debugging purposes, let's use var dump, and let's just put the errors on the screen, even if it's ugly, just so we can see what they are. So let's come back over here. And in my subjects area, I'm going to click on the fourth one, commercial. I'll click edit. Let's just remove the name completely. Now it's blank. Click edit subject and look at there.

   I have two errors. Name cannot be blank. Name must be between 2 and 255 characters. Now each one gets listed. That may not be desirable. Let's go back to our query functions real quick. Inside validate subject. We also could write this differently. We could also say check and see if it's not blank. If it passes that validation, then, elseif. Check to see what the values are. Let's come back here and hit my back button. And let's hit edit subject again. Name cannot be blank. Now I just get one. Let's put it in one character.

   Let's put in a G. Let's hit edit subject. Now we get the name must be between 2 and 255 characters. I also got position must be greater than zero. That's kind of a quirk of the way I did this. If I go all the way back to here and try it again I won't get that. We'll talk about that later. Let's just do G. Edit subject. Name must be between 2 and 255. So that's the beginning of installing our validations. We still have some work to do but make sure that you understand the fundamentals of this. Make sure that you understand that we're calling validate subject both for insert and update, and that we're going to bail out of this function, if it turns out that we have errors.

   And that the validate subject is going to build up errors over time. Those can be anything we want. Any reason, any code we want, we can write in there. Custom code, standard code, as long as it appends an error, we'll be able to catch it, and display it back to the user.


### 8.3 Display Validation Errors

   In this movie, we'll talk about how you display any validation errors you have back to the user. The first thing about our validations errors is that we want to let the user know what they are with the idea that we want them to fix it and try again. So we want to show them the same form that they submitted again, and we want to give them back the values that they submitted to us, not the original database values, but the values they provided so they can see what's wrong. If we said something was blank, then it ought to look blank for them so they can fill it in. The second thing we want is we want to tell them what the errors were.

   There're a couple of ways we could point that out. We could indicate the errors at the top of the page as a bulleted list. Here's the five things you need to fix. That's the approach that we're going to take, and that's kind of what we started by doing in the last movie where we just built up a simple errors array of all the things that are wrong. There's also another approach where we could indicate the errors field by field. Doing the field-by-field approach means that your errors would need to be put into an associative array with a label so that you could keep track of which field had the error.

   Then, you could pull out only the errors for a specific field. We're going to be sticking with the first one, the list that we started in the last movie, but I want to quickly demonstrate how easy it is to use the field-by-field approach instead if you prefer it. You can see I still have my errors array, but when I go to add a message to that array, I don't just simply add it as a string to the array. Instead, I give it a label, in this case menu name. That make it an associative array, and that's the label I would use to access it. Then on my HTML page, anytime I want to know what that error is, I can just ask that errors array to return its menu name.

   Here you can see I'm using the null coalescing operator, the double question mark, it's from PHP 7, that basically says if there's a menu name, show it, if not, then use an empty string. You could also check to see whether that value is set instead if you didn't want to use the null coalescing operator. Here, I've got a condition that says if it's set, then we know there was an error, so we could output some HTML that might have, for example, an asterisk. And I've got some HTML and a class on it. I could use CSS to style it so it was red. Or in another scenario, you might want to say that if it's set, then we want to add a class to the text field itself, so that it turns red or something like that.

   It's really up to you. Then main difference is just that you're using an associative array instead of a simply array. So I'm in subjects, inside edit.php and right here I was coming up with my errors. I also had var dump here. I'm just going to comment that out. That's really good for debugging, but it's not something that we want to use here. If there're errors, then we're going to come down and show the rest of the page. We already saw that happens automatically, then exits out of this if condition up here at the top, and then our page will just start rendering. And it's going to go ahead and grab those values as long they're in that subject associative array.

   It'll go ahead and display those again for us. What we want is to display the errors. And in order to do that, I'm going to have the errors display right here above the form, php echo and I'm going to write a function that's going to do it for us in a consistent manner on all our pages, errors and we'll pass in our errors. That's it. Just by having display errors, it will take whatever our errors were and it will output them right at the top of our form.

   So now we need to have this function called display errors. Let's save that file and I'm going to go back into my regular functions.php and down here at the bottom, I'm going to paste in some code. This is included in your exercise files. It's called display errors, takes an errors array as an argument and you can see then it has a string of output. What we're going to do is if there are errors in that array, then we're going to add HTML to this string and finally return the string at the end. So this is just going through and you can see it's looping for each of the errors as error, it's going through and outputting each one of them.

   Notice that I'm also using HTML escape. Now I have control over these messages. So most of the time, this is an unnecessary step. However, it's completely conceivable that I might want to construct an error message which tells the user something about the data they gave me. I might want to say the name, blah blah blah is forbidden. In that case, that blah blah blah is whatever data that the user gave me. That's the data that they gave me and it's something I need to make sure that I escape so I don't accidentally put some harmful data in my HTML, so this is a good precaution.

   Okay, so now I have display errors to find. Let's try it out. Let's come back over here. Let's start form our Subjects page. If you're not there, go ahead and start on that main page. Let's click on Edit, and oops, you can see it says undefined variable errors. This is one important point. Let's go back to edit.php. Errors I'm calling here, but it hasn't been defined when I first come to the page. So you want to make sure that at the top of the page that we have errors defined. That in all cases, errors is going to exist, like this.

   Now even better, I'm going to take that and I'm going to move that into initialize.php so now not only do I create a database connection, but I make sure that there's always an errors variable available to me. It's just an empty array to start with, but it makes sure that it's initialized and I don't run into a problem with PHP. Let's come back over here. Let's reload our page. And now you'll see it doesn't give me an error. Let's remove commercial, that'll generate an error. Let's click Edit Subject. Please fix the following errors.

   Name cannot be blank. Now let's put a capital G in here. Let's click Edit Subject. Oops, now it came back and said position must be greater than zero also. What happened there? Look at our position. If you notice, the position doesn't have its list of numbers there. Why is that? If we go back and we look at edit.php, you'll see that also we had find all subjects and all this code is only being done when the page is first initialized. It's not being done when the form is submitting.

   So when we redisplay the form, those values aren't set. So we actually want to move those downward and out of the brackets here, for else. It's no longer in else statement. Any page which renders the rest of this page is going to find all the subjects. Let's go back and let's just start at the top. Click Menu, Subjects, Edit, let's just change this to a G, click Edit Subject. Now, you'll see that my position is still there. It did maintain it this time where it didn't before.

   So that's an important point. Anything that the form needs in order to be able to render either when it first loads or when the page reloads because there were errors, we need to make sure that we provide to it. So that's the initialization at the errors array and it's also making sure that we have a subject count available. Okay, so we've done that. Now for the edit form, let's do the same thing now for our new.php. So let's switch over to new.php. You will remember that new.php is going to take this page and it's going to submit it to create.php.

   Create.php is going to process the form values. We may get back a result here, which is an array of errors so we want to do some checking there. If result is exactly equal to true, then and we'll do these two lines, otherwise we want to what, reshow the form. So now let's think about the problem that we've created here. How do we reshow the form? And how do we reshow the form with our errors? That's what we really want.

   The same thing that we had before. Wherever we have the result, now we could redirect to the form to go back to the new page, but then we would lose our variable. The variable will be gone because a redirect, remember, is a brand new request. We could do something elaborate, like store this in the session or a cookie or something in order to get it there, but those all are a lot of more trouble than they're worth. I wanted us to keep this create.php page around long enough that I could show you this problem. So that you could see the problem that we've created by having two page submission.

   This is why single page submission, I think, is a better option. So we're actually going to take all of this code that we've got here and let's just copy this out of here. Let's go into new.php and right here at the top after we require it, let's paste all that in. So if it is a post request, then it will handle these form values and otherwise, we're not going to redirect. Instead, we're going to just redisplay the form. In addition to making that change at the top of the page, we also need to drop down here and change it that it actually submits to itself, subjects/new.php.

   Let's come back over here and let's try it all. Let's go back to our list. Click Create New Subject. Here's our page. Now when we try to create our new subject, let's create it with no menu name at all. That should create an error, Create Subject. Oop, we didn't display our errors. Where are our errors? Let's put those right here at the top. We have php echo display_errors, and we'll pass in that errors array. All right, let's go back.

   Let's try it again, Create Subject. Please fix the following errors. Name cannot be blank. Now we put in a G. Name must be between two and 255. We do still have our position here because we had already put that down here. It's already outside this if else clause. So else, let's just make a note here that says display the blank form. So now we've been able to redisplay the errors and redisplay the current values in the form so that the user can fix them.

   There's one final housekeeping measure. Let's switch back over, and since we're not using this create.php file anymore, let's actually click on it, and let's chose Delete. That'll delete it from our file, move it to the trash. Now it's gone from our project. 

### 8.4 Problems With Validation Logic

   In this movie, we will talk about problems which can occur in your validation logic. These can be problems with any conditional logic, but they're critical to get right when we're working with validations. Because if our validations fail us, then we lose control of the data coming into our application. First, I wanted to look at some comparisons that I think you're going to find are surprisingly true. In PHP, if we compare zero with false, it will return true. If we compare four against true, it returns true.

   The same is true for every single one of these. Take a moment, pause the movie if you need to. Spend some time looking at these, and realize how surprising some of these are. For example, in the right column, you'll notice that the number three is equal to the string "3 dogs". You'll also notice down at the bottom that the number 100 is equal to the string "1e2". What's going on here? These are all surprisingly true evaluations. In PHP if you compare these, it's going to come back in every single one of these cases and say yep, these look the same to me.

   Suprisingly True:

```
   0 == FALSE
   "abc" == TRUE"
   4 == TRUE
   100 == 100.00
   0 == NULL
   3 == "3 dogs"
   0 == "0"
   "1" == "01"
   0 == ""
   "123" == "    123"
   0 == "a"
   "123" == "+0123"
   "" == NULL
   100 == "1e2"
```

   Part of the reason why is because when PHP is doing a comparison, it does something called type juggling. That is, when two different items have different types, let's say one is a string, and one is an integer. Or one of them is null, and one of them is a Boolean. PHP has to decide how to compare two objects which have a completely different type. And it does that by trying to make some adjustments. So if we're comparing a string versus null, PHP converts null to be an empty string to allow you to still do the comparison.

   If you're comparing a Boolean against something else, then PHP attempts to convert whatever that something else is into a Boolean. So if that something else is the number zero, it'll turn it into false. But if that something else is a string with a username in it, it's going to consider that true. And if it's comparing number against something else, it's going to try to convert the other item to a number. That's why three is equal to three dogs. Because the string three dogs, when we tell PHP convert it to a number, its best guess is that we must mean that that's a three because it begins with a three.

   Basically, at some point down the line, PHP development team decided that it was better to try and juggle these to be able to allow comparisons between different types instead of just rejecting them altogether. The result is that we have a loosely-typed language, and loose comparisons. So basically, you should treat that double equals like it's roughly equal, or equal once PHP makes adjustment to the type so that they both match. When you really need equality, you want to use triple equals.

   That means that it's exactly the same. And the type juggling doesn't take effect. So here you can see zero is double equals to false. That'll return true. But zero triple equals false is going to return false. It's not equal in that case. We saw this earlier in our validation when we're working with has_string. The function strpos returns the position of a string inside another string. So for example, if we have a string abcde, and we ask it to find the position for a, it's going to return zero when that string is right at the beginning.

   Because it's a zero indexed string, just like our arrays are. So position zero is that first item, a. So what happens when we compare that versus false with the double equals? Well it returns true. It says, yep they look the same to me, zero and false. If we use triple equals though, it's not the same. It realizes that it's not exactly false. And that's an important distinction to make with this function because if the string is not found, it doesn't return a position, it returns false. So we definitely want to know the difference between zero and false.

   Another place where it's easy to go wrong with PHP, is working with the function empty. If you call the function empty on an empty string, on zero, on a string that contains zero, on null, on false, or on an empty array, those will all return true. Those are all considered empty by PHP. This is exactly why we did not use empty as a part of our is blank validation. Because entering a zero in a text field should not count as being blank.

   Suprisingly Empty: 

```
   "" 
   0 
   "0"
   null
   false
   array()
```

   There's a string in it, it's a zero. But PHP would consider it to be empty. Another place to be careful is just with working with basic operators. Less than, less than equals to, greater than, greater than or equal to, make sure that you've got those right. Sometimes using less than instead of less than and equal to, or vice versa can mess up your validation logic. The same thing is true when using joining operators. The double would join two different operators together, whereas the upright pipes means or. So it's one or the other.

   If you confuse them, then you break your logic. And the last place to be careful is when working with regular expressions. Regular expressions are extremely powerful, especially when working with preg match like we saw earlier when we were matching an email address. That symbolic language is powerful, but because it's a symbolic language, it's easy to overlook things and to make mistakes. It's also easy to forget about rare cases that could come up, and not allow for those in your validation logic. Either to be too aggressive so that you rule out some cases that should be allowed.

   Or to be not aggressive enough, so that cases slip through that you didn't mean to. I also have a tutorial called Learning Regular Expressions that can help you with the basics of regular expressions if you want to dive deeper. If you pay careful attention to your validation logic, and you watch out for these surprising cases, then you'll be able to exercise control over the data that's coming into your application. 

### 8.5 Challenge: Validations

   We're ready for another challenge assignment. This time, your challenge is to take the work that we've done in this chapter on validations, and apply it to your pages, so that we validate the data before we accept it and put it in the pages tables. You'll want to begin by writing a validation function, so that you can pass in an associative array that can take a look at that data and decide if there are any errors. And it will return any errors that come up. Don't forget that our pages table has columns for subject id and content that our subjects table did not have, so make sure you consider how you might want to validate those.

   Once you've got that function written, then you'll want to make use of it. You'll want to validate data before you create a page, and also before you update a page. Once you have those validations in place, and errors being returned, we'll be ready to display those errors back to the user. And you'll do that both on the new.php page and the edit.php page. Make sure that on those forms, that the user-submitted values are redisplayed, so that the user has the opportunity to adjust them and make changes before submitting them again. And also make sure that all the form options render correctly, especially any select option pull-downs that might be there.

   Make sure those have the right values, regardless of whether the user is first visiting the page, or whether they're seeing the page again because they got an error. Once you've got that completed, you can take a stab at a bonus assignment, to write a new validation. This one is called has_unique_page_menu_name, and it ensures that each menu name that we're given for a page is a unique value. That's going to require making a trip to the database. You're going to have to use everything you've learned about SQL to go to the database and find out if a value already exists there or not.

   And then, as a final advanced question, I want you to consider what validation might be useful before you deleted a subject record. Once you've taken a shot at this challenge, in the next movie, I'll show you the solution that I came up with. 

### 8.6 Solution: Validations

   Hopefully, you did well with the challenge assignment to do page validations. In this movie, I'm going to show you the solution that I came up with. The first thing that I did was I created a validate_page function which takes an associative array; that's all the page attributes that we're going to be working with later and I'm going to use an errors array to keep track of any problems. Then, I'm going to go through and I'm going to check and see various attributes; I'm going to check and see if subject id is blank; if it is blank, then I'm going to say subject cannot be blank. I'm going to do the same thing for menu name. I'm going to use the same kinds of things we had on subject that is not blank and also check that it's between two and 255 characters.

   Then for position, I'm going to check and make sure that it's greater than zero but less than 999. For Visible, I'm going to make sure it's either a zero or a one and then for the Content, I'm just going to make sure that the Content is not blank. Now, the Content is a text field and in MySQL, a text field can have almost unlimited content. You can put tons and tons of stuff in there. It's not limited to just 255 characters, so I'm not going to validate the length od the Content and then on the Subject id, I could potentially have some more validations that did things like check to make sure it's a number or that the subject already exists in the database, but I felt like that was overkill; I felt like I just wanted to make sure that some value had been submitted since it's probably going to be coming from a Select option, I should be getting back pretty decent data to begin with, but it's up to you; if you wanted to go further with that or if you did go further in solving this, that's fine.

   Once I had my validation together, then I needed to use it, so I needed to put it inside insert_page. I'm just going to call validate_page on all of those attributes that are in that page associative array; get back to the errors. If there are errors, then I'm going to return errors, so that this code never executes and then I'm going to do the same thing inside update_page. I'm going to call the same function, check and see if there are any errors or not and if so, return the errors back. Once I had my validation written and I had my insert_page and update_page functions using it, then I just needed to jump over to the pages themselves to make sure that everything would work there, so on new.php, you can see that I'm checking to see if the result is true; if it is, I'm doing the regular thing we were doing; we were getting back the id and we were redirecting to the show page, but if not, then I'm taking that result and assigning it to errors.

   In the else clause, I'm instantiating new page here, but I'm not doing all the find_all_pages business in there; I'm doing that afterwards to ensure that page count is available, so the form can render a list of positions appropriately. I believe you already had your forms submitting to itself. If that's not the case, you'll want to do that now. For the Subjects, we were submitting to create .php for a while; just make sure that this is doing a single page form submission and then take a look at the form to make sure that you are using those values all the way down the page; make sure that you've got each one in there and also make sure that you're escaping it for HTML.

   Then, I went to the edit.php page and I did the same thing. On this page, it's going to get the result; it's going to check and see if it's true. If it's not true, then we get back errors, so we're going to set the variable errors equal to that and then, you can see down here in the else clause, I'm finding the page; if it's not a post request, but in both cases, I'm going to find the page count regardless of whether I'm coming here initially or whether I'm coming here after having failed to submit a form. Once again, you can just browse down that page, make sure that you've got all of your form variables okay.

   I also used my display_errors function here above the form to display any errors and I did that back on new.php, as well, so both of those pages are displaying the errors. So, that was the core part of your challenge assignment. To be able to validate those page values and to return errors to the user if something went wrong and you can try it out to see if they work. I go to Create New Page; you can see here if I say that there's no Menu Name and I create a page, I get back name cannot be blank and content cannot be blank. Same thing, if I come over here and I do Edit and I take away the name, click Edit Page and you'll see name cannot be blank and content cannot be blank, so we know that they are working.

   In addition to these, I also gave you a bonus challenge assignment that was to create a function called has_unique_page_menu_name and it's a good exercise to do, because it teaches you a couple of things. First, it requires us to use our database skills to create some sql, to go to the database, to query and then find out the number of rows that we get back and that gives us a page_count and then we can see; is that page_count equal to zero? If that page_count is zero, then we know that the name that's being suggested is unique. It wasn't found in the database.

   Now, if we're just doing a new record request, that's fine, right? We want to take the current name, check and see and hopefully, we get back zero. However, if it's an existing record, well, then we're not going to get back zero, because that record already exists in the database; that name is already taken; if this validation runs again, we want to make sure that the one record we're seeing is not the same record they were updating, so, in that case, I'm going to pass in a second argument, which is current_id and I've just written MySQL to have this extra bit on it.

   It's going to say: "Select all from pages where menu_name is equal to the menu_name; the one that we're testing out to see if it's unique and also the id is not equal to the current id. Something besides this current id. I also made current_id default to be zero, so that if this id isn't provided or if it's a new record, then it'll just be looking for menu_name where id is not zero and all of our records should have an id of not zero, so that's a little bit of a gotcha there. It's a little bit different finding the uniqueness depending on whether this is a new record or whether it's an existing record.

   So, now that I have this has_unique_page_name, we're ready to actually install it and use it. I haven't done that yet, so what I want to do is come over here to query functions and inside validate page; let's go down to menu_name and I'm going to add a couple of lines here. It's going to find the current id; it's either going to be the page id or we'll go ahead and default to zero and then I will say if not has_unique_page_menu_name passing the menu_name and the current id, then the error will be "Menu name must be unique".

   See how that works? Let's try it out. Save the file. Let's come back here. Let's create a new page and let's put in the Menu Name of History. I already had one called History. Click create page and I know because my content is blank; it's not going to pass anyway, but notice here, menu name must be unique, right? It wasn't unique. If I did History1, right now my Menu Name is unique. That wasn't a problem, but it still didn't submit, because content can't be blank. So, I didn't put anything in the database either way, but we can see the validation kicking in.

   I go back to list; let's actually go to the History1 and let's edit the page. Content cannot be blank. It gave me an error here, but it didn't complain about the fact that History is already in the database, because that's what I would expect. In addition to the bonus assignment, I also gave you another advanced assignment. Really, it's a question for you to think about which is: "What validation could be useful to perform before we delete a subject record?" The answer is that we could validate that the subject does not have any pages which are assigned to it.

   Those pages would become orphaned if the subject was deleted. We could require that the user delete those pages or reassign them to another subject before we allow the subject to be deleted. The process would be similar to confirming that the page menu name is unique. It requires a trip to the database to see if any pages have a subject id that matches this subject. I wanted to throw this in to make sure that I didn't leave you with an impression that create and update are the only time that you're going to use validations. They are by far the most common, but here's an example where validation's before deleting a subject might also make sense. 


## 9 Prevent SQL Injection

### 9.1 Understand SQL Injection

   In this chapter, we're going to learn how to prevent a critical security issue known as SQL injection. Let's begin by getting an understanding of what it is. Let's first start with a simple example. Here's one of our insert SQL statements, inserting a new subject into the table. Notice that each value we're submitting has a single quote around it. This is required for any string values and as I mentioned before, it's a good idea to have it for all values. Now, imagine that our menu name that we're going to submit is going to be, "David's Story." Notice that the string contains a single quote.

   So when we go to build our SQL query and can catenate everything together, it's going to look like this. Take a moment, do you see the problem? This single quote in the string is not being treated as data, but instead as part of the SQL syntax. It's signaling to SQL that that's the end of the value. So the first value is David. Now we're probably going to get an error after that because it's expecting a comma to come next, not an S. This example is an innocent mistake that will create a bug. However, a hacker can use this same technique to do a lot of harm.

   Here's another example using an SQL select statement. This is the kind of query we use on our show, edit, and delete pages when we find an existing subject. We would get the ID from the URL string and if the ID is five, then the SQL would look something like this. But now imagine that a hacker comes to the page and changes the URL string, so that the value is no longer five, but instead is a long complicated string like this. When it gets used to build up that SQL query, it's going to do a lot more than we would expect.

   Notice that there's semicolons in there. The semicolons allow a new SQL statement to begin. So now it's going to read, select all subjects where ID is nothing. Then, insert into an admin's table, username and password that the hacker knows. And then, select all from subjects where ID equals five. Notice that it still selects a subject with the ID five at the end, so that the page doesn't break. But that's not strictly necessary. It actually doesn't matter to the hacker if the page ends up returning an error in the end, as long as their SQL command gets run before that error.

   This process is called SQL injection. SQL injection is when a hacker is able to execute arbitrary SQL requests. The hacker sends in a carefully crafted string that manipulates the standard SQL syntax and injects their SQL code into ours. That's why it's called injection. They're adding their code into our code. Any SQL queries which use dynamic data values are vulnerable. Here we showed it on an insert statement and on a select statement, but it can be really in any place in our SQL.

   It can be the where clause or the order by clause, any place where we're using dynamic data is potentially a vulnerability. It does not matter where the data originates either. It could come from the URL string, from the forms submitted data, from cookies or sessions, or even from data that's already stored in the database. SQL injection, or SQLi for short, is the single easiest way for someone to hack your website. There are lots of things to watch out for when you're developing for the web, but this is the big one. It's consistently ranked the number one security threat by OWASP, that's the Open Web Application Security Project.

   They rank different security threats and SQLi is always at the top of the list. Why? Well for one thing, it's easier for attackers to detect it and to exploit it. Our public website has public facing pages and it's constantly getting data from users to give them back customized information. And it gives access to large amounts of important data if they're able to hack it. So there's lots of stuff stored in the database. We rely on those and just keep cramming more and more data in them. That's a treasure trove for hackers.

   We typically grant our web applications a high level of access to that database data. And by hacking the web application, it allows the hacker to circumvent all of the normal access controls that we might have on that data. Hackers can use SQL injection to bypass the normal username/password style logins to get access to areas that they shouldn't. They can also use it to steal data, like usernames, passwords, credit cards, personal identifying information. When you hear about large data breeches where thousands of passwords are leaked, often it's the result of SQL injection.

   And they can alter data. A hacker could change orders that are transactions in the database. Or elevate their permissions to give them more access. Or they could just simply destroy data in order to sabotage a site. Here's a classic example. Imagine that I have that same SQL select statement before, but now the hacker gives us an ID that tells it to drop a table. So the constructed SQL will do exactly that. Notice that there's a dash dash at the end of the hacker string. That's an SQL comment indicator, and it tells SQL to ignore the rest of the line.

   So the final single quote in closing parenthesis is ignored. This is a common technique hackers use. So, now that we understand what SQL injection is, and we know how serious it can be, we need to learn how to protect ourselves from it. We're going to do that in the next movie. 

### 9.2 Sanitize Data for SQL

   In the last movie, we learned about SQL injection and we saw just how bad it can be. In this movie, we're going to learn what we can do about it. If you think about it, breaking the syntax of SQL is similar to how we saw that we saw that we could break the syntax of a URL or HTML for cross-site scripting. The solution here is similar to what it was for both of those, we need to convert characters which have special meaning to the SQL into data. We need to escape the string, that is transform it, so that any characters that have meaning and power are rendered harmless.

   In simple terms, the solution is to add a backslash before all single quotes in the string. That's how we escape them for SQL. For example, if we had a subject whose menu name was David's Story, we'd put a backslash in front of the single quote. Now, SQL would no longer think that it was a special control character in SQL, indicating the end of the value. It would see it just simply as being data. It's easy to add a slash by hand when we have control over the string, but with dynamic data, we need a more dynamic solution. We need code that will handle the escaping for us.

   In old versions of PHP there was a configuration called magic quotes that would try to escape these values for you while they were on their way to MySQL. Unfortunately, it created more problems than it solved. It was removed, and it's up to us to add it to our code. PHP gives us two functions to help. The first is addslashes. It takes a string as an argument, and then it returns a string with backslashes before characters that need to be escaped. That is a single quote, a double quote, a backslash, and a special character which represents null.

   There's another function, called mysqli_real_escape_string it does the same thing as addslashes and even more. It's part of the mysqli API, and it's designed specially for MySQL. It escapes single quote, double quote, backslash and null, but it also escapes line return and other odd control characters that you might not think about. It even takes into account the characters set that's being used with the database. Notice that the first argument to mysqli_real_escape_string is the database connection handle, then the string comes next.

   We have to remember to provide the database connection first, and it means that we can only use this function when we have a connection to the database. Whereas addslashes is available all the time, you can use it with this database or with other databases. If we're using MySQL, we're much better off using the mysqli_real_escape_string function. The only problem with the function is the name is super long and we're going to be using it over and over again. Imagine our insert statements where we need to add it to every single value we're putting into the database.

   Because of that, I like to define a function that has a shorter name that I can use instead. Here I've got a function called db_escape, it's taking two values, the connection and the string, and passing them right on in to mysqli_real_escape_string and returning the result. It's like writing an alias with a shorter name. Here's how you use it. We have our same SQL query, but now you can see that instead of just using the id, I'm first escaping the id using that new db_escape function which calls mysqli_real_escape_string. Now notice what happens when we have an attempted SQL injection.

   The result looks like this. I've highlighted the value to make it clearer. Since the single quote is now just data, the semicolon and the SQL statement that come after it are just data too. The end of the data string would be the next single quote. Let's try it in our project. First, let's see SQL injection in action. Here we are in our subjects area and I'm going to click on view to go to the commercial. I'm going to take a look at commercial, pick one that's further down the list, don't pick the first one. Here you can see I have id=5 up here and that's telling it which one to pick.

   I'm going to remove that five and I'm going to put a single quote and a space and then OR and then after that I'm going to put 'a'='a no single quote at the end, the reason why is because that's going to be provided in the code. Now let's hit return and see what we get. Notice I still got a valid page, it returned the subject that's in the first position. Why is that? Because the SQL that is constructed said, find subjects where page id is equal to blank, or, where a equals a.

   Just simple string a equals a. And a does equal a, it's always true, so it returned true for every single subject. It returned all the subjects in the database. My where clause became meaningless. When it returned all subjects from the database, it pulled back the first subject and that's what it returned instead. Now that we've seen it, let's try to prevent it. In our project code, you can see that in the private datebase.php file I've added a new function already called db_escape and that's just my shortcut alias for mysqli_real_escape_string.

   Now I want to use db_escape in my project. I'm going to come over to query_functions, that's the place where we're doing our queries, and let's look for values that need to be escaped. Let's start with find_all_subjects. If you look here, I'm constructing some SQL, but I'm not using any dynamic data so there's nothing to escape here. This is all text that's hard coded in here that I have total control over. If we look at find_subject_by_id you'll see that I'm using a dynamic value here. I'm passing in the id, in fact, the same function that's being called by that page we were just looking at, it's getting the id from the URL and it's using it to construct the query.

   This is exactly the kind of value that I need to escape. I'm going to use my db_escape function, remember that the first argument is the database connection, which I have assigned to db. Then I've got the value that I want to escape, that's string id. That's all there is to it. Now I've escaped that value and it should be harmless. Let's save it and let's go try it out. Come back over here, let's reload this same page. And look at that. You can see that we didn't get the subject back. If we were to take a look at this SQL, if we were actually to echo the SQL back, you would see that it has been escaped.

   Let's go over here real quick and let's just try that. Before we actually do this, let's do echo SQL, it's a good way to test our SQL. Let's reload the page. And there it is, select all from subjects where id equals, and you can see that it's got those backslashes in there. It escaped all those, now this is what it's looking for. It's looking for a subject where this is the id, and there is none. Let's comment that line out, and then I'm going to copy this db_escape, all the way past the comma, because I'm going to reuse that.

   Let's jump down here to, we don't have anything in validate_subject, insert_subject is the next time we're doing a query. Let's take a look at that, here's where we're constructing the SQL. Here are values that need escaping. I'm going to put one in here, db_escape, close the parentheses at the end, let's do the same thing here. Let's close both of those parentheses. Now those values are escaped. Incidentally, that's why I did break this up before and use the period to concatenate it together. I would have room to use this function. We've got that one. Let's come down to update subject and take a look at that one.

   Once again, here's values going into the database, they're dynamic values so we need to make sure they're escaped, not just the values being submitted, but even for that where clause. For each and every one, I just add my function. Let's scroll on down a little more. We have delete_subject, again that also takes this id. Delete from subjects where id equals, we want to make sure we escape that value as well. Now a good way to find all of these is to track them down in your application, make sure you don't miss one, is to do a global search for mysqli_query. I can do a global search in atom with command + shift + f that's often the case, and then I can hit return and it comes up and it finds all the places where it has mysqli_query.

   Notice that most of those are in my query_functions file, however there is one other one that's over here in my validations file. We want to make sure we don't miss that one. Let's jump over to validation_functions and it happens to be at the very bottom. Let's jump down to the bottom of the page. Has_unique_page_menu_name you can see I have mysqli_query right there. Click escape to take the search away. Let's just take current_id and let's do db_escape using the database connection and let's just copy that and let's do it to the menu_name as well.

   Now both of those values are being escaped. It's not actually that not hard to prevent MySQL injection. The trick is understanding what it is, and the need for it, and then making sure that you escape every single value without fail. That's where it's easy to slip up, is to forget to escape a value in one place. Now back in query_functions, I did it for all of the subject queries that we did. I have not done it yet for all of the page queries. As an exercise for yourself, go ahead and add that now. Escape all of the dynamic values that we're using in these page queries.

   Make sure that you've got all of them in your project. That every single dynamic value has been escaped properly to prevent SQL injection. 

### 9.3 Delimit Data Values

   Escaping dynamic data, like we did in the previous movie, is not the only step that's necessary to prevent SQL injection. In this movie, we'll discuss the importance of delimiting your database data using single quotes. There have been several times in previous chapters where I've mentioned that that's a good idea. Let's talk about why that is. In SQL when we're submitting values to the database, it's required that we put strings, dates, and times inside single quotes. That's how we delimit them and how SQL knows where they start and stop. However, SQL does not require that for numbers and Booleans.

   We can simply just provide a number or a Boolean in our query without single quotes around it. That applies for numbers that are integers, decimals, or floating point numbers. Now, if you do put quotes around a number or Boolean, then it means SQL will need to convert it to the correct type before we can use it. And there's a very small performance penalty when it does that, and I mean very small. You would probably never even notice, but I just want to mention that it is there. However, if you do put quotes around it, there's a large security benefit and that's because it prevents SQL injection.

   Let's take a look at an example. Here, I have the SELECT statement that we've been working with before and I'm even escaping the value that comes in for ID using our db_escape function from the last movie, but notice that my single quotes are now gone from around ID. I no longer got single quotes around it. I'm just escaping the values it gives us. So, let's say that an attacker comes and tries to inject code onto our site and they give us a string that looks something like this, 1; and then DROP TABLE payments.

   When that gets assembled together, it'll be escaped by a MySQL real escape string, that'll go through and put a backslash in front of any characters that have special meaning and in the end the SQL will look like this. Notice that because there was no special character involved, it didn't matter that I called escape string on it. It went ahead and just generated two SQL statements and that's because what real escape string is actually good at is keeping us inside the data delimiters. Once we've opened the data delimiter, it makes sure that we don't accidentally drop out of it.

   But if we never open one to begin with, then there's nothing it can do to help us. For that reason, it's my recommendation and a best practice to always put single quotes around all values, including numbers and Booleans. It helps prevent SQL injection and the reason why is because it opens up a data delimiter and then it forces attackers to write strings to circumvent those data delimiters. And if we're escaping our data properly, that's difficult for them to do. Now in fairness, this is not the only solution that you could use.

   Let me show you another one. Let's say that instead of escaping our data that instead I told PHP that it should typecast that value as being an integer. That's going to force it to be a number. That means that if an attacker gives us some kind of an injection string, it'll just get converted to a simple number. That number might be zero or it might be one which is what it would be in this case. So, it takes the string, it looks at it, converts it, and its best guess is that the string should be equal to one because it has a one at the beginning of it.

   So the injection string disappears in the process. Now, while this does render harmless, I don't know that we've actually helped ourselves in terms of performance because if you remember, URL strings and form data come into PHP as strings, even if they're numbers so that ID starts out as being a string, then here we're converting it into an integer and then when concatenate it back onto the SQL that we're building up, it turns it back into a string again so we've actually converted it a couple of different times. I don't know that that's actually any better than just providing a quoted value SQL and letting SQL do the conversion into the correct type.

   So my recommendation to you is to always quote all your values and to always escape them. 

### 9.4 Prepared Statements

   Prepared statements are a feature of MySQL and many other databases. They are an advanced concept, but I think it's worthwhile to introduce them so that you can understand what they are. The general idea is you give MySQL a template for a query that you want to run. And you indicate places where you can fill in the blanks later. You can see those here are indicated by the question marks. Then when we want to run the query, we call up our template, we fill in the blanks, and we tell MySQL to run it. Why do it this way? Well, it allows us to prepare the statement once and then reuse it again in the future.

   And that can make things faster. When any query runs, the database has to parse it and then develop a plan for running it. With prepared statements, the database doe this work one time, and then you can reuse that work for future queries where only the variables are changing. That can be faster. Especially if you're doing complex queries or repeating the query often. More importantly, prepared statements separate the query from the dynamic data. This completely eliminates the possibility of SQL injection and the need to escape dynamic data.

   The blanks where the data goes are clearly defined and an attacker can't break out of them to add extra SQL. The code and the data are kept separate. As I said, we aren't going to be using these in the tutorial, but they've come in to common usage in PHP. So you should at least recognize them. Let's take a quick peek at an example. Here, you can see the steps that it takes to be able to utilize a prepared statement in PHP. At the top, I'm building up an SQL string. This is the template string that I'm going to be working with. I'm not going to pass this in to MySQLi query anymore.

   Instead, I'm going to use it to create a template. And you can see that I've highlighted the question marks that are serving as placeholders for the data. I'm going to fill in those values later on. I take that string and I pass it in to MySQLi prepare along with the database connection. And now, I have a statement. That's my template that I'm going to be working with. When I'm ready to use it, then you can see that I call MySQLi statement bind param. I pass in the statement and then I'm going to pass in the options that I want to fill in the blank.

   In this case, username and password. Those are going to get dropped in where those question marks are. There's also a string that comes right before them that's a format string and it's indicating that both of these, the username and the password, are a data type string. That's why it's S and S. Once I've bound those into my statement, then I can execute it and then I call bind result which is a lot like getting the results out of it again. And you can see that I'm taking the results, which are the ID, first name, and last name that we selected in the very first line, and I'm binding those two variables.

   For ID, first name, and last name. Then finally, we fetch the result and we close it. So that's the outline of how they work. The nicest feature of prepared statements is that it's not possible to forget to escape a value or forget to put quotes around something. The security is built in to their very nature. But there are a few quirks with prepared statements that make them hard to pick up until you've had more experience with PHP and with querying databases in the standard way that we've been using. So for now, stick with using MySQLi query. Always use quotes and escape all your dynamic values.

   Because that will prevent SQL injection. Just don't forget to do it. Make it a habit and review all your code for SLQ injection prevention periodically. 

## 10 Conclustion

### 10.1 Next Steps

   I would like to thank you for taking PHP with MySQL Essential Training, part one, with me. We covered a lot of techniques together. We learned how to organize PHP pages, how to send and read values in the URL string, how to create and process forms, how to perform basic CRUD operations on the database, and how to validate and sanitize dynamic data. Together, these techniques are the building blocks for web development with PHP and MySQL. In fact, you should have the tools you need now to create a public site.

   It's just using these same skills and reading from the database. If you're feeling adventurous, I would encourage you to try it on your own. This course also continues in part two. And in part two, I will demonstrate how to build that public area, including features like page navigation, and techniques for managing HTML content in the database. I'll show you how to nest the admin area for our pages underneath the subject, and we'll use the session to keep track of messages, even when a page is redirected. And most importantly, we will add authentication to the admin area so that it requires a username and a password.

   I hope that you'll join me. Until then, happy coding. 

