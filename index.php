<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K9-PLTN Panel</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/k9pltnblk.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="vibe">
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.html");
        exit();
    }
    ?>
    <div class="bg"></div>
    <div class="sidebar">
        <img class="cover" src="images/k9pltnblk.png" alt="panelcover"> <br><br>
        <ul class="sidebarlist">
            <li><a href="home.html" target="frame"><i class="fa-solid fa-house" id="box"></i> Home</a></li>
            <!-- Collapsible Menu -->
            <li class="collapsible">
                <a href="paperwork.php" target="frame"><i class="fa-solid fa-box-archive" id="box"></i> Paperwork</a>
                
            </li>
            <li><a href="https://cfmb.booskit.dev" target="frame"><i class="fa-solid fa-book" id="box"></i> Manual</a></li>
            <li><a href="https://police.lsgov.us/viewtopic.php?p=1097#p1097" target="frame"><i class="fa-solid fa-address-book" id="box"></i> Roster</a></li>
            <li><a href="caselaw.php" target="frame"><i class="fa-solid fa-gavel" id="box"></i> Caselaw</a></li>
            <li><a href="https://mypd.joinlapd.com"><i class="fa-solid fa-plus" id="box"></i> myPD+</a></li>
            <li class="logout"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            
        </ul>
    </div>   
    <div class="content"><iframe name="frame" id="iframeContent" src="home.html" frameborder="0" ></iframe></div>

    
</body>
</html>
