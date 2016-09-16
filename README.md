# Basic Form Processing with PHP

Put the files *page_design_form.html* and *display_page.php* on a web server. View the pages in a browser. When the user submits the form (*page_design_form.html*) then *display_page.php* should be displayed. 

1. Exercise 1
    * In *display_page.php* output the data the user has entered into the form. Start off by simply displaying the text the user has entered into the first text box. Once you've got this to work, output the other values from the form. 
    * Use some simple concatenation that will format this data e.g. generate headings, paragraphs etc.
    * The *display_page.php* already features some embedded CSS. Can you dynamically generate some of these CSS values so that the user’s choice of colours and fonts are used in the page.
2. Exercise 2 – Simple Validation
    * Modify your copy of *display_page.php* to add some validation. 
    * Make sure  the user has selected different colours for the background and the text
    * Add some simple validation to determine whether or not the user has completed all the fields. 
        * Use the *isset()* function for the radio buttons. 
        * For the text fields investigate how the trim() and empty() functions can help see php.net (http://php.net/manual/en/function.trim.php)  
    * Do some research into the *htmlspecialchars()* function and how it can help defend against malicious code. 

