<?php
    $paragraphOG = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate a, quam excepturi adipisci, esse magnam molestiae doloribus nulla tempore odio laudantium corrupti, sit ullam libero. Dolor, reiciendis. Blanditiis quam dicta delectus reiciendis architecto, exercitationem, vero ipsa commodi, adipisci ipsam voluptatem modi dolorum eius enim! Illo reprehenderit alias, culpa adipisci nam beatae voluptatibus reiciendis aspernatur aperiam totam esse dolor quasi incidunt quam quibusdam! Animi, delectus inventore nihil doloribus at eos illo accusantium consectetur excepturi dignissimos nobis repudiandae perferendis impedit aut id porro optio? Ipsa esse odit porro eligendi earum, quaerat a minima quidem nihil aut dicta assumenda tempore similique. Quod, dolor!';

    $wordToHide = $_GET["hide"];

    $paragraphCensored = str_replace($wordToHide, '***', $paragraphOG);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <p> <?php echo $paragraphCensored ?> </p>
    
    <div style="text-align: center">
        <div> <strong>Paragraph length:</strong> <?php echo strlen($paragraphCensored) ?> </div>
        <div> <strong>Censored word:</strong> <?php echo $wordToHide ?> </div>
    </div>
</body>

</html>