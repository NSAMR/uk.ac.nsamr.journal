# journal.nsamr.ac.uk
This is the git repo for the new Journal of the National Student Association of Medical Research
* JNSAMR index site: http://www.nsamr.ac.uk/journal/journal-index/index.php
* JNSAMR machinery site: http://www.nsamr.ac.uk/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr

These sites are separate because [@DeckOfPandas](https://github.com/DeckOfPandas) couldn't get the OJS frontend to look super nice (hints welcome please).

## Journal software and design
JNSAMR is built using Open Journal Systems 3 (OJS 3): https://pkp.sfu.ca/ojs/
The codebase https://github.com/pkp/ojs is included as a submodule.
The journal index site uses Bootstrap 3: http://getbootstrap.com/

Documentation provided by PKP:
* User Guide: https://www.gitbook.com/book/pkp/ojs3/details
* Technical: https://pkp.sfu.ca/wiki/index.php?title=OJS_Documentation
*	Reference: https://pkp.sfu.ca/files/docs/quickreference/quickreference.pdf

The "NSAMR" theme for OJS3 is child theme of the bootstrap3 extension of OJS3: https://github.com/NateWr/bootstrap3
The bootstrap3 codebase is included as a submodule.

NSAMR will contribute back to both OJS and bootstrap3, as well as to other Open Source frameworks ued here, via pull requests.

## License
JNSAMR publishes Open Access articles under the terms of the Creative Commons Attribution (CC BY) License version 4.0, which permits use, distribution and reproduction in any medium, provided the original work is properly cited. The CC BY license can be viewed here: https://creativecommons.org/licenses/by/4.0/

Software written by NSAMR is released under the GNU General Public License version 3, as is its parent OJS3. The GNU GPLv3 license allows reuse and redistribution of software in whole or in part, but requires that anyone who distributes code or a derivative work must make the source available under the same terms. The text of the GNU GPLv3 license can be viewed here: https://github.com/NSAMR/journal.nsamr.ac.uk/blob/master/jnsamr/docs/COPYING

All images are either original to NSAMR, or are CC-BY licensed, and textures are freely available from https://www.transparenttextures.com/.

## Ongoing development
Pull requests to any of our software are welcomed and appreciated.


# Step-by_step(ish) instructions to get going

## Developing these sites locally
Developing locally requires you to build the sites, otherwise you'll just see raw code. You need the same frameworks that serve the live sites.

Building the journal-index site locally only requires PHP:
<pre><code>php -S localhost:9999</code></pre> (mac)

Building the journal machinery site locally needs a little more effort, and requires a local database:
* Requires an AMP stack (Apache, MySQL, PHP): download MAMP (mac): https://www.mamp.info/en/ or WAMP if you have windows (ask the internet). Ubuntu can Just Do this for you.
* Create a database (either via command line or via PhpMyAdmin, which is linked to on the start page of MAMP)
* $ojs_install_folder/config.php needs the settings for the database underlying the current build (obviously), so you need to change these for your own machine
* To make this easier to organise, there are two custom files included here so far: config.inc.php.onza (for NSAMR-deployed clone) and config.inc.php.percy ([@DeckOfPandas](https://github.com/DeckOfPandas) personal desktop machine). [@DeckOfPandas](https://github.com/DeckOfPandas) will delete the custom ones when more people are working on this.
* There are certainly better ways of arranging this than the above, but [@DeckOfPandas](https://github.com/DeckOfPandas) is lazy.

### Hints:
* When playing with the design of the OJS3 frontend on the machinery site, you need to delete the caches a lot because, well, Sass, I think.
<pre><code>rm -r \*.php \*.css HTML t_compile/\*.php</code></pre>  
* Template files: Administration >> Clear Template Cache  
 
## Live deployment
To NSAMR committee members: The JNSAMR website runs from a clone of this repo on NSAMR's shell server kindly hosted by Mythic Beasts. *Do not* edit files on that machine except by pulling from this git repo.

## Access
* These repositories are public  
* NSAMR's server has public key access to this repo, which requires a password to use ([@DeckOfPandas](https://github.com/DeckOfPandas) has this fo now)  
* Helen's personal machines have public key access too  
* If you want to add one from another machine, send [@DeckOfPandas](https://github.com/DeckOfPandas) your public key to be added. You *must* use a password if you're adding your own key.  

## Submitting work to JNSAMR
JNSAMR will be launched soon. In the interim period, please email it@nsamr.ac.uk if you want to submit to JNSAMR.
