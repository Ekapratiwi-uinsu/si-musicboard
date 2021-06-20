<head>
    <link rel="stylesheet" href="<?php ASSET; ?>layout/assets/css/style.css">
</head>
<body>
    <main>
    	<header>
            <img src="layout/assets/images/header.png" alt="[IMG]">
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>
            </ul>
        </nav>   
        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
                }
            ?>
        </section>
    	<footer>
            Copyright &copy; 2021 Eka Pratiwi
        </footer>
    </main>
</body>