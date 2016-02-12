<h1>Heads</h1>
<select onChange="window.location.href=this.value">
            <option>Select a Part</option>
            {collections}            
                <option value="/assembly?head={Piece}">{Piece}</option>
            {/collections}
</select>