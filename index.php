<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paragraph censurer</title>
    </head>
    <body>
        <main>
            <form action="censurer.php" method="GET">
                <label for="input-paragraph"></label>
                <textarea name="paragraph" id="input-paragraph" cols="30" rows="10"></textarea>

                <label for="input-word"></label>
                <input type="text" name="banned-word" id="input-word">

                <button type="submit">invia</button>
            </form>
        </main>
    </body>
</html>