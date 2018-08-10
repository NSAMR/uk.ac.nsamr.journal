# HOWTO: Develop a new theme for JSAMR

## Introduction
If you only want to change the colours and styling of the bootstrap3 theme, then either edit an existing skin or (preferably) make a new one.

If you want to make a whole new OJS3 theme, you should make a new child of the bootstrap3 theme to retain bootstrap CSS capabilities. 

## Editing an existing skin (e.g. NSAMR, a child of the bootstrap3 theme)
Don’t edit files anywhere other than */public_html/ojs/plugins/themes/nsamr*, because doing so will make it very hard to pull in updates to bootstrap3 or OJS3. Other than that, just go nuts.

A guide to how to develop on your local machine is [here](https://github.com/NSAMR/uk.ac.nsamr.journal/blob/master/HOWTO:%20Develop%20for%20JSAMR%20on%20a%20local%20machine.md).

## Creating a new skin
This information is very brief -- google is your friend.

* Set up base bootstrap3 files
  * Add name of theme to:
    * BootstrapThreeThemePlugin.inc.php
    * locale/en_US/locale.xml
  * Add CSS to:
    * bootstrap-themes/nsamr/nsamr.less
  * Import correct CSS files to:
    * styles/nsamr.less
* Activate bootstrap3 theme and new skin in journal backend
  * Settings --> Website --> Plugins --> Installed Plugins : select “Bootstrap 3 Base Theme”
  * Settings --> Website --> Appearance --> Theme : select “Bootstrap 3 Base Theme”, then refresh 
  * Settings --> Website --> Appearance --> Theme : select new skin using radio buttons
  * Click save

## Creating a new theme
TODO


