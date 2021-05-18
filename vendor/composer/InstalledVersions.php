<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'zendframework/skeleton-application',
  ),
  'versions' => 
  array (
    'container-interop/container-interop' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '79cbf1341c22ec75643d841642dd5d6acd83bdb8',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.10.3',
      'version' => '1.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '451c3cd1418cf640de218914901e51b064abb093',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '730b01bc3e867237eaac355e06a36b85dd93a8b4',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '1.0.9',
      'version' => '1.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '791198a2c6254db10131eecfe8c06670700904db',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '5.7.27',
      'version' => '5.7.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7803aeca3ccb99ad0a506fa80b64cd6a56bbc0c',
    ),
    'phpunit/phpunit-mock-objects' => 
    array (
      'pretty_version' => '3.4.4',
      'version' => '3.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a23b761686d50a560cc56233b9ecf49597cc9118',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7f066a26a962dbe58ddea9f72a4e82874a3975a4',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bc37d50fea7d017d3d340f230811c9f1d7280af4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1311872ac850040a79c3c058bea3e22d0f09cbb7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c3ba150cbec723aa057506e73a8d33bdb286c9a',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '58b3a85e7999757d6ad81c787a1fbf5ff6c628c6',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v4.4.22',
      'version' => '4.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c2fd24147961525eaefb65b11987cab75adab59',
    ),
    'true/punycode' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
    'zendframework/skeleton-application' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'zendframework/zend-authentication' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ebc9464c11a5203e5256439f1079a7d6efe89eec',
    ),
    'zendframework/zend-barcode' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6db95687997920b8217e71d2f12b51ec10e824d9',
    ),
    'zendframework/zend-cache' => 
    array (
      'pretty_version' => '2.8.3',
      'version' => '2.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edde41f1ee5c28e01701a032f434d03751b65df4',
    ),
    'zendframework/zend-captcha' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '37e9b6a4f632a9399eecbf2e5e325ad89083f87b',
    ),
    'zendframework/zend-code' => 
    array (
      'pretty_version' => '2.6.3',
      'version' => '2.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '95033f061b083e16cdee60530ec260d7d628b887',
    ),
    'zendframework/zend-config' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2920e877a9f6dca9fa8f6bd3b1ffc2e19bb1e30d',
    ),
    'zendframework/zend-console' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8aa08da83de3d265256c40ba45cd649115f0e18',
    ),
    'zendframework/zend-crypt' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b2f5600bf6262904167116fa67b58ab1457036d',
    ),
    'zendframework/zend-db' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '71626f95f6f9ee326e4be3c34228c1c466300a2c',
    ),
    'zendframework/zend-debug' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb423facd6f2e875a3cb44cf992b6bd1f5fd1a96',
    ),
    'zendframework/zend-di' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fd1ba85660b5a2718741b38639dc7c4c3194b37',
    ),
    'zendframework/zend-diactoros' => 
    array (
      'pretty_version' => '1.8.7',
      'version' => '1.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a85e67b86e9b8520d07e6415fcbcb8391b44a75b',
    ),
    'zendframework/zend-dom' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '66b8459e6f2c0d62ff4f4b16f2b44afdfd466aa0',
    ),
    'zendframework/zend-escaper' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3801caa21b0ca6aca57fa1c42b08d35c395ebd5f',
    ),
    'zendframework/zend-eventmanager' => 
    array (
      'pretty_version' => '2.6.4',
      'version' => '2.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd238c443220dce4b6396579c8ab2200ec25f9108',
    ),
    'zendframework/zend-feed' => 
    array (
      'pretty_version' => '2.10.3',
      'version' => '2.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6641f4cf3f4586c63f83fd70b6d19966025c8888',
    ),
    'zendframework/zend-file' => 
    array (
      'pretty_version' => '2.8.3',
      'version' => '2.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6e167e056ce8594be1db93460cddb503de341ed',
    ),
    'zendframework/zend-filter' => 
    array (
      'pretty_version' => '2.9.2',
      'version' => '2.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd78f2cdde1c31975e18b2a0753381ed7b61118ef',
    ),
    'zendframework/zend-form' => 
    array (
      'pretty_version' => '2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c713a12ccbd43148b71c9339e171ca11e3f8a1da',
    ),
    'zendframework/zend-http' => 
    array (
      'pretty_version' => '2.8.4',
      'version' => '2.8.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd160aedc096be230af0fe9c31151b2b33ad4e807',
    ),
    'zendframework/zend-hydrator' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '22652e1661a5a10b3f564cf7824a2206cf5a4a65',
    ),
    'zendframework/zend-i18n' => 
    array (
      'pretty_version' => '2.9.2',
      'version' => '2.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e17a54b3aee333ab156958f570cde630acee8b07',
    ),
    'zendframework/zend-i18n-resources' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3a2f5a246779f05d4fe0c47738d4d2271e484aee',
    ),
    'zendframework/zend-inputfilter' => 
    array (
      'pretty_version' => '2.10.1',
      'version' => '2.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1f44a2e9bc394a71638b43bc7024b572fa65410e',
    ),
    'zendframework/zend-json' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c8705dbe4ad7d7e51b2876c5b9eea0ef916ba28',
    ),
    'zendframework/zend-loader' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '91da574d29b58547385b2298c020b257310898c6',
    ),
    'zendframework/zend-log' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5ec088dc8a7b4d96a3a6627761f720a738a36b8',
    ),
    'zendframework/zend-mail' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7beb63d5f7144a21ac100072c453e63860cdab8',
    ),
    'zendframework/zend-math' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1abce074004dacac1a32cd54de94ad47ef960d38',
    ),
    'zendframework/zend-memory' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '00a733ebbc4e6ec978939c1b09b928174e15808f',
    ),
    'zendframework/zend-mime' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c91e0350be53cc9d29be15563445eec3b269d7c1',
    ),
    'zendframework/zend-modulemanager' => 
    array (
      'pretty_version' => '2.8.4',
      'version' => '2.8.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b2596d24b9a4e36a3cd114d35d3ad0918db9a243',
    ),
    'zendframework/zend-mvc' => 
    array (
      'pretty_version' => '2.7.15',
      'version' => '2.7.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8d45689d37a9e4ff4b75ea0b7478fa3d4f9c089',
    ),
    'zendframework/zend-navigation' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd3c60b83e816cfb67b53c2193372ac19469a609',
    ),
    'zendframework/zend-paginator' => 
    array (
      'pretty_version' => '2.8.2',
      'version' => '2.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b4d07d9475ed581278a28d065b238a0941402e2',
    ),
    'zendframework/zend-permissions-acl' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1323e30a9357e6f6956f63d97faf7e8c8db1f4f8',
    ),
    'zendframework/zend-permissions-rbac' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c10ad55e50f402bf14eb2eb9bc424dd9a44dfc78',
    ),
    'zendframework/zend-progressbar' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae5565bbed54f9081d5695bc2f62fe3f27583bdd',
    ),
    'zendframework/zend-psr7bridge' => 
    array (
      'pretty_version' => '0.2.2',
      'version' => '0.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '86c0b53b0c6381391c4add4a93a56e51d5c74605',
    ),
    'zendframework/zend-router' => 
    array (
      'replaced' => 
      array (
        0 => '^2.0',
      ),
    ),
    'zendframework/zend-serializer' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fb7ae016cfdf0cfcdfa2b989e6a65f351170e21',
    ),
    'zendframework/zend-server' => 
    array (
      'pretty_version' => '2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd80c44700ebb92191dd9a3005316a6ab6637c0d1',
    ),
    'zendframework/zend-servicemanager' => 
    array (
      'pretty_version' => '2.7.11',
      'version' => '2.7.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '99ec9ed5d0f15aed9876433c74c2709eb933d4c7',
    ),
    'zendframework/zend-session' => 
    array (
      'pretty_version' => '2.8.7',
      'version' => '2.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '8fd50220888167d08cf0113ced5b023f6da06923',
    ),
    'zendframework/zend-soap' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d6012e7231cce550219eccfc80836a028d20bf1',
    ),
    'zendframework/zend-stdlib' => 
    array (
      'pretty_version' => '2.7.7',
      'version' => '2.7.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e44eb46788f65e09e077eb7f44d2659143bcc1f',
    ),
    'zendframework/zend-tag' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a9f92a01157dac2ce20bf5d5de2291b1294d3f88',
    ),
    'zendframework/zend-test' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e2d81410af33c092a2916e77cbdfa3b6dc1bf1b',
    ),
    'zendframework/zend-text' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41e32dafa4015e160e2f95a7039554385c71624d',
    ),
    'zendframework/zend-uri' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfc4a5b9a309711e968d7c72afae4ac50c650083',
    ),
    'zendframework/zend-validator' => 
    array (
      'pretty_version' => '2.11.1',
      'version' => '2.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c28dfe4e5951ba38059cea895244d9d206190b3',
    ),
    'zendframework/zend-version' => 
    array (
      'pretty_version' => '2.5.1',
      'version' => '2.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e30c55dc394eaf396f0347887af0a7bef471fe08',
    ),
    'zendframework/zend-view' => 
    array (
      'pretty_version' => '2.11.4',
      'version' => '2.11.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8b1b2d9b52e191539be861a6529f8c8a0c06b9d',
    ),
    'zendframework/zend-xmlrpc' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '97e7d70d71b040c8fc94807a911ee9a53dc35ef5',
    ),
    'zendframework/zendframework' => 
    array (
      'pretty_version' => '2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aeb432d59410cd9a4a68166738745387a9bf49ab',
    ),
    'zendframework/zendxml' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eceab37a591c9e140772a1470338258857339e00',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
