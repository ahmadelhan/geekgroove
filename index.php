<?php
$data = [
    "certificates" => [
        [
            "name" => "Certificate in Introduction to Business",
            "description" => "Learn foundational concepts",
            "icon" => "certificates/certificate_thumbnail_1.png",
            "link" => "certificates/certificate-introduction-business.png"
        ],
        [
            "name" => "Certificate in Marketing Strategies",
            "description" => "Explore effective marketing tactics",
            "icon" => "certificates/certificate_thumbnail_2.png",
            "link" => "certificates/certificate-marketing-strategies.png"
        ],
        [
            "name" => "Certificate in Financial Management",
            "description" => "Master budgeting and forecasting",
            "icon" => "certificates/certificate_thumbnail_3.png",
            "link" => "certificates/certificate-financial-management.png"
        ],
        [
            "name" => "Certificate in Business Ethics",
            "description" => "Ethical decision-making",
            "icon" => "certificates/certificate_thumbnail_4.png",
            "link" => "certificates/certificate-business-ethics.png"
        ],
        [
            "name" => "Certificate in Innovation in Business",
            "description" => "Fostering creativity",
            "icon" => "certificates/certificate_thumbnail_5.png",
            "link" => "certificates/certificate-innovation-business.png"
        ]
    ],
    "badges" => [
        [
            "name" => "Explorer",
            "description" => "Discover 5 new topics",
            "icon" => "images/explorer.png",
            "earned" => true
        ],
        [
            "name" => "Achiever",
            "description" => "Complete 10 courses",
            "icon" => "images/achiever.png",
            "earned" => true
        ],
        [
            "name" => "Course Master",
            "description" => "Complete all available courses",
            "icon" => "images/course-master.png",
            "earned" => true
        ],
        [
            "name" => "Topic Guru",
            "description" => "Master 20 topics",
            "icon" => "images/topic-guru.png",
            "earned" => true
        ],
        [
            "name" => "Consistent Learner",
            "description" => "Learn something new every day for 30 days",
            "icon" => "images/consistent-learner.png",
            "earned" => true
        ],
        [
            "name" => "Learning Streaks",
            "description" => "Daily learning 5 topics in a row",
            "icon" => "images/learning-streaks.png",
            "earned" => true
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($data);
?>
