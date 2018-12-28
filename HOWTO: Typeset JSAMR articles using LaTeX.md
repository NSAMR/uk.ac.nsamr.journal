# How to copyedit and typeset JSAMR articles using LaTeX

## Introduction
This is a guide to help Copy and Typesetting Editors in the process taking an article from a peer reviewed version to the final print version.

There are two tasks
1. Copy editing
1. Typesetting

Copy Editing concerns making sure there are no errors in the document. Typesetting concerns putting the raw text into the LaTeX template.

## Online repositories
The JSAMR repository lives here: [https://github.com/NSAMR/uk.ac.nsamr.journal/](https://github.com/NSAMR/uk.ac.nsamr.journal/).

Templates to use as a base for typesetting are in the folder [uk.ac.nsamr.journal/latex-templates](https://github.com/NSAMR/uk.ac.nsamr.journal/tree/master/latex-templates).

## First things first
LaTeX is a very powerful typesetting framework that can be used to generate beautiful documents easily, with consistent styling.

To get started:
* Download and install a LaTeX distribution for your computer
  * Mac: Download MacTeX from [http://www.tug.org/mactex/](http://www.tug.org/mactex/)
  * Windows: Download MiKTeX from here: [https://miktex.org/](https://miktex.org/)
* Test your setup by trying to build the project in a JSAMR template folder

If you're just getting started try [http://www.overleaf.com](http://www.overleaf.com) and read their tutorials here [http://www.overleaf.com/learn](http://www.overleaf.com/learn). Once you are confident using LaTeX please move to a desktop version as described above as this will allow greater scope for collaboration.

## Collaboration and workflow
When you are assigned to typeset a manuscript, download it from the JSAMR admin panel. Some manuscripts will already have been typeset in LaTeX by their authors (hurrah), and others should in theory be a text document (.doc or .docx) with the generic JSAMR styling to indiciate headings, subheadings etc.

To start typesetting, use a JSAMR LaTeX template as a base. **NEVER ALTER THE TEMPLATE FILES**. Instead, make a new folder in uk.ac.nsamr.journal/papers called issuenumber-yymmdd-author-papertitle and copy the files you need into it. These will include the relevant template file, JSAMR logos, and the final versions of files approved by the editor and reviewers uploaded through the website. Then you can copy and paste text from the author's manuscript into the relevant sections of your LaTeX file.

Please (regularly) commit your work to your own fork of the main repo. When you build the pdf for an article, don't commit it (they're quite large) -- the theory is that the pdf can always be rebuilt to look eactly the same from the LaTeX files you commit.

When you are happy with your typeset manuscript, submit a Pull Requests for review as per guide [HOWTO: Submit a Pull Request to JSAMR](https://github.com/NSAMR/uk.ac.nsamr.journal/blob/master/HOWTO:%20Submit%20a%20Pull%20Request%20to%20JSAMR.md).

After a typeset manuscript has been procisionally approved by someone else from JSAMR, which they can indicate by commenting on the Pull Request, you should upload the built pdf through the OJS system at the relevant stage of the Manuscript process. You can always submit revisions of your pdf this way too if you find you need to. Try to have a particular upload associated with a stated Pull Request so a document can always be rebuilt as you intended in case it is lost. (All uploaded files in the JSAMR system are backed up in multiple ways, but there is no harm in being extra safe as users can make errors when using the system, particularl when we're all so new to it).

When you have uploaded your typeset manuscript to the JSAMR system, click the "Send to production" tab.

## Copy editing process
Read through the word document and make the following changes as you go through it.
It is easier to insert some latex code while in word. Once you have made all changes upload the word document as a new file under the submission at journal.nsamr.ac.uk.

### Spelling
Correct any spelling mistakes, but do not alter grammar as this may change the meaning of what the author wanted to convey.

### Text symbols
If you see any non alphabet (i.e. a to z) character you may need to insert code so that it renders properly. Simple grammar will render such as full stops, commas, colons but more complex things will not, such as: ` %, $, £, & `. These will not render and instead you need to look up the code to make it render properly.

If you’re not sure if it will render, enter the symbol into LaTeX and see if it works, if it doesn't appear you will need to enter some code.

If the symbol doesn’t render, try using ` \ ` before it. Use ` \ `before symbols such as ` & ` and ` $` , as these have special computer language functions. Using a ` \ ` indicates to Tex that you do you not want to use it as computer language, but as plain text. Other symbols have special code for example ± is ` \pm` , £ is ` \textsterling` .

To summarise, if a symbol doesn’t render: google the code for it.

You can see all the maths symbols here: [https://oeis.org/wiki/List_of_LaTeX_mathematical_symbols](https://oeis.org/wiki/List_of_LaTeX_mathematical_symbols)

### Capitalisation
Check that things are capitalised correctly. Proper nouns should be capitalised. Conditions and diseases should be capitalised only if their common spelling is capitalised (Google it)

#### Capitalisation in titles and headings
Titles should only have the first letter in the first word capitalised, unless there is a reason to capitalise other words, e.g. proper nouns. E.g. ‘The capital city of England is London’. NOT ‘The Capital Of England Is London’.

References should be capitalised however their citation is, this should not be changed.

### Quotes
You can’t just quote something ` "I like science" `. It has to be ``` ``I like science'' ```.

You have to use ``` `` ``` instead of ` " ` for the first quote mark. Quotes should be done with double quote marks, colloquial terms should be done with single quote marks.

For the second quote mark you can use ` '' `.

The reason we use ``` `` ``` for the first and ` '' `for the second is so that the quote marks render in the correct direction.

Apostrophe’s in text editor’s such as microsoft word are not the same as apostrophe’s in LaTeX, copying a ` ’ ` into LaTeX from word will change it into a squigally apostrophe that doesn’t render and you'll see a load of nonesense letters where the apostrophe should be, instead you must use ` ' `

To fix this, once you have copied everything across to LaTeX, use the search and replace function to search for all squigally apostrophe’s (this can be done by copying and pasting an apostrophe from word into the search bar) and then replace all with the correct apostrophe type by clicking the apostrophe key. Then search for quote marks ` " `, and replace them as above.

THIS IS A VERY IMPORTANT STEP, IF QUOTE MARKS ARE MISSED IT COULD RESULT IN ACCIDENTAL PLAGIARISATION. This is because if you quote something and then remove the quote marks from it, it’s no longer a quote.

### 1st, 2nd, 3rd, 4th, 5th...
The st, nd, rd of 1st, 2nd, 3rd, 4th etc... needs to be made superscript. This can be done with the following code immediately following the text. E.g. ` 1$^{st}$ ` 
` $^{st}$
$^{nd}$
$^{rd}$
$^{th}$ `

### Italics, bold text
Use the code ` \textit{insert text here} ` for italics.
Use the code ` \textbf{insert text here} ` for bold text.

### Citations and references
JSAMR uses APA referencing.

Citations need to be inserted, this can be done by deleting the current citation and inserting a latex command. In Latex references are handles separately and are uploaded as a .bib file. Latex then uses reference codes to insert these references in text.

Each reference must be given unique identifier in the .bib file. This is commonly done as authorYEAR with the author name being in lowercase e.g. byrne2018

If an author has multiple references in the same year use a, b, c etc after authorYEAR e.g. byrne2018a, byrne2018b

Where there is no author name e.g. for an institution use the whole name of the institution in lower case with no spaces or punctuation then the year e.g. The Children’s Commissioner 2017 would be \cite{thechildrenscommissioner2017}

There are different types of references you can do.
* \citep{byrne2018} = (Byrne, 2018)
* \cite{byrne2018} = Byrne (2018)
* \citeauthor{byrne} = Byrne
* \citeyearpar{byrne2018} = (2018)

For multiple citations e.g. (Byrne, 2018; Jackson, 2017) use a comma between author codes: \citep{byrne2018,jackson2017}

All bibtex citations should be listed as authorYEAR to make citations standardised.
Figures
See the article template for examples of how to do figures, and see the overleaf.com tutorial on figures.

Enter this code while in word to make your life easier.

### Abbreviations
Abbreviations are only to be used if there are three of the same abbreviation in the article, use the search function to check how many times they are used. Remove abbreviations and replace them with the full text if <3.

Headings should not have any abbreviations.

### Headings, and subheadings
Title - no hyphenation, use \mbox{} around the word which has automatically hyphenated to stop this from happening

Headings, subheadings - first letter capitalised, rest lowercase (unless proper noun), no abbreviations

Use the code:
\section
\subsection
\subsubsection

For the first level of heading, second level of heading, and third level of heading, respectively.

### Bullet points, lists
Put in the code for bullet points, and lists while in word as the bullet points won’t copy across and you might miss that they’re supposed to be in bullet point or list form.

An example of how this is done can be found in the Latex template.

### Numbers

Sentences shouldn’t start with a number in numericals it should start with a number in text e.g. ...end of previous sentence. 11 people... should be ...end of previous sentence. Eleven people...

Additionally, all numbers under 10 should be written as text e.g. 8 = eight

Thousands, should be separated by a comma e.g. 100500900 would be 100,500,900 (Latex may do this automatically, if not put the commas in)


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



