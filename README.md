# journal.nsamr.ac.uk
This is the git repo for the new Journal of the National Student Association of Medical Research: http://www.nsamr.ac.uk/journal/journal-index/index.php .

The (deprecated) journal machinery is here: http://www.nsamr.ac.uk/journal/jnsamr/index.php/jnsamr .

JNSAMR is built using Open Journal Systems 3 (OJS3): https://github.com/pkp/ojs

## License
JNSAMR publishes Open Access articles under the terms of the Creative Commons Attribution (CC BY) License version 4.0, which permits use, distribution and reproduction in any medium, provided the original work is properly cited. The CC BY license can be viewed here: https://creativecommons.org/licenses/by/4.0/

Software written by NSAMR is released under the GNU General Public License version 3, as is its parent OJS3. The GNU GPLv3 license allows reuse and redistribution of software in whole or in part, but requires that anyone who distributes code or a derivative work must make the source available under the same terms. The text of the GNU GPLv3 license can be viewed here: https://github.com/NSAMR/journal.nsamr.ac.uk/blob/master/jnsamr/docs/COPYING

Forks and pull requests to any of our software are welcome. To submit to JNSAMR, please email it@nsamr.ac.uk in the interim period before the journal is fully set up.

## Deployment and development
The JNSAMR website runs from a clone of this repo on NSAMR's shell server kindly hosted by Mythic Beasts. *Do not* edit files on that machine except by pulling from this git repo.

NB: To view local changes, set up a local php server: php -S localhost:9999 (mac)

or

Install MAMP (mac) or WAMP (windows)

## Design
The journal frontend uses bootstrap. All images are either original to NSAMR, or are CC-BY licensed, and textures are freely available from https://www.transparenttextures.com/.

The "NSAMR" theme for OJS3 is an extra option built on to the bootstrap3 extension of OJS3 (https://github.com/NateWr/bootstrap3), based on the included "Flatly" theme.

Hints:
* When playing with the design of the OJS3 frontend
 - CSS: rm -r *.php *.css HTML t_compile/*.php
 - Template files: Administration > Clear Template Cache

## Access
NSAMR's server has public key access to this repo. If you want to add one from another machine, ask https://github.com/DeckOfPandass. You *must* use a password if you're adding your own key.
