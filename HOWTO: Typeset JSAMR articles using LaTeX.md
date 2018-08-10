# How to typeset JSAMR articles using LaTeX

## Introduction
The JSAMR repository lives here: [https://github.com/NSAMR/uk.ac.nsamr.journal/](https://github.com/NSAMR/uk.ac.nsamr.journal/).

Templates to use as a base for typesetting are in the folder [uk.ac.nsamr.journal/latex-templates](https://github.com/NSAMR/uk.ac.nsamr.journal/tree/master/latex-templates) (shocker).

## First things first
LaTeX is a very powerful typesetting framework that can be used to generate beautiful documents easily, with consistent styling.

To get started:
* Download and install a LaTeX distribution for your computer
  * Mac: Download MacTeX from [http://www.tug.org/mactex/](http://www.tug.org/mactex/)
  * Windows: Download MiKTeX from here: [https://miktex.org/](https://miktex.org/)
* Test your setup by trying to build the project in a JSAMR template folder

TODO: JSAMR's quick n dirty guide to getting started with LaTeX.

## Collaboration and workflow
When you are assigned to typeset a manuscript, download it from the JSAMR admin panel. Some manuscripts will already have been typeset in LaTeX by their authors (hurrah), and others should in theory be a text document with the generic JSAMR styling to indiciate headings, subheadings etc. 

To start typesetting, use a JSAMR LaTeX template as a base. NEVER ALTER THE TEMPLATE FILES. Instead, make a new folder in uk.ac.nsamr.journal/papers called issuenumber-yymmdd-author-papertitle and copy the files you need into it. These will include the relevant template file, and the final versions of files approved by the editor and reviewers uploaded through the website. Then you can copy and paste text from the author's manuscript into the relevant sections of your LaTeX file.

Please (regularly) commit your work to your own fork of the main repo. When you build the pdf for an article, don't commit it (they're quite large) -- the theory is that the pdf can always be rebuilt to look eactly the same from the LaTeX files you commit.

When you are happy with your typeset manuscript, submit a Pull Requests for review as per guide [HOWTO: Submit a Pull Request to JSAMR](https://github.com/NSAMR/uk.ac.nsamr.journal/blob/master/HOWTO:%20Submit%20a%20Pull%20Request%20to%20JSAMR.md).

After a typeset manuscript has been procisionally approved by someone else from JSAMR, which they can indicate by commenting on the Pull Request, you should upload the built pdf through the OJS system at the relevant stage of the Manuscript process. You can always submit revisions of your pdf this way too if you find you need to. Try to have a particular upload associated with a stated Pull Request so a document can always be rebuilt as you intended in case it is lost. (All uploaded files in the JSAMR system are backed up in multiple ways, but there is no harm in being extra safe as users can make errors when using the system, particularl when we're all so new to it).

When you have uploaded your typeset manuscript to the JSAMR system, click the "Send to proofreading" tab.

TODO: Who will proofread, who will add proofreaders, etc

## Typesetting guidelines

Please keep to the formatting and styling demonstrated in the template LaTeX file you use as a base. Each template includes example figures and tables taking one and two columns. If you need to do something not demonstrated, please raise a github Issue.

At some point there will be a jsamr_article.sty class for each manuscript type that will be imported in the LaTeX file which will take out some of the complicated-looking header information, but don't worry about that for now.

## Creating the bibliography

We will use BibTeX to generate the Bibliography for each manuscript, which requires that you make a .bib file that will be built into the pdf of the manuscript. There is a sample .bib file in each template folder. Helen recommends using [JabRef](http://www.jabref.org/) to manage bibliographies and hence the generation of this .bib file.

TODO: Write detailed information about how to enter data for each cited item

## If you are stuck:
LaTeX is a bit sneaky, and sometimes you will need to build a pdf multiple times before it will be done properly. In some cases you will need to "Trash the aux files" before trying to build again, so this is alwaysa safe place to start if you get errors.

When you are making the bibliography, you need to typeset with LaTeX, then BibTex once or twice, then LaTeX again quite a few times so all the cross references are built properly.

For more, ask Helen or google.

Happy typesetting :)



