<!-- You have identified a gap in the social media market for very very short posts.
 Now that Twitter allows 280 character posts, people wanting quick social media updates
  aren't being served. You decide to create your own social media network.

To make your product noteworthy, you make it extreme and only allow posts of 5 or less characters.
 Any posts of more than 5 characters should be truncated to 5.

To allow your users to express themselves fully, you allow Emoji and other Unicode.

The task is to truncate input strings to 5 characters.
Text Encodings

Text stored digitally has to be converted to a series of bytes. There are 3 ways to map characters to bytes
 in common use.

    ASCII can encode English language characters. All characters are precisely 1 byte long.
    UTF-8 is a Unicode text encoding. Characters take between 1 and 4 bytes.
    UTF-16 is a Unicode text encoding. Characters are either 2 or 4 bytes long.

UTF-8 and UTF-16 are both Unicode encodings which means they're capable of representing a massive range
 of characters including:

    Text in most of the world's languages and scripts
    Historic text
    Emoji

UTF-8 and UTF-16 are both variable length encodings, which means that different characters take up different
 amounts of space.

Consider the letter 'a' and the emoji '😛'. In UTF-16 the letter takes 2 bytes but the emoji takes 4 bytes.

The trick to this exercise is to use APIs designed around Unicode characters (codepoints) instead of Unicode 
codeunits. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="index.php" class="sign-in-form" method="post" >
            <h2 class="title"><h3>please entr your post !</h3></h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="for example :ali pourfereydoon " name="cut" />
            </div>
            <h2 class="title"><h3>you can see the result :</h3></h2>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" placeholder="for example a string with less than 5 charecters"  value="<?php 
              if(isset($_POST['submit'])){
                class MicroBlog
                {
                    public function ShowString(string $text): string
                    {
                        return mb_substr($text, 0, 5);
                    }
                }
                
                $micro=new MicroBlog();
                echo $micro->ShowString($_POST['cut']);
              }

?> "/>
            </div>
            <input type="submit" value="get result" class="btn solid" name="submit" />
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3><h1>creat micro blog</h1></h3>
                <p><h2>only allow posts of 5 or less characters.</h2></p>
            </div>
            <img src="./img/log.svg" class="image" alt="">
        </div>>
      </div>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
