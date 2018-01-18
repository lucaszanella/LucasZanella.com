<div align='justify'>
<h1>Basel Problem</h1>
    <p>The solution to the <b>Basel Problem</b> was the first important conquest of Leonhard Euler. Despite being a problem easy to state, it took almost one century to be solved. <b>Basel</b> Is the name of the city where Euler lived when solved the problem.</p>
			<p>The problem is about finding the exact value of the sum: 
			<p>$$1 + \frac{1}{2^2} +\frac{1}{3^2} + \frac{1}{4^2} + ...$$
			<p>Which can be written in the form:
			<p>$$1 + \frac{1}{4} + \frac{1}{9} + \frac{1}{16} + ...$$
			<p>How to assign an exact value to this sum? Of course, if we sum the terms 'manually' we sould get an approximate value, because the series converges to $1.6449340\cdots$
			<p>Euler first attacked the problem numerically, and then conjectured that the sum was equivalent to $\frac{\pi^2}{6}$. Later, he managed to prove his conjecture using the method demonstrated in this article.</p>
			<p>First, let's remember the taylor series for the $\sin x$ function:
			$$\sin x = x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + ...$$
			<p> The series above let us calculate $\sin(x)$ to any value of $x$ (in radians, not degrees). The more terms we add, the more accurate will be our result.
            <p> Now that we have an infinite sum for the $\sin(x)$ function, I'll present to you an infinite product for the same function. To create this product, let's analyze the roots of $\sin(x)$:
			<p><div align="center"><img src="http://lucaszanella.com/img/sinx.png"></div>
			<p> The roots (values of $x$ that makes $\sin(x)$ be $0$) occur periodically. We can note the pattern:
			<p> $$\cdots, -3\pi, -2\pi, -\pi, 0 , \pi, 2\pi, 3\pi, \cdots$$
			<p> Let's create a product of terms, in such a way that any root of the $\sin(x)$ function is also a root of this new function. The product below does just this:
            $$\left(1-\frac{x}{a}\right)\left(1+\frac{x}{a}\right)\left(1-\frac{x}{b}\right)\left(1+\frac{x}{b}\right)\left(1-\frac{x}{c}\right)\left(1+\frac{x}{c}\right)\cdots$$
			<p> The product $\left(1-\frac{x}{a}\right)\left(1+\frac{x}{a}\right)$ generates the difference of squares $\left(1-\frac{x^2}{a^2}\right)$ where for  $x = a$ or $x = -a$, this term will be equal to $0$, and then the whole equation will zero out. Therefore, we created an infinite product in such a way that its value will be $0$ for all roots of the sine function (except the $0$ root but I'll talk about it). </p>
			<p> So, for example, when we let $x=a$ or $x=-a$ in:</p>
			$(1-\frac{x^2}{a^2}) = 0$ we'll get $(1-\frac{a^2}{a^2}) = 1-1 = 0$. 
			<p>If you are still not convinced, just try $a$,$-a$, $2a$, $-2a$, $3a$, $-3a$, ... in the product below, and you'll get zero for one of them:
			$$\left(1-\frac{x^2}{a^2}\right)\left(1-\frac{x^2}{(2a)^2}\right)\left(1-\frac{x^2}{(3a)^2}\right)\cdots = 0$$
			<p> But there's still a problem: the root $0$. But this is easy to solve. For now, let's finish our infinite product using the $\sin x$ roots:
			$$\left(1-\frac{x}{\pi}\right)\left(1+\frac{x}{\pi}\right)\left(1-\frac{x}{2\pi}\right)\left(1+\frac{x}{2\pi}\right)\left(1-\frac{x}{3\pi}\right)\left(1+\frac{x}{3\pi}\right)\cdots$$
			<p> By simplifying the pairs like $\left(1-\frac{x}{\pi}\right)\left(1+\frac{x}{\pi}\right)$ we get:
			$$\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots$$
			<p> Then, by simply multipling everything by $x$ we'll let the infinite product be equal to $0$ when $x=0$.
            <p>Besides this being a very intuitive construction, we didn't really prove that the product above really represents the  sine function in its entire domain, we just created a product that will zero out for every sine root. Euler was lucky that this is really a valid representation for the sine function, but he didn't really prove it. That's why, later, he presented a more rigorous proof of the Basel Problem, which didn't involve this infinite product. The proof that this infinite product is really the sine function will be treated in my article about the <a href="http://lucaszanella.com/en/articles/math/zeta" target="_blank">zeta function</a>.</p>
            <p>Finally, we get:</p>
			$$\sin x = x\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots$$
			<p> Now we have two representations of $\sin(x)$:
			$$\sin x = x\left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots \tag{infinite product}$$
			$$\sin x = x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + ...\tag{infinite sum}$$
            <p>The first thing we'll do is to divide everything by $x$, so:</p>
			$$\frac{\sin x}{x} = \left(1-\frac{x^2}{\pi^2}\right)\left(1-\frac{x^2}{4\pi^2}\right)\left(1-\frac{x^2}{9\pi^2}\right)\cdots\tag {1}$$
            <p>and</p>
            $$\frac{\sin x}{x} = 1 - \frac{x^2}{3!} + \frac{x^4}{5!} - \frac{x^6}{7!} + ...\tag{2}$$  
			<p> When expanding $(1)$, we'll get something like:
			$$1 - \frac{x^2}{\pi^2} - \frac{x^2}{4\pi^2} - \frac{x^2}{9\pi^2} - ... - (\mbox{lots of terms})x^4 + \cdots $$
			<p> What really interests us is the terms of the type $\frac{x^2}{n^2\pi^2}$ that can be grouped in the form:
			$$-\left(\frac{x^2}{\pi^2} + \frac{x^2}{4\pi^2} + \frac{x^2}{9\pi^2} + \cdots\right)$$
			<p> By factoring $x^2$ we get:
			$$\cdots-x^2\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + \cdots \right)+\cdots$$
			<p> Now we'll compare the coefficients of $x^2$ in the two equations:
			$$...-x^2\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + \cdots \right)+\cdots$$
			$$1 - \frac{x^2}{3!} + \frac{x^4}{5!} - \frac{x^6}{7!} + \cdots$$
            <p>We know that they must be equal, so:</p>
			<p> The coefficient of $x^2$ in the infinite sum is $-\frac{1}{6}$. In the infinite product it is $-\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + ... \right)$
			<p> They must be equal, so:
			$$-\left(\frac{1}{\pi^2} + \frac{1}{4\pi^2} + \frac{1}{9\pi^2} + \cdots \right) = -\frac{1}{6} $$
			<p> Multiply both sides by $-1$ and then factor $\frac{1}{\pi^2}$:
			$$\frac{1}{\pi^2}\left(\frac{1}{1} + \frac{1}{2^2} + \frac{1}{3^2} + \cdots \right) = \frac{1}{6}$$
			<p> Multiply both sides by $\pi^2$
			$$\left(\frac{1}{1} + \frac{1}{2^2} + \frac{1}{3^2} + ... +\frac{1}{n^2}\right) = \frac{\pi^2}{6}$$
			<p> We ginally get:
			$$\sum_{n=1}^\infty \frac{1}{n^2} = \frac{\pi^2}{6}$$
            <p>References:</p>
            <p>(1)<a href="http://eulerarchive.maa.org/hedi/HEDI-2003-12.pdf" target="_blank"> How Euler did it - Basel Problem</a></p>
</div>