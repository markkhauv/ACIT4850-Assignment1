 <select onChange="window.location.href = this.value">
    <option>Select a Player</option>
    {players}            
    <option value="/portfolio?name={Player}">{Player}</option>
    {/players}
</select>