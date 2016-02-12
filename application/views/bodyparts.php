<h1>Bodies</h1>
<select onChange="window.location.href=this.value">
            <option>Select a Part</option>
            {collections}            
                <option value="/assembly?body={Piece}">{Piece}</option>
            {/collections}
</select>