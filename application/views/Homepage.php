
	<h1>Dashboard</h1>
        <p> Welcome to &copy yberbot for all of your cyberbot gaming needs.</p>
        <div>  This page will show you the overall game status
            and a summary of the series' bot pieces. </div>
        
        <div> Clicking on the hyper-link will take you to that specific players.
            portfolio</div>
        <br/>
            {status}
        
            <br>
            <div>
            Game state is : {state}
            The countdown is : {countdown}
            The Round is : {round}
            </div>
            {playerlist}           
        

            <br/>
            
            {message}
            
            <br/>
            
            <form action="Homepage/register" method="post">

                Team:  <input type="text" name="team"><br/>
                Name:  <input type="name" name="name"/><br/>
            Password:  <input type="password" name="password"/><br/>                     
            <button type="submit" name="register" formaction="Homepage/register">Register</button>
            </form>
            
            