# HOWTO: Test and deploy updates to the JSAMR website

Details here are deliberately vague for security reasons, but there are more details in our internal Google Drive, plus @DeckOfPandas is always on hand to help.

## Important

To JSAMR committee members: The JSAMR website runs from a clone of this repo on NSAMR's webserver. *Do not ever ever ever* edit website files on that machine except by pulling from this git repo. There are no exceptions to this.

## TEST	ON STAGING SERVER AGAINST DUMMY DB
TODO -- ask MB for new DB

## TEST ON STAGING SERVER AGAINST LIVE DB
1. git clone this repo into the relevant folder on the server
2. Set sensible values in config.inc.php so the test OJS installation can connect to the same DB
3. Marvel at changes

## TEST LIVE
1. Ensure that NSAMR/uk.ac.nsamr.journal :test branch has all the changes you want to deploy
2. Log in to the JSAMR webserver via SSH
3. Navigate to the root folder of the github repository TEST clone (which is usually identical to master)
4. `git pull origin test` (requires password for RSA key)
5. `git checkout test`
6. Have a look at your changes on the website (todo: add URL to test site here)
7. If e.g. styling changes haven't loaded, try the steps in "If stuck" section here: [https://github.com/NSAMR/uk.ac.nsamr.journal/blob/master/HOWTO:%20development.md]
7. If there are obvious problems, `git checkout master` to go back to previous version (yeah, slicccck), empty the caches again, and sort the problems locally first

## DEPLOY
1. Ensure that NSAMR/uk.ac.nsamr.journal :test branch has all the changes you want to deploy
2. Log in to the JSAMR webserver via SSH
3. Navigate to the root folder of the github repository LIVE clone
4. `git checkout -b safe-copy` (or something) in case you make a mess
5. `git checkout master`, then `git pull origin master` (requires password for RSA key)
6. Have a look at your changes, again trying things in "If stuck" before too much panicking
7. If unhappy, `git checkout safe-copy` (or whatever) and try again locally or on the test repo
8. If happy, feel smug and show off to rest of team
