# Kirby Blog Plugin λ

Add a blog to any Kirby installation in a matter of seconds.

## Disclaimer
**This plugin is work-in-progress. Don't use it in production yet!**

## Installation

- unzip [master.zip](https://github.com/bastianallgeier/blog/archive/master.zip) as folder `site/plugins/blog` or
- `git submodule add https://github.com/bastianallgeier/blog.git site/plugins/blog` or
<!-- - `composer require getkirby/blog` -->

## Create your blog

1. Create a new `/content/blog` folder and add a `blog.txt`
2. Start adding your first article to your blog as subfolder with an `article.txt`. 
```
Title: Hello world
----
Date: 2019-01-07
----
Text: This is my first article
```
3. Visit `http://yoursite.com/blog` to see your blog come to life

Your blog does not have to stay at `/blog` It can also be any other subfolder of `/content`. It's only important that you use `blog.txt` and `article.txt` for your text files to load the correct templates.

## Customize your blog

Every aspect of your blog can be customized through custom snippets, templates, controllers and blueprints.

### Templates

The blog plugin adds the following templates to get you started without any additional work:

```
/site/templates/article.php
/site/templates/blog.php
```

### Snippets

The blog plugin adds the following snippets to your Kirby site, which can be overwritten with your own snippets:

```
/site/snippets/blog/article.php
/site/snippets/blog/articles.php
/site/snippets/blog/excerpt.php
/site/snippets/blog/footer.php
/site/snippets/blog/header.php
/site/snippets/blog/pagination.php
/site/snippets/blog/prevnext.php
/site/snippets/blog/title.php
```

### Controller

The blog page has its own controller, which passes the paginated articles to the blog template. You can customize it further if needed:

```
/site/controllers/blog.php
```

### Collections

All blog articles are available in an articles collection, which can be overwritten as well.

```
/site/collections/articles.php
```

You can of course use this collection right away in any other template or controller:

```php
<?= collection('articles')->first()->title() ?>
```

### Blueprints

The plugin also comes with blueprints for articles and the blog and a section mixin for articles, which can be used in your site.yml for example.

```
/site/blueprints/pages/article.yml
/site/blueprints/pages/blog.yml
/site/blueprints/sections/articles.yml
```

Here's how to use the `articles` section in your site.yml

```yaml
title: Site
sections:
    articles:
        headline: Blog
        extends: sections/articles
```

## Options

If you want to adjust simple settings such as the number of articles per page, you can use the following blog options in your config:

```php
return [
    'kirby' => [
        'blog' => [
            'date' => 'd.m.Y',
            'pagination' => [
                'limit' => 10,
                'prev'  => '&larr;',
                'next'  => '&rarr;',
            ],
            'article' => [
                'prev'  => '&larr;',
                'next'  => '&rarr;',
            ]
        ]
    ]
];
```

## Todos

- [ ] RSS Feed

## License

<http://www.opensource.org/licenses/mit-license.php>

## Credits

[Bastian Allgeier](https://getkirby.com)
