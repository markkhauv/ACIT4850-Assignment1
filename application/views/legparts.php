<h1>Legs</h1>
<select onChange="window.location.href=this.value">
            <option>Select a Part</option>
            {collections}            
                <option value="/assembly?leg={Piece}">{Piece}</option>
            {/collections}
</select>