## Technical Context

At one point in the evolution of React it seemed like a good idea to separate 
the concept of components into 2 basic types. There were many names 
for the separate types; smart & dumb components, functional components, blah blah...

Basically, developers separated concerns like views containing loads 
of logic into __containers__ and simpler, more portable 
functional __components__. 

There were good reasons for this and it worked well. Since then things 
have evolved more. 

Now there are many clever ways to wrap various bits of useful app data into 
simpler components; things like themes, styles, live data, redux - whatevs.

The distinction between containers and components has blurred. 

Now we can look up at a new strata of components - the collection of 
bridges, wrappers etc which I'm going to start calling __Neo Containers__.

This repo aims to identify some of the most widely used Neo Containers, 
provide a working example of each for evaluation.

[Forward => Getting Started](./getting_started.html) 
[^ Home](../index.html)