# containers project
Software Architectural Skeleton for huge applications written in PHP

<a id="Introduction"></a>
# Introduction

**containers project** is modern application skeleton, designed to build large PHP applications, higly inspirated by <a href="https://github.com/Mahmoudz/Porto">Porto</a>.
Main goal is to organize and keep everthing in "containers".

## Little bit programming stuff:
- By container I mean dependency injection container.
- Every container has it's own vendor and configuration and use only specific functions/services from other containers, which has to be written in config.neon in services block or use `use statement` in code, both should work
- starting point is ./www/index.php where I firstly load appLoader and then I run example service
 
## How to use it:

- In this moment you have to run `composer update` in every "container".
- just run ./www/index.php you should see "hello world" message from example container


