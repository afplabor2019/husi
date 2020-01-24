<?php include_once('head.php'); ?>

<main class="container">

<!--#region functions-->
    <?php    
    function is_post() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function html_errors($key) {
        global $errors;
    
        $html = "";
        if (isset($errors[$key])) {
            foreach ($errors[$key] as $error) {
                $html .= "<p class='input-error'>$error</p>";
            }
        }
        return $html;
    }
 

    function url($page = 'home', $params = []) {
        $url = "?p={$page}";
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $url .= "&$key=$value";
            }
        }
        return $url;
    } ?>


<!--#region ellenőrzések-->
    <?php  
    $errors = [];
    if (is_post()) {
        $username = $_POST['username'];
        $time = $_POST['time'];
        $wish=$_POST['wish'];
        $problem = $_POST['problem'];

        $max_string_lenght = 255;
        if ($username == null) {
            $errors['username'][] = "A felhasználónév megadása kötelező.";
        } else {            
            if (strlen($username) > $max_string_lenght) {
                $errors['username'][] = "A felhasználónév nem lehet hosszabb,mint {$max_string_lenght}!";
            }
        }

        if ($time == null) {
            $errors['time'][] = "Az idő megadása kötelező.";
        } else {
            if (!is_numeric($time)) {
                $errors['time'][] = "Az idő egy szám kell, hogy legyen.";
            }           
        }
        
    ?>






<!--hozzáadás-->
    <?php
            $db = mysqli_connect('localhost', 'root', '', 'husi_chat');
            if (count($errors) == 0) {
                $sql = $db->prepare("INSERT INTO `kerdoiv` (`Felhasznalonev`, `Ido`, `Javaslat`, `Problema`) VALUES (?, ?, ?, ?)");
                $sql->bind_param("siss", $username, $time, $wish, $problem);
                $sql->execute();
                $sql->close();                
            }
        }
    ?>


<div class="page">
    
<!--#region form-->
    <form class="form" action="Kerdoiv.php" method="POST">
    <div class="head">
        <h1>Kérdőív</h1>
    </div>
        <div class="form-group<?php echo isset($errors['username']) ? " has-error" : "" ?>">
            <label for="username">Kérem adja meg a felhasználó nevét!</label>
            <input class="form-input" type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
            <?php
                if (isset($errors['username'])) {
                    foreach($errors['username'] as $error) {
                        echo "<p class='input-error'>$error</p>";
                    }
                }
            ?>
        </div>
        <div class="form-group<?php echo isset($errors['time']) ? " has-error" : "" ?>">
            <label for="time">Milyen rég óta használja a chat alkalmazást?(hetekben)</label>
            <input class="form-input" type="number" name="time" value="<?php echo isset($time) ? $time : ''; ?>">
            <?php if (isset($errors['time'])) : ?>
                <?php foreach($errors['time'] as $error) : ?>
                    <p class="input-error"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="form-group<?php echo isset($errors['wish']) ? " has-error" : "" ?>">
            <label for="wish">Milyen észrevételei vannak a programmal kapcsolatban?<br>
            Milyen funkciókat látna még szívesen?</label>
            <textarea class="form-input" name="wish"><?php echo isset($wish) ? $wish : ''; ?></textarea>
            <?php echo html_errors('wish'); ?>
        </div>
        <div class="form-group<?php echo isset($errors['problem']) ? " has-error" : "" ?>">
            <label for="problem">Észlelt-e valamilyen hibát a program használata során?</label>
            <textarea class="form-input" name="problem"><?php echo isset($problem) ? $problem : ''; ?></textarea>
            <?php echo html_errors('problem'); ?>
        </div>   
        <div class="form-group">
            <button class="btn" type="submit">Küldés</button>
        </div>
    </form>


</div>

</main>

<?php include_once('foot.php'); ?>

