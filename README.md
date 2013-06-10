# JsonView for DietCake

`Controller` 内で値を生成し、テンプレートファイルを介さずに `JSON` 形式で出力するための `View` クラス

## Installation

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git://github.com/xcezx/dietcake_json-view.git"
        }
    ],
    "require": {
        "dietcake/dietcake_json-view": "dev-master"
    }
}
```

## Usage

```php
<?php
class HomeController extends Controller
{
    public $default_view_class = 'JsonView';

    public function index()
    {
        $this->set('name', 'John Doe');
    }
}
```

## Output
```json
{"name":"John Doe"}
```
