<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <span class="myhead"><img src="../../assets/Robots.jpg" alt="Robot" style="width:100%;height:176px;"></img></span>
                <span class="mynav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/assembly">Assembly</a></li>
                        <li>{username}</li>
                        <li><form method="post" action="/login">
                                <input type="text" name="name" value="Username"><br>
                                <input type="submit" value="login">
                        </form></li>
                        <li>    <form method="post" action='/logout'>
                            <input type="submit" value="Logout">
                        </form></li>
                    </ul>
                </span>
            </div>
            <div class="alone"></div>
            <div id="content">
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2014,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
    </body>
</html>
