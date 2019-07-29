<h1 align="center"> Diff </h1>

<p align="center"> 对比字符串生成差异，支持多种输出格式.</p>


## Installing

```shell
$ composer require ilaoniu/diff
```

## Usage

```php
use Ilaoniu\Diff;

$diff = new Diff();
$result = $diff->calculate('old string', 'new string');

// Or

$result = app('diff')->calculate('old string', 'new string');
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/ilaoniu/diff/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/ilaoniu/diff/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT