<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input</title>
</head>
<body>
    <h1>Input your json below to see it converted to html.</h1> 
    <h1>Follow the guide below for help</h1>
    <form method="post" action="convert.php">
        <textarea name="input" id="input" cols="50" rows="30"></textarea><br>
        <input type="submit" value="Convert to html!">
    </form>
    <br>
    <pre>
{
    {
        "tag": "div",
        "attr": {
            "class": "container"
        },
        "child": {
            "tag": "p",
            "attr": {
                "class": "text",
                "id": "hello-world"
            },
            "value": "Hello World!"
        }
    }
}
    </pre>
    <p>would convert to</p>
    <pre>
        &lt;div class="container"&gt;
            &lt;p class="text" id="hello-world"&gt;Hello World!&lt;/p&gt;
        &lt;/div&gt;
    </pre>
</body>
</html>