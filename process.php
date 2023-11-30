<?php
// function displayFormValues()
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         foreach ($_POST as $key => $value) {
//             echo "$key: $value<br>";
//         }
//     }
// };
// 
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Webpage</title>
    <link rel="stylesheet" href="css/styles1.css" />
</head>

<body>

    <?php
    include 'headerM.php';
    ?>
    <div class="results">
        <div class="results__caption">
            <caption>Movie information Saved</caption>
        </div>
        <div>
            <label class="results__label"> Title: </label>
            <?php echo "$_POST[title]"; ?>
        </div>
        <div>
            <label class="results__label"> Description: </label>
            <?php echo "$_POST[description]"; ?>
        </div>
        <div>
            <label class="results__label"> Genre: </label>
            <?php echo "$_POST[genre]"; ?>
        </div>
        <div>
            <label class="results__label"> Subject: </label>
            <?php echo "$_POST[subject]"; ?>
        </div>
        <div>
            <label class="results__label"> Star: </label>
            <?php echo "$_POST[Star]"; ?>
        </div>
        <div>
            <label class="results__label"> Year: </label>
            <?php echo "$_POST[year]"; ?>
        </div>
        <div>
            <label class="results__label"> Production: </label>
            <?php echo "$_POST[Production]"; ?>
        </div>
        <div>
            <label class="results__label"> Main Director: </label>
            <?php echo "$_POST[coStar]"; ?>
        </div>
    </div>
    <?php
    include 'footerM.php';
    ?>
</body>

</html>