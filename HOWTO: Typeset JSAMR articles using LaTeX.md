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

It is a programming language that was written specifically for publishers when typesetting books and journals. By introducing some computer code into the typesetting process it gives the typesetters complete control over the layout of a document and it allows easy, standardised replication of work, something which is difficult when using programmes such as InDesign.

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

### Units
Units should have a special spacing `\,` between the number and the unit e.g. `10\,m` for 10m and `10\,\%` for 10%. This stops the unit rendering after a linebreak, plus uses the correct spacing (smaller than normal space).

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

For long pieces of quoted text you can use a block quote, if you need to do this google it.

### 1st, 2nd, 3rd, 4th, 5th...
The st, nd, rd of 1st, 2nd, 3rd, 4th etc... needs to be made superscript. This can be done with the following code immediately following the text. E.g. ` 1$^{st}$ ` 

`$^{st}$`
`$^{nd}$`
`$^{rd}$`
`$^{th}$ `

### Italics, bold text
Use the code ` \textit{insert text here} ` for italics.
Use the code ` \textbf{insert text here} ` for bold text.

"et al" needs to be italicised every time when it is used in text by the author

### Hyphens
There is a difference between `-`, `--` and `---` in LaTeX code - look up the difference in google.

### Citations and references
JSAMR uses APA referencing.

Citations need to be inserted, this can be done by deleting the current citation and inserting a latex command. In Latex references are handles separately and are uploaded as a .bib file. Latex then uses reference codes to insert these references in text.

Each reference must be given unique identifier in the .bib file. This is commonly done as authorYEAR with the author name being in lowercase e.g. byrne2018

If an author has multiple references in the same year use a, b, c etc after authorYEAR e.g. byrne2018a, byrne2018b

Where there is no author name e.g. for an institution use the whole name of the institution in lower case with no spaces or punctuation then the year e.g. The Children’s Commissioner 2017 would be ` \cite{thechildrenscommissioner2017}` 

There are different types of references you can do.
* `\citep{byrne2018}` = `(Byrne, 2018)`
* `\cite{byrne2018}` = `Byrne (2018)`
* `\citeauthor{byrne}` = `Byrne`
* `\citeyearpar{byrne2018}` = `(2018)`

In e.g. `Jackson (2018) thinks this thing`, citation always needs to go straight after author name, the (2018) is the citation in this example.

For multiple citations e.g. `(Byrne, 2018; Jackson, 2017)` use a comma between author codes: `\citep{byrne2018,jackson2017}`

All bibtex citations should be listed as authorYEAR to make citations standardised.

### Figures
See the article template for examples of how to do figures, and see the overleaf.com tutorial on figures. Enter this code while in word to make your life easier. See overleaf for examples.

Examples:

#### \cite

Code:

``\cite{sampasakanyinga2015} showed that adolescents who reported an unmet need for mental health service support were statistically more likely to spend more than two hours a day on social media compared to those who have no identified unmet need for support.``

Builds:

``Sampasa-Kanyinga and Lewis (2015) showed that adolescents who reported an unmet need for mental health service support were statistically more likely to spend more than two hours a day on social media compared to those who have no identified unmet need for support.``

Exactly the same for multiple citations:

Code:

``In the last decade, there has been an upsurge in the number of adolescents described as `extreme internet users'. Technology and social media have recently become an integral part of 21$^{st}$ century adolescent life, with over 71\% reporting regularly viewing more than one social media site \citep{lenhart2015,walsh2017}.``

Builds:

``In the last decade, there has been an upsurge in the number of adolescents described as 'extreme internet users'. Technology and social media have recently become an integral part of 21st century adolescent life, with over 71% reporting regularly viewing more than one social media site (Lenhart, 2015; Walsh & Walsh, 2017).``

#### \citep

Code:

``In the last decade, there has been an upsurge in the number of adolescents described as `extreme internet users'. Technology and social media have recently become an integral part of 21$^{st}$ century adolescent life, with over 71\% reporting regularly viewing more than one social media site \citep{lenhart2015}``

Builds:

``In the last decade, there has been an upsurge in the number of adolescents described as 'extreme internet users'. Technology and social media have recently become an integral part of 21st century adolescent life, with over 71% reporting regularly viewing more than one social media site (Lenhart, 2015)``

### Abbreviations
Abbreviations are only to be used if there are three of the same abbreviation in the article, use the search function to check how many times they are used. Remove abbreviations and replace them with the full text if <3.

Headings should not have any abbreviations.

### Headings, and subheadings
Title - no hyphenation, use `\mbox{}` around the word which has automatically hyphenated to stop this from happening

Headings, subheadings - first letter capitalised, rest lowercase (unless proper noun), no abbreviations

Use the code:
`\section`
`\subsection`
`\subsubsection`

For the first level of heading, second level of heading, and third level of heading, respectively.

### Bullet points, lists
Put in the code for bullet points, and lists while in word as the bullet points won’t copy across and you might miss that they’re supposed to be in bullet point or list form.

An example of how this is done can be found in the Latex template.

### Numbers

Sentences shouldn’t start with a number in numericals it should start with a number in text e.g. ...end of previous sentence. 11 people... should be ...end of previous sentence. Eleven people...

Additionally, all numbers under 10 should be written as text e.g. 8 = eight

Thousands, should be separated by a comma e.g. 100500900 would be 100,500,900 (Latex may do this automatically, if not put the commas in)

## Typesetting guidelines
Once you have made all the changes you need to in word you then need to copy if across to into the LaTeX template.

Please keep to the formatting and styling demonstrated in the template LaTeX file you use as a base. Each template includes example figures and tables taking one and two columns. If you need to do something not demonstrated, please raise a github Issue.

1. Copy the jsamr-article-template or whichever template you require
1. Use the search function. Search: change me
1. Copy and paste the relevant bits of text into the document
1. Compile the document as you go along to check that everything is rendering okay and that you haven’t messed anything up by accident, there’s nothing worse than getting to the end of the document and to get an error message and the document won’t compile.
1. Compile after inserting figures or symbols to check that they are rendering correctly.
1. Paste the text from the exported references .bib file into the .bib file you are using for this document. Alternatively you can use the .bib file they have provided directly, just make sure that you change the name of the uploaded reference file to: references.bib so that it matches the bibliography file name at the very end of the template.
1. Check the references render correctly, and check that they match the information that the author included in their reference list.

### Author affiliations
All author affiliations should have their country listed.

### Peer-reviewed and Not-peer reviewed
If the document was Peer-reviewed you do not need to make any changes.
If the document was Not peer-reviewed you need to change Peer-reviewed to Not peer-reviewed.

### Dates submitted, revised, accepted
Dates for date submitted, revised, accepted can be obtained through the JSAMR software.

Click on the submission, click on ‘Editorial History’ in the top right. You will need to read through the log of what exactly has happened to the article to determine the specific dates as it does not present them in a nice way, but the date is there but requires a little bit of reading. If there is any confusion contact the submissions Editor who took that submission through the peer review process.

### Keywords
Key words should be in lowercase, and should be listed as subject code(s) first in alphabetical order, then MESH key words in alphabetical order. There should be no more than five keywords per manuscript.

For example: an article about the effect social media has on pre-existing mental health disease would have the key words: `psychiatry / mental health` `attention deficit disorder with hyperactivity` `body dysmorphic disorder` `depression` `social media`

The first key word: `psychiatry / mental health` is a JSAMR subject code and the rest are MESH key words.

#### Subject codes
JSAMR has a canonical list of all specialties, this is the main way we group articles from similar fields on our website:

anaesthesia / Intensive care medicine

cardiology / cardiovascular medicine

cardiothoracic surgery

clinical genetics

clinical immunology

clinical pathology

clinical pharmacology and therapeutics

dermatology

ear, nose and throat / otolaryngology

emergency / acute medicine

endocrinology and diabetes

gastroenterology

general internal medicine

general practice / primary care

general surgery

genito-urinary medicine

haematology

hepatobiliary medicine

histopathology

immunology

infectious diseases


medical education

medical humanities

medical technology

medicine for the elderly

neurology / neuroscience

neurosurgery

obstetrics and gynaecology

oncology

ophthalmology

oral and maxillofacial surgery

paediatrics and child health

palliative medicine

plastic surgery

psychiatry / mental health

public health

radiology / nuclear medicine

renal medicine

respiratory medicine

rheumatology

statistics

trauma / orthopaedics

urology

#### MESH keywords
Search the keywords authors have given against the MeSH database in pubmed. https://www.ncbi.nlm.nih.gov/mesh/

Select keywords which are relevant to the paper and that are in the MeSH database. Select up to 5 keywords in total. If the author has no provided keywords or the ones they have provided aren't appropriate try and come up with some which are relevant to the paper. Papers do not need to have 5 key words each.

### Header and footer
Check the Volume and Issue number are correct

If the author hasn't provided a running header, make one up from their title, it should be a concise version of the title.

In the bottom left it will say 2018 Vol 1 Issue 1 pp.x--y. Use `pp.x--y` multiple pages use `p.x` for single pages.

The `--` creates a larger dash between the page numbers

#### Page numbers
For front matter page numbers should be in roman numerals `\pagenumbering{Roman}` should be in their templates already. For other sections Latex will automatically do arabic numberals.

Once the entire issue has been compiled the Editor-in-Chief will draw up a list of the order of the articles and the page numbers that they will all have.

As not manuscript will start on page 1. You will need to change the starting page number. This is done with the code `\setcounter{page}{x}` where x is the first page of that document.

JSAMR publishes two issues a year e.g. Volume 1, Issue 1. (a.k.a. 1,1) and Volume 1, Issue 2 (a.k.a. 1,2) .

1,2 is technically a continuation of 1,1, as they are both in the same Volume. Therefore the page numbers for 1,2 continue from 1,1. E.g. if 1,1 finishes on page 33, 1,2 should start on page 34 (excluding front matter - that is why front matter is done in roman numerals, as it does not count towards page numbers). Please kindly remind your Editor-in-Chief of this if they do not do this.

## Creating the bibliography

We use BibTeX to generate the Bibliography for each manuscript, which requires that you make a .bib file that will be built into the pdf of the manuscript. There is a sample .bib file in each template folder. We recommend using [JabRef](http://www.jabref.org/) to manage bibliographies and hence the generation of this .bib file.

You must treat all special characters in references in a similar way to the main text, as previously described. E.g. `10%` in the title should be `10\%` (don't do the special spacing for units (`\,`) here).

### Authors
Must be done in the format: `{Matthew Byrne and Helen Jackson}` or `{Byrne, M. and Jackson, J}`

If there is a person with two surnames (which are not hyphenated e.g. von Damm) google how to make this display correctly

For institutes as authors encase them in double curly brackets e.g. `{{National Health Service}}` to prevent it from displaying as `N. H. Service`

### Capitalisation
Titles must be encased in double curly brackets {{}} to ensure that any words which are capitalisated display correctly.

### DOI or URL
If there is a DOI field delete the URL field

If there is no DOI field keep the URL field

### Remove superfluous info
For the citations, we do not want to display the month or any notes about it so delete `month = {},` and `note = {},` a lot of the other fields are not needed.

The only fields you really need for an @article is author, year, journal, volume, pages

There are also special citations types e.g @incollection which can be used for different roles, e.g. book sections

For reports, and other things not published in journals you can use @misc

For the full list of article types and how to do citations check here [https://en.wikibooks.org/wiki/LaTeX/Bibliography_Management](https://en.wikibooks.org/wiki/LaTeX/Bibliography_Management)

### Citations won't display
When you are compiling the document you may notice that some of the references do not render correctly.

There are two places where the error may be, and error in:
1. the citation code
1. the bib file

#### Troubleshooting Citation Code errors
Check the \bibliography{} code matches the name of the .bib file, name it references.bib and use the code \bibliography{references} as things like colons can break this link.

Sometimes it's just a single reference code that is incorrect, e.g. in the .bib file the code is byrne2018 but in the document it is Byrne18. Capitalisation causes errors as well as incorrect text. Try deleting references in turn and recompiling to see if you can isolate the reference which is causing the error. Then see if the codes match, or check the .bib file for that entry.

#### Troubleshooting .bib file errors
Sometimes special characters that cause things to break, or there's a comma after a field missed or a } missed. Or a mandatory field is missed.

If it's a global error, this may be because errors can happen if the .bib file as non jab ref source such as RefWorks, mendeley do not perfectly create .bib files. If you can import it into jabref try doing that to see if that can fix it. If that doesn't fix it the first step is to go through and delete all the crap that we don't need e.g. abstract, editor, file, issn, month, publisher (unless it's a book).

## If you are stuck:
LaTeX is a bit sneaky, and sometimes you will need to build a pdf multiple times before it will be done properly. In some cases you will need to "Trash the aux files" before trying to build again, so this is alwaysa safe place to start if you get errors.

When you are making the bibliography, you need to typeset with LaTeX, then BibTex once or twice, then LaTeX again quite a few times so all the cross references are built properly.

LaTeX requires the user to be proactive when fixing issues.
* Undo, undo, undo - first undo whatever mistake you’ve made, and try to figure out if you’ve missed something simple like a } or ].  You’ve probably deleted something by accident and simply redoing the edit you want to make will fix the problem.
* Sometimes the file will not compile. You can also use % before a line of code to ‘remove’ them from the compiled version to see if the error is in that line of code.
* If it’s related to how to insert a certain figure or type of text. Check the jsamr-article-template.tex file as most of the things we expect you to do are contained within that template, and can be copied across.
* Check if overleaf.com has a tutorial on the issue you have encountered.
* Search Google for a solution (but don’t install \package… without discussing with the Editor in Chief, as these can sometimes mess stuff up).
* Ask the Editor in Chief, once all the above options have been exhausted, with a little searching and re-attempts 95% of problems can be solved. 

## Extra Latex tips
### Don’t delete code
Use `%` instead of deleting code so that we don’t have to start again.

### File structure
File structure is important. Keep all files related to each submission separate. They must be within their own folder.
You can copy the sample-article folder, so that you have the correct base files.
Use hypens to separate words in filenames
All figures and images must me in the figures folder within the main article folder

### How to get rid of line numbers
If the author has written then document in latex it will probably have line numbers shown.
Put a `%` infront of `\usepackage{lineno}`

### Making comments
You can use `%` before text to make comments, these do not show in the final version and can be a good way of keeping track of the main sections and what things mean.
