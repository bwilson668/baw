---
extends: _layouts.post
section: content
title: Distributions
date: 2019-06-23
description: A deep dive in understanding how things will shake out.
cover_image: 
featured: false
categories: []
---

- Bernoulli
- Binomial
- Geometric
- Poisson
- Exponential
- Weibull

TODO: Showcase the Probability Mass, Density Function, and Expectation of each distribution.  
TODO: Explain WHY this is a good distribution for modeling.  
TODO: Provide example cases for each distribution.

### Bernoulli

Flipping a coin.  
1 or 0
 
Probability Mass Function  
`P(X = 1) = p`  
`P(X = 0) = 1 - p`


### Binomial

Probability Mass Function  
`P(X  = x) = (n x) p^x (1 - p)^n-x = (n! / (n-x)! x!) p^x (1 - p)^n-x`

This will converge to a normal distribution for higher `n`.

### Geometric

A type of Bernoulli distribution that gives the probability of having `x` failures until first success.

Could be used for how many marketing campaigns before a lead converts.

Probability Mass Function  
`P(X = x) = (1 - p)^x p`

NOTE: You should check your data against the proposed distribution to see if they are IID (Independent and Identically Distributed). If the data is not IID, then you need to collect other descriptive features.

### Poisson

Probability Mass Function  
`fsubx(x) = lambda^x e^-lambda / x!`

This distribution is good for modeling random arrivals.

### Exponential

Probability Mass Function   
`fsubx(s) = lambda e^-lamdba*x`

Exponential is related to a Poisson distribution.  
If arrivals are Poisson(lambda) distributed, then time between successive arrivals is exponential(lambda) distributed.

\# of arrivals (Poisson) spread out by inter-arrival time (Exponential)

The two can be used to simulate queue build-up for a line.

### Weibull

Weibull models time between failures.

Is commonly paired with the Geometric distribution, which models the number of tries between failures.

Ex. How many light switch flips on/off until bulb fails? - Geometric  
Leave the bulb on; how long until bulb fails? - Wiebull

Probability Mass Function  
`fsubx(x) = k/lambda (x/lambda)^k-1 e^-(x/lambda)^k`  
`lambda` is the scale parameter.  
`k` is the shape parameter.

How to set `k`:

- When `k < 1` you are modeling a failure rate that decreases over time.
  - "Worst things fail first" (ex. parts with defects or sales rep experience results in less failed pitches)
- When `k > 1` you are modeling a failure rate that increases over time.
  - "Things that wear out" (ex. tires are good while new but wear out)
- When `k = 1` there is a constant rate of failure over time.

### Q-Q Plot

Q-Q Plots show you how well the sample fits a distribution.  
Be sure to take note of the "tails" if you are trying to study values at the extreme.

## Simulation

Now that we have an understanding of some important basic distributions, we can use them as building blocks for different sorts of simulations.

- Memoryless - If the next state of a process doesn't depend on any of its previous states, but does depend on the current state.

`pij` is the transition probability from state i to state j.  
`P = {pij}` is the transition matrix.

What's the likelihood of sunny to sunny, sunny to cloudy, cloudy to sunny and all the other possible combinations.

Could also happen in business. What's the likelihood of a prospect to transition to a customer, or a customer to transition to a lost customer, and all the other possible combinations.
