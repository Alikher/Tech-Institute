<style>
.example3 {
 height: 80px;	
 overflow: hidden;
 background-color: #3883;
 position: relative;
 border-radius: 12px;
}
.example3 .headline, .detail {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 color:#fffdbb;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: example3 10s ease infinite;
 -webkit-animation: example3 10s ease infinite;
 animation: example3 10s ease infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example3 {
 0%   { -moz-transform: translateX(100%); }
 40%   { -moz-transform: translateX(0%); }
 60%   { -moz-transform: translateX(0%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example3 {
 0%   { -webkit-transform: translateX(100%); }
 40%   { -webkit-transform: translateX(0%); }
 60%   { -webkit-transform: translateX(0%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example3 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%); 		
 }
 40%   { 
 -moz-transform: translateX(0%); /* Firefox bug fix */
 -webkit-transform: translateX(0%); /* Firefox bug fix */
 transform: translateX(0%); 		
 }
 60%   { 
 -moz-transform: translateX(0%); /* Firefox bug fix */
 -webkit-transform: translateX(0%); /* Firefox bug fix */
 transform: translateX(0%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>

<div class="example3">
<h3 class="headline">Modern Computer Laboratory.</h3><br>
<p class="detail">This is modern well equiped comture lab with all facilities</p>
</div>