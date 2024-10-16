<?php
$films = [
    'Le nouvel amour de coccinelle' => ['Ivor Berry', 'Ken Berry', 'Helen Hayes'],
    "L'espion aux pattes de velour" => ['Hayley Mills', 'Dean Jones', 'Dorothy Provine'],
    'Un candidat au poil' =>  ['Dean Jones', 'Tim Conway', 'Suzanne Pleshette']
];

foreach ($films as $key => $film) {
echo ('Dans le film ' . '"' . $key . '"' . ', ' . 'les principaus acteurs sont ' . ' ' . $films [$key] [0] . ', ' . $films [$key] [1] . 'et ' . $films [$key] [0] . ',');?><br>
<?php
}
?>