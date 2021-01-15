<?php

class View{
    
    //Properties
    public $head;
    public $navbar;
    public $login;
    public $upper;
    public $lower;
    public $card;
    public $foot;
    
    //Methods
    function head(){
    $this->head="
        <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' integrity='sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==' crossorigin='anonymous' />
            <link rel='stylesheet' href='css/utilities.css'>
            <link rel='stylesheet' href='css/style.css'>
            <title>X Plus | Online Payment For Everyone</title>
        </head>
        <body>
        ";
    echo $this->head;
        
}
    
    function navbar(){
        $this->navbar="
        <div class='navbar'>
            <div class='container flex'>
                <h1 class='logo'> X Plus </h1>
                <p class='logo'> In our imagination there's No limitation Orbit For Everyone!!</p>
    
                <nav>
                    <ul>
                        <li><a href='index.html'>Home</a></li>
                        <li><a href='features.html'>Features</a></li>
                        <li><a href='docs.html'>Docs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        ";
     echo $this->navbar;
}
    
    function login(){
        $this->login="
         <section class='showcase'>
            <div class='container grid'>
                <div class='showcase-text'>
                    <h1>Easier Payment from Orbit</h1>
                    <p>Use our APIs in your project for companies or Log in to your account and manage your wallet for individuals accounts</p>
                    <a href='features.html' class='btn btn-outline'>Read More</a>
                </div>
    
                <div class='showcase-form card'>
                    <h2>Login to your X Plus account</h2>
                     
                     <form action='profile.php' method='GET'>
                        <div class='form-control'>
                            <input type='text' name='name' placeholder='User Name' required>
                        </div>
                        <div class='form-control'>
                            <input type='text' name='company' placeholder='Account Number' required>
                        </div>
                        <div class='form-control'>
                            <input type='email' name='email' placeholder='Email' required>
                        </div>
                        <input type='submit' value='Submit' class='btn btn-primary'>
                    </form>
                </div>
            </div>
        </section>
        ";
    echo $this->login;
        
        
}
    
    function upper(){
        $this->upper="
            <section class='stats'>
            <div class='container'>
                <h3 class='stats-heading text-center my-1'>
                    Each user can add money by linking a bank account and managing money on their phone or computer with X Plus dashboard.
                </h3>
    
                <div class='grid grid-3 text-center my-4'>
                    <div>
                        <i class='fas fa-server fa-3x'></i>
                        <h3>10,349,405</h3>
                        <p class='text-secondary'>Transaction</p>
                    </div>
                    <div>
                        <i class='fas fa-upload fa-3x'></i>
                        <h3>500,000<h3>
                        <p class='text-secondary'>payment</p>
                    </div>
                    <div>
                        <i class='fas fa-project-diagram fa-3x'></i>
                        <h3>200</h3>
                        <p class='text-secondary'>Simple Integration</p>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Cli -->
        <section class='cli'>
            <div class='container grid'>
                <img src='images/cli.png' alt=''>
                <div class='card'>
                    <h3>Easy to use, our API </h3>
                </div>
                <div class='card'>
                    <h3>Install in seconds</h3>
                </div>
            </div>
        </section>
        ";
        
    echo  $this->upper;
}
    
    function lower(){
        $this->lower="
            <section class='cloud bg-primary my-2 py-2'>
            <div class='container grid'>
                <div class='text-center'>
                    <h2 class='lg'>Single touch payment</h2>
                    <p class='lead my-1'>Secure online payment like you've never seen. Fast, efficient and scalable</p>
                    <a href='features.html' class='btn btn-dark'>Read More</a>
                </div>
                <img src='images/cloud.png' alt=''>
            </div>
        </section>
        ";
    echo $this->lower;
}
    
    function card(){
        $this->card="
            <section class='languages'>
            <h2 class='md text-center my-2'>
                Supported Platforms
            </h2>
            <div class='container flex'>
                <div class='card'>
                    <h4>Node.js</h4>
                    <img src='images/logos/node.png' alt=''>
                </div>
                <div class='card'>
                    <h4>Python</h4>
                    <img src='images/logos/python.png' alt=''>
                  </div>
                  <div class='card'>
                    <h4>C#</h4>
                    <img src='images/logos/csharp.png' alt=''>
                  </div>
                  <div class='card'>
                    <h4>Ruby</h4>
                    <img src='images/logos/ruby.png' alt=''>
                  </div>
                  <div class='card'>
                    <h4>PHP</h4>
                    <img src='images/logos/php.png' alt=''>
                  </div>
                  <div class='card'>
                    <h4>Scala</h4>
                    <img src='images/logos/scala.png' alt=''>
                  </div>
                  <div class='card'>
                    <h4>Clojure</h4>
                    <img src='images/logos/clojure.png' alt=''>
                  </div>
            </div>
        </section>
        ";
    echo $this->card;
}
    
    function foot(){
        $this->foot="
            <footer class='footer bg-dark py-5'>
            <div class='container grid grid-3'>
                <div>
                    <h1>Orbit
                    </h1>
                    <p>Copyright &copy; 2021</p>
                </div>
                <nav>
                    <ul>
                        <li><a href='index.html'>Home</a></li>
                        <li><a href='features.html'>Features</a></li>
                        <li><a href='docs.html'>Docs</a></li>
                    </ul>
                </nav>
                <div class='social'>
                    <a href='#'><i class='fab fa-github fa-2x'></i></a>
                    <a href='#'><i class='fab fa-facebook fa-2x'></i></a>
                    <a href='#'><i class='fab fa-instagram fa-2x'></i></a>
                    <a href='#'><i class='fab fa-twitter fa-2x'></i></a>
                </div>
            </div>
        </footer>
    </body>
    </html>
        ";
    echo $this->foot;
    
        
}
    


}
?>
    

