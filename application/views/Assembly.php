<h1>Bot assembly page</h1>

<p>This page will provide you options to design your bot.
<div> 
    Players can choose the three pieces to make a completed
    bot with. Don't forget to click on "assemble" after your choice </div>
<br/>
<form method="post" action="/assemble">

    {headparts}
    <br>
    {bodyparts}
    <br>
    {legparts}
    <br>
    <input type="submit" value="Assemble">
</form>

<img src="../assets/{head}.png">
<br>
<img src="../assets/{body}.png">
<br>
<img src="../assets/{legs}.png">

<br>