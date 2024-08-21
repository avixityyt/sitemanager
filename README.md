## Site Manager

🔗 Manage sites for your theme in admin backend and use with help of components to display them and/or use code to manage them + with help of components.

### NOTE

> This is my first plugin, and it took a hot min to figure out, but more updates and fixes coming;


## Upgrading to v2

Upgrading to v2 is by reinstalling this plugin, and readding the data in the plugin settings as described in the documentation
## Requirements

- October CMS 2 & above
- Basic understanding of PHP & OctoberCMS itself.

### Installation

```bash
php artisan plugin:install avixity.sitemanager
```

### Why Is This Plugin Neccessary?

Efficiently manage and organize your website's essential site information with our Site Manager plugin. Easily create, edit, delete, search site information data, and use them in your themes and/or other plugins.

## Documentation

1. First in [SiteManager](https://octobercms.com/plugin/avixity-sitemanager) install this package, make sure it has migrated.
2. In the backend you'll see "Site Manager" button, by clicking it and then on "Sites", you'll be taken to where you'll be adding your site informations.
3. After adding x amount of your desired sites, you put the conponent where you'll do .forEach and manage each site for your theme/general needs.

## Using In Code

- Required to add the [siteManager] to get the database queries of data.

```php
[siteManager]
==
{% set sites = siteManager.listSites %}
<body>
            {% for site in siteManager.listSites %}
                {% if site.is_active == 1 %}
                    {% if site.category == 'Services' %}
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Single Service -->
                            <a href="{{ site.url }}">
                                <div class="single-service">
                                    <i class="fa {{ faIcons[site.title] ?? 'fa-question' }}"></i>
                                    <h4>{{ site.title | _ }}</h4>
                                    <p>{{ site.description | _ }}</p>
                                </div>
                            </a>
                            <!--/ End Single Service -->
                        </div>
                    {% endif %}
                {% endif %}
            {% endfor %}
</body>
```

### License

This package is licensed under the MIT License [MIT](https://github.com/avixityyt/sitemanager/blob/main/LICENSE)
