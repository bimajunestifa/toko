<?php
// Data tentang CV (Biasanya ini bisa diambil dari database atau array)
$cv_data = [
    'name' => 'Bima Junestifa',
    'title' => 'Web Developer',
    'email' => 'bimajunestifa85@email.com',
    'phone' => '+62 82169667918',
    'address' => 'Ampang pondok mungil. Padang, Indonesia',
    'linkedin' => 'https://www.linkedin.com/in/bima-junestifa-9723b433a/',
    'skills' => [
        'PHP',
        'JavaScript',
        'HTML/CSS',
        'MySQL',
        'React.js',
    ],
    'education' => [
        [
            'degree' => 'Bachelor of Computer Science',
            'institution' => 'University of Indonesia',
            'year' => '2018',
        ],
        [
            'degree' => 'Master of Web Development',
            'institution' => 'Binus University',
            'year' => '2021',
        ],
    ],
    'work_experience' => [
        [
            'position' => 'Senior Web Developer',
            'company' => 'Tech Solutions',
            'years' => '2022 - Present',
        ],
        [
            'position' => 'Junior Web Developer',
            'company' => 'Creative Web Studio',
            'years' => '2019 - 2022',
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - <?php echo $cv_data['name']; ?></title>
    <link rel="stylesheet" href="kedua.css">
</head>
<body>
    <div class="cv-container">
        <header class="cv-header">
            <h1><?php echo $cv_data['name']; ?></h1>
            <p class="title"><?php echo $cv_data['title']; ?></p>
        </header>
        
        <section class="contact-info">
            <h2>Contact Information</h2>
            <ul>
                <li><strong>Email:</strong> <?php echo $cv_data['email']; ?></li>
                <li><strong>Phone:</strong> <?php echo $cv_data['phone']; ?></li>
                <li><strong>Address:</strong> <?php echo $cv_data['address']; ?></li>
                <li><strong>LinkedIn:</strong> <a href="<?php echo $cv_data['linkedin']; ?>" target="_blank">LinkedIn Profile</a></li>
            </ul>
        </section>

        <section class="skills">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($cv_data['skills'] as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="education">
            <h2>Education</h2>
            <ul>
                <?php foreach ($cv_data['education'] as $education): ?>
                    <li>
                        <strong><?php echo $education['degree']; ?></strong><br>
                        <?php echo $education['institution']; ?> - <?php echo $education['year']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="work-experience">
            <h2>Work Experience</h2>
            <ul>
                <?php foreach ($cv_data['work_experience'] as $job): ?>
                    <li>
                        <strong><?php echo $job['position']; ?> at <?php echo $job['company']; ?></strong><br>
                        <?php echo $job['years']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</body>
</html>




