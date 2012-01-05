<html>
    <head>
        <title>*Bannik</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="shortcut icon" href="images/favico.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="*Bannik" />
    </head>
    <body>
        <div id="hello">
            <h1 class="hello">Hello world, my name is<a href="#email-bckg" id="bannik"> *Bannik</a>, also known as Nik Christodoulakis.  I'm a web designer and developer from Athens.</h1>
        </div>
        <div class="hide" id="modalbg" onclick="show()">
            <h2>Hire me!</h2>
            <img src="images/closebox.png" onclick="hide()">
        </div>
        <div class="hide" id="modal">
            <h2>I could simple</h2>
        </div>
        <div class="hide" id="email-bckg" onclick="hidemailform()">
            <h2>Hire Me!</h2>
            <img src="images/closebox.png" onclick="hidemailform()"/>
        </div>
        <div class="hide" id="email">
            <h2>Give me your mail so we count have a talk</h2>
            <p class="hide" id="showsent">Ok.You can wait for my answer now</p>
            <p class="hide" id="shownot">Oups, something went wrong.. try me@bannik.eu</p>
            <form action="mail.php" method="post">
                <label for="name" >Could I ask your name?</label>
                <input type="text" name="name" required/>
                <label for="mail">How about your e-mail?</label>
                <input type="email" name="email" required/>
                <input type="submit" value="mail me"/>
            </form>
        </div>
        <div class="hide" id="modalcallbg" onclick="hidecallform()">
            <h2>Hire Me!</h2>
            <img src="images/closebox.png" onclick="hidecallform()" />
        </div>
        <div class="hide" id="modalcall">
            <h2>Give me your phone-number so i could call you</h2>
            <p class="hide" id="showcall">Ok. You can grab your phone cause i'll call you really soon</p>
            <p class="hide" id="showcallnot">Oups, something went wrong.. try me@bannik.eu</p>
            <form action="call.php" method="post">
                <label for="name">Could I ask your name?</label>
                <input type="text" name="name" required/>
                <label for="phone">How about your phone-number?</label>
                <input type="text" name="phone" required/>
                <input type="submit" value="call me"/>
            </form>
        </div>
        <div class="info">
            I design & build thing for the web and also do some mobile stuff.
            <br/>
            I work at <a href="http://www.logimus.com"> Logimus Team </a>in Athens
            <br/>
            Follow me on <a href="http://twitter.com/thebannik">twitter</a> See some of my work at <a href="http://thebannik.deviantart.com">deviantart</a> or <a href="http://dev.bannik.eu">here</a>
        </div>
        <div class="available">
            available for new projects
        </div>
        <div class="show" id="contact">
           <span onclick="showmailform()" onmouseover="document.getElementById('mail').src='images/mail-hover.png'" onmouseout="document.getElementById('mail').src='images/mail.png'"><img src="images/mail.png" id="mail"/><p>me@bannik.eu</p></span>
            <img src="images/call.png" onclick="showcallform()" onmouseover="this.src='images/call-hover.png'" onmouseout="this.src='images/call.png'"/>
            <a href="http://www.facebook.com/thebannik"><img src="images/fb.png" onmouseover="this.src='images/fb-hover.png'" onmouseout="this.src='images/fb.png'"/></a>
            <a href="http://www.twitter.com/thebannik"><img src="images/twitter.png" onmouseover="this.src='images/twitter-hover.png'" onmouseout="this.src='images/twitter.png'"/></a>
        </div>
        <script>
            var modalmail = document.getElementById( 'email-bckg' );
            var modalmailform = document.getElementById( 'email' );
            var modalcall = document.getElementById( 'modalcallbg' );
            var modalcallform = document.getElementById( 'modalcall' );
            var showsent = document.getElementById( 'showsent' );
            var shownot = document.getElementById( 'shownot' );
            var showcall = document.getElementById( 'showcall' );
            var shownotcall = document.getElementById( 'showcallnot' );
            var contact = document.getElementByClass('contact');
            function showmailform(){
                modalmail.setAttribute( 'class', 'show' );
                modalmailform.setAttribute( 'class', 'show' );
                contact.setAttribute('class', 'hide');
            }
            function showcallform(){
                modalcall.setAttribute( 'class', 'show' );
                modalcallform.setAttribute( 'class', 'show' );
                contact.setAttribute('class', 'hide');
            }
            function hidemailform(){
                modalmail.setAttribute( 'class', 'hide' );
                modalmailform.setAttribute( 'class', 'hide' );
                window.location.hash = '#';
                contact.setAttribute('class', 'show');
            }
            function hidecallform(){
                modalcall.setAttribute( 'class', 'hide' );
                modalcallform.setAttribute( 'class', 'hide' );
                window.location.hash = '#';
                contact.setAttribute('class', 'show');
            }
            if ( document.location.hash == '#modalcall=0'){
                showcallform();
                showcall.setAttribute( 'class', 'show' );
            }
            if ( document.location.hash == '#modalcall=1' ){
                showcallform();
                shownotcall.setAttribute( 'class', 'show');
            }
            if ( document.location.hash == '#email-bckg=0' ){
                showmailform();
                showsent.setAttribute( 'class', 'show' );
            }
            else if ( document.location.hash == '#email-bckg=1' ){
                showmailform();
                shownot.setAttribute( 'class', 'show' );
            }
        </script>
    </body>
</html>
