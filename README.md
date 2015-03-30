# FormGenertoor
Php class for simple form creation. Super easy to use, see usage.

#Usage

First of, create your instance of FormObject

```php
$form = new FormObject();
```

This creates FormObject which inherites from HtmlObject class (all objects that has something to do with html, inherits from HtmlObject). HtmlObject is echoable (so as the FormObject) and you can set template in protected $template property. Value of $template has to correspond to file located in templates folder.

You can call setAttr method on your newly created FormObject, to set html attributes of your form. (Method setAttr is also inherited from HtmlObject, so you can call it on inputs as well)

```php
$form->setAttr('method', 'GET');
```

To add input, call addInput method, which takes two arguments. First is the label and second (optional) is input type (text input is by default). Second attribute basically defines which template will be called (pair or single tag). As mentioned before, textInput class which is created by calling addInput is child of HtmlObject, therefore you can call setAttr on it.  

```php
$form->addInput('User Name')
->setAttr('name','user-name')
->setAttr('placeholder','Write your name here!');
```

As you can see