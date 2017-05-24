# journal.nsamr.ac.uk
This is the git repo for the new Journal of the Student Association of Medical Research
* JSAMR index site: http://www.nsamr.ac.uk/journal/journal-index/index.php
* JSAMR machinery site: http://www.nsamr.ac.uk/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr

These sites are separate because [@DeckOfPandas](https://github.com/DeckOfPandas) couldn't get the OJS frontend to look super nice (hints welcome please).

## Journal software and design
JSAMR is built using Open Journal Systems 3 (OJS 3): https://pkp.sfu.ca/ojs/
The codebase https://github.com/pkp/ojs is included as a submodule.
The journal index site uses Bootstrap 3: http://getbootstrap.com/

Documentation provided by PKP:
* User Guides: https://pkp.gitbooks.io/ 

The "NSAMR" theme for OJS3 is child theme of the bootstrap3 extension of OJS3: https://github.com/NateWr/bootstrap3
The bootstrap3 codebase is included as a submodule.

NSAMR will contribute back to both OJS and bootstrap3, as well as to other Open Source frameworks ued here, via pull requests.

## License
JSAMR publishes Open Access articles under the terms of the Creative Commons Attribution (CC BY) License version 4.0, which permits use, distribution and reproduction in any medium, provided the original work is properly cited. The CC BY license can be viewed here: https://creativecommons.org/licenses/by/4.0/

Software written by NSAMR is released under the GNU General Public License version 3, as is its parent OJS3. The GNU GPLv3 license allows reuse and redistribution of software in whole or in part, but requires that anyone who distributes code or a derivative work must make the source available under the same terms. The text of the GNU GPLv3 license can be viewed here: https://github.com/NSAMR/journal.nsamr.ac.uk/blob/master/jnsamr/docs/COPYING

All images are either original to NSAMR, or are CC-BY licensed, and textures are freely available from https://www.transparenttextures.com/.

## Access
* All NSAMR's repositories are public  
* NSAMR's webserver has push access to this repo and to .uk.ac.nsamr, and requires a password to push and pull. ([@DeckOfPandas](https://github.com/DeckOfPandas) has this for now)  
* Helen also has push access from two machines
* People who can merge pull requests to this repo are Helen, Steph and Hamilton (Note: make these be links)
* If you want to add a public key from another machine, send [@DeckOfPandas](https://github.com/DeckOfPandas) your public key to be added. (You *must* set a password for using your machine's private key if you want public key access to this repo.)  

## Submitting work to JSAMR
JSAMR will be launched soon. In the interim period, please email it@nsamr.ac.uk if you want to submit to JSAMR.

## Ongoing development
Pull requests to any of our software are welcomed and appreciated.

# Step-by_step(ish) instructions to get going with development
Developing locally requires you to build the sites, otherwise you'll just see raw code. You need the same frameworks that serve the live sites.

## Development
Building the journal site locally needs a little more effort than usual because you need to serve the PHP from on top of a local database.

You'll need an AMP stack (Apache, MySQL, PHP).
* On a mac, use MAMP: https://www.mamp.info/en/
* On Windows, use WAMP (google is your friend).
* If you're using ubuntu then...well, you don't need my hints. 

Here are some pointers:    
* Check out this repo
* Point your AMP setup to the journal root folder
* Create a new MYSQL database on localhost (either via command line or via PhpMyAdmin, which is linked to on the start page of MAMP)  
* $ojs_install_folder/config.php settings:
 * This file needs to contain the settings for the database underlying the current build (obviously), so you need to change these depending on which machine you're running on and what you've named the local database etc. The MAMP start page will helpfully display the settings for connecting to your database.  
 * You also need to set the path to the folder ojs_uploads, and ensure that the folder is writable
 * To make setup easier to do over and over again, for now there exists config.inc.php.percy (for [@DeckOfPandas](https://github.com/DeckOfPandas)' personal desktop machine). Feel free to add your own. NOTE: DO NOT ADD THE REMOTE SERVER'S CONFIG FILE, AS THIS WILL DISPLAY THE DB PASSWORD PUBLICLY
 * Also in config.inc.php, change installed = Off to, well On, so you don't get harrassed by the install script
* Navigate to the root folder in your browser
* OJS3 also needs a few folders to exist and have the correct permissions: cache/, cache/t_cache, cache/t_compile and possibly some others which I've forgotten. Without these being present with correct permissions, the journal index simply will not load after installation. You'll see a blank page. If this happens, create those files and folders then try again before complaining to Helen
* If you get a message saying something about failing to connect to the database, then your settings in config.inc.php are incorrect
* There are certainly better ways of arranging this than the above, but [@DeckOfPandas](https://github.com/DeckOfPandas) is lazy.  
* If you install OJS3 according to the instructions on the box, you don't need to do anything other than create the ojs_uploads folder with the correct permissions, but because Helen has had to edit some core classes you really really shouldn't do this
* When it's all turned on, you'll see a vanilla journal has loaded. Bonza.
* Grab the latest copy of the webserver's database (run the bash script in repo NSAMR/backups, and import to your local database (phpMyAdmin can do this, or use the command line)
* Our journal with all settings will load on refresh
* Revel in own brilliance  

## If stuck:
* When playing with the frontend of the machinery site, you need to delete the caches a lot because, well, Sass, I think.
<pre><code>rm -r *.php *.css HTML t_compile/*.php</code></pre>  
* Sometimes you need to do this:  
  * Template files: Administration >> Clear Template Cache  
* If the mysql server won't start, try these things: [http://stackoverflow.com/questions/41309275/mysql-server-on-mamp-wont-start](http://stackoverflow.com/questions/41309275/mysql-server-on-mamp-wont-start)  

# Live deployment
To NSAMR committee members: The JSAMR website runs from a clone of this repo on NSAMR's shell server kindly hosted by Mythic Beasts. *Do not* edit files on that machine except by pulling from this git repo. NSAMR'S IT team has the access details for this server.
