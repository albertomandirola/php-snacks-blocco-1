<?php
$matches = [
    [
        'home' => 'Warriors',
        'guest' => 'Hawks',
        'home_points' => 134,
        'guest_points' => 112
    ],
    [
        'home' => 'Mavericks',
        'guest' => 'Suns',
        'home_points' => 109,
        'guest_points' => 132
    ],
    [
        'home' => 'Rockets',
        'guest' => 'BlazersTrail',
        'home_points' => 131,
        'guest_points' => 137
    ],
    [
        'home' => 'Spurs',
        'guest' => 'Thunder',
        'home_points' => 114,
        'guest_points' => 140
    ],
    [
        'home' => 'Bucks',
        'guest' => 'Cavaliers',
        'home_points' => 126,
        'guest_points' => 116
    ],
    [
        'home' => 'Heat',
        'guest' => 'Grizzlies',
        'home_points' => 96,
        'guest_points' => 105
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($matches as $match) {  ?>
    <div class="match_infos">
        <h3><?php echo $match['home']." - ".$match['guest'];  ?></h3>
        <h5> Final score: </h5>
        <p><?php echo $match['home_points']." - ".$match['guest_points'];  ?></p>
    </div>
<?php } ?>
    
</body>
</html>