# HOWTO: Develop for JSAMR on a local machine

## Local development
As usual when frameworks are used, developing locally requires you to build the site and serve it the same way as the web server does (PHP and Apache), otherwise you'll just see raw code. 

Even this needs a little more effort than usual because you need to serve the PHP from on top of a local MySQL database.

You'll need an AMP stack (Apache, MySQL, PHP).
* On a mac, use MAMP: https://www.mamp.info/en/
* On Windows, use WAMP (google is your friend).
* If you're using ubuntu then...well, you don't need my hints. 

Short version:
* Make a local MySQL database and import some data into it if you want to see any users or journals already made (try the bash script in NSAMR's repository "backups" to get a .gz)
* Check/update OJS config file at journal root
* Point local PHP server at journal root
* Press go
* Bonza

Longer version:
* Fork this repo and check out your fork (as usual)
* Start your AMP thing (MAMP or WAMP probably) pointing at the journal root folder
* Create a new MYSQL database on localhost (either via command line or via phpMyAdmin, which is linked to on the start page of MAMP)  
* Find the file $ojs_install_folder/config.php settings: 
    * This file needs to contain the settings for the database underlying the current build (obviously), so you need to change to the settings for your local environment. The MAMP start page will helpfully display the settings for connecting to your database. The db name is the name of the db you just made...yeah I just wrote that.
    * You also need to set the path to the folder ojs_uploads, and ensure that the folder is writable
    * To make setup easier to do over and over (and over and over) again, for now there exists config.inc.php.percy (for [@DeckOfPandas](https://github.com/DeckOfPandas)' personal desktop machine). Feel free to add your own. NOTE: DO NOT ADD THE REMOTE SERVER'S CONFIG FILE, AS THIS WILL DISPLAY THE DB PASSWORD PUBLICLY
    * When you're done with config.inc.php, change installed = Off to, well On, so you don't get harrassed by the automagical install script
* Navigate to the root folder in your browser
* If you followed the above, you now need to create a few (empty) folders manually. See "If stuck" below.
* If you installed OJS3 according to the instructions on the box then you won't need to do anything other than manually create the $ojs_uploads folder with the correct permissions, but because Helen has had to edit some core classes this really really really won't work for now. Note to self: just...don't. Urgh.
* When it's all set up, you'll see a vanilla journal site has loaded in your browser
* Grab the latest copy of the webserver's database (run the bash script in repo NSAMR/backups, and import to your local database -- phpMyAdmin can do this for you, or you can use the command line)
* Our journal with all settings will load on refresh
* Revel in own brilliance  

There are certainly better ways of arranging this than the above, but [@DeckOfPandas](https://github.com/DeckOfPandas) is lazy.  

## If stuck:
* OJS3 needs a few folders to exist (even if empty) and to have the correct permissions:
    * cache/
    * cache/t_cache
    * cache/t_compile
    * Possibly some others which I've forgotten (yay)
    
Without these being present with correct permissions (world writable), the journal index simply will not load after installation. You'll see a blank page. If this happens, create the above files and folders then try again before complaining to Helen.
* If you get a message saying something about failing to connect to the database, then your settings in config.inc.php are incorrect. Promise.
* When playing with the design of the site, you need to delete the caches a lot because, well, nobody knows. It's hell, it truly is.
    * I run this:
        <pre><code>rm -r *.php *.css HTML t_compile/*.php</code></pre>  
* Sometimes you need to do this in the admin part of the site (you need to be logged in as journal admin):  
    * Template files: Administration >> Clear Template Cache  
* If the SQL server won't start, try these things: [http://stackoverflow.com/questions/41309275/mysql-server-on-mamp-wont-start](http://stackoverflow.com/questions/41309275/mysql-server-on-mamp-wont-start)  
