---
extends: _layouts.post
section: content
title: Optimization Analytics
date: 2019-06-23
description: In a world of infinite possible solutions, how do you find the best one?
cover_image: 
featured: false
categories: []
---

Optimization is an advanced analytic practice. 

Example - Net New Billings needed to hit a Billings target.

## Terminology

- Variables - Decisions to be made
  - How much should we sell in month `i`?
- Constraints - Restrictions on variable values
  - The third month of each quarter must make up `x`% of quarterly sales.
  - Sales team `y` is responsible for `z`% of quarterly sales.
- Objective function - solution quality measure
  - Total sales must equal $200MM for the 2020 calendar year.

- Solution - values for each variable
- Feasible solution - variable values that satisfy all Constraints
- Optimal solution - feasible solution with the best objective values

You can think of a solution as an answer, whether it makes sense or not.  
$10k in sales for all 12 months would be a solution, but not satisfy the objective.

There are also many correct answers.  
You could sell $0 the first 3 quarters then $60MM in Oct, $60MM in Nov, and $80MM in Dec. This would satisfy all the requirements, but I doubt the executive team would want to cram hitting their goal into the last quarter.

The optimal solution is the best solution, the one you would try to pursue.
