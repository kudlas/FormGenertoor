# FormGenertoor
Php class for simple form creation. Super easy to use, see usage.

#Usage

Keep file structure and include bootstrap.php to your project.

First of, create your instance of FormObject

```php
$form = new FormObject();
```

This creates FormObject which inherites from HtmlObject class (all objects that has something to do with html, inherits from HtmlObject). HtmlObject is echoable (so as the FormObject) and you can set template in protected $template property. Value of $template has to correspond to file located in templates folder.

You can call setAttr method on your newly created FormObject, to set html attributes of your form. (Method setAttr is also inherited from HtmlObject, so you can call it on inputs as well)

```php
$form->setAttr('method', 'GET');
```

To add input, call addInput method, which takes two arguments. First is the label and second (optional) is input type (text input is by default). Second attribute basically defines which template will be called (pair or single tag). Use predefined constants for second argument. As mentioned before, textInput class which is created by calling addInput is child of HtmlObject, therefore you can call setAttr on it.  

```php
$form->addInput('User Name')
->setAttr('name','user-name')
->setAttr('placeholder','Write your name here!');
```

This code returns following output
![alt tag](http://s17.postimg.org/4fqptyecv/input.gif)

#Example

```php
$form = new FormObject();

$form->setAttr('method', 'GET');

$form->addInput('Your name:')
->setAttr('name','userName')
->setAttr('placeholder','Write your name here');

$form->addInput('Your Surename:')
->setAttr('name','surename')
->setAttr('class','a b c');

$form->addInput('Age:')
->setAttr('name','age')
->setAttr('type','number');

$form->addInput('Description',FormObject::INPUT_TEXTAREA)
->setAttr('class','TinyMce')
->setAttr('style','width:100%');

$form->addInput('Odeslat', FormObject::INPUT_SUBMIT);

echo $form;
```

Normaly you would not echo form in here, but in your template. This is just for our example.