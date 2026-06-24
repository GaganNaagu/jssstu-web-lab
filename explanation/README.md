# Web Technology Lab Explanations

This folder contains brief explanations for all the lab assignments and provides alternative implementations where necessary.

## Lab 1: Timetable
Uses basic HTML table tags (`<table>`, `<tr>`, `<th>`, `<td>`) combined with `rowspan` and `colspan` to create a grid. The background image is added via inline CSS with opacity simulation using `rgba`.

## Lab 2a: Feedback Form
Uses different input types such as `<input type="text">`, `<textarea>`, `<input type="checkbox">`, `<input type="radio">`, and `<select>` to gather user data.

## Lab 2b: Frames (Navigation & Content)
The main solution uses HTML5 `<iframe>` with CSS flexbox layout.
### Alternative: Using older `<frameset>` syntax (Deprecated in HTML5)
If your curriculum strictly requires the old `<frameset>` syntax, `index.html` would look like this:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Frameset Example</title>
</head>
<!-- Frameset replaces the body tag -->
<frameset cols="20%, 80%">
    <frame src="nav.html" name="navFrame">
    <frame src="content1.html" name="contentFrame">
</frameset>
</html>
```

## Lab 3: Row and Column Frames
The main solution uses HTML5 `<iframe>` with CSS Grid layout (`grid-template-columns` and `grid-template-rows`).
### Alternative: Using older `<frameset>` syntax
```html
<!DOCTYPE html>
<html>
<head>
    <title>Frameset Rows and Columns Example</title>
</head>
<frameset rows="50%, 50%">
    <frameset cols="50%, 50%">
        <frame src="frame1.html">
        <frame src="frame2.html">
    </frameset>
    <frameset cols="50%, 50%">
        <frame src="frame3.html">
        <frame src="frame4.html">
    </frameset>
</frameset>
</html>
```

## Lab 4: Resume
Uses a combination of HTML text formatting tags (`<b>`, `<i>`), lists (`<ul>`, `<ol>`), and heading tags (`<h1>`, `<h2>`) to structure a resume. Includes an image and links.

## Lab 5: CSS Properties
Demonstrates inline, internal CSS for controlling fonts (`font-style`, `font-variant`), background repeat (`background-repeat: repeat-x`), hyperlink pseudo-classes (`:link`, `:visited`, `:hover`, `:active`), and visibility properties (`visibility: hidden/visible`).

## Lab 6: Institute Web Page
Uses a linked external CSS file (`style.css`), internal `<style>` tags, and inline `style="..."` attributes to style an informational page about an institute.

## Lab 7a: Simple Calculator
Uses JavaScript functions attached to HTML buttons (`onclick`). Reads values using `document.getElementById().value`, parses them with `parseFloat()`, performs basic arithmetic, and outputs to a div.

## Lab 7b: Form Validation and Display
Uses JavaScript to validate fields (e.g., checking if empty, matching Regex patterns for email and phone numbers). Upon successful validation, it combines the values and displays them inside a readonly `<textarea>`.

## Lab 8: Average of Best Two Tests
Takes three numeric inputs. Validates that they are between 0 and 100. Puts them in an array, sorts the array descending, and averages the first two elements. Displays result using `alert()`.

## Lab 9: Registration Validation
Uses regular expressions (Regex) extensively in JavaScript to validate User ID length, Name alphabet requirements, strict password policies, and standard email format matching.

## Lab 10a: PHP Today's Date
Uses the built-in PHP `date()` function with format string `"d-m-Y"` to print the server's current date.

## Lab 10b: PHP Prime Number
Takes user input from an HTML form using POST method. Checks if the number is prime by looping from 2 up to the square root of the number. 

## Lab 11: PHP Store to File
Uses HTML textarea input and submits to a PHP script. Uses PHP `file_put_contents()` with `FILE_APPEND` flag to save the user's string data into `data.txt`.

## Lab 12: PHP Login Authentication
Takes username and password from form. Reads `users.txt` line by line using `file()`. Splits each line using `explode()` and compares the submitted credentials against the stored values.
