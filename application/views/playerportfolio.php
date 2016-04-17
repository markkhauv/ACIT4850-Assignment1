<div id="player-portfolio">

    <p>Player Portfolio:</p>

    <table>
        <tr><td>Time</td><td>Activity</td><td>Series</td>  
            {transactions}
        <tr>
            <td>{DateTime}</td>
            <td>{Series}</td>
            <td>{Trans}</td>    
        </tr>
        {/transactions}
    </table>

    <br><br>

    <table>
        <tr><td></td><td>Head</td><td>Body</td><td>Leg</td>  
            {collections}
        <tr>
            <td>11a</td>
            <td>{11aH}</td>
            <td>{11aB}</td>
            <td>{11aL}</td>    
        </tr>
        <tr>
            <td>11b</td>
            <td>{11bH}</td>
            <td>{11bB}</td>
            <td>{11bL}</td>    
        </tr>
        <tr>
            <td>11c</td>
            <td>{11cH}</td>
            <td>{11cB}</td>
            <td>{11cL}</td>    
        </tr>
        {/collections}
    </table>
</div>