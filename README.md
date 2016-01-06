# Markdown Twig Filter for UserFrosting

Homepage for Carsten Brandt's markdown library: https://github.com/cebe/markdown

**By [Matthew Seremet](https://github.com/frostbitten)**

This UserFrosting plugin offers the ability to parse markdown with a simple twig filter. Parsing is taken care of by cebe's [markdown library](https://github.com/cebe/markdown).

## Installation

1. Put this folder into the "plugins" directory of your UserFrosting setup.
2. Run `composer update` in the userfrosting directory. 
3. Done. See "How to use" below

## How to use

First, you'll need to capture the text you want to parse with twig's `{% set %}` tag. Then, simply return the text using the `md` filter and a `raw` filter after.

#### the `md( type )` filter

* if type == **git** 
	parse as *Github Markdown*;
* elseif type == **extra**
	parse as *Markdown Extra*;
* else
	parse as *Markdown*;

#### example code
```
{% set test %}
# A First Level Header

## A Second Level Header

Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.

The quick brown fox jumped over the lazy
dog's back.

### Header 3
Subheader
> This is a blockquote.
>
> This is the second paragraph in the blockquote.
{% endset %}
{{test|md('git')|raw}}

```
