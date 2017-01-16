# journal.nsamr.ac.uk
This is the git repo for the new Journal of the National Student Association of Medical Research
* JNSAMR index site: http://www.nsamr.ac.uk/journal/journal-index
* JNSAMR machinery site: http://www.nsamr.ac.uk/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr

These sites are separate because [@DeckOfPandas](https://github.com/DeckOfPandas) couldn't get the OJS frontend to look super nice (hints welcome please).

JNSAMR is built using Open Journal Systems 3 (OJS3): https://github.com/pkp/ojs

## License
JNSAMR publishes Open Access articles under the terms of the Creative Commons Attribution (CC BY) License version 4.0, which permits use, distribution and reproduction in any medium, provided the original work is properly cited. The CC BY license can be viewed here: https://creativecommons.org/licenses/by/4.0/

Software written by NSAMR is released under the GNU General Public License version 3, as is its parent OJS3. The GNU GPLv3 license allows reuse and redistribution of software in whole or in part, but requires that anyone who distributes code or a derivative work must make the source available under the same terms. The text of the GNU GPLv3 license can be viewed here: https://github.com/NSAMR/journal.nsamr.ac.uk/blob/master/jnsamr/docs/COPYING

## Design
The journal frontend uses bootstrap. All images are either original to NSAMR, or are CC-BY licensed, and textures are freely available from https://www.transparenttextures.com/.

The "NSAMR" theme for OJS3 is an extra option @DeckOfPandas built on to the bootstrap3 extension of OJS3 (https://github.com/NateWr/bootstrap3), based on the included "Flatly" theme.

## Ongoing development
Pull requests to any of our software are welcomed and appreciated.

## Building the sites locally
Building the journal-index site locally:
* php -S localhost:9999 (mac)

Building the journal machinery site locally:
* Requires an AMP stack: download MAMP (mac) or WAMP (windows)
* config.php has different settings for the database depending on whether it's built locally or on the server
* To make this easier to organise, there are two files: config.php.remote and config.php.local -- just remove the ending from whichever one you want. (NB: this needs to be done on the server after git pull). There are better ways than this, but [@DeckOfPandas](https://github.com/DeckOfPandas) is lazy.

Hints:
* When playing with the design of the OJS3 frontend on the machinery site, you need to delete the caches a lot because, well, Sass, I think.
 - CSS: rm -r *.php *.css HTML t_compile/*.php
 - Template files: Administration > Clear Template Cache
 
## Live deployment
To NSAMR committee members: The JNSAMR website runs from a clone of this repo on NSAMR's shell server kindly hosted by Mythic Beasts. *Do not* edit files on that machine except by pulling from this git repo.

## Access
* NSAMR's server has public key access to this repo, and requires a password to pull (ask Helen)
* Helen's personal machines have public key access too
* If you want to add one from another machine, ask [@DeckOfPandas](https://github.com/DeckOfPandas). You *must* use a password if you're adding your own key.

## Submitting work to JNSAMR
To submit to JNSAMR, please email it@nsamr.ac.uk in the interim period before the journal is fully set up.
