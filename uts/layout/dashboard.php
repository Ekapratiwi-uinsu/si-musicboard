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
                    <a href="index.php" class="active">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=artis_tampil">Artist</a>
                </li>
                <li>
                    <a href="index.php?page=album_tampil">Album</a>
                </li>
                <li>
                    <a href="index.php?page=playlist_tampil">Playlist</a>
                </li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    
        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else {
                    include "main_dashboard.php";
                }
            ?>
        </section>

    	<footer>
            Copyright &copy; 2021 Eka Pratiwi
        </footer>
    </main>

</body>