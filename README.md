# Basic Form Processing with PHP

Put the files *page_design_form.html* and *display_page.php* on a web server. Make sure you can view the pages in a browser. When the user submits the form (*page_design_form.html*)  *display_page.php* should be displayed.

1. Make sure you understand why the browser navigates to *display_page.php* when the submit button is clicked. 
    + To test your understanding edit the code in *page_design_form.html* so that the University homepage is loaded instead. Once you've got this to work, set it back to load *display_page.php*.

2. In *display_page.php* think about how you can display the data the user has entered into the form i.e. if they type 'hello' into the first textbox, 'hello' should be displayed in *display_page.php*. 
    + Have a look at notes on form processing for similar examples
    + If you can get this to work display the text from the first textbox as a H1 element and the text from the second textbox as a paragraph element. 

3. Add the following radio buttons to the HTML form:
```html
<fieldset>
<legend>What colour background would you like?</legend>
<label for="bg_red">Red</label><input id="bg_red" type="radio" name="bg_colour" value="red">
<label for="bg_blue">Blue</label><input id="bg_blue" type="radio" name="bg_colour" value="blue">
<label for="bg_green">Green</label><input id="bg_green" type="radio" name="bg_colour" value="green">
<label for="bg_yellow">Yellow</label><input id="bg_yellow" type="radio" name="bg_colour" value="yellow">
</fieldset>

<fieldset>
<legend>What colour text would you like?</legend>
<label for="txt_red">Red<input id="txt_red" type="radio" name="txt_colour" value="red">
<label for="txt_blue">Blue<input id="txt_red" type="radio" name="txt_colour" value="blue">
<label for="txt_green">Green<input id="txt_red" type="radio" name="txt_colour" value="green">
<label for="txt_yellow">Yellow<input id="txt_red" type="radio" name="txt_colour" value="yellow">
</fieldset>

```
    + In *display_page.php* print out the colours the user has chosen. 
    + *display_page.php* already contains some CSS. Can you dynamically generate some of these CSS values so that the user’s choice of colours are used in the page.

4. Add the following select menu to the HTML page. 
```html
<fieldset>
<label for="font">Choose a font</label>
<select id="font" name="font">
<option value="Arial">Arial</option>
<option value="Arial">Verdana</option>
<option value="Courier">Courier</option>
<option value="Comic Sans MS">Comic Sans</option>
</select>
</fieldset>
```
+ In *display_page.php* dynamically generate the value for font-family so the page contents are displayed in the user's choice of font.  


##More Challenging Exercises
5. Modify your copy of *display_page.php* to add some validation.
    * Make sure the user has selected different colours for the background and the text
    * Add some simple validation to determine whether or not the user has completed all the fields.
        * Use the *isset()* function for the radio buttons.
        * For the text fields investigate how the *trim()* and *empty()* functions can help see php.net (http://php.net/manual/en/function.trim.php)  
    * Do some research into the *htmlspecialchars()* function and how it can help defend against malicious code.
6. Make a 'postback' form
    * Modify your application to create a 'postback' form, where the PHP code and the HTML form are in a single file.
    * If you can get this to work, think about how you re-populate the form with the values the user has entered previously. There is an example of the notes describing how to do this for a textbox. 
