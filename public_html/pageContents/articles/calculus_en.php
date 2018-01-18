<div align='justify'>
<h2>Calculus proofs</h2>
			In this article I resume some of my proofs of important theorems in calculus. This article is not as intuitive as the others. I just wrote it so people that already know calculus well can fastly recover some proofs and use them in my other articles.
			<h2>Precise definition of limit</h2>
			<p>If $\lim_{x\to a}f(x) = L$ then for all $\epsilon > 0$, there ir a $\delta$ (which depends on $\epsilon$ and $a$) such that:
			$$0<|x-a|<\delta \implies |f(x)-L| < \epsilon$$
			<h2>Proof that the limit of a sum is the sum of limits</h2>
			<p>If $\lim_{x\to a}f(x) = L$ and $\lim_{x\to a}g(x) = M$, then to prove $\lim_{x\to a} [f(x) + g(x)] = L + M$ we must use the precise definition of limit:</p>
			$$\lim_{x\to a} [f(x) + g(x)] = L + M$$ means that $$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |f(x) + g(x) -[L+M]|<\epsilon$$
			<p>We only need to prove that for $\epsilon>0$ we have $|f(x) + g(x) -[L+M]|<\epsilon$. To do this, we will use what we already assumed true: the individual limits of each function.
			<p>We know that for $\epsilon>0$ we have $ |f(x)-L| < \epsilon$ and $ |g(x)-M| < \epsilon$. Sum the two inequalities to get:
			<p>$|f(x)-L| + |g(x)-M| < 2\epsilon$
			<p>But we need $|f(x) + g(x) -[L+M]|$, (the same as $|f(x)-L + g(x) - M|$) to appear in the inequality above. Using the <b>triangle inequality</b>:
			$$|a+b|\le |a| + |b|$$
			Then:
			$$|f(x) - L + g(x) - M| \le |f(x)-L| + |g(x)-M| < 2\epsilon$$
			<p>Besides being needed to finish with something less than $\epsilon$ (and not $2\epsilon$ like above), our result is enough to prove that the function has a limit. If we wanted, for example, to prove that the function is always less than $2$, it will be enough to use $\epsilon = 1$. To prove that the function is less than $\frac{1}{2}$, we should let $\epsilon = \frac{1}{4}$. Following this reasoning, there is no reason why we couldn't prove that the function is less than a number (we should just choose the right $\epsilon$). Some books, however, define $|f(x)-L|<\frac{\epsilon}{2}$ and $|g(x)-M|<\frac{\epsilon}{2}$, so then, when we sum the two inequalities, we get $|f(x)-L| + |g(x)-M| < \epsilon$.
			<h2>Proof involving the limit of a function multiplied by constant</h2>
			<p>Given $\lim_{x\to a} cf(x) = cL$, then, by the definition:
			$$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |cf(x)-cL|<\epsilon$$
			<p>By some properties of the absolute value, we know that $|cf(x)-cL|<\epsilon \implies |c||f(x)-L|<\epsilon$, then:
			$$\forall \epsilon>0, \exists\delta(\epsilon, a)| 0<|x-a|<\delta \implies |f(x)-L|<\frac{\epsilon}{|c|}$$
			<p>We can then prove that the function is always less than any number greater than $0$, just by choosing the right $\epsilon$. So:
			$$\lim_{x\to a}cf(x) = c\lim_{x\to a}f(x) = cL$$
			<h2>Limit definition of the derivative</h2>
			<p><div align='center'><img src='http://lucaszanella.com/img/fx.png'></div>
			<p>Look at this graph of an arbitrary function $f(x)$
			<p>If we calculate the opposite side/adjacent side of the red triangle, we'll obtain the triangle's tangent between the two choosen points. But to obtain the most precise tangent, we need to choose two points close to each other. We'll choose $x$ and $x+\Delta x$. 
			
			<p>The distance between the two points in the $x$ axis is $x+\Delta x - x = \Delta x$. If we let $\Delta x$ go to $0$, we'll get a better approximation for the tangent. That's where the derivative notion comes from, it gives an expression for the tangent line to a function at some point. To obtain the exact tangent line, we'll let $\Delta x$ get closer and closer to $0$, and then observe the function's behavior. If it gets closer and closer to some unique number, we'll define this number as the exact tangent to the function at that point. 
			<p>Opposite side of the triangle: $f(x+\Delta x)-f(x)$
			<p>Adjacent side of the triangle: $x+\Delta x - x = \Delta x$
			<p>The tangent, then, is:
			<p>$$\frac{f(x+\Delta x)-f(x)}{\Delta x}$$
			<p>By letting $\Delta x \to 0$ ($\Delta x$ get close to $0$), we're calculating the <b>limit</b> of this expression, where $\Delta x$ tends to $0$:
			<p>$$f'(x) = \lim_{\Delta x\to 0}\frac{f(x+\Delta x)-f(x)}{\Delta x}$$
			<p><h5>*$f'(x)$ detones the derivative of $f(x)$</h5>
			<h2>Second definition of derivative</h2>
			<p><div align='center'><img src='http://lucaszanella.com/img/fx2.png'></div>
			<p>We'll use the same reasoning, but this time the distance between the two points $a$ abd $b$ isn't given by $\Delta x$. The tangent still the same, but we'll take our limit with $b$ getting close to $a$.
			<p>$$f'(x) = \lim_{b\to a}\frac{f(b)-f(a)}{b-a}$$
            <h2>Equivalence between the two definitions of derivative</h2>
            <p>We have these two definitions:</p>
            <p>$$f'(x) = \lim_{\Delta x\to 0}\frac{f(x+\Delta x)-f(x)}{\Delta x}$$</p>
			<p>$$f'(x) = \lim_{b\to a}\frac{f(b)-f(a)}{b-a}$$</p>
            <p></p>
			<h2>Derivative of a sum</h2>
			<p>Consider the sum:
			<p>$$p(x) = f(x)+g(x)$$
			<p>By applying the limit definition of the derivative to $p(x)$
			<p>$$\frac{d}{dx}p(x) = \lim_{\Delta x \to 0}\frac{p(x+\Delta x)-p(x)}{\Delta x}$$
			<p>Substitute $p(x) = f(x)+g(x)$:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\frac{f(x+\Delta x)+g(x+\Delta x)-f(x)-g(x)}{\Delta x}$$
			<p>We can break the sum:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\left[\frac{f(x+\Delta x)-f(x)}{\Delta x} + \frac{g(x+\Delta x)-g(x)}{\Delta x}\right]$$
			<p>And transform it in two limits:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \lim_{\Delta x \to 0}\left[\frac{f(x+\Delta x)-f(x)}{\Delta x}\right] + \lim_{\Delta x \to 0} \left[\frac{g(x+\Delta x)-g(x)}{\Delta x}\right]$$
			<p>We finish with the sum of two limits that are just the derivatives of the respective $f$ and $g$ functions:
			<p>$$\frac{d}{dx}(f(x)+g(x)) = \frac{d}{dx} f(x) + \frac{d}{dx}g(x)$$
			
			<h2>Derivative of $c\cdot f(x)$ (function with a constant term multiplying)</h2>
			<p>We'll just use the limit definition to the derivative and then factor out the constant:
			<p>$$c\cdot f(x)$$
			<p>Let's consider $p(x) = c\cdot f(x)$. By the limit definition:
			<p>$$\frac{d}{dx}p(x) = \lim_{\Delta x\to 0}\frac{p(x+\Delta x)-p(x)}{\Delta x}$$
			<p>Substitute $p(x)$ por $c\cdot f(x)$:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = \lim_{\Delta x\to 0}\frac{c\cdot f(x+\Delta x)-c\cdot f(x)}{\Delta x}$$
			<p>Factor $c$ out:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = \lim_{\Delta x\to 0}c\cdot \frac{f(x+\Delta x)- f(x)}{\Delta x}$$
			<p>By the limit rule we just proved above, $\lim cf(x) = c\lim f(x)$:
			<p>$$\frac{d}{dx}(c\cdot f(x)) = c\cdot \lim_{\Delta x\to 0}\frac{f(x+\Delta x)- f(x)}{\Delta x}$$
			<p>Which is the same as saying:
			<p>$$\frac{d}{dx}p(x) = \frac{d}{dx}(c\cdot f(x)) = c\cdot \frac{d}{dx}f(x)$$
			<h2>Proof of the product rule</h2>
			<p>We'll proof a general formula for the product:
			<p>$$f(x)g(x)$$
			<p>By naming this product $p(x)$:
			<p>$$p(x) = f(x)g(x)$$
			<p>and applying our derivative definition:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{p(x+\Delta x) - p(x)}{\Delta x}$$
			<p>Substitute $p(x)$ by the product of the two functions:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{f(x+\Delta x)g(x+\Delta x) - f(x)g(x)}{\Delta x}$$
			<p>Now we'll just add and subtract an special term that will help us in a way that will be clear in a second. Note that $a+b$ is the same as $a+c-c+b$. Then, if we add and subtract $\color{Blue}{f(x+\Delta x)g(x)}$:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \frac{f(x+\Delta x)g(x+\Delta x) -\color{Blue}{f(x+\Delta x)g(x)} +\color{Blue}{f(x+\Delta x)g(x)}- f(x)g(x)}{\Delta x}$$
			<p>we can break the fraction in two terms and take their limit separately:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\frac{f(x+\Delta x)g(x+\Delta x) -\color{Blue}{f(x+\Delta x)g(x)}}{\Delta x} + \frac{\color{Blue}{f(x+\Delta x)g(x)}- f(x)g(x)}{\Delta x}\right]$$
			<p>Factoring $\color{Green}{f(x+\Delta x)}$ and $\color{Red}{g(x)}$:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\frac{\color{Green}{f(x+\Delta x)}\left[g(x+\Delta x) -g(x)\right]}{\Delta x} + \frac{\color{Red}{g(x)}\left[f(x + \Delta x) - f(x)\right]}{\Delta x}\right]$$
			<p>We can just take $\color{Green}{f(x+\Delta x)}$ and $\color{Red}{g(x)}$ out and let them multiply the fraction:
			<p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \left[\color{Green}{f(x+\Delta x)} \frac{g(x+\Delta x) -g(x)}{\Delta x} + \color{Red}{g(x)} \frac{f(x + \Delta x) - f(x)}{\Delta x}\right]$$		
			<p>By using our limit properties and breaking the sum and products:
            <p>$$\frac{d p(x)}{dx} = \lim_{\Delta x\to 0} \color{Green}{f(x+\Delta x)} \lim_{\Delta x\to 0}\frac{g(x+\Delta x) -g(x)}{\Delta x} + \lim_{\Delta x\to 0}\color{Red}{g(x)} \lim_{\Delta x\to 0}\frac{f(x + \Delta x) - f(x)}{\Delta x}$$	</p>
			<p>Finally, we get the product rule:
			<p>$$\frac{d}{dx}f(x)g(x) = f(x)g'(x) + f'(x)g(x)$$
			<p> By using $f'(x)$ we designate the first derivative of the function, just like $f''(x)$ means the second derivative, and so on...			
			<h2>Derivative of $x^n$ for any real $n$</h2>
			<p>We could use the binomial theorem and prove this derivative using the limit definition, but whis would work only for the case when $n$ is natural. If we do the following:
			$$\log_e{x} = \log_e{x}$$
			<p>And solve for $x$ on one side, we get:
			<p>$$x = e^{log_e{x}}$$
			<p>or just $x = e^{log{x}}$ if we let $\log(x)$ to mean a $\log$ with base $e$, we can then say:
			<p>$$x^n = e^{log(x^n)}$$
			<p>By some logarithm property, we can take the exponent $x$ and multiply the log with it:
			<p>$$x^n = e^{nlog(x)}$$
			<p>Then, by taking the derivative applying the chain rule:
			<p>$$\frac{d}{dx} x^n = \frac{de^{nlog(x)}}{dx}  = \frac{de^{nlog(x)}}{d [nlog(x)]}\cdot \frac{d[nlog(x)]}{dx} = e^{nlog(x)}\cdot n\frac{1}{x}$$
			<p>But $e^{log(x^n)} = x^n$, so:
			<p>$$\frac{d}{dx} x^n = e^{nlog(x)}\cdot n\frac{1}{x} = x^n\cdot n\frac{1}{x} = n\cdot x^{n-1}$$
			<p><h2>Proof of the integration by parts formula</h2>
			<p>We know by the product rule:
			<p>$$\frac{d}{dx}f(x)g(x) = f(x)g'(x) + f'(x)g(x)$$
			<p>Integrating both sides</p>
			<p>$$\int \frac{d}{dx}f(x)g(x)dx = \int f(x)g'(x)dx + \int f'(x)g(x)dx$$
			<p>In the left part of the equation, we have the integral of a derivative of a function, which is just the function itself. If we use bounds to our integral, we would get the function itself, but applied in the points of the limits of integration:
			<p>$$\int_0^1 \frac{d}{dx}\sin(x)dx = \int_0^1 \cos(x)dx$$
			<p>Integrating $\cos(x)$:
			<p>$$\int_0^1 \cos(x)dx = \sin(x)]_0^1$$
			<p>Which is the same as: 
			<p>$$\int_0^1 \frac{d}{dx}\sin(x)dx =  \sin(x)]_0^1$$
			<p>Therefore, in our formula:
			<p>$$\int_0^1 \frac{d}{dx}f(x)g(x)dx = f(x)g(x)]_0^1$$
			<p>In the right side of the equation, we can choose one of the two integrals to isolate and construct our formula. We can then create two different but equivalent formulas:
			<p>$$\int_a^b \frac{d}{dx}f(x)g(x)dx = \int_a^b f(x)g'(x)dx + \int_a^b f'(x)g(x)dx$$
			<p>I'll just choose the first integral and isolate it to ger the integration by parts formula:
			<p>$$\int_a^b f(x)g'(x)dx = f(x)g(x)]_a^b - \int_a^b f'(x)g(x)dx$$
			<p><h5>*This article is always being modified to have more and more proofs.</h5>
</div>