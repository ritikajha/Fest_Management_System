<?php
  include "linc.php";
  //checking for session variable
  if (isset($_SESSION['pid']))
 {
  $URL="http://localhost/admin_zephyr/index_new.php";
  echo "<script>location.href='$URL'</script>";
 }
 //checking for button clicked
  if (isset($_POST["sub"])){
      $user=$_POST["user"];
      $pw=$_POST["pw"];
      if ($user=='admin' and $pw=='admin'){
          //echo "Welcome Ritika,Daneshwari -Administrator!!!!";
          $_SESSION['a']='admin';
          //directing to the admin panel
          $URL="http://localhost/admin_zephyr/index_new.php";
          echo "<script>location.href='$URL'</script>";

      }else{
        //display error
        echo "<script>alert('Invalid credentials to log in as a administrator')</script>";
      }
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin login!</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <style>

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}





/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/
input[type=button]
{
  background-color:#000080;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
input[type=button]:hover{
  background-color: #000056;
}

 input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

 input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}
input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=password]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

    </style>
  </head>
  <body>
  <div class="row">
    <div class="col-sm-6" style="float: left">
    <input type="button"name="sub" class="fadeIn fourth" onclick="window.location.href='mainpage.php'" value="Home">
    </div>
<div class="wrapper fadeInDown">
    
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- JNU Icon -->
      <div class="fadeIn first">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBIQDw8QDxASEhUVFhAPEBAPEBAVFhcWFxYVFRUYHSkgGBolGxUTITEhJSsrLi4uFyAzODMsNygvLisBCgoKDg0OGxAQGjAlHyYtLy0tLS0tLS0vLS0tLS0vLy0tLS0tLy0uLy0tLS0tNS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMIBAwMBEQACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAACAECBQYHBAP/xABOEAABAwIBBwYICAwEBwAAAAABAAIDBBEFBgcSITFRYRMiMkFxgRRScnOhsbKzIyUzNUJigpEkNENTVGN0g5KitMEVRKPRJjZkdaTC4f/EABoBAQACAwEAAAAAAAAAAAAAAAABBAIDBQb/xAA2EQEAAQICBgcIAgIDAQAAAAAAAQIDBBEFEiExMkETM1FxgZHwFCJhobHB0eEjQlJyNEPxRP/aAAwDAQACEQMRAD8A7igICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgtciYfOWUNaXONg0Ek7gBcoNTOczCR/nAeyOU+pqtexX/8WrpqO16YM4WEv2V0Q8vSZ7QWM4S9H9U9LRPNmaLGaWb5Gpglv4krHE9wK1VW66d8SyiqJ3PfdYJEBAQEBAug81diMEDdOeaKFvjSvbGPvcVNNM1TlEImYhrVdnKwiLUaxsh3QxyzD+JrSPSrFODvVf189jCbtMc2JnzxYa3ox1cnkxMaP5nhbY0denfkw9opZDJbOPS4jUCmhhqWPLXO0pWxhlm2vra8nr3LXewddqnWqmGVF2K5yhuiqtqqAgICAgICAgICAgICAgICC1yJh5MT+Qm81J7JU08UE7kaMh8Ljq6+mpptLk5S4O0Tou5sT3ix6tbQvR4m5Nu1VVTv2fWHPt0xVVlLrFRmaoXdCepj743j0tXLjSV3nELE4elgq/MtM3nU1ZG8jYJo3Rn+NpPqW+jScbqqWE4fslin0OUeFm7DVOjH5txrIbD6hvojuC2xXhb2/LPyljMXKGZwHPM8EMr6YOF7GWm5rh2xOOvuI7Fpu6Njfbnz/LKnEf5OnYBlLR1zdKlnZKQLuZ0ZWX8Zh1hc67ZuWp9+FimuKtzLLUyCbINGymzo0FISyImsmFxowEcm069Tpdm0dWkeCu2cDdubZ2R8fw1V3qaXOqzL7GcSkMVGHxA/kqJji8A+PLtb280K/GEw9mNav5/hom5XXsh98PzTYnUnlKuaOAna6V7qqfvANj/EsatI2qNlEZ92yPXgmLFU7am1YdmZo2656momO5mhCz7rE+lVatJXJ4YiPm2RYp5vvj2bTC4KOpljgeZI6eV7XPnmNnNY4tNtKx1gdSi3jb1VcRM8+yE1WaMtzQsy5+NmcYJfUFd0j1Pj+WnD8SQa4a4qgICAgICAgICAgICAgICAgo5Ew8mI/Iy+bf7JU08UE7kdM1nzvQ+XJ7iVegxvUVeH1hRscaSoXnV5VSgQa9lHkXQ14PLwNEhGqeK0cwO/SHS7HXC32sTctcM+DCqiKt7keU+bquw1/hNG988TDpCWG7KmHi5o2ji3vAXUs423ejVrjKflPr4+atVaqp2wzOSWd8tbyeJNdJZvNqIWjSdYbHs1C58YWGvWOtar+js5zt+UsqL/ACqa9lFlliGMy+DU7HtieSG0sFy6Qb5n9Y37Gi/et9rDWsPTrVTt7Z+3rNjVcquTlDbMk80DGhsuJP5R2o+DQuLY28HvGt3Y2w4lVb+kZnZb8+bZRYiOJ1GgoYoGCOCJkMbdjI2hjR3Bc2qqapzqnOViIyehQCDFZVi9BWD/AKWb3blnbn36e+EVbnD8zJ+NouMMvsrs6R6nx/Knh+JIVcNdVQEBAQEBAQEBAQEBAQEBAQUciYeauHwUnm3eyUp3wTuRxzW/O1D5b/cSr0OO6irw+sKNjjSWC86uqqQQEGByxymhw2nM8vOeebHEDZ0z7agNw3nqHcFusWKr1erHiwrrimM0faLDazFqqV1PAx0ji6V4ja2GGO9z2NuRYdZPeV3q7luxREVT8PipRTVXOxl832VhwmpfHUQ/BSODZrstUQltxcdZA13Z3jXt04rD9PRE0zt5dk+u1nar1JylISlnZKxskb2vY9oc17CHNc06wQRtC4MxMTlK6+qAgIMblM29FVDfTTe7csrfHHeidzheZr52h81L7C7ekeq8Y+6nh+JIZcJdVQEBAQEBAQEBAQEBAQEBAQUciYeet+Tk8h3qKRvJ3I4Zrfnah8t/uZF6HHdTV65wo2eNJYLzq6qpBB8K2qZDG+WVwZHG1z3OOxrWi5P3BTFM1TFMcxHHH8UqcbxFojaSZH8nTwk2bGzbd27UC5x17OAXoLVFGGtbe+e/1uUaqpuVO95JZNw4dTNghFz0pJCLOlf1uPqA6gFw716q7VrVLlNMUxlDTs7mRIqY3V1Mz8JibeRjRrnjaNtut7Rs3gW3K3gsV0c6lW6fl+mu9b1ozje1zM3liYZRh87/AIGU/AOcfk5Dr5O/iu6vreUt+kMNnHSU7+f5a7Fz+su3BchaEBBj8oB+CVP7PL7DllRxR3onc4PmadbFoOMco/kJ/su3pHqfGFOxxpELhLqqAgICAgICAgICAgICAgICC1yJh56zXG8fUd7JSN5O5G7NkfjWh84fdvC9Fjepr9c4UbPGkyF5xdVUgg5ZnyygMcMVBG6zpvhJbHWImnmtPlPH+mV0tHWdaqbk8tkd/r6q+IryjJ88x2TobG/EZBd0mlFFcdFjTZ7hxLhbsZxTSN6Zqi3HLbPeYenKNZ1dc1YCgjlnOye/w/EHckCyKb4aLR1aB0ue1u7RdrFtgc1d/BXeltZTvjZPruUrtOrVnDtuQmPeH0ENQbcpo6EoHVKzU7sB1OHBwXGxFrork0rVFWtGbYFpZiDw45+K1HmJfYcsqOKETucAzQuti9LxbKP9F5/su7pDqZ8FOzxpGrgLqqAgICAgICAgICAgICAgICC1yJh8agcx3Fp9RSN5O5GrNv8AOlD54ey5eixvU1euahZ44SaavOL65SgQRqzk4g6qxWqLTpBknIMHm+YQPt6f3r0OEpiixGff5/pRuznWkPgWHtpaaCnZsiiYztLQASeJNz3rgV1TXVNU812IyjJ71ilRBz3PdhYlw4Tgc+mla6/XoSERuH3uYfsq9o+5q3dXt/8AWm/TnTm17MJiJD6ulJ5payZo3EHQkPeDF9y36To4a/D182GHnfDsa5Syqg8ONC9NP5mT2CsqOKETuR8zSm2L0f733Ei7uP6iVKzxpIrgLwgICAgICAgICAgICAgICAgteiYfGXokcCkJlGnN4fjOh8+31FeixnU1eubn2eOEmmrzi+vClAgi/h/wuKxX18piLCeOlUAn1r0VezDz/r9lGJ/k8UoAvOryqAgwGX0QfhdcD+izO72sLh6Qt2HnK7T3wxr4ZcbzLSluKtA+nBK09nNd62hdbSMfw+MfdVw/EkGuGuCDx4x+LzeZk9krKjijvRO5HjNP870XbJ7iVd7H9RPrmpWeNJNefXhAQEBAQEBAQEBAQEBAQEBBa9Ew+TtihMo0ZBasUov2lnrK9Hi+oq7vu51rjhJpq846C4IhVSIuud4NipLtQgxC54COo/2C9HxYfvp+yjOUXPFKILzi8qgINezgzBmFVxPXTSN73t0B6XBbsNGd6nvhjXPuy4/mViLsVafEp5XH+Vv/ALLraRn+Lx/KrY4kgVw1wQefEBeKQb43+yVMbxHHNV87UPlP9zIu/j+pq9c4UrPWJLLz66ICAgICAgICAgICAgICAgILZETD5lQlGjIg/GtH+1s9peixXUVdznWushJlq866C4KUKoI653cLMGKTGx0KhrZmnquRovHbpNJ+0F3sBXrWYjs2KV+Mq83b8isXFZQU1QDdzogH8JGc2QfxArjX7fR3Jp7Pot01a0Zs4tTIQc3z4YuIqFlMCNOpkFx18nFZ7j/FyY71f0db1rk1dkfXY0X5ypyYfMLhZ/CqsjmnQhYd9ufJ3a4/Stmk685po8fNjh6dky7AuYsiD41nyb/Id6ikbxG7NabYtQ+W73Mi9Djupq8PqpWeNJdeeXRAQEBAQEBAQEBAQEBAQEBBbIiYfNQlGXJLVitJ+2x7POhekxHUVdznUccd6TrV5t0FylAg0LPBk2aui5eNt56TSeABznxEfCNG/UA77HFXMDe6O5qzun1DVeo1qWn5ksphFM6gldzJzpxE7BKBzm/aaARxbxVvSNjOOkjlv+zVYr/q7aFyFpRzgASTYDrOoBBG3L7HXYpiLnQ3kjBEFO1v5QaVgQN73uJ7C3cvQYa1Fi172yd8/D/xRuVTXVk7zkdgYoKKCmFi5jbvcPpSO5zz2aRNuAC4d65N2ua55rlNOrGTNrWyEHyqRzHeS71II2ZsnfG1Cf1h9MbwvQ43qKvD6wpWeNJheeXRAQEBAQEBAQEBAQEBAQEBBa9EwsG1QlGTJwWxalG7EIvftXo70/wT/q5tPHHek41ecdFckIVUihCgR+znZHuw6pFTTgtpZZNJjmGxp5b6Whq2C4u08LdWvu4PERdp1Kt/1j1vU7tuaZ1odMzcZcsxGLkpiGVsbeezYJRs5VnDeOo8CFzcVhZsznHD62et6xbuRVHxa5nfy3DWuw6leC92qokaeg38yD4x+luGrr1WcBhdaekqju/LXeuZe7Dy5msjS5wxKobZrb+DscOkdhmtu2hvedxU6QxP/VT4/hFi3l70uxhctZVQEHzn6Luw+pBGjNv860Xnh7Ll6HGdRV65wo2eOEm155eEBAQEBAQEBAQEBAQEBAQEFr0TC0KEox4CbYtTf9xi/qGr0d7/AI8/6/ZzqeOO9Jtq846C8IhVSCDx4rQw1EL4ahjZIntIc12y229+ojbfqsppqmmc6d6JjONqM2Mxx0da7wCrMrInXjqYiWuGrYHjpEXILhqK9Jbmblv+SnLPfChV7tXuyyOb7DKOqrQzEJwxmotjeS3wqQnoGQ7NfVtdewWrF13Ldv8Ajj9R3esmVqImfeSRiYGgNaA0NAAAFgANgA6gvPrz6ICAgsl2HsKCM+bv51ovPj1OXocZ1FXrnCjZ40m155eEBAQEBAQEBAQEBAQEBAQEFsiJhYoSjJhOrF4OGJR/1IXo7n/Hn/X7OfHWeKTYXnF9cCgrdShqOUmcbD6K7eV8ImH5GmIkIP1n30W95vwKtWcHducso7Za6rtNLk+N5W4njUhpoI3iN3+VprnSbvmf1jts3gupbw9nDRr1T4z9vUq0113NkN4yLzTxQWmxHQqJdogHOp2eVf5Q9urgdqo4jSFVWy3sjt5/puosxG2WPy0zSX0psMtruTSSO1funnZ5LtXEbFsw+kP63PP8orsc6Wu5P5wMSwt/g1Ux80bNRgqdJk8Y+pIRe269xust93B2r0a9Gzu3evLua6btVGyp1LJ7ORhtZZvLeDyn8lU2iN9zX30HdxvwXNu4O7b2zGcdsLFN2mpt7XAi41g9Y2Ks2KoLX7D2IIy5vzbFaL9oH916HF9RV3feFG1xwk4vPLwgICAgICAgICAgICAgICAgtkRMPmoSi/4WIMS5dwJbFXcoWtsSQyfSIHGwK9Nq61nVjnH2c6Zyrz+LptRnngA+CopnH9ZJGwei65saMq51Q3ziY5QwtXnfr5joUtNBGT1ASVMncBYegrdTo61TGdcz9GE4iqdzyOwnKPFflvCBE78+4UkFjviFiR9krOLmFscOWfw2z5/tGV2ve2XAczMbbOrqkyfqqccmzsLzziOwNVa5pKqeCMu9spw8RvdKwjB6ekj5KmhjhZuY2xcd7jtceJXOrrqrnOqc2+KYjc9yxSIMbjWA0tazQqoI5h1Fw57PJeOc09hWdu5XbnOmckVUxVvc3xzMww3dRVRZ+qqRpt7BI3WB2gniuhb0lVHHGfc0VYeJ3NYbkxlDhv4uKgMH6HNy0R/c3ue9isTfwt7i3/GNvnH5Yalync+zc5uNUvNqGMJH6VSvid/KWqPYsPXwz5TEnS1xvhkIc9lRbn0UDzvZNJGPuLXLCdFx/l8v2n2jthp2Qr74rRu2XqW+kn/dW8V1FUfD7tVrjhJwLzq+qgICAgICAgICAgICAgICAgtkRMPldQlGPK6l8HxKqje27W1L3aOzSY93KAd7XBelsVa9mmY7P051yMq5d5w/I3CS1skdBTFr2hzS6MSXDgCOlfeuFVib3OqV2LdHYz1JQRRC0UUcQ3Rsaz1BaZqmd8ssojc9SxGLynxtlBSyVb2PkbHo3YzRDjpPazVfV9L0LbZtTcriiObGqrVjOWJOW0X+Ff4qIZeS/M3Zymqbkdt7bRfsWz2arpuiz29vgx6SNTWffIrLGDFI5HxNdE+NwD4pC0vAPRdq2tOvvBUYjD1WZyqTRXFcbHxny0Y3FWYVyDy94B5bTboC8bpOja/0bKYw8zZm7n4GvGtqvjLl0xuLNwrwdxc5wHLco3R1xcr0bX2atqmMNPQ9Ln4eORr+9qstlfjww+jkqzGZhGWDkw7QJ03tZ0rG1tK+zqWuxa6WuKM8k11asZr8lMaFfSRVYjMQl0uYXaZbovczbYX6N9nWou2+jrmjsKataM2Wc0HUQCNx1rWyYDKmlo4aSoqJKWndycMj+dDGSSGmw1jaTYd622taa4piebGrLLa4bmsojNi1ILXEZdK7gGMNj/EWLt46qKbM/HZ6+anZjOtJNefXhAQEBAQEBAQEBAQEBAQEBBZIiYWKEuNZ8MBLJYq9g5sgEUtup7dcbj2tuPsDeuxo29nTNue+FTEUf2bLmbyhFRR+Cvd8NS80A7XQnoHjbo9zd6raQs6lzWjdP1Z2K84y7HQwqDeo94aLuIaN5IAUwhqedazsHqyLEWiN+r5aPWrOCz6elru8EtS0f+D+vok/+YVa/wDt8fs1R1PgxGG0kmGUuH43SgmMsEdZCNj2ueW6evfzR5QYesrZVXF+uuxVvznVn7evwiI1KYrjxZJ1XHNlVSTROD4pYWvY8HU5pppbH/4sNWacHVE9v3hlnndhZX/83xeUz+kKU/8ABn1zP+1uGeD5nqfKh99Gq2B6+nx+jO9wS+maM/E9L++9/IscZ19XrkmzwQ3BVmxyfPhlIBGzDozd7y2Sa30WNN42HiXAO7Gjeuno6zMz0k8tyvfryjVX5jcnjHHJXyCxmHJxAix5Npu93Y5wA+xxWOkb2tVFuOW/v/SbFGUZurLnN4gICAgICAgICAgICAgICAgteiYWWUJeLGsKiq6eSmnbpRyt0TbaNzmnqINiDvCzt3KrdUVU74Y1UxVGUo91NPWYDiAOx7CSx+sRVMR1EHgRqI6iBuBXfibeKtetk+vNRmKrdTvGSeU1PiMAmgdYiwkicRykLvFcN22x2FcO9YqtVatXn2rlFcVRnD5ZeYA7EaCWlY5rZHaLmF99DSY4OAdbYDYi/FMNdi1diqSunWpyaFV0OPS4e3CDh0TWNZHH4Ty8WiWRlpbq0tXRbr7dSv01Yam702tzmcsvXrm0TFyadXJstZklNHgBw2K004jA2hjXPMwlfYnYAS619wVanEROI6WdkZtmplb1YZXJDBHR4VFRVsTSeTfHJGS17S1znarjUbghar1zO7NdHbnDKinKmIlomTObmtosXimAZJSRSPIlMjQ8sdG8NuzbpAuAPYSr17G0XbE0/wBpaqbU0158may8yKrJa2LE8NfGKiMN0o5Do6RZfRc02sbtOiWm2obVpw2Joi3Nq5GyWVduZnWp3sbjuHZR4pGKWogpKSAuaXuDxztHWL2e8kXsbADWBrWdu5hbM61MzMoqpuV7J2Oi5N4OyhpYaVji5sTLaR1F7iS5zrdV3Em3FUblyblc1TzbqYyjKGGy9y1hwyIgFslU8Hk4b3t9eS2xg9NrDrI3YbDVXqvhzlhcuRRDjeSGTtRjVa98znuj09OpqDq269Bp8Y7AB0Rr6gD1cRepw9uKad/KPv63yrUUTcnOUi6WnZExkcbQyNjQ1rGizWtaLAAbgAuDMzM5yuvsgICAgICAgICAgICAgICAgILXomFqhIgxGVGTlPiMBgqG8WSNsJIneM0+sbCt1m9VZq1qWFdEVRlLh2L4DiWA1Anje7QBs2qiF4ni/Qladl9XNdqPUSuzRdtYqnVnf2c/BTqoqtzm6FkpnZpZw2OuApJtnKazTPO/S2x/a1cVRv6Prp20bY+f78PJuovxOyXRYZmvaHMc17TrDmEOaRwI2rnzGWyW99LoCAUC6Dy4hiENOwyTyxwxj6cj2sb95U00zVOVMZyiZiN7l2V2d9oDosMbpHZ4VK0ta3jHGdZPF1hwK6djR0ztu+TRXfj+rVsk8ha3FpTU1LpIoJDpOqZedLPf82HbdVuceaBa17WVi/i7diNSiNvZyhrot1V7andsFwiCjhbT00YjiYNQGsk9bnHa5x6yVxa66q6pqqnOVuIiIyh71ikQEBAQEBAQEBAQEBAQEBAQEFHImFihKqILILZYmvaWuaHNcLFrgHNcD1EHaEjZuQ57lHmjo57vpHGikOvRaOUgP2CQW/ZIHBdC1pC5Tsr2/Xzaa7FM7YaS/InHsNcXUjpHNBvpUUxs7i6E20jwsVc9qw16Pf8AnH3aejuU7l7M5eN0nNqog636XSyQv+9uiPQnsWHr4Z8pT0tyN72x57ai3Ooqdx3tme0fdYrCdF0/5T5ftPtE84Umz2VNuZR0zD9aWR49FkjRlPOqfI9onlDwSZf49W82ma8Am34FSOf/ADEOt23Cz9kw1vinzlHSXKtytJm2xmueJKx5jv8AlKyZ00oB8VgJI7CWqJxti3GVEeUZQdFXVO10HJnNbQUha+UGsmFjpTgck0jrbENXHnaRG9Ub2Ou3Nm6Pg3UWaaW9AKm2qoCAgICAgICAgICAgICAgICAgIKOCC3RUJzVspQWRKtkQWQLIKOYCLEXG46wg8j8JpndKngJ3mKM/wBllr1dqMoViwunbrbTwtP1Yox6gomqqd8mT1BtlCVyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIP/9k=" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form action="" method="POST">
        <input type="text" id="login" class="fadeIn second" name="user" placeholder="User Id">
        <input type="password" id="password" class="fadeIn third" name="pw" placeholder="Password">
        <input type="submit" name="sub" class="fadeIn fourth" value="Log In">
      </form>
      
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>