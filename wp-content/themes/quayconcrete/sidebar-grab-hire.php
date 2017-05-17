 
 <section class="calculator-area">
 		<form>
	        <div class="container">
	               <div class="col last">
	               		<div class="form-wrap">
	               			<label for="units">Units:</label> 
	               			<select name="units">
		   						<option value="Meters" selected>Meters</option>
		   						<option value="Yards">Yards</option>
								<option value="Feet">Feet</option>
								<option value="Inches">Inches</option>
	   						</select>
	               		</div>	
	               		<div class="form-wrap">   	
	               			<label for="length">Length:</label> 				
	   						<input type="number" name="length" value="0" min=0 />
	   					</div>
	   					<div class="form-wrap">   
	   						<label for="height">Height:</label> 		
	   						<input type="number" name="height" value="0" min=0 />
	   					</div>
	   					<div class="form-wrap">  
	   						<label for="depth">Depth:</label>  
	   						<input type="number" name="depth" value="0" min=0 />
	   					</div>
	   					<div class="form-wrap last">   
	   						<label for="volume">Volume:</label> 
	   						<input type="number" name="volume" value="0" min=0 />
	   					</div>
	                </div>
	                 <div class="col">
	                 	<div class="button-wraps clearfix">
		 					<div class="reset-btn">
		 						reset
		 					</div>
		 					<div class="cal-btn">
		 						Calculate
		 					</div>
	 					</div>
	 					<div class="result-wrap">
	 						<span class="cal-vol">Calculated Volume</span>
	 						<div class="result"><span>0</span> m3</div>
	 					</div>
	                </div>
	        </div>
        </form>
</section>