<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form method="post" novalidate>
        <!-- <p>Which colours do you like</p>
        <div>
            <input type="checkbox" name="colours[]" value="red"> Red
            <input type="checkbox" name="colours[]" value="green"> Green
            <input type="checkbox" name="colours[]" value="blue"> Blue
            <input type="checkbox" name="colours[]" value="yellow"> Yellow
        </div>

    <select name="marque[]" multiple>
        <optgroup label="America">
            <option value="bmw">BMW</option>
            <option value="audi" selected>Audi</option>
        </optgroup>
        <optgroup label="Europe">
            <option value="saab">Saab</option>
        </optgroup>
        
    </select>
    <div>
        text: <input type="text" name="surname" value="blogs">
    </div>

    <div>
      textarea:  <textarea name="content" rows="10">Hello </textarea>
    </div>

    <div>
        password: <input type="password" name="password">
    </div>

    <div>
        tel: <input type="tel" name="tel">
    </div>

    <div>
        url: <input type="url" name="url">
    </div>

    <div>
        date: <input type="date" name="date">
    </div>

    <div>
        time: <input type="time" name="time">
    </div>

    <div>
        week: <input type="week" name="week">
    </div>

    <div>
        color: <input type="color" name="color">
    </div>

    <div>
        email: <input type="email" name="email">
    </div>

    <div>
        month: <input type="month" name="month">
    </div>

    <div>
        range: <input type="range" name="range">
    </div>

    <div>
        hidden: <input type="hidden" name="hidden" value="1234">
    </div>

    <div>
        number: <input type="number" name="number">
    </div>

    <div>
        search: <input type="search" name="search">
    </div>

    <div>
        datetime-local: <input type="datetime-local" name="datetime">
    </div>

    <p>Which colour do you like?</p>

    <input type="radio" name="colours" value="blue" checked> Blue <br>
    <input type="radio" name="colours" value="red"> Red <br>
    <input type="radio" name="colours" value="green"> Green -->
    <!-- <fieldset>
        <legend>Article</legend>
        <div>
            <label for="title">Title</label>: 
            <input id="title" type="text" name="title" placeholder="Article tile" value="Example" readonly>
        </div>

        <div>
             Content: <textarea autofocus name="content" cols="40" rows="4" placeholder="Content"></textarea>
        </div>

        <div>
            <label for="lang">Language</label>
            <select name="lang" id="lang" disabled>
                <option value="en">English</option>
                <option value="fr" disabled>French</option>
                <option value="es">Spanish</option>
            </select>
        </div>
    </fieldset>
    
    <fieldset>
        <legend>Attributes</legend>
        <div>
            <input type="checkbox" name="visible" value="yes" id="visible"> 
            <label for="visible">Visible</label>
        </div>
    </fieldset>

    
    <fieldset>
        <legend>Colour</legend>
        <div>
        <input type="radio" name="colour" value="blue" checked id="colour_blue"> 
        <label for="colour_blue">Blue</label> <br>
        <input type="radio" name="colour" value="red" id="colour_red"> 
        <label for="colour_red">Red</label> <br>
        <input type="radio" name="colour" value="green" id="colour_green"> 
        <label for="colour_green">Green</label>
    </div>
    </fieldset> -->

    <div>
        postcode: <input name="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" title="Please enter a valid UK postcode">
    </div>
    <div>
        email: <input type="email" name="email" required>
    </div>
    <div>
        url: <input type="url" name="url">
    </div>
    <div>
        number: <input type="number" name="count" min=0 max=10>
    </div>

    

    <button>Send</button>
    </form>
</body>
</html>