<?php
/**
 * Created by PhpStorm.
 * User: RAKESH
 * Date: 7/27/2016
 * Time: 6:14 AM
 */
session_start();
if(isset($_COOKIE['name'])  && isset($_COOKIE['pwd'] )){
    if($_COOKIE['name']== 'manisha' && $_COOKIE['pwd']== 'pwd'){
        $_SESSION['name'] == $_COOKIE['name'];
        header('location:hi.php');
    }else{
        $err = "Account's invalid";
    }

}
if(isset($_POST['login'])){
    if($_POST['name'] == 'manisha' && $_POST['pwd']== 'pwd'){
        $_SESSION['name'] = $_POST['name'];
        if($_POST['remember']!= null){
          setcookie('name',$_POST['name'],time()+(60*1),"/");
            setcookie('pwd',$_POST['pwd'],time()+(60*1),"/");
        }
        header('location:hi.php');
    }else{
        $err = "Account is invalid";
    }
}

?>
<form method="post">
    <fieldset>
        <?php  if(isset($err)){echo $err;}?>
        <legend>Login</legend>
        <table>
           <tr>
               <td>UserName</td>
               <td><input type="text" name="name"></td>

           </tr>
            <tr>
                <td>Enterpassword</td>
                <td><input type="password" name="pwd"></td>

            </tr>
            <tr>
                <td>RememberMe</td>
                <td><input type="checkbox" name="remember"></td>

            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="login" value="login"></td>

            </tr>

</table>
    </fieldset>
</form>