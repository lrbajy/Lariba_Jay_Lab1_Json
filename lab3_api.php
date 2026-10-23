
<?php
header('Content-Type: application/json');

$team = [
    "group" => "Group 5",
    "section" => "BSIT-3K",
    "school" => "Pamantasan ng Lungsod ng Muntinlupa",
    "members" => [
        [
            "name" => "Jay Lariba",
            "location" => "Muntinlupa City, Philippines",
            "email" => "laribajay_bsit@plmun.edu.ph",
            "role" => "Application Developer"
        ],
        [
            "name" => "Justine Mike Dela Isla",
            "location" => "Muntinlupa City, Philippines",
            "email" => "delaislajustinemike_bsit@plmun.edu.ph",
            "role" => "Interface Developer"
        ],
        [
            "name" => "Ivan Paul Cerillo",
            "location" => "Parañaque City, Philippines",
            "email" => "cerilloivanpaul_bsit@plmun.edu.ph",
            "role" => "System and Database Developer"
        ],
        [
            "name" => "Jaymar Ysrael Azuelo",
            "location" => "Muntinlupa City, Philippines",
            "email" => "azuelojaymarysrael_bsit@plmun.edu.ph",
            "role" => "User Experience Designer"
        ],
        [
            "name" => "Aljon Patiño",
            "location" => "Muntinlupa City, Philippines",
            "email" => "patinoaljon_bsit@plmun.edu.ph",
            "role" => "Quality Tester"
        ],
        [
            "name" => "Jilord Dizon",
            "location" => "Muntinlupa City, Philippines",
            "email" => "dizonjilord_bsit@plmun.edu.ph",
            "role" => "Documentation Assistant"
        ],
        [
            "name" => "Mark John Capangpangan Lim",
            "location" => "Muntinlupa City, Philippines",
            "email" => "capangpanganmarkjohn_bsit@plmun.edu.ph",
            "role" => "Documentation Assistant"
        ],
        [
            "name" => "R-ney Totanes",
            "location" => "Taguig City, Philippines",
            "email" => "totanesrney_bsit@plmun.edu.ph",
            "role" => "Development Support"
        ]
    ]
];

echo json_encode($team, JSON_PRETTY_PRINT);
?>
