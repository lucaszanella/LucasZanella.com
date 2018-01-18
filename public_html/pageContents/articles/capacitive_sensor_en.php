<div align="justify">
		<h2>BC548B transistor signal body amplification</h2>
			<div align="center">
				<iframe width="560" height="315" src="//www.youtube.com/embed/M86WwVZr2MU" frameborder="0" allowfullscreen></iframe>
			</div>
			<p> With this simple circuit you can pass voltage through your body and read it on your arduino. With this you can do nice things like my <a href="http://www.youtube.com/watch?v=_4cIv6qLaM8" target="_blank">"paper piano with arduino"</a> wich basically uses 'grafitti' from a pencil to conduct electricity through my body and reach the arduino analog ports. Then a flash application receives the information via serial and plays the rigth sound for the key pressed.
			<p><div align="center"><img src="/img/bc548b_amp.png"></div>
			<p> You must connect the <b>BC548B</b> NPN transistor's emitter to <b>ground</b>, then connect its collector to the arduino's <b>analog port 0</b>. The <b>10kohm</b> resistor makes a voltage divisor beteween the port. Then, connect <b>5 volts</b> to your body, and touch the transistor's base with your skin (your finger or any part of your body). You should see that the value of the port should be like less than <b>100</b>, and when you release it, it should be almost <b>1023</b>.
</div>