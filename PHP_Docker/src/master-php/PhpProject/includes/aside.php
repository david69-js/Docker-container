  <!-----------Barra Lateral-------------->
        <div class="container1">
        <aside id="sidebar">
        <?php if(isset($_SESSION['user'])): ?>
            <div class="block-aside">
                <h3>Bienvenido</h3>
                <p><?= $_SESSION['user']['name']. " ".$_SESSION['user']['firts_names'];?></p>
                <!----Cerrar sesion----> 
                <button class="button btn btn-danger"><a href="closed.php">Crear categorias</a></button>
                <button class="button btn btn-success"><a href="closed.php">Crear Entrada</a></button>
                <button class="button btn btn-warning"><a href="closed.php">Editar datos</a></button>
                <button class="button"><a href="closed.php">Cerrar Sesion</a></button>
            </div>
        <?php endif;?>    
            <div class="login">
                <div id="login" class="block-aside">
                <p>Login</p>
                <?php if(isset($_SESSION['error_login'])): ?>
                    <div class="alert fail-alert">
                        <p><?= $_SESSION['error_login'];?></p>
                    </div>
                <?php endif;?>    

                    <form action="login.php" method="POST">
                    <label for="email">Email</label>
                        <input type="email" name="email">
                    
                        <label for="password">Password</label>
                        <input type="password" name="password">
                        
                        <input type="submit" name="send" value="Send">
                    </form>
                </div>
            </div>
            
        <!-----------Caja Principal-------------->
        <div class="register">
            <div id="register" class="block-aside">

            <p>Register</p>
            <!----Errors shows------>
            <?php if(isset($_SESSION['completed'])): ?>
                <div class="alert success-alert">
                    <?echo $_SESSION['completed']['general']?>
                </div>
            <?php elseif(isset($_SESSION['errors']['general'])):?>
                <div class="alert fail-alert">
                    <?echo $_SESSION['alert']['general']?>
                </div>
            <?php endif; ?>    

            <form action="register.php" method="POST">
                <label for="name">Name</label>
                    <input type="text" name="name">
                    <?php echo isset($_SESSION['errors']) ? errorShow($_SESSION['errors'], 'name') : '';?>

                    <label for="surmame">Surname</label>
                    <?php echo isset($_SESSION['errors']) ? errorShow($_SESSION['errors'], 'surname'): '';?>
                    
                    <input type="text" name="surname">

                    <label for="email">Email</label>
                    <?php echo isset($_SESSION['errors']) ? errorShow($_SESSION['errors'], 'email'): '';?>
                    <input type="email" name="email">

                    <label for="password">Password</label>
                    <?php echo isset($_SESSION['errors']) ? errorShow($_SESSION['errors'], 'password'): '';?>
                    <input type="password" name="password">

                    <input type="submit" name="submit" value="Register">

                    <?php errorsDelete();?>
            </form>
            </div>
        </div>

        </aside>